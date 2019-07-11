<?php

namespace Faker\Provider\vi_VN;

class Text extends \Faker\Provider\Text
{
    protected static $baseText = <<<EOT

Heartbleed là một lỗ hổng được tìm phát hiện vào tháng 4 năm 2014. Heartbleed cho phép những kẻ tấn công truy cập dễ dàng vào thông tin bí mật, nhạy cảm của các dữ liệu cá nhân. Chúng có thể xâm nhập và lấy đi hàng tá thông tin cá nhân bao gồm tất cả tin nhắn, email, mật khẩu, … và rút lui không một dấu vết
Heartbleed là một lỗ trong OpenSSL, một thư viện mã nguồn mở dùng để triển khai TLS (Transport Layer Security) và SSL (Secure Sockets Layer), được Google, Facebook, Yahoo, Amazon và rất nhiều trang web lớn trên thế giới sử dụng để bảo vệ việc truyền tải thông tin cá nhân của người dùng.
(Có nhiều bạn không biết OpenSSL là gì, nhưng chúng ta nhìn thấy nó hằng ngày khi lướt Facebook đó là: biểu tượng ổ khóa nằm ngay trên thanh địa chỉ của trình duyệt, bên cạnh HTTPS khi truy cập vào các trang có chứng chỉ mã hóa.)
Nói tóm lại, một kẻ tấn công có thể dễ dàng lừa một máy chủ web gặp lỗ hổng này gửi thông tin nhạy cảm cho hắn, bao gồm cả username và password.

Để hiểu rõ được cách hoạt động của Heartbleed (CVE-2014-0160), bạn cần biết một chút cách các giao thức TLS/SSL hoạt động và cách máy tính lưu trữ thông tin trong bộ nhớ.

Một thứ quan trọng của giao thức TLS/SSL là cái được gọi là Heartbeat. Về cơ bản, đây là cách hai máy tính liên lạc với nhau cho nhau biết rằng chúng vẫn đang được kết nối ngay cả khi người dùng không downloading hoặc uploading bất cứ thứ gì ở thời điểm hiện tại.

Ví dụ: 2 máy tính A và B đang kết nối với nhau. Thỉnh thoảng, máy tính A sẽ gửi một phần dữ liệu được mã hóa, được gọi là heartbeat request, đến máy B. Máy tính B sẽ trả lời lại cùng với một phần dữ liệu được mã hóa, chứng minh rằng kết nối vẫn còn.

Vì vậy nếu bạn đang đọc Yahoo mail của mình nhưng không làm gì trong một thời gian để tải thêm thông tin, trình duyệt của bạn có thể gửi tín hiệu đến các máy chủ Yahoo. Dạng như: "Mày sắp nhận được một tin nhắn với dung lượng 40KB. Mày hãy gửi lại tất cả cho tao." (Các request có thể dài tới 64KB).

Nếu bạn là kẻ tấn công, bạn không có cách nào để biết trước những gì có thể ẩn trong 20KB bạn vừa lấy được từ máy chủ, nhưng vẫn tồn tại một cách nào đó.

Bạn có thể nhận được các private key của SSL, cho phép giải mã thông tin liên lạc an toàn đến máy chủ đó (điều này tuy là khó xảy ra, nhưng đối với một kẻ tấn công thì chưa chắc chắn được). Thông thường, bạn có thể lấy được username/password đã gửi tới các ứng dụng và dịch vụ đang chạy trên máy chủ, giúp bạn giành quyền truy cập.

EOT;
/** */
}