<?php

$dbc=mysql_connect('localhost','root','');
if(!$dbc){
    echo "can not connect";
}else
{
    mysqli_set_charset($dbc,'utf8');
    
}


?>