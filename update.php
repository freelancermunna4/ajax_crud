<?php include('common/header.php');?>
<?php
$eid = $_POST['eid'];

$data = _fetch("SELECT * FROM ajax WHERE id=$eid");
$name = $data['name'];
$email = $data['email'];
?>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <tr>
        <td><input id="ename" style='padding:10px' id='modal_name' type='text' value='<?php echo $name;?>'></td>
        <td><input id="eemail" style='padding:10px' id='modal_email' type='text' value='<?php echo $email;?>'></td>
    </tr>
    <br>
    <br>
    <br>
    <input id="hid" type="hidden" value="<?php echo $eid;?>">
    <input id="update_btn" type="submit" value="Update"/>