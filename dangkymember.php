<?php
	
		$connect_db = mysql_connect("localhost", "root", "");
		$select_db = mysql_select_db("hocmysql", $connect_db);
		$set_lang = mysql_query("SET NAMES 'utf8'");
		$sql = "SELECT * FROM phong_hop";
		$query = mysql_query($sql);
?>		
<?php
	
		$connect_db = mysql_connect("localhost", "root", "");
		$select_db = mysql_select_db("hocmysql", $connect_db);
		$set_lang = mysql_query("SET NAMES 'utf8'");
		$sql1 = "SELECT * FROM thanh_vien";
		$query1 = mysql_query($sql1);
?>		
            <form method="POST" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Đăng ký lịch họp</td>
                </tr>
                
                    <tr>
                	<td class="form"><label>Phòng </label><br><select name="phong">
                 
                    <option value="">Tên phòng</option>
                    <?php
				  while($row=mysql_fetch_array($query)){
				  ?>
         <option value="<?php echo"$row[id_phong]";?>"><?php echo"$row[tenphong]";?></option>
              <?php }?>
                    </select>
                  
                    </td></tr>
                <tr height="50">
                	<td class="form"><label>Ngày</label><br><input type="date" name="ngay" /></td>
                </tr>
                <tr height="50">
                	<td class="form"><label>Thời gian bắt đầu</label><br>
                    <select name="thoigianbd">
                    <option value="">Thời gian bắt đầu</option>
                    <option value="1">7:00:00</option>
                    <option value="2">7:30:00</option>
                    <option value="3">8:00:00</option>
                    <option value="4">8:30:00</option>
                    <option value="5">9:00:00</option>
                    <option value="6">9:30:00</option>
                    <option value="7">10:00:00</option>
                    <option value="8">10:30:00</option>
                    <option value="9">11:00:00</option>
                    <option value="10">11:30:00</option>
                    <option value="11">12:00:00</option>
                    <option value="12">12:30:00</option>
                    <option value="13">13:00:00</option>
                    <option value="14">13:30:00</option>
                    <option value="15">14:00:00</option>
                    <option value="16">14:30:00</option>
                    <option value="17">15:00:00</option>
                    <option value="18">15:30:00</option>
                    <option value="19">16:00:00</option>
                    <option value="20">16:30:00</option>
                    <option value="21">17:00:00</option>
                    <option value="22">17:30:00</option>
                    <option value="23">18:00:00</option>
                    <option value="24">18:30:00</option>
                    </select>
                    </td>
                </tr>
                         <tr height="50">
                	<td class="form"><label>Thời gian sử dụng</label><br>
                     <select name="thoigiansd">
                    <option value=""> Thời gian sử dụng</option> 
                    <option value="1">30 phút</option>
                    <option value="2">1 tiếng</option>
                    <option value="3">1 tiếng 30 phút</option>
                    <option value="4">2 tiếng</option>
                    <option value="5">2 tiếng 30 phut</option>
                    <option value="6">3 tiếng</option>
                    <option value="7">3 tiếng 30 phút</option>
                    <option value="8">4 tiếng</option>
                    </select>
                    </td>
                </tr>                               
                <tr height="50">
                	<td class="form"><input type="submit" name="submitname" value="Thêm lịch" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
            </table>
            </form>
<?php 
	  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
if($_POST["submitname"]){
	$ngay=$_POST["ngay"];
    $phong=$_POST["phong"];
	$user=$_SESSION["user"];
	$tgbd=$_POST["thoigianbd"];
	$tgsd=$_POST["thoigiansd"];
	$connect_db = mysql_connect("localhost","root", "");
      $select_db= mysql_select_db("hocmysql",$connect_db);
      $set_lang=mysql_query("SET NAME 'utf8'");
	   $sql7 ="SELECT * FROM thanh_vien";
	   	$query7 = mysql_query($sql7);
		while($row7=mysql_fetch_array($query7)){
			if($row7[tai_khoan]==$user)
			$user=$row7[id_thanhvien];
		}
	$now = getdate(); 
	$trangthai=1;
	$tght= $now["year"] . "-" . $now["mon"] . "-" . $now["mday"] .  " " .  $now["hours"] . ":" . $now["minutes"] . ":" . $now["seconds"] ;
	
	  $connect_db = mysql_connect("localhost","root", "");
      $select_db= mysql_select_db("hocmysql",$connect_db);
      $set_lang=mysql_query("SET NAME 'utf8'");
	   $sql4 ="SELECT * FROM lich_phong";
	   	$query4 = mysql_query($sql4);
		$idlich=1;
		while($row1=mysql_fetch_array($query4)){
		$idlich=$row1[id];
		}
		$idlich++;
	 $ss=25; 
	  $connect_db = mysql_connect("localhost","root", "");
      $select_db= mysql_select_db("hocmysql",$connect_db);
      $set_lang=mysql_query("SET NAME 'utf8'");
	  $sql6 = "SELECT * FROM lich_phong";
	  $query2 = mysql_query($sql6); 
	  $num_row= mysql_num_rows($query2);
	 
	if($num_row>0)
	  {$dem1=0;
	  while($row2=mysql_fetch_array($query2)){
      if(($row2[ngay] == $ngay)&&($row2[id_phong] == $phong))
	    {  if($row2[id_bd]==$tgbd )
		    {  
			   echo"<script> alert('thoi gian nay phong dang co nguoi dung')</script> " ;
				echo "<meta http-equiv=\"refresh\" content=\"0;url=bai1.php?page=phongdangky\">";
			    $dem1++;
			}else{
		  if($row2[id_bd]<$tgbd ){
			if(($row2[id_bd]+$row2[id_sd])>$tgbd)
	        { echo"<script> alert('thoi gian nay phong dang co nguoi dung')</script> " ;
	echo "<meta http-equiv=\"refresh\" content=\"0;url=bai1.php?page=phongdangky\">";
			$dem1++;
			}}else{
			 if($row2[id_bd]>$tgbd ){
			 if(($tgbd + $tgsd)>$row2[id_bd])
	        { 
			echo"<script> alert('thoi gian nay phong van co nguoi dung ! Xem lai lich de dang ky')</script> " ;
	        echo "<meta http-equiv=\"refresh\" content=\"0;url=bai1.php?page=phongdangky\">";
			$dem1++;
			}
			                         }
				  }
		 }
			                               }
	                                         
	                                        }
             if(($tgbd + $tgsd)> $ss)	
			  { echo"<script> alert('thoi gian nay he thong se dong cua ! Xem lai lich de dang ky')</script> " ;
			echo "<meta http-equiv=\"refresh\" content=\"0;url=bai1.php?page=phongdangky\">";
			$dem1++;
			  }   
	                                         
	    if($dem1==0){
	  	$connect_db = mysql_connect("localhost", "root", "");
		$select_db = mysql_select_db("hocmysql", $connect_db);
		$set_lang = mysql_query("SET NAMES 'utf8'");
		$sql5 = "INSERT INTO lich_phong(id, ngay, id_bd, id_sd ,id_phong , id_thanhvien , id_trangthai,thoigian_dk) 
		VALUES('$idlich', '$ngay','$tgbd','$tgsd','$phong','$user','$trangthai','$tght')";
		$query5 = mysql_query($sql5);
		header("location:bai1.php?page=phongdangky");
		}
	  }
	  
}
?>
