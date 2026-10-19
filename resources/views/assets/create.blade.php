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
                <nav class="hidden xl:flex items-center gap-space-xs" data-active-classes="bg-surface-container-high text-on-surface font-bold"><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="kham-pha" href="#">Khám phá</a><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="danh-sach-tai-san" href="#">Danh sách tài sản</a><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="yeu-cau-thue" href="#">Yêu cầu thuê</a><a class="px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="don-thue-cua-toi" href="#">Đơn thuê của tôi</a><a class="relative px-space-md py-space-sm rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors" data-path="tin-nhan" href="#">Tin nhắn<span class="ml-1.5 inline-flex items-center justify-center px-1.5 py-0.5 rounded-full font-label-sm text-label-sm bg-secondary text-on-secondary font-semibold">2</span></a></nav>
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
            <!-- Top Progress & Header Bar -->
            <div class="w-full bg-surface-container-low py-space-md shadow-sm">
                <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-sm">
                    <!-- Breadcrumb -->
                    <nav class="flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant">
                        <a class="hover:text-secondary transition-colors" href="#">Trang chủ</a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <a class="hover:text-secondary transition-colors" href="#">Tài sản của tôi</a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-on-surface font-semibold">Đăng tài sản mới</span>
                    </nav>
                    <!-- Page Heading & Subtitle -->
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pt-space-xs">
                        <div>
                            <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold flex items-center gap-1.5 mb-1">
                                <span class="w-2 h-2 rounded-full bg-secondary"></span> Tạo nguồn thu thụ động an toàn
                            </span>
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Đăng tài sản cho thuê</h1>
                            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-1">
                                Biến các món đồ ít dùng thành thu nhập thụ động bền vững. Mọi giao dịch được bảo chứng tiền cọc và rủi ro độc lập bởi RentShare Escrow.
                            </p>
                        </div>
                        <div class="flex items-center gap-space-sm self-start md:self-auto bg-surface-container-lowest px-space-md py-2 rounded-xl shadow-sm">
                            <span class="material-symbols-outlined text-secondary text-[22px]">verified_user</span>
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface font-semibold">Bảo hộ Escrow Shield</span>
                                <span class="font-body-sm text-body-sm text-secondary">Ký quỹ an toàn 100%</span>
                            </div>
                        </div>
                    </div>
                    <!-- Stepper / Progress Indicator -->
                    <div class="pt-space-md">
                        <div class="grid grid-cols-2 sm:grid-cols-5 gap-2 sm:gap-3">
                            <!-- Step 1: Active -->
                            <div class="flex items-center gap-2 p-2 sm:p-2.5 rounded-lg bg-surface-container-highest text-on-surface transition-all">
                                <div class="w-6 h-6 rounded-full bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold flex-shrink-0">1</div>
                                <div class="min-w-0">
                                    <p class="font-label-sm text-label-sm truncate font-bold text-on-surface">Thông tin cơ bản</p>
                                    <p class="font-body-sm text-[11px] text-secondary font-medium hidden sm:block">Đang điền</p>
                                </div>
                            </div>
                            <!-- Step 2 -->
                            <div class="flex items-center gap-2 p-2 sm:p-2.5 rounded-lg bg-surface-container text-on-surface-variant">
                                <div class="w-6 h-6 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-bold flex-shrink-0">2</div>
                                <div class="min-w-0">
                                    <p class="font-label-sm text-label-sm truncate font-medium">Ảnh &amp; Tình trạng</p>
                                    <p class="font-body-sm text-[11px] text-on-surface-variant hidden sm:block">4 ảnh đã tải</p>
                                </div>
                            </div>
                            <!-- Step 3 -->
                            <div class="flex items-center gap-2 p-2 sm:p-2.5 rounded-lg bg-surface-container text-on-surface-variant">
                                <div class="w-6 h-6 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-bold flex-shrink-0">3</div>
                                <div class="min-w-0">
                                    <p class="font-label-sm text-label-sm truncate font-medium">Giá &amp; Tiền cọc</p>
                                    <p class="font-body-sm text-[11px] text-on-surface-variant hidden sm:block">450.000đ/ngày</p>
                                </div>
                            </div>
                            <!-- Step 4 -->
                            <div class="flex items-center gap-2 p-2 sm:p-2.5 rounded-lg bg-surface-container text-on-surface-variant">
                                <div class="w-6 h-6 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-bold flex-shrink-0">4</div>
                                <div class="min-w-0">
                                    <p class="font-label-sm text-label-sm truncate font-medium">Lịch &amp; Bàn giao</p>
                                    <p class="font-body-sm text-[11px] text-on-surface-variant hidden sm:block">Quận 1, TP.HCM</p>
                                </div>
                            </div>
                            <!-- Step 5 -->
                            <div class="flex items-center gap-2 p-2 sm:p-2.5 rounded-lg bg-surface-container text-on-surface-variant col-span-2 sm:col-span-1">
                                <div class="w-6 h-6 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-label-sm text-label-sm font-bold flex-shrink-0">5</div>
                                <div class="min-w-0">
                                    <p class="font-label-sm text-label-sm truncate font-medium">Quy định &amp; Đăng</p>
                                    <p class="font-body-sm text-[11px] text-on-surface-variant hidden sm:block">Sẵn sàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Content Grid -->
            <div class="max-w-[1280px] w-full mx-auto px-margin-mobile lg:px-margin py-space-xl">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                    <!-- LEFT COLUMN: MAIN INPUT FORM (8 cols) -->
                    <form class="lg:col-span-8 flex flex-col gap-space-lg" onsubmit="event.preventDefault();">
                        <!-- SECTION 1: THÔNG TIN CƠ BẢN -->
                        <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">1</span>
                                    <div>
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Thông tin cơ bản</h2>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Tên chuẩn xác giúp người thuê tìm thấy thiết bị nhanh hơn 40%</p>
                                    </div>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2.5 py-1 rounded-full font-semibold">Bắt buộc</span>
                            </div>
                            <!-- Title Input -->
                            <div class="flex flex-col gap-1.5">
                                <div class="flex items-center justify-between">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="asset-title">
                                        Tiêu đề tài sản <span class="text-error">*</span>
                                    </label>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant" id="title-counter">59/100 ký tự</span>
                                </div>
                                <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all" id="asset-title" placeholder="Ví dụ: Máy ảnh Sony Alpha A7 Mark IV (Kèm Lens FE 24-70mm F2.8 GM)" type="text" value="Máy ảnh Sony Alpha A7 Mark IV (Kèm Lens FE 24-70mm F2.8 GM)" />
                            </div>
                            <!-- Category Selection -->
                            <div class="flex flex-col gap-2">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold">
                                    Danh mục tài sản <span class="text-error">*</span>
                                </label>
                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                                    <button class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container text-left flex items-center gap-2.5 transition-all text-on-surface" type="button">
                                        <span class="material-symbols-outlined text-[20px] text-on-surface-variant">two_wheeler</span>
                                        <span class="font-label-md text-label-md">Phương tiện &amp; Xe</span>
                                    </button>
                                    <button class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container text-left flex items-center gap-2.5 transition-all text-on-surface" type="button">
                                        <span class="material-symbols-outlined text-[20px] text-on-surface-variant">camping</span>
                                        <span class="font-label-md text-label-md">Đồ cắm trại dã ngoại</span>
                                    </button>
                                    <button class="p-3 rounded-lg bg-primary text-on-primary text-left flex items-center gap-2.5 shadow-sm transition-all" type="button">
                                        <span class="material-symbols-outlined text-[20px] text-secondary-container">photo_camera</span>
                                        <span class="font-label-md text-label-md font-bold">Máy ảnh &amp; Số hóa</span>
                                    </button>
                                    <button class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container text-left flex items-center gap-2.5 transition-all text-on-surface" type="button">
                                        <span class="material-symbols-outlined text-[20px] text-on-surface-variant">styler</span>
                                        <span class="font-label-md text-label-md">Trang phục &amp; Sự kiện</span>
                                    </button>
                                    <button class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container text-left flex items-center gap-2.5 transition-all text-on-surface" type="button">
                                        <span class="material-symbols-outlined text-[20px] text-on-surface-variant">home_repair_service</span>
                                        <span class="font-label-md text-label-md">Cơ khí gia dụng DIY</span>
                                    </button>
                                    <button class="p-3 rounded-lg bg-surface-container-low hover:bg-surface-container text-left flex items-center gap-2.5 transition-all text-on-surface" type="button">
                                        <span class="material-symbols-outlined text-[20px] text-on-surface-variant">sports_tennis</span>
                                        <span class="font-label-md text-label-md">Thể thao &amp; Trekking</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Brand & Model Inputs -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="brand-name">Thương hiệu</label>
                                    <input class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all" id="brand-name" placeholder="Ví dụ: Sony, Apple, Canon, DJI..." type="text" value="Sony" />
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="model-name">Model / Dòng máy</label>
                                    <input class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all" id="model-name" placeholder="Ví dụ: A7 IV, Mavic 3 Pro..." type="text" value="Alpha A7 Mark IV (ILCE-7M4)" />
                                </div>
                            </div>
                            <!-- Item Condition -->
                            <div class="flex flex-col gap-2">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold">
                                    Tình trạng thiết bị thực tế <span class="text-error">*</span>
                                </label>
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
                                    <div class="p-2.5 rounded-lg bg-surface-container-low text-center cursor-pointer hover:bg-surface-container transition-all">
                                        <span class="font-label-md text-label-md text-on-surface font-semibold block">Mới 100%</span>
                                        <span class="font-body-sm text-[11px] text-on-surface-variant block mt-0.5">Nguyên seal hộp</span>
                                    </div>
                                    <div class="p-2.5 rounded-lg bg-primary text-on-primary text-center cursor-pointer shadow-sm">
                                        <span class="font-label-md text-label-md font-bold block text-secondary-container">Like New 98-99%</span>
                                        <span class="font-body-sm text-[11px] text-inverse-on-surface block mt-0.5">Rất ít xước, hoàn hảo</span>
                                    </div>
                                    <div class="p-2.5 rounded-lg bg-surface-container-low text-center cursor-pointer hover:bg-surface-container transition-all">
                                        <span class="font-label-md text-label-md text-on-surface font-semibold block">Rất tốt (90-95%)</span>
                                        <span class="font-body-sm text-[11px] text-on-surface-variant block mt-0.5">Hoạt động trơn tru</span>
                                    </div>
                                    <div class="p-2.5 rounded-lg bg-surface-container-low text-center cursor-pointer hover:bg-surface-container transition-all">
                                        <span class="font-label-md text-label-md text-on-surface font-semibold block">Tốt (80-90%)</span>
                                        <span class="font-body-sm text-[11px] text-on-surface-variant block mt-0.5">Có hao mòn ngoại hình</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Detailed Description & Accessories -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="asset-desc">
                                    Mô tả chi tiết &amp; Danh sách phụ kiện kèm theo <span class="text-error">*</span>
                                </label>
                                <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all leading-relaxed" id="asset-desc" placeholder="Ghi rõ chức năng, mục đích quay chụp/du lịch, danh mục phụ kiện gồm: số lượng pin, dock sạc, thẻ nhớ, túi xách..." rows="4">Body Sony A7 IV quay chụp thương mại hoàn hảo, sensor sạch không bụi mốc. Đi kèm Lens cao cấp Sony FE 24-70mm F2.8 GM kính trong veo.
Phụ kiện kèm theo đầy đủ khi bàn giao:
- 02 pin Sony FZ100 chính hãng (dung lượng 100%)
- 01 dock sạc đôi Nitecore Type-C
- 01 Thẻ nhớ 128GB Sony Tough V60 đọc ghi nhanh
- Túi đeo chống sốc Peak Design Everyday Sling 6L.</textarea>
                            </div>
                        </div>
                        <!-- SECTION 2: HÌNH ẢNH SẢN PHẨM -->
                        <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">2</span>
                                    <div>
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Hình ảnh &amp; Tình trạng thực tế</h2>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Tối thiểu 3 ảnh sắc nét, khuyến khích chụp rõ 4 góc để làm biên bản đối soát bảo chứng</p>
                                    </div>
                                </div>
                                <span class="font-label-sm text-label-sm text-on-surface font-semibold bg-surface-container-highest px-3 py-1 rounded-full">4 / 8 ảnh</span>
                            </div>
                            <!-- Drag and Drop Zone -->
                            <div class="p-space-lg rounded-xl bg-surface-container-low flex flex-col items-center justify-center text-center cursor-pointer hover:bg-surface-container transition-colors group">
                                <div class="w-12 h-12 rounded-full bg-surface-container-lowest flex items-center justify-center text-secondary shadow-sm mb-2 group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[28px]">add_photo_alternate</span>
                                </div>
                                <p class="font-label-lg text-label-lg text-on-surface font-semibold">Kéo &amp; thả ảnh vào đây hoặc <span class="text-secondary underline">chọn từ thiết bị</span></p>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Định dạng JPG, PNG, HEIC dung lượng tối đa 15MB/ảnh</p>
                            </div>
                            <!-- Uploaded Photos Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                <!-- Cover Photo (Image 1) -->
                                <div class="relative rounded-xl overflow-hidden shadow-sm aspect-square group">
                                    <img class="w-full h-full object-cover" data-alt="Professional studio photo of Sony Alpha 7 IV mirrorless camera mounted with a 24-70mm GM lens sitting on a minimal slate podium, clean studio lighting with soft teal and warm neutral highlights, crisp commercial product shot" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnBMASfbtkXWSWZ7s9xqBfwYw6RLrk2qDOkXV8FFmx-6YYFYqsrRNA6yJOzOg3U7x4WEdylRru3KVDY3VIVUDIebzVkJjAAtfDe9XrBoAsNlnpms7-PhzjwgQha6B6aZwOm3tYmTI86Ugys5nXXON-9Yk4JJlyAozsmTTnfLAEGIggKoTKeRYzieIXw6WKPTSrgqW6itHj_i4F95WkOKjGtlSm9jLWeczRMedld1AkfgKHzAWzT_o" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
                                    <span class="absolute top-2 left-2 bg-secondary text-on-secondary font-label-sm text-[10px] px-2 py-0.5 rounded-full font-bold shadow-sm">
                                        Ảnh đại diện bìa
                                    </span>
                                    <div class="absolute bottom-2 left-2 right-2 flex items-center justify-between text-on-primary">
                                        <span class="font-label-sm text-[11px] truncate">Mặt trước thân máy</span>
                                        <button class="w-6 h-6 rounded-full bg-inverse-surface/80 flex items-center justify-center hover:bg-error transition-colors" type="button">
                                            <span class="material-symbols-outlined text-[14px]">delete</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- Detail Photo 2 (Sensor/Rear) -->
                                <div class="relative rounded-xl overflow-hidden shadow-sm aspect-square group">
                                    <img class="w-full h-full object-cover" data-alt="Close up photography of Sony A7 IV camera LCD display turned on showing menu settings with lens glass in reflection, high detail tactile camera dials and buttons, soft ambient warm rim lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBSzkoZLsPTWnCTIxtFH8riQHZ0w2qNCGw6qJyvAPUTbswahumA98qYJfPC_DX19wOXcgIGDvqK-FjwbbVRZa3Oa_F5DuC-0MvHFXwS5mNaPPNJvb5b0xzWDFZbwP_mIgoaryyJO-8LAaoL8g3UxMQufbw0Ru04-uwp2wPIcwPbNgmSpxuIXu4OFdB-J2n_iPIH2wwuM_6qWhvqM16q3tEno1QaRwl92nnNXUmetDgUbdNgicgQzk0" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <button class="absolute top-2 right-2 w-6 h-6 rounded-full bg-surface-container-lowest/90 text-on-surface flex items-center justify-center hover:bg-error hover:text-on-error transition-colors" type="button">
                                        <span class="material-symbols-outlined text-[14px]">close</span>
                                    </button>
                                    <div class="absolute bottom-2 left-2 right-2 flex items-center justify-between text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="font-label-sm text-[11px] truncate">Màn hình xoay lật</span>
                                        <span class="material-symbols-outlined text-[16px]">drag_indicator</span>
                                    </div>
                                </div>
                                <!-- Detail Photo 3 (Accessories Kit) -->
                                <div class="relative rounded-xl overflow-hidden shadow-sm aspect-square group">
                                    <img class="w-full h-full object-cover" data-alt="Flat lay overhead view of camera rental accessories kit including two black rectangular lithium camera batteries, dual charging dock with glowing blue led, tough memory card case, and grey sling bag on a textured concrete surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCid7Kn73qHPwmRmVPjc18quDbswJtn0jrsK_eTej_xXuwiM5mee7Q2gEsTJ0iR9QCh8EYS_9SmrvDa-W04ssNjgWX4qhM1dbkqSjmfnBW4BTJtt_L12MdDI2aFPjAUWOwRPXY83NEhbqvrFU9yqYLLMZBsZWKrfiMZX96vMieWezNRe5HlY0L_pvGBYZOYY817NqrfnpQlNpoTFfBHXFzBxkFtdPZ61bXR2iyh46tFUtzOICEJ_CE" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <button class="absolute top-2 right-2 w-6 h-6 rounded-full bg-surface-container-lowest/90 text-on-surface flex items-center justify-center hover:bg-error hover:text-on-error transition-colors" type="button">
                                        <span class="material-symbols-outlined text-[14px]">close</span>
                                    </button>
                                    <div class="absolute bottom-2 left-2 right-2 flex items-center justify-between text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="font-label-sm text-[11px] truncate">2 pin + Túi đựng</span>
                                        <span class="material-symbols-outlined text-[16px]">drag_indicator</span>
                                    </div>
                                </div>
                                <!-- Detail Photo 4 (Sensor check) -->
                                <div class="relative rounded-xl overflow-hidden shadow-sm aspect-square group">
                                    <img class="w-full h-full object-cover" data-alt="Macro close-up shot of an open mirrorless full frame camera body mount showing spotless clean iridescent CMOS digital sensor, pristine condition inspection, sharp precision photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC08jo295FDV-E3uc2wyPhSR7TvtWwYqFyg8xYQKZPZlod8WiBlSd8stNvQgrrpA4qfArrnGx4WX8p4ZRjr9QSSxVRUtQpoYCreBpOtBtyfrJ4BnotkUoQ2pB0N5nxOZ0cdReis4ecJFiP7UGt5yWLotELObrFzT3U-6CrthhCji8aEWLMgNq1FowyERB6CAl4MVhCJE0jIK6-B3b3hfTHgbVM2EPhYEs3SeTEVU7jabMeIW7BoBtI" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                                    <button class="absolute top-2 right-2 w-6 h-6 rounded-full bg-surface-container-lowest/90 text-on-surface flex items-center justify-center hover:bg-error hover:text-on-error transition-colors" type="button">
                                        <span class="material-symbols-outlined text-[14px]">close</span>
                                    </button>
                                    <div class="absolute bottom-2 left-2 right-2 flex items-center justify-between text-on-primary opacity-0 group-hover:opacity-100 transition-opacity">
                                        <span class="font-label-sm text-[11px] truncate">Sensor không bụi</span>
                                        <span class="material-symbols-outlined text-[16px]">drag_indicator</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-2 p-space-sm rounded-lg bg-surface-container-low text-on-surface-variant font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-secondary text-[18px]">verified</span>
                                <span>Ảnh chụp thực tế rõ nét giúp tài sản được gắn nhãn <strong>“Tài sản xác thực”</strong>, gia tăng gấp đôi tỷ lệ được duyệt thuê nhanh.</span>
                            </div>
                        </div>
                        <!-- SECTION 3: THIẾT LẬP GIÁ THUÊ & TIỀN CỌC -->
                        <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">3</span>
                                    <div>
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Giá thuê &amp; Ký quỹ Escrow</h2>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Minh bạch biểu phí, khách cọc an tâm qua ví trung gian RentShare</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit Picker -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold">Đơn vị thời gian tính tiền</label>
                                <div class="inline-flex p-1 rounded-lg bg-surface-container-low w-fit">
                                    <button class="px-space-md py-1.5 rounded-md font-label-md text-label-md text-on-surface-variant hover:text-on-surface" type="button">Theo giờ</button>
                                    <button class="px-space-md py-1.5 rounded-md font-label-md text-label-md bg-surface-container-lowest text-on-surface font-bold shadow-sm" type="button">Theo ngày (Mặc định)</button>
                                    <button class="px-space-md py-1.5 rounded-md font-label-md text-label-md text-on-surface-variant hover:text-on-surface" type="button">Theo tuần</button>
                                </div>
                            </div>
                            <!-- Daily Rental Rate Input -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="price-per-day">
                                        Giá thuê 1 ngày (VNĐ) <span class="text-error">*</span>
                                    </label>
                                    <div class="relative flex items-center">
                                        <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-headline-sm text-headline-sm font-bold focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all pr-14" id="price-per-day" type="text" value="450.000" />
                                        <span class="absolute right-4 font-label-lg text-label-lg text-on-surface-variant font-bold">đ/ngày</span>
                                    </div>
                                    <span class="font-body-sm text-[12px] text-secondary font-medium">Gợi ý phân khúc: 420.000đ - 500.000đ/ngày</span>
                                </div>
                                <!-- Escrow Deposit Amount -->
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="escrow-deposit">
                                        Tiền đặt cọc bảo chứng tiêu chuẩn (VNĐ) <span class="text-error">*</span>
                                    </label>
                                    <div class="relative flex items-center">
                                        <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-headline-sm text-headline-sm font-bold focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all pr-12" id="escrow-deposit" type="text" value="3.000.000" />
                                        <span class="absolute right-4 font-label-lg text-label-lg text-on-surface-variant font-bold">đ</span>
                                    </div>
                                    <span class="font-body-sm text-[12px] text-on-surface-variant">Khóa tạm thời tại Escrow khi khách nhận máy</span>
                                </div>
                            </div>
                            <!-- Long Term Discount Toggles -->
                            <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-space-sm">
                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Chiết khấu ưu đãi cho khách thuê dài hạn</span>
                                <div class="flex items-center justify-between py-1">
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-on-surface font-medium">Giảm 10% khi thuê từ 3 ngày trở lên</span>
                                        <span class="font-body-sm text-[12px] text-on-surface-variant">Chỉ còn 405.000đ/ngày (Giúp tăng tỷ lệ lấp lịch trống 65%)</span>
                                    </div>
                                    <!-- Custom Active Switch -->
                                    <button class="w-12 h-6 rounded-full bg-secondary p-0.5 flex items-center justify-end transition-colors" type="button">
                                        <div class="w-5 h-5 rounded-full bg-on-secondary shadow-sm"></div>
                                    </button>
                                </div>
                                <div class="flex items-center justify-between py-1">
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-on-surface font-medium">Giảm 20% khi thuê trọn gói từ 7 ngày</span>
                                        <span class="font-body-sm text-[12px] text-on-surface-variant">Chỉ còn 360.000đ/ngày cho khách đi dự án xa hoặc du lịch dài ngày</span>
                                    </div>
                                    <!-- Custom Active Switch -->
                                    <button class="w-12 h-6 rounded-full bg-secondary p-0.5 flex items-center justify-end transition-colors" type="button">
                                        <div class="w-5 h-5 rounded-full bg-on-secondary shadow-sm"></div>
                                    </button>
                                </div>
                            </div>
                            <!-- Collateral Flexibility Option -->
                            <div class="flex flex-col gap-2">
                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Hình thức đặt cọc linh hoạt cho người thuê</span>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-sm">
                                    <label class="p-space-sm rounded-lg bg-surface-container-high flex items-start gap-2.5 cursor-pointer">
                                        <input checked="" class="mt-1 text-secondary focus:ring-0" name="collateral-mode" type="radio" />
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-bold">100% Ký quỹ tiền mặt Escrow</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">Khách thanh toán 3.000.000đ vào ví ký quỹ RentShare trước bàn giao.</span>
                                        </div>
                                    </label>
                                    <label class="p-space-sm rounded-lg bg-surface-container-low flex items-start gap-2.5 cursor-pointer hover:bg-surface-container">
                                        <input class="mt-1 text-secondary focus:ring-0" name="collateral-mode" type="radio" />
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-bold">Giữ CCCD gắn chip + Cọc 500.000đ</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">Chỉ áp dụng cho người thuê có điểm Uy tín ≥ 90 và eKYC Cấp 2.</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <!-- RentShare Care Protection Checkbox -->
                            <div class="p-space-md rounded-xl bg-secondary-container/30 flex items-start gap-3">
                                <input checked="" class="mt-1 w-4 h-4 rounded text-secondary focus:ring-0" id="escrow-care" type="checkbox" />
                                <div class="flex flex-col">
                                    <label class="font-label-md text-label-md text-on-secondary-container font-bold cursor-pointer" for="escrow-care">
                                        Bật gói Bảo hiểm tài sản RentShare Care (Khuyên dùng)
                                    </label>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                        Bảo hiểm rơi vỡ, chập cháy, hư hại linh kiện tự động đền bù tới <strong>50.000.000đ</strong>. Phí dịch vụ sàn chỉ 5% được trừ khi bạn nhận tiền hoàn tất đơn thuê.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 4: LỊCH TRỐNG & ĐỊA ĐIỂM BÀN GIAO -->
                        <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">4</span>
                                    <div>
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Lịch rảnh &amp; Địa điểm bàn giao</h2>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Chủ động thiết lập thời gian cho thuê và khu vực nhận máy thuận tiện</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Rental limits -->
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold">Thời gian thuê tối thiểu</label>
                                    <div class="p-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md flex items-center justify-between">
                                        <span>01 Ngày (24 giờ)</span>
                                        <span class="material-symbols-outlined text-[18px] text-on-surface-variant">schedule</span>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold">Thời gian thuê tối đa</label>
                                    <div class="p-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md flex items-center justify-between">
                                        <span>14 Ngày (Có thể gia hạn)</span>
                                        <span class="material-symbols-outlined text-[18px] text-on-surface-variant">event_repeat</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Interactive Calendar UI Simulation -->
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center justify-between">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold">Lịch khả dụng (Tháng 11 &amp; Tháng 12, 2025)</label>
                                    <div class="flex items-center gap-3 font-label-sm text-label-sm">
                                        <div class="flex items-center gap-1.5">
                                            <span class="w-3 h-3 rounded-sm bg-secondary-fixed"></span>
                                            <span class="text-on-surface">Lịch rảnh</span>
                                        </div>
                                        <div class="flex items-center gap-1.5">
                                            <span class="w-3 h-3 rounded-sm bg-surface-container-high"></span>
                                            <span class="text-on-surface-variant">Khóa lịch</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mini Calendar Widget -->
                                <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-2">
                                    <div class="grid grid-cols-7 text-center font-label-sm text-label-sm text-on-surface-variant py-1">
                                        <span>T2</span><span>T3</span><span>T4</span><span>T5</span><span>T6</span><span>T7</span><span>CN</span>
                                    </div>
                                    <div class="grid grid-cols-7 gap-1.5 text-center font-body-sm text-body-sm font-semibold">
                                        <!-- Row 1 -->
                                        <div class="py-2 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-secondary-fixed/50 cursor-pointer">10</div>
                                        <div class="py-2 rounded-lg bg-surface-container-lowest text-on-surface hover:bg-secondary-fixed/50 cursor-pointer">11</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">12</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">13</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">14</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">15</div>
                                        <div class="py-2 rounded-lg bg-surface-container-high text-on-surface-variant/70 cursor-not-allowed">16</div>
                                        <!-- Row 2 -->
                                        <div class="py-2 rounded-lg bg-surface-container-high text-on-surface-variant/70 cursor-not-allowed">17</div>
                                        <div class="py-2 rounded-lg bg-surface-container-high text-on-surface-variant/70 cursor-not-allowed">18</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">19</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">20</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">21</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">22</div>
                                        <div class="py-2 rounded-lg bg-secondary-fixed text-on-secondary-fixed font-bold shadow-xs cursor-pointer">23</div>
                                    </div>
                                    <p class="font-body-sm text-[12px] text-on-surface-variant mt-1 text-center">
                                        Nhấp vào từng ngày để bật/tắt lịch rảnh của bạn. Ngày 16-18 đã được khóa bận cá nhân.
                                    </p>
                                </div>
                            </div>
                            <!-- Pickup Address -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="pickup-address">
                                    Địa chỉ xem và nhận tài sản <span class="text-error">*</span>
                                </label>
                                <div class="relative flex items-center">
                                    <span class="material-symbols-outlined absolute left-3 text-secondary text-[20px]">location_on</span>
                                    <input class="w-full pl-10 pr-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all" id="pickup-address" type="text" value="45 Lê Duẩn, Phường Bến Nghé, Quận 1, TP. Hồ Chí Minh" />
                                </div>
                            </div>
                            <!-- Delivery Options -->
                            <div class="flex flex-col gap-2">
                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Phương thức bàn giao khả dụng</span>
                                <div class="flex flex-col gap-2">
                                    <label class="p-3 rounded-lg bg-surface-container-low flex items-center gap-3 cursor-pointer">
                                        <input checked="" class="w-4 h-4 rounded text-secondary focus:ring-0" type="checkbox" />
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Gặp trực tiếp đối chiếu CCCD &amp; Ký biên bản bàn giao số</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">Khuyên dùng để kiểm tra thực tế máy và phụ kiện trước khi nhận.</span>
                                        </div>
                                    </label>
                                    <label class="p-3 rounded-lg bg-surface-container-low flex items-center gap-3 cursor-pointer">
                                        <input checked="" class="w-4 h-4 rounded text-secondary focus:ring-0" type="checkbox" />
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Hỗ trợ giao hàng hỏa tốc (Ahamove / GrabExpress nội thành)</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">Khách tự chi trả phí ship, tài xế quay video đồng kiểm niêm phong RentShare.</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 5: QUY ĐỊNH THUÊ & HỦY ĐƠN -->
                        <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-space-sm">
                                    <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">5</span>
                                    <div>
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Quy định thuê đồ &amp; Chính sách hủy</h2>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Rõ ràng ngay từ đầu giúp giao dịch minh bạch, tránh tranh chấp phát sinh</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Usage Rules -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="rules-input">Quy định sử dụng tài sản</label>
                                <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all leading-relaxed" id="rules-input" rows="3">- Tuyệt đối không quay chụp dưới mưa hoặc môi trường cát biển mặn mà không có bao chống nước chuyên dụng.
- Không tự ý tháo mở lens ở môi trường nhiều gió bụi bẩn để bảo vệ cảm biến full-frame.
- Hoàn trả thiết bị đúng giờ đã hẹn. Phạt 100.000đ/giờ nếu trễ hẹn không báo trước 3 tiếng.</textarea>
                            </div>
                            <!-- Cancellation Policy -->
                            <div class="flex flex-col gap-2">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold">Chính sách hủy đơn của bạn</label>
                                <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                                    <div class="flex items-start gap-3">
                                        <span class="material-symbols-outlined text-secondary text-[24px] mt-0.5">published_with_changes</span>
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-bold">Chính sách Linh hoạt (Khuyên dùng)</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">
                                                Người thuê được hủy miễn phí trước giờ nhận đồ 24h. Hủy sau 24h đền bù 50% tiền thuê ngày đầu cho chủ máy.
                                            </span>
                                        </div>
                                    </div>
                                    <button class="px-space-md py-2 rounded-lg bg-surface-container-lowest text-on-surface font-label-sm text-label-sm font-semibold hover:bg-surface-container-high transition-colors whitespace-nowrap self-start sm:self-auto shadow-xs" type="button">
                                        Thay đổi
                                    </button>
                                </div>
                            </div>
                            <!-- Agreement Note -->
                            <div class="flex items-start gap-3 pt-space-xs">
                                <input checked="" class="mt-1 w-4 h-4 rounded text-secondary focus:ring-0" id="terms-agree" type="checkbox" />
                                <label class="font-body-sm text-body-sm text-on-surface-variant" for="terms-agree">
                                    Tôi cam kết là chủ sở hữu hợp pháp hoặc có toàn quyền ủy thác cho thuê tài sản này. Tôi đã đọc và đồng ý với
                                    <a class="text-secondary font-semibold hover:underline" href="#">Quy chế hoạt động Escrow</a> và <a class="text-secondary font-semibold hover:underline" href="#">Chính sách bồi thường tài sản RentShare</a>.
                                </label>
                            </div>
                        </div>
                        <!-- ACTION FOOTER BAR -->
                        <div class="sticky bottom-4 z-30 p-space-md rounded-xl bg-surface-container-lowest shadow-[0_10px_25px_-5px_rgba(15,23,42,0.15)] flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                            <div class="flex items-center gap-space-sm">
                                <button class="px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface-variant font-label-lg text-label-lg hover:bg-surface-container hover:text-on-surface transition-colors" type="button">
                                    Hủy bỏ
                                </button>
                                <button class="px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-label-lg text-label-lg hover:bg-surface-container transition-colors flex items-center gap-1.5" type="button">
                                    <span class="material-symbols-outlined text-[18px]">bookmark</span>
                                    <span>Lưu bản nháp</span>
                                </button>
                            </div>
                            <div class="flex items-center gap-space-sm">
                                <button class="px-space-md py-2.5 rounded-lg bg-surface-container-high text-on-surface font-label-lg text-label-lg hover:bg-surface-container-highest transition-colors flex items-center gap-1.5" type="button">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    <span>Xem trước</span>
                                </button>
                                <button class="px-space-lg py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container hover:text-on-primary-container transition-all shadow-md flex items-center gap-2" type="button">
                                    <span class="material-symbols-outlined text-[18px] text-secondary-container">rocket_launch</span>
                                    <span class="font-bold">Đăng tài sản ngay</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- RIGHT COLUMN: STICKY CONTEXTUAL SIDEBAR (4 cols) -->
                    <aside class="lg:col-span-4 flex flex-col gap-space-lg lg:sticky lg:top-24">
                        <!-- CARD 1: LIVE LISTING CARD PREVIEW -->
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-md flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></span>
                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Xem trước thẻ hiển thị</span>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary bg-surface-container-highest px-2 py-0.5 rounded-full font-semibold">Live Preview</span>
                            </div>
                            <!-- The Real Simulated Listing Card -->
                            <div class="rounded-xl overflow-hidden bg-surface-container-lowest shadow-sm flex flex-col group">
                                <!-- 4:3 Image Preview with Badges -->
                                <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Sony Alpha A7 Mark IV camera with high end zoom lens centered in aesthetic minimalist lighting, pristine gear preview for peer to peer rental marketplace" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD__LhuPJ8mV96gqPnlSkn6h3prFUzyEWqGXcZVMFRwNqE62WzpEejUfWMDKOZN71H8JZtvt79YnNecVVxRSFjwp5S6qha-pya9afpiZTktGoTvYL61XdUzcDDYrqZORO7ULOLruUUD2F2ynXO4av8oBLWi7jOtxWEEESElu05d4dyhJuGwVP3_4o4QWiY8HkQO5Ljd8m1yH_XKF1qpP-kaYLH3dqPOgul2KvAozcqNwqMuEDXhtdw" />
                                    <div class="absolute top-2.5 left-2.5 flex items-center gap-1.5">
                                        <span class="bg-surface/90 backdrop-blur-md px-2 py-0.5 rounded-md font-label-sm text-[11px] font-bold text-on-surface flex items-center gap-1 shadow-xs">
                                            <span class="material-symbols-outlined text-[14px] text-secondary">verified</span> Xác thực
                                        </span>
                                        <span class="bg-secondary-fixed text-on-secondary-fixed-variant px-2 py-0.5 rounded-md font-label-sm text-[11px] font-bold shadow-xs">
                                            Like New 99%
                                        </span>
                                    </div>
                                    <button aria-label="Yêu thích" class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-surface/80 backdrop-blur-md text-on-surface flex items-center justify-center hover:bg-surface transition-colors shadow-xs" type="button">
                                        <span class="material-symbols-outlined text-[18px]">favorite</span>
                                    </button>
                                </div>
                                <!-- Card Content -->
                                <div class="p-space-md flex flex-col gap-space-xs">
                                    <!-- Location & Rating -->
                                    <div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant">
                                        <span class="flex items-center gap-1 truncate max-w-[160px]">
                                            <span class="material-symbols-outlined text-[15px] text-secondary">location_on</span>
                                            Q.1, TP. Hồ Chí Minh
                                        </span>
                                        <span class="flex items-center gap-1 font-bold text-on-surface">
                                            <span class="material-symbols-outlined text-[15px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                                            5.0 <span class="text-on-surface-variant font-normal">(Mới)</span>
                                        </span>
                                    </div>
                                    <!-- Title -->
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold line-clamp-2 leading-snug">
                                        Máy ảnh Sony Alpha A7 Mark IV (Kèm Lens FE 24-70mm F2.8 GM)
                                    </h3>
                                    <!-- Price & Escrow row -->
                                    <div class="pt-2 flex items-baseline justify-between">
                                        <div>
                                            <span class="font-headline-md text-headline-md text-primary font-bold">450.000 đ</span>
                                            <span class="font-body-sm text-[12px] text-on-surface-variant">/ngày</span>
                                        </div>
                                        <div class="text-right">
                                            <span class="font-label-sm text-[11px] text-on-surface-variant block">Ký quỹ Escrow</span>
                                            <span class="font-label-sm text-label-sm text-secondary font-bold">3.000.000 đ</span>
                                        </div>
                                    </div>
                                    <!-- Owner footer strip -->
                                    <div class="mt-2 pt-2 bg-surface-container-low p-2 rounded-lg flex items-center justify-between">
                                        <div class="flex items-center gap-2">
                                            <div class="w-7 h-7 rounded-full bg-primary flex items-center justify-center text-on-primary font-label-sm text-[11px] font-bold">
                                                MT
                                            </div>
                                            <span class="font-label-sm text-label-sm text-on-surface font-semibold">Nguyễn Minh Tuấn</span>
                                        </div>
                                        <div class="flex items-center gap-1 font-label-sm text-[11px] text-secondary bg-surface-container-lowest px-2 py-0.5 rounded-full font-bold shadow-xs">
                                            <span class="material-symbols-outlined text-[13px]">shield</span>
                                            98/100
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CARD 2: TIPS FOR ATTRACTING RENTERS & LEGAL COMPLIANCE -->
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col gap-space-sm">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary text-[22px]">lightbulb</span>
                                <h4 class="font-label-lg text-label-lg text-on-surface font-bold">Mẹo thu hút khách &amp; chuẩn pháp lý</h4>
                            </div>
                            <div class="flex flex-col gap-space-sm pt-1">
                                <div class="flex items-start gap-2.5">
                                    <span class="w-5 h-5 rounded-full bg-surface-container text-secondary flex items-center justify-center font-label-sm text-[11px] font-bold mt-0.5 flex-shrink-0">1</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        <strong>Chụp rõ 4-6 góc máy:</strong> Ảnh chi tiết vết trầy cũ là bằng chứng xác thực 100% giúp đối soát Escrow không mất phí giải trình khi nhận lại.
                                    </p>
                                </div>
                                <div class="flex items-start gap-2.5">
                                    <span class="w-5 h-5 rounded-full bg-surface-container text-secondary flex items-center justify-center font-label-sm text-[11px] font-bold mt-0.5 flex-shrink-0">2</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        <strong>Liệt kê chi tiết phụ kiện:</strong> Ghi rõ số lượng pin, sạc, thẻ nhớ giúp khách thuê yên tâm bấm đặt lịch ngay mà không cần nhắn tin hỏi lại.
                                    </p>
                                </div>
                                <div class="flex items-start gap-2.5">
                                    <span class="w-5 h-5 rounded-full bg-surface-container text-secondary flex items-center justify-center font-label-sm text-[11px] font-bold mt-0.5 flex-shrink-0">3</span>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        <strong>Giá mở đầu cạnh tranh:</strong> Đặt giá thấp hơn thị trường 10-15% trong 3 lượt thuê đầu tiên để thu thập đánh giá 5 sao nhanh nhất.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- CARD 3: ESCROW SHIELD COMMITMENT -->
                        <div class="bg-surface-container-high p-space-md rounded-xl shadow-sm flex flex-col gap-space-sm">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary text-[24px]">gavel</span>
                                <h4 class="font-label-lg text-label-lg text-on-surface font-bold">Cam kết RentShare Shield</h4>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Tiền cọc của người thuê được phong tỏa trong tài khoản tín thác độc lập tại ngân hàng đối tác. Sau khi bạn xác nhận biên bản hoàn trả không khiếu nại, tiền thuê sẽ lập tức giải ngân về ví tài khoản của bạn.
                            </p>
                            <div class="pt-2 flex items-center justify-between text-on-surface font-label-sm text-label-sm">
                                <span class="font-semibold text-secondary">Hỗ trợ đối soát 24/7</span>
                                <a class="text-on-surface underline hover:text-secondary" href="#">Tìm hiểu quy trình →</a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
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