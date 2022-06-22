<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/connectDB.php'; 
if(isset($_SESSION['user'])){
if(isset ($_GET['msg'])){
	echo $_GET['msg'];
}
?>
<h3><a href="/add_Ly.php">Thêm user</a> </h3>
<table>
    <tr>
        <th>ID</th>
        <th>Tên người dùng</th>
        <th>Mật khẩu</th>
		<th>Action</th>
		
    </tr>
    <?php
        $query="SELECT * FROM users";
        $result = mysqli_query($conn,$query);
        while($array=mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $array['id'];?></td>
        <td><?php echo $array['username'];?></td>
        <td><?php echo $array['password'];?></td>
		<td><a href="/edit_Ly.php?id=<?php echo $array['id'];?>">Sửa</a> <a href="/delete_Ly.php?id=<?php echo $array['id'];?>">Xóa</a></td>
		
    <?php   }?>
    </tr>
</table>
<?php

}
?>