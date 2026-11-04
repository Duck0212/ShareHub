<?php

namespace Database\Seeders;

use App\Models\Asset;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Lấy danh sách ID của User và Category hiện có
        $userIds = User::pluck('id')->toArray();
        $categories = Category::all();

        // Nếu chưa có User nào thì lấy ID = 1 làm fallback
        $defaultUserId = !empty($userIds) ? $userIds[0] : 1;

        // Nếu chưa có danh mục nào trong DB, tạo danh mục mặc định
        if ($categories->isEmpty()) {
            $categoryIds = [1];
        } else {
            $categoryIds = $categories->pluck('id')->toArray();
        }

        // 2. Kho dữ liệu mẫu phong phú các địa phương (tránh lặp lại Hà Nội / HCM / Huế)
        $locations = [
            ['city' => 'Thành phố Đà Nẵng', 'district' => 'Quận Hải Châu', 'address' => '154 Trần Phú'],
            ['city' => 'Thành phố Đà Nẵng', 'district' => 'Quận Sơn Trà', 'address' => '88 Võ Nguyên Giáp'],
            ['city' => 'Thành phố Cần Thơ', 'district' => 'Quận Ninh Kiều', 'address' => '42 Hòa Bình'],
            ['city' => 'Thành phố Hải Phòng', 'district' => 'Quận Hồng Bàng', 'address' => '12 Quang Trung'],
            ['city' => 'Tỉnh Quảng Ninh', 'district' => 'Thành phố Hạ Long', 'address' => '25 Lê Thánh Tông'],
            ['city' => 'Tỉnh Lâm Đồng', 'district' => 'Thành phố Đà Lạt', 'address' => '10 Trần Phú'],
            ['city' => 'Tỉnh Khánh Hòa', 'district' => 'Thành phố Nha Trang', 'address' => '78 Trần Phú'],
            ['city' => 'Tỉnh Bình Dương', 'district' => 'Thành phố Thủ Dầu Một', 'address' => '120 Đại lộ Bình Dương'],
            ['city' => 'Tỉnh Đồng Nai', 'district' => 'Thành phố Biên Hòa', 'address' => '45 Đồng Khởi'],
            ['city' => 'Tỉnh Vĩnh Phúc', 'district' => 'Thành phố Vĩnh Yên', 'address' => '89 Lí Thái Tổ'],
            ['city' => 'Tỉnh Kiên Giang', 'district' => 'Thành phố Phú Quốc', 'address' => '15 Trần Hưng Đạo'],
            ['city' => 'Tỉnh Bà Rịa - Vũng Tàu', 'district' => 'Thành phố Vũng Tàu', 'address' => '56 Thùy Vân'],
            ['city' => 'Tỉnh Đắk Lắk', 'district' => 'Thành phố Buôn Ma Thuột', 'address' => '32 Phan Chu Trinh'],
            ['city' => 'Tỉnh Thanh Hóa', 'district' => 'Thành phố Thanh Hóa', 'address' => '102 Đại lộ Lê Lợi'],
            ['city' => 'Tỉnh Nghệ An', 'district' => 'Thành phố Vinh', 'address' => '67 Nguyễn Thị Minh Khai'],
        ];

        // 3. Kho danh sách tài sản đa dạng chủ đề
        $sampleAssets = [
            [
                'title' => 'Máy ảnh Sony Alpha A7 Mark IV Body',
                'brand' => 'Sony',
                'model' => 'ILCE-7M4',
                'description' => "Cảm biến 33MP, quay video 4K 60p 10-bit. Máy mới đẹp, sensor sạch không tì vết, hoạt động hoàn hảo.",
                'accessories' => '2 Pin zin, Sạc đôi, Thẻ nhớ 128GB V60, Dây đeo.',
                'condition' => 'like_new',
            ],
            [
                'title' => 'Lens Sony FE 24-70mm F2.8 GM II',
                'brand' => 'Sony',
                'model' => 'SEL2470GM2',
                'description' => "Ống kính Zoom đa dụng cao cấp nhất. Kính trong suốt không mốc xước, lấy nét siêu nhanh.",
                'accessories' => 'Cap trước sau, Hood zin, Filter bảo vệ B+W.',
                'condition' => 'new',
            ],
            [
                'title' => 'Flycam DJI Mini 3 Pro Fly More Combo',
                'brand' => 'DJI',
                'model' => 'Mini 3 Pro (DJI RC)',
                'description' => "Thiết bị quay phim trên không nhỏ gọn, quay video 4K HDR nét căng, tay cầm có màn hình cảm ứng.",
                'accessories' => '3 Pin thông minh, Sạc 3 cổng, Tay cầm RC, Vali chống va đập.',
                'condition' => 'good',
            ],
            [
                'title' => 'Loa Bluetooth Marshall Kilburn II',
                'brand' => 'Marshall',
                'model' => 'Kilburn II Black',
                'description' => "Âm thanh đa hướng Stereo công suất lớn, bass trầm sâu rền. Pin dùng liên tục trên 20 giờ.",
                'accessories' => 'Dây cáp sạc nguồn, dây AUX 3.5mm mạ vàng.',
                'condition' => 'like_new',
            ],
            [
                'title' => 'Xe trượt điện Segway Ninebot Max G30',
                'brand' => 'Segway',
                'model' => 'Ninebot G30',
                'description' => "Quãng đường di chuyển tới 65km/lần sạc. Khung xe chắc chắn, lốp chống nổ, gấp gọn dễ dàng.",
                'accessories' => 'Củ sạc nhanh, Khóa dây số chống trộm.',
                'condition' => 'good',
            ],
            [
                'title' => 'Combo Lều Cắm Trại Naturehike 4 Người',
                'brand' => 'Naturehike',
                'model' => 'P-Series 4P',
                'description' => "Lều chống nước PU3000mm, 2 cửa thông thoáng. Dựng lều nhanh chóng chỉ trong 5 phút.",
                'accessories' => 'Cọc lều, Dây giằng, 2 thảm đệm hơi tự bơm, 1 đèn bão tích điện.',
                'condition' => 'like_new',
            ],
            [
                'title' => 'Trạm Tích Điện Di Động EcoFlow River 2 Max 512Wh',
                'brand' => 'EcoFlow',
                'model' => 'River 2 Max',
                'description' => "Nguồn điện di động công suất 500W. Sạc siêu nhanh 0-100% trong 60 phút, dùng chạy quạt, sạc laptop/drone dã ngoại.",
                'accessories' => 'Cáp sạc AC, Cáp sạc tẩu ô tô 12V.',
                'condition' => 'new',
            ],
            [
                'title' => 'Máy chiếu thông minh XGIMI MoGo 2 Pro 1080p',
                'brand' => 'XGIMI',
                'model' => 'MoGo 2 Pro',
                'description' => "Tự động căn góc và lấy nét laser. Tích hợp Android TV 11 và loa Harman Kardon âm thanh vòm.",
                'accessories' => 'Remote, Chân đế Tripod cao cấp, Màn chiếu gấp 100 inch.',
                'condition' => 'like_new',
            ],
            [
                'title' => 'Kính thực tế ảo Meta Quest 3 128GB',
                'brand' => 'Meta',
                'model' => 'Quest 3',
                'description' => "Trải nghiệm VR/MR đỉnh cao. Cài sẵn nhiều tựa game hot: Beat Saber, Superhot, Resident Evil 4.",
                'accessories' => 'Kính, 2 Tay cầm Controller, Cáp sạc Type-C 30W.',
                'condition' => 'new',
            ],
            [
                'title' => 'Bộ máy khoan pin vặn vít Makita 18V',
                'brand' => 'Makita',
                'model' => 'DHP484RTE',
                'description' => "Động cơ không chổi than mạnh mẽ. 3 chức năng: Khoan bê tông, khoan thường và vặn vít.",
                'accessories' => '2 Pin 18V 5.0Ah, 1 Sạc nhanh, Hộp đựng chuyên dụng, Bộ mũi khoan.',
                'condition' => 'good',
            ],
            [
                'title' => 'Bộ Bàn Ghế Cắm Trại Xếp Gọn Campingmoon',
                'brand' => 'Campingmoon',
                'model' => 'Set 1 Bàn + 4 Ghế',
                'description' => "Bàn nhôm chịu lực 50kg, ghế ngả lưng thư giãn. Xếp gọn gàng bỏ vừa cốp mọi dòng xe ô tô.",
                'accessories' => 'Túi dù xách tay đựng trọn bộ.',
                'condition' => 'good',
            ],
            [
                'title' => 'Gimbal Cầm Tay Chống Rung DJI RS 3 Pro',
                'brand' => 'DJI',
                'model' => 'RS 3 Pro',
                'description' => "Khóa trục tự động, tải trọng 4.5kg cân tốt các dòng máy ảnh Cine/DSLR cỡ lớn.",
                'accessories' => 'Tay cầm pin, Bánh xe Focus Motor, Cáp kết nối full bộ, Vali cứng.',
                'condition' => 'like_new',
            ],
            [
                'title' => 'Xe đạp địa hình Trek Marlin 7 Gen 3',
                'brand' => 'Trek',
                'model' => 'Marlin 7',
                'description' => "Khung nhôm siêu nhẹ, phuộc nhún RockShox êm ái, bộ truyền động Shimano Deore 1x10 tốc độ.",
                'accessories' => 'Mũ bảo hiểm thể thao, Đèn chớp sau, Bình nước.',
                'condition' => 'new',
            ],
            [
                'title' => 'Máy rửa xe áp lực cao Bosch Aquatak 125',
                'brand' => 'Bosch',
                'model' => 'UniversalAquatak 125',
                'description' => "Áp lực 125 bar xịt rửa sân vườn, làm sạch bùn đất dính gầm xe cực hiệu quả.",
                'accessories' => 'Dây cao áp 6m, Súng phun 3 trong 1, Bình phun bọt tuyết.',
                'condition' => 'fair',
            ],
            [
                'title' => 'Bộ Vest Nam Cao Cấp Adam Store (Size L)',
                'brand' => 'Adam Store',
                'model' => 'Suit Premium',
                'description' => "Form chuẩn Hàn Quốc đứng dáng, chất vải cao cấp chống nhăn. Thích hợp đi sự kiện, cưới hỏi.",
                'accessories' => 'Áo Vest, Quần âu, Ghi-lê, Cà vạt, Túi bọc chống bụi.',
                'condition' => 'like_new',
            ]
        ];

        $conditions = ['new', 'like_new', 'good', 'fair'];

        // 4. Sinh ngẫu nhiên 20 sản phẩm
        for ($i = 0; $i < 20; $i++) {
            // Lấy ngẫu nhiên 1 sản phẩm mẫu
            $sample = $sampleAssets[array_rand($sampleAssets)];

            // Lấy ngẫu nhiên 1 địa điểm
            $location = $locations[array_rand($locations)];

            // Lấy ngẫu nhiên 1 User ID và 1 Category ID
            $randomUserId = !empty($userIds) ? $userIds[array_rand($userIds)] : $defaultUserId;
            $randomCategoryId = $categoryIds[array_rand($categoryIds)];

            // Sinh ngẫu nhiên giá thuê (từ 80.000đ đến 850.000đ, làm tròn tới hàng chục nghìn)
            $pricePerDay = rand(8, 85) * 10000;

            // Sinh tiền cọc ngẫu nhiên (gấp từ 3 đến 8 lần giá thuê theo ngày)
            $deposit = $pricePerDay * rand(3, 8);

            Asset::create([
                'user_id' => $randomUserId,
                'category_id' => $randomCategoryId,
                'title' => $sample['title'] . ($i > 14 ? ' #' . ($i + 1) : ''), // Đảm bảo tiêu đề không bị trùng
                'brand' => $sample['brand'],
                'model' => $sample['model'],
                'condition' => $sample['condition'] ?? $conditions[array_rand($conditions)],
                'description' => $sample['description'],
                'accessories' => $sample['accessories'],
                'price_per_day' => $pricePerDay,
                'deposit' => $deposit,
                'pickup_address' => $location['address'],
                'city' => $location['city'],
                'district' => $location['district'],
                'rental_rules' => 'Giữ gìn thiết bị cẩn thận, không làm hỏng tem bảo hành. Trả đồ đúng thời hạn đã cam kết.',
                'status' => 'published',
            ]);
        }
    }
}
