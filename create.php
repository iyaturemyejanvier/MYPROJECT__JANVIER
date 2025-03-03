<?php
include 'connect.php';
if(isset($_POST['create'])){
    $name=$_POST['name'];
    $regdate=date('Y-m-d');
    $expdate=date('Y-m-d',strtotime('+1month'));
    if($expdate>$regdate){
        echo'the product is expered';
    }
    $insert=mysqli_query($con,"INSERT INTO product(name,regdate,expdate) VALUES('$name','$regdate','$expdate')");
    if(!$insert){
        echo 'product created failed';
    }
    else{
        header('location:register.php');
    }
}
?>
<form method='POST'>
    <label>product name:</label>
    <input type='text' name='name' ><br><br>
    <label>RegDate:</label>
    <input type='date' name='regdate' value="<?php echo $regdate;?>"><br><br>
   
<input type='submit' name='create'>
</form>