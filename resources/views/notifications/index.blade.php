<!DOCTYPE html>

<html class="light" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <title>RentShare - Sàn Cho Thuê Tài Sản Cá Nhân P2P Hàng Đầu Việt Nam</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        @layer base {

            html,
            body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main>:first-child {
                margin-top: 0 !important;
            }

            main>:last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-error": "#ffffff",
                        "primary-fixed-dim": "#bec6e0",
                        "secondary-container": "#86f2e4",
                        "tertiary-container": "#2a1700",
                        "on-secondary": "#ffffff",
                        "primary-fixed": "#dae2fd",
                        "tertiary": "#000000",
                        "on-tertiary-fixed-variant": "#653e00",
                        "on-tertiary-fixed": "#2a1700",
                        "surface-tint": "#565e74",
                        "background": "#f8f9ff",
                        "error": "#ba1a1a",
                        "surface-container-highest": "#d3e4fe",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#0b1c30",
                        "outline": "#76777d",
                        "surface-bright": "#f8f9ff",
                        "inverse-on-surface": "#eaf1ff",
                        "error-container": "#ffdad6",
                        "surface-container-high": "#dce9ff",
                        "on-tertiary-container": "#b87500",
                        "outline-variant": "#c6c6cd",
                        "surface": "#f8f9ff",
                        "surface-container-low": "#eff4ff",
                        "on-surface-variant": "#45464d",
                        "on-secondary-fixed-variant": "#005049",
                        "primary-container": "#131b2e",
                        "secondary-fixed-dim": "#6bd8cb",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#ffddb8",
                        "on-primary-fixed-variant": "#3f465c",
                        "primary": "#000000",
                        "on-primary-container": "#7c839b",
                        "secondary-fixed": "#89f5e7",
                        "surface-variant": "#d3e4fe",
                        "on-primary-fixed": "#131b2e",
                        "secondary": "#006a61",
                        "on-secondary-container": "#006f66",
                        "inverse-primary": "#bec6e0",
                        "inverse-surface": "#213145",
                        "surface-dim": "#cbdbf5",
                        "on-error-container": "#93000a",
                        "on-background": "#0b1c30",
                        "surface-container": "#e5eeff",
                        "tertiary-fixed-dim": "#ffb95f",
                        "on-secondary-fixed": "#00201d"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "1.5rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        "gutter-mobile": "1rem",
                        "margin": "2rem",
                        "space-lg": "1.5rem",
                        "margin-mobile": "1rem",
                        "space-xs": "0.25rem",
                        "space-sm": "0.5rem"
                    },
                    "fontFamily": {
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-md": ["Inter"],
                        "label-lg": ["Inter"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        "headline-xl-mobile": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "label-sm": ["Inter"],
                        "body-sm": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "500"
                        }],
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "headline-xl": ["40px", {
                            "lineHeight": "48px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-xl-mobile": ["30px", {
                            "lineHeight": "38px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-sm": ["18px", {
                            "lineHeight": "26px",
                            "letterSpacing": "-0.005em",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["11px", {
                            "lineHeight": "14px",
                            "letterSpacing": "0.04em",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["13px", {
                            "lineHeight": "18px",
                            "letterSpacing": "0.005em",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-background font-body-md text-on-surface antialiased">
    <header class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-20 max-w-[1280px] mx-auto px-margin-mobile lg:px-margin flex items-center justify-between gap-gutter">
            <div class="flex items-center gap-gutter"><a class="flex items-center gap-space-sm group" data-path="kham-pha" href="#">
                    <div class="w-10 h-10 rounded-lg bg-primary-container flex items-center justify-center text-secondary-container font-headline-sm font-bold"><span class="material-symbols-outlined text-secondary-container">swap_horizontal_circle</span></div>
                    <div class="flex flex-col"><span class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">Rent<span class="text-secondary">Share</span></span><span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Việt Nam P2P</span></div>
                </a>
                <nav class="hidden xl:flex items-center gap-space-xs" data-active-classes="bg-surface-container-high text-on-surface font-bold"><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="kham-pha" href="#">Khám phá</a><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="danh-sach-tai-san" href="#">Danh sách tài sản</a><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="yeu-cau-thue" href="#">Yêu cầu thuê</a><a class="relative px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="don-thue-cua-toi" href="#">Đơn thuê của tôi</a><a class="relative px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors inline-flex items-center gap-1.5" data-path="tin-nhan" href="#"><span>Tin nhắn</span><span class="inline-flex items-center justify-center px-1.5 py-0.5 rounded-full font-label-sm text-label-sm bg-secondary text-on-secondary font-semibold leading-none">2</span></a></nav>
            </div>
            <div class="flex items-center gap-space-md">
                <div class="relative group"><button class="flex items-center gap-space-xs px-space-md py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container hover:text-on-primary-container transition-all shadow-[0_1px_3px_rgba(15,23,42,0.08)]" type="button"><span class="material-symbols-outlined text-[18px]">add_circle</span><span>+ Đăng tin</span><span class="material-symbols-outlined text-[16px]">expand_more</span></button>
                    <div class="absolute right-0 top-full pt-2 hidden group-hover:block z-50 w-64">
                        <div class="bg-surface-container-lowest rounded-xl p-space-xs shadow-[0_10px_25px_-5px_rgba(15,23,42,0.12)] border border-outline-variant/30 flex flex-col gap-1"><a class="flex items-center gap-space-sm p-space-sm rounded-lg hover:bg-surface-container-low transition-colors" data-path="dang-tai-san" href="#">
                                <div class="w-8 h-8 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant"><span class="material-symbols-outlined text-[18px]">home_repair_service</span></div>
                                <div class="flex flex-col text-left"><span class="font-label-lg text-label-lg text-on-surface">Đăng cho thuê tài sản</span><span class="font-body-sm text-body-sm text-on-surface-variant">Tạo nguồn thu thụ động</span></div>
                            </a><a class="flex items-center gap-space-sm p-space-sm rounded-lg hover:bg-surface-container-low transition-colors" data-path="dang-yeu-cau-thue" href="#">
                                <div class="w-8 h-8 rounded-lg bg-primary-fixed flex items-center justify-center text-on-primary-fixed-variant"><span class="material-symbols-outlined text-[18px]">find_in_page</span></div>
                                <div class="flex flex-col text-left"><span class="font-label-lg text-label-lg text-on-surface">Đăng tìm thuê</span><span class="font-body-sm text-body-sm text-on-surface-variant">Yêu cầu vật dụng cần thuê</span></div>
                            </a></div>
                    </div>
                </div>
                <nav data-active-classes="bg-surface-container-high text-on-surface font-bold ring-2 ring-secondary/30"><a aria-label="Thông báo" class="relative flex items-center justify-center p-2 rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" data-path="thong-bao" href="#"><span class="material-symbols-outlined text-[22px]">notifications</span><span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-error"></span></a></nav>
                <div class="h-7 w-[1px] bg-outline-variant/40 hidden sm:block"></div>
                <div class="flex items-center gap-space-sm pl-space-xs">
                    <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div>
                    <div class="hidden md:flex flex-col text-left leading-none"><span class="font-label-lg text-label-lg text-on-surface font-semibold">Nguyễn Minh Tuấn</span>
                        <div class="flex items-center gap-1 mt-0.5"><span class="material-symbols-outlined text-secondary text-[13px]">verified</span><span class="font-label-sm text-label-sm text-secondary font-medium">Uy tín 98/100</span></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="w-full pt-20 bg-background min-h-screen">
        <div class="flex flex-col w-full">
            <!-- Top Background Ambient Glow Layer -->
            <div class="relative w-full overflow-hidden">
                <div class="absolute -top-32 left-1/4 w-[520px] h-[340px] bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute top-12 right-12 w-[380px] h-[260px] bg-surface-container-high/60 rounded-full blur-2xl pointer-events-none"></div>
                <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-lg w-full relative">
                    <!-- Breadcrumb -->
                    <nav aria-label="Đường dẫn trang" class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md mb-space-sm">
                        <a class="hover:text-secondary transition-colors inline-flex items-center gap-1" data-path="kham-pha" href="#">
                            <span class="material-symbols-outlined text-[16px]">home</span>
                            <span>Trang chủ</span>
                        </a>
                        <span class="material-symbols-outlined text-[14px] text-outline-variant">chevron_right</span>
                        <span class="text-on-surface font-semibold">Thông báo hệ thống</span>
                    </nav>
                    <!-- Page Header: Title, Description, Header Actions -->
                    <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-space-md pb-space-lg">
                        <div class="flex flex-col max-w-2xl">
                            <div class="flex flex-wrap items-center gap-space-sm mb-space-xs">
                                <h1 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">Thông báo</h1>
                                <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold shadow-sm">
                                    <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                                    3 thông báo mới chưa đọc
                                </span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                Cập nhật kịp thời về các sự kiện đơn thuê, biến động tiền cọc Escrow, tin nhắn và tình trạng xác thực tài khoản.
                            </p>
                        </div>
                        <!-- Action Controls -->
                        <div class="flex items-center gap-space-sm self-start lg:self-auto shrink-0">
                            <button class="group flex items-center gap-2 px-space-md py-2.5 rounded-lg bg-surface-container-lowest text-on-surface font-label-lg text-label-lg shadow-sm hover:bg-surface-container transition-all" id="markAllReadBtn" type="button">
                                <span class="material-symbols-outlined text-[18px] text-secondary group-hover:scale-110 transition-transform">done_all</span>
                                <span>Đánh dấu tất cả đã đọc</span>
                            </button>
                            <a aria-label="Cài đặt thông báo" class="flex items-center gap-1.5 px-space-md py-2.5 rounded-lg bg-surface-container-lowest text-on-surface-variant font-label-lg text-label-lg shadow-sm hover:text-on-surface hover:bg-surface-container transition-all" data-path="cai-dat" href="#">
                                <span class="material-symbols-outlined text-[18px]">settings</span>
                                <span class="hidden sm:inline">Cài đặt</span>
                            </a>
                        </div>
                    </div>
                    <!-- Notification Filter Tabs (Segmented Chips) -->
                    <div class="w-full overflow-x-auto pb-2 scrollbar-none mb-space-lg">
                        <div class="flex items-center gap-2 min-w-max p-1 bg-surface-container-low rounded-xl">
                            <button class="filter-tab active px-4 py-2 rounded-lg font-label-lg text-label-lg bg-surface-container-lowest text-on-surface shadow-sm font-semibold transition-all flex items-center gap-2" data-filter="all" type="button">
                                <span>Tất cả</span>
                                <span class="px-1.5 py-0.2 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface font-bold">12</span>
                            </button>
                            <button class="filter-tab px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest/60 transition-all flex items-center gap-2" data-filter="unread" type="button">
                                <span>Chưa đọc</span>
                                <span class="px-1.5 py-0.2 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold">3</span>
                            </button>
                            <button class="filter-tab px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest/60 transition-all flex items-center gap-2" data-filter="escrow" type="button">
                                <span>Đơn thuê &amp; Ký quỹ</span>
                                <span class="px-1.5 py-0.2 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">5</span>
                            </button>
                            <button class="filter-tab px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest/60 transition-all flex items-center gap-2" data-filter="messages" type="button">
                                <span>Tin nhắn mới</span>
                                <span class="px-1.5 py-0.2 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">2</span>
                            </button>
                            <button class="filter-tab px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest/60 transition-all flex items-center gap-2" data-filter="handover" type="button">
                                <span>Bàn giao &amp; Nghiệm thu</span>
                                <span class="px-1.5 py-0.2 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">3</span>
                            </button>
                            <button class="filter-tab px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-lowest/60 transition-all flex items-center gap-2" data-filter="security" type="button">
                                <span>Hệ thống &amp; Bảo mật</span>
                                <span class="px-1.5 py-0.2 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">2</span>
                            </button>
                        </div>
                    </div>
                    <!-- MAIN CONTENT 2-COLUMN LAYOUT -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                        <!-- FEED COLUMN (Left 8 Cols) -->
                        <section class="lg:col-span-8 flex flex-col gap-space-lg w-full">
                            <!-- GROUP 1: HÔM NAY -->
                            <div class="flex flex-col gap-space-sm">
                                <div class="flex items-center justify-between px-space-xs py-1">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-4 rounded-full bg-secondary"></span>
                                        <h2 class="font-label-lg text-label-lg uppercase tracking-wider text-on-surface-variant font-bold">Hôm nay</h2>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">27 Tháng 10, 2025</span>
                                </div>
                                <!-- Item 1: Priority Alert (Handover) -->
                                <article class="notification-card unread group relative rounded-xl bg-surface-container-lowest p-space-md lg:p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row gap-space-md items-start">
                                    <!-- Visual Icon Column -->
                                    <div class="relative shrink-0">
                                        <div class="w-12 h-12 rounded-xl bg-secondary-fixed flex items-center justify-center text-secondary shadow-sm">
                                            <span class="material-symbols-outlined text-[24px]">location_on</span>
                                        </div>
                                        <span class="unread-indicator absolute -top-1 -right-1 w-3.5 h-3.5 rounded-full bg-secondary ring-4 ring-surface-container-lowest"></span>
                                    </div>
                                    <!-- Main Content Body -->
                                    <div class="flex flex-col flex-1 min-w-0">
                                        <div class="flex flex-wrap items-center justify-between gap-2 mb-1.5">
                                            <div class="flex items-center gap-2">
                                                <span class="px-2 py-0.5 rounded-full bg-secondary-container/40 text-on-secondary-container font-label-sm text-label-sm font-semibold">
                                                    Bàn giao &amp; Nghiệm thu
                                                </span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Đơn thuê #ORD-88219</span>
                                            </div>
                                            <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                                                <span class="material-symbols-outlined text-[14px]">schedule</span>
                                                <span>17:30 • 15 phút trước</span>
                                            </div>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-secondary transition-colors mb-space-xs">
                                            Khách thuê Hoàng Linh đã có mặt tại điểm hẹn nghiệm thu trả đồ
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md leading-relaxed">
                                            Hoàng Linh đã gửi xác nhận đến <span class="font-semibold text-on-surface">The Coffee House 180 Triệu Việt Vương</span> (sớm 30 phút). Vui lòng cùng khách kiểm tra thiết bị và xác nhận giải tỏa cọc Escrow.
                                        </p>
                                        <!-- Action Button Group -->
                                        <div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
                                            <button class="inline-flex items-center gap-2 px-space-md py-2.5 rounded-lg bg-secondary text-on-secondary font-label-lg text-label-lg font-semibold hover:bg-secondary/90 shadow-sm transition-all" type="button">
                                                <span class="material-symbols-outlined text-[18px]">verified</span>
                                                <span>Tiến hành nghiệm thu trả đồ</span>
                                            </button>
                                            <a class="inline-flex items-center gap-2 px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-all" data-path="tin-nhan" href="#">
                                                <span class="material-symbols-outlined text-[18px] text-secondary">forum</span>
                                                <span>Xem tin nhắn</span>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                <!-- Item 2: Escrow Wallet Balance Added -->
                                <article class="notification-card unread group relative rounded-xl bg-surface-container-lowest p-space-md lg:p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row gap-space-md items-start">
                                    <div class="relative shrink-0">
                                        <div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-on-surface shadow-sm">
                                            <span class="material-symbols-outlined text-[24px]">account_balance_wallet</span>
                                        </div>
                                        <span class="unread-indicator absolute -top-1 -right-1 w-3.5 h-3.5 rounded-full bg-secondary ring-4 ring-surface-container-lowest"></span>
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-0">
                                        <div class="flex flex-wrap items-center justify-between gap-2 mb-1.5">
                                            <div class="flex items-center gap-2">
                                                <span class="px-2 py-0.5 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm font-semibold">
                                                    Thanh toán &amp; Ký quỹ Escrow
                                                </span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">Mã #TX-99412</span>
                                            </div>
                                            <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                                                <span class="material-symbols-outlined text-[14px]">schedule</span>
                                                <span>14:20 • 3 giờ trước</span>
                                            </div>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-secondary transition-colors mb-space-xs">
                                            Tiền thuê <span class="text-secondary font-bold">+1.200.000 đ</span> đã được cộng vào Số dư khả dụng của bạn
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md leading-relaxed">
                                            Giao dịch thuê máy quay <span class="font-medium text-on-surface">Sony Alpha A7IV</span> của đơn <span class="font-semibold text-on-surface">#ORD-2025-88</span> đã hoàn tất thời gian chờ 2 giờ. Bạn có thể rút tiền về tài khoản Vietcombank ngay.
                                        </p>
                                        <div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
                                            <button class="inline-flex items-center gap-2 px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-all" type="button">
                                                <span class="material-symbols-outlined text-[18px]">payments</span>
                                                <span>Xem biến động số dư ví</span>
                                            </button>
                                        </div>
                                    </div>
                                </article>
                                <!-- Item 3: Demand Offer -->
                                <article class="notification-card unread group relative rounded-xl bg-surface-container-lowest p-space-md lg:p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col sm:flex-row gap-space-md items-start">
                                    <div class="relative shrink-0">
                                        <div class="w-12 h-12 rounded-xl bg-primary-fixed flex items-center justify-center text-primary-container shadow-sm">
                                            <span class="material-symbols-outlined text-[24px]">local_offer</span>
                                        </div>
                                        <span class="unread-indicator absolute -top-1 -right-1 w-3.5 h-3.5 rounded-full bg-secondary ring-4 ring-surface-container-lowest"></span>
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-0">
                                        <div class="flex flex-wrap items-center justify-between gap-2 mb-1.5">
                                            <div class="flex items-center gap-2">
                                                <span class="px-2 py-0.5 rounded-full bg-primary-fixed/80 text-on-primary-fixed font-label-sm text-label-sm font-semibold">
                                                    Yêu cầu thuê của bạn
                                                </span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">#REQ-8821</span>
                                            </div>
                                            <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                                                <span class="material-symbols-outlined text-[14px]">schedule</span>
                                                <span>14:15 • 3 giờ trước</span>
                                            </div>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-secondary transition-colors mb-space-xs">
                                            Chủ tài sản Trần Anh Tuấn vừa gửi báo giá mới cho bạn
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md leading-relaxed">
                                            Đề xuất cho thuê: <span class="font-semibold text-on-surface">Bộ lều Glamping Naturehike 4 người + Bàn ghế</span> với giá ưu đãi <span class="text-secondary font-bold">180.000 đ/ngày</span> (Rẻ hơn 20.000 đ so với ngân sách dự kiến của bạn).
                                        </p>
                                        <div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
                                            <a class="inline-flex items-center gap-2 px-space-md py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg font-semibold hover:bg-primary-container hover:text-on-primary-container shadow-sm transition-all" data-path="yeu-cau-thue" href="#">
                                                <span class="material-symbols-outlined text-[18px]">balance</span>
                                                <span>So sánh &amp; Chấp nhận báo giá</span>
                                            </a>
                                            <button class="inline-flex items-center gap-1.5 px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-all" type="button">
                                                <span>Xem hồ sơ chủ lều</span>
                                            </button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- GROUP 2: HÔM QUA -->
                            <div class="flex flex-col gap-space-sm mt-space-md">
                                <div class="flex items-center justify-between px-space-xs py-1">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-4 rounded-full bg-outline-variant"></span>
                                        <h2 class="font-label-lg text-label-lg uppercase tracking-wider text-on-surface-variant font-bold">Hôm qua</h2>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">26 Tháng 10, 2025</span>
                                </div>
                                <!-- Item 4: Read Handover Reminder -->
                                <article class="notification-card group relative rounded-xl bg-surface-container-lowest/80 p-space-md lg:p-space-lg shadow-sm hover:shadow transition-all flex flex-col sm:flex-row gap-space-md items-start">
                                    <div class="shrink-0">
                                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-on-surface-variant">
                                            <span class="material-symbols-outlined text-[24px]">photo_camera</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-0">
                                        <div class="flex flex-wrap items-center justify-between gap-2 mb-1.5">
                                            <div class="flex items-center gap-2">
                                                <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-medium">
                                                    Bàn giao tài sản
                                                </span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">#ORD-88219</span>
                                            </div>
                                            <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                                                <span>09:00 • 26/10/2025</span>
                                            </div>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
                                            Nhắc nhở: Lịch hẹn trả máy ảnh Sony Alpha A7 IV vào chiều mai
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                            Hạn chót hoàn trả: 18:00 ngày 27/10/2025 tại The Coffee House Triệu Việt Vương. Hãy đối chiếu biên bản ảnh 6 góc trước khi ký nhận.
                                        </p>
                                    </div>
                                </article>
                                <!-- Item 5: Read Dispute Resolution -->
                                <article class="notification-card group relative rounded-xl bg-surface-container-lowest/80 p-space-md lg:p-space-lg shadow-sm hover:shadow transition-all flex flex-col sm:flex-row gap-space-md items-start">
                                    <div class="shrink-0">
                                        <div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center text-on-surface">
                                            <span class="material-symbols-outlined text-[24px]">gavel</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-0">
                                        <div class="flex flex-wrap items-center justify-between gap-2 mb-1.5">
                                            <div class="flex items-center gap-2">
                                                <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-medium">
                                                    Hồ sơ tranh chấp
                                                </span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">#DSP-40912</span>
                                            </div>
                                            <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                                                <span>19:30 • 25/10/2025</span>
                                            </div>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
                                            Phương án hòa giải sơ bộ cho hồ sơ tranh chấp thấu kính đã được ban hành
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant mb-space-md leading-relaxed">
                                            Giám định viên RentShare đề xuất mức bồi thường 1.200.000 đ từ quỹ cọc Escrow. Hai bên có 24 giờ để đồng thuận hoặc phản hồi bổ sung.
                                        </p>
                                        <div class="flex flex-wrap items-center gap-space-sm pt-space-xs">
                                            <button class="inline-flex items-center gap-2 px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-all" type="button">
                                                <span class="material-symbols-outlined text-[18px]">find_in_page</span>
                                                <span>Xem chi tiết hồ sơ tranh chấp</span>
                                            </button>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- GROUP 3: TRƯỚC ĐÓ -->
                            <div class="flex flex-col gap-space-sm mt-space-md">
                                <div class="flex items-center justify-between px-space-xs py-1">
                                    <div class="flex items-center gap-2">
                                        <span class="w-1.5 h-4 rounded-full bg-outline-variant"></span>
                                        <h2 class="font-label-lg text-label-lg uppercase tracking-wider text-on-surface-variant font-bold">Trước đó</h2>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Tháng 10, 2025</span>
                                </div>
                                <!-- Item 6: Security & eKYC -->
                                <article class="notification-card group relative rounded-xl bg-surface-container-lowest/80 p-space-md lg:p-space-lg shadow-sm hover:shadow transition-all flex flex-col sm:flex-row gap-space-md items-start">
                                    <div class="shrink-0">
                                        <div class="w-12 h-12 rounded-xl bg-secondary-fixed/40 flex items-center justify-center text-secondary">
                                            <span class="material-symbols-outlined text-[24px]">verified_user</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col flex-1 min-w-0">
                                        <div class="flex flex-wrap items-center justify-between gap-2 mb-1.5">
                                            <div class="flex items-center gap-2">
                                                <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-medium">
                                                    Tài khoản &amp; eKYC
                                                </span>
                                                <span class="font-label-sm text-label-sm text-secondary font-semibold flex items-center gap-1">
                                                    <span class="material-symbols-outlined text-[14px]">shield</span> Đã cấp chứng thư
                                                </span>
                                            </div>
                                            <div class="flex items-center gap-1 text-on-surface-variant font-label-sm text-label-sm">
                                                <span>20/10/2025</span>
                                            </div>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold mb-space-xs">
                                            Xác thực danh tính CCCD gắn chip (VNeID Cấp 2) thành công
                                        </h3>
                                        <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                            Tài khoản của bạn đã nâng lên Cấp 2 với hạn mức bảo chứng bảo hiểm thiết bị lên đến <span class="font-semibold text-on-surface">50.000.000 đ</span>.
                                        </p>
                                    </div>
                                </article>
                            </div>
                            <!-- Bottom Pagination / State -->
                            <div class="pt-space-md pb-space-lg flex items-center justify-center">
                                <button class="inline-flex items-center gap-2 px-space-lg py-2.5 rounded-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all font-label-lg text-label-lg" type="button">
                                    <span class="material-symbols-outlined text-[18px]">history</span>
                                    <span>Tải thêm thông báo cũ hơn</span>
                                </button>
                            </div>
                        </section>
                        <!-- SIDEBAR / CONTEXT WIDGETS (Right 4 Cols) -->
                        <aside class="lg:col-span-4 flex flex-col gap-space-lg w-full sticky top-24">
                            <!-- Card 1: Action Required -->
                            <div class="rounded-xl bg-surface-container-lowest p-space-md lg:p-space-lg shadow-sm flex flex-col gap-space-md relative overflow-hidden">
                                <div class="absolute top-0 right-0 w-24 h-24 bg-secondary/5 rounded-bl-full pointer-events-none"></div>
                                <div class="flex items-center justify-between pb-space-xs">
                                    <div class="flex items-center gap-2">
                                        <span class="w-2.5 h-2.5 rounded-full bg-error animate-ping"></span>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Cần chú ý ngay</h3>
                                    </div>
                                    <span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold">2 việc</span>
                                </div>
                                <div class="flex flex-col gap-space-sm">
                                    <!-- Action item 1 -->
                                    <div class="p-3 rounded-lg bg-surface-container-low/80 hover:bg-surface-container transition-all flex flex-col gap-1.5">
                                        <div class="flex items-center justify-between gap-2">
                                            <span class="font-label-sm text-label-sm text-secondary font-bold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[14px]">near_me</span> Điểm hẹn trả đồ
                                            </span>
                                            <span class="font-label-sm text-label-sm text-error font-medium">Khách đang đợi</span>
                                        </div>
                                        <p class="font-label-lg text-label-lg text-on-surface font-semibold leading-snug">
                                            Nghiệm thu hoàn trả đơn #ORD-88219
                                        </p>
                                        <div class="flex items-center justify-between pt-1">
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">The Coffee House Triệu Việt Vương</span>
                                            <a class="font-label-sm text-label-sm text-secondary font-bold hover:underline inline-flex items-center gap-0.5" data-path="don-thue-cua-toi" href="#">
                                                Xử lý <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Action item 2 -->
                                    <div class="p-3 rounded-lg bg-surface-container-low/80 hover:bg-surface-container transition-all flex flex-col gap-1.5">
                                        <div class="flex items-center justify-between gap-2">
                                            <span class="font-label-sm text-label-sm text-on-primary-container font-bold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[14px]">local_offer</span> Tin tìm thuê
                                            </span>
                                            <span class="font-label-sm text-label-sm text-secondary font-medium">3 báo giá mới</span>
                                        </div>
                                        <p class="font-label-lg text-label-lg text-on-surface font-semibold leading-snug">
                                            Lều cắm trại Glamping Naturehike #REQ-8821
                                        </p>
                                        <div class="flex items-center justify-between pt-1">
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Giá từ 180.000 đ/ngày</span>
                                            <a class="font-label-sm text-label-sm text-secondary font-bold hover:underline inline-flex items-center gap-0.5" data-path="yeu-cau-thue" href="#">
                                                So sánh <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 2: Quick Preferences Widget -->
                            <div class="rounded-xl bg-surface-container-lowest p-space-md lg:p-space-lg shadow-sm flex flex-col gap-space-md">
                                <div class="flex items-center justify-between pb-space-xs">
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Kênh nhận thông báo</h3>
                                    <span class="material-symbols-outlined text-[20px] text-on-surface-variant">tune</span>
                                </div>
                                <div class="flex flex-col gap-space-md">
                                    <!-- Toggle 1: Email -->
                                    <label class="flex items-center justify-between cursor-pointer group">
                                        <div class="flex items-center gap-space-sm">
                                            <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant group-hover:text-secondary transition-colors">
                                                <span class="material-symbols-outlined text-[18px]">mail</span>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Email thông báo</span>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">Báo cáo tổng kết &amp; sao kê tuần</span>
                                            </div>
                                        </div>
                                        <input checked="" class="accent-secondary w-4 h-4 cursor-pointer rounded" type="checkbox" />
                                    </label>
                                    <!-- Toggle 2: SMS -->
                                    <label class="flex items-center justify-between cursor-pointer group">
                                        <div class="flex items-center gap-space-sm">
                                            <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant group-hover:text-secondary transition-colors">
                                                <span class="material-symbols-outlined text-[18px]">sms</span>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Tin nhắn SMS khẩn cấp</span>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">Lệnh cọc, hủy đơn &amp; giao nhận</span>
                                            </div>
                                        </div>
                                        <input checked="" class="accent-secondary w-4 h-4 cursor-pointer rounded" type="checkbox" />
                                    </label>
                                    <!-- Toggle 3: Web Push -->
                                    <label class="flex items-center justify-between cursor-pointer group">
                                        <div class="flex items-center gap-space-sm">
                                            <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface-variant group-hover:text-secondary transition-colors">
                                                <span class="material-symbols-outlined text-[18px]">notifications_active</span>
                                            </div>
                                            <div class="flex flex-col">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Đẩy Web Push</span>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">Phản hồi tin nhắn tức thì</span>
                                            </div>
                                        </div>
                                        <input checked="" class="accent-secondary w-4 h-4 cursor-pointer rounded" type="checkbox" />
                                    </label>
                                </div>
                                <div class="pt-space-xs">
                                    <a class="font-label-lg text-label-lg text-secondary font-semibold hover:underline inline-flex items-center gap-1 group" data-path="cai-dat" href="#">
                                        <span>Quản lý chi tiết kênh nhận tin</span>
                                        <span class="material-symbols-outlined text-[16px] group-hover:translate-x-1 transition-transform">arrow_right_alt</span>
                                    </a>
                                </div>
                            </div>
                            <!-- Card 3: Support Banner -->
                            <div class="rounded-xl bg-surface-container-high p-space-md flex flex-col gap-space-sm relative">
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-10 h-10 rounded-lg bg-secondary flex items-center justify-center text-on-secondary shadow-sm">
                                        <span class="material-symbols-outlined text-[20px]">support_agent</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <h4 class="font-label-lg text-label-lg text-on-surface font-bold">Trung tâm hỗ trợ P2P 24/7</h4>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Bảo vệ an toàn mọi lượt thuê</span>
                                    </div>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Cần can thiệp tranh chấp tại điểm bàn giao hoặc xác thực khẩn cấp? Đội ngũ hỗ trợ Escrow sẵn sàng xử lý ngay.
                                </p>
                                <div class="pt-1 flex items-center justify-between">
                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Hotline: 1900 6868</span>
                                    <a class="px-3 py-1.5 rounded-lg bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-semibold hover:bg-surface-container shadow-sm transition-all" href="#">
                                        Gọi hỗ trợ
                                    </a>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Simple client-side micro-interactions for tab filtering and marking all as read
            document.addEventListener('DOMContentLoaded', () => {
                const tabs = document.querySelectorAll('.filter-tab');
                const cards = document.querySelectorAll('.notification-card');
                const markReadBtn = document.getElementById('markAllReadBtn');
                const unreadDots = document.querySelectorAll('.unread-indicator');

                tabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        tabs.forEach(t => {
                            t.classList.remove('bg-surface-container-lowest', 'text-on-surface', 'shadow-sm', 'font-semibold');
                            t.classList.add('text-on-surface-variant');
                        });
                        tab.classList.add('bg-surface-container-lowest', 'text-on-surface', 'shadow-sm', 'font-semibold');
                        tab.classList.remove('text-on-surface-variant');

                        const filter = tab.getAttribute('data-filter');
                        if (filter === 'unread') {
                            cards.forEach(card => {
                                if (card.classList.contains('unread')) {
                                    card.style.display = 'flex';
                                } else {
                                    card.style.display = 'none';
                                }
                            });
                        } else {
                            cards.forEach(card => {
                                card.style.display = 'flex';
                            });
                        }
                    });
                });

                if (markReadBtn) {
                    markReadBtn.addEventListener('click', () => {
                        unreadDots.forEach(dot => dot.remove());
                        cards.forEach(card => card.classList.remove('unread'));
                        markReadBtn.innerHTML = '<span class="material-symbols-outlined text-[18px] text-secondary">check</span><span>Đã đọc tất cả</span>';
                        markReadBtn.disabled = true;
                    });
                }
            });
        </script>
    </main>
    <footer class="w-full bg-surface-container-low mt-space-xl border-t border-outline-variant/30">
        <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-lg mb-space-lg">
                <div class="lg:col-span-2 flex flex-col gap-space-md">
                    <div class="flex items-center gap-space-sm">
                        <div class="w-9 h-9 rounded-lg bg-primary-container flex items-center justify-center text-secondary-container font-headline-sm font-bold"><span class="material-symbols-outlined text-secondary-container">swap_horizontal_circle</span></div><span class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">Rent<span class="text-secondary">Share</span></span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md">Nền tảng cho thuê tài sản cá nhân ngang hàng (P2P) tiên phong tại Việt Nam. Kết nối nhu cầu thuê và cho thuê minh bạch, an toàn với giải pháp ký quỹ thông minh.</p>
                    <div class="flex items-center gap-space-sm">
                        <div class="flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-surface-container-highest border border-outline-variant/40"><span class="material-symbols-outlined text-secondary text-[16px]">shield</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Bảo chứng ký quỹ Escrow 100%</span></div>
                        <div class="flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-surface-container-highest border border-outline-variant/40"><span class="material-symbols-outlined text-secondary text-[16px]">verified_user</span><span class="font-label-sm text-label-sm text-on-surface-variant font-medium">CCCD định danh sinh trắc</span></div>
                    </div>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-on-surface mb-space-md font-bold">Khám phá &amp; Thuê</h4>
                    <ul class="flex flex-col gap-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li><a class="hover:text-secondary transition-colors" data-path="danh-sach-tai-san" href="#">Thiết bị điện tử &amp; Máy ảnh</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="danh-sach-tai-san" href="#">Dụng cụ cắm trại &amp; Du lịch</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="danh-sach-tai-san" href="#">Xe máy &amp; Phương tiện xanh</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="danh-sach-tai-san" href="#">Thiết bị cơ khí gia dụng</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-on-surface mb-space-md font-bold">Chủ tài sản</h4>
                    <ul class="flex flex-col gap-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li><a class="hover:text-secondary transition-colors" data-path="dang-tai-san" href="#">Đăng cho thuê tài sản</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="don-thue-cua-toi" href="#">Quản lý lịch cho thuê</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Chính sách bảo hiểm RentShare</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Quy trình bồi hoàn tài sản</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-on-surface mb-space-md font-bold">Hỗ trợ &amp; Pháp lý</h4>
                    <ul class="flex flex-col gap-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li><a class="hover:text-secondary transition-colors" data-path="thong-bao" href="#">Trung tâm thông báo</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="tin-nhan" href="#">Tin nhắn trực tuyến</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Hợp đồng thuê điện tử</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Tiêu chuẩn đánh giá uy tín</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-space-md border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-label-md text-label-md"><span>© 2025 RentShare Vietnam JSC. Mọi quyền được bảo lưu. Giấy phép TMĐT số 0108892341/GP-BCT cấp bởi Bộ Công Thương.</span>
                <div class="flex items-center gap-space-md"><span>Hà Nội: Tầng 8, Keangnam Landmark 72</span><span>TP. HCM: Tầng 12, Bitexco Financial Tower</span></div>
            </div>
        </div>
    </footer>
</body>

</html>