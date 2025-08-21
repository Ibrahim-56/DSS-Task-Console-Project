<?php 
session_start();
if (isset($_SESSION['role']) && isset($_SESSION['id']) && $_SESSION['role'] == "admin") {
    include "DB_connection.php";
    include "app/Model/User.php";
    
    if (!isset($_GET['id'])) {
    	 header(header: "Location: user.php");
    	 exit();
    }
    $id = $_GET['id'];
    $user = get_user_by_id(conn: $conn, id: $id);

    if ($user == 0) {
    	 header(header: "Location: user.php");
    	 exit();
    }

     $data = array($id, "employee");
     delete_user(conn: $conn, data: $data);
     $sm = "Deleted Successfully";
     header(header: "Location: user.php?success=$sm");
     exit();

 }else{ 
   $em = "First login";
   header(header: "Location: login.php?error=$em");
   exit();
}
 ?>