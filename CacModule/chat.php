<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'chat', language 'vi', branch 'MOODLE_37_STABLE'
 *
 * @package   chat
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autoscroll'] = 'Cuốn tự động';
$string['beep'] = 'bíp';
$string['cantlogin'] = 'Không thể đăng nhập phòng chát';
$string['chat:chat'] = 'Tham gia chat';
$string['chat:deletelog'] = 'Xoá nhật kí các buổi chat';
$string['chatintro'] = 'Nội dung giới thiệu';
$string['chatname'] = 'Tên của phòng chát này';
$string['chat:readlog'] = 'Xem nhật kí các buổi chat';
$string['chattime'] = 'Phiên họp tiếp theo';
$string['configmethod'] = 'Với kiểu chat bình thường, trình duyệt sẽ nối kết thường xuyên tới máy chủ để cập nhật thông tin. Không cần phải thiết lập gì cả, và ở đâu cũng hoạt động được. Tuy nhiên, máy chủ sẽ có thể bị nặng tải, đặc biệt là khi có nhiều người cùng tham gia họp. Sử dụng máy chủ daemon đòi hỏi bạn phải truy cập vào môi trường dòng lệnh Unix, nhưng bù lại các phiên chat sẽ có thể diễn ra nhanh chóng và nhịp nhàng hơn.';
$string['confignormalupdatemode'] = 'Bạn có thể dùng chức năng <em>Kết nối Thường trực</em> của HTTP 1.1 để cập nhật các phòng họp một cách hiệu quả, nhưng việc đó sẽ làm nặng tải trên máy chủ của bạn. Phương pháp cập nhật <em>Dòng</em> có thể cho kết quả tốt hơn khi có nhiều người truy cập cùng lúc (tương tự cách dùng chatd), nhưng có thể là không được hỗ trợ trên máy chủ của bạn.';
$string['configoldping'] = 'Thời gian tối đa (giây) trước khi kiểm tra lại xem thành viên có kết nối hay không? Đây là mức giới hạn trần, vì thông thường hệ thống có thể nhanh chóng phát hiện ra thành viên thoát ra ngoài. Thời gian càng ngắn máy chủ sẽ tải càng nặng. Nếu dùng chế độ bình thường, không bao giờ để dưới 2 * chat_refresh_room.';
$string['configrefreshroom'] = 'Phòng họp cần được tải lại sau mỗi bao lâu (giây)? Để số thấp có thể giúp bạn có cảm giác phòng họp hoạt động nhanh hơn, nhưng sẽ làm nặng tải máy chủ khi có nhiều người tham gia cung lúc. Nếu đang dùng phương pháp cập nhật <em>Dòng</em>, bạn có thể chọn số cao hơn -- hãy thử ở mức 2.';
$string['configrefreshuserlist'] = 'Danh sách thành viên cần được tải lại sau mỗi bao lâu (giây)?';
$string['configserverhost'] = 'Tên máy tính (hostname) nơi chạy chương trình daemon';
$string['configserverip'] = 'Địa chỉ IP của tên máy ở trên';
$string['configservermax'] = 'Số máy khách tối đa cho phép truy cập';
$string['configserverport'] = 'Cổng dùng cho máy chủ daemon';
$string['currentchats'] = 'Phiên chat đang mở';
$string['currentusers'] = 'Thành viên đang có mặt';
$string['deletesession'] = 'Xoá phiên họp này';
$string['deletesessionsure'] = 'Bạn có chắc chắn muốn xoá phiên họp này?';
$string['donotusechattime'] = 'Không nêu thời gian họp';
$string['enterchat'] = 'Nhấn vào đây để tham gia';
$string['errornousers'] = 'Không tìm thấy thành viên nào!';
$string['explaingeneralconfig'] = '<strong>Luôn luôn</strong> sử dụng các thiết lập này';
$string['explainmethoddaemon'] = 'Các thiết lập này <strong>chỉ</strong> có hiệu lực sau khi bạn đã chọn kiểu "Máy chủ daemon"';
$string['explainmethodnormal'] = 'Các thiết lập này <strong>chỉ</strong> có hiệu lực sau khi bạn đã chọn kiểu "Họp bình thường"';
$string['idle'] = 'Im re';
$string['messagebeepseveryone'] = '{$a} gọi tất cả mọi người!';
$string['messagebeepsyou'] = '{$a} vừa gọi bạn!';
$string['messageenter'] = '{$a} vừa vào phòng họp';
$string['messageexit'] = '{$a} vừa ra khỏi phòng họp này';
$string['messages'] = 'Tin nhắn';
$string['method'] = 'Kiểu họp';
$string['methoddaemon'] = 'Máy chủ daemon';
$string['methodnormal'] = 'Kiểu bình thường';
$string['modulename'] = 'Phòng họp trực tuyến';
$string['modulenameplural'] = 'Phòng họp trực tuyến';
$string['neverdeletemessages'] = 'Không bao giờ xoá bài viết';
$string['nextsession'] = 'Phiên họp sắp tới';
$string['nochat'] = 'Không tìm thấy phòng chát nào';
$string['noguests'] = 'Phiên họp này không mở cho khách vãng lai';
$string['nomessages'] = 'Chưa có ai viết gì';
$string['normalkeepalive'] = 'Nối thường trực';
$string['normalstream'] = 'Dòng';
$string['noscheduledsession'] = 'Không có phiên họp nào được lên lịch';
$string['oldping'] = 'Thời hạn ngưng kết nối';
$string['pastchats'] = 'Các phiên họp trước';
$string['pluginadministration'] = 'Quản lý chức năng chát';
$string['pluginname'] = 'Phòng họp trực tuyến';
$string['refreshroom'] = 'Tải lại phòng họp';
$string['refreshuserlist'] = 'Tải lại danh sách thành viên';
$string['removemessages'] = 'Xoá hết bài viết';
$string['repeatdaily'] = 'Mỗi ngày, cùng giờ';
$string['repeatnone'] = 'Không lặp lại - chỉ mở ngày đã chọn';
$string['repeattimes'] = 'Mở lại phiên họp';
$string['repeatweekly'] = 'Hàng tuần, cùng giờ';
$string['savemessages'] = 'Lưu các phiên họp trước';
$string['seesession'] = 'Xem phiên họp này';
$string['serverhost'] = 'Tên máy chủ';
$string['serverip'] = 'Địa chỉ IP máy chủ';
$string['servermax'] = 'Số thành viên tối đa';
$string['serverport'] = 'Cổng máy chủ';
$string['sessions'] = 'Phiên họp';
$string['studentseereports'] = 'Mọi người đều xem được các phiên họp trước';
$string['updatemethod'] = 'Phương pháp cập nhật';
$string['usingchat'] = 'Sử dụng Chát';
$string['usingchat_help'] = '<p>Mô đun chát bao gồm một số các tính năng giúp cho buổi nói chuyện thêm hứng thú.</p>

<dl>
<dt><b>Các mặt cười</b></dt>
<dd>Bất cứ mặt cười nào (Biểu tượng biểu cảm - emoticons) mà bạn có thể dùng ở nơi khác thì đều có thể dùng ở Moodle, và chúng sẽ hiển thị chính xác.  Thí dụ,  :-) = <img alt src="pix/s/smiley.gif" />  </dd>

<dt><b>Các liên kết</b></dt>
<dd>Các địa chỉ Internet sẽ được tự động chuyển thành liên kết.</dd>

<dt><b>Biểu cảm</b></dt>
<dd>Bạn có thể bắt đầu một dòng với "/me" hay ":" để biểu hiện cảm xúc.  Thí dụ, nếu tên bạn là Thúy và bạn nhập vào ":laughs!" hay "/me laughs!" thì mọi người sẽ thấy hiện lên "Thúy laughs!"</dd>

<dt><b>Tiếng bíp</b></dt>
<dd>Bạn có thể gửi một âm thanh cho người khác bằng cách nhấn vào liên kết "beep" bên cạnh tên của họ.  Một lối tắt (shortcut) tiện lợi để gửi "bíp" tới tất cả mọi người cùng một lúc là dòng "beep all".</dd>

<dt><b>HTML</b></dt>
<dd>Nếu bạn có biết các mã HTML, thì bạn có thể dùng chúng để chèn một hình ảnh, cho phát âm thanh hay tạo các màu hay các cỡ chữ khác nhau.</dd>

</dl>';
$string['viewreport'] = 'Xem các phiên họp trước';

//edited 18/09/2019


$string['activityoverview'] = 'Bạn có phiên trò chuyện sắp tới';
$string['ajax'] = 'Phiên bản sử dụng Ajax';
$string['bubble'] = 'Bong bóng';
$string['composemessage'] = 'Soạn tin nhắn';
$string['compact'] = 'gọn nhẹ';
$string['coursetheme'] = 'Chủ đề khóa học';
$string['generalconfig'] = 'Cấu hình chung';
$string['chat:addinstance'] = 'Thêm một cuộc trò chuyện mới';
$string['chat:exportparticipatedsession'] = 'Xuất phiên trò chuyện mà bạn đã tham gia';
$string['chat:exportsession'] = 'Xuất bất kỳ phiên trò chuyện nào';
$string['chatreport'] = 'Phiên trò chuyện';
$string['chat:talk'] = 'Nói chuyện trong một cuộc trò chuyện';
$string['chat:view'] = 'Xem hoạt động trò chuyện';
$string['entermessage'] = "Nhập tin nhắn của bạn";
$string['eventmessagesent'] = 'Tin nhắn đã gửi';
$string['eventsessionsviewed'] = 'Phiên xem';
$string['indicator:cognitivedepth'] = 'Trò chuyện nhận thức';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên độ sâu nhận thức mà học sinh đạt được trong hoạt động Trò chuyện.';
$string['indicator:socialbreadth'] = 'Trò chuyện xã hội';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên chiều rộng xã hội mà học sinh đạt được trong một hoạt động Trò chuyện.';
$string['inputarea'] = 'Khu vực đầu vào';
$string['invalidid'] = 'Không thể tìm thấy phòng chat đó!';
$string['list_all_sessions'] = 'Liệt kê tất cả các phiên.';
$string['list_complete_sessions'] = 'Danh sách chỉ cần hoàn thành phiên.';
$string['listing_all_sessions'] = 'Liệt kê tất cả các phiên.';
$string['messageyoubeep'] = 'Bạn bíp {$a}';
$string['methodajax'] = 'Phương thức Ajax';
$string['modulename_help'] = 'Mô-đun hoạt động trò chuyện cho phép người tham gia thảo luận đồng bộ theo thời gian thực dựa trên văn bản.

Trò chuyện có thể là một hoạt động một lần hoặc nó có thể được lặp lại cùng một lúc mỗi ngày hoặc mỗi tuần. Phiên trò chuyện được lưu và có thể được cung cấp cho mọi người để xem hoặc giới hạn cho người dùng có khả năng xem nhật ký phiên trò chuyện.

Trò chuyện đặc biệt hữu ích khi trò chuyện nhóm không thể gặp mặt trực tiếp, chẳng hạn như

* Các cuộc họp thường xuyên của sinh viên tham gia các khóa học trực tuyến để cho phép họ chia sẻ kinh nghiệm với những người khác trong cùng một khóa học nhưng ở một địa điểm khác
* Một học sinh tạm thời không thể tham dự trò chuyện trực tiếp với giáo viên của họ để bắt kịp công việc
* Học sinh rút kinh nghiệm làm việc cùng nhau để thảo luận về kinh nghiệm của họ với nhau và giáo viên của họ
*Trẻ nhỏ sử dụng trò chuyện tại nhà vào buổi tối như một lời giới thiệu (được theo dõi) có kiểm soát về thế giới mạng xã hội
*Một câu hỏi và trả lời với một người được mời ở một địa điểm khác
* Các phiên để giúp học sinh chuẩn bị cho các bài kiểm tra mà giáo viên hoặc các học sinh khác sẽ đặt ra các câu hỏi mẫu';
$string['modulename_link'] = 'mod/chat/view';
$string['no_complete_sessions_found'] = 'Không tìm thấy phiên hoàn chỉnh.';
$string['notallowenter'] = 'Bạn không được phép vào phòng chat.';
$string['notlogged'] = 'Bạn không đăng nhập!';
$string['nopermissiontoseethechatlog'] = 'Bạn không có quyền xem nhật ký trò chuyện.';
$string['page-mod-chat-x'] = 'Bất kỳ trang mô-đun trò chuyện';
$string['privacy:metadata:chat_messages_current'] = 'Phiên trò chuyện hiện tại. Dữ liệu này là tạm thời và bị xóa sau khi phiên trò chuyện bị xóa';
$string['privacy:metadata:chat_users'] = 'Theo dõi những người dùng đang ở trong phòng chat nào';
$string['privacy:metadata:chat_users:firstping'] = 'Thời gian truy cập đầu tiên vào phòng chat';
$string['privacy:metadata:chat_users:ip'] = 'IP người dùng';
$string['privacy:metadata:chat_users:lang'] = 'Ngôn ngữ người dùng';
$string['privacy:metadata:chat_users:lastmessageping'] = 'Thời gian của tin nhắn cuối cùng trong phòng chat này';
$string['privacy:metadata:chat_users:lastping'] = 'Thời gian truy cập cuối cùng vào phòng chat';
$string['privacy:metadata:chat_users:userid'] = 'ID người dùng';
$string['privacy:metadata:chat_users:version'] = 'Cách người dùng truy cập trò chuyện (sockets/basic/ajax/header_js)';
$string['privacy:metadata:messages'] = 'Một bản ghi các tin nhắn được gửi trong một phiên trò chuyện';
$string['privacy:metadata:messages:issystem'] = 'Tin nhắn có phải là tin nhắn do hệ thống tạo không';
$string['privacy:metadata:messages:message'] = 'Tin nhắn';
$string['privacy:metadata:messages:timestamp'] = 'Thời điểm tin nhắn được gửi đi.';
$string['privacy:metadata:messages:userid'] = 'ID người dùng của tác giả của tin nhắn';
$string['saidto'] = 'nói với';
$string['search:activity'] = 'Trò chuyện - thông tin hoạt động';
$string['send'] = 'Gửi';
$string['sending'] = 'Gửi';
$string['sessionstart'] = 'Phiên trò chuyện tiếp theo sẽ bắt đầu vào {$a->date}, ({$a->fromnow} từ giờ)';
$string['strftimemessage'] = '%H:%M';
$string['studentseereports_help'] = 'Nếu được đặt thành Không, chỉ người dùng mới có mod/chat:readlog khả năng có thể xem nhật ký trò chuyện';
$string['talk'] = 'Nói chuyện';
$string['updaterate'] = 'Tốc độ cập nhật:';
$string['userlist'] = 'Danh sách người dùng';

