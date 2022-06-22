<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/connectDB.php'; 
$id=$_GET['id'];
if(isset($_SESSION['user'])){
        $query="DELETE FROM users WHERE id={$id}";
        $result = mysqli_query($conn,$query);
        if($result){
        header("location:/info_Ly.php?msg=Đã xóa thành công");
		}else{
        echo'Đã xảy ra lỗi khi xóa';
		}
}
?>