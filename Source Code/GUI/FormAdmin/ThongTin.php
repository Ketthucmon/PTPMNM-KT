<?php 
$user=$_SESSION["user"];//user đã đăng nhập
$pass=$_SESSION["pass"];
 require("../../Data/Connect.php");//kết nối CSDL
	   $abcd = "SELECT * FROM QuanLy.Login INNER JOIN  QuanLy.ChucVu ON QuanLy.Login.MaCV=QuanLy.ChucVu.MaCV where madn='$user'";//câu lệnh SQL
	  $stmt = db2_prepare($conn, $abcd);//kết nối câu lệnh SQL
	  if ($stmt) {		
			$result = db2_execute($stmt);//thực hiện SQL
       if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}
?>

<table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
    <tr id="main-navbar" height="36px"class="menu-item" >
        <td colspan="7">thông tin tài khoản</td>
    </tr>
    <?php 
			while ($row = db2_fetch_array($stmt)) {
		?>
    <!-- Show dữ liệu Thông tin người dùng gồm tên cột và dữ liệu-->
     <tr><td align="justify" id="info"><em>Tài khoản:</em> </td><td id="info"><?php echo "$row[0]";?></td></tr>
     <tr><td align="justify" id="info"><em>Mật khẩu:</em></td><td id="info"><?php echo "$row[1]";?></td></tr>
     <tr><td align="justify" id="info"><em>Chức vụ:</em></td><td id="info"><?php echo "$row[11]";?> </td></tr>
     <tr><td align="justify" id="info"><em>Họ tên:</em></td><td id="info"><?php echo "$row[2] $row[3]";?> </td></tr>
     
     <tr><td align="justify" id="info"><em>Giới tính:</em></td><td id="info"><?php if($row[4]==true ) echo "Nam";
     else echo "Nữ";?> </td></tr>
     <tr><td align="justify" id="info"><em>Năm Sinh:</em></td><td id="info"><?php echo "$row[5]";?> </td>
     <tr><td align="justify" id="info"><em>Số điện thoại:</em></td><td id="info"><?php echo "$row[6]";?> </td></tr>
     <tr><td align="justify" id="info"><em>Email:</em></td><td id="info"><?php echo "$row[8]";?> </td>
     </tr>
     <tr><td align="justify" id="info"><em>Địa Chỉ:</em></td><td id="info"><?php echo "$row[7]";?> </td>
     </tr>
     <?php } 
		   } else { echo"<script>alert(\"Chưa có dữ liệu !\")</script>";}
      ?>
</table>