<?php 

header('Content-Type: application/json');
require './config/conn.php';

function _getNumRowsOS($nama){

      $sql = "SELECT COUNT(os) AS Total  FROM counter WHERE os='$nama'";
      $run = mysql_query($sql);
      $data = array();
      $res = mysql_fetch_assoc($run);

      return $res['Total'];

}

$sql = "SELECT DISTINCT LEAST(browser, os) AS Browser , GREATEST(os, browser) AS OS FROM counter";
$run = mysql_query($sql);
$all = array();
while($res = mysql_fetch_assoc($run)){

      $all[] = array(
            "OS" => $res['OS'],
            "Browser" => $res['Browser'],
            "count" => _getNumRowsOS($res['OS'])
      );

}

// $data = array(
//       "data" => $all
// );

echo json_encode($all);

?>