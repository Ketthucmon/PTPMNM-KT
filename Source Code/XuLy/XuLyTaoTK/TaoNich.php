
	   <form method="post" enctype="multipart/form-data">
            <table width="640px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Đăng Ký Tài Khoản</td>
                </tr>
                <tr height="50">
                	<td class="form" width="150px"><label>Mã Khách Hàng:</label></td>
                    <td class="form"><input type="text" name="makh" /></td>
                </tr>                
                <tr height="50">
                	<td class="form">Pass:</td>
                    <td class="form"><input type="text" name="pass"/></td>
                </tr>
                <tr height="50">
                	<td class="form">Tên Khách Hàng:</td>
                    <td class="form"><input type="text" name="tenkh" /></td>
                </tr>                            
                             <tr height="50">
                	<td class="form">Địa Chỉ:</td>
                    <td class="form"><input type="text" name="dc" /></td>
                </tr>     
                            <tr height="50">
                	<td class="form">Email:</td>
                    <td class="form"><input type="text" name="email" /></td>
                </tr>      
                            <tr height="50">
                	<td class="form">Số Điện Thoại</td>
                    <td class="form"><input type="text" name="sdt" /></td>
                </tr>    
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Đăng Ký" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
  <tr height="50">     
  <td class="form" colspan="2">         
<?php
$errors=0;
	if(isset($_POST["them"])){
	
	if($_POST["makh"]){
		$makh= $_POST["makh"];
	}else{
		$errors=1;
	}
	if($_POST["pass"]){
		$pass = $_POST["pass"];
	}else{
		$errors=2;
	}
	if($_POST["tenkh"]){
		$tenkh = $_POST["tenkh"];
	}
	else{
		$errors = 3;
	}
	if($_POST["dc"]){
		$dc = $_POST["dc"];
	}
	else{
		$errors = 4;
	}
	if($_POST["email"]){
		$email = $_POST["email"];
	}
	else{
		$errors = 5;
	}
	if($_POST["sdt"]){
		$sdt = $_POST["sdt"];
	}
	else{
		$errors = 6;
	}
	if($errors == 0)
	{
		require("../../Data/Connect.php");
			if($conn)
				{   $dem=0;
				    $SQL2= "SELECT * FROM BanHang.Khachhang";	
				    $SQL1= "INSERT INTO BanHang.Khachhang values('$makh','$pass','$tennxb','$dc','$email','$sdt')";
					 $stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
                   
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$makh"){
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã khách hàng $makh đã tồn tại </font> </i></td></tr>";
							else {
								  if ($stmt) {		
								  $result = db2_execute($stmt);
								  if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
						 			if ($result) {
                               			 header("Location:khachhang.php?page=chucmung");
                               		    }
									}
								}
                            }
                    }
                }
		}
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";
		  
	}
	?></td></tr>
            </table>
            </form>
