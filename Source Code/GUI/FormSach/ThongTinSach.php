<!-- CSS table -->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>


   <?php
   //Kết nối với bảng thông tin sách
   require("../../Data/Connect.php");
	  $abcd = "SELECT * FROM  Sach.Sach inner join SAch.NXB on Sach.Sach.maNXB=Sach.NXB.manxb inner join SAch.TheLoai on Sach.Sach.MaTL=Sach.TheLoai.MaTL";
	  $stmt = db2_prepare($conn, $abcd);
		
		if ($stmt) {		
			$result = db2_execute($stmt);
       if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
   ?>
   <!-- Bảng Sách -->
    <table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="10">Quản lý kho sách </td> 
              </tr>
               
				      <tr>         	
                 <td align="justify" id="info" ><h5>Mã Sách</h5></td>
                 <td align="justify" id="info" ><h5>Tên Sách</h5></td>
                 <td align="justify" id="info"><h5>Ảnh Sách</h5></td>
                 <td align="justify" id="info"><h5>Tên Thể Loại</h5></td>
                 <td align="justify" id="info"><h5>Tên NXB</h5></td>
                 <td align="justify" id="info"><h5>Giá</h5></td>
                 <td align="justify" id="info"><h5>Tác Giả</h5></td>
                 <td align="justify" id="info"><h5>Tóm Tắt</h5></td>
                 <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themsach">Thêm</a></td>
              </tr>
       <?php 
				while ($row = db2_fetch_array($stmt)) {
			 ?>
              <tr><!-- Show thông tin Sách-->
                 <td align="justify" id="info" ><h5><?php echo "$row[0]";?></h5></td>
                 <td align="justify" id="info"><h5><?php echo "$row[1]";?></h5></td>
                 <td align="justify" id="info" ><img width="90px" height="80px" src="../sach/<?php echo "$row[2]";?>"/> </td>
                 <td align="justify" id="info" ><h5><?php echo "$row[12]";?></h5></td>
                 <td align="justify" id="info" ><h5><?php echo "$row[9]";?></h5></td>
                 <td align="justify" id="info" ><h5><?php echo "$row[5]";?></h5></td>
                 <td align="justify" id="info" ><h5><?php echo "$row[7]";?></h5></td>
                 <td align="justify" id="info" ><h5><?php echo "$row[6]";?></h5></td>
                 <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=suasach&idtv=<?php echo"$row[0]";?>">Sửa</a></td>
                 <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoasach&idtv=<?php echo"$row[0]";?>">Xóa</a></td>
              </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>
		