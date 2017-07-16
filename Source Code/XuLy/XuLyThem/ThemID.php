<?php
$errors=0;
//lấy dữ liệu từ form
	if(isset($_POST["them"])){
	
	if($_POST["user"]){
		$user= $_POST["user"];
	}else{
		$errors=1;
	}
	if($_POST["pass"]){
		$pass = $_POST["pass"];
	}
	else{
		$errors = 2;
	}
	if($_POST["ho"]){
		$ho = $_POST["ho"];
	}
	else{
		$errors = 3;
	}
	if($_POST["ten"]){
		$ten = $_POST["ten"];
	}
	else{
		$errors = 4;
	}
	if($_POST["gt"]){
		$gt = $_POST["gt"];
	}
	
	if($_POST["ns"]){
		$ns = $_POST["ns"];
	}
	else{
		$errors = 6;
	}
	if($_POST["sdt"]){
		$sdt= $_POST["sdt"];
	}
	else{
		$errors = 7;
	}
	if($_POST["dc"]){
		$dc = $_POST["dc"];
	}
	else{
		$errors = 8;
	}
	if($_POST["email"]){
		
        $email = $_POST["email"];
	}
	else{
		$errors = 9;
	}
	if($_POST["cv"]){
	 $cv=$_POST["cv"];
	}
	if($errors == 0)//nếu không có dòng nào lỗi
	{
		//Thực hiện CSDL
		require("../../Data/Connect.php");

			if($conn)
				{   $dem=0;
					//Tạo SQL
				    $SQL2= "SELECT * FROM QuanLy.Login";	
				    $SQL1= "INSERT INTO QuanLy.Login values('$user','$pass','$ho','$ten',$gt,$ns,'$sdt','$dc','$email',$cv)";
					//Kết nối SQL
					 $stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
                   
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$user"){//bắt lỗi trùng khóa
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã nhân viên $user đã tồn tại </font> </i></td></tr>";//thông báo lỗi
							else {
								  if ($stmt) {		
								  $result = db2_execute($stmt);
								  if (!$result) {
										echo "exec errormsg: " .db2_stmt_errormsg($stmt);
										}	
						 			if ($result) {
                               			 echo"<td><b><font color=#00C> Đã thêm vào thành công </font></b></td></tr>";//thông báo thành công
                               		    }
									}
								}
                            }
                    }
                }
		}
		  else {if($errors=="Email không đúng định dạng") echo "<td> <i><font color=#F00>- $error -</font></i></td></tr>";
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi
		  }
	}
	?>