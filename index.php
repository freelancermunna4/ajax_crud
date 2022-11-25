<?php include('include/functions.php'); 

header("location:home.php");



//============session&cookie========//
// if(!session_start()){session_start();}  
// if(isset($_SESSION['user_id'])){
//   $id = $_SESSION['user_id'];
//   if($id>0){
//     header('location:home.php');
//   }
// }
// if(isset($_COOKIE['user_id'])){
//   $id = $_COOKIE['user_id'];
//   if($id>0){
//     header('location:home.php');
//   }
// }

//============Sign Up========//
// $msg="";
// if(isset($_POST['submit'])){
//  $phone = $_POST['phone'];
//  $u_pass = md5($_POST['pass']);
//  $u_cpass = md5($_POST['cpass']);
//  $time = time(); 
 
//  $sign_check = "SELECT * FROM user_info WHERE phone='$phone'";
//  $sign_query = mysqli_query($conn,$sign_check);
//  $sign_query = mysqli_fetch_assoc($sign_query);
//  if($sign_query>0){
//      $msg = "You have an Account! Please login or forgot.";
//  }else{
//      $insert = "INSERT INTO user_info(phone,pass,time) VALUE('$phone','$u_pass','$time')";
//      $insert_query = mysqli_query($conn,$insert);
//      if($insert_query){
//          $sql = "SELECT * FROM user_info WHERE phone='$phone' AND pass='$u_pass'";
//          $result = mysqli_query($conn,$sql);
//          $row = mysqli_fetch_assoc($result);
//          if($row>0){
//           $id = $row['id'];
//           $_SESSION['user_id'] = $id;
//           setcookie('user_id', $id , time()+86000);
//           header('location:home.php');
//       } 
//      }else{
//          $msg= "Somethings error!";
//      }
//  }
//  }

// //============login========//
// if(isset($_POST['submit'])){
//   $phone =$_POST['phone'];
//   $pass = md5($_POST['pass']); 
//           $row = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user_info WHERE phone='$phone' AND pass='$pass'"));
//           if($row>0){
//               $id = $row['id'];
//               $_SESSION['user_id'] = $id;
//               setcookie('user_id', $id , time()+86000);
//               header('location:home.php');
//           }else{
//               $msg = "You have no account! Please Sign Up.";
//           } 
// }



//============Other code start here========//
// $query = _fetchAll("brand");
// $query = _fetch("SELECT * FROM brand");

// $query = _getAll("brand");
// $query = _get("brand","id=8");

// $query = _deleteAll("brand","id=7");
// $query = _delete("brand",7);

// $query = _insert("brand","name","'value'");
// $query = _update("brand","name='munna'","id=8");

// $query = _query("DELETE FROM brand WHERE id=15");


?>
    <!--===== main page content =====-->




    <!--===== main page content =====-->