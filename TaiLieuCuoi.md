<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhTL/00.png" /><br/>
<center><H2>TÀI LIỆU HƯỚNG DẪN SỬ DỤNG TRANG WEB QUẢN LÝ CỬA HÀNG SÁCH</H2></center>
<hr/></br>
<p>Tài liệu này được xây dựng bởi các thành viên:</br>
                      -Nguyễn Đăng Khoa</br>
                      -Nguyễn Văn Thắng</br>
                      -Bùi Nguyễn Hồng Phúc</br>
 	                    -Phạm Thị Mỹ Linh</p></br>
Page FB:<link> https://www.facebook.com/groups/316257808844305/</link></br>                      
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhTL/10.png" /><br/>
<hr/>
<p><H4>1.	Hướng dẫn thao tác CSDL  IBM- DB2</H4><br/>
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
<H4>2.	Hướng dẫn cài đặt Web Server (Apache) trong bộ cài đặt Xampp</H4><br/>
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
<p>
<H4>3.	Sử dụng chức năng của trang web</H4><br/>
-DownLoad phần Source Code và phần Source Script CSDL DB2 ở <link> https://github.com/Ketthucmon/PTPMNM-KT</link>  <br/>
-Bỏ phần Source Code vào thư mục chứa Xampp/htdocs<br/>
-Chạy CSDL DB2 command Line processer lên thực hiện chạy từng đoạn lệnh source source script, lưu ý ở phần “ connect to Sach user db2admin “ – db2admin là tài khoản để bạn dùng để đăng nhập DB2.<br/>
-Sau khi chuẩn bị xong chúng ta sẽ bật trình duyệt lên , truy cập vào địa chỉ sau (localhost/WebCuaHangSach/TrangChu.php), trang web sẽ hiện lên như sau.<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhHD/01.png" /><br/>
-Thực hiện 2 chức năng đăng nhập ( quản trị hệ thống hoặc khách hang)<br/>
-Đăng nhập  quản trị để có trải nghiệm tính năng quản lý cửa hàng<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhHD/02.png" /><br/>
-	Giao diện trang Admin<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhHD/03.png" /><br/>
-	Thực hiện các chức năng của menu hệ thống ví dụ như (thêm, xóa , sửa ) bảng tài khoản , sách , ngày công,…<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhHD/04.png" /><br/>
-Ngoài ra còn các tính năng khác như in bảng lương sau khi tìm kiếm<br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhHD/05.png" /><br/>
</p>
