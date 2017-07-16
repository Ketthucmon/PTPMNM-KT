CHUẨN LẬP TRÌNH PHP
Quy tắc 1. PHP Tags
PHP code phải sử dụng tag đầy đủ <?php ?> (không nên dùng tag “<? ?>” hoặc short-echo <?= ?> tags). Trong một file chỉ bao gồm code PHP thì không được viết tag đóng “?>”.
Quy tắc 2. Canh lề - Indenting
Không dùng tab, mà phải sử dụng 4 dấu cách làm indent.
Quy tắc 3. Lines
Việc giới hạn số ký tự trên 1 dòng code nhằm giúp cho lập trình viên nhìn code được dễ dàng. Một dòng code nên chỉ có 80 ký tự và tối đa là 120 ký tự.
Quy tắc 4. Namespace và tên Class
Namespaces và tên classes phải tuân theo quy chuẩn "autoloading" của PSR
Điều này có nghĩa là mỗi class phải được viết vào một file, và phải có ý nhất 1 level trong namespace.
Tên class phải được viết dưới dạng StudlyCaps: Chữ cái đầu tiên viết hoa, các từ được kết hợp bởi chữ cái la tinh viết liền nhau. Được phân biệt với nhau bằng chữ viết hoa.
Code với phiên bản PHP 5.3 trở lên phải dùng đúng namespaces.
Quy tắc 5. Constants
Constants của class phải được viết hoa toàn bộ và sử dụng gạch dưới ngăn cách giữa các từ. 
Quy tắc 6. Properties
Tên các thuộc tính không nên sử dụng dấu gạch dưới “_” và cần thực hiện thống nhất.
Quy tắc 7. Method
Tên Method phải được viết dưới dạng camelCase.
Các method phải được khai báo với các từ : privated, protected, public. Không được bỏ trống và Static method phải được khai báo với theo độ ưu tiên của visibility trong script.
Quy tắc 8. Hàm, method và sử dụng
Tham số của hàm phải được cách bởi 1 kí tự khoảng trắng .
Nếu muốn truyền tham trị, thì phải đặt “&” ở trước biến trong phần khai báo hàm, khi đã sử dùng hàm không được thêm dấu “&” vào trước tham trị.
Quy tắc 9. If/ Else/ Elseif
Các câu điều kiện phải có 1 khoảng trắng ở giữa từ “if”, “elseif” và ngoặc mở “(“ . Thêm 1 khoảng trắng nữa giữa ngoặc đóng “)” và ngoặc cong “{“. Ở trong ngoặc đơn “()”, giữa 2 bên của các toán tử so sánh phải có khoảng trắng để dễ đọc. Ngoặc cong mở “{“ phải viết chung hàng với lệnh if . Ngoặc cong đóng phải ở hàng của riêng nó.
Quy tắc 10. Switch
Tương tự If/ Else/ Elseif, giữa chữ “switch” và ngoặc mở “(“phải có 1 khoảng trắng, và giữa ngoặc đóng “)” và “{“ phải có 1 khoảng trắng nữa. Ngoặc cong mở “{“ phải nằm chung hàng với if, và ngoặc cong đóng “}” phải nằm ở hàng của riêng nó. Tất cả các nội dung bên trog switch phải được thục dòng 4 khoảng trắng. Và nội dung của mỗi “case” phải được thục dòng thêm 4 khoảng trắng nữa!
Quy tắc 11. While/ Do …While/ For/ Foreach
-Cấu trúc While:
while ($expr) {
    // structure body
}
-Cấu trúc Do …While:
do {
    // structure body;
} while ($expr);
-Cấu trúc For:
<?php
for ($i = 0; $i < 10; $i++) {
    // for body
}
-Cấu trúc Foreach:
<?php
foreach ($iterable as $key => $value) {
    // foreach body
}

Quy tắc 12. Try… Catch
try {
    // try body
} catch (FirstExceptionType $e) {
    // catch body
} catch (OtherExceptionType $e) {
    // catch body
}
Quy tắc 13. Inline Documentation File
Trong mỗi file chứa PHP code, chúng ta phải có 1 block ở trên đầu file để miêu tả về file . Bạn có thể làm như sau :
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * LICENSE: Some license information
 *
 * @copyright  2006 Zend Technologies
 * @license    [url]http://www.zend.com/license/3_0.txt[/url]   PHP License 3.0
 * @version    $Id$
 * @link       [url]http://dev.zend.com/package/PackageName[/url]
 * @since      File available since Release 1.2.0
 */
Quy tắc 14. Inline Documentation Class
Tương tự như file class cũng vậy
/**
 * Short description for class
 *
 * Long description for class (if any)...
 *
 * @copyright  2006 Zend Technologies
 * @license    [url]http://www.zend.com/license/3_0.txt[/url]   PHP License 3.0
 * @version    Release: @package_version@
 * @link       [url]http://dev.zend.com/package/PackageName[/url]
 * @since      Class available since Release 1.2.0
 */
Quy tắc 15. Function
Với mỗi hàm, bao gồm cả các hàm được định nghĩa trong class, cần có 1 block gồm:
·         Miêu tả cơ bản về hàm
·         Tất cả các biến của hàm
·         Tất cả các giá trị trả về của hàm
·         Nếu 1 hàm hay 1 method trong class có “throw exception” thì dùng @throw
Quy tắc 17. Require và Include
Include, include_once, require, require_once không nên dùng () .




