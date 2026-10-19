@extends('layouts.app')

@section('content')
<!-- Main Profile Content -->
<main class="max-w-7xl mx-auto px-6 py-6 space-y-6">
    <!-- Profile Master Header -->
    <div class="bg-white rounded-2xl border border-border shadow-sm overflow-hidden">
        <!-- Minimalist Cover -->
        <div class="h-40 md:h-52 bg-gradient-to-r from-slate-900 via-slate-800 to-teal-900 relative">
            <div class="absolute inset-0 opacity-15 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:16px_16px]"></div>
            <div class="absolute top-4 right-6">
                <span class="bg-white/20 backdrop-blur text-white text-xs px-3 py-1 rounded-full flex items-center gap-1.5 font-medium">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    Đang trực tuyến
                </span>
            </div>
        </div>

        <!-- User Identification & Dual Metrics -->
        <div class="px-6 pb-6 relative -mt-16 md:-mt-20">
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 pb-6 border-b border-border">
                <!-- Left: Avatar & Info -->
                <div class="flex flex-col sm:flex-row items-start sm:items-end gap-5">
                    <div class="relative">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2NN35lNpfGKcI8dXstQlMb0S7QSyFLtAX7ukuI4lsSCtRhN308LIYTZBeZfMDLZwkwD5QhA-QC4CmPedmPAqf6D-wjc1QDKmGgmffvONXxa082xqJfcprdDXOcbu-iw2CX7CWEsts53WTdAqCNt0rqLPdZ5Sh4imC4aFw-fwbdrMFiMXrRr3peQM7hmZdRf4ybA2wkDC1kIGh9lrDCJXYYuveHFJ6rauMkZaXIDOGUHMmNwuAP5E" alt="Nguyễn Minh Tuấn" class="w-28 h-28 md:w-36 md:h-36 rounded-2xl object-cover ring-4 ring-white shadow-xl bg-white" />
                        <div class="absolute -bottom-2 -right-2 bg-secondary text-white p-1.5 rounded-xl shadow-md ring-2 ring-white" title="Đã xác thực CCCD & VNeID">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                        </div>
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex flex-wrap items-center gap-2">
                            <h1 class="text-2xl md:text-3xl font-bold text-text-main">Nguyễn Minh Tuấn</h1>
                            <span class="bg-teal-50 text-secondary text-xs px-2.5 py-1 rounded-full font-semibold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[15px]">shield</span>
                                Đã xác thực CCCD & VNeID
                            </span>
                        </div>
                        <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs text-text-muted">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[15px]">location_on</span>
                                Quận 1, TP. Hồ Chí Minh
                            </span>
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[15px]">calendar_today</span>
                                Thành viên từ tháng 3/2022
                            </span>
                            <span class="flex items-center gap-1 text-text-main font-semibold">
                                <span class="material-symbols-outlined text-[15px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                                4.95 <span class="text-text-muted font-normal">(106 đánh giá)</span>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Right: Trust Badge & Action CTAs -->
                <div class="flex flex-wrap items-center gap-3">
                    <div class="px-4 py-2 rounded-xl bg-slate-50 border border-border flex items-center gap-3">
                        <div>
                            <span class="text-[10px] text-text-muted uppercase font-semibold block">Điểm tin cậy</span>
                            <div class="flex items-baseline gap-1">
                                <span class="text-xl font-bold text-secondary">98</span>
                                <span class="text-xs text-text-muted">/100</span>
                            </div>
                        </div>
                        <div class="w-8 h-8 rounded-full bg-secondary text-white flex items-center justify-center">
                            <span class="material-symbols-outlined text-[18px]">verified_user</span>
                        </div>
                    </div>
                    <button class="bg-primary hover:bg-slate-800 text-white font-semibold text-sm px-4 py-2.5 rounded-xl flex items-center gap-2 transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-[18px]">chat</span>
                        <span>Nhắn tin</span>
                    </button>
                    <button class="bg-slate-100 hover:bg-slate-200 text-text-main font-semibold text-sm px-4 py-2.5 rounded-xl flex items-center gap-1.5 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">person_add</span>
                        <span>Theo dõi</span>
                    </button>
                    <button class="p-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-text-main transition-colors" title="Chia sẻ">
                        <span class="material-symbols-outlined text-[18px]">share</span>
                    </button>
                </div>
            </div>

            <!-- Distinct Dual-Role Persona Split: Landlord vs Renter -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-6">
                <!-- Role 1: Landlord -->
                <div class="p-4 rounded-xl bg-slate-50 border border-border space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="p-1.5 rounded-lg bg-white border border-border text-secondary">
                                <span class="material-symbols-outlined text-[20px]">storefront</span>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-text-main">Vai trò Chủ tài sản (Landlord)</h3>
                                <p class="text-[11px] text-text-muted">Cung cấp thiết bị kiểm định chất lượng cao</p>
                            </div>
                        </div>
                        <span class="px-2 py-0.5 rounded-full bg-white text-secondary text-xs font-semibold border border-border">
                            72 đơn thành công
                        </span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div class="bg-white p-2.5 rounded-lg border border-border/60">
                            <span class="text-text-muted text-[11px] block">Tỷ lệ phản hồi</span>
                            <span class="text-base font-bold text-secondary mt-0.5 block">99%</span>
                            <span class="text-[10px] text-text-muted">Thường trong ~10 phút</span>
                        </div>
                        <div class="bg-white p-2.5 rounded-lg border border-border/60">
                            <span class="text-text-muted text-[11px] block">Đánh giá Chủ đồ</span>
                            <span class="text-base font-bold text-text-main mt-0.5 block">5.0 ★</span>
                            <span class="text-[10px] text-text-muted">Từ 68 khách thuê</span>
                        </div>
                    </div>
                </div>

                <!-- Role 2: Renter -->
                <div class="p-4 rounded-xl bg-slate-50 border border-border space-y-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <div class="p-1.5 rounded-lg bg-teal-50 border border-teal-100 text-secondary">
                                <span class="material-symbols-outlined text-[20px]">person_check</span>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-text-main">Vai trò Người đi thuê (Renter)</h3>
                                <p class="text-[11px] text-text-muted">Ý thức bảo quản và giữ gìn đồ đạc cao</p>
                            </div>
                        </div>
                        <span class="px-2 py-0.5 rounded-full bg-teal-50 text-secondary text-xs font-semibold border border-teal-100">
                            34 đơn hoàn tất
                        </span>
                    </div>
                    <div class="grid grid-cols-2 gap-2 text-xs">
                        <div class="bg-white p-2.5 rounded-lg border border-border/60">
                            <span class="text-text-muted text-[11px] block">Trả đồ đúng hẹn</span>
                            <span class="text-base font-bold text-secondary mt-0.5 block">100%</span>
                            <span class="text-[10px] text-text-muted">0 lần quá hạn</span>
                        </div>
                        <div class="bg-white p-2.5 rounded-lg border border-border/60">
                            <span class="text-text-muted text-[11px] block">Tranh chấp & Hỏng hóc</span>
                            <span class="text-base font-bold text-text-main mt-0.5 block">0 đơn</span>
                            <span class="text-[10px] text-secondary font-medium">Bảo chứng cọc 100%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Tabs Navigation (7 tabs) -->
        <div class="px-6 bg-slate-50 border-t border-border overflow-x-auto">
            <nav class="flex items-center gap-2 min-w-max text-xs font-semibold py-2">
                <button class="px-4 py-2 rounded-lg bg-primary text-white">Tổng quan</button>
                <button class="px-4 py-2 rounded-lg text-text-muted hover:text-text-main hover:bg-slate-100 transition-colors flex items-center gap-1.5">
                    <span>Tài sản cho thuê</span>
                    <span class="bg-slate-200 text-slate-700 text-[10px] px-1.5 py-0.2 rounded-full">6</span>
                </button>
                <button class="px-4 py-2 rounded-lg text-text-muted hover:text-text-main hover:bg-slate-100 transition-colors flex items-center gap-1.5">
                    <span>Yêu cầu tìm thuê</span>
                    <span class="bg-teal-100 text-secondary text-[10px] px-1.5 py-0.2 rounded-full">2</span>
                </button>
                <button class="px-4 py-2 rounded-lg text-text-muted hover:text-text-main hover:bg-slate-100 transition-colors flex items-center gap-1.5">
                    <span>Đang thuê</span>
                    <span class="bg-slate-200 text-slate-700 text-[10px] px-1.5 py-0.2 rounded-full">1</span>
                </button>
                <button class="px-4 py-2 rounded-lg text-text-muted hover:text-text-main hover:bg-slate-100 transition-colors flex items-center gap-1.5">
                    <span>Đang cho thuê</span>
                    <span class="bg-slate-200 text-slate-700 text-[10px] px-1.5 py-0.2 rounded-full">3</span>
                </button>
                <button class="px-4 py-2 rounded-lg text-text-muted hover:text-text-main hover:bg-slate-100 transition-colors flex items-center gap-1.5">
                    <span>Đánh giá & Nhận xét</span>
                    <span class="bg-slate-200 text-slate-700 text-[10px] px-1.5 py-0.2 rounded-full">106</span>
                </button>
                <button class="px-4 py-2 rounded-lg text-text-muted hover:text-text-main hover:bg-slate-100 transition-colors">
                    Lịch sử giao dịch
                </button>
            </nav>
        </div>
    </div>

    <!-- Tab 1: Overview Content -->
    <div class="space-y-6">
        <!-- Member Bio statement -->
        <div class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-3">
            <h2 class="text-sm font-bold text-text-main uppercase tracking-wider text-text-muted flex items-center gap-2">
                <span class="material-symbols-outlined text-secondary text-[18px]">format_quote</span>
                Giới thiệu bản thân & Triết lý chia sẻ
            </h2>
            <p class="text-sm text-text-main leading-relaxed">
                "Nhiếp ảnh gia tự do & đam mê camping. Mình có nhiều thiết bị quay chụp và lều trại ít dùng nên cho mọi người thuê với giá hợp lý, đồng thời cũng hay thuê xe cộ khi đi công tác các tỉnh. Luôn trân trọng và giữ gìn đồ đạc cẩn thận như của chính mình!"
            </p>
            <div class="flex flex-wrap gap-2 pt-2">
                <span class="text-xs bg-slate-100 text-text-muted px-3 py-1 rounded-full">#NhiepAnhSony</span>
                <span class="text-xs bg-slate-100 text-text-muted px-3 py-1 rounded-full">#OutdoorCamping</span>
                <span class="text-xs bg-slate-100 text-text-muted px-3 py-1 rounded-full">#XeMayQuan1</span>
                <span class="text-xs bg-slate-100 text-text-muted px-3 py-1 rounded-full">#TraDoDungHen100%</span>
            </div>
        </div>

        <!-- Section: Featured Assets for Rent (Tài sản đang cho thuê của Tuấn) -->
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-bold text-text-main">Tài sản nổi bật đang cho thuê của Tuấn</h2>
                    <p class="text-xs text-text-muted">Các thiết bị và xe cộ sẵn sàng bàn giao trong ngày</p>
                </div>
                <a href="#" class="text-xs font-semibold text-secondary hover:underline flex items-center gap-1">
                    <span>Xem cả 6 tài sản</span>
                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1: Sony A7 IV -->
                <div class="bg-white rounded-2xl border border-border overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-4/3 bg-slate-100 overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4-1Y9cUcgpXhVWzknU8beCa0QiDwuAumcaI7OSzKudE3KIpef3AHMm2-l89apjS8QEHleEHQPXkQ4PDj6k2LqJ5cmDf_B3eb0eOkQBGZQAfMyN4kzI4K_mQek0Oa8mDTtIVWOqyyx42TAN4GQTViqs8XgCbr_Maoohks9O2fuxJSz16Iam7ABaIRlhZ0xc0TVZz68hw8XMy_5WNSOA8EOcmQCYSgRdO1yoqPyUv8y_h6Bmvm2Fe4" alt="Sony A7IV" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur px-2.5 py-0.5 rounded-full text-[11px] font-semibold text-secondary shadow-xs">
                                Sẵn sàng giao ngay
                            </span>
                            <span class="absolute bottom-3 left-3 bg-black/60 text-white text-[11px] px-2 py-0.5 rounded backdrop-blur">
                                Máy ảnh & Lens
                            </span>
                        </div>
                        <div class="p-4 space-y-2">
                            <div class="flex items-center justify-between text-xs text-text-muted">
                                <span>Quận 1, TP.HCM</span>
                                <span class="font-semibold text-text-main flex items-center gap-0.5">
                                    <span class="material-symbols-outlined text-[14px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                                    5.0 (28 lượt)
                                </span>
                            </div>
                            <h3 class="text-sm font-bold text-text-main line-clamp-1 group-hover:text-secondary transition-colors">
                                Sony Alpha A7 Mark IV + Lens 24-70mm GM
                            </h3>
                            <p class="text-xs text-text-muted line-clamp-2">Máy đẹp 98%, kèm 2 pin dung lượng cao, sạc kép và thẻ nhớ 128GB tốc độ cao.</p>
                        </div>
                    </div>
                    <div class="p-4 pt-0 border-t border-border flex items-center justify-between mt-2">
                        <div>
                            <span class="text-base font-bold text-secondary">450.000₫</span>
                            <span class="text-xs text-text-muted">/ngày</span>
                        </div>
                        <button class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-primary hover:text-white text-xs font-semibold text-text-main transition-colors">
                            Thuê ngay
                        </button>
                    </div>
                </div>

                <!-- Card 2: Vespa Sprint -->
                <div class="bg-white rounded-2xl border border-border overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-4/3 bg-slate-100 overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzZmGh-Np_Legd-nP4fq9ETH-Rrcb16F1caq_DcxyrLj4SyaHK7VmXHJKQb7CqXg5UAF_Arjao8ZInCJSmuK-Syn7dOh7Vw_sGpyie4wAW3OMmVUz7GZzefU23uMcDwiENZDojq0ZIpYsGMtJrhUMY1QqIoT-pKdQ4sviBS3mT7QbXnY2F0PdBOHYfzbEO3j21bxs7Zj95F8nX8dWECmQjoaveS900cVIcvHSvh_xHq_HVORmUfLo" alt="Vespa Sprint" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur px-2.5 py-0.5 rounded-full text-[11px] font-semibold text-secondary shadow-xs">
                                Sẵn sàng giao ngay
                            </span>
                            <span class="absolute bottom-3 left-3 bg-black/60 text-white text-[11px] px-2 py-0.5 rounded backdrop-blur">
                                Xe máy tay ga
                            </span>
                        </div>
                        <div class="p-4 space-y-2">
                            <div class="flex items-center justify-between text-xs text-text-muted">
                                <span>Quận 1, TP.HCM</span>
                                <span class="font-semibold text-text-main flex items-center gap-0.5">
                                    <span class="material-symbols-outlined text-[14px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                                    4.9 (42 lượt)
                                </span>
                            </div>
                            <h3 class="text-sm font-bold text-text-main line-clamp-1 group-hover:text-secondary transition-colors">
                                Vespa Sprint S 150 ABS (Xám Xi Măng Thể Thao)
                            </h3>
                            <p class="text-xs text-text-muted line-clamp-2">Bảo dưỡng chính hãng, máy êm vọt. Kèm thùng sau chứa hành lý và 2 mũ 3/4.</p>
                        </div>
                    </div>
                    <div class="p-4 pt-0 border-t border-border flex items-center justify-between mt-2">
                        <div>
                            <span class="text-base font-bold text-secondary">280.000₫</span>
                            <span class="text-xs text-text-muted">/ngày</span>
                        </div>
                        <button class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-primary hover:text-white text-xs font-semibold text-text-main transition-colors">
                            Thuê ngay
                        </button>
                    </div>
                </div>

                <!-- Card 3: Camping Glamping Tent -->
                <div class="bg-white rounded-2xl border border-border overflow-hidden shadow-sm hover:shadow-md transition-shadow group flex flex-col justify-between">
                    <div>
                        <div class="relative aspect-4/3 bg-slate-100 overflow-hidden">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBurMCJ1TL3wQIVMaVhjXzRIQc80YcUV2pxXnKoe51ne0s102r_rkf8e3_TSYu7YPXBukE9GAswhTbJ1aXRkHmJwb58lbj1DqUfQFWlrgtMOnbmJgnUy0el0cQibJnGn1RftlSTXVbzmUnw9JLQq-lNZz5-yrL7sfPFfWX41WwY10pDYS7dcENdtTuUyhjw8LualQw-vQ034q09bq51czGWQbZH0-c2QuuUPH6QPZZpq-nMijxSuyY" alt="Lều cắm trại" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" />
                            <span class="absolute top-3 left-3 bg-white/90 backdrop-blur px-2.5 py-0.5 rounded-full text-[11px] font-semibold text-secondary shadow-xs">
                                Sẵn sàng giao ngay
                            </span>
                            <span class="absolute bottom-3 left-3 bg-black/60 text-white text-[11px] px-2 py-0.5 rounded backdrop-blur">
                                Cắm trại & Dã ngoại
                            </span>
                        </div>
                        <div class="p-4 space-y-2">
                            <div class="flex items-center justify-between text-xs text-text-muted">
                                <span>Quận 1 / Giao tận nơi</span>
                                <span class="font-semibold text-text-main flex items-center gap-0.5">
                                    <span class="material-symbols-outlined text-[14px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                                    5.0 (14 lượt)
                                </span>
                            </div>
                            <h3 class="text-sm font-bold text-text-main line-clamp-1 group-hover:text-secondary transition-colors">
                                Bộ Lều Glamping Naturehike 4 người + Bàn Ghế Gỗ
                            </h3>
                            <p class="text-xs text-text-muted line-clamp-2">Full phụ kiện: Bạt tăng che mưa nắng, đệm hơi, đèn bão vintage và bếp dã ngoại.</p>
                        </div>
                    </div>
                    <div class="p-4 pt-0 border-t border-border flex items-center justify-between mt-2">
                        <div>
                            <span class="text-base font-bold text-secondary">320.000₫</span>
                            <span class="text-xs text-text-muted">/2 ngày 1 đêm</span>
                        </div>
                        <button class="px-3 py-1.5 rounded-lg bg-slate-100 hover:bg-primary hover:text-white text-xs font-semibold text-text-main transition-colors">
                            Thuê ngay
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Rental Request by Tuan (Renter side) -->
        <div class="bg-white rounded-2xl p-6 border border-border shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="bg-teal-50 text-secondary text-xs px-2.5 py-0.5 rounded-full font-semibold">Yêu cầu tìm thuê đang mở</span>
                    <span class="text-xs text-text-muted">Đăng 2 ngày trước</span>
                </div>
                <h3 class="text-base font-bold text-text-main">Cần thuê Flycam DJI Mini 4 Pro hoặc Mavic 3 (3 ngày quay tại Măng Đen)</h3>
                <p class="text-xs text-text-muted">Ngân sách: 400.000₫ - 500.000₫/ngày • Cam kết cọc 100% qua quỹ bảo chứng RentShare</p>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <span class="text-xs text-text-muted">Đã có 4 chủ đồ gửi báo giá</span>
                <button class="bg-primary hover:bg-slate-800 text-white text-xs font-semibold px-4 py-2.5 rounded-xl transition-colors">
                    Gửi báo giá cho Tuấn
                </button>
            </div>
        </div>

        <!-- Bilateral Two-way Reviews -->
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-bold text-text-main">Đánh giá hai chiều minh bạch</h2>
                    <p class="text-xs text-text-muted">Hiển thị song song đánh giá từ Khách thuê đồ và Chủ tài sản đã cho Tuấn mượn</p>
                </div>
                <span class="text-xs font-semibold text-secondary">4.95 / 5.0 (106 nhận xét)</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Review 1: Tuan as Landlord -->
                <div class="p-4 rounded-xl bg-white border border-border shadow-sm space-y-2">
                    <div class="flex items-center justify-between text-xs">
                        <span class="px-2 py-0.5 rounded bg-slate-100 text-text-muted font-medium">Đánh giá từ Khách thuê đồ</span>
                        <span class="text-amber-500 font-bold">5.0 ★</span>
                    </div>
                    <p class="text-xs text-text-muted leading-relaxed">
                        "Thuê máy ảnh Sony của anh Tuấn đi chụp kỷ yếu. Máy mới nguyên, sensor sạch sẽ, anh còn cho mượn kèm túi chống sốc rất xịn. Sẽ tiếp tục ủng hộ!"
                    </p>
                    <div class="flex items-center gap-2 pt-2 border-t border-border/60 text-[11px] text-text-muted">
                        <span class="font-semibold text-text-main">Vũ Phương Thảo</span>
                        <span>• Thuê Sony A7IV</span>
                    </div>
                </div>

                <!-- Review 2: Tuan as Renter -->
                <div class="p-4 rounded-xl bg-white border border-border shadow-sm space-y-2">
                    <div class="flex items-center justify-between text-xs">
                        <span class="px-2 py-0.5 rounded bg-teal-50 text-secondary font-medium">Đánh giá từ Chủ tài sản cho Tuấn thuê</span>
                        <span class="text-amber-500 font-bold">5.0 ★</span>
                    </div>
                    <p class="text-xs text-text-muted leading-relaxed">
                        "Bạn Tuấn thuê bộ lều dã ngoại 4 người của mình. Nhận đồ đúng giờ, lúc trả lại thì vệ sinh sạch sẽ tinh tươm, gấp gọn gàng. Rất uy tín và văn minh!"
                    </p>
                    <div class="flex items-center gap-2 pt-2 border-t border-border/60 text-[11px] text-text-muted">
                        <span class="font-semibold text-text-main">Trần Văn Hưng</span>
                        <span>• Cho thuê Bộ Lều Glamping</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection