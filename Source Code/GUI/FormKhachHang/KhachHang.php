<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Login</title>

<link rel="stylesheet" type="text/css" href="../css/KhachHang.css">
</head>

<body>
       
<script type="text/javascript" src="http://www.trungtamtinhoc.edu.vn/api/snowstorm.js"></script>
<table id="thanhkeo" width="900px" border="0px" cellpadding="0px" cellspacing="0px">
	<tr>
    	<td colspan="2" id="header">
        	<table border="0px" cellpadding="0px" cellspacing="0px">
            	<tr>
                	<td width="247" rowspan="2"><img src="../img/cuochop.jpeg" width="248" height="204" /></td>
                    <td width="652"><img src="../img/head.jpg" width="652" height="171" /></td>
                </tr>
                <tr>
                    <td height="30px" id="navbar">
                    	<table height="30px" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr>
                            	<td><a href="../../login.php">Đăng Nhập Trang Quản Trị</a></td>
                              	<td><a href="../../TrangChu.php">Trang Chủ</a></td>
                                
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
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr class="bg-leftbar" height="36px">
                	<td colspan="2">Đăng Nhập Hệ Thống </td>
                </tr>
  <?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if((!$_SESSION["user"]) && (!$_SESSION["pass"])){?>
<form method="POST">
<tr>
      <td width="97" id="info" >UserName:</td>
      <td width="240"><input type="text" name="user" />        <br /> </td>
  </tr>
<tr> <td id="info"> Password:</td>
  <td><input type="password" name="pass" /></td></tr>

  <tr>
 <td><input type="submit" name="submitname" value="Login" /> </td>
 <td><input type="reset"  name="reset_name" value="Return" /></td>
  </tr>
  <tr> <td id="info" colspan="2">
  <img src="../img/anh.png" width="250px"/></td></tr>

</form>
<?php 
}else{header("location:../../XuLy/XuLyVaoRa/dangxuat.php"); }
require("../../XuLy/XuLyVaoRa/KiemTrakh.php");
?>
            </table>
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr class="bg-leftbar" height="36px">
                	<td>Hệ Thống</td>
                </tr>
                <tr height="30px">
                	<td id="user-info">Xin chào đến với hệ thống.</td>
                </tr>
                <tr height="30px">
                	<td id="logout" align="right"><a href="khachhang.php?page=taonich">Tạo tài khoản</a></td>
                </tr>
            </table>
           
 <td align="right" valign="top" width="650px">
                        <?php
           error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		    switch($_GET["page"]){
			case "taonich": include_once("../../XuLy/XuLyTaoTK/taonich.php");
			break;
			case "chucmung": include_once("chucmung.php");
			break;
			default: include_once("KhuyenCao.php");
			}
			?>
        
        </td>    
                          
           
<div id='ads-left'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; left:0; top:0;'>
<a href='' target='_blank'><img border='0' height='665' src="../img/quangcao3.gif" width='180'/></a>
</div></div>
<div id='ads-right'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; right:0; top:0;'>
<a href='' target='_blank'><img border='0' height='660' src="../img/quangcao6.gif" width='180'/></a>
</div></div>
</body>
</html>
