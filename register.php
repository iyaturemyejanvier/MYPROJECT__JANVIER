<?php
include'connect.php';
if(isset($_POST['insert'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    //if(!$username||!$pass){
       // echo 'input  required';
    //}
    //$sel=mysqli_query($con,"SELECT * FROM users WHERE username='$username'");
    //if($sel){
       // echo'username already exists';
    //}
   // else{
    $insert=mysqli_query($con,"INSERT INTO  users VALUES('','$username','$pass')");
        if(!$insert){
        echo 'account creation failed';
            }
        else{
        header('location:retrieve.php');
          }
//}
}
?>
<form method='POST'>
    <label>username:</label>
    <input type="text" name='username'><br><br>
    <label>password:</label>
    <input type="password" name='password' id='password'><br><br>
    <input type='checkbox' id='showpassword'>show password<br><br>
    <a href='login.php' style="text-decoration:none">Login</a>
    <input type='submit'name='insert'>  
    </form>
    <script>
        document.getElementById("showpassword").addEventListener('Change',function(){
            const changeInput=document.getElementById('password');
            changeInput=this.Checked?'Text':'password';
        });
    </script>