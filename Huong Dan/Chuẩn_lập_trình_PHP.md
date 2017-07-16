<H2>CHUẨN LẬP TRÌNH PHP</H2>
<H3>Quy tắc 1. PHP Tags</H3>
<table>PHP code phải sử dụng tag đầy đủ <?php ?> (không nên dùng tag “<? ?>” hoặc short-echo <?= ?> tags). Trong một file chỉ bao gồm code PHP thì không được viết tag đóng “?>”.</table>
<hr/>
<H3>Quy tắc 2. Canh lề - Indenting</H3>
<table>Không dùng tab, mà phải sử dụng 4 dấu cách làm indent.</table>
<hr/>
<H3>Quy tắc 3. Lines</H3>
<table>Việc giới hạn số ký tự trên 1 dòng code nhằm giúp cho lập trình viên nhìn code được dễ dàng. Một dòng code nên chỉ có 80 ký tự và tối đa là 120 ký tự.</table>
<hr/>
<H3>Quy tắc 4. Namespace và tên Class</H3>
Namespaces và tên classes phải tuân theo quy chuẩn "autoloading" của PSR
<table>Điều này có nghĩa là mỗi class phải được viết vào một file, và phải có ý nhất 1 level trong namespace.<br/>
Tên class phải được viết dưới dạng StudlyCaps: Chữ cái đầu tiên viết hoa, các từ được kết hợp bởi chữ cái la tinh viết liền nhau. Được phân biệt với nhau bằng chữ viết hoa.<br/>
Code với phiên bản PHP 5.3 trở lên phải dùng đúng namespaces.</table>
<hr/>
<H3>Quy tắc 5. Constants</H3>
<table>Constants của class phải được viết hoa toàn bộ và sử dụng gạch dưới ngăn cách giữa các từ. </table>
<hr/>
<H3>Quy tắc 6. Properties</H3>
<table>Tên các thuộc tính không nên sử dụng dấu gạch dưới “_” và cần thực hiện thống nhất.</table>
<hr/>
<H3>Quy tắc 7. Method</H3>
<table>Tên Method phải được viết dưới dạng camelCase.<br/>
Các method phải được khai báo với các từ : privated, protected, public. Không được bỏ trống và Static method phải được khai báo với theo độ ưu tiên của visibility trong script.</table>
<hr/>
<H3>Quy tắc 8. Hàm, method và sử dụng.</H3>
<table>Tham số của hàm phải được cách bởi 1 kí tự khoảng trắng.<br/>
Nếu muốn truyền tham trị, thì phải đặt “&” ở trước biến trong phần khai báo hàm, khi đã sử dùng hàm không được thêm dấu “&” vào trước tham trị.</table>
<hr/>
<H3>Quy tắc 9. If/ Else/ Elseif</H3>
<table>Các câu điều kiện phải có 1 khoảng trắng ở giữa từ “if”, “elseif” và ngoặc mở “(“ . Thêm 1 khoảng trắng nữa giữa ngoặc đóng “)” và ngoặc cong “{“. Ở trong ngoặc đơn “()”, giữa 2 bên của các toán tử so sánh phải có khoảng trắng để dễ đọc. Ngoặc cong mở “{“ phải viết chung hàng với lệnh if . Ngoặc cong đóng phải ở hàng của riêng nó.</table>
<hr/>
<H3>Quy tắc 10. Switch</H3>
<table>Tương tự If/ Else/ Elseif, giữa chữ “switch” và ngoặc mở “(“phải có 1 khoảng trắng, và giữa ngoặc đóng “)” và “{“ phải có 1 khoảng trắng nữa. Ngoặc cong mở “{“ phải nằm chung hàng với if, và ngoặc cong đóng “}” phải nằm ở hàng của riêng nó. Tất cả các nội dung bên trog switch phải được thục dòng 4 khoảng trắng. Và nội dung của mỗi “case” phải được thục dòng thêm 4 khoảng trắng nữa!</table>
<hr/>
<H3>Quy tắc 11. While/ Do …While/ For/ Foreach</H3>
<H4>-Cấu trúc While:</H4>
<table>while ($expr) {<br/>
    // structure body<br/>
}</table>
<H4>-Cấu trúc Do …While:</H4><br/>
<table>do {<br/>
    // structure body;<br/>
} while ($expr);</table>
<H4>-Cấu trúc For:</H4><br/>
 ?php<br/
for ($i = 0; $i < 10; $i++) {<br/>
    // for body<br/>
}
<H4>-Cấu trúc Foreach:</H4><br/>
?php<br/>
foreach ($iterable as $key => $value) {<br/>
    // foreach body<br/>
}</table>
<hr/>
<H3>Quy tắc 12. Try… Catch</H3>
<table>try {<br/>
    // try body<br/>
} catch (FirstExceptionType $e) {<br/>
    // catch body<br/>
} catch (OtherExceptionType $e) {<br/>
    // catch body<br/>
}</table>
<hr/>
<H4>Quy tắc 13. Inline Documentation File</H4>
Trong mỗi file chứa PHP code, chúng ta phải có 1 block ở trên đầu file để miêu tả về file . Bạn có thể làm như sau :<br/>
<table>/**<br/>
 * Short description for file<br/>
 *<br/>
 * Long description for file (if any)...<br/>
 *<br/>
 * LICENSE: Some license information<br/>
 *<br/>
 * @copyright  2006 Zend Technologies<br/>
 * @license    [url]http://www.zend.com/license/3_0.txt[/url]   PHP License 3.0<br/>
 * @version    $Id$<br/>
 * @link       [url]http://dev.zend.com/package/PackageName[/url]<br/>
 * @since      File available since Release 1.2.0<br/>
 */</table>
 <hr/>
<H3>Quy tắc 14. Inline Documentation Class</H3>
Tương tự như file class cũng vậy:<br/>
<table>/**<br/>
 * Short description for class<br/>
 *<br/><br/>
 * Long description for class (if any)...<br/>
 *<br/>
 * @copyright  2006 Zend Technologies<br/>
 * @license    [url]http://www.zend.com/license/3_0.txt[/url]   PHP License 3.0<br/>
 * @version    Release: @package_version@<br/>
 * @link       [url]http://dev.zend.com/package/PackageName[/url]<br/>
 * @since      Class available since Release 1.2.0<br/>
 */</table>
 <hr/>
<H3>Quy tắc 15. Function</H3>
Với mỗi hàm, bao gồm cả các hàm được định nghĩa trong class, cần có 1 block gồm:<br/>
<table>·         Miêu tả cơ bản về hàm
·         Tất cả các biến của hàm
·         Tất cả các giá trị trả về của hàm
·         Nếu 1 hàm hay 1 method trong class có “throw exception” thì dùng @throw</table>
<H3>Quy tắc 17. Require và Include</H3>
Include, include_once, require, require_once không nên dùng () .



