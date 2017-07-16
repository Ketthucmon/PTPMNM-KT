<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if($_POST["login"]){//nếu nút login được click
   if($_POST["user"] && $_POST["pass"]){ // kiểm tra text field
   
      $user =$_POST["user"];//lấy dữ liệu text field
      $pass =$_POST["pass"];
require("Data/Connect.php");//chuỗi kết nối
 if ($conn)
            {//kiểm tra đăng nhập
$SQL = "SELECT * FROM QuanLy.Login where MaDN='$user' and pass='$pass'" ;//câu lệnh truy vấn
	  $stmt = db2_prepare($conn, $SQL); //kết nối truy vấn với DB
      if ($stmt) {
      $result = db2_execute($stmt);//thực hiện truy vấn
      
					if($result)
					{
		   $_SESSION["user"] = $user;//ghi lại thông tin đăng nhập vào hệ thống
		   $_SESSION["pass"] = $pass;
      while ($row = db2_fetch_array($stmt)) {//duyệt cột truy vấn được
           if ($row[9]==1)   header("location:GUI/FormAdmin/admin.php");// chuyển trang
		   else
		   if ($row[9]==2)  header("location:GUI/FormKeToan/ketoan.php"); 
		   else
		   if ($row[9]==3)  header("location:GUI/FormSach/sach.php"); 
		   else
		   if ($row[9]==4)   header("location:GUI/FormBanHang/banhang.php");
	              }
		echo"<script> alert('Tài khoản không hợp lệ !')</script> " ;//bắt lỗi truy cập
					}
			}
    	           }
           }
}
?>
