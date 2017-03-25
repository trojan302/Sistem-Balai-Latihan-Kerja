<?php

require './config/function.php';

//setting header to json
header('Content-Type: application/json');

/**
 * [$setData Prepare Statement SQL untuk memilih data]
 * @var string
 */
$setData = "SELECT DISTINCT LEAST(bulan, tahun) as Tahun , GREATEST(tahun, bulan) as Bulan from chartPeserta";
/**
 * [$runSetData Variable yang menampung exekusi query pada SQL]
 * @var [mysql function]
 */
$runSetData = mysql_query($setData);
/**
 * [$data Blank Array untuk menampung data yang dipilih]
 * @var array
 */
$data = array();
/**
 * [$dataSet menampung SQL function untuk membuat result berupa Array Assosiatif]
 * @var array
 */
while($dataSet = mysql_fetch_assoc($runSetData)){
	/**
	 * [$chekin Prepare Statement SQL untuk memilih data berdasarkan kondisi]
	 * @var string
	 * WHERE => Peng-kondisi-an dalam pemilihan data,
	 * 			pemilihan data ini sendiri berada di dalam WHILE LOOP
	 * 			bertujuan untuk memisahkan masing - masing baris Array Assosiatif
	 */
	$chekin = "SELECT DISTINCT Bulan, COUNT(*) AS Total, tahun AS Tahun FROM chartPeserta WHERE bulan='".$dataSet['Bulan']."'";
	$runData = mysql_query($chekin);
	$settings = mysql_fetch_assoc($runData);

	$data[] = $settings;
}


$QCounter = "SELECT ip,os,browser FROM counter";
$runCounter = mysql_query($QCounter);
$dataCounter = array();
while($setCounter = mysql_fetch_assoc($runCounter)){

	$dataCounter[] = $setCounter;

}

$jsonData = array(
	"counter" => $dataCounter,
	"hitCounter" => hitCounter(),
	"mendaftar" => jumlahMendaftar(),
	"terdaftar" => jumlahTerdaftar(),
	"peserta" => $data
);


// echo hitCounter();
// echo jumlahMendaftar();
// echo jumlahTerdaftar();


//now print the data
print json_encode($jsonData);