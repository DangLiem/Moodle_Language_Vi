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
 * Book module language strings
 *
 * @package    mod_book
 * @copyright  2004-2012 Petr Skoda {@link http://skodak.org}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['modulename'] = 'Sách';
$string['modulename_help'] = 'Mô-đun sách cho phép giáo viên tạo tài nguyên nhiều trang theo định dạng giống như sách, với các chương và chương. Sách có thể chứa các tệp phương tiện cũng như văn bản và rất hữu ích để hiển thị các đoạn thông tin dài có thể được chia thành các phần.

    Một cuốn sách có thể được sử dụng
    
    * Để hiển thị tài liệu đọc cho các mô-đun nghiên cứu riêng lẻ
    * Là một sổ tay bộ phận nhân viên
* Như một danh mục đầu tư giới thiệu công việc của sinh viên';
$string['modulename_link'] = 'mod/book/view';
$string['modulenameplural'] = 'Sách';
$string['pluginname'] = 'Sách';
$string['pluginadministration'] = 'Quản trị sách';

$string['toc'] = 'Mục lục';
$string['chapterandsubchaptersdeleted'] = 'Chương "{$a->title}" và nó {$a->subchapters} các chương đã bị xóa';
$string['chapterdeleted'] = 'Chương "{$a->title}" đã bị xóa';
$string['customtitles'] = 'Tiêu đề tùy chỉnh';
$string['customtitles_help'] = 'Thông thường tiêu đề chương được hiển thị trong mục lục (TOC) VÀ như một tiêu đề bên trên nội dung.

Nếu hộp kiểm tiêu đề tùy chỉnh được đánh dấu, tiêu đề chương KHÔNG được hiển thị dưới dạng tiêu đề phía trên nội dung. Một tiêu đề khác (có lẽ dài hơn tiêu đề chương) có thể được nhập vào như một phần của nội dung.';
$string['chapters'] = 'Chương';
$string['chaptertitle'] = 'Tiêu đề chương';
$string['content'] = 'Nội dung';
$string['deletechapter'] = 'Xóa chương "{$a}"';
$string['editingchapter'] = 'Chỉnh sửa chương';
$string['eventchaptercreated'] = 'Chương đã tạo';
$string['eventchapterdeleted'] = 'Chương đã bị xóa';
$string['eventchapterupdated'] = 'Chương cập nhật';
$string['eventchapterviewed'] = 'Chương đã xem';
$string['editchapter'] = 'Chỉnh sửa chương "{$a}"';
$string['hidechapter'] = 'Ẩn chương "{$a}"';
$string['indicator:cognitivedepth'] = 'Sách nhận thức';
$string['indicator:cognitivedepth_help'] = 'Chỉ số này dựa trên độ sâu nhận thức mà học sinh đạt được trong tài nguyên Sách.';
$string['indicator:socialbreadth'] = 'Sách xã hội';
$string['indicator:socialbreadth_help'] = 'Chỉ số này dựa trên chiều rộng xã hội mà học sinh đạt được trong tài nguyên Sách.';
$string['movechapterup'] = 'Chuyển chương lên "{$a}"';
$string['movechapterdown'] = 'Chuyển chương xuốngn "{$a}"';
$string['privacy:metadata'] = 'Các mô-đun hoạt động cuốn sách không lưu trữ bất kỳ dữ liệu cá nhân.';
$string['search:activity'] = 'Sách - thông tin tài nguyên';
$string['search:chapter'] = 'Sách - chương';
$string['showchapter'] = 'Hiển thị chương "{$a}"';
$string['subchapter'] = 'Phân chương';
$string['navimages'] = 'Hình ảnh';
$string['navoptions'] = 'Tùy chọn có sẵn cho các liên kết điều hướng';
$string['navoptions_desc'] = 'Tùy chọn để hiển thị điều hướng trên các trang sách';
$string['navstyle'] = 'Phong cách điều hướng';
$string['navstyle_help'] = '* Hình ảnh - Biểu tượng được sử dụng để điều hướng
* Văn bản - Tiêu đề chương được sử dụng để điều hướng';
$string['navtext'] = 'Bản văn';
$string['navtoc'] = 'chỉ TOC';
$string['nocontent'] = 'Không có nội dung đã được thêm vào cuốn sách này.';
$string['numbering'] = 'Định dạng chương';
$string['numbering_help'] = '* Không có - Tiêu đề chương và chương phụ không có định dạng
* Số - Các chương và tiêu đề chương phụ được đánh số 1, 1.1, 1.2, 2 ,...
* Đạn - Các chương con được thụt lề và hiển thị bằng các viên đạn trong mục lục
* Thụt lề - Các chương được thụt lề trong mục lục';
$string['numbering0'] = 'không ai';
$string['numbering1'] = 'Số';
$string['numbering2'] = 'Đạn';
$string['numbering3'] = 'Thụt lề';
$string['numberingoptions'] = 'Tùy chọn có sẵn để định dạng chương';
$string['numberingoptions_desc'] = 'Tùy chọn để hiển thị chương và chương trong mục lục';
$string['addafter'] = 'Thêm chương mới';
$string['confchapterdelete'] = 'Bạn có thực sự muốn xóa chương này không?';
$string['confchapterdeleteall'] = 'Bạn có thực sự muốn xóa chương này và tất cả các chương của nó không?';
$string['top'] = 'hàng đầu';
$string['navprev'] = 'Trước';
$string['navprevtitle'] = 'Trước: {$a}';
$string['navnext'] = 'Kế tiếp';
$string['navnexttitle'] = 'Kế tiếp: {$a}';
$string['navexit'] = 'Thoát sổ';
$string['book:addinstance'] = 'Thêm một cuốn sách mới';
$string['book:read'] = 'Xem sách';
$string['book:edit'] = 'Chỉnh sửa chương sách';
$string['book:viewhiddenchapters'] = 'Xem các chương sách ẩn';
$string['errorchapter'] = 'Lỗi đọc chương sách.';

$string['page-mod-book-x'] = 'Bất kỳ trang mô-đun sách';
$string['subchapternotice'] = '(Chỉ khả dụng khi chương đầu tiên được tạo)';
$string['subplugintype_booktool'] = 'Công cụ sách';
$string['subplugintype_booktool_plural'] = 'Dụng cụ sách';

$string['removeallbooktags'] = 'Xóa tất cả các thẻ sách';
$string['tagarea_book_chapters'] = 'Chương sách';
$string['tagsdeleted'] = 'Thẻ sách đã bị xóa';
