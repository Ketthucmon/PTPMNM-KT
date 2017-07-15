<center><b>TÀI LIỆU HƯỚNG DẪN SỬ DỤNG TRANG WEB QUẢN LÝ CỬA HÀNG SÁCH</b></center>
<hr/></br>
<p>Tài liệu này được xây dựng bởi các thành viên:</br>
                      -Nguyễn Đăng Khoa</br>
                      -Nguyễn Văn Thắng</br>
                      -Bùi Nguyễn Hồng Phúc</br>
 	                    -Phạm Thị Mỹ Linh</p></br>
<hr/>
<p><h>1.	Hướng dẫn thao tác CSDL  IBM- DB2</h><br/>
-	Link download : </br>
<link>https://www.ibm.com/developerworks/downloads/im/db2express/</link><br/>
-	Sau khi download thực hiện quá trình cài đặt <br/>
<dd>+ Giao diện cài đặt – click vào Install a product – Next –Next .</dd>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/image/hinhTLHD/hinh1.png" />
+ Tới phần này điền User và mật khẩu ( cần phải ghi nhớ để sử dụng về sau).<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/image/hinhTLHD/hinh2.png" />
+ Cuối cùng đợi Finish hoàn thành cài đặt<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/image/hinhTLHD/hinh3.png" />
-	Tiếp theo khởi động DB2 Commad Line sẽ ra giao diện </br>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/image/hinhTLHD/hinh4.png" />
-	Tạo CSDL Sach ( Create database Sach) đợi khoảng 5-7 phút<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/image/hinhTLHD/hinh5.png" />
-	Sau đó thực hiện connect với CSDL Sach (connect to Sach)<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/image/hinhTLHD/hinh6.png" />
-	Thực hiện các đoạn Code Script đã cung cấp lưu ý thực hiện từng dòng vì đây là CSDL DB2 command Line  . Ví dụ :<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/image/hinhTLHD/hinh7.png" />
	Trên đây là toàn bộ hướng dẫn về CSDL DB2 liên quan đến trang web quản lý cửa hàng sách , các thắc mắc các bạn có thể truy cập link bên dưới để biết thêm kiến thức về CSDL DB2:<br/>
<link>https://www.ibm.com/developerworks/vn/library/contest/dw-freebooks/Nhap_Mon_DB2_ExpressC/Nhap_mon_DB2_ExpressC_v9.7.pdf </link>


</p><br/>
<hr/>
<p>
<h>2.	Hướng dẫn cài đặt Web Server (Apache) trong bộ cài đặt Xampp</h><br/>
-	Cần lưu ý cài đặt xampp và bản vá hỗ trợ IBM DB2 tương ứng <br/>
<link>https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/5.5.38/ </link><br/>
<link>http://php.net/manual/en/book.ibm-db2.php  </link><br/>
-	Sau khi cài đặt xampp đừng vội khởi động sớm trước tiên hãy giải nén file IBM ra trước<br/>
-	Bỏ file vừa gải nén vào c:/xampp/php/etc,  sau đó thêm dòng này extension = php_ibm_db2.dll vào dưới dòng extension=php_gettext.dll của file c:/xampp/php/php.ini . Do chỉ có bản cũ này mới có link ibm phù hợp.<br/>
-	Hãy thử test với đoạn code sau để xem kết nối có thành công không<br/>
<table>
    <
    ?php

    $database="SAMPLE";
    

    $user="db2admin";//user bạn điền ở phần cài đặt db2
    

    $pass="1234567";//pass bạn điền ở phần cài đặt db2
    

    $con=db2_connect($database,$user,$pass);
    

    if($con)

    {

      echo "thanh con roi";

      db2_close($con);

    }

    else

    echo "that bai";

    ?>
 
</table>
-	Tạo file test.php  trong htdocs với nội dung code như trên , sau đó khởi động xampp , start Apache .<br/>
-	Mở trình duyệt web lên truy cập ( localhost/test.php) nếu thành công có nghĩa là xampp đã kết nối với CSDL DB2 .<br/>
-	Sau đó Download source Code của Web đã cung cấp bỏ vào htdocs , chạy localhost/WebSach/login . Tiếp tục với các tính năng của trang Web.<br/>


</p>
