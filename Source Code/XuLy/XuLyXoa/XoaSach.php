<?php
$idtv = $_GET["idtv"];//lấy thông tin mã xóa
	require("../../Data/Connect.php");
$sql = "DELETE FROM Sach.Sach WHERE masach= '$idtv'";//thực hiện xóa
$stmt = db2_prepare($conn, $sql);
		
		if ($stmt) {		
			$result = db2_execute($stmt);

header("location:admin.php?page=ttsach");//load lại trang
		}
?>