<?php
$errors=0;
//Lấy và kiêm tra thông tin từ form
	if(isset($_POST["them"])){
	
	if($_POST["masach"]){
		$masach= $_POST["masach"];
	}else{
		$errors=1;
	}
	if($_POST["tensach"]){
		$tensach = $_POST["tensach"];
	}
	else{
		$errors = 2;
	}
	if($_FILES["image_upload"]["name"]){
		$image_name = $_FILES["image_upload"]["name"];
		$image_path = $_FILES["image_upload"]["tmp_name"];
	}
	else{
		$errors = 3;
	}
	if($_POST["tentl"]){
		$tentl = $_POST["tentl"];
	}
	else{
		$errors = 4;
	}
	if($_POST["tennxb"]){
		$tennxb = $_POST["tennxb"];
	}
	
	if($_POST["gia"]){
		$gia = $_POST["gia"];
	}
	else{
		$errors = 6;
	}
	if($_POST["tomtat"]){
		$tomtat= $_POST["tomtat"];
	}
	else{
		$errors = 7;
	}
	if($_POST["tacgia"]){
		$tacgia = $_POST["tacgia"];
	}
	else{
		$errors = 8;
	}

	if($errors == 0)
	{
		//Kết nối thêm vào CSDL sách
		require("../../Data/Connect.php");
			if($conn)
				{   
				$new_image_path = "../Sach/".$image_name;
		       $image_upload = move_uploaded_file($image_path, $new_image_path);
				$dem=0;
				    $SQL2= "SELECT * FROM Sach.Sach";	
				    $SQL1= "INSERT INTO Sach.Sach values('$masach','$tensach','$image_name','$tentl','$tennxb',$gia,'$tomtat','$tacgia')";
					 $stmt1 = db2_prepare($conn, $SQL2);	//kết nối truy vấn
					$stmt = db2_prepare($conn, $SQL1);
                   
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$masach"){//Bắt lỗi trùng Mã
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã sách $masach đã tồn tại </font> </i></td></tr>";
							else {
								  if ($stmt) {		
								  $result = db2_execute($stmt);//thực hiện với DB2
								  if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
						 			if ($result) {
                               			 echo"<td><b><font color=#00C> Đã thêm vào thành công </font></b></td></tr>";
                               		    }
									}
								}
                            }
                    }
                }
		}
		//bắt lỗi thông tin
		  else {if($errors=="Email không đúng định dạng") echo "<td> <i><font color=#F00>- $error -</font></i></td></tr>";
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";
		  }
	}
?>