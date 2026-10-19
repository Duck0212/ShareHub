@extends('layouts.app')

@section('content')
<main class="w-full pt-16 bg-surface min-h-[calc(100vh-16rem)]">
    <div class="flex flex-col w-full">
        <!-- Interactive State Controller & Inline Logic -->
        <script>
            function toggleFilterDropdown(id) {
                const el = document.getElementById(id);
                if (el) el.classList.toggle('hidden');
            }

            function handleOfferModal(title) {
                const modal = document.getElementById('offer-modal');
                const targetTitle = document.getElementById('offer-modal-title');
                if (targetTitle) targetTitle.innerText = title;
                if (modal) modal.classList.remove('hidden');
            }

            function closeOfferModal() {
                const modal = document.getElementById('offer-modal');
                if (modal) modal.classList.add('hidden');
            }

            function toggleSaveBookmark(btn) {
                const icon = btn.querySelector('.material-symbols-outlined');
                if (icon) {
                    const isFilled = icon.getAttribute('style')?.includes("'FILL' 1");
                    if (isFilled) {
                        icon.style.fontVariationSettings = "'FILL' 0";
                        icon.classList.remove('text-secondary');
                        icon.classList.add('text-outline');
                    } else {
                        icon.style.fontVariationSettings = "'FILL' 1";
                        icon.classList.remove('text-outline');
                        icon.classList.add('text-secondary');
                    }
                }
            }
        </script>
        <!-- Feed Header & Quick Post Banner -->
        <section class="max-w-7xl mx-auto w-full px-gutter pt-space-lg pb-space-sm">
            <div class="relative overflow-hidden rounded-xl bg-gradient-to-r from-surface-container-low via-surface-container to-secondary-container/20 p-space-md md:p-space-lg shadow-sm">
                <div class="absolute -right-10 -bottom-10 w-64 h-64 bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-space-md relative z-10">
                    <div class="max-w-2xl">
                        <div class="flex items-center gap-space-xs mb-1.5">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[13px]" style="font-variation-settings: 'FILL' 1;">bolt</span>
                                Bảng tin trực tiếp
                            </span>
                            <span class="font-label-md text-label-md text-on-surface-variant">• 142 yêu cầu thuê đang chờ chủ tài sản phản hồi</span>
                        </div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight leading-snug">
                            Cộng đồng Tìm thuê &amp; Cho thuê P2P
                        </h1>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                            Không tìm thấy món đồ ưng ý trong danh sách? Đăng tin ngay, hệ thống tự động kết nối bạn với các chủ sở hữu tin cậy xung quanh.
                        </p>
                    </div>
                    <div class="flex flex-wrap items-center gap-space-sm w-full lg:w-auto">
                        <a class="flex-1 lg:flex-none inline-flex items-center justify-center gap-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg px-space-lg py-3 rounded-lg shadow-sm transition-all transform active:scale-[0.98]" data-path="dang-tim-thue" href="#">
                            <span class="material-symbols-outlined text-[20px]">add_circle</span>
                            <span>+ Đăng yêu cầu thuê mới</span>
                        </a>
                        <button class="inline-flex items-center justify-center gap-1.5 bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-lg text-label-lg px-space-md py-3 rounded-lg shadow-sm transition-all" type="button">
                            <span class="material-symbols-outlined text-[18px] text-secondary">tune</span>
                            <span>Bộ lọc nâng cao</span>
                        </button>
                    </div>
                </div>
                <!-- Quick Category Pills -->
                <div class="flex items-center gap-space-xs mt-space-md pt-space-sm border-t border-surface-container-highest/60 overflow-x-auto no-scrollbar">
                    <button class="px-3 py-1.5 rounded-full bg-primary text-on-primary font-label-sm text-label-sm whitespace-nowrap shadow-sm">
                        Tất cả (142)
                    </button>
                    <button class="px-3 py-1.5 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm whitespace-nowrap transition-colors flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">camping</span> Dã ngoại &amp; Cắm trại
                    </button>
                    <button class="px-3 py-1.5 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm whitespace-nowrap transition-colors flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">photo_camera</span> Quay phim &amp; Máy ảnh
                    </button>
                    <button class="px-3 py-1.5 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm whitespace-nowrap transition-colors flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">styler</span> Trang phục &amp; Sự kiện
                    </button>
                    <button class="px-3 py-1.5 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm whitespace-nowrap transition-colors flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">handyman</span> Dụng cụ gia đình &amp; DIY
                    </button>
                    <button class="px-3 py-1.5 rounded-full bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-sm text-label-sm whitespace-nowrap transition-colors flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">sports_tennis</span> Thể thao &amp; Du lịch
                    </button>
                </div>
            </div>
        </section>
        <!-- Filter Bar Sticky Under Header -->
        <section class="max-w-7xl mx-auto w-full px-gutter py-space-sm">
            <div class="bg-surface-container-lowest rounded-xl p-space-sm shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-sm">
                <div class="flex flex-wrap items-center gap-space-xs w-full md:w-auto">
                    <!-- Khu vuc -->
                    <div class="relative">
                        <button class="inline-flex items-center gap-1.5 px-space-sm py-2 rounded-lg bg-surface-container-low hover:bg-surface-container font-label-md text-label-md text-on-surface transition-colors" onclick="toggleFilterDropdown('geo-dropdown')" type="button">
                            <span class="material-symbols-outlined text-[18px] text-secondary">location_on</span>
                            <span>Khu vực: <strong>Toàn quốc</strong></span>
                            <span class="material-symbols-outlined text-[16px]">expand_more</span>
                        </button>
                        <div class="hidden absolute top-full left-0 mt-1 w-52 bg-surface-container-lowest rounded-xl shadow-xl p-space-xs z-30" id="geo-dropdown">
                            <a class="block px-space-sm py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface" href="#">Toàn quốc</a>
                            <a class="block px-space-sm py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface font-semibold text-secondary" href="#">Thành phố Huế</a>
                            <a class="block px-space-sm py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface" href="#">Hà Nội</a>
                            <a class="block px-space-sm py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface" href="#">TP. Hồ Chí Minh</a>
                            <a class="block px-space-sm py-1.5 rounded-lg text-body-sm font-body-sm hover:bg-surface-container-low text-on-surface" href="#">Đà Nẵng</a>
                        </div>
                    </div>
                    <!-- Thoi gian thue -->
                    <div class="relative">
                        <button class="inline-flex items-center gap-1.5 px-space-sm py-2 rounded-lg bg-surface-container-low hover:bg-surface-container font-label-md text-label-md text-on-surface transition-colors" type="button">
                            <span class="material-symbols-outlined text-[18px] text-on-surface-variant">calendar_month</span>
                            <span>Thời gian: <strong>Cuối tuần này</strong></span>
                            <span class="material-symbols-outlined text-[16px]">expand_more</span>
                        </button>
                    </div>
                    <!-- Ngan sach -->
                    <div class="relative">
                        <button class="inline-flex items-center gap-1.5 px-space-sm py-2 rounded-lg bg-surface-container-low hover:bg-surface-container font-label-md text-label-md text-on-surface transition-colors" type="button">
                            <span class="material-symbols-outlined text-[18px] text-on-surface-variant">payments</span>
                            <span>Ngân sách: <strong>Tất cả mức giá</strong></span>
                            <span class="material-symbols-outlined text-[16px]">expand_more</span>
                        </button>
                    </div>
                </div>
                <!-- Sort Toggle -->
                <div class="flex items-center gap-space-xs w-full md:w-auto justify-end">
                    <span class="font-label-sm text-label-sm text-on-surface-variant">Sắp xếp:</span>
                    <div class="inline-flex rounded-lg bg-surface-container-low p-0.5">
                        <button class="px-space-sm py-1 rounded-md bg-surface-container-lowest font-label-sm text-label-sm text-on-surface shadow-sm font-semibold">
                            Mới nhất
                        </button>
                        <button class="px-space-sm py-1 rounded-md hover:bg-surface-container font-label-sm text-label-sm text-on-surface-variant">
                            Gần tôi
                        </button>
                        <button class="px-space-sm py-1 rounded-md hover:bg-surface-container font-label-sm text-label-sm text-on-surface-variant">
                            Cần gấp
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Content Layout (12 Columns: 8 Main Feed + 4 Sticky Sidebar) -->
        <section class="max-w-7xl mx-auto w-full px-gutter py-space-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
                <!-- Left Column: Feed Stream (8 Cols) -->
                <div class="lg:col-span-8 flex flex-col gap-space-md">
                    <!-- POST 1: Hero Featured Post (Tent Camping in Hue) -->
                    <article class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm hover:shadow-md transition-all">
                        <!-- Post Author Header -->
                        <div class="flex items-start justify-between gap-space-sm">
                            <div class="flex items-center gap-space-sm">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover" data-alt="A clean portrait of a smiling Vietnamese man wearing casual outdoor travel clothing, crisp studio lighting, friendly approachable expression, authentic travel lifestyle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7tMA1lojTMltGx68UrSxezSNORVo6baMoQe3gi-qWzoXH8h4p0mgzaRQ6fkcI8vFedV92EyedFSfGjSQgqEHwcN5JiJ8dJ26BTlo66lkrYhrZ4Jypn8R2_BOddplmFnT8r_tsL_kZiRAGpwLMJBMxahTlsEgA-daRTkCAZxC_nKt6pMcGxYNbbJNzsZ6ptSW95wv-lQaQdJwc7ZCxA9-ctT3eW_L45Jyg1FYN44o1WehBP93y92o" />
                                    <span class="absolute -bottom-0.5 -right-0.5 w-4 h-4 rounded-full bg-secondary flex items-center justify-center text-on-secondary shadow-sm" title="Đã xác thực CCCD &amp; Ký quỹ">
                                        <span class="material-symbols-outlined text-[11px]" style="font-variation-settings: 'FILL' 1;">check</span>
                                    </span>
                                </div>
                                <div>
                                    <div class="flex items-center gap-1.5 flex-wrap">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Lê Bảo Hoàng</span>
                                        <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                                            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">verified</span>
                                            CCCD Verified
                                        </span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary font-semibold">
                                            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">shield</span>
                                            Điểm tin cậy: 98/100
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 mt-0.5 text-on-surface-variant font-label-md text-label-md">
                                        <span>Đăng 15 phút trước</span>
                                        <span>•</span>
                                        <span class="inline-flex items-center gap-1 text-secondary font-medium">
                                            <span class="material-symbols-outlined text-[14px]">near_me</span>
                                            TP. Huế (Cách bạn ~2.4 km)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Bookmark Button -->
                            <button class="p-2 rounded-full hover:bg-surface-container-low text-outline transition-colors" onclick="toggleSaveBookmark(this)" title="Lưu tin này" type="button">
                                <span class="material-symbols-outlined text-[20px]">bookmark</span>
                            </button>
                        </div>
                        <!-- Main Post Body -->
                        <div class="mt-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">
                                    Dã ngoại &amp; Cắm trại
                                </span>
                                <span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[12px]">schedule</span> Cần trong 2 ngày tới
                                </span>
                            </div>
                            <h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">
                                Cần tìm thuê lều cắm trại 4 người loại chống mưa tốt đi dã ngoại cuối tuần
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-2 leading-relaxed">
                                Nhóm mình 4 người chuẩn bị đi cắm trại đồi Thiên An cuối tuần, cần lều sạch sẽ, vải dù chống thấm tốt, dễ dựng gọn nhẹ. Nếu chủ đồ có kèm sẵn bạt trải lót đáy và đèn treo lều thì báo giá trọn gói luôn giúp mình nhé. Nhóm toàn dân văn phòng giữ gìn đồ đạc rất cẩn thận, hoàn trả đúng giờ!
                            </p>
                            <!-- Metadata High-Density Chips -->
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-xs mt-space-md p-space-sm rounded-xl bg-surface-container-low">
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Thời gian thuê</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold">10/10 – 12/10 (3N2Đ)</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">payments</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Ngân sách dự kiến</div>
                                        <div class="font-label-lg text-label-lg text-secondary font-bold">200.000 đ / ngày</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">pin_drop</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Địa điểm nhận đồ</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold truncate">TP. Huế (Trung tâm)</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Attached Image Prompt (Matching user prompt & image: camping tent outdoor) -->
                            <div class="mt-space-md overflow-hidden rounded-xl bg-surface-container relative group">
                                <div class="relative w-full h-72 md:h-80 bg-cover bg-center rounded-xl transition-transform duration-300 group-hover:scale-[1.01]" data-alt="A modern green and white four-person dome camping tent pitched on a wildflower alpine meadow surrounded by lush mountain peaks under a clear blue sky, camping chairs and gear set up neatly nearby, high quality outdoor photography style with natural sunlight and vivid greens" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAXCwwOXIuyVppewMQwxAKW8XbEVy5nNfwSqi59uIp47RklfYc7ptmGYLdXQPmQtctD20GyDUPyw3vwLQIC_E0gnR-WL4RyakSpE3Zs38vJBJD-Kun4VkW6eZhFDL5k1WmW2BRdjupDJVhg2yTUQPRog1fs6zgG0cmDo1tzRRSxVA4YCHpWTsFy-wejiGtbEHXThRFjVah-buaWObeQyC0a5YNdDftIAw4b4AqTkNNZWvoyLhO_nPs')">
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent"></div>
                                    <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
                                        <span class="font-label-md text-label-md flex items-center gap-1.5 backdrop-blur-md bg-primary/40 px-3 py-1 rounded-full">
                                            <span class="material-symbols-outlined text-[16px]">photo_camera</span>
                                            Hình mẫu mong muốn: Lều vòm 4P chống nước 3000mm
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-primary/90 font-medium">Bấm để phóng to</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Interaction Counter Bar -->
                        <div class="flex items-center justify-between mt-space-md pt-space-sm border-t border-surface-container">
                            <div class="flex items-center gap-space-md text-on-surface-variant font-label-md text-label-md">
                                <span class="flex items-center gap-1 font-semibold text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">local_offer</span>
                                    5 chủ tài sản đã gửi đề xuất
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">chat_bubble_outline</span>
                                    8 thảo luận
                                </span>
                                <span class="hidden sm:inline-flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    184 lượt xem
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <button class="p-1.5 rounded-lg hover:bg-surface-container-low text-on-surface-variant transition-colors" title="Chia sẻ">
                                    <span class="material-symbols-outlined text-[18px]">share</span>
                                </button>
                            </div>
                        </div>
                        <!-- Action Buttons Dual Row -->
                        <div class="flex flex-col sm:flex-row items-center gap-space-sm mt-space-sm pt-space-xs">
                            <button class="w-full sm:flex-1 inline-flex items-center justify-center gap-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-2.5 px-space-md rounded-lg shadow-sm transition-all transform active:scale-[0.98]" onclick="handleOfferModal('Cần tìm thuê lều cắm trại 4 người loại chống mưa tốt')" type="button">
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">front_hand</span>
                                <span>Tôi có tài sản này (Gửi đề xuất cho thuê)</span>
                            </button>
                            <button class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg py-2.5 px-space-md rounded-lg transition-colors" type="button">
                                <span class="material-symbols-outlined text-[18px] text-secondary">chat</span>
                                <span>Nhắn tin trao đổi</span>
                            </button>
                        </div>
                    </article>
                    <!-- POST 2: Action Cam Rental (GoPro 11) -->
                    <article class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm hover:shadow-md transition-all">
                        <div class="flex items-start justify-between gap-space-sm">
                            <div class="flex items-center gap-space-sm">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover" data-alt="Close up profile photo of a young Vietnamese woman with glasses, smiling confidently against an architectural modern background, soft lighting, professional social profile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3-SAsc7sphhT5qC2LgpRNZTN9-xwxd-67KifbzWi3qRopI5EUA12_SnVwvH-LV3F0qjeP6Kyoyq7JeVzA_CevqkJklewdddwHLf1awz6yVAAxQelKaCgxs7_hFZLrqMppvAj5wP8TSqSYlA7B6Fj-u3oGipdoUn-p_Srt1jR5MAiI7fqf3vfBvfDI6UMYQtcQOweto5Ro11h2H3FM8KmCpCwTVVQxKiejIJ4cj9Ybkv5gTlzvBgM" />
                                    <span class="absolute -bottom-0.5 -right-0.5 w-4 h-4 rounded-full bg-secondary flex items-center justify-center text-on-secondary shadow-sm">
                                        <span class="material-symbols-outlined text-[11px]" style="font-variation-settings: 'FILL' 1;">check</span>
                                    </span>
                                </div>
                                <div>
                                    <div class="flex items-center gap-1.5 flex-wrap">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Trần Thùy Linh</span>
                                        <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                                            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">verified</span>
                                            CCCD Verified
                                        </span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary font-semibold">
                                            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">shield</span>
                                            95/100
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 mt-0.5 text-on-surface-variant font-label-md text-label-md">
                                        <span>Đăng 1 giờ trước</span>
                                        <span>•</span>
                                        <span class="inline-flex items-center gap-1 text-on-surface-variant font-medium">
                                            <span class="material-symbols-outlined text-[14px]">near_me</span>
                                            Quận Cầu Giấy, Hà Nội
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button class="p-2 rounded-full hover:bg-surface-container-low text-outline transition-colors" onclick="toggleSaveBookmark(this)" type="button">
                                <span class="material-symbols-outlined text-[20px]">bookmark</span>
                            </button>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">
                                    Quay phim &amp; Máy ảnh
                                </span>
                                <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-medium">
                                    Sẵn sàng cọc CCCD + Hợp đồng điện tử
                                </span>
                            </div>
                            <h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">
                                Cần thuê máy quay hành trình GoPro Hero 11 Black kèm 2 pin dự phòng đi phượt Hà Giang
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-2 leading-relaxed">
                                Tuần tới mình có chuyến phượt xe máy Hà Giang 4 ngày. Cần thuê trọn bộ GoPro Hero 11 hoặc 12, kèm theo dock sạc kép + 2 pin Enduro, thẻ nhớ tốc độ cao 128GB và mount gắn nón bảo hiểm fullface. Sẵn sàng ký quỹ cọc tiền qua ví RentShare an toàn.
                            </p>
                            <!-- Metadata Chips -->
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-xs mt-space-md p-space-sm rounded-xl bg-surface-container-low">
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Thời gian thuê</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold">14/10 – 18/10 (4 ngày)</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">payments</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Ngân sách dự kiến</div>
                                        <div class="font-label-lg text-label-lg text-secondary font-bold">180.000 đ / ngày</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">pin_drop</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Địa điểm giao nhận</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Hà Nội (Ship or qua lấy)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-space-md pt-space-sm border-t border-surface-container">
                            <div class="flex items-center gap-space-md text-on-surface-variant font-label-md text-label-md">
                                <span class="flex items-center gap-1 font-semibold text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">local_offer</span>
                                    3 đề xuất cho thuê
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">chat_bubble_outline</span>
                                    4 thảo luận
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <button class="p-1.5 rounded-lg hover:bg-surface-container-low text-on-surface-variant transition-colors">
                                    <span class="material-symbols-outlined text-[18px]">share</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row items-center gap-space-sm mt-space-sm pt-space-xs">
                            <button class="w-full sm:flex-1 inline-flex items-center justify-center gap-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-2.5 px-space-md rounded-lg shadow-sm transition-all transform active:scale-[0.98]" onclick="handleOfferModal('Cần thuê máy quay GoPro Hero 11 Black')" type="button">
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">front_hand</span>
                                <span>Tôi có tài sản này (Gửi đề xuất cho thuê)</span>
                            </button>
                            <button class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg py-2.5 px-space-md rounded-lg transition-colors" type="button">
                                <span class="material-symbols-outlined text-[18px] text-secondary">chat</span>
                                <span>Nhắn tin trao đổi</span>
                            </button>
                        </div>
                    </article>
                    <!-- POST 3: Men's Suit for Graduation (Trang phục sự kiện) -->
                    <article class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm hover:shadow-md transition-all">
                        <div class="flex items-start justify-between gap-space-sm">
                            <div class="flex items-center gap-space-sm">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover" data-alt="Portrait of an energetic Vietnamese male university student wearing a clean polo shirt, campus library background, friendly smile, natural warm daylight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCArVbs2bXfa8mCefmLhhEwBzy9XQx75I--PseSyjcrJgGAIJPdJI0RzaQSbbWEPFAdYzn4aSRYY6eHxptLiHhUrEyQPmE0FEcKFqD0B6rt35PeEOyAmm2NS8UCdMfT73Fi8yYYpSNeCy9UYwZIjcyb7VaPaYcfoH0-TElEepO_C0snMYlO4tTyxlC-b5UFf_1_CDPjJP5PtaCKIR3eOg105zB1J1hvhmvAbdJRUIKwUEZPqlLf1II" />
                                    <span class="absolute -bottom-0.5 -right-0.5 w-4 h-4 rounded-full bg-secondary flex items-center justify-center text-on-secondary shadow-sm">
                                        <span class="material-symbols-outlined text-[11px]" style="font-variation-settings: 'FILL' 1;">check</span>
                                    </span>
                                </div>
                                <div>
                                    <div class="flex items-center gap-1.5 flex-wrap">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Nguyễn Quốc Huy</span>
                                        <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                                            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">verified</span>
                                            CCCD Verified
                                        </span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary font-semibold">
                                            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">shield</span>
                                            92/100
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 mt-0.5 text-on-surface-variant font-label-md text-label-md">
                                        <span>Đăng 3 giờ trước</span>
                                        <span>•</span>
                                        <span class="inline-flex items-center gap-1 text-on-surface-variant font-medium">
                                            <span class="material-symbols-outlined text-[14px]">near_me</span>
                                            Quận 1, TP. Hồ Chí Minh
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button class="p-2 rounded-full hover:bg-surface-container-low text-outline transition-colors" onclick="toggleSaveBookmark(this)" type="button">
                                <span class="material-symbols-outlined text-[20px]">bookmark</span>
                            </button>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">
                                    Trang phục &amp; Sự kiện
                                </span>
                                <span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                    Chỉ thuê 1 ngày
                                </span>
                            </div>
                            <h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">
                                Cần thuê bộ vest nam màu đen hoặc xanh navy size L (1m75, 68kg) chụp ảnh kỷ yếu tốt nghiệp
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-2 leading-relaxed">
                                Mình cần gấp 1 bộ vest phom ôm trẻ trung (áo vest + quần âu), kèm cà vạt để chụp kỷ yếu trường ĐH vào sáng Chủ Nhật này. Mình cam kết mang giặt ủi sạch sẽ trước khi hoàn trả lại nguyên vẹn.
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-xs mt-space-md p-space-sm rounded-xl bg-surface-container-low">
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Thời gian thuê</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold">12/10 (8:00 - 20:00)</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">payments</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Ngân sách dự kiến</div>
                                        <div class="font-label-lg text-label-lg text-secondary font-bold">150.000 đ / ngày</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">pin_drop</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Địa điểm nhận đồ</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold truncate">TP. HCM (Quận 1, 3, Bình Thạnh)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-space-md pt-space-sm border-t border-surface-container">
                            <div class="flex items-center gap-space-md text-on-surface-variant font-label-md text-label-md">
                                <span class="flex items-center gap-1 font-semibold text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">local_offer</span>
                                    2 đề xuất cho thuê
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">chat_bubble_outline</span>
                                    1 bình luận
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <button class="p-1.5 rounded-lg hover:bg-surface-container-low text-on-surface-variant transition-colors">
                                    <span class="material-symbols-outlined text-[18px]">share</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row items-center gap-space-sm mt-space-sm pt-space-xs">
                            <button class="w-full sm:flex-1 inline-flex items-center justify-center gap-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-2.5 px-space-md rounded-lg shadow-sm transition-all transform active:scale-[0.98]" onclick="handleOfferModal('Cần thuê bộ vest nam size L chụp ảnh kỷ yếu')" type="button">
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">front_hand</span>
                                <span>Tôi có tài sản này (Gửi đề xuất cho thuê)</span>
                            </button>
                            <button class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg py-2.5 px-space-md rounded-lg transition-colors" type="button">
                                <span class="material-symbols-outlined text-[18px] text-secondary">chat</span>
                                <span>Nhắn tin trao đổi</span>
                            </button>
                        </div>
                    </article>
                    <!-- POST 4: Industrial Vacuum Cleaner (Dụng cụ gia đình) -->
                    <article class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm hover:shadow-md transition-all">
                        <div class="flex items-start justify-between gap-space-sm">
                            <div class="flex items-center gap-space-sm">
                                <div class="relative">
                                    <img class="w-12 h-12 rounded-full object-cover" data-alt="Portrait of a friendly middle-aged Vietnamese woman with neatly tied hair, natural outdoor home garden background, warm and responsible expression" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKyE8p6nqJbwsZUThtI99oQFeYC9W2jT5hZviW_XMlVnXywa8vvnV_tLihfqx1eqzqwvpty_JjqvsiVfFM809rFwSbI5kDHNOmYBKpikktbrrEAdf6qalKbNONMt-Kq1cCkbGgpSzmpOdUQV9sfMUa2VpgKyEvVn9j8ldA8EC9lVLJYvtjJil7ibSiTpO5CsLpcd1qiN5VFFaCp4kG_YdxYzat4wccoOKZ2gbjT2uv0qadjOVGuxI" />
                                    <span class="absolute -bottom-0.5 -right-0.5 w-4 h-4 rounded-full bg-secondary flex items-center justify-center text-on-secondary shadow-sm">
                                        <span class="material-symbols-outlined text-[11px]" style="font-variation-settings: 'FILL' 1;">check</span>
                                    </span>
                                </div>
                                <div>
                                    <div class="flex items-center gap-1.5 flex-wrap">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Vũ Mai Phương</span>
                                        <span class="inline-flex items-center gap-0.5 px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm">
                                            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">verified</span>
                                            CCCD Verified
                                        </span>
                                        <span class="inline-flex items-center gap-0.5 px-1.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-secondary font-semibold">
                                            <span class="material-symbols-outlined text-[12px]" style="font-variation-settings: 'FILL' 1;">shield</span>
                                            100/100
                                        </span>
                                    </div>
                                    <div class="flex items-center gap-2 mt-0.5 text-on-surface-variant font-label-md text-label-md">
                                        <span>Đăng 5 giờ trước</span>
                                        <span>•</span>
                                        <span class="inline-flex items-center gap-1 text-on-surface-variant font-medium">
                                            <span class="material-symbols-outlined text-[14px]">near_me</span>
                                            Hải Châu, TP. Đà Nẵng
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button class="p-2 rounded-full hover:bg-surface-container-low text-outline transition-colors" onclick="toggleSaveBookmark(this)" type="button">
                                <span class="material-symbols-outlined text-[20px]">bookmark</span>
                            </button>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">
                                    Dụng cụ gia đình &amp; DIY
                                </span>
                                <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-medium">
                                    Vệ sinh nhà cửa
                                </span>
                            </div>
                            <h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">
                                Cần thuê máy hút bụi giặt thảm nệm công nghiệp (Karcher hoặc tương đương) trong 1 ngày
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-2 leading-relaxed">
                                Gia đình mình mới chuyển nhà cần tổng vệ sinh giặt sofa và nệm phòng ngủ. Cần thuê máy hút bụi hút nước công suất lớn kèm đầu giặt phun hút chuyên dụng. Mình tự đến chở về trong ngày.
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-xs mt-space-md p-space-sm rounded-xl bg-surface-container-low">
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Thời gian thuê</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold">Thứ 7 tuần này</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">payments</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Ngân sách dự kiến</div>
                                        <div class="font-label-lg text-label-lg text-secondary font-bold">250.000 đ / ngày</div>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">pin_drop</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Địa điểm giao nhận</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold truncate">Đà Nẵng (Bán kính 7km)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-between mt-space-md pt-space-sm border-t border-surface-container">
                            <div class="flex items-center gap-space-md text-on-surface-variant font-label-md text-label-md">
                                <span class="flex items-center gap-1 font-semibold text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">local_offer</span>
                                    4 đề xuất cho thuê
                                </span>
                                <span class="flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">chat_bubble_outline</span>
                                    3 bình luận
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <button class="p-1.5 rounded-lg hover:bg-surface-container-low text-on-surface-variant transition-colors">
                                    <span class="material-symbols-outlined text-[18px]">share</span>
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row items-center gap-space-sm mt-space-sm pt-space-xs">
                            <button class="w-full sm:flex-1 inline-flex items-center justify-center gap-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-2.5 px-space-md rounded-lg shadow-sm transition-all transform active:scale-[0.98]" onclick="handleOfferModal('Cần thuê máy hút bụi giặt thảm nệm công nghiệp')" type="button">
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">front_hand</span>
                                <span>Tôi có tài sản này (Gửi đề xuất cho thuê)</span>
                            </button>
                            <button class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg py-2.5 px-space-md rounded-lg transition-colors" type="button">
                                <span class="material-symbols-outlined text-[18px] text-secondary">chat</span>
                                <span>Nhắn tin trao đổi</span>
                            </button>
                        </div>
                    </article>
                    <!-- Pagination / Load More Feed Button -->
                    <div class="pt-space-sm pb-space-lg flex flex-col items-center justify-center gap-2">
                        <button class="inline-flex items-center gap-2 px-space-lg py-3 rounded-xl bg-surface-container-lowest hover:bg-surface-container shadow-sm font-label-lg text-label-lg text-on-surface transition-all">
                            <span class="material-symbols-outlined text-[20px] animate-spin text-secondary">autorenew</span>
                            <span>Xem thêm 28 yêu cầu thuê khác</span>
                        </button>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Hiển thị 4 trên tổng số 142 yêu cầu thuê đang mở</span>
                    </div>
                </div>
                <!-- Right Column: Sticky Utility Sidebar (4 Cols) -->
                <aside class="lg:col-span-4 flex flex-col gap-space-md">
                    <!-- Safety & Security Guidelines Widget -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm">
                        <div class="flex items-center gap-2 pb-space-xs border-b border-surface-container">
                            <div class="w-7 h-7 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center">
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">verified_user</span>
                            </div>
                            <h3 class="font-label-lg text-label-lg text-on-surface font-bold">
                                Bảo chứng an toàn RentShare
                            </h3>
                        </div>
                        <div class="flex flex-col gap-space-sm mt-space-sm">
                            <div class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-[18px] text-secondary mt-0.5">account_balance_wallet</span>
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface font-semibold">Ký quỹ đặt cọc qua nền tảng</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Tiền cọc được khóa an toàn trong ví Escrow, chỉ hoàn trả khi hai bên xác nhận tình trạng tài sản nguyên vẹn.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-[18px] text-secondary mt-0.5">photo_camera_front</span>
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface font-semibold">Chụp ảnh biên bản giao nhận</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Ứng dụng cung cấp checklist chụp ảnh 4 góc tài sản trước khi trao tay để đối chiếu minh bạch.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-[18px] text-secondary mt-0.5">draw</span>
                                <div>
                                    <p class="font-label-md text-label-md text-on-surface font-semibold">Hợp đồng điện tử 1-chạm</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Tự động khởi tạo hợp đồng cho thuê có giá trị pháp lý gắn liền với mã định danh CCCD của cả hai.</p>
                                </div>
                            </div>
                        </div>
                        <a class="mt-space-sm pt-space-xs block font-label-sm text-label-sm text-secondary hover:underline font-semibold flex items-center gap-1" href="#">
                            <span>Tìm hiểu chi tiết chính sách bảo vệ chủ đồ</span>
                            <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                        </a>
                    </div>
                    <!-- Community Performance Stats Widget -->
                    <div class="bg-gradient-to-br from-primary-container to-surface-container-highest text-on-primary rounded-xl p-space-md shadow-sm relative overflow-hidden">
                        <div class="relative z-10">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary-fixed">Hiệu quả kết nối</span>
                                <span class="w-2 h-2 rounded-full bg-secondary-fixed-dim animate-ping"></span>
                            </div>
                            <div class="font-headline-xl text-headline-xl text-on-primary font-extrabold tracking-tight">
                                85.4%
                            </div>
                            <p class="font-body-md text-body-md text-primary-fixed mt-1">
                                Yêu cầu thuê tìm được chủ tài sản phản hồi trong vòng <strong>dưới 2 giờ</strong>!
                            </p>
                            <div class="mt-space-md pt-space-sm border-t border-primary-fixed/20 grid grid-cols-2 gap-space-sm">
                                <div>
                                    <div class="font-headline-sm text-headline-sm text-on-primary font-bold">1.280+</div>
                                    <div class="font-label-sm text-label-sm text-on-primary-container">Đơn thuê hoàn tất tháng này</div>
                                </div>
                                <div>
                                    <div class="font-headline-sm text-headline-sm text-secondary-fixed font-bold">99.2%</div>
                                    <div class="font-label-sm text-label-sm text-on-primary-container">Đánh giá 5 sao không tranh chấp</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fastest Responded Requests (Trending Community Activity) -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm">
                        <div class="flex items-center justify-between pb-space-xs border-b border-surface-container mb-space-sm">
                            <h3 class="font-label-lg text-label-lg text-on-surface font-bold flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-[18px] text-tertiary-fixed-dim">local_fire_department</span>
                                <span>Được phản hồi nhanh hôm nay</span>
                            </h3>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Vừa chốt</span>
                        </div>
                        <div class="flex flex-col gap-space-sm">
                            <!-- Item 1 -->
                            <div class="p-space-xs rounded-lg hover:bg-surface-container-low transition-colors">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Chốt sau 14 phút</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Hà Nội</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface font-semibold line-clamp-1 mt-0.5">
                                    Bộ mic thu âm cài áo không dây DJI Mic 2
                                </p>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mt-1">
                                    <span>Ngân sách: 150.000 đ/ngày</span>
                                    <span>4 chủ đồ đề xuất</span>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="p-space-xs rounded-lg hover:bg-surface-container-low transition-colors">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Chốt sau 26 phút</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">TP. Hồ Chí Minh</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface font-semibold line-clamp-1 mt-0.5">
                                    Loa kéo di động JBL Partybox 310 tiệc BBQ
                                </p>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mt-1">
                                    <span>Ngân sách: 300.000 đ/ngày</span>
                                    <span>6 chủ đồ đề xuất</span>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="p-space-xs rounded-lg hover:bg-surface-container-low transition-colors">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm text-secondary font-semibold">Chốt sau 42 phút</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Huế</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface font-semibold line-clamp-1 mt-0.5">
                                    Bộ gậy đánh golf TaylorMade cho người mới bắt đầu
                                </p>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mt-1">
                                    <span>Ngân sách: 400.000 đ/ngày</span>
                                    <span>3 chủ đồ đề xuất</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-space-sm pt-space-xs border-t border-surface-container text-center">
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Bạn có món đồ đang nhàn rỗi ở nhà? Đừng để lãng phí!</span>
                        </div>
                    </div>
                    <!-- Help & Verification Mini Card -->
                    <div class="bg-surface-container-low rounded-xl p-space-md flex items-center gap-space-sm">
                        <div class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-[20px]">contact_support</span>
                        </div>
                        <div class="flex-1">
                            <div class="font-label-md text-label-md text-on-surface font-semibold">Cần hỗ trợ xác minh CCCD?</div>
                            <div class="font-body-sm text-body-sm text-on-surface-variant">Đội ngũ kiểm duyệt hồ sơ 24/7 chỉ trong 5 phút.</div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
        <!-- Interactive Modal: Send Rental Offer (Hidden by default, triggered by JS) -->
        <div class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-primary/60 backdrop-blur-sm" id="offer-modal">
            <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-md md:p-space-lg shadow-xl relative animate-in fade-in duration-200">
                <div class="flex items-center justify-between pb-space-sm border-b border-surface-container">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary text-[22px]">storefront</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Gửi đề xuất cho thuê</h3>
                    </div>
                    <button class="p-1 rounded-lg text-outline hover:bg-surface-container hover:text-on-surface" onclick="closeOfferModal()" type="button">
                        <span class="material-symbols-outlined text-[20px]">close</span>
                    </button>
                </div>
                <div class="mt-space-md">
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Bạn đang phản hồi yêu cầu:</p>
                    <p class="font-label-lg text-label-lg text-on-surface font-bold mt-0.5 line-clamp-1" id="offer-modal-title">
                        Cần tìm thuê tài sản
                    </p>
                    <form class="mt-space-md flex flex-col gap-space-sm" onsubmit="event.preventDefault(); alert('Đề xuất của bạn đã được gửi thành công đến người thuê!'); closeOfferModal();">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Chọn tài sản bạn muốn cho thuê</label>
                            <select class="w-full bg-surface rounded-lg p-2.5 font-body-md text-body-md text-on-surface focus:outline-none">
                                <option value="1">Lều cắm trại Coleman 4 người chống bão (Sẵn sàng)</option>
                                <option value="2">Lều Vintage Glamping Naturehike 4.8</option>
                                <option value="new">+ Chọn tài sản khác từ danh sách của bạn...</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-space-sm">
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Giá đề xuất (đ / ngày)</label>
                                <input class="w-full bg-surface rounded-lg p-2.5 font-body-md text-body-md text-on-surface focus:outline-none" type="number" value="180000" />
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Mức cọc yêu cầu (đ)</label>
                                <input class="w-full bg-surface rounded-lg p-2.5 font-body-md text-body-md text-on-surface focus:outline-none" type="number" value="500000" />
                            </div>
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Ghi chú kèm theo cho người thuê</label>
                            <textarea class="w-full bg-surface rounded-lg p-2.5 font-body-md text-body-md text-on-surface focus:outline-none resize-none" placeholder="Ví dụ: Mình có kèm bạt lót chống thấm và 2 đèn lều, có thể giao nhận tại Cầu Tràng Tiền..." rows="3"></textarea>
                        </div>
                        <div class="p-space-xs rounded-lg bg-secondary-container/40 flex items-center gap-2 text-on-secondary-container">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                            <span class="font-label-sm text-label-sm">Đề xuất của bạn sẽ kích hoạt bảo chứng ký quỹ RentShare tự động.</span>
                        </div>
                        <div class="flex items-center justify-end gap-space-sm mt-space-sm pt-space-xs">
                            <button class="px-space-md py-2 rounded-lg bg-surface-container font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors" onclick="closeOfferModal()" type="button">
                                Hủy
                            </button>
                            <button class="px-space-lg py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-on-primary-fixed-variant transition-colors shadow-sm" type="submit">
                                Xác nhận gửi đề xuất
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection