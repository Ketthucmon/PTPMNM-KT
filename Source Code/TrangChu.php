<!--Khởi động biến   -->
<?php
ob_start();
session_start();
?>

<!--Thông Tin Cấu tạo Của Trang  -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Login</title>

<link rel="stylesheet" type="text/css" href="GUI/css/Trangchu.css">
</head>
<body>


 <!--Tạo nền page tuyết bay  -->
<script type="text/javascript" src="http://www.trungtamtinhoc.edu.vn/api/snowstorm.js"></script>


<!--Tạo bảng để dàng thiết kế giao diện  -->
<table id="thanhkeo" width="900px" border="0px" cellpadding="0px" cellspacing="0px">
	<tr>
    	<td colspan="2" id="header">
        	<table border="0px" cellpadding="0px" cellspacing="0px">
            	<tr>
                <!-- Tạo ảnh cho header -->
                	<td width="247" rowspan="2"><img src="GUI/img/cuochop.jpeg" width="248" height="204" /></td>
                    <td width="652"><img src="GUI/img/head.jpg" width="652" height="171" /></td>
                </tr>
                <tr>
                    <td height="30px" id="navbar">
                    	
                        <table height="30px" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr>
                            <!-- Các thông tin bổ trợ liên kết-->
                            	<td><a href="Login.php">Đăng Nhập Trang Quản Trị</a></td><!-- Link Page login-->
                              	<td><a href="GUI/FormKhachHang/KhachHang.php">Đăng Nhập Mua Sắm</a></td><!-- Link Page khách hàng-->                               
                            </tr>
                        </table>                     
                    </td>
                </tr>
                <tr height="31px">
                	<td colspan="2" id="line-header"></td>
                </tr>
            </table>
        </td>
    </tr>
  
    <tr id="body">
    	<td align="left" valign="top" width="250px">
        	<!-- Left Menu -->
          
           
        <td align="right" valign="top" width="650px">
 <!--  Triệu gọi các trang liên quan-->
        <?php
           error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		    switch($_GET["page"]){			
			default: include_once("GUI/FormHome/Quangcao.php");
			}
		?>
        </td>    
                          
<!--  Ảnh gif quảng cáo-->          
<div id='ads-left'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; left:0; top:0;'>
<a href='' target='_blank'><img border='0' height='665' src="GUI/img/quangcao3.gif" width='180'/></a>
</div></div>
<div id='ads-right'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; right:0; top:0;'>
<a href='' target='_blank'><img border='0' height='660' src="GUI/img/quangcao6.gif" width='180'/></a>
</div></div>
</body>
</html>
