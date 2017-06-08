<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
        <a href="http://www.wunderground.com/global/stations/
        48877.html?bannertypeclick=gizmotimetemp"> <img src="http://banners.wunderground.com/
        weathersticker/gizmotimetemp_both/language
        /www/global/stations/48877.gif" border=0 
        alt="Click for Nha Trang, Viet Nam Forecast"
        height=41 width=127></a>
<script type="text/javascript" src="http://www.trungtamtinhoc.edu.vn/api/snowstorm.js"></script>
<table id="thanhkeo" width="900px" border="0px" cellpadding="0px" cellspacing="0px">
	<tr>
    	<td colspan="2" id="header">
        	<table border="0px" cellpadding="0px" cellspacing="0px">
            	<tr>
                	<td width="247" rowspan="2"><img src="img/cuochop.jpg" width="247" height="202" /></td>
                    <td width="652"><img src="img/head.jpg" width="652" height="171" /></td>
                </tr>
                <tr>
                    <td height="30px" id="navbar">
                    	<table height="30px" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr>
                            	<td><a href="#">trang chủ</a></td>
                              	<td><a href="#">giới thiệu</a></td>
                                <td><a href="#">Sách</a></td>
                                <td><a href="#">Thông tin liên hệ</a></td>
                                <td><a href="#">Sơ đồ nhà sách</a></td>
                                <td><a href="#">Trợ giúp</a></td>
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
</form>
<?php 
}else{header("location:dangxuat.php"); }

error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if($_POST["submitname"]){
   if($_POST["user"] && $_POST["pass"]){
      $user =$_POST["user"];
      $pass =$_POST["pass"];
      $database="Sach";
$userdb2="db2admin";
$passdb2="1234567";
$conn=db2_connect($database,$userdb2,$passdb2);
      if ($conn)
            {
$SQL = "SELECT * FROM user_quanly.nhanvien where idnv='$user' and pass='$pass'" ;
	  $stmt = db2_prepare($conn, $SQL); 
      if ($stmt) {
      $result = db2_execute($stmt);
      if (!$result) {
         echo "exec errormsg: " .db2_stmt_errormsg($stmt);
                    }
					if($result)
					{
		   $_SESSION["user"] = $user;
		   $_SESSION["pass"] = $pass;
      while ($row = db2_fetch_array($stmt)) {
           if ($row[6]=="CV01")   header("location:admin.php");
		   else
		   if ($row[6]=="CV02")   header("location:sach.php");
		   else
		   if ($row[6]=="CV03")   header("location:ketoan.php");
		   else
		   if ($row[6]=="CV04")   header("location:banhang.php");
				}
					}
    	           } 
   else {
         echo "exec errormsg: " . db2_stmt_errormsg($stmt);
   }   }
       else {
	        echo"<script> alert('Tài khoản không hợp lệ !')</script> " ;
	       }
           }
}

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
                	<td id="logout" align="right"><a href="login.php?page=taonich">Tạo tài khoản</a></td>
                </tr>
            </table>
 <td align="right" valign="top" width="650px">
                        <?php
           error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		    switch($_GET["page"]){
			case "taonich": include_once("taonich.php");
			break;
			case "chucmung": include_once("chucmung.php");
			break;
			default: include_once("gioithieu.php");
			}
			?>
        
        </td>    
                          
           
<div id='ads-left'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; left:0; top:0;'>
<a href='' target='_blank'><img border='0' height='665' src="img/quangcao2.gif" width='200'/></a>
</div></div>
<div id='ads-right'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; right:0; top:0;'>
<a href='' target='_blank'><img border='0' height='665' src="img/quangcao2.gif" width='200'/></a>
</div></div>
</body>
</html>
