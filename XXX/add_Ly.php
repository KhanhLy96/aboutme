<?php
session_start();
ob_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/connectDB.php'; 
if(isset($_SESSION['user'])){ 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query="INSERT INTO users(username, password) VALUES ('{$username}','{$password}')";
    $ketqua = mysqli_query($conn,$query);
    if($ketqua){
        header("location:/info_Ly.php?msg=Đã thêm thành công");
    }else{
        echo'Đã xảy ra lỗi khi thêm';
    }
}
}
ob_end_flush();
?>
Form Add User 
<form action="" method="post">
    <label>Username: </label> <input type="text" name="username" style="width:100px;height:17px;"/><br>
    <label>Password: </label> <input type="password" name="password" style="width:100px;height:17px;"/><br>
    <button type="submit" name="submit">Add</button>
</form>