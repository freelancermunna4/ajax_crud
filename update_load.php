<?php include("include/functions.php");


$hid = $_POST['hid'];
$ename = $_POST['ename'];
$eemail = $_POST['eemail'];

$update = _update("ajax","name='$ename',email='$eemail'","id=$hid");
if($update){
    echo 1;
}else{
    echo 0;
}

?>