<?php
session_start();
ob_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/connectDB.php'; 

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query="SELECT * FROM users WHERE username='{$username}'AND password='{$password}'";
    $ketqua = mysqli_query($conn,$query);
    $arUser= mysqli_fetch_assoc($ketqua);
    if($arUser!=''){
        $_SESSION['user']=array(
            'username'=> $username,
            'is_login'=> 'true');
        header("location:/info_Ly.php");
    }else{
        echo'Vui lòng đăng nhập';
    }
}
ob_end_flush();
?>
Form Login
<form action="" method="post">
    <label>Username: </label> <input type="text" name="username" style="width:100px;height:17px;"/><br>
    <label>Password: </label> <input type="password" name="password" style="width:100px;height:17px;"/><br>
    <button type="submit" name="submit">Login</button>
</form>
