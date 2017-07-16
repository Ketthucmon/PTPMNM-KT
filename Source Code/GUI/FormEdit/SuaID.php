<?php $idtv = $_GET["idtv"];
//lấy dữ liệu ID
require("../../Data/Connect.php");
$sqllay="select * from QuanLy.Login inner join QuanLy.ChucVu on QuanLy.ChucVu.MaCV=QuanLy.Login.MaCV where MaDN='$idtv'";
$stmtx = db2_prepare($conn, $sqllay);	
$result = db2_execute($stmtx);             
?>
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Thông Tin ID	</td>
                </tr>
                 <tr height="50">
                	<td class="form" width="150px"><label>Tài Khoản:</label></td>
                    <td class="form"><font color=#00C><?php echo "$idtv";?></font></td><!-- Textbox ID -->
                </tr>  
                <?php  while ($rowx = db2_fetch_array($stmtx)) {?>
                  <tr height="50">
                	<td class="form"><label>Mật khẩu:</label></td>
                    <td class="form"><input type="text" name="pass" value="<?php echo"$rowx[1]";?>" /></td><!-- Textbox Pass -->
                </tr>  

                <tr height="50">
                	<td class="form"><label>Họ</label></td>
                    <td class="form"><input type="text" name="ho" value="<?php echo"$rowx[2]";?>" /></td><!-- Textbox Ho -->
                </tr>
                <tr height="50">
                	<td class="form"><label>Tên</label></td>
                    <td class="form"><input type="text" name="ten" value="<?php echo"$rowx[3]";?>" /></td><!-- Textbox Ten-->
                </tr>
                  <tr height="50">
                	<td class="form"><label>Giới Tính:</label></td><!-- Radio giới tính-->
                  <td class="form">Nam:<input type="radio" name="gt" value="1" <?php if($rowx[4]==1){ ?>checked="checked" <?php }?>  />
                    Nữ:<input type="radio" name="gt" value="2" <?php if($rowx[4]!=1) {?> checked="checked" <?php } ?>/></td>
                </tr>
                  <tr height="50">
                	<td class="form"><label>Năm Sinh</label></td>
                    <td class="form"><input type="text" name="ns" value="<?php echo"$rowx[5]";?>" /></td><!-- Textbox Năm Sinh -->
                </tr>
                  <tr height="50">
                	<td class="form"><label>Số Điện Thọai</label></td>
                    <td class="form"><input type="text" name="sdt" value="<?php echo"$rowx[6]";?>" /></td><!-- Textbox SDT -->
                </tr>
                <tr height="50">
                	<td class="form"><label>Địa Chỉ</label></td>
                    <td class="form"><input type="text" name="dc" value="<?php echo"$rowx[7]";?>" /></td><!-- Textbox Địa Chỉ -->
                </tr>
                
                  <tr height="50">
                	<td class="form"><label>Email</label></td>
                    <td class="form"><input type="text" name="email" value="<?php echo"$rowx[8]";?>" /></td><!-- Textbox Email -->
                </tr>   
                <tr height="50">
                   <td class="form"><label>Chức Vụ</label></td><!--Combobox chuc vu-->
                   <td class="form">
                <?php
                //Kết nối dữ liệu chức vụ
                	require("../../Data/Connect.php");
                	if($conn){    
                		$SQL= "SELECT * FROM QuanLy.ChucVu";	
                		$stmt = db2_prepare($conn, $SQL);
                		
                		if ($stmt) {		
                			$result = db2_execute($stmt);
                		
                	        
                ?>
                	<select name="cv">
                      <option 
                          value="<?php print "$rowx[9]";?>"> <?php  print "$rowx[11]"; ?> 
                      </option> 
                    <?php  
                    while ($row = db2_fetch_array($stmt)) {
                       ?>
                      <option 
                        value="<?php print "$row[0]";?>"> <?php  print "$row[1]";} ?> 
                      </option> 
                            <?php
                             }}}
                             ?>
                  </select>
                </td>
             </tr>                      
             <tr height="50">
               	<td class="form"><input type="submit" name="sua" value="Sửa ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
             </tr>
             <tr height="50">     
                <td class="form" colspan="2">         
              <?php
              require("../../XuLy/XuLySua/suaid.php");//Triệu gọi sửa id
              	?></td></tr>
       </table>
</form>