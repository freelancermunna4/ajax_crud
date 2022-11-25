<?php include("include/functions.php");


$name = $_POST['name'];
$email = $_POST['email'];


$insert = _insert("ajax","name,email","'$name','$email'");
if($insert){
    echo 1;
}else{
    echo 0;
}


















?>