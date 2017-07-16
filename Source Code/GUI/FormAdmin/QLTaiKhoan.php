
<!-- CSS table -->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>

   <?php
   require("../../Data/Connect.php");//kết nối CSDL
	  $abcd = "SELECT * FROM QuanLy.Login INNER JOIN  QuanLy.ChucVu ON QuanLy.Login.MaCV=QuanLy.ChucVu.MaCV ";//câu lệnh SQL
	  $stmt = db2_prepare($conn, $abcd);//kết nối SQL
		
		if ($stmt) {		
			$result = db2_execute($stmt);//thực hiện SQL
       if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
   ?>
    <table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="10">Quản lý tài khoản </td> 
                </tr>
               
				      <tr>	
                <td align="justify" id="info" ><h5>User</h5></td>
                <td align="justify" id="info" ><h5>Pass</h5></td>
                <td align="justify" id="info"><h5> Quyền hạn</h5></td>
                <td align="justify" id="info"><h5>Họ tên</h5></td>
                <td align="justify" id="info"><h5>Giới Tính</h5></td>    
                <td align="justify" id="info"><h5>Năm Sinh</h5></td>          
                <td align="justify" id="info"><h5>Số Điện Thoại</h5></td>
                <td align="justify" id="info"><h5>Địa Chỉ</h5></td>
                <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themid">Thêm</a></td>
              </tr>
<?php 
				while ($row = db2_fetch_array($stmt)) {
				?>
                 <tr><!-- Show dữ liệu Bảng Tài khoản-->
                 <td align="justify" id="info" ><h5><?php echo "$row[0]";?></h5></td>
                 <td align="justify" id="info"><h5><?php echo "$row[1]";?></h5></td>
                  <td align="justify" id="info" width="60px"><h5><?php echo "$row[11]";?> </h5></td>
                  <td align="justify" id="info"><h5><?php echo "$row[2] $row[3]";?></h5> </td>
                  <td align="justify" id="info"><h5><?php if ($row[4]==1)echo "Nam"; else echo "Nữ";?> </h5></td>
                  <td align="justify" id="info"><h5><?php echo "$row[5]";?></h5> </td>
                  <td align="justify" id="info"><h5><?php echo "$row[6]";?></h5> </td>
                  <td align="justify" id="info"><h5><?php echo "$row[7]";?></h5> </td>
                 <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=suaid&idtv=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoaid&idtv=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>
		