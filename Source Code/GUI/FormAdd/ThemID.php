
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm ID	</td>
                </tr>  
                <tr height="50">
                	<td class="form" width="150px"><label>Tên tài khoản:</label></td>
                    <td class="form"><input type="text" name="user" /></td><!-- Textbox User-->
                </tr> 
                  <tr height="50">
                	<td class="form"><label>Mật khẩu:</label></td>
                    <td class="form"><input type="text" name="pass" /></td><!-- Textbox Pass -->
                </tr>  
       <tr height="50">
                	<td class="form"><label>Họ</label></td>
                    <td class="form"><input type="text" name="ho" /></td><!-- Textbox Họ-->
                </tr>
                <tr height="50">
                	<td class="form"><label>Tên</label></td>
                    <td class="form"><input type="text" name="ten" /></td><!-- Textbox Ten-->
                </tr>
                  <tr height="50">
                	<td class="form"><label>Giới Tính:</label></td>
                    <td class="form">Nam:<input type="radio" name="gt" value="1" checked="checked" />
                    Nữ:<input type="radio" name="gt" value="2" /></td>
                </tr>
                  <tr height="50">
                	<td class="form"><label>Năm Sinh</label></td>
                    <td class="form"><input type="text" name="ns" /></td><!-- Textbox NS-->
                </tr>
                  <tr height="50">
                	<td class="form"><label>Số Điện Thọai</label></td>
                    <td class="form"><input type="text" name="sdt" /></td><!-- Textbox SDT-->
                </tr>
                <tr height="50">
                	<td class="form"><label>Địa Chỉ</label></td>
                    <td class="form"><input type="text" name="dc" /></td><!-- Textbox DiaChi-->
                </tr>
                
                  <tr height="50">
                	<td class="form"><label>Email</label></td>
                    <td class="form"><input type="text" name="email" /></td><!-- Textbox Email-->
                </tr>   
                <tr height="50"><!-- Combobox Chức vụ-->
                   <td class="form"><label>Chức Vụ</label></td>
                   <td class="form">
                <?php
                //Kết nối bảng dữ liệu chức vụ
                  	require("../../Data/Connect.php");
                  	if($conn){    
                  		$SQL= "SELECT * FROM QuanLy.ChucVu";	
                  		$stmt = db2_prepare($conn, $SQL);
                  		
                  		if ($stmt) {		
                  			$result = db2_execute($stmt);	        
                  ?>
                  <select name="cv" >
                                      <?php  
                      while ($row = db2_fetch_array($stmt)) {
                    ?>
                              <option 
                                    value="<?php print "$row[0]";?>"> <?php  print "$row[1]";//show dữ liệu chức vụ
                                    } ?> 
                              </option> 
                                          <?php }}?>
                </select>
                </td> </tr>                      
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Thêm ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                   <td class="form" colspan="2">   
                <?php 
                require("../../XuLy/XuLyThem/themid.php"); //triệu gọi xứ lý thêm
                ?>     
              </td>
              </tr>
            </table>
            </form>
