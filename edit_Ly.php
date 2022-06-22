<?php
session_start();
ob_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/connectDB.php';
$id=$_GET['id'];
if(isset($_SESSION['user'])){
    $query="SELECT * FROM users WHERE id={$id}";
    $result = mysqli_query($conn,$query);
	while($array=mysqli_fetch_assoc($result)){
?>

Form Edit User 
<form action="" method="post">
    <label>Username: </label> <input type="text" name="username" value="<?php echo $array['username'];?>" style="width:100px;height:17px;"/><br>
    <label>Password: </label> <input type="text" name="password" value="<?php echo $array['password'];?>" style="width:100px;height:17px;"/><br>
    <button type="submit" name="submit">Edit</button>
</form>
<?php
	}
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query="UPDATE users SET username='{$username}', password='{$password}' WHERE id={$id}";
    $ketqua = mysqli_query($conn,$query);
	if($ketqua){
        header("location:/info_Ly.php?msg=Đã sửa thành công");
    }else{
        echo'Đã xảy ra lỗi khi sửa';
    }

}
}

ob_end_flush();
?>