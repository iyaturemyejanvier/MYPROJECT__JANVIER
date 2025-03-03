<?php
include 'connect.php';
session_start();
if(isset($_POST['login'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $sel=mysqli_query($con,"SELECT *FROM users WHERE username='$username' AND password='$pass'");
    $fetch=mysqli_fetch_array($sel);
    if(mysqli_num_rows($sel)){
    if($fetch['username']===$username && $fetch['password']===$pass){
$_SESSION['username']=$fetch['username'];
header('location:register.php');
    }else{
    echo'login failed';
    }
}}
?>
<form method='POST'>
    <label>username:</label>
    <input type="text" name='username'><br><br>
    <label>password:</label>
    <input type="password" name='password' id='password'><br><br>
    <input type='checkbox' id='showpassword'>show password<br><br>
    <a href='register.php' style="text-decoration:none">create account</a>
    <input type='submit'name='insert'>  
    </form>
