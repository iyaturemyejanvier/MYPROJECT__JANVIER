<?php
//create connection
$con=mysqli_connect('localhost','root','','aschool');
//check connection
if(!$con){
    die('connection failed:'.mysqli_connect_error());
}
?>