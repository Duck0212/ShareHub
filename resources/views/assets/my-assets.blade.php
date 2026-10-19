@extends('layouts.app')

@section('content')
<main class="w-full pt-20 bg-background min-h-screen">
    <div class="flex flex-col w-full">
        <!-- Subtle decorative ambient glows (contained) -->
        <div class="relative w-full overflow-hidden">
            <div class="absolute -top-24 left-1/4 w-96 h-96 bg-secondary-fixed/30 rounded-full blur-3xl pointer-events-none -z-10"></div>
            <div class="absolute top-48 right-10 w-80 h-80 bg-surface-container-high/60 rounded-full blur-2xl pointer-events-none -z-10"></div>
            <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-lg flex flex-col gap-space-lg">
                <!-- Breadcrumbs & Header Section -->
                <section class="flex flex-col gap-space-sm">
                    <nav aria-label="Breadcrumb" class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
                        <a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Trang chủ</a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-on-surface-variant">Hoạt động cá nhân</span>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-on-surface font-semibold">Tài sản của tôi</span>
                    </nav>
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pt-space-xs">
                        <div class="flex flex-col max-w-2xl">
                            <div class="flex items-center gap-2 mb-1">
                                <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold px-2 py-0.5 rounded-full bg-secondary-fixed/40">Owner Dashboard</span>
                                <span class="text-on-surface-variant text-label-sm font-label-sm">• Cập nhật 3 phút trước</span>
                            </div>
                            <h1 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight">Kho tài sản của tôi</h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-1">Quản lý danh sách thiết bị cho thuê, theo dõi lịch đặt đồ và hiệu suất sinh lời P2P.</p>
                        </div>
                        <div class="flex items-center gap-space-sm shrink-0">
                            <a class="inline-flex items-center gap-space-xs px-space-md py-3 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-primary-container hover:text-on-primary-container transition-all" data-path="dang-tai-san" href="#">
                                <span class="material-symbols-outlined text-[20px]">add_circle</span>
                                <span>+ Đăng tài sản mới</span>
                            </a>
                        </div>
                    </div>
                </section>
                <!-- KPI Summary Cards (4 Metrics) -->
                <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
                    <!-- Metric 1 -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant font-medium">Tổng tài sản trong kho</span>
                            <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-on-surface">
                                <span class="material-symbols-outlined text-[20px]">inventory_2</span>
                            </div>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-lg text-headline-lg font-bold text-on-surface">6</span>
                                <span class="font-label-md text-label-md text-on-surface-variant">món đồ</span>
                            </div>
                            <div class="mt-2 flex items-center gap-1.5 text-on-surface-variant font-body-sm text-body-sm">
                                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                <span>5 sẵn sàng</span>
                                <span class="mx-1">•</span>
                                <span class="w-2 h-2 rounded-full bg-outline"></span>
                                <span>1 bảo dưỡng</span>
                            </div>
                        </div>
                    </div>
                    <!-- Metric 2 -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant font-medium">Đang được khách thuê</span>
                            <div class="w-9 h-9 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
                                <span class="material-symbols-outlined text-[20px]">handshake</span>
                            </div>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-lg text-headline-lg font-bold text-secondary">2</span>
                                <span class="font-label-md text-label-md text-on-surface-variant">thiết bị active</span>
                            </div>
                            <div class="mt-2 flex items-center gap-1 text-secondary font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[16px]">trending_up</span>
                                <span>Doanh thu đang chạy: <strong>1.650.000 đ</strong></span>
                            </div>
                        </div>
                    </div>
                    <!-- Metric 3 -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant font-medium">Tổng thu nhập tháng này</span>
                            <div class="w-9 h-9 rounded-lg bg-primary-fixed flex items-center justify-center text-on-primary-fixed-variant">
                                <span class="material-symbols-outlined text-[20px]">account_balance_wallet</span>
                            </div>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-baseline gap-1">
                                <span class="font-headline-lg text-headline-lg font-bold text-on-surface">4.250.000</span>
                                <span class="font-label-md text-label-md text-on-surface-variant">đ</span>
                            </div>
                            <div class="mt-2 flex items-center gap-1 text-on-surface-variant font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                                <span>Đã quyết toán ví Escrow</span>
                            </div>
                        </div>
                    </div>
                    <!-- Metric 4 -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant font-medium">Đánh giá trung bình</span>
                            <div class="w-9 h-9 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface">
                                <span class="material-symbols-outlined text-[20px]">stars</span>
                            </div>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-lg text-headline-lg font-bold text-on-surface">4.98</span>
                                <span class="font-label-md text-label-md text-tertiary-container font-semibold">★ (158 lượt)</span>
                            </div>
                            <div class="mt-2 flex items-center gap-1 text-secondary font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[16px]">bolt</span>
                                <span>100% phản hồi trong 10 phút</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Filter & Search Toolbar -->
                <section class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
                    <div class="flex flex-col lg:flex-row gap-space-md items-stretch lg:items-center justify-between">
                        <!-- Search input -->
                        <div class="relative flex-1 min-w-[280px]">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                            <input class="w-full pl-10 pr-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-on-surface-variant focus:bg-surface-container-lowest focus:outline-none transition-all" id="asset-search" placeholder="Tìm kiếm theo tên thiết bị, mã tài sản..." type="text" />
                        </div>
                        <!-- Select controls -->
                        <div class="flex flex-wrap sm:flex-nowrap items-center gap-space-sm">
                            <div class="relative min-w-[170px] w-full sm:w-auto">
                                <select class="w-full px-3 py-2.5 rounded-lg bg-surface-container-low font-label-md text-label-md text-on-surface appearance-none focus:outline-none cursor-pointer pr-8" id="category-filter">
                                    <option value="all">Tất cả danh mục</option>
                                    <option value="camera">Máy ảnh &amp; Lens</option>
                                    <option value="vehicle">Xe máy &amp; Tay ga</option>
                                    <option value="camping">Cắm trại &amp; Dã ngoại</option>
                                    <option value="drone">Flycam &amp; Drone</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-[18px]">expand_more</span>
                            </div>
                            <div class="relative min-w-[190px] w-full sm:w-auto">
                                <select class="w-full px-3 py-2.5 rounded-lg bg-surface-container-low font-label-md text-label-md text-on-surface appearance-none focus:outline-none cursor-pointer pr-8" id="sort-filter">
                                    <option value="newest">Sắp xếp: Mới nhất</option>
                                    <option value="income">Thu nhập cao nhất</option>
                                    <option value="rating">Đánh giá cao nhất</option>
                                    <option value="orders">Lượt thuê nhiều nhất</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-[18px]">sort</span>
                            </div>
                        </div>
                    </div>
                    <!-- Status Filter Tabs -->
                    <div class="flex items-center gap-2 overflow-x-auto pb-1 scrollbar-none" id="status-tabs-container">
                        <button class="px-space-md py-2 rounded-lg font-label-md text-label-md bg-on-surface text-surface font-bold shrink-0 shadow-sm transition-all" data-status="all" type="button">
                            Tất cả (6)
                        </button>
                        <button class="px-space-md py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container shrink-0 transition-all" data-status="renting" type="button">
                            Đang cho thuê (2)
                        </button>
                        <button class="px-space-md py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container shrink-0 transition-all" data-status="ready" type="button">
                            Sẵn sàng giao ngay (3)
                        </button>
                        <button class="px-space-md py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container shrink-0 transition-all" data-status="paused" type="button">
                            Tạm ẩn / Đang khóa lịch (1)
                        </button>
                        <button class="px-space-md py-2 rounded-lg font-label-md text-label-md bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container shrink-0 transition-all" data-status="draft" type="button">
                            Bản nháp (0)
                        </button>
                    </div>
                </section>
                <!-- Assets Inventory Grid / List Cards -->
                <section class="flex flex-col gap-space-md" id="assets-list-wrapper">
                    <!-- CARD 1: Sony Alpha A7 Mark IV (Đang cho thuê) -->
                    <article class="asset-card p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row gap-space-md relative overflow-hidden" data-category="camera" data-status="renting">
                        <!-- Active Ribbon Indicator -->
                        <div class="absolute top-0 left-0 bottom-0 w-1.5 bg-secondary"></div>
                        <!-- Product Media & Code Tag -->
                        <div class="relative w-full lg:w-72 h-52 lg:h-auto rounded-lg overflow-hidden shrink-0 bg-surface-container">
                            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Professional mirrorless camera Sony Alpha A7 IV with 24-70mm GM lens on a clean studio table, sharp optical reflections, professional photography gear, pristine condition, soft natural lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjSu0HFbQ5mdSVktthL9PFSPZhpRdVyBGpP-C80QqzeDekY8BwvzDoJWb-HiOUDBM69VbUGrCnboGlpAtoKIyV-LYMQuSlXdWx1L1IedAE3JtlcKY6wIMafwc1hesEnKxxgUSpYDKZpfbhvh7n-FuQ2NxJrHg66fFtNU0idSMMu3e6ddqUpuO3EShOIs-95F0L77iU-g7EdJiJhLwSByvxxuJT4zgwi032j-FKthftx3P8El-flWI" />
                            <div class="absolute top-2 left-2 bg-on-surface/80 backdrop-blur-md px-2 py-1 rounded font-label-sm text-label-sm text-surface font-mono">
                                #ASSET-8492
                            </div>
                            <div class="absolute top-2 right-2 bg-secondary-fixed text-on-secondary-fixed-variant px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold flex items-center gap-1 shadow-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                                Đang cho thuê
                            </div>
                        </div>
                        <!-- Information Center & Metadata -->
                        <div class="flex-1 flex flex-col justify-between gap-space-sm">
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Máy ảnh &amp; Lens</span>
                                    <div class="flex items-center gap-1 text-on-surface font-label-md text-label-md">
                                        <span class="text-tertiary-container">★</span>
                                        <span class="font-bold">4.95</span>
                                        <span class="text-on-surface-variant font-normal">(64 đánh giá)</span>
                                    </div>
                                </div>
                                <h2 class="font-headline-md text-headline-md text-on-surface font-bold mt-1 tracking-tight">
                                    Sony Alpha A7 Mark IV (Kèm Lens FE 24-70mm GM)
                                </h2>
                                <!-- Price & Deposit Specs -->
                                <div class="mt-2 flex flex-wrap items-center gap-x-space-md gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-on-surface font-bold text-headline-sm font-headline-sm">450.000 đ</span>
                                        <span>/ngày</span>
                                    </div>
                                    <span>•</span>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">security</span>
                                        <span>Cọc: <strong>3.000.000 đ</strong> (hoặc giữ CCCD gốc)</span>
                                    </div>
                                </div>
                                <!-- Rental Active Status Box -->
                                <div class="mt-3 p-3 rounded-lg bg-surface-container-low flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                                    <div class="flex items-center gap-2">
                                        <div class="w-7 h-7 rounded-full bg-surface-container-highest text-on-surface flex items-center justify-center font-bold text-label-sm">HL</div>
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Khách: Hoàng Linh (Hà Nội)</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Hạn trả: 27/10/2025 lúc 18:00</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-secondary-fixed/50 text-secondary font-semibold">
                                            Đã thanh toán Escrow
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Historical Stats & Quick Actions -->
                            <div class="pt-space-xs flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-md text-on-surface-variant font-label-sm text-label-sm">
                                    <span>Lượt thuê: <strong class="text-on-surface">64 lần</strong></span>
                                    <span>•</span>
                                    <span>Tổng doanh thu: <strong class="text-secondary font-semibold">28.800.000 đ</strong></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="px-space-md py-2 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md font-semibold hover:opacity-90 transition-opacity flex items-center gap-1 shadow-sm" type="button">
                                        <span class="material-symbols-outlined text-[16px]">receipt_long</span>
                                        Xem đơn đang chạy
                                    </button>
                                    <button class="px-3 py-2 rounded-lg bg-surface-container font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors" type="button">
                                        Chỉnh sửa tin
                                    </button>
                                    <button class="p-2 rounded-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface transition-colors" title="Thêm thao tác" type="button">
                                        <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- CARD 2: Vespa Sprint S 150 ABS (Sẵn sàng) -->
                    <article class="asset-card p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row gap-space-md relative overflow-hidden" data-category="vehicle" data-status="ready">
                        <!-- Active Ribbon Indicator -->
                        <div class="absolute top-0 left-0 bottom-0 w-1.5 bg-secondary-container"></div>
                        <!-- Product Media & Code Tag -->
                        <div class="relative w-full lg:w-72 h-52 lg:h-auto rounded-lg overflow-hidden shrink-0 bg-surface-container">
                            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Modern Vespa Sprint S 150 scooter in concrete grey finish parked in a stylish city alleyway, sharp daylight, chrome details, immaculate clean vehicle condition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvyoIQ4Ecp-9LwRFkrbiZR9OvgI512EnM6VIHfRkIxII2b9HYr8oR8EtYzT-l6hOEa606vC4pP4bt92Bb1qub_cWr9lVhA5X_LfJ7zf_7tk-MeYBX1XQVR0KTyLISTk0oQ2UFBo0MQPCof-IcXhinxa7r4q3Gb467gmJ76BE7TeFuVC8xQUAjmrVfY_G0fiQOR7ZQ5T1zZJLL6937G3TR1cY517YZoH-XsboMxU0gonrFd2Tr3Mkc" />
                            <div class="absolute top-2 left-2 bg-on-surface/80 backdrop-blur-md px-2 py-1 rounded font-label-sm text-label-sm text-surface font-mono">
                                #ASSET-7721
                            </div>
                            <div class="absolute top-2 right-2 bg-surface-container-high text-on-surface px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Sẵn sàng giao ngay
                            </div>
                        </div>
                        <!-- Information Center & Metadata -->
                        <div class="flex-1 flex flex-col justify-between gap-space-sm">
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Xe máy &amp; Tay ga</span>
                                    <div class="flex items-center gap-1 text-on-surface font-label-md text-label-md">
                                        <span class="text-tertiary-container">★</span>
                                        <span class="font-bold">4.90</span>
                                        <span class="text-on-surface-variant font-normal">(42 đánh giá)</span>
                                    </div>
                                </div>
                                <h2 class="font-headline-md text-headline-md text-on-surface font-bold mt-1 tracking-tight">
                                    Vespa Sprint S 150 ABS (Xám Xi Măng Thể Thao)
                                </h2>
                                <!-- Price & Deposit Specs -->
                                <div class="mt-2 flex flex-wrap items-center gap-x-space-md gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-on-surface font-bold text-headline-sm font-headline-sm">280.000 đ</span>
                                        <span>/ngày</span>
                                    </div>
                                    <span>•</span>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                                        <span>Tiền cọc: Chỉ cần giữ CCCD gốc kèm Cavet</span>
                                    </div>
                                </div>
                                <!-- Readiness Highlight Box -->
                                <div class="mt-3 p-3 rounded-lg bg-surface-container-low flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">check_circle</span>
                                    <span class="font-body-sm text-body-sm text-on-surface">
                                        Đã kiểm tra CAVET chính chủ &amp; bảo dưỡng định kỳ 2 tuần trước. Xăng đầy bình, sẵn sàng bàn giao.
                                    </span>
                                </div>
                            </div>
                            <!-- Historical Stats & Quick Actions -->
                            <div class="pt-space-xs flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-md text-on-surface-variant font-label-sm text-label-sm">
                                    <span>Lượt thuê: <strong class="text-on-surface">42 lần</strong></span>
                                    <span>•</span>
                                    <span>Tổng doanh thu: <strong class="text-secondary font-semibold">11.760.000 đ</strong></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="px-space-md py-2 rounded-lg bg-surface-container-highest text-on-surface font-label-md text-label-md font-semibold hover:bg-surface-container transition-colors" type="button">
                                        Xem trang chi tiết
                                    </button>
                                    <button class="px-3 py-2 rounded-lg bg-surface-container font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors" type="button">
                                        Chỉnh sửa tin
                                    </button>
                                    <button class="px-3 py-2 rounded-lg bg-surface-container-low font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" type="button">
                                        Tạm ẩn tin
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- CARD 3: Bộ Lều Glamping Naturehike (Sẵn sàng) -->
                    <article class="asset-card p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row gap-space-md relative overflow-hidden" data-category="camping" data-status="ready">
                        <!-- Active Ribbon Indicator -->
                        <div class="absolute top-0 left-0 bottom-0 w-1.5 bg-secondary-container"></div>
                        <!-- Product Media & Code Tag -->
                        <div class="relative w-full lg:w-72 h-52 lg:h-auto rounded-lg overflow-hidden shrink-0 bg-surface-container">
                            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="Spacious cotton canvas glamping bell tent set up on green lush grass with wooden folding table and chairs, warm camping ambiance, outdoor equipment in pristine condition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUdSustZDX_IwYHsqfnvYis4IKfxHIG3AXnqgLjLKXnSc45mqBQ7AkTVMdLGQksGGWncF-JtPWrLTmmROD2QcAvMeNxiujbC3H4T3NMWlPYzoIt7E_5JD-i2k5asgx2yZoUfpkJ29a3DPjyCGXGxSxU30E1n2Zdmn0ayZ1Tpucp2J_7Ne4W78gXIzLKXh2DvFW-cEBI5kyZwX5tkHGCHnKG8uR4uiCTRRoUI9iPiKCtol77-evW98" />
                            <div class="absolute top-2 left-2 bg-on-surface/80 backdrop-blur-md px-2 py-1 rounded font-label-sm text-label-sm text-surface font-mono">
                                #ASSET-5510
                            </div>
                            <div class="absolute top-2 right-2 bg-surface-container-high text-on-surface px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                Sẵn sàng giao ngay
                            </div>
                        </div>
                        <!-- Information Center & Metadata -->
                        <div class="flex-1 flex flex-col justify-between gap-space-sm">
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Cắm trại &amp; Dã ngoại</span>
                                    <div class="flex items-center gap-1 text-on-surface font-label-md text-label-md">
                                        <span class="text-tertiary-container">★</span>
                                        <span class="font-bold">5.0</span>
                                        <span class="text-on-surface-variant font-normal">(14 đánh giá)</span>
                                    </div>
                                </div>
                                <h2 class="font-headline-md text-headline-md text-on-surface font-bold mt-1 tracking-tight">
                                    Bộ Lều Glamping Naturehike 4 người + Bàn Ghế Gỗ
                                </h2>
                                <!-- Price & Deposit Specs -->
                                <div class="mt-2 flex flex-wrap items-center gap-x-space-md gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-on-surface font-bold text-headline-sm font-headline-sm">320.000 đ</span>
                                        <span>/2 ngày 1 đêm</span>
                                    </div>
                                    <span>•</span>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">shield</span>
                                        <span>Cọc: 500.000 đ hoặc GPLX</span>
                                    </div>
                                </div>
                                <!-- Readiness Highlight Box -->
                                <div class="mt-3 p-3 rounded-lg bg-surface-container-low flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">clean_hands</span>
                                    <span class="font-body-sm text-body-sm text-on-surface">
                                        Đã vệ sinh giặt sấy sạch sẽ, gấp gọn trong 2 túi chuyên dụng dễ dàng chở bằng xe máy.
                                    </span>
                                </div>
                            </div>
                            <!-- Historical Stats & Quick Actions -->
                            <div class="pt-space-xs flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-md text-on-surface-variant font-label-sm text-label-sm">
                                    <span>Lượt thuê: <strong class="text-on-surface">14 lần</strong></span>
                                    <span>•</span>
                                    <span>Tỷ lệ hoàn trả đúng hẹn: <strong class="text-secondary font-semibold">100%</strong></span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="px-space-md py-2 rounded-lg bg-surface-container-highest text-on-surface font-label-md text-label-md font-semibold hover:bg-surface-container transition-colors" type="button">
                                        Xem trang chi tiết
                                    </button>
                                    <button class="px-3 py-2 rounded-lg bg-surface-container font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors" type="button">
                                        Chỉnh sửa tin
                                    </button>
                                    <button class="px-3 py-2 rounded-lg bg-surface-container-low font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" type="button">
                                        Tạm ẩn tin
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- CARD 4: Flycam DJI Mini 3 Pro (Khóa lịch) -->
                    <article class="asset-card p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row gap-space-md relative overflow-hidden" data-category="drone" data-status="paused">
                        <!-- Active Ribbon Indicator (Greyed) -->
                        <div class="absolute top-0 left-0 bottom-0 w-1.5 bg-outline"></div>
                        <!-- Product Media & Code Tag -->
                        <div class="relative w-full lg:w-72 h-52 lg:h-auto rounded-lg overflow-hidden shrink-0 bg-surface-container">
                            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" data-alt="DJI Mini 3 Pro drone folded compactly with DJI RC smart controller and three flight batteries laid neatly on a technical surface, modern cinematic photography vibe." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA0Lxnc-FtbCRTGKL0y1CJ3IRZq_DtQG980eicbt6Z9iCRjZPnM6lZbLxiNV3pzD46WSatW-bhZOy_7wNSjiFOui_HHRtY0twAnoi4euL4xi1SDD646XuxvTnuN5GNFwHTCIWEKC8VnNON05QbHJirgvjPQt1HTY0eiYMFT4AONAmD84aRaRYOZTPR-iuelds0PQwXBko5F0uSNJMBH0sR9eijdMVHKAPd1YFliNWABThiP_X9f-Co" />
                            <div class="absolute top-2 left-2 bg-on-surface/80 backdrop-blur-md px-2 py-1 rounded font-label-sm text-label-sm text-surface font-mono">
                                #ASSET-3319
                            </div>
                            <div class="absolute top-2 right-2 bg-surface-container-highest text-on-surface-variant px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-outline"></span>
                                Đang khóa lịch
                            </div>
                        </div>
                        <!-- Information Center & Metadata -->
                        <div class="flex-1 flex flex-col justify-between gap-space-sm">
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Flycam &amp; Drone</span>
                                    <div class="flex items-center gap-1 text-on-surface font-label-md text-label-md">
                                        <span class="text-tertiary-container">★</span>
                                        <span class="font-bold">4.90</span>
                                        <span class="text-on-surface-variant font-normal">(39 đánh giá)</span>
                                    </div>
                                </div>
                                <h2 class="font-headline-md text-headline-md text-on-surface font-bold mt-1 tracking-tight">
                                    Flycam DJI Mini 3 Pro Fly More Combo kèm màn hình RC
                                </h2>
                                <!-- Price & Deposit Specs -->
                                <div class="mt-2 flex flex-wrap items-center gap-x-space-md gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-on-surface font-bold text-headline-sm font-headline-sm">320.000 đ</span>
                                        <span>/ngày</span>
                                    </div>
                                    <span>•</span>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">security</span>
                                        <span>Cọc: 2.000.000 đ + CCCD</span>
                                    </div>
                                </div>
                                <!-- Lock Notice Box -->
                                <div class="mt-3 p-3 rounded-lg bg-surface-container-low flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-outline text-[20px]">lock_clock</span>
                                        <span class="font-body-sm text-body-sm text-on-surface">
                                            Tạm khóa lịch (Chủ đang tự dùng đến <strong>28/10/2025</strong>)
                                        </span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant hidden sm:inline-block">Lịch sẽ tự mở lại ngày 29/10</span>
                                </div>
                            </div>
                            <!-- Historical Stats & Quick Actions -->
                            <div class="pt-space-xs flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-md text-on-surface-variant font-label-sm text-label-sm">
                                    <span>Lượt thuê: <strong class="text-on-surface">39 lần</strong></span>
                                    <span>•</span>
                                    <span>Cần kiểm tra cánh bay định kỳ</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <button class="px-space-md py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-semibold hover:bg-primary-container hover:text-on-primary-container transition-all flex items-center gap-1" type="button">
                                        <span class="material-symbols-outlined text-[16px]">lock_open</span>
                                        Mở lại lịch cho thuê
                                    </button>
                                    <button class="px-3 py-2 rounded-lg bg-surface-container font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors" type="button">
                                        Chỉnh sửa tin
                                    </button>
                                </div>
                            </div>
                        </div>
                    </article>
                </section>
                <!-- Pagination & Summary Stats Footer -->
                <section class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-xs">
                    <span class="font-body-sm text-body-sm text-on-surface-variant">
                        Hiển thị <strong>4</strong> trong tổng số <strong>6</strong> tài sản
                    </span>
                    <div class="flex items-center gap-1">
                        <button class="w-9 h-9 rounded-lg bg-surface-container-low text-outline flex items-center justify-center cursor-not-allowed" disabled="" type="button">
                            <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                        </button>
                        <button class="w-9 h-9 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-bold flex items-center justify-center" type="button">
                            1
                        </button>
                        <button class="w-9 h-9 rounded-lg bg-surface-container-low text-outline flex items-center justify-center cursor-not-allowed" disabled="" type="button">
                            <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                        </button>
                    </div>
                </section>
                <!-- Insurance & Owner Protection Guide Banner -->
                <section class="mt-space-sm p-space-lg rounded-2xl bg-surface-container-low flex flex-col md:flex-row items-start md:items-center justify-between gap-space-lg shadow-sm">
                    <div class="flex items-start gap-space-md max-w-2xl">
                        <div class="w-12 h-12 rounded-xl bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant shrink-0">
                            <span class="material-symbols-outlined text-[28px]">verified_user</span>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
                                Quy trình đối soát biên bản 6 góc bảo vệ tài sản
                            </h3>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                                Chụp ảnh hiện trạng 6 góc và quay video ngắn 30s khi giao/nhận giúp chủ tài sản bảo toàn 100% giá trị thiết bị qua Quỹ RentShare Shield nếu phát sinh trầy xước, rơi vỡ hoặc thất lạc.
                            </p>
                        </div>
                    </div>
                    <div class="shrink-0 flex items-center gap-space-sm w-full md:w-auto">
                        <a class="w-full md:w-auto inline-flex items-center justify-center gap-1.5 px-space-md py-2.5 rounded-lg bg-surface-container-lowest text-on-surface font-label-lg text-label-lg font-semibold hover:bg-surface-container transition-colors shadow-sm" data-path="kham-pha" href="#">
                            <span>Xem quy chế bảo hiểm</span>
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                    </div>
                </section>
            </div>
        </div>
        <!-- Inline Micro-Interactions for Tabs and Filtering -->
        <script>
            (function() {
                const tabs = document.querySelectorAll('#status-tabs-container button');
                const cards = document.querySelectorAll('.asset-card');
                const searchInput = document.getElementById('asset-search');
                const categorySelect = document.getElementById('category-filter');

                function filterAssets() {
                    const activeTab = document.querySelector('#status-tabs-container button.bg-on-surface');
                    const statusVal = activeTab ? activeTab.getAttribute('data-status') : 'all';
                    const searchTerm = (searchInput?.value || '').toLowerCase().trim();
                    const categoryVal = categorySelect?.value || 'all';

                    cards.forEach(card => {
                        const cardStatus = card.getAttribute('data-status');
                        const cardCategory = card.getAttribute('data-category');
                        const cardText = card.textContent.toLowerCase();

                        const matchStatus = (statusVal === 'all') || (cardStatus === statusVal);
                        const matchCategory = (categoryVal === 'all') || (cardCategory === categoryVal);
                        const matchSearch = searchTerm === '' || cardText.includes(searchTerm);

                        if (matchStatus && matchCategory && matchSearch) {
                            card.classList.remove('hidden');
                            card.classList.add('flex');
                        } else {
                            card.classList.add('hidden');
                            card.classList.remove('flex');
                        }
                    });
                }

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        tabs.forEach(t => {
                            t.classList.remove('bg-on-surface', 'text-surface', 'font-bold');
                            t.classList.add('bg-surface-container-low', 'text-on-surface-variant');
                        });
                        tab.classList.add('bg-on-surface', 'text-surface', 'font-bold');
                        tab.classList.remove('bg-surface-container-low', 'text-on-surface-variant');
                        filterAssets();
                    });
                });

                if (searchInput) {
                    searchInput.addEventListener('input', filterAssets);
                }

                if (categorySelect) {
                    categorySelect.addEventListener('change', filterAssets);
                }
            })();
        </script>
    </div>
</main>
@endsection