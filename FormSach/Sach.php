<!-- Khởi tạo biến-->
<?php
ob_start();
session_start();
?><!-- Thông tin cấu hình trang page-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="">
<title>Trang Quản Trị</title>
<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

<?php
if($_SESSION["user"] && $_SESSION["pass"]){//kiểm tra đã thực hiện đăng nhập chưa
?>
<table id="thanhkeo" width="900px" border="0px" cellpadding="0px" cellspacing="0px">
	<tr>
    <!--Cấu tạo Của Trang page sách -->
    	<td colspan="2" id="header">
        	<table border="0px" cellpadding="0px" cellspacing="0px">
            	<tr>
                  <!--Cấu tạo ảnh header  -->
                	<td width="247" rowspan="2"><img src="../img/cuochop.jpeg" width="248" height="204" /></td>
                    <td width="800"><img src="../img/head.jpg" width="785" height="171" /></td>
                </tr>
                <tr>
                    <td height="30px" id="navbar">
                    	<table height="30px" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr>
                            	<td><a href="#">--__--__--__--__--__--__--__--__--__Chào mừng đã đến với Cửa hàng sách Phương Nam --__--__--__--__--__--__--__--__--__--__--__--__--__--</a></td>
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
                	<td>Danh mục quyền hạn</td>
                </tr>
                <tr class="menu-item" height="30px">
                    <td height="29"><img width="30px" src="../images/trangchu.png"/><a href="sach.php?page=thongtinad"> trang chủ</a></td><!--Trang chủ -->
                </tr>
               
                               
                 <tr class="menu-item" height="30px">
                    <td> <img  width="30px" src="../images/nxb.png"/><a href="sach.php?page=ttnxb"> Đối tác Nhà Xuất Bản</a></td><!--link nxb -->
                </tr>
                 <tr class="menu-item" height="30px">
                    <td> <img  width="30px" src="../images/khosach.png"/><a href="sach.php?page=ttsach"> Thông tin Kho Sách</a></td><!--link sách -->
                </tr>
               
                 
                 <tr class="menu-item" height="30px">
                    <td> <img  width="30px" src="../images/user.png"/><a href="sach.php?page=ttnguoidung">Thông tin người dùng</a></td><!--Link người dùng -->
                </tr>
                <tr height="30px">
                    <td></td>
                </tr>

            </table>
             <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr class="bg-leftbar" height="36px">
                	<td>thông tin đăng nhập</td>
                </tr>
                <tr height="30px">
                	<td id="user-info">Xin chào <b><?php echo $_SESSION["user"]?></b>! Người Quản Lý Thông Tin Sách.</td>
                </tr>
                <tr height="30px">
                	<td id="logout" align="right"><a href="../../XuLy/XuLyVaoRa/dangxuat.php">đăng xuất</a></td>
                </tr>
            </table>
           
           
        </td>
            
  
        <td align="right" valign="top" width="650px">
   <?php
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		    switch($_GET["page"]){
			case "ttnguoidung": include_once("thongtin.php");//kết nối thông tin ngừi dùng
			break;
			case "qltk": include_once("qltaikhoan.php");//kết nối bảng tài khoản
			break;
			case "qlnc": include_once("qlngaycong.php");//kết nối bảng ngày công
			break;
			case "themnc": include_once("../FormAdd/themnc.php");//kết nối form thêm ngày công
			break;
			case "suanc": include_once("../FormEdit/suanc.php");//kết nối form sửa ngày công
			break;
			case "xoanc": include_once("../../XuLy/XuLyXoa/xoanc.php");//xử lý xóa ngày công
			break;
			case "ttluong": include_once("thongtinluong.php");//kết nối bảng lương
			break;
			case "ttnxb": include_once("thongtinnxb.php");//kết nối bảng nxb
			break;
			case "ttsach": include_once("thongtinsach.php");//kết nối thông tin sách
			break;
			case "tthoadon": include_once("thongtinhoadon.php");//kết nối thông tin hóa đơn
			break;
			case "ttkhachhang": include_once("thongtinkhachhang.php");//kết nối thông tin khách hàng
			break;
			case "ttnguoidung": include_once("thongtinnguoidung.php");//kết nối thông tin người dùng
			break;	
			case "suaid": include_once("../FormEdit/suaid.php");//kết nối form sửa id
			break;			
			case "themid": include_once("../FormAdd/themid.php");//kết nối form thêm id
			break;
			case "xoaid": include_once("../../XuLy/XuLyXoa/xoaid.php");//xử lý xóa id
			break;
	        case "themluong": include_once("../FormAdd/themluong.php");//gọi form them lương
			break; 
			case "sualuong": include_once("../FormEdit/sualuong.php");//gọi form sửa lương
			break;
			case "xoaluong": include_once("../../XuLy/XuLyXoa/xoaluong.php");//xử lý xóa
			break;
			case "themnxb": include_once("../FormAdd/themnxb.php");//form thêm nxb
			break;
			case "xoanxb": include_once("../../XuLy/XuLyXoa/xoanxb.php");//xử lý xóa
			break;
			case "suanxb": include_once("../FormEdit/suanxb.php");//gọi form sửanxb
			break;
			case "themsach": include_once("../FormAdd/themsach.php");//gọi form thêm sách
			break;
			case "suasach": include_once("../FormEdit/suasach.php");//gọi form sửa sách
			break;
			case "xoasach": include_once("../../XuLy/XuLyXoa/xoasach.php");//xử lý xóa
			break;
			case "themhd": include_once("../FormAdd/themhd.php");//gọi form thêm hóa đơn
			break;
			case "themcthd": include_once("../FormAdd/themcthd.php");//gọi form thêm chi tiêt hóa đơn
			break;
			case "suahd": include_once("../FormEdit/suahd.php");//gọi form sửa hóa đơn
			break;
			case "xoahd": include_once("../../XuLy/XuLyXoa/xoahd.php");//xử lý xóa hóa đơn
			break;
			case "themkh": include_once("../FormAdd/themkh.php");//thêm khách hàng
			break;
			case "suakh": include_once("../FormEdit/suakh.php");//xử lý sửa khách hàng
			break;
			case "xoakh": include_once("../../XuLy/XuLyXoa/xoakh.php");//xử lý xóa khách hàng
			break;
			default: include_once("thongtinad.php");//gọi thông tin page trang chủ
			}
		?>
        
        </td>
    </tr>
   

</table>              
<?php
}
else{
	header("location:login.php");// về lại trang login
	
}
?>
<div id='ads-left'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; left:0; top:0;'>
<a href='' target='_blank'><img border='0' height='665' src="../img/quangcao6.gif" width='140'/></a>
</div></div>

</body>
</html>
