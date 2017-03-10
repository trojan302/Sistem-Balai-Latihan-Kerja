<?php 

require './config/function.php';

//setting header to json
header('Content-Type: application/json');

function getCountMinat($id_kejuruan){
      $sql = "SELECT nama_kejuruan AS KEJURUAN, COUNT(peserta.nama) AS TOTAL FROM peserta INNER JOIN kejuruan ON peserta.id_kejuruan = kejuruan.id_kejuruan WHERE kejuruan.id_kejuruan='$id_kejuruan'";
      $cmd = mysql_query($sql);
      $result = mysql_fetch_assoc($cmd);

      return $result;
}

function getIdKejuruan(){

      $peserta = "SELECT DISTINCT id_kejuruan FROM peserta";
      $cmdPeserta = mysql_query($peserta);
      $data = array();
      while ($result = mysql_fetch_assoc($cmdPeserta)) {
            
            $data[] = $result['id_kejuruan'];

      }

      return $data;

}

$raw = array();

foreach (getIdKejuruan() as $id) {
      $raw[] = getCountMinat($id);
}

echo json_encode($raw);

?>