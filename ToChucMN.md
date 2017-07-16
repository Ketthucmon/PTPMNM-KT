<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhTL/00.png" /><br/>
<center><H2>TÀI LIỆU TỔ CHỨC MÃ NGUỒN TRANG WEB QUẢN LÝ CỬA HÀNG SÁCH</H2></center>
<hr/></br>
<p>Tài liệu này được xây dựng bởi các thành viên:</br>
                      -Nguyễn Đăng Khoa</br>
                      -Nguyễn Văn Thắng</br>
                      -Bùi Nguyễn Hồng Phúc</br>
 	                    -Phạm Thị Mỹ Linh</p></br>
Page FB:<link> https://www.facebook.com/groups/316257808844305/</link></br>                      
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhTL/10.png" /><br/>
<hr/>
<p><H4>Trang Web được viết theo mô hình 3 Layer</H4></p>
<p><H4>1.Khái niệm 3 Layer </H4><br/>
Để dễ quản lý các thành phần của hệ thống, cũng như không bị ảnh hưởng bởi các thay đổi, người ta hay nhóm các thành phần có cùng chức năng lại với nhau và phân chia trách nhiệm cho từng nhóm để công việc không bị chồng chéo và ảnh hưởng lẫn nhau. Một trong những mô hình lập trình như vậy đó là Mô hình 3 lớp (Three Layers).</br>

Mô hình 3 lớp được cấu thành từ: Presentation Layers, Business Logic Layers, và Data Access Layers.</br>
<center><img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhTCMN/01.png" /></center><br/>
<H5>Presentation Layers:</H5></br>
Lớp này làm nhiệm vụ giao tiếp với người dùng cuối để thu thập dữ liệu và hiển thị kết quả/dữ liệu thông qua các thành phần trong giao diện người sử dụng. Trong .NET thì bạn có thể dùng Windows Forms, ASP.NET hay Mobile Forms để hiện thực lớp này.</br>
<H5>Business Logic Layer:</H5></br>
Đây là layer xử lý chính các dữ liệu trước khi được đưa lên hiển thị trên màn hình hoặc xử lý các dữ liệu trước khi chuyển xuống Data Access Layer để lưu dữ liệu xuống cơ sở dữ liệu.</br>
Đây là nơi đê kiểm tra ràng buộc, các yêu cầu nghiệp vụ, tính toán, xử lý các yêu cầu và lựa chọn kết quả trả về cho Presentation Layers.</br>
<H5>Data Access Layer:</H5></br>
Lớp này thực hiện các nghiệp vụ liên quan đến lưu trữ và truy xuất dữ liệu của ứng dụng như đọc, lưu, cập nhật cơ sở dữ liệu.</br>
<H5>Cách vận hành của mô hình:</H5></br>
- Đầu tiên User giao tiếp với Presentation Layers (GUI) để gửi đi thông tin và yêu cầu. Tại layer này, các thông tin sẽ được kiểm tra, nếu OK chúng sẽ được chuyển xuống Business Logic Layer (BLL).</br>
- Tại BLL, các thông tin sẽ được nhào nặn, tính toán theo đúng yêu cầu đã gửi, nếu không cần đến Database thì BLL sẽ gửi trả kết quả về GUI, ngược lại nó sẽ đẩy dữ liệu (thông tin đã xử lý) xuống Data Access Layer (DAL).</br>
- DAL sẽ thao tác với Database và trả kết quả về cho BLL, BLL kiểm tra và gửi nó lên GUI để hiển thị cho người dùng.</br>
- Một khi gặp lỗi (các trường hợp không đúng dữ liệu) thì đang ở layer nào thì quăng lên trên layer cao hơn nó 1 bậc cho tới GUI thì sẽ quăng ra cho người dùng biết.</br>
- Các dữ liệu được trung chuyển giữa các Layer thông qua một đối tượng gọi là Data Transfer Object (DTO), đơn giản đây chỉ là các Class đại diện cho các đối tượng được lưu trữ trong Database.</br>

</p>
<p><H4>2.Tổ chức 3 Layer của Website cửa hàng sách</H4><br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhTCMN/02.png" /><br/>
<H5>Chi tiết tổ chức mã nguồn</H5></br>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhTCMN/03.png" /><br/>
<img src="https://github.com/Ketthucmon/PTPMNM-KT/blob/master/AnhTCMN/04.png" /><br/>
</p>
