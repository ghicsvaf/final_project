<?php
$username = "root";
$password = "";
$conn= mysql_connect("localhost",$username,$password);
mysql_select_db("databaseforcmsblog",$conn);
mysql_set_charset( 'UTF8',$conn); 
?>