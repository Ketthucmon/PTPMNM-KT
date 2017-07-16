<?php
$errors=0;
	if(isset($_POST["sua"])){
// lấy dữ liệu từ form gán cho biến	
		$masach= $idtv;
	if($_POST["tensach"]){
		$tensach = $_POST["tensach"];
	}
	else{
		$errors = 2;
	}
	if($_FILES["image_upload"]["name"]){
		$image_name = $_FILES["image_upload"]["name"];
		$image_path = $_FILES["image_upload"]["tmp_name"];
		$new_image_path = "../Sach/".$image_name;
	    $image_upload = move_uploaded_file($image_path, $new_image_path);
	}
	else{
		$image_name = $_POST["hinh"];
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

	if($errors == 0)//kiểm tra có lỗi không
	
	{
		require("../../Data/Connect.php");//kết nối CSDL
			if($conn)
				{   $dem=0;
				//tạo truy vấn	    	
		$SQL1= "update  Sach.Sach set tensach='$tensach',Anhsach='$image_name',matl='$tentl',manxb='$tennxb',gia=$gia,tomtat='$tomtat',tacgia='$tacgia' where masach='$masach'";
				
					$stmt = db2_prepare($conn, $SQL1);
                   
					//thực hiện sửa
								  if ($stmt) {		
								  $result = db2_execute($stmt);
								  if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
						 			if ($result) {
                               			 echo"<td><b><font color=#00C> Đã sửa thành công </font></b></td></tr>";//thông báo thành công
                               		    }
									}
								}
                            }
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";  
	}
?>
