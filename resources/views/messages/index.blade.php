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
            <!-- Content Canvas Area -->
            <div class="max-w-[1280px] w-full mx-auto px-margin-mobile lg:px-margin py-space-md sm:py-space-lg">
                <!-- Breadcrumb & Main Header (Non-duplicative, functional contextual header) -->
                <div class="flex flex-col gap-space-sm mb-space-lg">
                    <nav class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-md">
                        <a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Trang chủ</a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-on-surface font-semibold">Tin nhắn &amp; Trao đổi</span>
                    </nav>
                    <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md mt-1">
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-space-sm flex-wrap">
                                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Hộp thư &amp; Tin nhắn</h1>
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-bold shadow-sm">
                                    <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                                    2 cuộc trò chuyện chưa đọc
                                </span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">
                                Trung tâm kết nối và trao đổi giữa Khách thuê &amp; Chủ tài sản cho các đơn thuê, báo giá và bàn giao. Mọi tin nhắn đều được lưu trữ bảo chứng pháp lý theo chuẩn RentShare Escrow.
                            </p>
                        </div>
                        <div class="flex items-center gap-space-sm self-start lg:self-center">
                            <button class="inline-flex items-center gap-space-xs px-space-md py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container hover:text-on-primary-container transition-all shadow-md active:scale-[0.98]" id="btnNewMessage" type="button">
                                <span class="material-symbols-outlined text-[18px]">post_add</span>
                                <span>+ Soạn tin nhắn mới</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Search & Filter Controls Surface -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm mb-space-lg flex flex-col gap-space-md">
                    <!-- Search Input row with clear & sorting -->
                    <div class="flex flex-col md:flex-row items-stretch gap-space-sm">
                        <div class="relative flex-1">
                            <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                            <input class="w-full pl-10 pr-10 py-2.5 rounded-lg bg-surface font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/70 focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all" id="searchInput" placeholder="Tìm theo tên đối tác, thiết bị, mã đơn thuê (#ORD), hoặc nội dung tin..." type="text" />
                            <button class="hidden absolute right-3 top-1/2 -translate-y-1/2 p-1 text-on-surface-variant hover:text-on-surface" id="clearSearch" type="button">
                                <span class="material-symbols-outlined text-[18px]">close</span>
                            </button>
                        </div>
                        <div class="flex items-center gap-space-xs shrink-0">
                            <button class="inline-flex items-center gap-1.5 px-3 py-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors" type="button">
                                <span class="material-symbols-outlined text-[18px] text-secondary">tune</span>
                                <span>Bộ lọc nâng cao</span>
                            </button>
                            <button class="inline-flex items-center gap-1.5 px-3 py-2.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-md text-label-md transition-colors" type="button">
                                <span class="material-symbols-outlined text-[18px]">swap_vert</span>
                                <span>Gần nhất</span>
                            </button>
                        </div>
                    </div>
                    <!-- Segmented Category Filters Bar -->
                    <div class="flex items-center gap-space-xs overflow-x-auto pb-1 scrollbar-none text-nowrap" id="filterTabs">
                        <button class="filter-chip active flex items-center gap-1.5 px-3.5 py-1.5 rounded-full font-label-md text-label-md bg-primary text-on-primary font-semibold shadow-sm transition-all" data-filter="all">
                            <span>Tất cả tin nhắn</span>
                            <span class="px-1.5 py-0.2 rounded-full text-[10px] bg-surface-container-lowest/20">6</span>
                        </button>
                        <button class="filter-chip flex items-center gap-1.5 px-3.5 py-1.5 rounded-full font-label-md text-label-md bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all" data-filter="unread">
                            <span>Chưa đọc</span>
                            <span class="px-1.5 py-0.2 rounded-full text-[10px] bg-secondary-container text-on-secondary-container font-bold">2</span>
                        </button>
                        <button class="filter-chip flex items-center gap-1.5 px-3.5 py-1.5 rounded-full font-label-md text-label-md bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all" data-filter="orders">
                            <span>Đơn thuê &amp; Ký quỹ</span>
                            <span class="px-1.5 py-0.2 rounded-full text-[10px] bg-surface-variant text-on-surface-variant font-medium">3</span>
                        </button>
                        <button class="filter-chip flex items-center gap-1.5 px-3.5 py-1.5 rounded-full font-label-md text-label-md bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all" data-filter="assets">
                            <span>Tài sản niêm yết</span>
                            <span class="px-1.5 py-0.2 rounded-full text-[10px] bg-surface-variant text-on-surface-variant font-medium">2</span>
                        </button>
                        <button class="filter-chip flex items-center gap-1.5 px-3.5 py-1.5 rounded-full font-label-md text-label-md bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all" data-filter="requests">
                            <span>Yêu cầu tìm thuê</span>
                            <span class="px-1.5 py-0.2 rounded-full text-[10px] bg-surface-variant text-on-surface-variant font-medium">1</span>
                        </button>
                        <button class="filter-chip flex items-center gap-1.5 px-3.5 py-1.5 rounded-full font-label-md text-label-md bg-surface-container-low hover:bg-surface-container text-on-surface-variant hover:text-on-surface transition-all" data-filter="archive">
                            <span>Lưu trữ</span>
                            <span class="px-1.5 py-0.2 rounded-full text-[10px] bg-surface-variant text-on-surface-variant font-medium">0</span>
                        </button>
                    </div>
                </div>
                <!-- Main Workspace Grid (70% Chat List / 30% Safety & Reputation Panel) -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                    <!-- Left Column: Messages Feed (8 Cols on Desktop) -->
                    <div class="lg:col-span-8 flex flex-col gap-space-md" id="conversationList">
                        <!-- CONVERSATION ITEM 1: Hoàng Linh (Unread / High Priority) -->
                        <article class="conversation-card group relative bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer overflow-hidden border-l-4 border-l-secondary" data-category="unread orders">
                            <div class="flex flex-col sm:flex-row sm:items-start gap-space-md">
                                <!-- User Avatar & Status Indicator -->
                                <div class="relative shrink-0 self-start">
                                    <div class="w-14 h-14 rounded-full overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover" data-alt="Portrait photo of a young Vietnamese female renter wearing a modern beige jacket, soft natural daylight, friendly approachable look, studio bokeh" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAW0TFnf4e-Y-G4fi9dvfgB1h9bkjOr0k9q2wn9Yb1f6vL0lVgGc6IB3HmRvl9b_Dr_CJg4nGtce4q-Ktkt3_lzyl3pM7O_lTrlVSFYQhV1s2myXjlpQqLWpsSr3930IVJwZtT_0K4P0GE-k2dyDDW2BYRxdAIKX5457eKMtdqGfv-dR7q1e9BIPH01q0LtZ6IdUeioUf72DSnClG7jq7lpjly5ufOEnlcunYbBzTPFb3BhIX27Ywo" />
                                    </div>
                                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-[#10b981] ring-2 ring-surface-container-lowest" title="Đang trực tuyến"></span>
                                </div>
                                <!-- Content Area -->
                                <div class="flex-1 min-w-0 flex flex-col gap-1.5">
                                    <!-- Meta Header: User Name, Trust Tag, Time & Action -->
                                    <div class="flex items-start justify-between gap-space-sm">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-secondary transition-colors">Hoàng Linh</span>
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-[#ecfdf5] text-[#065f46] font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px] text-[#059669]">verified_user</span>
                                                eKYC Cấp 2 • Uy tín 96/100
                                            </span>
                                            <span class="px-2 py-0.5 rounded-full bg-surface-container-low font-label-sm text-label-sm text-on-surface-variant font-medium">Khách thuê</span>
                                        </div>
                                        <div class="flex items-center gap-2 shrink-0">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant font-semibold">17:28 • Hôm nay</span>
                                            <button class="text-on-surface-variant hover:text-on-surface p-1 rounded hover:bg-surface-container-low transition-colors" title="Ghim cuộc trò chuyện" type="button">
                                                <span class="material-symbols-outlined text-[18px]">push_pin</span>
                                            </button>
                                            <button class="text-on-surface-variant hover:text-on-surface p-1 rounded hover:bg-surface-container-low transition-colors" title="Tuỳ chọn khác" type="button">
                                                <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Asset Context Link Pill with Image -->
                                    <div class="inline-flex items-center gap-2 px-2.5 py-1.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface w-fit max-w-full transition-colors mt-0.5">
                                        <div class="w-6 h-6 rounded bg-surface-container-high overflow-hidden shrink-0">
                                            <img class="w-full h-full object-cover" data-alt="High-end Sony Alpha A7 IV mirrorless digital camera with high quality G-Master optical zoom lens against smooth white background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwSNUn7vB31KF3lSpEFxqBLbSTnGsBbhXOwL0LxT6jU06q5TyO3Yrv0hMbQha3tQGsSxgMeoHZ0ZoQsjFcNGVrfjHhOXSq92YeVpBzpxF7kE8GiRcwnrB3Qjp-ncstkzPsWvo2E791drt7La3n_ntmDEgbYbiWYbmhRK_4uaGyMmcPi6SvzwNyRWM_m652Ct22pbEQViRfYkLdxawG4VUlreY0JmRQKB6g7Evci373lD3T4Nh7j4c" />
                                        </div>
                                        <span class="font-label-sm text-label-sm font-bold text-secondary">#ORD-88219</span>
                                        <span class="text-on-surface-variant font-label-sm text-label-sm">•</span>
                                        <span class="font-label-sm text-label-sm font-medium text-on-surface truncate">Sony Alpha A7 IV (Kèm Lens FE 24–70mm GM)</span>
                                    </div>
                                    <!-- Message Preview -->
                                    <p class="font-body-md text-body-md text-on-surface font-medium line-clamp-2 mt-1">
                                        "Dạ em đã đến điểm hẹn The Coffee House Triệu Việt Vương rồi anh Tuấn ơi, em đang đợi ở bàn số 3 tầng 1 ạ! Em mang theo đủ phụ kiện hộp chống ẩm nhé."
                                    </p>
                                    <!-- Footer Status Badges & Quick Action -->
                                    <div class="flex items-center justify-between gap-space-sm mt-2 pt-2 border-t border-surface-container-high/40">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#fef3c7] text-[#92400e] font-label-sm text-label-sm font-semibold">
                                                <span class="w-1.5 h-1.5 rounded-full bg-[#d97706] animate-ping"></span>
                                                Bàn giao / Nghiệm thu trả đồ
                                            </span>
                                            <span class="text-on-surface-variant font-label-sm text-label-sm hidden sm:inline">Cọc Escrow: 12.000.000 đ</span>
                                        </div>
                                        <div class="flex items-center gap-space-xs">
                                            <span class="px-2 py-0.5 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm font-bold shadow-sm">1 tin mới</span>
                                            <button class="inline-flex items-center gap-1 px-3 py-1 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors" type="button">
                                                <span>Mở khung chat</span>
                                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- CONVERSATION ITEM 2: Trần Anh Tuấn (Unread) -->
                        <article class="conversation-card group relative bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer overflow-hidden border-l-4 border-l-secondary" data-category="unread requests">
                            <div class="flex flex-col sm:flex-row sm:items-start gap-space-md">
                                <div class="relative shrink-0 self-start">
                                    <div class="w-14 h-14 rounded-full overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover" data-alt="Portrait of an energetic 30-year-old Vietnamese male outdoor host with short hair, warm smile, wearing travel gear" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDTHU2HJrsGAV-lvoQUWZnaj7tp5RgnCu3vaaDXt9zkj8OqNifz8URAzA1gVlOwQUYw2Td5rDObxlQzKGI6bcODmLMyV_N3l2INQsRn8QJeZtmOrieR_7RQEkjkvT2bbt6JnY_QDHq3ZuT_8SUJkLqj4P_U_cbgDLlufE3tFfGyypYac7pA3J18DbwKCd377SY4gdfIXEpLtXkt06OUPPX5Pop92lnuuP_ZT37yH9hOCIpcShYvwss" />
                                    </div>
                                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-[#10b981] ring-2 ring-surface-container-lowest" title="Đang trực tuyến"></span>
                                </div>
                                <div class="flex-1 min-w-0 flex flex-col gap-1.5">
                                    <div class="flex items-start justify-between gap-space-sm">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-secondary transition-colors">Trần Anh Tuấn</span>
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-[#ecfdf5] text-[#065f46] font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px] text-[#f59e0b]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                SuperHost • Uy tín 98/100
                                            </span>
                                            <span class="px-2 py-0.5 rounded-full bg-surface-container-low font-label-sm text-label-sm text-on-surface-variant font-medium">Chủ tài sản</span>
                                        </div>
                                        <div class="flex items-center gap-2 shrink-0">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant font-semibold">14:15 • Hôm nay</span>
                                            <button class="text-on-surface-variant hover:text-on-surface p-1 rounded hover:bg-surface-container-low transition-colors" title="Ghim" type="button">
                                                <span class="material-symbols-outlined text-[18px]">push_pin</span>
                                            </button>
                                            <button class="text-on-surface-variant hover:text-on-surface p-1 rounded hover:bg-surface-container-low transition-colors" type="button">
                                                <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Context Pill -->
                                    <div class="inline-flex items-center gap-2 px-2.5 py-1.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface w-fit max-w-full transition-colors mt-0.5">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">travel_explore</span>
                                        <span class="font-label-sm text-label-sm font-bold text-secondary">#REQ-8821</span>
                                        <span class="text-on-surface-variant font-label-sm text-label-sm">•</span>
                                        <span class="font-label-sm text-label-sm font-medium text-on-surface truncate">Yêu cầu: Bộ lều Glamping cắm trại 4 người Naturehike</span>
                                    </div>
                                    <!-- Message Preview -->
                                    <p class="font-body-md text-body-md text-on-surface font-medium line-clamp-2 mt-1">
                                        "Chào bạn, mình có bộ lều Naturehike P-Series 4 người kèm 1 bàn 4 ghế gấp gọn đúng yêu cầu của bạn, giá 180.000đ/ngày. Đã tạo phiếu báo giá ưu đãi kèm freeship bán kính 5km..."
                                    </p>
                                    <div class="flex items-center justify-between gap-space-sm mt-2 pt-2 border-t border-surface-container-high/40">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[14px] text-secondary">receipt_long</span>
                                                Đã gửi báo giá P2P
                                            </span>
                                            <span class="text-on-surface-variant font-label-sm text-label-sm hidden sm:inline">Thời gian thuê: 3 ngày (Thứ 7 - T2)</span>
                                        </div>
                                        <div class="flex items-center gap-space-xs">
                                            <span class="px-2 py-0.5 rounded-full bg-secondary text-on-secondary font-label-sm text-label-sm font-bold shadow-sm">1 tin mới</span>
                                            <button class="inline-flex items-center gap-1 px-3 py-1 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors" type="button">
                                                <span>Xem báo giá</span>
                                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- CONVERSATION ITEM 3: Hoàng Long (Read / Completed Escrow) -->
                        <article class="conversation-card group relative bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer overflow-hidden border-l-4 border-l-transparent" data-category="orders">
                            <div class="flex flex-col sm:flex-row sm:items-start gap-space-md">
                                <div class="relative shrink-0 self-start">
                                    <div class="w-14 h-14 rounded-full overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover" data-alt="Close-up professional portrait of a tech videographer man in his 30s with camera strap around neck, natural ambient workshop setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdAFDzporkxSZGO3SNeXFf8a0qtbIaoWsfvRJJs5tLk4u-otxgz5zro8pZ9nnjLp5hT244Pxwhfvypzl8pfsrM_ELKz1u9QICozzw6ZrDgsOnbLLAwrqA2gpqH_TMP1gkAYHJUwVJZg4QvHriwe0Gbp-OEuQQX2NEztKVEau1aNm_440YCF_qPnbBBJvUsP4a3tkRaIaVG_Xr0Cwvuu11L06dIGrrl7armxn8OAz80C9Paep_eStU" />
                                    </div>
                                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-outline-variant ring-2 ring-surface-container-lowest" title="Ngoại tuyến"></span>
                                </div>
                                <div class="flex-1 min-w-0 flex flex-col gap-1.5">
                                    <div class="flex items-start justify-between gap-space-sm">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-secondary transition-colors">Hoàng Long</span>
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-[#f0fdfa] text-[#0f766e] font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px] text-secondary">verified</span>
                                                Đối tác xác thực
                                            </span>
                                            <span class="px-2 py-0.5 rounded-full bg-surface-container-low font-label-sm text-label-sm text-on-surface-variant font-medium">Chủ tài sản</span>
                                        </div>
                                        <div class="flex items-center gap-2 shrink-0">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">15/09/2025</span>
                                            <button class="text-on-surface-variant hover:text-on-surface p-1 rounded hover:bg-surface-container-low transition-colors" type="button">
                                                <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Context Pill -->
                                    <div class="inline-flex items-center gap-2 px-2.5 py-1.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface w-fit max-w-full transition-colors mt-0.5">
                                        <div class="w-6 h-6 rounded bg-surface-container-high overflow-hidden shrink-0">
                                            <img class="w-full h-full object-cover" data-alt="Sony FX3 Cinema Line digital cinema camera rigged with cage and professional audio handle on wooden studio desk" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA30k85xgssUYdtRyIO1LesF-XDCFlIG3fDH_MbggXVMJ1m4vTh_DRE290UiXlhHP-w_MoDnaQnGS0kar6QUv0ulAog_wojMpy3fjxI9jagH20jmFSMGh6omw1axcbuXs03fgrg_kNyrOV80IDXpwSGWBOpKiNLTghWgqU3j0B1MpNEt808fE2KqJLxmzWcybHWZ9edCoI61BM3DQwRtTcA60UntC68XdZ_0XY4Na9fj202smPlpaU" />
                                        </div>
                                        <span class="font-label-sm text-label-sm font-bold text-secondary">#ORD-7210</span>
                                        <span class="text-on-surface-variant font-label-sm text-label-sm">•</span>
                                        <span class="font-label-sm text-label-sm font-medium text-on-surface truncate">Máy quay Sony FX3 + Lens 24-70mm GM II</span>
                                    </div>
                                    <!-- Message Preview -->
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mt-1">
                                        "Biên bản nghiệm thu và hoàn trả tiền cọc Escrow 15.000.000 đ đã hoàn tất thành công. Rất cảm ơn anh Tuấn đã giữ gìn máy sạch sẽ và đúng giờ. Hẹn gặp lại anh ở các dự án tới!"
                                    </p>
                                    <div class="flex items-center justify-between gap-space-sm mt-2 pt-2 border-t border-surface-container-high/40">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#ecfdf5] text-[#065f46] font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[14px] text-[#059669]">check_circle</span>
                                                Hoàn tất &amp; Đã giải tỏa cọc
                                            </span>
                                            <div class="flex items-center gap-0.5 text-[#f59e0b]">
                                                <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                <span class="text-on-surface font-label-sm text-label-sm font-bold ml-1">5.0</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-space-xs">
                                            <button class="inline-flex items-center gap-1 px-3 py-1 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors" type="button">
                                                <span>Xem lại biên bản</span>
                                                <span class="material-symbols-outlined text-[14px]">description</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- CONVERSATION ITEM 4: Vũ Nam Phong (Read / Asset Inquiry) -->
                        <article class="conversation-card group relative bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer overflow-hidden border-l-4 border-l-transparent" data-category="assets">
                            <div class="flex flex-col sm:flex-row sm:items-start gap-space-md">
                                <div class="relative shrink-0 self-start">
                                    <div class="w-14 h-14 rounded-full overflow-hidden bg-surface-container">
                                        <img class="w-full h-full object-cover" data-alt="Avatar of a trendy Vietnamese male student with stylish glasses and clean minimal haircut against urban cafe background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCt_IXt4hCoNBlwWVI4fdGHQ7vwUznCXLDY7dpJmx8ffnYatrY6RIh5tq-LQmbyQpCPLn-fZb_lLiGw5i7ys6Nhd2UAnc57QYJxn_V7uTtFavpZ4h3wdLmEs-3EcvetZfhl36BFjeejUGCz-JxNedxSer_K4_FPriA9zm4KY3qKbT0W3LXIxTg2MCFVIfU8GCEa5_OHEuokBPAB0zklteNd5oa01nzzk8cGscYl_xC4JyYc4v1xMP8" />
                                    </div>
                                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-[#10b981] ring-2 ring-surface-container-lowest" title="Đang trực tuyến"></span>
                                </div>
                                <div class="flex-1 min-w-0 flex flex-col gap-1.5">
                                    <div class="flex items-start justify-between gap-space-sm">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-secondary transition-colors">Vũ Nam Phong</span>
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px] text-secondary">shield</span>
                                                Uy tín 94/100
                                            </span>
                                            <span class="px-2 py-0.5 rounded-full bg-surface-container-low font-label-sm text-label-sm text-on-surface-variant font-medium">Khách thuê</span>
                                        </div>
                                        <div class="flex items-center gap-2 shrink-0">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">23/10/2025</span>
                                            <button class="text-on-surface-variant hover:text-on-surface p-1 rounded hover:bg-surface-container-low transition-colors" type="button">
                                                <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Context Pill -->
                                    <div class="inline-flex items-center gap-2 px-2.5 py-1.5 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface w-fit max-w-full transition-colors mt-0.5">
                                        <div class="w-6 h-6 rounded bg-surface-container-high overflow-hidden shrink-0">
                                            <img class="w-full h-full object-cover" data-alt="Modern Vespa Sprint S 150cc scooter in glossy cement grey color parked on clean paved city street" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBvMP3tm7gbsDGVuO7G-xyQkaxKolNTzPPS7ZYAoFwYStLYI6UmRZcdM37QiNz5vpXtWfrWMve_mOAkYAGEjjrE1R0qbaYLbElozqpXI_OfESrb22Lt_7lphMQL58ptbBajHEcW2vCBlX1vWzaumZJshDX-4ygJ_ph30jcxHZEs7GlMDd0f-Q7NlpXmsJZAXgiYJx7C_C0awjYHQa4lVunLkKBCseJ7dIeFFMAz2-jSmiCSU3KeIGg" />
                                        </div>
                                        <span class="font-label-sm text-label-sm font-bold text-secondary">#ASSET-7721</span>
                                        <span class="text-on-surface-variant font-label-sm text-label-sm">•</span>
                                        <span class="font-label-sm text-label-sm font-medium text-on-surface truncate">Vespa Sprint S 150 ABS (Xám Xi Măng)</span>
                                    </div>
                                    <!-- Message Preview -->
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mt-1">
                                        "Cho em hỏi xe này cuối tuần này từ thứ 6 đến Chủ nhật có còn lịch trống không anh? Em cọc bằng CCCD gắn chip gốc kèm hộ chiếu có được giảm 50% tiền bảo chứng không ạ?"
                                    </p>
                                    <div class="flex items-center justify-between gap-space-sm mt-2 pt-2 border-t border-surface-container-high/40">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[14px]">event_available</span>
                                                Hỏi lịch thuê
                                            </span>
                                            <span class="text-on-surface-variant font-label-sm text-label-sm hidden sm:inline">Giá niêm yết: 350.000đ/ngày</span>
                                        </div>
                                        <div class="flex items-center gap-space-xs">
                                            <button class="inline-flex items-center gap-1 px-3 py-1 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors" type="button">
                                                <span>Phản hồi &amp; Gửi lịch</span>
                                                <span class="material-symbols-outlined text-[14px]">send</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- CONVERSATION ITEM 5: CSKH / Arbitration (Read / Dispute Resolution) -->
                        <article class="conversation-card group relative bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer overflow-hidden border-l-4 border-l-transparent" data-category="orders">
                            <div class="flex flex-col sm:flex-row sm:items-start gap-space-md">
                                <div class="relative shrink-0 self-start">
                                    <div class="w-14 h-14 rounded-full bg-primary-container text-secondary-container flex items-center justify-center shadow-inner">
                                        <span class="material-symbols-outlined text-[30px]" style="font-variation-settings: 'FILL' 1;">gavel</span>
                                    </div>
                                    <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-secondary ring-2 ring-surface-container-lowest" title="Hệ thống tự động"></span>
                                </div>
                                <div class="flex-1 min-w-0 flex flex-col gap-1.5">
                                    <div class="flex items-start justify-between gap-space-sm">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold group-hover:text-secondary transition-colors">Bộ phận Giám định Kỹ thuật số RentShare</span>
                                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-[#f0fdfa] text-[#0f766e] font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[13px] text-secondary">verified</span>
                                                Kênh Trọng tài Chính thức
                                            </span>
                                        </div>
                                        <div class="flex items-center gap-2 shrink-0">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">28/10/2025</span>
                                            <button class="text-on-surface-variant hover:text-on-surface p-1 rounded hover:bg-surface-container-low transition-colors" type="button">
                                                <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Context Pill -->
                                    <div class="inline-flex items-center gap-2 px-2.5 py-1.5 rounded-lg bg-[#fef2f2] text-[#991b1b] w-fit max-w-full transition-colors mt-0.5">
                                        <span class="material-symbols-outlined text-[16px] text-error">assignment_late</span>
                                        <span class="font-label-sm text-label-sm font-bold">#DSP-40912</span>
                                        <span class="font-label-sm text-label-sm">•</span>
                                        <span class="font-label-sm text-label-sm font-medium truncate">Hồ sơ tranh chấp: Vết xước thấu kính Sony 24-70mm</span>
                                    </div>
                                    <!-- Message Preview -->
                                    <p class="font-body-md text-body-md text-on-surface-variant line-clamp-2 mt-1">
                                        "Hệ thống ghi nhận hai bên đã đồng thuận phương án hòa giải bồi thường 1.200.000đ từ quỹ cọc Escrow. Khoản tiền cọc còn lại (13.800.000đ) đã được tự động hoàn trả vào tài khoản ví của Bên Thuê."
                                    </p>
                                    <div class="flex items-center justify-between gap-space-sm mt-2 pt-2 border-t border-surface-container-high/40">
                                        <div class="flex items-center gap-2 flex-wrap">
                                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full bg-[#ecfdf5] text-[#065f46] font-label-sm text-label-sm font-semibold">
                                                <span class="material-symbols-outlined text-[14px] text-[#059669]">task_alt</span>
                                                Hòa giải thành công
                                            </span>
                                            <span class="text-on-surface-variant font-label-sm text-label-sm hidden sm:inline">Đã đóng hồ sơ tranh chấp</span>
                                        </div>
                                        <div class="flex items-center gap-space-xs">
                                            <button class="inline-flex items-center gap-1 px-3 py-1 rounded bg-surface-container hover:bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold transition-colors" type="button">
                                                <span>Xem quyết định</span>
                                                <span class="material-symbols-outlined text-[14px]">download</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Right Column: Safety Widget & Quick Metrics Sidebar (4 Cols on Desktop) -->
                    <aside class="lg:col-span-4 flex flex-col gap-space-md">
                        <!-- Box 1: Owner / Renter Communication Performance Score -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm">
                            <div class="flex items-center justify-between mb-space-sm">
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Hiệu suất phản hồi của bạn</h3>
                                <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-secondary-container text-on-secondary-container">
                                    <span class="material-symbols-outlined text-[18px]">speed</span>
                                </span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mb-space-md">
                                Duy trì tỷ lệ trên 90% để giữ huy hiệu Phản hồi nhanh và nhận ưu tiên hiển thị bài đăng.
                            </p>
                            <div class="grid grid-cols-3 gap-2 py-space-sm px-2 bg-surface-container-low rounded-lg text-center mb-space-md">
                                <div class="flex flex-col items-center">
                                    <span class="font-headline-sm text-headline-sm text-secondary font-bold">98%</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Tỷ lệ trả lời</span>
                                </div>
                                <div class="flex flex-col items-center border-x border-outline-variant/30 px-1">
                                    <span class="font-headline-sm text-headline-sm text-on-surface font-bold">~8 phút</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Tốc độ TB</span>
                                </div>
                                <div class="flex flex-col items-center">
                                    <div class="flex items-center text-[#f59e0b] font-headline-sm text-headline-sm font-bold">
                                        5.0<span class="material-symbols-outlined text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Lịch sự 5/5</span>
                                </div>
                            </div>
                            <!-- Micro Progress Bar visual -->
                            <div class="flex flex-col gap-1.5">
                                <div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant">
                                    <span>Mục tiêu phản hồi trong ngày</span>
                                    <span class="text-secondary font-bold">Hoàn hảo (30/30 cuộc)</span>
                                </div>
                                <div class="w-full h-2 rounded-full bg-surface-container-high overflow-hidden">
                                    <div class="h-full bg-secondary rounded-full transition-all duration-500" style="width: 98%"></div>
                                </div>
                            </div>
                        </section>
                        <!-- Box 2: Mẹo giao dịch an toàn P2P -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm">
                            <div class="flex items-center gap-space-sm mb-space-sm">
                                <div class="w-8 h-8 rounded-lg bg-[#ecfdf5] text-[#065f46] flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-[20px]">verified_user</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Mẹo giao dịch an toàn P2P</h3>
                                    <p class="font-label-sm text-label-sm text-secondary font-semibold">Quy chuẩn bảo vệ tài sản &amp; cọc</p>
                                </div>
                            </div>
                            <ul class="flex flex-col gap-space-sm mt-space-sm font-body-sm text-body-sm text-on-surface">
                                <li class="flex items-start gap-2.5 p-2 rounded-lg bg-surface-container-low/60 hover:bg-surface-container-low transition-colors">
                                    <span class="material-symbols-outlined text-error text-[18px] shrink-0 mt-0.5">do_not_disturb_on</span>
                                    <span class="leading-snug">
                                        <strong class="font-semibold text-on-surface">Không cọc ngoài hệ thống:</strong> Tuyệt đối không chuyển tiền cọc trực tiếp ra ngoài ví ký quỹ Escrow của RentShare để tránh rủi ro mất trắng.
                                    </span>
                                </li>
                                <li class="flex items-start gap-2.5 p-2 rounded-lg bg-surface-container-low/60 hover:bg-surface-container-low transition-colors">
                                    <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">photo_camera</span>
                                    <span class="leading-snug">
                                        <strong class="font-semibold text-on-surface">Biên bản chụp ảnh 6 góc:</strong> Bắt buộc chụp rõ vết xước, số seri, màn hình hoạt động ngay khi bàn giao đồ tại điểm hẹn.
                                    </span>
                                </li>
                                <li class="flex items-start gap-2.5 p-2 rounded-lg bg-surface-container-low/60 hover:bg-surface-container-low transition-colors">
                                    <span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">lock</span>
                                    <span class="leading-snug">
                                        <strong class="font-semibold text-on-surface">Bảo mật thông tin cá nhân:</strong> Số điện thoại thật của hai bên chỉ được mở sau khi giao dịch ký quỹ hiển thị "Đã phê duyệt".
                                    </span>
                                </li>
                            </ul>
                        </section>
                        <!-- Box 3: Hỗ trợ khẩn cấp 24/7 -->
                        <section class="bg-gradient-to-br from-primary-container to-surface-container-highest rounded-xl p-space-md text-on-primary shadow-sm relative overflow-hidden">
                            <div class="relative z-10 flex flex-col gap-space-sm">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-secondary-container text-[24px]">headset_mic</span>
                                        <h3 class="font-headline-sm text-headline-sm text-on-primary font-bold">Hỗ trợ khẩn cấp 24/7</h3>
                                    </div>
                                    <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-ping"></span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-primary-container">
                                    Cần can thiệp tranh chấp hiện trường hoặc giải tỏa tiền cọc khẩn cấp tại điểm nhận đồ?
                                </p>
                                <div class="flex items-center justify-between bg-surface-container-lowest/10 backdrop-blur-md rounded-lg p-space-sm mt-1">
                                    <div class="flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-primary-container">Hotline hỗ trợ miễn cước</span>
                                        <span class="font-headline-sm text-headline-sm font-bold text-secondary-fixed">1900 6868 <span class="font-label-md text-label-md text-on-primary">(Phím 1)</span></span>
                                    </div>
                                    <a class="px-3 py-1.5 rounded-lg bg-secondary text-on-secondary font-label-md text-label-md font-bold hover:bg-secondary-fixed-dim hover:text-on-secondary-fixed transition-colors" href="tel:19006868">
                                        Gọi ngay
                                    </a>
                                </div>
                                <div class="flex items-center gap-1.5 text-on-primary-container font-label-sm text-label-sm mt-0.5">
                                    <span class="material-symbols-outlined text-[14px] text-secondary-container">schedule</span>
                                    <span>Thời gian phản hồi trực đài: Dưới 45 giây</span>
                                </div>
                            </div>
                        </section>
                    </aside>
                </div>
            </div>
            <!-- Quick Message Compose Modal (Hidden by Default, toggled via JS) -->
            <div class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/40 backdrop-blur-sm" id="newMsgModal">
                <div class="bg-surface-container-lowest w-full max-w-lg rounded-xl shadow-2xl p-space-lg flex flex-col gap-space-md animate-in fade-in zoom-in-95 duration-150">
                    <div class="flex items-center justify-between pb-space-sm border-b border-surface-container">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-secondary text-[22px]">edit_square</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Soạn tin nhắn P2P mới</h3>
                        </div>
                        <button class="p-1 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" id="btnCloseModal" type="button">
                            <span class="material-symbols-outlined text-[20px]">close</span>
                        </button>
                    </div>
                    <form class="flex flex-col gap-space-sm" id="composeForm" onsubmit="event.preventDefault();">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Người nhận (Tên thành viên hoặc ID giao dịch)</label>
                            <div class="relative">
                                <input class="w-full px-3 py-2 rounded-lg bg-surface font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary/40" placeholder="Nhập tên đối tác hoặc mã #ORD..." required="" type="text" />
                            </div>
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Gắn kèm tài sản hoặc đơn thuê liên quan</label>
                            <select class="w-full px-3 py-2 rounded-lg bg-surface font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary/40">
                                <option value="">-- Không gắn kèm / Thảo luận tự do --</option>
                                <option value="ORD-88219">#ORD-88219 - Sony Alpha A7 IV</option>
                                <option value="REQ-8821">#REQ-8821 - Bộ lều Glamping cắm trại</option>
                                <option value="ASSET-7721">#ASSET-7721 - Vespa Sprint S 150 ABS</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Nội dung tin nhắn</label>
                            <textarea class="w-full p-3 rounded-lg bg-surface font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary/40 resize-none" placeholder="Nhập nội dung trao đổi, địa điểm hẹn, thỏa thuận kiểm thử phụ kiện..." required="" rows="4"></textarea>
                        </div>
                        <div class="p-2.5 rounded-lg bg-surface-container-low flex items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                            <span class="material-symbols-outlined text-secondary text-[16px]">verified_user</span>
                            <span>Mọi trao đổi được RentShare sao lưu mã hóa làm bằng chứng hòa giải ký quỹ.</span>
                        </div>
                        <div class="flex items-center justify-end gap-space-sm mt-2 pt-2 border-t border-surface-container">
                            <button class="px-space-md py-2 rounded-lg text-on-surface hover:bg-surface-container font-label-lg text-label-lg transition-colors" id="btnCancelModal" type="button">
                                Hủy
                            </button>
                            <button class="px-space-md py-2 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg transition-colors shadow-sm" id="btnSubmitModal" type="submit">
                                Gửi tin nhắn
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Client-side Interactive Functionality Script -->
        <script>
            (function initMessagingDashboard() {
                // Elements
                const searchInput = document.getElementById('searchInput');
                const clearBtn = document.getElementById('clearSearch');
                const filterChips = document.querySelectorAll('.filter-chip');
                const cards = document.querySelectorAll('.conversation-card');
                const btnNewMessage = document.getElementById('btnNewMessage');
                const modal = document.getElementById('newMsgModal');
                const btnCloseModal = document.getElementById('btnCloseModal');
                const btnCancelModal = document.getElementById('btnCancelModal');
                const composeForm = document.getElementById('composeForm');

                // Search functionality with live filtering
                if (searchInput && clearBtn) {
                    searchInput.addEventListener('input', (e) => {
                        const val = e.target.value.toLowerCase().trim();
                        if (val.length > 0) {
                            clearBtn.classList.remove('hidden');
                        } else {
                            clearBtn.classList.add('hidden');
                        }

                        cards.forEach((card) => {
                            const cardText = card.textContent.toLowerCase();
                            if (cardText.includes(val)) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });

                    clearBtn.addEventListener('click', () => {
                        searchInput.value = '';
                        clearBtn.classList.add('hidden');
                        cards.forEach(card => card.style.display = 'block');
                        searchInput.focus();
                    });
                }

                // Filter Tabs behavior
                filterChips.forEach((chip) => {
                    chip.addEventListener('click', () => {
                        filterChips.forEach(c => {
                            c.classList.remove('active', 'bg-primary', 'text-on-primary', 'shadow-sm', 'font-semibold');
                            c.classList.add('bg-surface-container-low', 'text-on-surface-variant');
                        });

                        chip.classList.add('active', 'bg-primary', 'text-on-primary', 'shadow-sm', 'font-semibold');
                        chip.classList.remove('bg-surface-container-low', 'text-on-surface-variant');

                        const category = chip.getAttribute('data-filter');

                        cards.forEach((card) => {
                            if (category === 'all') {
                                card.style.display = 'block';
                            } else {
                                const cardCat = card.getAttribute('data-category') || '';
                                if (cardCat.includes(category)) {
                                    card.style.display = 'block';
                                } else {
                                    card.style.display = 'none';
                                }
                            }
                        });
                    });
                });

                // Quick Compose Modal Open/Close
                const toggleModal = (show) => {
                    if (!modal) return;
                    if (show) {
                        modal.classList.remove('hidden');
                        document.body.style.overflow = 'hidden';
                    } else {
                        modal.classList.add('hidden');
                        document.body.style.overflow = '';
                    }
                };

                if (btnNewMessage) btnNewMessage.addEventListener('click', () => toggleModal(true));
                if (btnCloseModal) btnCloseModal.addEventListener('click', () => toggleModal(false));
                if (btnCancelModal) btnCancelModal.addEventListener('click', () => toggleModal(false));

                // Click outside backdrop to close
                if (modal) {
                    modal.addEventListener('click', (e) => {
                        if (e.target === modal) toggleModal(false);
                    });
                }

                // Form submit feedback
                if (composeForm) {
                    composeForm.addEventListener('submit', () => {
                        toggleModal(false);
                        alert('Tin nhắn khởi tạo cuộc trò chuyện đã được gửi thành công!');
                        composeForm.reset();
                    });
                }
            })();
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