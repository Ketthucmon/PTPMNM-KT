<?php 
$errors=0;
	if(isset($_POST["sua"])){
	
//lấy dữ liệu từ form gán cho biến	
		$user= $idtv;

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
	if($errors == 0)//kiêm tra có lỗi không
	{
        //Thực hiện sửa
		require("../../Data/Connect.php");//kết nỗi CSDL
			if($conn)
				{   $dem=0;
					//Tạo câu lệnh SQL
				    $SQL2= "SELECT * FROM QuanLy.Login";	
				    $SQL1= "update  QuanLy.Login set pass='$pass',ho='$ho',ten='$ten',gioitinh=$gt,namsinh=$ns,sdt='$sdt',diachi='$dc',emaill='$email',macv=$cv where madn='$user'";
					//Kết nối CSDL SQL
					$stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
					//xử lý thực hiện truy vấn
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
                    
		  else {if($errors=="Email không đúng định dạng") echo "<td> <i><font color=#F00>- $error -</font></i></td></tr>";
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi
		  }
	}
?>
