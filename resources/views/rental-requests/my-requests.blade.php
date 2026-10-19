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
                        "secondary-fixed": "#89f5e7",
                        "inverse-surface": "#213145",
                        "on-secondary": "#ffffff",
                        "secondary": "#006a61",
                        "surface-container-highest": "#d3e4fe",
                        "primary-fixed": "#dae2fd",
                        "on-background": "#0b1c30",
                        "inverse-primary": "#bec6e0",
                        "surface": "#f8f9ff",
                        "on-primary-fixed-variant": "#3f465c",
                        "on-primary-container": "#7c839b",
                        "background": "#f8f9ff",
                        "on-secondary-fixed-variant": "#005049",
                        "on-primary-fixed": "#131b2e",
                        "primary-fixed-dim": "#bec6e0",
                        "on-secondary-fixed": "#00201d",
                        "primary": "#000000",
                        "tertiary-fixed": "#ffddb8",
                        "outline": "#76777d",
                        "on-tertiary": "#ffffff",
                        "inverse-on-surface": "#eaf1ff",
                        "tertiary": "#000000",
                        "on-error-container": "#93000a",
                        "on-primary": "#ffffff",
                        "on-secondary-container": "#006f66",
                        "surface-variant": "#d3e4fe",
                        "tertiary-container": "#2a1700",
                        "on-error": "#ffffff",
                        "surface-container-high": "#dce9ff",
                        "surface-container": "#e5eeff",
                        "primary-container": "#131b2e",
                        "outline-variant": "#c6c6cd",
                        "on-surface-variant": "#45464d",
                        "on-tertiary-container": "#b87500",
                        "error": "#ba1a1a",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed": "#2a1700",
                        "secondary-fixed-dim": "#6bd8cb",
                        "tertiary-fixed-dim": "#ffb95f",
                        "surface-container-low": "#eff4ff",
                        "on-surface": "#0b1c30",
                        "surface-dim": "#cbdbf5",
                        "surface-tint": "#565e74",
                        "error-container": "#ffdad6",
                        "secondary-container": "#86f2e4",
                        "surface-bright": "#f8f9ff",
                        "on-tertiary-fixed-variant": "#653e00"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "space-sm": "0.5rem",
                        "gutter": "1.5rem",
                        "space-lg": "1.5rem",
                        "gutter-mobile": "1rem",
                        "margin": "2rem",
                        "margin-mobile": "1rem",
                        "space-xs": "0.25rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem"
                    },
                    "fontFamily": {
                        "label-lg": ["Inter"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-xl-mobile": ["Plus Jakarta Sans"],
                        "label-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "headline-sm": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "headline-xl-mobile": ["30px", {
                            "lineHeight": "38px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "500"
                        }],
                        "label-sm": ["11px", {
                            "lineHeight": "14px",
                            "letterSpacing": "0.04em",
                            "fontWeight": "600"
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
                        "headline-xl": ["40px", {
                            "lineHeight": "48px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["13px", {
                            "lineHeight": "18px",
                            "letterSpacing": "0.005em",
                            "fontWeight": "400"
                        }],
                        "headline-sm": ["18px", {
                            "lineHeight": "26px",
                            "letterSpacing": "-0.05em",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
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
                <nav class="hidden xl:flex items-center gap-space-xs" data-active-classes="bg-surface-container-high text-on-surface font-bold"><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="kham-pha" href="#">Khám phá</a><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="danh-sach-tai-san" href="#">Danh sách tài sản</a><a aria-current="page" class="px-space-md py-space-sm rounded-lg transition-colors bg-surface-container-high text-on-surface font-bold" data-path="yeu-cau-thue" href="#">Yêu cầu thuê</a><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="don-thue-cua-toi" href="#">Đơn thuê của tôi</a><a class="relative px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="tin-nhan" href="#">Tin nhắn<span class="ml-1.5 inline-flex items-center justify-center px-1.5 py-0.5 rounded-full font-label-sm text-label-sm bg-secondary text-on-secondary font-semibold">2</span></a></nav>
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
                </div><button aria-label="Thông báo" class="relative p-2 rounded-lg text-on-surface-variant hover:bg-surface-container-high hover:text-on-surface transition-colors" type="button"><span class="material-symbols-outlined text-[22px]">notifications</span><span class="absolute top-2 right-2 w-2 h-2 rounded-full bg-error"></span></button>
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
            <!-- Subtle ambient decorative glow -->
            <div class="relative w-full max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pb-space-xl">
                <div class="absolute top-10 right-20 w-72 h-72 bg-secondary/5 rounded-full blur-3xl pointer-events-none -z-10"></div>
                <div class="absolute top-64 left-10 w-96 h-96 bg-secondary-container/10 rounded-full blur-3xl pointer-events-none -z-10"></div>
                <!-- Breadcrumb Navigation -->
                <nav class="flex items-center gap-space-xs py-space-md text-on-surface-variant font-label-md text-label-md">
                    <a class="hover:text-secondary transition-colors flex items-center gap-1" data-path="kham-pha" href="#">
                        <span class="material-symbols-outlined text-[16px]">home</span>
                        Trang chủ
                    </a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface-variant">Hoạt động cá nhân</span>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface font-semibold">Yêu cầu thuê của tôi</span>
                </nav>
                <!-- Header Section with Bold Architectural Scale -->
                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-gutter pb-space-lg">
                    <div class="flex flex-col max-w-2xl">
                        <div class="flex items-center gap-space-sm mb-space-xs">
                            <span class="px-space-sm py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase tracking-wider font-bold">Quản lý tìm đồ P2P</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Cập nhật 2 phút trước</span>
                        </div>
                        <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">Yêu cầu thuê của tôi</h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-xs">
                            Theo dõi các tin tìm thuê đồ đã đăng, xem và so sánh các đề xuất chào giá trực tiếp từ chủ tài sản uy tín trong cộng đồng RentShare.
                        </p>
                    </div>
                    <div class="flex items-center gap-space-sm self-start lg:self-auto">
                        <a class="inline-flex items-center gap-space-xs px-space-lg py-3 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-primary-container hover:text-on-primary-container transition-all" data-path="dang-yeu-cau-thue" href="#">
                            <span class="material-symbols-outlined text-[20px]">add_circle</span>
                            <span>+ Tạo yêu cầu thuê mới</span>
                        </a>
                    </div>
                </div>
                <!-- Summary Metric Cards (4 Cards) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl">
                    <!-- Card 1 -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Tin đang mở tìm thuê</span>
                                <span class="font-headline-xl text-headline-xl text-on-surface font-bold mt-1 tracking-tight">2 <span class="text-secondary font-headline-sm text-headline-sm font-semibold">tin</span></span>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
                                <span class="material-symbols-outlined text-[22px]">radar</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 mt-space-md pt-space-xs text-secondary font-label-sm text-label-sm">
                            <span class="relative flex h-2 w-2">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-secondary opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2 w-2 bg-secondary"></span>
                            </span>
                            <span>Đang nhận đề xuất từ chủ máy</span>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Tổng đề xuất mới nhận</span>
                                <span class="font-headline-xl text-headline-xl text-on-surface font-bold mt-1 tracking-tight">7 <span class="text-secondary font-headline-sm text-headline-sm font-semibold">báo giá</span></span>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface">
                                <span class="material-symbols-outlined text-[22px]">price_change</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 mt-space-md pt-space-xs text-secondary font-label-sm text-label-sm font-semibold">
                            <span class="material-symbols-outlined text-[16px]">trending_down</span>
                            <span>4 đề xuất giá tốt hơn ngân sách</span>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Đã kết nối thành công</span>
                                <span class="font-headline-xl text-headline-xl text-on-surface font-bold mt-1 tracking-tight">12 <span class="text-on-surface-variant font-headline-sm text-headline-sm font-normal">lần</span></span>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-primary-fixed">
                                <span class="material-symbols-outlined text-[22px]">handshake</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 mt-space-md pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                            <span>Hoàn trả đồ đúng hạn 100%</span>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
                        <div class="flex items-start justify-between">
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium">Đã đóng / Hết hạn</span>
                                <span class="font-headline-xl text-headline-xl text-on-surface font-bold mt-1 tracking-tight">4 <span class="text-on-surface-variant font-headline-sm text-headline-sm font-normal">tin</span></span>
                            </div>
                            <div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-on-surface-variant">
                                <span class="material-symbols-outlined text-[22px]">archive</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-1.5 mt-space-md pt-space-xs text-on-surface-variant font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-[16px]">history</span>
                            <span>Lưu trữ giao dịch lịch sử</span>
                        </div>
                    </div>
                </div>
                <!-- Status Filter Segmented Control Tabs -->
                <div class="bg-surface-container-low p-1.5 rounded-xl shadow-sm flex flex-wrap items-center gap-1 mb-space-lg">
                    <button class="px-space-md py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all" type="button">
                        Tất cả <span class="ml-1 px-1.5 py-0.5 rounded-full bg-surface-container-highest text-[10px] font-bold">6</span>
                    </button>
                    <button class="px-space-md py-2 rounded-lg bg-surface-container-lowest text-secondary font-label-md text-label-md font-bold shadow-sm flex items-center gap-1.5 transition-all" type="button">
                        <span class="w-2 h-2 rounded-full bg-secondary"></span>
                        Đang mở nhận báo giá <span class="ml-1 px-1.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant text-[10px] font-bold">2</span>
                    </button>
                    <button class="px-space-md py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all" type="button">
                        Đã chọn được đồ <span class="ml-1 px-1.5 py-0.5 rounded-full bg-surface-container text-on-surface-variant text-[10px] font-bold">1</span>
                    </button>
                    <button class="px-space-md py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all" type="button">
                        Bản nháp <span class="ml-1 px-1.5 py-0.5 rounded-full bg-surface-container text-on-surface-variant text-[10px] font-bold">1</span>
                    </button>
                    <button class="px-space-md py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all" type="button">
                        Đã đóng / Kết thúc <span class="ml-1 px-1.5 py-0.5 rounded-full bg-surface-container text-on-surface-variant text-[10px] font-bold">2</span>
                    </button>
                </div>
                <!-- Main Content Area: Asymmetric Split Grid (Requests Feed + Right Advisory Sidebar) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                    <!-- Primary Column: Request Cards (8 of 12 cols) -->
                    <div class="lg:col-span-8 flex flex-col gap-space-lg">
                        <!-- REQUEST CARD 1 -->
                        <article class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col gap-space-md">
                            <!-- Card Header & Metadata -->
                            <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-space-sm pb-space-xs">
                                <div class="flex flex-col">
                                    <div class="flex flex-wrap items-center gap-space-sm mb-1.5">
                                        <span class="font-label-sm text-label-sm font-semibold tracking-wide text-on-surface-variant bg-surface-container px-2 py-0.5 rounded">#REQ-8821</span>
                                        <span class="text-on-surface-variant text-label-sm font-label-sm flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">schedule</span> Đăng cách đây 4 giờ
                                        </span>
                                        <span class="text-on-surface-variant text-label-sm font-label-sm flex items-center gap-1">
                                            <span class="material-symbols-outlined text-secondary text-[14px]">location_on</span> TP. Huế
                                        </span>
                                    </div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold leading-snug">
                                        Cần thuê lều cắm trại 4 người chống thấm nước tốt + 1 bộ bàn ghế gấp dã ngoại
                                    </h2>
                                </div>
                                <!-- Status Badge -->
                                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold whitespace-nowrap self-start">
                                    <span class="material-symbols-outlined text-[16px]">campaign</span>
                                    Đang nhận đề xuất (3 mới)
                                </div>
                            </div>
                            <!-- Schedule & Budget Info Strip -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm p-space-sm rounded-lg bg-surface-container-low">
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface">
                                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Thời gian cần thuê</span>
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">10/10 - 12/10/2025 (3 ngày)</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">payments</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Ngân sách dự kiến</span>
                                        <span class="font-label-lg text-label-lg text-secondary font-bold">200.000 đ - 250.000 đ <span class="font-normal text-on-surface-variant">/ ngày</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Received Proposals Summary Box -->
                            <div class="flex flex-col gap-space-xs mt-space-xs">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-lg text-label-lg text-on-surface font-bold flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-secondary text-[18px]">inbox</span>
                                        Các chủ đồ đã gửi báo giá (3 đề xuất)
                                    </span>
                                    <span class="font-label-sm text-label-sm text-secondary font-medium">Bảo vệ cọc Escrow RentShare</span>
                                </div>
                                <!-- Proposals List -->
                                <div class="flex flex-col gap-space-sm mt-1">
                                    <!-- Proposal 1 -->
                                    <div class="p-space-sm rounded-lg bg-surface-container-lowest shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-space-sm hover:bg-surface-container-low transition-colors">
                                        <div class="flex items-start gap-space-sm">
                                            <div class="w-9 h-9 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant font-bold text-sm shrink-0">
                                                H
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-center gap-1.5 flex-wrap">
                                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Nguyễn Văn Hùng</span>
                                                    <span class="px-1.5 py-0.5 rounded-full bg-surface-container-highest text-secondary font-label-sm text-label-sm font-semibold flex items-center gap-0.5">
                                                        <span class="material-symbols-outlined text-[12px]">verified</span> Uy tín 98/100
                                                    </span>
                                                    <span class="text-on-surface-variant font-label-sm text-label-sm">• Cách 1.8km • Free giao</span>
                                                </div>
                                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                                    Combo Lều Coleman Sundome 4P cao cấp + Bàn ghế Naturehike hợp kim nhôm nhẹ gấp gọn.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex items-center md:flex-col md:items-end justify-between shrink-0">
                                            <span class="font-headline-sm text-headline-sm text-secondary font-bold">220.000 đ<span class="font-normal text-on-surface-variant text-label-sm">/ngày</span></span>
                                            <button class="text-on-surface font-label-sm text-label-sm font-semibold hover:text-secondary underline transition-colors" type="button">Xem chi tiết</button>
                                        </div>
                                    </div>
                                    <!-- Proposal 2 (Best Price) -->
                                    <div class="p-space-sm rounded-lg bg-surface-container-low shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                                        <div class="flex items-start gap-space-sm">
                                            <div class="w-9 h-9 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed-variant font-bold text-sm shrink-0">
                                                T
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-center gap-1.5 flex-wrap">
                                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Trần Anh Tuấn</span>
                                                    <span class="px-1.5 py-0.5 rounded-full bg-surface-container text-on-surface font-label-sm text-label-sm font-semibold">
                                                        Uy tín 94/100
                                                    </span>
                                                    <span class="px-2 py-0.5 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm font-bold">Giá tốt nhất</span>
                                                </div>
                                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                                    Lều Naturehike P-Series 4 người 2 lớp chống mưa bão UPF50+, kèm thảm cách nhiệt.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex items-center md:flex-col md:items-end justify-between shrink-0">
                                            <span class="font-headline-sm text-headline-sm text-secondary font-bold">180.000 đ<span class="font-normal text-on-surface-variant text-label-sm">/ngày</span></span>
                                            <button class="text-on-surface font-label-sm text-label-sm font-semibold hover:text-secondary underline transition-colors" type="button">Xem chi tiết</button>
                                        </div>
                                    </div>
                                    <!-- Proposal 3 (Hub verified shop) -->
                                    <div class="p-space-sm rounded-lg bg-surface-container-lowest shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-space-sm hover:bg-surface-container-low transition-colors">
                                        <div class="flex items-start gap-space-sm">
                                            <div class="w-9 h-9 rounded-full bg-surface-container-highest flex items-center justify-center text-secondary font-bold text-sm shrink-0">
                                                <span class="material-symbols-outlined text-[18px]">storefront</span>
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-center gap-1.5 flex-wrap">
                                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Hue Camping Hub</span>
                                                    <span class="px-1.5 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold flex items-center gap-0.5">
                                                        <span class="material-symbols-outlined text-[12px]">verified</span> Shop Uy tín 99/100
                                                    </span>
                                                </div>
                                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                                    Gói cắm trại gia đình trọn gói full phụ kiện: lều, đèn tích điện, bếp gas mini &amp; vỉ nướng.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex items-center md:flex-col md:items-end justify-between shrink-0">
                                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">250.000 đ<span class="font-normal text-on-surface-variant text-label-sm">/ngày</span></span>
                                            <button class="text-on-surface font-label-sm text-label-sm font-semibold hover:text-secondary underline transition-colors" type="button">Xem chi tiết</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bottom Action Buttons Strip -->
                            <div class="flex flex-wrap items-center justify-between gap-space-sm pt-space-xs mt-space-xs">
                                <div class="flex items-center gap-space-xs">
                                    <button class="px-space-md py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container hover:text-on-primary-container transition-all shadow-sm flex items-center gap-1.5" type="button">
                                        <span class="material-symbols-outlined text-[18px]">compare_arrows</span>
                                        So sánh 3 đề xuất &amp; Chọn thuê
                                    </button>
                                    <button class="px-space-md py-2.5 rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-colors flex items-center gap-1" type="button">
                                        <span class="material-symbols-outlined text-[18px]">edit</span>
                                        Chỉnh sửa
                                    </button>
                                </div>
                                <button class="px-space-md py-2.5 rounded-lg text-error hover:bg-error-container transition-colors font-label-md text-label-md font-semibold flex items-center gap-1" type="button">
                                    <span class="material-symbols-outlined text-[16px]">close</span>
                                    Đóng tin tìm đồ
                                </button>
                            </div>
                        </article>
                        <!-- REQUEST CARD 2 -->
                        <article class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col gap-space-md">
                            <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-space-sm pb-space-xs">
                                <div class="flex flex-col">
                                    <div class="flex flex-wrap items-center gap-space-sm mb-1.5">
                                        <span class="font-label-sm text-label-sm font-semibold tracking-wide text-on-surface-variant bg-surface-container px-2 py-0.5 rounded">#REQ-9402</span>
                                        <span class="text-on-surface-variant text-label-sm font-label-sm flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">schedule</span> Đăng cách đây 2 ngày
                                        </span>
                                        <span class="text-on-surface-variant text-label-sm font-label-sm flex items-center gap-1">
                                            <span class="material-symbols-outlined text-secondary text-[14px]">location_on</span> Quận 7, TP. HCM (bán kính 5km)
                                        </span>
                                    </div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold leading-snug">
                                        Cần thuê Flycam DJI Mini 4 Pro hoặc Mavic 3 (3 ngày quay dự án kiến trúc cuối tuần)
                                    </h2>
                                </div>
                                <!-- Status Badge -->
                                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold whitespace-nowrap self-start">
                                    <span class="material-symbols-outlined text-[16px]">notifications_active</span>
                                    Đang nhận đề xuất (4 chủ máy chào)
                                </div>
                            </div>
                            <!-- Schedule & Budget Info Strip -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm p-space-sm rounded-lg bg-surface-container-low">
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface">
                                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Lịch quay dự án</span>
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">26/10 - 28/10/2025</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">monetization_on</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Ngân sách mong muốn</span>
                                        <span class="font-label-lg text-label-lg text-secondary font-bold">350.000 đ - 450.000 đ <span class="font-normal text-on-surface-variant">/ ngày</span></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Highlight best quote pill -->
                            <div class="p-space-sm rounded-lg bg-surface-container-high flex items-center justify-between gap-space-md">
                                <div class="flex items-center gap-space-sm min-w-0">
                                    <span class="material-symbols-outlined text-secondary text-[22px] shrink-0">local_fire_department</span>
                                    <div class="flex flex-col min-w-0">
                                        <span class="font-label-md text-label-md text-on-surface font-bold truncate">Giá tốt nhất hiện tại: 350.000 đ/ngày từ Studio Thanh Đa</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant truncate">Bao gồm 3 pin dung lượng cao Plus + Thẻ Sandisk Extreme Pro 128GB (Đã eKYC Cấp 3).</span>
                                    </div>
                                </div>
                                <span class="px-2.5 py-1 rounded-full bg-surface-container-lowest text-secondary font-label-sm text-label-sm font-bold shrink-0">Khớp ngân sách</span>
                            </div>
                            <!-- Bottom Action Buttons Strip -->
                            <div class="flex flex-wrap items-center justify-between gap-space-sm pt-space-xs">
                                <div class="flex items-center gap-space-xs">
                                    <button class="px-space-md py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container transition-all shadow-sm flex items-center gap-1.5" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                        Xem chi tiết 4 đề xuất
                                    </button>
                                    <button class="px-space-md py-2.5 rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-colors flex items-center gap-1" type="button">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                        Nhắn tin thương lượng
                                    </button>
                                </div>
                                <button class="px-space-md py-2 rounded-lg text-on-surface-variant hover:bg-surface-container font-label-md text-label-md font-medium transition-colors" type="button">
                                    Tạm dừng nhận tin
                                </button>
                            </div>
                        </article>
                        <!-- REQUEST CARD 3 (COMPLETED) -->
                        <article class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm opacity-90 hover:opacity-100 transition-all flex flex-col gap-space-md">
                            <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-space-sm pb-space-xs">
                                <div class="flex flex-col">
                                    <div class="flex flex-wrap items-center gap-space-sm mb-1.5">
                                        <span class="font-label-sm text-label-sm font-semibold tracking-wide text-on-surface-variant bg-surface-container px-2 py-0.5 rounded">#REQ-7210</span>
                                        <span class="text-on-surface-variant text-label-sm font-label-sm flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">event_available</span> Đăng ngày 15/09/2025
                                        </span>
                                        <span class="text-on-surface-variant text-label-sm font-label-sm flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px]">location_on</span> Quận 1, TP. HCM
                                        </span>
                                    </div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold leading-snug">
                                        Cần thuê máy quay Sony FX3 + Lens 24-70mm GM II quay sự kiện âm nhạc
                                    </h2>
                                </div>
                                <!-- Status Badge Completed -->
                                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-bold whitespace-nowrap self-start">
                                    <span class="material-symbols-outlined text-secondary text-[16px]">check_circle</span>
                                    Đã thuê thành công &amp; Hoàn tất
                                </div>
                            </div>
                            <!-- Completion Escrow Card -->
                            <div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col sm:flex-row items-start sm:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant font-bold">
                                        L
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Khớp với chủ máy: Hoàng Long</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Đã hoàn tiền cọc Escrow 15.000.000 đ đầy đủ • Hài lòng 5/5 sao</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container-highest text-secondary font-label-sm text-label-sm font-bold self-end sm:self-auto">
                                    <span class="material-symbols-outlined text-[15px]">verified_user</span> Hợp đồng an toàn
                                </div>
                            </div>
                            <!-- Bottom Action Buttons Strip -->
                            <div class="flex flex-wrap items-center justify-between gap-space-sm pt-space-xs">
                                <button class="px-space-md py-2.5 rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-colors flex items-center gap-1.5" type="button">
                                    <span class="material-symbols-outlined text-[18px]">description</span>
                                    Xem lại hợp đồng số
                                </button>
                                <button class="px-space-md py-2.5 rounded-lg bg-secondary text-on-secondary font-label-lg text-label-lg hover:opacity-95 transition-opacity flex items-center gap-1.5 shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[18px]">repeat</span>
                                    Đăng lại nhu cầu này
                                </button>
                            </div>
                        </article>
                    </div>
                    <!-- Secondary Column: Right Sidebar / Tips & Community Escrow Guarantee (4 of 12 cols) -->
                    <aside class="lg:col-span-4 flex flex-col gap-space-lg">
                        <!-- Tips Card: Hướng dẫn chọn đề xuất tốt nhất -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center gap-space-sm pb-space-xs">
                                <div class="w-9 h-9 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
                                    <span class="material-symbols-outlined text-[20px]">lightbulb</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Hướng dẫn chọn đề xuất tốt nhất</h3>
                            </div>
                            <div class="flex flex-col gap-space-md">
                                <!-- Step 1 -->
                                <div class="flex items-start gap-space-sm">
                                    <div class="w-6 h-6 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0 mt-0.5">
                                        1
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Ưu tiên chủ tài sản xác minh</span>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                            Luôn chọn chủ tài sản có huy hiệu eKYC CCCD gắn chip sinh trắc và điểm uy tín RentShare trên 90 điểm.
                                        </p>
                                    </div>
                                </div>
                                <!-- Step 2 -->
                                <div class="flex items-start gap-space-sm">
                                    <div class="w-6 h-6 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0 mt-0.5">
                                        2
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Biên bản chụp ảnh hiện trạng</span>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                            Kiểm tra kỹ bộ ảnh 360° và video kiểm thử tình trạng thiết bị được chụp trước thời điểm bàn giao trước khi xác nhận mở cọc Escrow.
                                        </p>
                                    </div>
                                </div>
                                <!-- Step 3 -->
                                <div class="flex items-start gap-space-sm">
                                    <div class="w-6 h-6 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-label-sm text-label-sm font-bold shrink-0 mt-0.5">
                                        3
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Thương lượng qua hộp chat bảo mật</span>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                            Sử dụng công cụ chat nội bộ RentShare để thống nhất địa điểm bàn giao, phụ kiện kèm theo nhằm lưu lại chứng cứ hợp đồng điện tử.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="p-space-sm rounded-lg bg-surface-container-low flex items-center gap-space-sm mt-space-xs">
                                <span class="material-symbols-outlined text-secondary text-[20px] shrink-0">shield_lock</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Tiền đặt cọc được giữ an toàn tại tài khoản Escrow ngân hàng liên kết, chỉ giải tỏa khi 2 bên hoàn thành việc thuê.</span>
                            </div>
                        </div>
                        <!-- Community Request Pulse Visualizer -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-sm">
                            <div class="flex items-center justify-between">
                                <span class="font-label-md text-label-md text-on-surface-variant font-medium uppercase tracking-wider">Tỷ lệ phản hồi tin tìm đồ</span>
                                <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold">Rất nhanh</span>
                            </div>
                            <div class="flex items-baseline gap-2 mt-1">
                                <span class="font-headline-xl text-headline-xl text-on-surface font-bold">~ 28</span>
                                <span class="font-body-md text-body-md text-on-surface-variant">phút trung bình có chủ máy đầu tiên gửi chào giá</span>
                            </div>
                            <!-- Micro SVG Progress Line -->
                            <div class="w-full bg-surface-container rounded-full h-2.5 overflow-hidden mt-space-xs">
                                <div class="bg-secondary h-full rounded-full w-[82%] transition-all"></div>
                            </div>
                            <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm pt-1">
                                <span>Trung bình thị trường: 4.5h</span>
                                <span class="text-secondary font-bold">Nhanh hơn 85%</span>
                            </div>
                        </div>
                        <!-- Need Help / Support Card -->
                        <div class="bg-surface-container-high rounded-xl p-space-lg flex flex-col gap-space-sm">
                            <div class="flex items-center gap-space-sm">
                                <div class="w-8 h-8 rounded-lg bg-surface-container-lowest flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[20px]">support_agent</span>
                                </div>
                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Hỗ trợ kết nối đồ hiếm?</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Nếu bạn tìm thiết bị công nghệ chuyên dụng chưa ai chào giá sau 24h, chuyên viên điều phối của RentShare sẽ hỗ trợ quét kho thiết bị liên kết để tìm giúp bạn.
                            </p>
                            <a class="inline-flex items-center gap-1 font-label-lg text-label-lg text-secondary hover:underline font-bold mt-space-xs" href="#">
                                <span>Yêu cầu trợ lý tìm đồ</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <script>
            // Micro-interaction for filter tabs activation state toggle
            document.addEventListener('DOMContentLoaded', () => {
                const filterButtons = document.querySelectorAll('.bg-surface-container-low button');
                filterButtons.forEach(btn => {
                    btn.addEventListener('click', () => {
                        filterButtons.forEach(b => {
                            b.className = 'px-space-md py-2 rounded-lg font-label-md text-label-md text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-all';
                        });
                        btn.className = 'px-space-md py-2 rounded-lg bg-surface-container-lowest text-secondary font-label-md text-label-md font-bold shadow-sm flex items-center gap-1.5 transition-all';
                    });
                });
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
                        <li><a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Trung tâm trợ giúp 24/7</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Quy chế bảo vệ quyền riêng tư</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Hợp đồng thuê điện tử</a></li>
                        <li><a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Tiêu chuẩn đánh giá uy tín</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-space-md border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-label-md text-label-md"><span>© 2025 RentShare Vietnam JSC. Mọi quyền được bảo lưu.</span>
                <div class="flex items-center gap-space-md"><span>Hà Nội: Tầng 8, Keangnam Landmark 72</span><span>TP. HCM: Tầng 12, Bitexco Financial Tower</span></div>
            </div>
        </div>
    </footer>
</body>

</html>