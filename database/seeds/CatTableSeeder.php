<?php

use Illuminate\Database\Seeder;

class CatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $dataSets =
            [
            [4, 'Điện tử', '0', 'leftmenu_icon_1.png', 'Dien-Tu', 'Dien-Tu', '2017-01-19 02:58:24', '2017-01-19 02:58:24'],
            [5, 'Tivi', '4', '', 'Tivi', 'Tivi', '2017-01-19 03:00:10', '2017-01-19 03:00:10'],
            [6, 'Dàn máy nghe nhạc', '4', '', 'Dan-May-Nghe-Nhac', 'Dan-May-Nghe-Nhac', '2017-01-19 03:00:39', '2017-01-19 03:00:39'],
            [7, 'Điện lạnh', '0', 'leftmenu_icon_2.png', 'Dien-Lanh', 'Dien-Lanh', '2017-01-19 03:16:37', '2017-01-19 03:16:37'],
            [8, 'Đầu đĩa DVD Bluray - Karaoke', '4', '', 'Dau-Dia-Dvd-Bluray---Karaoke', 'Dau-Dia-Dvd-Bluray---Karaoke', '2017-01-19 03:17:19', '2017-01-19 03:17:19'],
            [9, 'Amply & Loa', '4', '', 'Amply-&-Loa', 'Amply-&-Loa', '2017-01-19 03:17:28', '2017-01-19 03:17:28'],
            [10, 'Máy radio cassette', '4', '', 'May-Radio-Cassette', 'May-Radio-Cassette', '2017-01-19 03:17:43', '2017-01-19 03:17:43'],
            [11, 'Máy giặt', '7', '', 'May-Giat', 'May-Giat', '2017-01-19 03:18:29', '2017-01-19 03:18:29'],
            [12, 'Máy lạnh', '7', '', 'May-Lanh', 'May-Lanh', '2017-01-19 03:18:40', '2017-01-19 03:18:40'],
            [13, 'Tủ lạnh', '7', '', 'Tu-Lanh', 'Tu-Lanh', '2017-01-19 03:19:00', '2017-01-19 03:19:00'],
            [14, 'Máy nước nóng', '7', '', 'May-Nuoc-Nong', 'May-Nuoc-Nong', '2017-01-19 03:19:14', '2017-01-19 03:19:14'],
            [15, 'Máy sấy quần áo', '7', '', 'May-Say-Quan-Ao', 'May-Say-Quan-Ao', '2017-01-19 03:19:34', '2017-01-19 03:19:34'],
            [16, 'Tủ đông', '7', '', 'Tu-Dong', 'Tu-Dong', '2017-01-19 03:19:51', '2017-01-19 03:19:51'],
            [17, 'Tủ mát - Tủ giữ lạnh', '7', '', 'Tu-Mat---Tu-Giu-Lanh', 'Tu-Mat---Tu-Giu-Lanh', '2017-01-19 03:20:09', '2017-01-19 03:20:09'],
            [19, 'Máy lọc nước', '7', '', 'May-Loc-Nuoc', 'May-Loc-Nuoc', '2017-01-19 04:39:39', '2017-01-19 04:39:39'],
            [20, 'Nhà bếp', '0', 'leftmenu_icon_3.png', 'Nha-Bep', 'Nha-Bep', '2017-01-24 14:46:10', '2017-01-24 14:46:10'],
            [21, 'Nồi cơm điện', '20', '', 'Noi-Com-Dien', 'Noi-Com-Dien', '2017-01-24 14:46:38', '2017-01-24 14:46:38'],
            [22, 'Bếp ga', '20', '', 'Bep-Ga', 'Bep-Ga', '2017-01-24 14:46:55', '2017-01-24 14:46:55'],
            [23, 'Lò vi sóng', '20', '', 'Lo-Vi-Song', 'Lo-Vi-Song', '2017-01-24 14:47:08', '2017-01-24 14:47:08'],
            [24, 'Nồi đa năng', '20', '', 'Noi-Da-Nang', 'Noi-Da-Nang', '2017-01-24 14:48:19', '2017-01-24 14:48:19'],
            [25, 'Bộ nồi nấu ăn', '20', '', 'Bo-Noi-Nau-An', 'Bo-Noi-Nau-An', '2017-01-24 14:48:39', '2017-01-24 14:48:39'],
            [26, 'Chảo chống dính', '20', '', 'Chao-Chong-Dinh', 'Chao-Chong-Dinh', '2017-01-24 14:48:56', '2017-01-24 14:48:56'],
            [27, 'Gia dụng', '0', 'leftmenu_icon_4.png', 'Gia-Dung', 'Gia-Dung', '2017-01-24 14:49:10', '2017-01-24 14:49:10'],
            [28, 'Quạt điện - Quạt máy', '27', '', 'Quat-Dien---Quat-May', 'Quat-Dien---Quat-May', '2017-01-24 14:49:32', '2017-01-24 14:49:32'],
            [29, 'Máy hút bụi', '27', '', 'May-Hut-Bui', 'May-Hut-Bui', '2017-01-24 15:02:14', '2017-01-24 15:02:14'],
            [30, 'Bàn ủi - Bàn là', '27', '', 'Ban-Ui---Ban-La', 'Ban-Ui---Ban-La', '2017-01-24 15:02:26', '2017-01-24 15:02:26'],
            [31, 'Máy hút ẩm', '27', '', 'May-Hut-Am', 'May-Hut-Am', '2017-01-24 15:02:37', '2017-01-24 15:02:37'],
            [32, 'Quạt phun sương - Quạt hơi nước', '27', '', 'Quat-Phun-Suong---Quat-Hoi-Nuoc', 'Quat-Phun-Suong---Quat-Hoi-Nuoc', '2017-01-24 15:02:53', '2017-01-24 15:02:53'],
            [33, 'Bình lọc nước', '27', '', 'Binh-Loc-Nuoc', 'Binh-Loc-Nuoc', '2017-01-24 15:03:00', '2017-01-24 15:03:00'],
            [34, 'Máy pha cà phê', '27', '', 'May-Pha-Ca-Phe', 'May-Pha-Ca-Phe', '2017-01-24 15:03:09', '2017-01-24 15:03:09'],
            [35, 'Viễn thông', '0', 'leftmenu_icon_5.png', 'Vien-Thong', 'Vien-Thong', '2017-01-24 15:03:39', '2017-01-24 15:03:39'],
            [36, 'Điện thoại di động', '35', '', 'Dien-Thoai-Di-Dong', 'Dien-Thoai-Di-Dong', '2017-01-24 15:03:58', '2017-01-24 15:03:58'],
            [37, 'Máy tính bảng', '35', '', 'May-Tinh-Bang', 'May-Tinh-Bang', '2017-01-24 15:04:10', '2017-01-24 15:04:10'],
            [38, 'Điện thoại bàn', '35', '', 'Dien-Thoai-Ban', 'Dien-Thoai-Ban', '2017-01-24 15:04:20', '2017-01-24 15:04:20'],
            [39, 'Phụ Kiện Điện Thoại', '35', '', 'Phu-Kien-Dien-Thoai', 'Phu-Kien-Dien-Thoai', '2017-01-24 15:04:29', '2017-01-24 15:04:29'],
            [40, 'Tin học', '0', 'leftmenu_icon_6.png', 'Tin-Hoc', 'Tin-Hoc', '2017-01-24 15:05:33', '2017-01-24 15:05:33'],
            [41, 'Máy tính xách tay', '40', '', 'May-Tinh-Xach-Tay', 'May-Tinh-Xach-Tay', '2017-01-24 15:05:44', '2017-01-24 15:05:44'],
            [42, 'Máy tính để bàn', '40', '', 'May-Tinh-De-Ban', 'May-Tinh-De-Ban', '2017-01-24 15:05:55', '2017-01-24 15:05:55'],
            [43, 'Màn hình vi tính LCD', '40', '', 'Man-Hinh-Vi-Tinh-Lcd', 'Man-Hinh-Vi-Tinh-Lcd', '2017-01-24 15:06:06', '2017-01-24 15:06:06'],
            [44, 'Loa vi tính', '40', '', 'Loa-Vi-Tinh', 'Loa-Vi-Tinh', '2017-01-24 15:06:15', '2017-01-24 15:06:15'],
            [45, 'Phụ Kiện Tin Học', '40', '', 'Phu-Kien-Tin-Hoc', 'Phu-Kien-Tin-Hoc', '2017-01-24 15:06:26', '2017-01-24 15:06:26'],
            [46, 'Kỹ thuật số', '0', 'leftmenu_icon_7.png', 'Ky-Thuat-So', 'Ky-Thuat-So', '2017-01-24 15:06:42', '2017-01-24 15:06:42'],
            [47, 'Máy ảnh ống kính rời', '46', '', 'May-Anh-Ong-Kinh-Roi', 'May-Anh-Ong-Kinh-Roi', '2017-01-24 15:06:57', '2017-01-24 15:06:57'],
            [48, 'Máy ảnh du lịch', '46', '', 'May-Anh-Du-Lich', 'May-Anh-Du-Lich', '2017-01-24 15:07:19', '2017-01-24 15:07:19'],
            [49, 'Máy quay phim', '46', '', 'May-Quay-Phim', 'May-Quay-Phim', '2017-01-24 15:07:37', '2017-01-24 15:07:37'],
            [50, 'Camera quan sát', '46', '', 'Camera-Quan-Sat', 'Camera-Quan-Sat', '2017-01-24 15:07:49', '2017-01-24 15:07:49'],
            [51, 'Máy ghi âm', '46', '', 'May-Ghi-Am', 'May-Ghi-Am', '2017-01-24 15:08:02', '2017-01-24 15:08:02'],
            [52, 'Máy nghe nhạc MP3/MP4', '46', '', 'May-Nghe-Nhac-Mp3/mp4', 'May-Nghe-Nhac-Mp3/mp4', '2017-01-24 15:08:16', '2017-01-24 15:08:16'],
            [53, 'Thiết bị giải trí', '46', '', 'Thiet-Bi-Giai-Tri', 'Thiet-Bi-Giai-Tri', '2017-01-24 15:08:31', '2017-01-24 15:08:31'],
            [54, 'Phụ Kiện Kỹ Thuật Số', '46', '', 'Phu-Kien-Ky-Thuat-So', 'Phu-Kien-Ky-Thuat-So', '2017-01-24 15:08:45', '2017-01-24 15:08:45'],
            [55, 'Thiết bị văn phòng', '0', 'leftmenu_icon_8.png', 'Thiet-Bi-Van-Phong', 'Thiet-Bi-Van-Phong', '2017-01-24 15:09:19', '2017-01-24 15:09:19'],
            [56, 'Máy in', '55', '', 'May-In', 'May-In', '2017-01-24 15:09:30', '2017-01-24 15:09:30'],
            [57, 'Máy scan', '55', '', 'May-Scan', 'May-Scan', '2017-01-24 15:09:42', '2017-01-24 15:09:42'],
            [58, 'Máy chiếu', '55', '', 'May-Chieu', 'May-Chieu', '2017-01-24 15:09:55', '2017-01-24 15:09:55'],
            [59, 'Máy hủy giấy', '55', '', 'May-Huy-Giay', 'May-Huy-Giay', '2017-01-24 15:10:07', '2017-01-24 15:10:07'],
            [60, 'Máy đếm tiền', '55', '', 'May-Dem-Tien', 'May-Dem-Tien', '2017-01-24 15:10:37', '2017-01-24 15:10:37'],
            [61, 'Từ điển điện tử', '55', '', 'Tu-Dien-Dien-Tu', 'Tu-Dien-Dien-Tu', '2017-01-24 15:10:50', '2017-01-24 15:10:50'],
            [62, 'Điện cơ', '0', 'leftmenu_icon_9.png', 'Dien-Co', 'Dien-Co', '2017-01-24 15:11:03', '2017-01-24 15:11:03'],
            [63, 'Phụ kiện', '0', 'leftmenu_icon_10.png', 'Phu-Kien', 'Phu-Kien', '2017-01-24 15:11:34', '2017-01-24 15:11:34'],
            [64, 'Sức khỏe làm đẹp', '0', 'leftmenu_icon_11.png', 'Suc-Khoe-Lam-Dep', 'Suc-Khoe-Lam-Dep', '2017-01-24 15:11:44', '2017-01-24 15:11:44'],
            [65, 'Bách hóa', '0', 'leftmenu_icon_12.png', 'Bach-Hoa', 'Bach-Hoa', '2017-01-24 15:11:54', '2017-01-24 15:11:54'],
            [66, 'Gối', '65', '', 'Goi', 'Goi', '2017-01-24 15:12:11', '2017-01-24 15:12:11'],
            [67, 'Vali', '65', '', 'Vali', 'Vali', '2017-01-24 15:12:24', '2017-01-24 15:12:24'],
            [68, 'Ba lô', '65', '', 'Ba-Lo', 'Ba-Lo', '2017-01-24 15:12:40', '2017-01-24 15:12:40'],
            [69, 'Mền', '65', '', 'Men', 'Men', '2017-01-24 15:12:50', '2017-01-24 15:12:50'],
            [70, 'Hóa mỹ phẩm', '65', '', 'Hoa-My-Pham', 'Hoa-My-Pham', '2017-01-24 15:13:01', '2017-01-24 15:13:01'],
            [71, 'Bộ drap trải giường và áo gối', '65', '', 'Bo-Drap-Trai-Giuong-Va-Ao-Goi', 'Bo-Drap-Trai-Giuong-Va-Ao-Goi', '2017-01-24 15:13:15', '2017-01-24 15:13:15'],
            ];

        foreach ($dataSets as $safety) {
            $dataSet[] = [
                'id'          => $safety[0],
                'name'        => $safety[1],
                'parent_id'   => $safety[2],
                'icon'        => $safety[3],
                'keyword'     => $safety[4],
                'description' => $safety[5],
                'created_at'  => $safety[6],
                'updated_at'  => $safety[7],
            ];
        }

        DB::table('cats')->insert($dataSet);
    }
}
