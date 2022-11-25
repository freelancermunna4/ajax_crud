<?php include("include/functions.php");


$id = $_POST['id'];
$delete = _delete("ajax","$id");
if($delete){
    echo 1;
}else{
    echo 0;
}

?>