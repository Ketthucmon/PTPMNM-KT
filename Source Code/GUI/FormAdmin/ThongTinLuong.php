<!-- CSS table  -->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
   // thực hiện truy vấn nhung table lien quan toi lương
   require("../../Data/Connect.php");
	  $abcd = "SELECT *,month(NgayLuong) FROM  KeToan.Luong inner join QuanLy.Login on KeToan.Luong.MaDN=QuanLy.Login.MaDN inner join QuanLy.ChucVu on QuanLy.Chucvu.MaCV=QuanLy.Login.MaCV";
	  $stmt = db2_prepare($conn, $abcd);
		
		if ($stmt) {		
			$result = db2_execute($stmt);
       if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
   ?>
   <!-- Bảng Thông tin Lương  -->
    <table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="10">Quản lý ngày công </td> 
              </tr>
               
			       	<tr>
                  <td align="justify" id="info" >Mã Lương</td>
                  <td align="justify" id="info" >Tên Nhân Viên</td>
                  <td align="justify" id="info">Ngày Lương</td>
                  <td align="justify" id="info">Tháng</td>
                  <td align="justify" id="info">Vắng</td>
                  <td align="justify" id="info">Lương</td>
                  <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themluong">Thêm</a></td>
              </tr>
     <?php 
				while ($row = db2_fetch_array($stmt)) {
			?>
              <tr><!--Show  Bảng Thông tin Lương  -->
                 <td align="justify" id="info" ><?php echo "$row[0]";?></td>
                 <td align="justify" id="info"><?php echo "$row[5] $row[6]";?></td>
                 <td align="justify" id="info" ><?php echo "$row[2]";?></td>
                 <td align="justify" id="info" ><?php $row[17]--; echo "$row[17]";?></td>
                 <?php 
        				  
        				   $ngayvang=0;
        				   $abcd1 = "SELECT count(MaDN) from QuanLy.DiemDanh where MaDN='$row[1]' and month(ngayvang)=$row[17] group by MaDN";
        	         $stmt1 = db2_prepare($conn, $abcd1);           		
                    		if ($stmt1) {		
                    			$result1 = db2_execute($stmt1);
                           if (!$result1) {
                    				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
                    			}	
                    			while ($row1 = db2_fetch_array($stmt1)) {
                    			$ngayvang=$row1[0];
                    			}
                    		}
        				  ?>
                 <td align="justify" id="info" ><?php echo "$ngayvang";?></td> 
                  <?php 
                			  $luong=0;
                			  $luong=(30-$ngayvang)/30*1500*$row[15]+$row[16]*1000;//Tính Lương
        			    ?>
                 <td align="justify" id="info" ><?php echo "$luong VND";?></td>    
                 <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=sualuong&idtv=<?php echo"$row[0]";?>">Sửa</a></td>
                 <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoaluong&idtv=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>

		
