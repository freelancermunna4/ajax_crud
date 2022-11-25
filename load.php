<?php include('common/header.php');?>
<?php
$data = _getAll("ajax");
    $output = "";
    $output = "<table border='1px solid gray' width='100%'>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>";
        while($row = mysqli_fetch_assoc($data)){
            $output .= "<tr>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td style='text-align:center;'>
            <a id='edit_btn' data-eid='{$row["id"]}'>Edit</a>
            <a id='delete_btn' data-id='{$row["id"]}'>Delete</a>
            </td>
            </tr>";
        }
    $output .= "</table>";
    echo $output;
?>