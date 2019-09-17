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
 * Language File.
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010-2018 Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @author    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 */
defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Bạn có phiên bigbluebuttonbn sắp tới';
$string['bbbduetimeoverstartingtime'] = 'Thời gian đến hạn của hoạt động này phải lớn hơn thời gian bắt đầu';
$string['bbbdurationwarning'] = 'Thời lượng tối đa cho phiên này là %thời lượng% phút..';
$string['bbbrecordwarning'] = 'Phiên này có thể được ghi lại.';
$string['bigbluebuttonbn:addinstance'] = 'Thêm một phòng/hoạt động bigbluebuttonbn mới';
$string['bigbluebuttonbn:join'] = 'Tham gia một cuộc họp bigbluebuttonbn';
$string['bigbluebuttonbn:view'] = 'Xem phòng / hoạt động';
$string['bigbluebuttonbn:managerecordings'] = 'Quản lý bản ghi bigbluebuttonbn';
$string['bigbluebuttonbn'] = 'BigBlueButton';

$string['privacy:metadata:bigbluebuttonbn'] = 'Lưu trữ cấu hình cho phòng hoặc hoạt động xác định các tính năng và hành vi chung của phiên BigBlueButton.';
$string['privacy:metadata:bigbluebuttonbn:participants'] = 'Một danh sách các quy tắc xác định vai trò người dùng sẽ có trong cuộc họp trực tiếp. ID người dùng có thể được lưu trữ vì quyền có thể được cấp cho mỗi vai trò hoặc người dùng.';
$string['privacy:metadata:bigbluebuttonbn_logs'] = 'Lưu trữ các sự kiện được kích hoạt khi sử dụng plugin.';
$string['privacy:metadata:bigbluebuttonbn_logs:userid'] = 'ID người dùng của người dùng đã kích hoạt sự kiện.';
$string['privacy:metadata:bigbluebuttonbn_logs:timecreated'] = 'Thời gian mà nhật ký được tạo.';
$string['privacy:metadata:bigbluebuttonbn_logs:meetingid'] = 'Cuộc họp NẾU người dùng có quyền truy cập vào.';
$string['privacy:metadata:bigbluebuttonbn_logs:log'] = 'Loại sự kiện được kích hoạt bởi người dùng.';
$string['privacy:metadata:bigbluebuttonbn_logs:meta'] = 'Có thể bao gồm thêm thông tin liên quan đến cuộc họp hoặc ghi âm bị ảnh hưởng bởi sự kiện.';
$string['privacy:metadata:bigbluebutton'] = 'Để tạo và tham gia các phiên BigBlueButton, dữ liệu người dùng cần được trao đổi với máy chủ.';
$string['privacy:metadata:bigbluebutton:userid'] = 'ID của người dùng truy cập máy chủ BigBlueButton.';
$string['privacy:metadata:bigbluebutton:fullname'] = 'Tên đầy đủ của người dùng truy cập vào máy chủ BigBlueButton.';

$string['config_general'] = 'Cấu hình chung';
$string['config_general_description'] = 'Các cài đặt này là <b>luôn luôn</b> đã sử dụng';
$string['config_server_url'] = 'URL máy chủ BigBlueButton';
$string['config_shared_secret_description'] = 'Bảo mật của máy chủ BigBlueButton của bạn. (Mặc định này dành cho máy chủ BigBlueButton được cung cấp bởi Blindside Networks mà bạn có thể sử dụng để thử nghiệm.)';

$string['config_recording'] = 'Cấu hình cho tính năng "Ghi lại cuộc họp"';
$string['config_recording_description'] = 'Các cài đặt này là tính năng cụ thể';
$string['config_recording_default'] = 'Tính năng ghi âm được bật theo mặc địnht';
$string['config_recording_default_description'] = 'Nếu được bật, các phiên được tạo trong BigBlueButton sẽ có khả năng ghi âm.';
$string['config_recording_editable'] = 'Tính năng ghi có thể được chỉnh sửa';
$string['config_recording_editable_description'] = 'Nếu được chọn, giao diện bao gồm tùy chọn bật và tắt tính năng ghi.';
$string['config_recording_icons_enabled'] = 'Biểu tượng để quản lý ghi âm';
$string['config_recording_icons_enabled_description'] = 'Khi được bật, bảng quản lý ghi sẽ hiển thị các biểu tượng cho các hành động xuất bản / hủy xuất bản và xóa.';

$string['config_recordings'] = 'Cấu hình cho tính năng "Hiển thị bản ghi"';
$string['config_recordings_description'] = 'Các cài đặt này là tính năng cụ thể';
$string['config_recordings_general'] = 'Hiển thị cài đặt ghi âmgs';
$string['config_recordings_general_description'] = 'Các cài đặt này chỉ được sử dụng khi hiển thị bản ghi';
$string['config_recordings_html_default'] = 'Giao diện người dùng như html được bật theo mặc định';
$string['config_recordings_html_default_description'] = 'Nếu được bật, bảng ghi được hiển thị bằng HTML đơn giản theo mặc định.';
$string['config_recordings_html_editable'] = 'Giao diện người dùng như tính năng html có thể được chỉnh sửa';
$string['config_recordings_html_editable_description'] = 'Giao diện theo giá trị html theo mặc định có thể được chỉnh sửa khi phiên bản được thêm hoặc cập nhật.';
$string['config_recordings_deleted_default'] = 'Bao gồm các bản ghi từ các hoạt động đã xóa được bật theo mặc định';
$string['config_recordings_deleted_default_description'] = 'Nếu được bật, bảng ghi sẽ bao gồm các bản ghi thuộc về các hoạt động đã xóa nếu có.';
$string['config_recordings_deleted_editable'] = 'Bao gồm các bản ghi từ tính năng hoạt động bị xóa có thể được chỉnh sửa';
$string['config_recordings_deleted_editable_description'] = 'Bao gồm các bản ghi từ các hoạt động bị xóa theo mặc định có thể được chỉnh sửa khi phiên bản được thêm hoặc cập nhật.';
$string['config_recordings_imported_default'] = 'Chỉ hiển thị các liên kết đã nhập được bật theo mặc định';
$string['config_recordings_imported_default_description'] = 'Nếu được bật, bảng ghi sẽ chỉ bao gồm các liên kết đã nhập vào bản ghi.';
$string['config_recordings_imported_editable'] = 'Chỉ hiển thị tính năng liên kết đã nhập';
$string['config_recordings_imported_editable_description'] = 'Chỉ hiển thị các liên kết được nhập theo mặc định có thể được chỉnh sửa khi phiên bản được thêm hoặc cập nhật.';
$string['config_recordings_preview_default'] = 'Xem trước được bật theo mặc định';
$string['config_recordings_preview_default_description'] = 'Nếu được bật, bảng bao gồm phần xem trước của bản trình bày.';
$string['config_recordings_preview_editable'] = 'Tính năng xem trước có thể được chỉnh sửa';
$string['config_recordings_preview_editable_description'] = 'Tính năng xem trước có thể được chỉnh sửa khi phiên bản được thêm hoặc cập nhật.';


$string['config_importrecordings'] = 'Cấu hình cho tính năng "Nhập bản ghi"';
$string['config_importrecordings_description'] = 'Các cài đặt này là tính năng cụ thể';
$string['config_importrecordings_enabled'] = 'Nhập bản ghi được bật';
$string['config_importrecordings_enabled_description'] = 'Khi tính năng này và tính năng ghi được bật, có thể nhập bản ghi từ các khóa học khác nhau vào một hoạt động.';
$string['config_importrecordings_from_deleted_enabled'] = 'Nhập bản ghi từ các hoạt động đã xóa được bật';
$string['config_importrecordings_from_deleted_enabled_description'] = 'Khi tính năng này và tính năng ghi âm được bật, có thể nhập bản ghi từ các hoạt động không còn trong khóa học.';

$string['config_waitformoderator'] = 'Cấu hình cho tính năng "Chờ người điều hành"';
$string['config_waitformoderator_description'] = 'Các cài đặt này là tính năng cụ thể';
$string['config_waitformoderator_default'] = 'Đợi người điều hành bật theo mặc định';
$string['config_waitformoderator_default_description'] = 'Chờ tính năng của người điều hành được bật theo mặc định khi phòng hoặc hội nghị mới được thêm vào.';
$string['config_waitformoderator_editable'] = 'Đợi tính năng của người điều hành có thể được chỉnh sửa';
$string['config_waitformoderator_editable_description'] = 'Đợi giá trị của người điều hành theo mặc định có thể được chỉnh sửa khi phòng hoặc hội nghị được thêm hoặc cập nhật.';
$string['config_waitformoderator_ping_interval'] = 'Đợi ping người điều hành (giây)';
$string['config_waitformoderator_ping_interval_description'] = 'Khi tính năng chờ của người điều hành được bật, ứng dụng khách sẽ hiển thị trạng thái của phiên mỗi [số] giây. Tham số này xác định khoảng thời gian cho các yêu cầu được thực hiện cho máy chủ Moodle';
$string['config_waitformoderator_cache_ttl'] = 'Wait for moderator cache TTL (seconds)';
$string['config_waitformoderator_cache_ttl_description'] = 'Để hỗ trợ rất nhiều khách hàng, plugin này sử dụng bộ đệm. Tham số này xác định thời gian bộ đệm sẽ được giữ trước khi yêu cầu tiếp theo được gửi đến máy chủ BigBlueButton.';

$string['config_voicebridge'] = 'Cấu hình cho tính năng "Cầu thoại"e';
$string['config_voicebridge_description'] = 'Các cài đặt này bật hoặc tắt các tùy chọn trong UI và cũng xác định các giá trị mặc định cho các tùy chọn này.';
$string['config_voicebridge_editable'] = 'Cầu giọng hội nghị có thể được chỉnh sửa';
$string['config_voicebridge_editable_description'] = 'Số cầu hội nghị có thể được gán vĩnh viễn cho một hội nghị phòng. Khi được chỉ định, số này không thể được sử dụng bởi bất kỳ phòng hoặc hội nghị nào khác';

$string['config_preuploadpresentation'] = 'Cấu hình cho tính năng "Trình bày trước khi tải lên"';
$string['config_preuploadpresentation_description'] = 'Các cài đặt này bật hoặc tắt các tùy chọn trong UI và cũng xác định các giá trị mặc định cho các tùy chọn này. Tính năng này chỉ hoạt động nếu máy chủ Moodle có thể truy cập vào BigBlueButton ..';
$string['config_preuploadpresentation_enabled'] = 'Đã bật trình bày trước khi tải lên';
$string['config_preuploadpresentation_enabled_description'] = 'Tính năng thuyết trình tải trước được bật trong giao diện người dùng khi phòng hoặc hội nghị được thêm hoặc cập nhật.';

$string['config_participant'] = 'Cấu hình người tham gia';
$string['config_participant_description'] = 'Các cài đặt này xác định vai trò theo mặc định cho những người tham gia hội nghị.';
$string['config_participant_moderator_default'] = 'Người điều hành theo mặc định';
$string['config_participant_moderator_default_description'] = 'Quy tắc này được sử dụng theo mặc định khi một phòng mới được thêm vào.';

$string['config_userlimit'] = 'Cấu hình cho tính năng "Giới hạn người dùng"';
$string['config_userlimit_description'] = 'Các cài đặt này bật hoặc tắt các tùy chọn trong UI và cũng xác định các giá trị mặc định cho các tùy chọn này.';
$string['config_userlimit_default'] = 'Giới hạn người dùng được bật theo mặc định';
$string['config_userlimit_default_description'] = 'Số lượng người dùng được phép trong một phiên theo mặc định khi một phòng hoặc hội nghị mới được thêm vào. Nếu số được đặt thành 0, không có giới hạn nào được thiết lập';
$string['config_userlimit_editable'] = 'Tính năng giới hạn người dùng có thể được chỉnh sửa';
$string['config_userlimit_editable_description'] = 'Giá trị giới hạn người dùng theo mặc định có thể được chỉnh sửa khi phòng hoặc hội nghị được thêm hoặc cập nhật.';

$string['config_scheduled'] = 'Cấu hình cho "Phiên theo lịch"';
$string['config_scheduled_description'] = 'Các cài đặt này xác định một số hành vi theo mặc định cho các phiên được lên lịch.';
$string['config_scheduled_duration_enabled'] = 'Tính thời lượng kích hoạt';
$string['config_scheduled_duration_enabled_description'] = 'Thời lượng của một phiên theo lịch được tính dựa trên thời gian mở và đóng.';
$string['config_scheduled_duration_compensation'] = 'Thời gian bù (phút)';
$string['config_scheduled_duration_compensation_description'] = 'Phút thêm vào đóng cửa theo lịch trình khi tính thời lượng.';
$string['config_scheduled_pre_opening'] = 'Có thể truy cập trước thời gian mở cửa (phút)';
$string['config_scheduled_pre_opening_description'] = 'Thời gian tính bằng phút để phiên có thể được chấp nhận trước khi thời gian mở lịch biểu đến hạn.';

$string['config_sendnotifications'] = 'Cấu hình cho tính năng "Gửi thông báo"';
$string['config_sendnotifications_description'] = 'Các cài đặt này bật hoặc tắt các tùy chọn trong giao diện người dùng và cũng xác định các giá trị mặc định cho các tùy chọn này.';
$string['config_sendnotifications_enabled'] = 'Gửi thông báo được kích hoạt';
$string['config_sendnotifications_enabled_description'] = 'Tính năng gửi thông báo được bật trong giao diện người dùng khi phòng hoặc hội nghị được thêm hoặc cập nhật.';

$string['config_extended_capabilities'] = 'Cấu hình cho các khả năng mở rộng';
$string['config_extended_capabilities_description'] = 'Cấu hình cho các khả năng mở rộng khi máy chủ BigBlueButton cung cấp chúng.';
$string['config_uidelegation_enabled'] = 'Giao diện người dùng được bật';
$string['config_uidelegation_enabled_description'] = 'Các cài đặt này cho phép hoặc vô hiệu hóa ủy quyền giao diện người dùng đến máy chủ BigBlueButton.';
$string['config_recordingready_enabled'] = 'Thông báo khi ghi sẵn sàng kích hoạt';
$string['config_recordingready_enabled_description'] = 'Thông báo khi ghi tính năng sẵn sàng được bật.';
$string['config_meetingevents_enabled'] = 'Đăng ký sự kiện cuộc họp';
$string['config_meetingevents_enabled_description'] = 'Đăng ký tính năng sự kiện cuộc họp được kích hoạt.';

$string['config_warning_curl_not_installed'] = 'Tính năng này yêu cầu phần mở rộng CURL cho php được cài đặt và kích hoạt. Các cài đặt sẽ chỉ có thể truy cập nếu điều kiện này được đáp ứng.';
$string['config_warning_bigbluebuttonbn_cfg_deprecated'] = 'BigBlueButtonBN đang sử dụng config.php với một biến toàn cục không được dùng nữa. Vui lòng chuyển đổi tệp vì nó sẽ không được hỗ trợ trong các phiên bản trong tương lai';

$string['general_error_unable_connect'] = 'Không thể kết nối. Vui lòng kiểm tra url của máy chủ BigBlueButton VÀ kiểm tra xem máy chủ BigBlueButton có đang chạy không.';

$string['index_confirm_end'] = 'Bạn có muốn kết thúc lớp học ảo không?';
$string['index_disabled'] = 'không có khả năng';
$string['index_enabled'] = 'có khả năng';
$string['index_ending'] = 'Kết thúc lớp học ảo ... vui lòng đợi';
$string['index_error_checksum'] = 'Xảy ra lỗi tổng kiểm tra. Hãy chắc chắn rằng bạn đã nhập đúng muối.';
$string['index_error_forciblyended'] = 'Không thể tham gia cuộc họp này vì nó đã được kết thúc bằng tay.';
$string['index_error_unable_display'] = 'Không thể hiển thị các cuộc họp. Vui lòng kiểm tra url của máy chủ BigBlueButton VÀ kiểm tra xem máy chủ BigBlueButton có đang chạy không.';
$string['index_heading_actions'] = 'Hành động';
$string['index_heading_group'] = 'Nhóm';
$string['index_heading_moderator'] = 'Người điều hành';
$string['index_heading_name'] = 'Phòng';
$string['index_heading_recording'] = 'ghi âm';
$string['index_heading_users'] = 'Người dùng';
$string['index_heading_viewer'] = 'Những người xem';
$string['index_heading'] = 'Phòng BigBlueButton';
$string['mod_form_block_general'] = 'Cài đặt chung';
$string['mod_form_block_room'] = 'Cài đặt hoạt động / phòng';
$string['mod_form_block_recordings'] = 'Cài đặt ghi âm';
$string['mod_form_block_presentation'] = 'Nội dung trình bày';
$string['mod_form_block_participants'] = 'Những người tham gia';
$string['mod_form_block_schedule'] = 'Lịch trình cho phiên';
$string['mod_form_block_record'] = 'Cài đặt ghi';
$string['mod_form_field_openingtime'] = 'Tham gia mở';
$string['mod_form_field_closingtime'] = 'Tham gia đóng';
$string['mod_form_field_intro'] = 'Sự miêu tả';
$string['mod_form_field_intro_help'] = 'Mô tả ngắn cho phòng hoặc hội nghị.';
$string['mod_form_field_duration_help'] = 'Đặt thời lượng cho cuộc họp sẽ thiết lập thời gian tối đa để cuộc họp tiếp tục tồn tại trước khi kết thúc ghi âm';
$string['mod_form_field_duration'] = 'Thời lượng';
$string['mod_form_field_userlimit'] = 'Giới hạn người dùng';
$string['mod_form_field_userlimit_help'] = 'Giới hạn người dùng Giới hạn tối đa của người dùng được phép trong một cuộc họp. Nếu giới hạn được đặt thành 0, số lượng người dùng sẽ không giới hạn.';
$string['mod_form_field_name'] = 'Tên lớp học ảo';
$string['mod_form_field_room_name'] = 'Tên phòng';
$string['mod_form_field_conference_name'] = 'Tên hội nghị';
$string['mod_form_field_record'] = 'Phiên có thể được ghi lại';
$string['mod_form_field_voicebridge'] = 'Cầu thoại[####]';
$string['mod_form_field_voicebridge_help'] = 'Số hội nghị bằng giọng nói mà người tham gia tham gia để tham gia hội nghị bằng giọng nói khi sử dụng quay số. Một số từ 1 đến 9999 phải được gõ. Nếu giá trị bằng 0, số cầu thoại tĩnh sẽ bị bỏ qua và một số ngẫu nhiên sẽ được tạo bởi BigBlueButton. Một số 7 sẽ đi trước bốn chữ số được gõ';
$string['mod_form_field_voicebridge_format_error'] = 'Lỗi định dạng. Bạn nên nhập một số trong khoảng từ 1 đến 9999.';
$string['mod_form_field_voicebridge_notunique_error'] = 'NNếu một giá trị duy nhất. Số này đang được sử dụng bởi một phòng hoặc hội nghị khác.';
$string['mod_form_field_wait'] = 'Đợi người điều hành';
$string['mod_form_field_wait_help'] = 'Người xem phải đợi cho đến khi người điều hành tham gia phiên trước khi họ có thể làm như vậy';
$string['mod_form_field_welcome'] = 'Thông điệp chào mừng';
$string['mod_form_field_welcome_help'] = 'Thay thế tin nhắn mặc định đã giải quyết cho máy chủ BigBlueButton. Tin nhắn có thể bao gồm các từ khóa  (%%CONFNAME%%, %%DIALNUM%%, %%CONFNUM%%) sẽ được thay thế tự động và html các thẻ như <b>...</b> or <i></i> ';
$string['mod_form_field_welcome_default'] = '<br> Chào mừng bạn đến <b>%%CONFNAME%%</b>!<br><br>Để được trợ giúp về việc sử dụng BigBlueButton, hãy xem những điều này (ngắn) <a href="event:http://www.bigbluebutton.org/content/videos"><u>video hướng dẫn</u></a>.<br><br> Để tham gia cầu âm thanh, nhấp vào biểu tượng điện thoại (trung tâm trên cùng). <b>Vui lòng sử dụng tai nghe để tránh gây tiếng ồn nền cho người khác.</b>';
$string['mod_form_field_participant_add'] = 'Thêm người tham gia';
$string['mod_form_field_participant_list'] = 'Danh sách người tham gia';
$string['mod_form_field_participant_list_type_all'] = 'Tất cả người dùng đã đăng ký';
$string['mod_form_field_participant_list_type_role'] = 'Vai trò';
$string['mod_form_field_participant_list_type_user'] = 'Người dùng';
$string['mod_form_field_participant_list_type_owner'] = 'Chủ nhân';
$string['mod_form_field_participant_list_text_as'] = 'như';
$string['mod_form_field_participant_list_action_add'] = 'Thêm';
$string['mod_form_field_participant_list_action_remove'] = 'Xóa';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Người điều hành';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Người xem';
$string['mod_form_field_instanceprofiles'] = 'Kiểu sơ thẩm';
$string['mod_form_field_instanceprofiles_help'] = 'Chọn loại cho ví dụ BigBlueButtonBN này.';
$string['mod_form_field_notification'] = 'Gửi thông báo';
$string['mod_form_field_notification_help'] = 'Gửi thông báo Gửi thông báo cho người dùng đã đăng ký để cho họ biết rằng hoạt động này đã được tạo hoặc sửa đổi';
$string['mod_form_field_notification_created_help'] = 'Gửi thông báo cho người dùng đã đăng ký để cho họ biết rằng hoạt động này đã được tạo';
$string['mod_form_field_notification_modified_help'] = 'Gửi thông báo cho người dùng đã đăng ký để cho họ biết rằng hoạt động này đã được sửa đổi';
$string['mod_form_field_notification_msg_created'] = 'tạo';
$string['mod_form_field_notification_msg_modified'] = 'sửa đổi';
$string['mod_form_field_notification_msg_at'] = 'tại';
$string['mod_form_field_recordings_html'] = 'Hiển thị bảng trong html đơn giản';
$string['mod_form_field_recordings_deleted'] = 'Bao gồm các bản ghi từ các hoạt động đã xóa';
$string['mod_form_field_recordings_imported'] = 'Chỉ hiển thị các liên kết đã nhập';
$string['mod_form_field_recordings_preview'] = 'Hiển thị xem trước ghi âm';

$string['modulename'] = 'BigBlueButtonBN';
$string['modulenameplural'] = 'BigBlueButtonBN';
$string['modulename_help'] = 'BigBlueButtonBN cho phép bạn tạo từ trong các liên kết Moodle đến các lớp học trực tuyến thời gian thực bằng BigBlueButton, một hệ thống hội nghị web nguồn mở để giáo dục từ xa.

Sử dụng BigBlueButtonBN, bạn có thể chỉ định cho tiêu đề, mô tả, mục lịch (cung cấp phạm vi ngày để tham gia phiên), các nhóm và chi tiết về bản ghi của phiên trực tuyến.

Để xem các bản ghi sau này, hãy thêm tài nguyên RecordingsBN vào khóa học này.';
$string['modulename_link'] = 'BigBlueButtonBN/view';
$string['starts_at'] = 'Bắt đầu';
$string['started_at'] = 'Đã bắt đầu';
$string['ends_at'] = 'Kết thúc';
$string['calendarstarts'] = '{$a} được lên kế hoạch cho';
$string['pluginadministration'] = 'Quản trị BigBlueButton';
$string['pluginname'] = 'BigBlueButtonBN';
$string['serverhost'] = 'Tên máy chủ';
$string['view_error_no_group_student'] = 'Bạn chưa được ghi danh vào một nhóm. Vui lòng liên hệ với Giáo viên hoặc Quản trị viên của bạn.';
$string['view_error_no_group_teacher'] = 'Không có nhóm nào được cấu hình. Vui lòng thiết lập nhóm hoặc liên hệ với Quản trị viên.';
$string['view_error_no_group'] ='Không có nhóm nào được cấu hình. Vui lòng thành lập các nhóm trước khi cố gắng tham gia cuộc họp.';
$string['view_error_unable_join_student'] = 'Không thể kết nối với máy chủ BigBlueButton. Vui lòng liên hệ với Giáo viên hoặc Quản trị viên của bạn. ';
$string['view_error_unable_join_teacher'] = 'Không thể kết nối với máy chủ BigBlueButton. Vui lòng liên hệ với Quản trị viên.';
$string['view_error_unable_join'] = 'Không thể tham gia cuộc họp. Vui lòng kiểm tra url của máy chủ BigBlueButton VÀ kiểm tra xem máy chủ BigBlueButton có chạy không.';
$string['view_error_bigbluebutton'] = 'BigBlueButton đã trả lời với các lỗi. {$a}';
$string['view_error_create'] = 'Máy chủ BigBlueButton phản hồi với thông báo lỗi, cuộc họp không thể được tạo.';
$string['view_error_max_concurrent'] = 'Số lượng các cuộc họp đồng thời được phép đã đạt được.';
$string['view_error_userlimit_reached'] = 'Số lượng người dùng được phép trong một cuộc họp đã đạt được.';
$string['view_error_url_missing_parameters'] = 'Có các tham số bị thiếu trong URL này';
$string['view_error_import_no_courses'] = 'Không có khóa học để tìm bản ghi âm';
$string['view_error_import_no_recordings'] = 'Không có bản ghi trong khóa học này để nhập khẩu';
$string['view_error_invalid_session'] = 'Phiên đã hết hạn. Quay trở lại trang chính của hoạt động.';
$string['view_groups_selection_join'] = 'Tham gia';
$string['view_groups_selection'] = 'Chọn nhóm bạn muốn tham gia và xác nhận hành động';
$string['view_login_moderator'] = 'Đăng nhập với tư cách người điều hành ...';
$string['view_login_viewer'] = 'Đăng nhập với tư cách người xem ...';
$string['view_noguests'] = 'BigBlueButtonBN không mở cửa cho khách';
$string['view_nojoin'] = 'Bạn không có vai trò được phép tham gia phiên này.';
$string['view_recording_list_actionbar_edit'] = 'Biên tập';
$string['view_recording_list_actionbar_delete'] = 'Xóa bỏ';
$string['view_recording_list_actionbar_import'] = 'Nhập';
$string['view_recording_list_actionbar_hide'] = 'Ẩn giấu';
$string['view_recording_list_actionbar_show'] = 'Trình diễn';
$string['view_recording_list_actionbar_publish'] = 'Công bố';
$string['view_recording_list_actionbar_unpublish'] = 'Chưa công bố';
$string['view_recording_list_actionbar_protect'] = 'Làm cho nó riêng tư';
$string['view_recording_list_actionbar_unprotect'] = 'Công khai';
$string['view_recording_list_action_publish'] = 'Xuất bản';
$string['view_recording_list_action_unpublish'] = 'Chưa công bố';
$string['view_recording_list_action_process'] = 'Chế biến';
$string['view_recording_list_action_delete'] = 'Xóa';
$string['view_recording_list_action_protect'] = 'Bảo vệ';
$string['view_recording_list_action_unprotect'] = 'Không bảo vệ';
$string['view_recording_list_action_update'] = 'Đang cập nhật';
$string['view_recording_list_action_edit'] = 'Đang cập nhật';
$string['view_recording_list_action_play'] = 'Phát';
$string['view_recording_list_actionbar'] = 'Thanh công cụ';
$string['view_recording_list_activity'] = 'Hoạt động';
$string['view_recording_list_course'] = 'Khóa học';
$string['view_recording_list_date'] = 'Ngày';
$string['view_recording_list_description'] = 'Sự miêu tả';
$string['view_recording_list_duration'] = 'Thời lượng';
$string['view_recording_list_recording'] = 'ghi âm';
$string['view_recording_button_import'] = 'Nhập liên kết ghi âm';
$string['view_recording_button_return'] = 'Quay lại';
$string['view_recording_format_presentation'] = 'thuyết trình';
$string['view_recording_format_video'] = 'video';
$string['view_recording_format_statistics'] = 'số liệu thống kê';
$string['view_recording_format_errror_unreachable'] = 'URL cho định dạng ghi này là không thể truy cập.';
$string['view_section_title_presentation'] = 'Tập tin thuyết trình';
$string['view_section_title_recordings'] = 'Ghi chép';
$string['view_message_norecordings'] = 'Không có ghi âm để hiển thị.';
$string['view_message_finished'] = 'Hoạt động này đã kết thúc.';
$string['view_message_notavailableyet'] = 'Phiên này chưa có sẵn.';

$string['view_message_session_started_at'] = 'Phiên này bắt đầu lúc';
$string['view_message_session_running_for'] = 'Phiên này đã được chạy cho';
$string['view_message_hour'] = 'giờ';
$string['view_message_hours'] = 'giờ';
$string['view_message_minute'] = 'phút';
$string['view_message_minutes'] = 'phút';
$string['view_message_moderator'] = 'người điều hành';
$string['view_message_moderators'] = 'người điều hành';
$string['view_message_viewer'] = 'người xem';
$string['view_message_viewers'] = 'những người xem';
$string['view_message_user'] = 'người dùng';
$string['view_message_users'] = 'người dùng';
$string['view_message_has_joined'] = 'đã tham gia';
$string['view_message_have_joined'] = 'đã tham gia';
$string['view_message_session_no_users'] = 'Không có người dùng trong phiên này';
$string['view_message_session_has_user'] = 'Có';
$string['view_message_session_has_users'] = 'Có';
$string['view_message_session_for'] = 'phiên cho';
$string['view_message_times'] = 'lần';

$string['view_message_room_closed'] = 'Phòng này đã đóng cửa.';
$string['view_message_room_ready'] = 'Phòng này đã sẵn sàng.';
$string['view_message_room_open'] = 'Phòng này mở.';
$string['view_message_conference_room_ready'] = 'Phòng hội nghị này đã sẵn sàng. Bạn có thể tham gia phiên ngay bây giờ.';
$string['view_message_conference_not_started'] = 'Hội nghị này chưa bắt đầu.';
$string['view_message_conference_wait_for_moderator'] = 'Chờ đợi một người điều hành tham gia.';
$string['view_message_conference_in_progress'] = 'Hội nghị này đang được tiến hành.';
$string['view_message_conference_has_ended'] = 'Hội nghị này đã kết thúc.';
$string['view_message_tab_close'] = 'Tab / cửa sổ này phải được đóng bằng tay';
$string['view_message_recordings_disabled'] = 'Bản ghi đã bị vô hiệu hóa trên máy chủ này. Không thể sử dụng các trường hợp BigBlueButtonBN cho bản ghi.';
$string['view_message_importrecordings_disabled'] = 'Tính năng nhập liên kết ghi âm bị vô hiệu hóa trên máy chủ này.';

$string['view_groups_selection_warning'] = 'Có một phòng hội nghị cho mỗi nhóm và bạn có quyền truy cập vào nhiều hơn một. Hãy chắc chắn để chọn đúng.';
$string['view_groups_nogroups_warning'] = 'Phòng được cấu hình để sử dụng các nhóm nhưng khóa học không có các nhóm được xác định.';
$string['view_groups_notenrolled_warning'] = 'Phòng được cấu hình để sử dụng các nhóm nhưng bạn không đăng ký vào bất kỳ nhóm nào.';
$string['view_conference_action_join'] = 'Tham gia phiên';
$string['view_conference_action_end'] = 'Phiên kết thúc';

$string['view_recording'] = 'ghi âm';
$string['view_recording_link'] = 'liên kết nhập khẩu';
$string['view_recording_link_warning'] = 'Đây là một liên kết chỉ đến một bản ghi được tạo trong một khóa học hoặc hoạt động khác';
$string['view_recording_delete_confirmation'] = 'Bạn có chắc chắn để xóa cái này {$a}?';
$string['view_recording_delete_confirmation_warning_s'] = 'Bản ghi này có {$a} liên kết được nhập trong một khóa học hoặc hoạt động khác nhau. Nếu bản ghi bị xóa, liên kết đó cũng sẽ bị xóa';
$string['view_recording_delete_confirmation_warning_p'] = 'Bản ghi này có {$a} liên kết liên kết được nhập khẩu trong các khóa học hoặc hoạt động khác nhau. Nếu bản ghi bị xóa, các liên kết cũng sẽ bị xóa';
$string['view_recording_publish_link_deleted'] = 'Liên kết này không thể được xuất bản lại vì bản ghi thực tế không tồn tại trong máy chủ BigBlueButton hiện tại. Các liên kết nên được gỡ bỏ.';
$string['view_recording_publish_link_not_published'] = 'Liên kết này không thể được xuất bản lại vì bản ghi thực tế chưa được công bố';
$string['view_recording_unpublish_confirmation'] = 'Bạn có chắc chắn không công bố điều này{$a}?';
$string['view_recording_unpublish_confirmation_warning_s'] = 'Bản ghi này có {$a} lmực liên quan đã được nhập khẩu trong một khóa học hoặc hoạt động khác nhau. Nếu bản ghi chưa được công bố, liên kết đó cũng sẽ không được công bố';
$string['view_recording_unpublish_confirmation_warning_p'] = 'Bản ghi này có các liên kết {$ a} được liên kết đã được nhập trong các khóa học hoặc hoạt động khác nhau. Nếu bản ghi chưa được công bố, các liên kết đó cũng sẽ không được công bố';
$string['view_recording_import_confirmation'] = 'Bạn có chắc chắn nhập bản ghi này?';
$string['view_recording_unprotect_link_deleted'] = 'Liên kết này không thể không được bảo vệ vì bản ghi thực tế không tồn tại trong máy chủ BigBlueButton hiện tại. Liên kết nên được gỡ bỏ.';
$string['view_recording_unprotect_link_not_unprotected'] = 'Liên kết này không thể không được bảo vệ vì bản ghi thực tế được bảo vệ';
$string['view_recording_actionbar'] = 'Thanh công cụ';
$string['view_recording_activity'] = 'Hoạt động';
$string['view_recording_course'] = 'Khóa học';
$string['view_recording_date'] = 'Ngày';
$string['view_recording_description'] = 'Sự miêu tả';
$string['view_recording_length'] = 'Chiều dài';
$string['view_recording_duration'] = 'Thời lượng';
$string['view_recording_recording'] = 'ghi âm';
$string['view_recording_duration_min'] = 'tôi';
$string['view_recording_name'] = 'Tên';
$string['view_recording_tags'] = 'Thẻ';
$string['view_recording_playback'] = 'Phát lại';
$string['view_recording_preview'] = 'Xem trước';
$string['view_recording_preview_help'] = 'Di chuột qua một hình ảnh để xem nó ở kích thước đầy đủ';
$string['view_recording_modal_button'] = 'Ứng dụng';
$string['view_recording_modal_title'] = 'Đặt giá trị để ghi';

$string['event_activity_created'] = 'Hoạt động BigBlueButtonBN được tạo';
$string['event_activity_deleted'] = 'Đã xóa hoạt động BigBlueButtonBN';
$string['event_activity_modified'] = 'Hoạt động BigBlueButtonBN được sửa đổi';
$string['event_activity_viewed'] = 'Hoạt động BigBlueButtonBN đã xem';
$string['event_activity_viewed_all'] = 'Quản lý hoạt động BigBlueButtonBN đã xem';
$string['event_meeting_created'] = 'Cuộc họp BigBlueButtonBN đã được tạo';
$string['event_meeting_ended'] = 'Cuộc họp BigBlueButtonBN buộc phải kết thúc';
$string['event_meeting_joined'] = 'Cuộc họp BigBlueButtonBN đã tham gia';
$string['event_meeting_left'] = 'Cuộc họp BigBlueButtonBN còn lại';
$string['event_recording_deleted'] = 'Ghi âm đã bị xóa';
$string['event_recording_imported'] = 'Ghi âm nhập khẩu';
$string['event_recording_published'] = 'Ghi âm được xuất bản';
$string['event_recording_unpublished'] = 'Ghi âm chưa được công bố';

$string['instance_type_default'] = 'Phòng / Hoạt động với bản ghi âm';
$string['instance_type_room_only'] = 'Chỉ phòng / hoạt động';
$string['instance_type_recording_only'] = 'Chỉ ghi';

$string['email_body_notification_meeting_has_been'] = 'đã được';
$string['email_body_notification_meeting_details'] = 'Chi tiết';
$string['email_body_notification_meeting_title'] = 'Tiêu đề';
$string['email_body_notification_meeting_description'] = 'Sự miêu tả';
$string['email_body_notification_meeting_start_date'] = 'Ngày bắt đầu';
$string['email_body_notification_meeting_end_date'] = 'Ngày cuối';
$string['email_body_notification_meeting_by'] = 'bởi';
$string['email_body_recording_ready_for'] = 'Ghi âm cho';
$string['email_body_recording_ready_is_ready'] = 'sẵn sàng';
$string['email_footer_sent_by'] = 'Tin nhắn thông báo tự động này đã được gửi bởi';
$string['email_footer_sent_from'] = 'từ khóa học';

$string['view_error_meeting_not_running'] = 'Đã xảy ra lỗi, cuộc họp không diễn ra.';
$string['view_error_current_state_not_found'] = 'Tình trạng hiện tại không được tìm thấy. Bản ghi có thể đã bị xóa hoặc máy chủ BigBlueButton không tương thích với hành động được thực hiện.';
$string['view_error_action_not_completed'] = 'Hành động không thể hoàn thành';
$string['view_warning_default_server'] = 'Máy chủ Moodle này đang sử dụng máy chủ thử nghiệm BigBlueButton được cấu hình sẵn theo mặc định. Nó nên được thay thế cho sản xuất.';

$string['view_room'] = 'Xem phòng';

$string['mod_form_block_clienttype'] = 'Công nghệ máy khách';
$string['mod_form_block_clienttype_flash'] = 'Ứng dụng khách dựa trên công nghệ Adobe Flash';
$string['mod_form_block_clienttype_html5'] = 'Ứng dụng khách dựa trên công nghệ HTML5';
$string['mod_form_field_block_clienttype'] = 'Công nghệ máy khách';

$string['config_clienttype'] = 'Cấu hình cho loại "Máy khách Web"';
$string['config_clienttype_default'] = 'Kiểu máy khách Web mặc định';
$string['config_clienttype_default_description'] = 'Chọn giữa ứng dụng khách Adobe Flash cổ điển hoặc ứng dụng HTML5 mới.';
$string['config_clienttype_description'] = 'Cài đặt này bật / tắt lựa chọn Máy khách Web cho mỗi phòng.';
$string['config_clienttype_editable'] = 'Lựa chọn Web Client có thể được chỉnh sửa';
$string['config_clienttype_editable_description'] = 'Tùy chọn này cho phép lựa chọn Máy khách Web (AdobeFlash / HTML5) từ biểu mẫu chỉnh sửa phòng.';
