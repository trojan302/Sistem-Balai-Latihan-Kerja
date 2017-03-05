<?php 


define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBMS', 'project_blk');


mysql_connect(HOST,USER,PASS)or die('Server not connected!');
mysql_select_db(DBMS)or die('Database not selected!');


?>