<?php $idtv = $_GET["idtv"];
//kế nối dữ liệu Sách
require("../../Data/Connect.php");
$sqllay="select * from Sach.Sach inner join Sach.Theloai on Sach.Sach.matl= Sach.Theloai.matl inner join  Sach.NXB on Sach.NXB.manxb=Sach.Sach.manxb  where masach='$idtv'";
$stmtx = db2_prepare($conn, $sqllay);	
			$result = db2_execute($stmtx);
 ?>
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Thông Tin Sách</td>
                </tr>
                 <tr height="50">
                	<td class="form" width="150px"><label>Mã Sách:</label></td>
                    <td class="form"><font color=#00C><?php echo "$idtv";?></font></td><!-- Textbox Mã  -->
                </tr>  
                <?php  while ($rowx = db2_fetch_array($stmtx)) {?>
                  <tr height="50">
                	<td class="form"><label>Tên Sách:</label></td>
                    <td class="form"><input type="text" name="tensach" value="<?php echo"$rowx[1]";?>" /></td><!-- Textbox Sách-->
                </tr>  

                <tr height="50">
                	<td class="form"><label>Ảnh Sách :<?php echo"$rowx[2]";?> </label></td><!-- Textbox Ảnh Sách -->
                    <td class="form"><input type="file" name="image_upload" accept="image/*" onchange="loadFile(event)"><input  type="hidden" name="hinh"  value="<?php echo"$rowx[2]";?>"/>
                    <img id="output" width="90px" height="80px" />
                    <script>
                      var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                      };
                    </script>
                    </td>
                </tr>
                 <tr height="50"><!-- Combobox Email -->
                   <td class="form"><label>Tên Thể Loại</label></td>
                   <td class="form">
                <?php
                    	require("../../Data/Connect.php");
                    	if($conn){    
                    		$SQL= "SELECT * FROM Sach.TheLoai";	
                    		$stmt = db2_prepare($conn, $SQL);
                    		
                    		if ($stmt) {		
                    			$result = db2_execute($stmt);
                    		
                    	        
                    ?>
                                    	<select name="tentl">
                                <option 
                                value="<?php print "$rowx[8]";?>"> <?php  print "$rowx[9]"; ?> 
                                                </option> 
                                        <?php  
                        while ($row = db2_fetch_array($stmt)) {
                      ?>
                       <option 
                                                    value="<?php print "$row[0]";?>"> <?php  print "$row[1]";} ?> 
                                                </option> 
                                                <?php }}?>
                      </select>
                </td> 
              </tr>    
              <tr height="50">
                   <td class="form"><label>Tên NXB</label></td>
                   <td class="form">
                <?php
                        	require("../../Data/Connect.php");
                        	if($conn){    
                        		$SQL= "SELECT * FROM Sach.NXB";	
                        		$stmt = db2_prepare($conn, $SQL);
                        		
                        		if ($stmt) {		
                        			$result = db2_execute($stmt);
                        		
                        	        
                        ?>
                     <select name="tennxb">
                                    <option 
                                    value="<?php print "$rowx[11]";?>"> <?php  print "$rowx[12]"; ?> 
                                                    </option> 
                                            <?php  
                            while ($row = db2_fetch_array($stmt)) {
                          ?>
                           <option 
                                                        value="<?php print "$row[0]";?>"> <?php  print "$row[1]";} ?> 
                                                    </option> 
                                                    <?php }}?>
                    </select>
                      </td> 
                </tr>                   
                <tr height="50">
                	<td class="form"><label>Giá:</label></td>
                  <td class="form"><input type="text" name="gia" value="<?php echo"$rowx[5]";?>" /></td>
                </tr>     
                <tr height="50">
                	<td class="form"><label>Tóm Tắt:</label></td>
                  <td class="form"><input type="text" name="tomtat" value="<?php echo"$rowx[6]";?>" /></td>
                </tr>     
                <tr height="50">
                	<td class="form"><label>Tác Giả:</label></td>
                  <td class="form"><input type="text" name="tacgia" value="<?php echo"$rowx[7]";}?>" /></td>
                </tr>               
                <tr height="50">
                	<td class="form"><input type="submit" name="sua" value="Sửa ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                  <td class="form" colspan="2">         
                  <?php
                  require("../../XuLy/XuLySua/suasach.php");
                  	?></td></tr>
  </table>
</form>