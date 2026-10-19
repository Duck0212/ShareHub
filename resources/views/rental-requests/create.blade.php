@extends('layouts.app')

@section('content')
<main class="w-full pt-20 bg-background min-h-screen">
    <div class="flex flex-col w-full">
        <!-- Subtle Ambient Glow Canvas Decor -->
        <div class="relative w-full overflow-hidden">
            <div class="absolute -top-32 left-1/4 w-96 h-96 bg-secondary-container/20 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute top-48 right-10 w-80 h-80 bg-surface-container-highest/40 rounded-full blur-3xl pointer-events-none"></div>
            <!-- Main Container -->
            <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pt-6 pb-space-xl relative">
                <!-- Top Section: Breadcrumb & Asymmetric Header -->
                <div class="mb-space-lg">
                    <!-- Breadcrumb -->
                    <nav aria-label="Breadcrumb" class="flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant mb-space-sm">
                        <a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Trang chủ</a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <a class="hover:text-secondary transition-colors" data-path="yeu-cau-thue" href="#">Yêu cầu thuê</a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-on-surface font-semibold">Tạo yêu cầu mới</span>
                    </nav>
                    <!-- Header Title Banner -->
                    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md bg-surface-container-low rounded-xl p-space-lg shadow-sm">
                        <div class="max-w-2xl">
                            <div class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm mb-space-xs">
                                <span class="material-symbols-outlined text-[14px]">campaign</span>
                                <span>BẢNG TIN CỘNG ĐỒNG P2P VIỆT NAM</span>
                            </div>
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mb-space-xs">
                                Đăng tin cần tìm thuê đồ
                            </h1>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                Không tìm thấy món đồ ưng ý? Đăng yêu cầu lên bảng tin cộng đồng P2P để các chủ tài sản uy tín xung quanh chủ động gửi báo giá cho bạn.
                            </p>
                        </div>
                        <!-- Quick Tip Micro Badge -->
                        <div class="flex items-center gap-space-sm bg-surface-container-lowest px-space-md py-space-sm rounded-lg shadow-sm">
                            <div class="w-10 h-10 rounded-full bg-secondary-fixed/50 flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined text-[20px]">bolt</span>
                            </div>
                            <div>
                                <div class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Tốc độ trung bình</div>
                                <div class="font-headline-sm text-headline-sm text-secondary font-bold">~18 phút có báo giá</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Main 2-Column Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start">
                    <!-- LEFT COLUMN: Form Inputs (7 Cols) -->
                    <div class="lg:col-span-7 flex flex-col gap-space-lg">
                        <!-- SECTION 1: Item Details -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-label-md text-label-md font-bold">1</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Bạn đang cần tìm thuê món đồ gì?</h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary font-medium">Bắt buộc</span>
                            </div>
                            <!-- Title Input -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface flex justify-between" for="req-title">
                                    <span>Tiêu đề yêu cầu</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant" id="title-char-count">84/120</span>
                                </label>
                                <div class="relative">
                                    <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] transition-all" id="req-title" oninput="updatePreviewTitle(this.value)" placeholder="Ví dụ: Cần thuê máy ảnh Sony A7IV + Lens 24-70 GM cho chuyến đi 2 ngày..." type="text" value="Cần thuê lều cắm trại 4 người chống thấm nước tốt + 1 bộ bàn ghế gấp dã ngoại" />
                                </div>
                            </div>
                            <!-- Category & Quantity Row -->
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
                                <div class="sm:col-span-2 flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface" for="req-cat">Danh mục mong muốn</label>
                                    <div class="relative">
                                        <select class="w-full appearance-none px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] transition-all cursor-pointer pr-10" id="req-cat" onchange="updatePreviewCat(this.value)">
                                            <option selected="" value="Đồ dã ngoại &amp; Cắm trại">Đồ dã ngoại &amp; Cắm trại</option>
                                            <option value="Máy ảnh &amp; Thiết bị số">Máy ảnh &amp; Thiết bị quay phim</option>
                                            <option value="Phương tiện &amp; Xe máy">Phương tiện &amp; Xe máy du lịch</option>
                                            <option value="Thiết bị sự kiện &amp; Âm thanh">Thiết bị sự kiện &amp; Âm thanh</option>
                                            <option value="Dụng cụ cơ khí &amp; Đồ nghề">Dụng cụ cơ khí &amp; Gia dụng</option>
                                        </select>
                                        <span class="material-symbols-outlined absolute right-3 top-3 pointer-events-none text-on-surface-variant text-[20px]">expand_more</span>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface" for="req-qty">Số lượng</label>
                                    <div class="flex items-center bg-surface-container-low rounded-lg p-1">
                                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors font-bold" onclick="adjustQty(-1)" type="button">−</button>
                                        <input class="w-full bg-transparent text-center font-label-lg text-label-lg text-on-surface focus:outline-none" id="req-qty" readonly="" type="text" value="1 bộ" />
                                        <button class="w-8 h-8 rounded-lg flex items-center justify-center text-on-surface hover:bg-surface-container-high transition-colors font-bold" onclick="adjustQty(1)" type="button">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 2: Dates & Location -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-label-md text-label-md font-bold">2</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Thời gian &amp; Địa điểm nhận đồ</h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary font-medium">Bắt buộc</span>
                            </div>
                            <!-- Date Range Selector -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface">Khoảng thời gian thuê</label>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm bg-surface-container-low p-space-sm rounded-xl">
                                    <div class="flex items-center gap-space-sm bg-surface-container-lowest px-space-md py-2.5 rounded-lg shadow-xs">
                                        <span class="material-symbols-outlined text-secondary text-[20px]">calendar_today</span>
                                        <div class="flex flex-col">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Ngày nhận đồ</span>
                                            <input class="bg-transparent font-label-lg text-label-lg text-on-surface focus:outline-none w-full" type="text" value="10/10/2025 (Thứ 6)" />
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-space-sm bg-surface-container-lowest px-space-md py-2.5 rounded-lg shadow-xs">
                                        <span class="material-symbols-outlined text-secondary text-[20px]">event_repeat</span>
                                        <div class="flex flex-col">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Ngày hoàn trả</span>
                                            <input class="bg-transparent font-label-lg text-label-lg text-on-surface focus:outline-none w-full" type="text" value="12/10/2025 (Chủ Nhật)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between px-space-xs pt-1">
                                    <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[15px] text-secondary">info</span>
                                        Thời gian mượn: <strong>3 ngày 2 đêm</strong> (72 giờ)
                                    </span>
                                    <span class="font-label-sm text-label-sm text-secondary bg-secondary-fixed/40 px-2 py-0.5 rounded-full">Linh hoạt +/- 2h</span>
                                </div>
                            </div>
                            <!-- Area & Radius -->
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
                                <div class="sm:col-span-2 flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface" for="req-loc">Khu vực ưu tiên nhận đồ</label>
                                    <div class="relative">
                                        <span class="material-symbols-outlined absolute left-3 top-3 text-secondary text-[20px]">location_on</span>
                                        <input class="w-full pl-10 pr-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] transition-all" id="req-loc" oninput="updatePreviewLoc(this.value)" placeholder="Quận/Huyện, Tỉnh/Thành phố..." type="text" value="TP. Huế, Thừa Thiên Huế" />
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface" for="req-radius">Bán kính nhận</label>
                                    <div class="relative">
                                        <select class="w-full appearance-none px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] transition-all cursor-pointer pr-8" id="req-radius">
                                            <option value="3km">&lt; 3 km</option>
                                            <option selected="" value="5km">Bán kính 5 km</option>
                                            <option value="10km">&lt; 10 km</option>
                                            <option value="toan-thanh-pho">Toàn tỉnh/TP</option>
                                        </select>
                                        <span class="material-symbols-outlined absolute right-2.5 top-3.5 pointer-events-none text-on-surface-variant text-[18px]">expand_more</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Delivery Method -->
                            <div class="flex flex-col gap-2">
                                <label class="font-label-lg text-label-lg text-on-surface">Phương thức nhận đồ mong muốn</label>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                                    <label class="relative flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container-low cursor-pointer hover:bg-surface-container-high transition-colors">
                                        <input checked="" class="accent-secondary w-4 h-4 cursor-pointer" name="pickup_mode" type="radio" value="direct" />
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Tự đến lấy tại nhà chủ</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Tiết kiệm, kiểm tra tại chỗ</span>
                                        </div>
                                    </label>
                                    <label class="relative flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container-low cursor-pointer hover:bg-surface-container-high transition-colors">
                                        <input class="accent-secondary w-4 h-4 cursor-pointer" name="pickup_mode" type="radio" value="ship" />
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Cần ship tận nơi</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">GrabExpress / Ahamove người thuê trả</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 3: Budget & Deposit Security -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-label-md text-label-md font-bold">3</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Ngân sách &amp; Tiền cọc mong muốn</h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary font-medium">Bắt buộc</span>
                            </div>
                            <!-- Daily & Max Budget -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface" for="req-budget">Ngân sách chấp nhận / ngày</label>
                                    <div class="relative">
                                        <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-headline-sm text-headline-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] transition-all" id="req-budget" oninput="updatePreviewBudget(this.value)" type="text" value="200.000 đ - 250.000 đ" />
                                        <span class="absolute right-3 top-3.5 font-label-sm text-label-sm text-on-surface-variant font-medium">/ngày</span>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface" for="req-total-budget">Tổng ngân sách tối đa</label>
                                    <div class="relative">
                                        <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-headline-sm text-headline-sm focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] transition-all" id="req-total-budget" type="text" value="750.000 đ" />
                                        <span class="absolute right-3 top-3.5 font-label-sm text-label-sm text-on-surface-variant font-medium">cho cả đợt</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Deposit Readiness Capability -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface">Phương án bảo đảm &amp; Đặt cọc đề xuất</label>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                                    <div class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-space-xs cursor-pointer hover:bg-surface-container-high transition-colors">
                                        <input checked="" class="mt-1 accent-secondary" id="dep-escrow" name="deposit_type" type="radio" />
                                        <label class="cursor-pointer" for="dep-escrow">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold block">Cọc ví Escrow ShareHub</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Tạm giữ trung gian, hoàn lại ngay sau khi bàn giao an toàn.</span>
                                        </label>
                                    </div>
                                    <div class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-space-xs cursor-pointer hover:bg-surface-container-high transition-colors">
                                        <input class="mt-1 accent-secondary" id="dep-cccd" name="deposit_type" type="radio" />
                                        <label class="cursor-pointer" for="dep-cccd">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold block">Gửi CCCD gốc + Cọc nhẹ 500k</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">CCCD chip chính chủ kèm biên bản ký xác nhận bàn giao.</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 4: Detailed Description & Sample Photos -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-label-md text-label-md font-bold">4</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Mô tả mục đích sử dụng &amp; Yêu cầu kỹ thuật</h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary font-medium">Bắt buộc</span>
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface" for="req-desc">Mô tả chi tiết</label>
                                <textarea class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:outline-none focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] transition-all leading-relaxed" id="req-desc" oninput="updatePreviewDesc(this.value)" rows="4">Gia đình mình (2 người lớn + 2 trẻ em) đi cắm trại cuối tuần. Cần lều 4 người khung hợp kim hoặc sợi thủy tinh chắc chắn, chống mưa 2000mm trở lên. Có thêm 1 bàn nhôm gấp cùng 2-4 ghế. Cam kết dùng cẩn thận, không hút thuốc trong lều, vệ sinh khô ráo sạch sẽ trước khi trả.</textarea>
                                <div class="flex justify-between items-center text-on-surface-variant font-body-sm text-body-sm px-1">
                                    <span>Càng chi tiết, chủ tài sản càng dễ soạn combo phù hợp nhất cho bạn.</span>
                                    <span>284 ký tự</span>
                                </div>
                            </div>
                            <!-- Upload Sample Photo -->
                            <div class="flex flex-col gap-2 pt-space-xs">
                                <label class="font-label-lg text-label-lg text-on-surface">Ảnh kiểu dáng &amp; Mẫu tham khảo (Tùy chọn)</label>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-sm">
                                    <!-- Attached Sample Preview -->
                                    <div class="relative group rounded-lg overflow-hidden bg-surface-container-high aspect-square shadow-xs">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Modern high quality waterproof Naturehike camping tent pitched on a grassy campsite with compact folding chairs, natural soft daylight, clean product catalog style, realistic outdoor gear shot with teal and slate accents" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkpcFw_WQI5fCd6WIIW89yMLOSFJWBRZChRAT09x_NGgoaI1nnmklvf0VNhA5AJhs95UJtBvqJuybGmbsuDetiQtPdsImoYTy7oZ6jOViKlSqKXE1W6V8X0wBLvMJfUOjLPYMyM3QtwZltGTyeTVfd1GY7oCXmaC96zuePT6sD6TIp261jfLIb-Bi6wHIO2cs9-i6I39GZjyykWgR8HSTw-b_9DpfJW44zd3S9VpbOFgj7LWYewQU" />
                                        <div class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                                            <button class="p-1 rounded-full bg-error text-on-error hover:scale-110 transition-transform" type="button">
                                                <span class="material-symbols-outlined text-[18px]">delete</span>
                                            </button>
                                        </div>
                                        <span class="absolute bottom-1 left-1 font-label-sm text-label-sm bg-primary/70 text-on-primary px-1.5 py-0.5 rounded">Mẫu Naturehike</span>
                                    </div>
                                    <!-- Secondary Sample Image -->
                                    <div class="relative group rounded-lg overflow-hidden bg-surface-container-high aspect-square shadow-xs">
                                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Ultralight compact foldable outdoor camping aluminum table set with four canvas foldable camping chairs, organized neatly on clean concrete patio, crisp lighting, high fidelity outdoor lifestyle equipment" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQcHDPKi8_O6CisM8IJsd58yR2xA0irr8FbAe8iTVo-dPAdzildhVGR4w4BI1Ul7M0FfxVnYaMUf96u7dqVKn6PcnMoiT25qrVXjMqEAxen1I4_iXvClAi9gZ1xYsreqqCuhifDbDgrkrqYAiUneqn29HIhvwC0SosZp761fxItGWm0tC5NsWlRQ6Q7rWgN6joGMDnl06tQJlItjQhtrjshYGE7Ixlz1ISVeBGzE62RzPAipvADiY" />
                                        <div class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                                            <button class="p-1 rounded-full bg-error text-on-error hover:scale-110 transition-transform" type="button">
                                                <span class="material-symbols-outlined text-[18px]">delete</span>
                                            </button>
                                        </div>
                                        <span class="absolute bottom-1 left-1 font-label-sm text-label-sm bg-primary/70 text-on-primary px-1.5 py-0.5 rounded">Bàn ghế gấp</span>
                                    </div>
                                    <!-- Dropzone Action -->
                                    <div class="col-span-2 sm:col-span-2 rounded-lg bg-surface-container-low border-2 border-dashed border-outline-variant/60 flex flex-col items-center justify-center p-space-md text-center hover:bg-surface-container-high/60 transition-colors cursor-pointer">
                                        <div class="w-10 h-10 rounded-full bg-secondary-fixed/50 flex items-center justify-center text-secondary mb-1">
                                            <span class="material-symbols-outlined text-[22px]">add_photo_alternate</span>
                                        </div>
                                        <span class="font-label-md text-label-md text-on-surface font-semibold">Tải thêm ảnh mẫu (Tối đa 5 ảnh)</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Kéo thả ảnh hoặc click để chọn file PNG, JPG</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 5: Privacy & Verification Preferences -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center gap-space-sm pb-space-xs">
                                <span class="w-7 h-7 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-label-md text-label-md font-bold">5</span>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface">Tùy chọn an toàn &amp; Nhận báo giá</h2>
                            </div>
                            <div class="flex flex-col gap-space-sm">
                                <label class="flex items-start gap-space-sm p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container-high transition-colors cursor-pointer">
                                    <input checked="" class="mt-1 accent-secondary w-4 h-4 cursor-pointer" type="checkbox" />
                                    <div class="flex flex-col">
                                        <div class="flex items-center gap-1.5">
                                            <span class="font-label-lg text-label-lg text-on-surface font-semibold">Chỉ nhận đề xuất từ chủ tài sản đã xác thực CCCD/eKYC</span>
                                            <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm">Khuyên dùng</span>
                                        </div>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Lọc bỏ hoàn toàn các tài khoản vãng lai, đảm bảo 100% người báo giá đã được định danh điện tử.</span>
                                    </div>
                                </label>
                                <label class="flex items-start gap-space-sm p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container-high transition-colors cursor-pointer">
                                    <input checked="" class="mt-1 accent-secondary w-4 h-4 cursor-pointer" type="checkbox" />
                                    <div class="flex flex-col">
                                        <div class="flex items-center gap-1.5">
                                            <span class="font-label-lg text-label-lg text-on-surface font-semibold">Bật chuông thông báo tức thì khi có báo giá tốt hơn ngân sách</span>
                                            <span class="material-symbols-outlined text-secondary text-[16px]">notifications_active</span>
                                        </div>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Gửi thông báo đẩy về ứng dụng và Zalo thông báo ngay khi có chủ đồ phản hồi.</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <!-- FOOTER ACTIONS -->
                        <div class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-xs pb-space-lg">
                            <div class="flex items-center gap-space-sm w-full sm:w-auto">
                                <button class="w-full sm:w-auto px-space-md py-3 rounded-lg bg-surface-container-high text-on-surface hover:bg-surface-container-highest font-label-lg text-label-lg transition-colors flex items-center justify-center gap-1.5" type="button">
                                    <span class="material-symbols-outlined text-[18px]">bookmark</span>
                                    <span>Lưu nháp</span>
                                </button>
                                <button class="w-full sm:w-auto px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface-variant hover:text-error hover:bg-error-container/40 font-label-lg text-label-lg transition-colors" type="button">
                                    Hủy
                                </button>
                            </div>
                            <button class="w-full sm:w-auto px-space-xl py-3.5 rounded-lg bg-primary text-on-primary hover:bg-primary-container hover:text-on-primary-container font-label-lg text-label-lg shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2 group" id="publish-btn" onclick="simulatePublish()" type="button">
                                <span class="material-symbols-outlined text-secondary-container group-hover:rotate-12 transition-transform">send</span>
                                <span>Đăng yêu cầu lên bảng tin ngay</span>
                            </button>
                        </div>
                    </div>
                    <!-- RIGHT COLUMN: Real-Time Social Preview & Trust Sidebar (5 Cols) -->
                    <div class="lg:col-span-5 flex flex-col gap-space-lg lg:sticky lg:top-24">
                        <!-- CARD 1: Social Rental Feed Live Preview -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-md relative overflow-hidden">
                            <div class="flex items-center justify-between mb-space-md">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
                                    <span class="font-label-lg text-label-lg text-on-surface uppercase tracking-wider">Xem trước trên Bảng tin P2P</span>
                                </div>
                                <span class="font-label-sm text-label-sm bg-surface-container px-2 py-0.5 rounded text-on-surface-variant font-medium">Khách quan sát</span>
                            </div>
                            <!-- The Rendered Community Post Card -->
                            <div class="bg-surface-container-low rounded-xl p-space-md shadow-xs flex flex-col gap-space-md">
                                <!-- Author Header -->
                                <div class="flex items-start justify-between gap-space-sm">
                                    <div class="flex items-center gap-space-sm">
                                        <div class="relative">
                                            <div class="w-11 h-11 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold font-headline-sm">
                                                MT
                                            </div>
                                            <span class="material-symbols-outlined absolute -bottom-1 -right-1 text-secondary bg-surface-container-lowest rounded-full text-[16px] shadow-xs" title="Đã xác thực CCCD">verified</span>
                                        </div>
                                        <div class="flex flex-col">
                                            <div class="flex items-center gap-1.5">
                                                <span class="font-label-lg text-label-lg text-on-surface font-bold">Nguyễn Minh Tuấn</span>
                                                <span class="font-label-sm text-label-sm px-1.5 py-0.2 rounded bg-surface-container-highest text-on-surface-variant font-medium">eKYC Cấp 2</span>
                                            </div>
                                            <div class="flex items-center gap-2 font-label-sm text-label-sm text-on-surface-variant">
                                                <span class="text-secondary font-semibold">Điểm uy tín: 98/100</span>
                                                <span>•</span>
                                                <span>Vừa xong</span>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="px-2.5 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm font-semibold whitespace-nowrap">
                                        Cần thuê
                                    </span>
                                </div>
                                <!-- Title & Category Badges -->
                                <div class="flex flex-col gap-1.5">
                                    <div class="flex flex-wrap items-center gap-1.5">
                                        <span class="font-label-sm text-label-sm bg-surface-container-highest text-on-surface px-2 py-0.5 rounded font-medium" id="preview-category-badge">
                                            Đồ dã ngoại &amp; Cắm trại
                                        </span>
                                        <span class="font-label-sm text-label-sm bg-surface-container-highest text-on-surface-variant px-2 py-0.5 rounded">
                                            1 bộ
                                        </span>
                                    </div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface leading-snug line-clamp-2 font-bold" id="preview-title">
                                        Cần thuê lều cắm trại 4 người chống thấm nước tốt + 1 bộ bàn ghế gấp dã ngoại
                                    </h3>
                                </div>
                                <!-- Attached Thumbnail Snapshot -->
                                <div class="relative rounded-lg overflow-hidden bg-surface-container-high aspect-video">
                                    <img class="w-full h-full object-cover" data-alt="Editorial close up of clean outdoor gear package, rolled tent fabric, aluminum poles, and portable camp table ready for trip packing, warm golden hour ambient lighting, pristine details" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCcXM4l45Zn41QhlOe1q2w4JsQFgULlVdrin5ZaXyynHp4n818uAGwZF2EtSeeGLzs4z3zSUWuFjqlz3BKpGS42DpOKLyLS8PGvy9EAvdrI3mHploYtXhx38iG2Q7KpMsfAcjsMfdsJUoMvJ5qBxsplqxdjfKfkVeA1sV74VtM5-a_RVNv8dKfrYGmQOiMICe5n6DRah0iqnNCSqqCcaS2O9mYbI1HqxIVvGvjm4n0TQdJQRbeuJZg" />
                                    <div class="absolute bottom-2 left-2 bg-inverse-surface/80 backdrop-blur-md text-inverse-on-surface px-2 py-1 rounded text-label-sm font-label-sm flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">photo_camera</span>
                                        <span>2 ảnh tham khảo</span>
                                    </div>
                                </div>
                                <!-- Body Excerpt -->
                                <p class="font-body-md text-body-md text-on-surface-variant line-clamp-3" id="preview-desc">
                                    Gia đình mình (2 người lớn + 2 trẻ em) đi cắm trại cuối tuần. Cần lều 4 người khung hợp kim hoặc sợi thủy tinh chắc chắn, chống mưa 2000mm trở lên. Có thêm 1 bàn nhôm gấp cùng 2-4 ghế. Cam kết dùng cẩn thận, không hút thuốc trong lều...
                                </p>
                                <!-- Transaction Meta Chips -->
                                <div class="grid grid-cols-2 gap-2 bg-surface-container-lowest p-space-sm rounded-lg">
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Ngân sách dự kiến</span>
                                        <span class="font-headline-sm text-headline-sm text-secondary font-bold" id="preview-budget">200.000 đ<span class="font-body-sm text-body-sm text-on-surface-variant font-normal">/ngày</span></span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Địa điểm nhận đồ</span>
                                        <span class="font-label-md text-label-md text-on-surface font-semibold truncate flex items-center gap-1" id="preview-location">
                                            <span class="material-symbols-outlined text-[14px] text-secondary">location_on</span>
                                            TP. Huế
                                        </span>
                                    </div>
                                </div>
                                <!-- Simulated Owner Interaction Button -->
                                <div class="pt-1">
                                    <button class="w-full py-2.5 rounded-lg bg-secondary text-on-secondary font-label-lg text-label-lg hover:bg-secondary/90 transition-colors flex items-center justify-center gap-1.5 shadow-xs" type="button">
                                        <span class="material-symbols-outlined text-[18px]">handshake</span>
                                        <span>Tôi có tài sản này — Gửi báo giá</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- CARD 2: 3-Step Rental Journey (Structured Info) -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center gap-space-sm">
                                <span class="material-symbols-outlined text-secondary text-[22px]">auto_stories</span>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">3 bước thuê đồ nhanh qua Bảng tin P2P</h3>
                            </div>
                            <div class="flex flex-col gap-space-md relative">
                                <!-- Connecting Line Decoration -->
                                <div class="absolute left-3.5 top-3 bottom-3 w-0.5 bg-surface-container-highest"></div>
                                <!-- Step 1 -->
                                <div class="flex items-start gap-space-sm relative">
                                    <div class="w-7 h-7 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-label-md text-label-md font-bold shrink-0 z-10">
                                        1
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Đăng nhu cầu &amp; ngân sách rõ ràng</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Nêu rõ thời gian, địa điểm và dòng đồ mong muốn để chủ tài sản chuẩn bị sẵn sàng.</span>
                                    </div>
                                </div>
                                <!-- Step 2 -->
                                <div class="flex items-start gap-space-sm relative">
                                    <div class="w-7 h-7 rounded-full bg-secondary-fixed text-on-secondary-fixed flex items-center justify-center font-label-md text-label-md font-bold shrink-0 z-10">
                                        2
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">So sánh combo &amp; báo giá gửi về</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Các chủ láng giềng sẽ gửi ảnh thật, tình trạng phụ kiện và chi phí cạnh tranh trong tin nhắn.</span>
                                    </div>
                                </div>
                                <!-- Step 3 -->
                                <div class="flex items-start gap-space-sm relative">
                                    <div class="w-7 h-7 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-label-md text-label-md font-bold shrink-0 z-10">
                                        3
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Chọn báo giá &amp; Ký quỹ Escrow</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Tiền thuê và tiền cọc được giữ an toàn trên hệ thống cho tới khi hai bên đồng kiểm nghiệm thu.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CARD 3: Efficiency & Statistics (SVG Progress Gauge) -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-sm">
                            <div class="flex items-center justify-between">
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">Thống kê hiệu quả cộng đồng</span>
                                <span class="material-symbols-outlined text-secondary text-[20px]">trending_up</span>
                            </div>
                            <div class="flex items-center gap-space-md pt-space-xs">
                                <!-- Compact SVG Donut Chart (under 2KB) -->
                                <div class="relative w-20 h-20 shrink-0">
                                    <svg class="w-full h-full -rotate-90" viewbox="0 0 36 36">
                                        <!-- Background Ring -->
                                        <path class="text-surface-container-highest" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-width="3.5"></path>
                                        <!-- Value Progress Ring (85.4%) -->
                                        <path class="text-secondary transition-all duration-1000 ease-out" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="currentColor" stroke-dasharray="85.4, 100" stroke-linecap="round" stroke-width="3.5"></path>
                                    </svg>
                                    <div class="absolute inset-0 flex items-center justify-center font-label-md text-label-md font-bold text-on-surface">
                                        85.4%
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <div class="font-headline-sm text-headline-sm text-on-surface font-bold">
                                        85.4% bài đăng
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                        nhận được ít nhất <strong>1 - 3 đề xuất thuê đồ</strong> chỉ trong vòng <strong>2 giờ đầu tiên</strong> sau khi gửi yêu cầu.
                                    </p>
                                </div>
                            </div>
                            <!-- Trust Micro Footnote -->
                            <div class="mt-space-xs pt-space-xs flex items-center gap-1.5 text-on-surface-variant font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[15px] text-secondary">gavel</span>
                                <span>Bảo vệ quyền lợi theo hợp đồng điện tử ShareHub TrustShield.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reactive Interactivity Script for Real-Time Preview Synchronization -->
    <script>
        function updatePreviewTitle(val) {
            const el = document.getElementById('preview-title');
            const counter = document.getElementById('title-char-count');
            if (el) {
                el.textContent = val.trim() ? val : "Tiêu đề yêu cầu thuê...";
            }
            if (counter) {
                counter.textContent = val.length + "/120";
            }
        }

        function updatePreviewCat(val) {
            const el = document.getElementById('preview-category-badge');
            if (el) el.textContent = val;
        }

        function updatePreviewBudget(val) {
            const el = document.getElementById('preview-budget');
            if (el) {
                el.innerHTML = (val.trim() ? val : "200.000 đ") + '<span class="font-body-sm text-body-sm text-on-surface-variant font-normal">/ngày</span>';
            }
        }

        function updatePreviewLoc(val) {
            const el = document.getElementById('preview-location');
            if (el) {
                el.innerHTML = '<span class="material-symbols-outlined text-[14px] text-secondary">location_on</span> ' + (val.trim() ? val : "Toàn quốc");
            }
        }

        function updatePreviewDesc(val) {
            const el = document.getElementById('preview-desc');
            if (el) {
                el.textContent = val.trim() ? val : "Chưa có mô tả chi tiết...";
            }
        }

        function adjustQty(delta) {
            const input = document.getElementById('req-qty');
            if (!input) return;
            let current = parseInt(input.value) || 1;
            current = Math.max(1, Math.min(20, current + delta));
            input.value = current + ' bộ';
        }

        function simulatePublish() {
            const btn = document.getElementById('publish-btn');
            if (!btn) return;
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span class="material-symbols-outlined animate-spin text-[18px]">progress_activity</span> Đang kiểm duyệt & Đăng tin...';
            btn.classList.add('opacity-80', 'pointer-events-none');

            setTimeout(() => {
                btn.innerHTML = '<span class="material-symbols-outlined text-[18px] text-secondary-fixed">check_circle</span> Đã đăng thành công!';
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.classList.remove('opacity-80', 'pointer-events-none');
                }, 2500);
            }, 1200);
        }
    </script>
</main>
@endsection