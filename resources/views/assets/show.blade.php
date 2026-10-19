@extends('layouts.app')

@section('content')
<!-- Main Container -->
<main class="max-w-7xl mx-auto px-6 py-6 space-y-8">
    <!-- Breadcrumb -->
    <nav class="flex items-center gap-2 text-xs text-text-muted">
        <a href="#" class="hover:text-text-main">Trang chủ</a>
        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
        <a href="#" class="hover:text-text-main">Máy ảnh & Thiết bị số</a>
        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
        <span class="text-text-main font-semibold">Máy ảnh Sony Alpha 7 IV</span>
    </nav>

    <!-- Top Section: Media Showcase & Booking Box -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <!-- Media Gallery (7 cols) -->
        <div class="lg:col-span-7 space-y-3">
            <div class="relative aspect-4/3 rounded-2xl overflow-hidden bg-slate-100 border border-border shadow-sm group">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4-1Y9cUcgpXhVWzknU8beCa0QiDwuAumcaI7OSzKudE3KIpef3AHMm2-l89apjS8QEHleEHQPXkQ4PDj6k2LqJ5cmDf_B3eb0eOkQBGZQAfMyN4kzI4K_mQek0Oa8mDTtIVWOqyyx42TAN4GQTViqs8XgCbr_Maoohks9O2fuxJSz16Iam7ABaIRlhZ0xc0TVZz68hw8XMy_5WNSOA8EOcmQCYSgRdO1yoqPyUv8y_h6Bmvm2Fe4" alt="Sony Alpha 7 IV" class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-300" />
                <div class="absolute top-4 left-4 flex gap-2">
                    <span class="bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-secondary flex items-center gap-1.5 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                        Sẵn sàng giao ngay
                    </span>
                    <span class="bg-white/95 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-text-main flex items-center gap-1 shadow-sm">
                        <span class="material-symbols-outlined text-[16px] text-secondary">verified</span>
                        Kiểm định 98% Body
                    </span>
                </div>
                <button class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/90 hover:bg-white backdrop-blur flex items-center justify-center text-slate-700 shadow-sm transition-transform active:scale-95" title="Lưu yêu thích">
                    <span class="material-symbols-outlined text-[20px] text-red-500" style="font-variation-settings: 'FILL' 1;">favorite</span>
                </button>
            </div>
            <!-- Thumbnails -->
            <div class="grid grid-cols-4 gap-3">
                <div class="aspect-4/3 rounded-xl overflow-hidden border-2 border-secondary bg-slate-100 cursor-pointer shadow-sm">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4-1Y9cUcgpXhVWzknU8beCa0QiDwuAumcaI7OSzKudE3KIpef3AHMm2-l89apjS8QEHleEHQPXkQ4PDj6k2LqJ5cmDf_B3eb0eOkQBGZQAfMyN4kzI4K_mQek0Oa8mDTtIVWOqyyx42TAN4GQTViqs8XgCbr_Maoohks9O2fuxJSz16Iam7ABaIRlhZ0xc0TVZz68hw8XMy_5WNSOA8EOcmQCYSgRdO1yoqPyUv8y_h6Bmvm2Fe4" alt="Góc chính" class="w-full h-full object-cover" />
                </div>
                <div class="aspect-4/3 rounded-xl overflow-hidden border border-border bg-slate-100 hover:border-secondary transition-colors cursor-pointer opacity-80 hover:opacity-100">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4-1Y9cUcgpXhVWzknU8beCa0QiDwuAumcaI7OSzKudE3KIpef3AHMm2-l89apjS8QEHleEHQPXkQ4PDj6k2LqJ5cmDf_B3eb0eOkQBGZQAfMyN4kzI4K_mQek0Oa8mDTtIVWOqyyx42TAN4GQTViqs8XgCbr_Maoohks9O2fuxJSz16Iam7ABaIRlhZ0xc0TVZz68hw8XMy_5WNSOA8EOcmQCYSgRdO1yoqPyUv8y_h6Bmvm2Fe4" alt="Ống kính" class="w-full h-full object-cover" />
                </div>
                <div class="aspect-4/3 rounded-xl overflow-hidden border border-border bg-slate-100 hover:border-secondary transition-colors cursor-pointer opacity-80 hover:opacity-100">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4-1Y9cUcgpXhVWzknU8beCa0QiDwuAumcaI7OSzKudE3KIpef3AHMm2-l89apjS8QEHleEHQPXkQ4PDj6k2LqJ5cmDf_B3eb0eOkQBGZQAfMyN4kzI4K_mQek0Oa8mDTtIVWOqyyx42TAN4GQTViqs8XgCbr_Maoohks9O2fuxJSz16Iam7ABaIRlhZ0xc0TVZz68hw8XMy_5WNSOA8EOcmQCYSgRdO1yoqPyUv8y_h6Bmvm2Fe4" alt="Cảm biến" class="w-full h-full object-cover" />
                </div>
                <div class="aspect-4/3 rounded-xl overflow-hidden border border-border bg-slate-100 flex flex-col items-center justify-center text-text-muted hover:bg-slate-200 transition-colors cursor-pointer">
                    <span class="material-symbols-outlined text-[22px]">photo_library</span>
                    <span class="text-xs font-semibold mt-0.5">+4 ảnh</span>
                </div>
            </div>
        </div>

        <!-- Detail & Rental Calculation (5 cols) -->
        <div class="lg:col-span-5 bg-white rounded-2xl p-6 border border-border shadow-sm space-y-5">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="px-2.5 py-0.5 rounded-full bg-slate-100 text-text-muted text-xs font-semibold">Máy ảnh Full-frame</span>
                    <span class="px-2.5 py-0.5 rounded-full bg-teal-50 text-secondary text-xs font-semibold">Chuyên nghiệp</span>
                </div>
                <h1 class="text-xl lg:text-2xl font-bold text-text-main leading-snug">
                    Máy ảnh Sony Alpha 7 IV (Kèm Lens FE 24-70mm F2.8 GM)
                </h1>
                <p class="text-xs text-text-muted mt-1">Full-frame 33MP • Kèm 2 pin dung lượng cao, sạc kép và thẻ nhớ 128GB UHS-II</p>
            </div>

            <div class="flex items-center justify-between py-2 px-3 bg-slate-50 rounded-xl text-xs">
                <div class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-[18px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="font-bold text-text-main text-sm">4.95</span>
                    <span class="text-text-muted">(48 đánh giá)</span>
                </div>
                <div class="h-4 w-px bg-border"></div>
                <div class="text-text-muted">
                    <strong class="text-text-main font-semibold">64 lượt</strong> thuê thành công
                </div>
            </div>

            <!-- Pricing Tier -->
            <div class="p-4 rounded-xl bg-slate-50 border border-border/60 space-y-2">
                <div class="flex items-baseline justify-between">
                    <div>
                        <span class="text-2xl font-bold text-secondary">450.000₫</span>
                        <span class="text-xs text-text-muted font-normal"> / ngày</span>
                    </div>
                    <span class="text-xs font-semibold px-2 py-0.5 rounded bg-teal-50 text-secondary">Giảm 10% từ 3 ngày</span>
                </div>
                <div class="flex items-center gap-1.5 text-xs text-text-muted pt-1 border-t border-border/60">
                    <span class="material-symbols-outlined text-[16px] text-secondary">shield</span>
                    <span>Tiền đặt cọc: <strong class="text-text-main">3.000.000₫</strong> (Hoặc gửi CCCD gắn chip chính chủ)</span>
                </div>
            </div>

            <!-- Date selector simulation -->
            <div class="space-y-2">
                <label class="text-xs font-semibold text-text-main block">Thời gian thuê dự kiến:</label>
                <div class="grid grid-cols-2 gap-2 bg-slate-50 p-2 rounded-xl border border-border">
                    <div class="bg-white p-2.5 rounded-lg border border-border/80">
                        <span class="text-[10px] uppercase font-semibold text-text-muted block">Nhận máy</span>
                        <span class="text-sm font-semibold text-text-main mt-0.5 block">24/10/2023 (09:00)</span>
                    </div>
                    <div class="bg-white p-2.5 rounded-lg border border-border/80">
                        <span class="text-[10px] uppercase font-semibold text-text-muted block">Trả máy</span>
                        <span class="text-sm font-semibold text-text-main mt-0.5 block">26/10/2023 (09:00)</span>
                    </div>
                </div>
                <div class="flex items-center justify-between text-xs text-text-muted px-1">
                    <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-secondary"></span> 2 ngày thuê</span>
                    <span>Nhận tại: Quận 1, TP.HCM</span>
                </div>
            </div>

            <!-- Price breakdown -->
            <div class="space-y-1.5 pt-2 border-t border-border text-xs">
                <div class="flex justify-between text-text-muted">
                    <span>Tiền thuê (450.000₫ × 2 ngày)</span>
                    <span class="font-medium text-text-main">900.000₫</span>
                </div>
                <div class="flex justify-between text-text-muted">
                    <span>Bảo chứng & Hợp đồng RentShare</span>
                    <span class="font-medium text-secondary">Miễn phí</span>
                </div>
                <div class="flex justify-between text-sm font-bold text-text-main pt-2 border-t border-border">
                    <span>Tổng thanh toán dự kiến:</span>
                    <span class="text-secondary text-base">900.000₫</span>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="space-y-2 pt-1">
                <button class="w-full bg-primary hover:bg-slate-800 text-white font-semibold py-3 rounded-xl flex items-center justify-center gap-2 transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                    <span>Yêu cầu thuê ngay</span>
                </button>
                <button class="w-full bg-slate-100 hover:bg-slate-200 text-text-main font-semibold py-2.5 rounded-xl flex items-center justify-center gap-2 transition-colors">
                    <span class="material-symbols-outlined text-[18px] text-secondary">chat_bubble</span>
                    <span>Nhắn tin cho chủ máy</span>
                </button>
            </div>
            <p class="text-center text-[11px] text-text-muted">
                Chủ tài sản thường xác nhận trong <span class="font-semibold text-text-main">10 phút</span>. Tiền cọc được RentShare Escrow bảo chứng an toàn 100%.
            </p>
        </div>
    </div>

    <!-- Middle Tabs/Sections: Specs, Calendar, Rules, Owner Profile & Reviews -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        <!-- Left Content (8 cols) -->
        <div class="lg:col-span-8 space-y-6">
            <!-- 1. Description -->
            <section class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-3">
                <h2 class="text-base font-bold text-text-main flex items-center gap-2">
                    <span class="w-1.5 h-4 bg-secondary rounded-full"></span>
                    Mô tả tài sản & Mục đích sử dụng
                </h2>
                <p class="text-sm text-text-muted leading-relaxed">
                    Combo máy ảnh Sony A7 Mark IV và lens zoom tiêu chuẩn FE 24-70mm F2.8 GM đỉnh cao chuyên dụng cho quay phim sự kiện, TVC ngắn, chụp ảnh cưới, kỷ yếu sinh viên hoặc các chuyến du lịch trải nghiệm. Máy có tính năng lấy nét Eye-AF cực nhạy, màu sắc S-Cinetone tươi tắn và khả năng chống rung 5 trục tốt.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-2">
                    <div class="p-3 rounded-xl bg-slate-50 border border-border/60">
                        <span class="material-symbols-outlined text-secondary text-[22px]">movie</span>
                        <p class="text-xs font-semibold text-text-main mt-1">Quay phim 4K 60p</p>
                        <p class="text-[11px] text-text-muted">10-bit 4:2:2 All-Intra mượt mà</p>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-border/60">
                        <span class="material-symbols-outlined text-secondary text-[22px]">photo_camera</span>
                        <p class="text-xs font-semibold text-text-main mt-1">Chụp sự kiện & Chân dung</p>
                        <p class="text-[11px] text-text-muted">Độ phân giải 33MP sắc nét</p>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-border/60">
                        <span class="material-symbols-outlined text-secondary text-[22px]">battery_charging_full</span>
                        <p class="text-xs font-semibold text-text-main mt-1">Trọn bộ 2 pin sạc đôi</p>
                        <p class="text-[11px] text-text-muted">Đáp ứng thoải mái cả ngày chụp</p>
                    </div>
                </div>
            </section>

            <!-- 2. Specifications -->
            <section class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-4">
                <h2 class="text-base font-bold text-text-main flex items-center gap-2">
                    <span class="w-1.5 h-4 bg-secondary rounded-full"></span>
                    Thông số kỹ thuật & Phụ kiện bàn giao
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                    <div class="flex justify-between p-2.5 rounded-lg bg-slate-50">
                        <span class="text-text-muted">Cảm biến</span>
                        <span class="font-semibold text-text-main">33.0 MP Full-frame Exmor R BSI</span>
                    </div>
                    <div class="flex justify-between p-2.5 rounded-lg bg-slate-50">
                        <span class="text-text-muted">Ống kính đi kèm</span>
                        <span class="font-semibold text-text-main">Sony FE 24-70mm F2.8 GM (G-Master)</span>
                    </div>
                    <div class="flex justify-between p-2.5 rounded-lg bg-slate-50">
                        <span class="text-text-muted">Khe thẻ nhớ</span>
                        <span class="font-semibold text-text-main">2 Khe (SD UHS-II / CFexpress Type A)</span>
                    </div>
                    <div class="flex justify-between p-2.5 rounded-lg bg-slate-50">
                        <span class="text-text-muted">Tình trạng Sensor</span>
                        <span class="font-semibold text-secondary">100% Sạch bóng, không điểm chết</span>
                    </div>
                </div>
                <div class="p-3 rounded-xl bg-teal-50/50 border border-teal-100 text-xs">
                    <p class="font-semibold text-secondary mb-1.5 flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">inventory_2</span>
                        Danh mục phụ kiện đi kèm gồm có:
                    </p>
                    <div class="flex flex-wrap gap-2 text-text-main">
                        <span class="bg-white px-2.5 py-1 rounded-md border border-border shadow-xs">✓ 02 Pin zin NP-FZ100</span>
                        <span class="bg-white px-2.5 py-1 rounded-md border border-border shadow-xs">✓ 01 Đốc sạc đôi sạc nhanh LCD</span>
                        <span class="bg-white px-2.5 py-1 rounded-md border border-border shadow-xs">✓ 01 Thẻ nhớ 128GB UHS-II SanDisk Extreme</span>
                        <span class="bg-white px-2.5 py-1 rounded-md border border-border shadow-xs">✓ Dây đeo Peak Design Slide</span>
                        <span class="bg-white px-2.5 py-1 rounded-md border border-border shadow-xs">✓ Túi máy ảnh chống sốc</span>
                    </div>
                </div>
            </section>

            <!-- 3. Availability Calendar -->
            <section class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-bold text-text-main flex items-center gap-2">
                        <span class="w-1.5 h-4 bg-secondary rounded-full"></span>
                        Lịch tình trạng tài sản (Tháng 10/2023)
                    </h2>
                    <div class="flex items-center gap-3 text-xs">
                        <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-full bg-teal-500"></span> Trống</span>
                        <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span> Đang duyệt</span>
                        <span class="flex items-center gap-1"><span class="w-2.5 h-2.5 rounded-full bg-slate-300"></span> Đã thuê</span>
                    </div>
                </div>
                <div class="grid grid-cols-7 gap-1.5 text-center text-xs">
                    <div class="font-semibold text-text-muted py-1">T2</div>
                    <div class="font-semibold text-text-muted py-1">T3</div>
                    <div class="font-semibold text-text-muted py-1">T4</div>
                    <div class="font-semibold text-text-muted py-1">T5</div>
                    <div class="font-semibold text-text-muted py-1">T6</div>
                    <div class="font-semibold text-secondary py-1">T7</div>
                    <div class="font-semibold text-secondary py-1">CN</div>
                    <!-- Days -->
                    <div class="p-2 rounded bg-slate-100 text-slate-400">18</div>
                    <div class="p-2 rounded bg-slate-100 text-slate-400">19</div>
                    <div class="p-2 rounded bg-amber-100 text-amber-800 font-semibold">20</div>
                    <div class="p-2 rounded bg-amber-100 text-amber-800 font-semibold">21</div>
                    <div class="p-2 rounded bg-teal-50 text-secondary font-semibold">22</div>
                    <div class="p-2 rounded bg-teal-50 text-secondary font-semibold">23</div>
                    <div class="p-2 rounded bg-primary text-white font-bold ring-2 ring-secondary/50">24</div>
                    <div class="p-2 rounded bg-primary text-white font-bold ring-2 ring-secondary/50">25</div>
                    <div class="p-2 rounded bg-primary text-white font-bold ring-2 ring-secondary/50">26</div>
                    <div class="p-2 rounded bg-teal-50 text-secondary font-semibold">27</div>
                    <div class="p-2 rounded bg-teal-50 text-secondary font-semibold">28</div>
                    <div class="p-2 rounded bg-teal-50 text-secondary font-semibold">29</div>
                    <div class="p-2 rounded bg-teal-50 text-secondary font-semibold">30</div>
                    <div class="p-2 rounded bg-teal-50 text-secondary font-semibold">31</div>
                </div>
            </section>

            <!-- 4. Rental Rules & Condition -->
            <section class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-4">
                <h2 class="text-base font-bold text-text-main flex items-center gap-2">
                    <span class="w-1.5 h-4 bg-secondary rounded-full"></span>
                    Quy định thuê & Tình trạng kiểm tra
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs">
                    <div class="p-3 rounded-xl bg-slate-50 border border-border/60">
                        <p class="font-semibold text-text-main mb-1">1. Đối chiếu giấy tờ tùy thân</p>
                        <p class="text-text-muted">Người thuê từ đủ 18 tuổi, xuất trình CCCD gắn chip chính chủ để đối chiếu và ký biên bản điện tử.</p>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-border/60">
                        <p class="font-semibold text-text-main mb-1">2. Biên bản bàn giao 6 góc</p>
                        <p class="text-text-muted">Chụp ảnh tình trạng máy trước khi giao nhận và sau khi hoàn trả để đảm bảo minh bạch tuyệt đối.</p>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-border/60">
                        <p class="font-semibold text-text-main mb-1">3. Môi trường an toàn</p>
                        <p class="text-text-muted">Không mang máy chụp dưới trời mưa lớn hoặc lặn biển mà không có vỏ chống nước chuyên dụng.</p>
                    </div>
                    <div class="p-3 rounded-xl bg-slate-50 border border-border/60">
                        <p class="font-semibold text-text-main mb-1">4. Hoàn trả đúng hạn</p>
                        <p class="text-text-muted">Bàn giao trước thời hạn đã hẹn. Cần gia hạn vui lòng liên hệ trước ít nhất 4 tiếng.</p>
                    </div>
                </div>
            </section>

            <!-- 5. Reviews -->
            <section class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-4">
                <div class="flex items-center justify-between">
                    <h2 class="text-base font-bold text-text-main flex items-center gap-2">
                        <span class="w-1.5 h-4 bg-secondary rounded-full"></span>
                        Đánh giá từ người thuê trước
                    </h2>
                    <span class="text-xs font-semibold text-secondary">4.95 / 5.0 (48 đánh giá)</span>
                </div>
                <div class="space-y-3">
                    <div class="p-3.5 rounded-xl bg-slate-50 border border-border/60 space-y-2">
                        <div class="flex items-center justify-between text-xs">
                            <div class="flex items-center gap-2">
                                <div class="w-7 h-7 rounded-full bg-teal-100 text-secondary font-bold flex items-center justify-center">HL</div>
                                <div>
                                    <span class="font-semibold text-text-main">Hoàng Linh</span>
                                    <span class="text-text-muted block text-[10px]">Thuê 3 ngày chụp kỷ yếu • 18/10/2023</span>
                                </div>
                            </div>
                            <div class="flex text-amber-500 text-[14px]">★★★★★</div>
                        </div>
                        <p class="text-xs text-text-muted leading-relaxed">
                            Máy ảnh rất mới, sensor sạch tinh không hạt bụi nào. Anh Tuấn hỗ trợ nhiệt tình, cho mượn thêm cả túi xách và hướng dẫn cài đặt chế độ màu rất chi tiết!
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Right Column: Owner Profile Box (4 cols) -->
        <div class="lg:col-span-4 space-y-6">
            <div class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-4">
                <div class="flex items-center gap-3">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2NN35lNpfGKcI8dXstQlMb0S7QSyFLtAX7ukuI4lsSCtRhN308LIYTZBeZfMDLZwkwD5QhA-QC4CmPedmPAqf6D-wjc1QDKmGgmffvONXxa082xqJfcprdDXOcbu-iw2CX7CWEsts53WTdAqCNt0rqLPdZ5Sh4imC4aFw-fwbdrMFiMXrRr3peQM7hmZdRf4ybA2wkDC1kIGh9lrDCJXYYuveHFJ6rauMkZaXIDOGUHMmNwuAP5E" alt="Nguyễn Minh Tuấn" class="w-14 h-14 rounded-full object-cover ring-2 ring-secondary/30" />
                    <div>
                        <div class="flex items-center gap-1">
                            <h3 class="font-bold text-text-main text-base">Nguyễn Minh Tuấn</h3>
                            <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                        </div>
                        <p class="text-xs text-secondary font-semibold">Chủ tài sản uy tín</p>
                        <p class="text-[11px] text-text-muted">Thành viên từ tháng 3/2022</p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-2 text-center text-xs">
                    <div class="p-2.5 rounded-xl bg-slate-50 border border-border/60">
                        <span class="text-text-muted text-[11px] block">Điểm tin cậy</span>
                        <span class="text-lg font-bold text-secondary mt-0.5 block">98/100</span>
                    </div>
                    <div class="p-2.5 rounded-xl bg-slate-50 border border-border/60">
                        <span class="text-text-muted text-[11px] block">Đã cho thuê</span>
                        <span class="text-lg font-bold text-text-main mt-0.5 block">72 đơn</span>
                    </div>
                </div>

                <div class="space-y-2 text-xs text-text-muted border-t border-border pt-3">
                    <div class="flex items-center justify-between">
                        <span>Tỷ lệ phản hồi tin nhắn:</span>
                        <span class="font-semibold text-text-main">99% (&lt; 10 phút)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Đánh giá từ khách thuê:</span>
                        <span class="font-semibold text-text-main">5.0 ★ (68 nhận xét)</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span>Địa điểm:</span>
                        <span class="font-semibold text-text-main">Quận 1, TP. Hồ Chí Minh</span>
                    </div>
                </div>

                <a href="#" class="w-full py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-text-main font-semibold text-xs flex items-center justify-center gap-1.5 transition-colors">
                    <span>Xem hồ sơ công khai của Tuấn</span>
                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>

            <!-- Safe Escrow Notice -->
            <div class="bg-teal-50/60 rounded-2xl p-5 border border-teal-100 text-xs space-y-2.5">
                <div class="flex items-center gap-2 text-secondary font-bold text-sm">
                    <span class="material-symbols-outlined text-[20px]">security</span>
                    Bảo chứng an toàn RentShare
                </div>
                <p class="text-text-muted leading-relaxed text-[11px]">
                    Toàn bộ tiền thuê và tiền cọc được giữ trung gian an toàn trong ví RentShare Escrow. Chủ tài sản chỉ nhận thanh toán khi bạn đã nhận máy đúng mô tả và kiểm tra nguyên vẹn.
                </p>
            </div>
        </div>
    </div>
</main>
@endsection