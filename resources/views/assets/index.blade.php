<!DOCTYPE html>

<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
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
                        "error": "#ba1a1a",
                        "tertiary": "#000000",
                        "outline": "#76777d",
                        "on-primary-fixed": "#131b2e",
                        "secondary-fixed-dim": "#6bd8cb",
                        "primary-fixed-dim": "#bec6e0",
                        "surface-variant": "#d3e4fe",
                        "on-error-container": "#93000a",
                        "surface-container": "#e5eeff",
                        "primary": "#000000",
                        "surface-container-low": "#eff4ff",
                        "on-primary-fixed-variant": "#3f465c",
                        "tertiary-container": "#2a1700",
                        "secondary-container": "#86f2e4",
                        "on-surface": "#0b1c30",
                        "surface-dim": "#cbdbf5",
                        "on-error": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "on-tertiary-fixed": "#2a1700",
                        "on-secondary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-primary-container": "#7c839b",
                        "on-secondary-fixed-variant": "#005049",
                        "background": "#f8f9ff",
                        "on-tertiary-fixed-variant": "#653e00",
                        "inverse-surface": "#213145",
                        "on-surface-variant": "#45464d",
                        "surface": "#f8f9ff",
                        "on-primary": "#ffffff",
                        "surface-container-high": "#dce9ff",
                        "on-background": "#0b1c30",
                        "tertiary-fixed-dim": "#ffb95f",
                        "tertiary-fixed": "#ffddb8",
                        "secondary-fixed": "#89f5e7",
                        "on-secondary-fixed": "#00201d",
                        "surface-bright": "#f8f9ff",
                        "on-secondary-container": "#006f66",
                        "on-tertiary-container": "#b87500",
                        "inverse-on-surface": "#eaf1ff",
                        "error-container": "#ffdad6",
                        "surface-tint": "#565e74",
                        "surface-container-highest": "#d3e4fe",
                        "secondary": "#006a61",
                        "primary-container": "#131b2e",
                        "inverse-primary": "#bec6e0",
                        "primary-fixed": "#dae2fd",
                        "outline-variant": "#c6c6cd"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "1.5rem",
                        "space-xl": "2.5rem",
                        "space-lg": "1.5rem",
                        "margin-mobile": "1rem",
                        "space-sm": "0.5rem",
                        "space-xs": "0.25rem",
                        "gutter-mobile": "1rem",
                        "space-md": "1rem",
                        "margin": "2rem"
                    },
                    "fontFamily": {
                        "headline-sm": ["Plus Jakarta Sans"],
                        "headline-xl": ["Plus Jakarta Sans"],
                        "headline-xl-mobile": ["Plus Jakarta Sans"],
                        "body-sm": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-md": ["Inter"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "label-lg": ["Inter"],
                        "label-sm": ["Inter"]
                    },
                    "fontSize": {
                        "headline-sm": ["18px", {
                            "lineHeight": "26px",
                            "letterSpacing": "-0.005em",
                            "fontWeight": "600"
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
                        "body-sm": ["13px", {
                            "lineHeight": "18px",
                            "letterSpacing": "0.005em",
                            "fontWeight": "400"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.02em",
                            "fontWeight": "500"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "letterSpacing": "0em",
                            "fontWeight": "400"
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
                        "label-lg": ["14px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.01em",
                            "fontWeight": "600"
                        }],
                        "label-sm": ["11px", {
                            "lineHeight": "14px",
                            "letterSpacing": "0.04em",
                            "fontWeight": "600"
                        }]
                    }
                }
            }
        };
    </script>
</head>

<body class="bg-surface font-body-md text-on-surface antialiased">
    <header class="fixed top-0 left-0 w-full z-50 bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-16 max-w-7xl mx-auto px-gutter flex items-center justify-between gap-space-md">
            <div class="flex items-center gap-space-lg"><a class="flex items-center gap-space-sm focus:outline-none" data-path="kham-pha" href="#"><img alt="RentShare Brand Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1VWoRtpvK-gkM-NNbLB6TQLyGcUhbTnXoaxWL-7rM8duuYAbAPYnbKGQA2C48vPuAdsfi6v60RtKhHUrOP8TZGlIXKRA906O_gQ0CSYgct1iSAuJrUlmdtdx7ClaaWGqSuSuu9coQ-CRaoqlHn-5ufJGUOqnYdutyBh3swBZ-hxMpGZGo_gWUxRIdrSoMcGWQVzZ5R2KC_oTOlXpJBTqHQevgHRGLMI-hQX7TbURmLsfrsjGiJK-sZsQQ" /><span class="font-headline-sm text-headline-sm text-on-surface tracking-tight">RentShare</span></a>
                <nav class="hidden xl:flex items-center gap-space-md" data-active-classes="text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg"><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="kham-pha" href="#">Khám phá</a><a aria-current="page" class="transition-colors text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg" data-path="danh-sach-tai-san" href="#">Danh sách tài sản</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors inline-flex items-center gap-1.5" data-path="yeu-cau-thue" href="#"><span>Yêu cầu thuê</span><span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-1.5 py-0.5 rounded-full">Mới</span></a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="don-thue-cua-toi" href="#">Đơn thuê của tôi</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors inline-flex items-center gap-1.5" data-path="tin-nhan" href="#"><span>Tin nhắn</span><span class="bg-secondary text-on-secondary font-label-sm text-label-sm w-4 h-4 rounded-full flex items-center justify-center text-[10px]">2</span></a></nav>
            </div>
            <div class="flex items-center gap-space-sm md:gap-space-md">
                <div class="relative group"><button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg px-space-md py-space-xs h-9 rounded-lg flex items-center gap-1.5 shadow-[0_1px_4px_rgba(0,0,0,0.08)] transition-all cursor-pointer" type="button"><span>+ Đăng tin</span><span class="material-symbols-outlined text-[18px]">expand_more</span></button>
                    <div class="absolute right-0 top-full pt-2 w-72 hidden group-hover:block transition-all duration-150 z-50">
                        <div class="bg-surface-container-lowest rounded-xl p-space-xs shadow-[0_10px_25px_-5px_rgba(11,28,48,0.12)] border border-surface-container-high"><a class="flex items-start gap-3 p-space-sm rounded-lg hover:bg-surface-container-low transition-colors" data-path="dang-cho-thue" href="#">
                                <div class="p-1.5 bg-surface-container rounded-md text-secondary"><span class="material-symbols-outlined text-lg">storefront</span></div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-surface">1. Đăng cho thuê tài sản</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Tôi có đồ dùng muốn cho thuê</p>
                                </div>
                            </a><a class="flex items-start gap-3 p-space-sm rounded-lg hover:bg-surface-container-low transition-colors" data-path="dang-tim-thue" href="#">
                                <div class="p-1.5 bg-secondary-container rounded-md text-on-secondary-container"><span class="material-symbols-outlined text-lg">search_check</span></div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-surface">2. Đăng tìm thuê tài sản</p>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Tôi cần thuê món đồ cụ thể</p>
                                </div>
                            </a></div>
                    </div>
                </div><a class="relative p-2 rounded-full hover:bg-surface-container-low text-on-surface-variant hover:text-on-surface transition-colors" data-path="thong-bao" href="#"><span class="material-symbols-outlined text-[22px]">notifications</span><span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-error ring-2 ring-surface"></span></a>
                <div class="relative group"><button class="flex items-center gap-2 pl-2 pr-1 py-1 rounded-full hover:bg-surface-container-low transition-all focus:outline-none" type="button">
                        <div class="hidden md:flex flex-col text-right"><span class="font-label-lg text-label-lg text-on-surface leading-tight">Minh Tuấn</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Uy tín 98/100</span></div><img alt="Profile" class="w-8 h-8 rounded-full object-cover ring-1 ring-surface-container-high" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2NN35lNpfGKcI8dXstQlMb0S7QSyFLtAX7ukuI4lsSCtRhN308LIYTZBeZfMDLZwkwD5QhA-QC4CmPedmPAqf6D-wjc1QDKmGgmffvONXxa082xqJfcprdDXOcbu-iw2CX7CWEsts53WTdAqCNt0rqLPdZ5Sh4imC4aFw-fwbdrMFiMXrRr3peQM7hmZdRf4ybA2wkDC1kIGh9lrDCJXYYuveHFJ6rauMkZaXIDOGUHMmNwuAP5E" />
                    </button>
                    <div class="absolute right-0 top-full pt-2 w-56 hidden group-hover:block transition-all duration-150 z-50">
                        <div class="bg-surface-container-lowest rounded-xl p-space-xs shadow-[0_10px_25px_-5px_rgba(11,28,48,0.12)] border border-surface-container-high">
                            <div class="px-space-sm py-2 border-b border-surface-container-high mb-1">
                                <p class="font-label-lg text-label-lg text-on-surface">Minh Tuấn</p>
                                <div class="flex items-center gap-1.5 mt-0.5"><span class="material-symbols-outlined text-[14px] text-secondary">verified_user</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Điểm tín nhiệm: 98/100</span></div>
                            </div><a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" data-path="trang-ca-nhan" href="#"><span class="material-symbols-outlined text-[18px]">person</span><span>Trang cá nhân</span></a><a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" data-path="cai-dat" href="#"><span class="material-symbols-outlined text-[18px]">settings</span><span>Cài đặt tài khoản</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="w-full pt-16 bg-surface min-h-[calc(100vh-16rem)]">
        <div class="flex flex-col w-full">
            <!-- Sub-header Breadcrumb & Quick Filter Summary -->
            <div class="w-full bg-surface-container-low py-space-sm px-gutter">
                <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-space-sm">
                    <div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md">
                        <a class="hover:text-primary transition-colors flex items-center gap-1" href="#">
                            <span class="material-symbols-outlined text-[16px]">home</span>
                            Trang chủ
                        </a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-on-surface font-semibold">Danh sách tài sản cho thuê</span>
                    </div>
                    <!-- Quick Safety Escrow Pill -->
                    <div class="flex items-center gap-2 bg-surface-container-lowest px-3 py-1 rounded-full shadow-sm text-secondary font-label-md text-label-md">
                        <span class="material-symbols-outlined text-[16px] text-secondary">verified_user</span>
                        <span>Hợp đồng điện tử &amp; Ký quỹ cọc RentShare Escrow 100% minh bạch</span>
                    </div>
                </div>
            </div>
            <!-- Main Content Container with 2-Column Professional Architecture -->
            <div class="max-w-7xl mx-auto w-full px-gutter py-space-lg">
                <div class="flex flex-col lg:flex-row items-start gap-space-lg">
                    <!-- ================= LEFT COLUMN: ADVANCED FILTER SIDEBAR (280px / 300px) ================= -->
                    <aside class="w-full lg:w-[290px] shrink-0 flex flex-col gap-space-md">
                        <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-md">
                            <!-- Filter Header & Reset -->
                            <div class="flex items-center justify-between pb-space-xs">
                                <div class="flex items-center gap-1.5 text-on-surface font-headline-sm text-headline-sm">
                                    <span class="material-symbols-outlined text-secondary">tune</span>
                                    <span>Bộ lọc tìm kiếm</span>
                                </div>
                                <button class="text-on-surface-variant hover:text-error font-label-sm text-label-sm underline transition-colors cursor-pointer" type="button">
                                    Đặt lại
                                </button>
                            </div>
                            <!-- Section: Categories -->
                            <div class="flex flex-col gap-2 pt-2">
                                <span class="font-label-lg text-label-lg text-on-surface flex items-center justify-between">
                                    <span>Danh mục tài sản</span>
                                    <span class="text-secondary font-label-sm text-label-sm bg-secondary-container/40 px-1.5 py-0.5 rounded-full">Tất cả</span>
                                </span>
                                <div class="flex flex-col gap-2 mt-1 font-body-md text-body-md text-on-surface">
                                    <label class="flex items-center justify-between cursor-pointer group">
                                        <span class="flex items-center gap-2">
                                            <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0 cursor-pointer" type="checkbox" />
                                            <span class="group-hover:text-secondary transition-colors">Xe máy &amp; Phương tiện</span>
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-2 py-0.5 rounded-full">48</span>
                                    </label>
                                    <label class="flex items-center justify-between cursor-pointer group">
                                        <span class="flex items-center gap-2">
                                            <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0 cursor-pointer" type="checkbox" />
                                            <span class="group-hover:text-secondary transition-colors">Máy ảnh &amp; Thiết bị số</span>
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-2 py-0.5 rounded-full">34</span>
                                    </label>
                                    <label class="flex items-center justify-between cursor-pointer group">
                                        <span class="flex items-center gap-2">
                                            <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0 cursor-pointer" type="checkbox" />
                                            <span class="group-hover:text-secondary transition-colors">Đồ cắm trại &amp; Dã ngoại</span>
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-2 py-0.5 rounded-full">26</span>
                                    </label>
                                    <label class="flex items-center justify-between cursor-pointer group">
                                        <span class="flex items-center gap-2">
                                            <input class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0 cursor-pointer" type="checkbox" />
                                            <span class="group-hover:text-secondary transition-colors">Dụng cụ &amp; Thiết bị DIY</span>
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-2 py-0.5 rounded-full">12</span>
                                    </label>
                                    <label class="flex items-center justify-between cursor-pointer group">
                                        <span class="flex items-center gap-2">
                                            <input class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0 cursor-pointer" type="checkbox" />
                                            <span class="group-hover:text-secondary transition-colors">Trang phục sự kiện</span>
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant bg-surface-container-low px-2 py-0.5 rounded-full">8</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Section: Location & Radius -->
                            <div class="flex flex-col gap-2 pt-2">
                                <span class="font-label-lg text-label-lg text-on-surface">Khu vực / Địa điểm</span>
                                <div class="relative">
                                    <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-on-surface-variant text-[18px]">location_on</span>
                                    <select class="w-full pl-8 pr-3 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-md appearance-none focus:outline-none focus:bg-surface-container cursor-pointer">
                                        <option value="all">Toàn bộ TP. Hồ Chí Minh</option>
                                        <option value="q1">Quận 1, TP.HCM</option>
                                        <option value="q3">Quận 3, TP.HCM</option>
                                        <option value="bt">Bình Thạnh, TP.HCM</option>
                                        <option value="td">TP. Thủ Đức</option>
                                        <option value="hn">Hà Nội (Tất cả quận)</option>
                                        <option value="dn">Đà Nẵng (Hải Châu, Sơn Trà)</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-2.5 top-2.5 text-on-surface-variant text-[18px] pointer-events-none">expand_more</span>
                                </div>
                                <!-- Radius slider indicator -->
                                <div class="bg-surface-container-low p-2 rounded-lg flex items-center justify-between">
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Bán kính giao nhận</span>
                                    <span class="font-label-md text-label-md text-secondary font-bold">Dưới 10 km</span>
                                </div>
                            </div>
                            <!-- Section: Rental Date Window -->
                            <div class="flex flex-col gap-2 pt-2">
                                <span class="font-label-lg text-label-lg text-on-surface">Thời gian thuê</span>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="bg-surface-container-low p-2 rounded-lg flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Bắt đầu</span>
                                        <span class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px] text-secondary">calendar_today</span>
                                            Hôm nay
                                        </span>
                                    </div>
                                    <div class="bg-surface-container-low p-2 rounded-lg flex flex-col">
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Trả đồ</span>
                                        <span class="font-label-md text-label-md text-on-surface font-semibold flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px] text-secondary">event_repeat</span>
                                            +3 Ngày
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Section: Daily Rental Price -->
                            <div class="flex flex-col gap-2 pt-2">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-lg text-label-lg text-on-surface">Giá thuê / ngày</span>
                                    <span class="font-label-sm text-label-sm text-secondary font-bold">100k - 800k</span>
                                </div>
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="relative">
                                        <input class="w-full px-2.5 py-1.5 bg-surface-container-low rounded-lg text-on-surface font-label-md text-label-md focus:outline-none" placeholder="Từ VND" type="text" value="100.000" />
                                        <span class="absolute right-2 top-2 text-[10px] text-on-surface-variant">đ</span>
                                    </div>
                                    <div class="relative">
                                        <input class="w-full px-2.5 py-1.5 bg-surface-container-low rounded-lg text-on-surface font-label-md text-label-md focus:outline-none" placeholder="Đến VND" type="text" value="800.000" />
                                        <span class="absolute right-2 top-2 text-[10px] text-on-surface-variant">đ</span>
                                    </div>
                                </div>
                                <!-- Custom CSS Visual Range Bar -->
                                <div class="w-full bg-surface-container rounded-full h-1.5 relative my-1">
                                    <div class="absolute left-1/6 right-1/4 bg-secondary h-1.5 rounded-full"></div>
                                </div>
                            </div>
                            <!-- Section: Deposit Policy -->
                            <div class="flex flex-col gap-2 pt-2">
                                <span class="font-label-lg text-label-lg text-on-surface">Mức ký quỹ &amp; Tiền cọc</span>
                                <div class="flex flex-col gap-1.5 font-body-sm text-body-sm text-on-surface">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                                        <span>Không cần cọc tiền mặt (Giữ CCCD)</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                                        <span>Cọc thấp (Dưới 1.000.000đ)</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                                        <span>Cọc tiêu chuẩn (1.000.000đ - 3.000.000đ)</span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                                        <span>Tài sản giá trị cao (Trên 5.000.000đ)</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Section: Host Verification & Rating -->
                            <div class="flex flex-col gap-2 pt-2">
                                <span class="font-label-lg text-label-lg text-on-surface">Độ tin cậy chủ tài sản</span>
                                <div class="flex flex-col gap-2 font-body-sm text-body-sm text-on-surface">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                                        <span class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                                            <span>Đã xác minh eKYC / CCCD chip</span>
                                        </span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                                        <span class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[#F59E0B] text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span>Chủ nhà 4.8 sao trở lên</span>
                                        </span>
                                    </label>
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                                        <span class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-secondary text-[16px]">bolt</span>
                                            <span>Phê duyệt tức thì (&lt;15 phút)</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <!-- Filter Action Buttons -->
                            <div class="flex flex-col gap-2 pt-space-xs">
                                <button class="w-full bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-2.5 rounded-lg shadow-sm transition-all flex items-center justify-center gap-2 cursor-pointer" type="button">
                                    <span class="material-symbols-outlined text-[18px]">search</span>
                                    <span>Áp dụng bộ lọc (128)</span>
                                </button>
                            </div>
                        </div>
                        <!-- Trust Escrow Guarantee Widget in Sidebar -->
                        <div class="bg-surface-container rounded-xl p-space-md flex flex-col gap-2">
                            <div class="flex items-center gap-2 text-secondary">
                                <span class="material-symbols-outlined text-2xl">shield_with_heart</span>
                                <span class="font-headline-sm text-headline-sm text-on-surface">RentShare Escrow</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                Tiền thuê và tiền cọc được giữ an toàn tại tài khoản trung gian của RentShare. Chủ đồ chỉ nhận thanh toán khi bạn đã nhận và kiểm tra tài sản nguyên vẹn.
                            </p>
                            <a class="text-secondary font-label-sm text-label-sm font-semibold flex items-center gap-1 hover:underline mt-1" href="#">
                                Tìm hiểu chính sách bồi thường 100%
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </a>
                        </div>
                    </aside>
                    <!-- ================= RIGHT COLUMN: ASSET RESULTS & TOOLBAR ================= -->
                    <section class="flex-1 w-full flex flex-col gap-space-md">
                        <!-- Header Toolbar: Count, Sorters, View Toggles -->
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-space-md">
                            <div class="flex flex-col">
                                <h1 class="font-headline-md text-headline-md text-on-surface tracking-tight">
                                    Tài sản đang sẵn sàng cho thuê
                                </h1>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    Tìm thấy <strong class="text-on-surface font-semibold">128</strong> món đồ được chứng thực quanh khu vực của bạn
                                </p>
                            </div>
                            <!-- Sort Bar & View Switcher -->
                            <div class="flex items-center gap-space-sm flex-wrap">
                                <div class="flex items-center gap-2 bg-surface-container-low px-3 py-1.5 rounded-lg">
                                    <span class="material-symbols-outlined text-[18px] text-on-surface-variant">sort</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant hidden sm:inline">Sắp xếp:</span>
                                    <select class="bg-transparent font-label-md text-label-md text-on-surface font-semibold focus:outline-none cursor-pointer">
                                        <option value="relevant">Phù hợp nhất</option>
                                        <option value="most_rented">Thuê nhiều nhất</option>
                                        <option value="rating">Đánh giá cao nhất</option>
                                        <option value="price_asc">Giá thuê: Thấp đến Cao</option>
                                        <option value="price_desc">Giá thuê: Cao đến Thấp</option>
                                        <option value="nearby">Gần tôi nhất (Khoảng cách)</option>
                                        <option value="latest">Mới đăng gần đây</option>
                                    </select>
                                </div>
                                <!-- View Layout Segmented Control -->
                                <div class="flex items-center bg-surface-container-low p-1 rounded-lg">
                                    <button class="p-1.5 rounded bg-surface-container-lowest text-on-surface shadow-xs cursor-pointer" title="Xem dạng lưới" type="button">
                                        <span class="material-symbols-outlined text-[18px]">grid_view</span>
                                    </button>
                                    <button class="p-1.5 rounded text-on-surface-variant hover:text-on-surface cursor-pointer" title="Xem danh sách" type="button">
                                        <span class="material-symbols-outlined text-[18px]">view_list</span>
                                    </button>
                                    <button class="p-1.5 rounded text-on-surface-variant hover:text-on-surface cursor-pointer" title="Xem trên bản đồ" type="button">
                                        <span class="material-symbols-outlined text-[18px]">map</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Selected Filter Tags Quick Bar -->
                        <div class="flex items-center gap-2 flex-wrap text-label-sm font-label-sm">
                            <span class="text-on-surface-variant">Đang lọc theo:</span>
                            <span class="inline-flex items-center gap-1 bg-surface-container-high px-2.5 py-1 rounded-full text-on-surface">
                                <span>TP. Hồ Chí Minh</span>
                                <button class="material-symbols-outlined text-[14px] hover:text-error">close</button>
                            </span>
                            <span class="inline-flex items-center gap-1 bg-surface-container-high px-2.5 py-1 rounded-full text-on-surface">
                                <span>Dưới 800.000đ/ngày</span>
                                <button class="material-symbols-outlined text-[14px] hover:text-error">close</button>
                            </span>
                            <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container px-2.5 py-1 rounded-full">
                                <span>Đã eKYC</span>
                                <button class="material-symbols-outlined text-[14px] hover:text-error">close</button>
                            </span>
                            <button class="text-secondary hover:underline font-semibold ml-1">Xóa tất cả bộ lọc</button>
                        </div>
                        <!-- ================= ASSET CARDS GRID (3 Columns Desktop) ================= -->
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-space-md">
                            <!-- Asset Card 1: Scooter (Inspired by Image 1) -->
                            <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                                <!-- Media container -->
                                <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="A stylish modern Piaggio Vespa scooter in metallic titanium grey parked gracefully along a sunlit urban European street sidewalk with warm architectural facades in the background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZCgi3YTNp0pwKlhj_7-2VWsVcopig_-2-kDdekQGrBTihCWsIJHFdhvQrewpnIJHf5ApNACVEGP45z4T-Pq5cfnowuvJuLfoUdA5v__5mEnU0wTaKklkJujrWoc3Yt_sL_k9pH3I1aokyLaW6ymPIOOv_3r-_1Hp7nggKrhqmx42Scz4LZs9B4tC5IzR-w9BwYL0SWwvlF7rUQksTjm3SNXYxdlSJeN9BcsF2SnEt07RbK2INcek" />
                                    <!-- Badges Over Media -->
                                    <div class="absolute top-2.5 left-2.5 flex flex-col gap-1 items-start">
                                        <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                                            <span class="material-symbols-outlined text-[13px]">electric_moped</span>
                                            Phương tiện
                                        </span>
                                        <span class="bg-secondary text-on-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full shadow-xs">
                                            Sẵn sàng ngay
                                        </span>
                                    </div>
                                    <!-- Favorite Heart Button -->
                                    <button class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface-variant hover:text-error flex items-center justify-center transition-colors shadow-xs cursor-pointer" type="button">
                                        <span class="material-symbols-outlined text-[18px]">favorite</span>
                                    </button>
                                    <!-- Condition Tag Bottom Media -->
                                    <div class="absolute bottom-2 left-2.5">
                                        <span class="bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded">
                                            Tình trạng: Mới 98%
                                        </span>
                                    </div>
                                </div>
                                <!-- Content Area -->
                                <div class="p-space-md flex-1 flex flex-col justify-between gap-space-sm">
                                    <div class="flex flex-col gap-1">
                                        <!-- Location & Distance -->
                                        <div class="flex items-center justify-between text-on-surface-variant font-label-md text-label-md">
                                            <span class="flex items-center gap-1 truncate">
                                                <span class="material-symbols-outlined text-[15px] text-secondary">location_on</span>
                                                Quận 1, TP. Hồ Chí Minh
                                            </span>
                                            <span class="shrink-0 text-on-surface font-medium">Cách 2.4 km</span>
                                        </div>
                                        <!-- Asset Title -->
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mt-1">
                                            Vespa Primavera 125cc ABS 2023
                                        </h3>
                                        <!-- Ratings & Usage Stats -->
                                        <div class="flex items-center gap-2 font-label-sm text-label-sm mt-0.5">
                                            <span class="flex items-center gap-0.5 text-on-surface font-bold">
                                                <span class="material-symbols-outlined text-[#F59E0B] text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                4.9
                                            </span>
                                            <span class="text-on-surface-variant">(42 lượt thuê thành công)</span>
                                        </div>
                                    </div>
                                    <!-- Pricing & Deposit Clarification -->
                                    <div class="pt-2 bg-surface-container-low p-2.5 rounded-lg flex flex-col gap-1">
                                        <div class="flex items-baseline justify-between">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Giá thuê ngày:</span>
                                            <div class="text-right">
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold text-primary">280.000đ</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">/ ngày</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between text-label-sm font-label-sm">
                                            <span class="text-on-surface-variant">Ký quỹ cọc:</span>
                                            <span class="text-secondary font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[13px]">verified</span>
                                                Chỉ cần giữ CCCD gốc
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Owner Verification Footer & Action -->
                                    <div class="pt-2 flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <div class="relative shrink-0">
                                                <img class="w-8 h-8 rounded-full object-cover" data-alt="Portrait photo of a friendly verified Vietnamese male owner in mid 20s smiling with clean bright lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnZ-hsZBTEr6YYGM9MDVzVDqSwLaUG227hM6po8OrhaZnwLHCigtb3Vw--522w_gNTwIn8unvPiuwoxb7ujGpXJfFdDsIgBRKQAWM39n9cr1DXpykf3E_EsHNw4KI5yGy8fCDsFRiDkU4nARcqbRjHrhu8e8vuv3ay-jh4tWSg52AIE47i7RZtrgSgvHUCr0uay_a3uRCYFK_jIemLE5l4jla-zkx_Z2acVOQssZ7xuFlcCrtQQAQ" />
                                                <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-secondary rounded-full flex items-center justify-center text-on-secondary text-[8px] font-bold">✓</span>
                                            </div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md text-on-surface truncate font-semibold">Trần Hoàng Long</span>
                                                <span class="font-label-sm text-label-sm text-secondary">Tín nhiệm: 99/100</span>
                                            </div>
                                        </div>
                                        <a class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-md px-3 py-1.5 rounded-lg transition-all shadow-xs" href="#">
                                            Thuê ngay
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <!-- Asset Card 2: Camera Gear (Inspired by Image 2) -->
                            <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                                <!-- Media container -->
                                <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="A Sony Alpha A7 IV mirrorless digital camera with attached professional 24-70mm G Master zoom lens sitting on a natural warm wood studio desk surface with soft studio lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-RBc_3aAMgH2meLVBf08uv3ZGcdt8An4-7qlaqnzDIlGa8BD9RfoSYcZg-KxTIRz8vgEbuEWIQOgAOYsI1JPIDt9D0rQfn3VZnPx2pW7pEuo_y_SlSl-7Y1IHiU8XF4oOv6cCKZJgqWKqrWAQC-7JQSvZEJEN1lz9sD-aH-vNtehNsdFGMQeX91Ajiu8Kf_ExcaDDEFmX4AN2fuluUImK1tTOKjpEBVat9eZQ8LnwUkg2yBBafQg" />
                                    <!-- Badges Over Media -->
                                    <div class="absolute top-2.5 left-2.5 flex flex-col gap-1 items-start">
                                        <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                                            <span class="material-symbols-outlined text-[13px]">photo_camera</span>
                                            Máy ảnh &amp; Lens
                                        </span>
                                        <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full shadow-xs">
                                            Top Đánh Giá Cao
                                        </span>
                                    </div>
                                    <!-- Favorite Heart Button -->
                                    <button class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface-variant hover:text-error flex items-center justify-center transition-colors shadow-xs cursor-pointer" type="button">
                                        <span class="material-symbols-outlined text-[18px]">favorite</span>
                                    </button>
                                    <!-- Condition Tag Bottom Media -->
                                    <div class="absolute bottom-2 left-2.5">
                                        <span class="bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded">
                                            Tình trạng: Cực tốt (Sensor sạch)
                                        </span>
                                    </div>
                                </div>
                                <!-- Content Area -->
                                <div class="p-space-md flex-1 flex flex-col justify-between gap-space-sm">
                                    <div class="flex flex-col gap-1">
                                        <!-- Location & Distance -->
                                        <div class="flex items-center justify-between text-on-surface-variant font-label-md text-label-md">
                                            <span class="flex items-center gap-1 truncate">
                                                <span class="material-symbols-outlined text-[15px] text-secondary">location_on</span>
                                                Bình Thạnh, TP. Hồ Chí Minh
                                            </span>
                                            <span class="shrink-0 text-on-surface font-medium">Cách 3.8 km</span>
                                        </div>
                                        <!-- Asset Title -->
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mt-1">
                                            Sony Alpha A7 IV + Lens 24-70mm GM
                                        </h3>
                                        <!-- Ratings & Usage Stats -->
                                        <div class="flex items-center gap-2 font-label-sm text-label-sm mt-0.5">
                                            <span class="flex items-center gap-0.5 text-on-surface font-bold">
                                                <span class="material-symbols-outlined text-[#F59E0B] text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                5.0
                                            </span>
                                            <span class="text-on-surface-variant">(68 lượt thuê)</span>
                                        </div>
                                    </div>
                                    <!-- Pricing & Deposit Clarification -->
                                    <div class="pt-2 bg-surface-container-low p-2.5 rounded-lg flex flex-col gap-1">
                                        <div class="flex items-baseline justify-between">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Giá thuê ngày:</span>
                                            <div class="text-right">
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold text-primary">550.000đ</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">/ ngày</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between text-label-sm font-label-sm">
                                            <span class="text-on-surface-variant">Ký quỹ cọc:</span>
                                            <span class="text-on-surface font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[13px] text-on-surface-variant">lock</span>
                                                Cọc 3.000.000đ + CCCD
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Owner Verification Footer & Action -->
                                    <div class="pt-2 flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <div class="relative shrink-0">
                                                <img class="w-8 h-8 rounded-full object-cover" data-alt="Close-up portrait of an artistic Vietnamese female creator with glasses smiling in a modern creative studio workspace" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaX7p217TW79hVjzj1-OZxthPL3GLir0eJe9qEyuDI6RM2Ns0mTOeSHIcDGPaxOdry5lAuhqFhUiK3hH5QmdEYzQbRA7ILq1UxgsTJZ6p-L4tVcpXSIDcGbY-sHxDXQ4YYGxYGewbjuhRYMmpZWRuxSTTJ5OweoZVajpCFhtO-s_7ljepJpLdPMGc2Njs_2KzyDHYqaKsOaLXRE0rQf-REMdeKLYyzHH1B0B3Ss3W1aO0Y1mEtrWo" />
                                                <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-secondary rounded-full flex items-center justify-center text-on-secondary text-[8px] font-bold">✓</span>
                                            </div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md text-on-surface truncate font-semibold">Vũ Phương Thảo</span>
                                                <span class="font-label-sm text-label-sm text-secondary">Tín nhiệm: 98/100</span>
                                            </div>
                                        </div>
                                        <a class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-md px-3 py-1.5 rounded-lg transition-all shadow-xs" href="#">
                                            Thuê ngay
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <!-- Asset Card 3: Outdoor Camping Tent (Inspired by Image 3) -->
                            <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                                <!-- Media container -->
                                <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="A durable green dome camping tent pitched on a scenic lush alpine meadow with vibrant wildflowers and majestic mountain ranges in the daylight background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDiXsY8OlaASCJMlPLhFduYMMFXIXkNJMYUzWxnvWiwpLhUlOfnxxfhFiH0XOzaeIm3gMVFmlVCvU7x-nBgtsEsxxI7rz6pqRCYEvoCbInfi4XMgqeRtpZRU8Fnh8uu4yQWqeyeRPfgY4tJMDGU3p2LVq-mEIETROKQ6l6g0Kzsc9zMAFdkk1wdb4x9Q6cppWkLLY2pYNamJlI6_Y8bRdg5a1IE1Ld3LMQ0lKUk_EY4VHTH80WE7LY" />
                                    <!-- Badges Over Media -->
                                    <div class="absolute top-2.5 left-2.5 flex flex-col gap-1 items-start">
                                        <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                                            <span class="material-symbols-outlined text-[13px]">camping</span>
                                            Dã ngoại &amp; Cắm trại
                                        </span>
                                        <span class="bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm px-2 py-0.5 rounded-full shadow-xs">
                                            Gói Combo Đủ Bộ
                                        </span>
                                    </div>
                                    <!-- Favorite Heart Button -->
                                    <button class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface-variant hover:text-error flex items-center justify-center transition-colors shadow-xs cursor-pointer" type="button">
                                        <span class="material-symbols-outlined text-[18px]">favorite</span>
                                    </button>
                                    <!-- Condition Tag Bottom Media -->
                                    <div class="absolute bottom-2 left-2.5">
                                        <span class="bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded">
                                            Tình trạng: Mới 95% (Sạch sẽ)
                                        </span>
                                    </div>
                                </div>
                                <!-- Content Area -->
                                <div class="p-space-md flex-1 flex flex-col justify-between gap-space-sm">
                                    <div class="flex flex-col gap-1">
                                        <!-- Location & Distance -->
                                        <div class="flex items-center justify-between text-on-surface-variant font-label-md text-label-md">
                                            <span class="flex items-center gap-1 truncate">
                                                <span class="material-symbols-outlined text-[15px] text-secondary">location_on</span>
                                                TP. Thủ Đức, TP.HCM
                                            </span>
                                            <span class="shrink-0 text-on-surface font-medium">Cách 5.2 km</span>
                                        </div>
                                        <!-- Asset Title -->
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mt-1">
                                            Combo Lều Naturehike 4 người + 2 Ghế xếp
                                        </h3>
                                        <!-- Ratings & Usage Stats -->
                                        <div class="flex items-center gap-2 font-label-sm text-label-sm mt-0.5">
                                            <span class="flex items-center gap-0.5 text-on-surface font-bold">
                                                <span class="material-symbols-outlined text-[#F59E0B] text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                4.8
                                            </span>
                                            <span class="text-on-surface-variant">(24 lượt thuê)</span>
                                        </div>
                                    </div>
                                    <!-- Pricing & Deposit Clarification -->
                                    <div class="pt-2 bg-surface-container-low p-2.5 rounded-lg flex flex-col gap-1">
                                        <div class="flex items-baseline justify-between">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Giá thuê ngày:</span>
                                            <div class="text-right">
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold text-primary">150.000đ</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">/ ngày</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between text-label-sm font-label-sm">
                                            <span class="text-on-surface-variant">Ký quỹ cọc:</span>
                                            <span class="text-secondary font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[13px]">verified</span>
                                                Cọc 500k hoặc Giữ GPLX
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Owner Verification Footer & Action -->
                                    <div class="pt-2 flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <div class="relative shrink-0">
                                                <img class="w-8 h-8 rounded-full object-cover" data-alt="Portrait of an energetic Vietnamese male outdoor adventurer with smiling expression in natural sunlight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrcK_x7nMf3PeTlMbA85woZIHgTyesrLth5CMhcPPXBrxvVFZkLHoSuUJRdvdJZX_H45wikAebU8YEHQWCjS00hiiQCg978BltZlG1x5zTwnieiYxXnzxcUIDvCesGWlItGbxpeXoXjPr93ni_zLLnWIO_9LL7jLPtiJ_VTy52vKlHH13CycbkF1kWAHiaO11Wt9L0KFCBl8Hiw2uCyJq_5y5ZtzAmGtpRPFklVybbiE7P5urQiP0" />
                                                <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-secondary rounded-full flex items-center justify-center text-on-secondary text-[8px] font-bold">✓</span>
                                            </div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md text-on-surface truncate font-semibold">Nguyễn Duy Khoa</span>
                                                <span class="font-label-sm text-label-sm text-secondary">Tín nhiệm: 96/100</span>
                                            </div>
                                        </div>
                                        <a class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-md px-3 py-1.5 rounded-lg transition-all shadow-xs" href="#">
                                            Thuê ngay
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <!-- Asset Card 4: Action Cam / Drone -->
                            <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                                <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="DJI Mini 3 Pro drone folded neatly on a slate surface with remote controller with high tech aesthetic sharp lighting and clean perspective" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBt6goDTaswL-UB9Yhn_rG1zNmOgKdjYgUNOWTHJdlZK3Yh2hfnjmJVaqgZhT9jXRRds3KbF39yDVSyFRiZuazfHXtT_jbit6KtOOfFDUEX1SHIMiGLx8l5rHWqqI1mSkNZ6LD_VybBrAtxgwv2FiVsfQmuWlO765XbNBGoXaG5fXWoc81X-pHX9Bf4LbI9iFOK68p0XnlGdKtWsk090qwxS0QWM5Zvc0GQXaO3NDmg3SnlHLH82hQ" />
                                    <div class="absolute top-2.5 left-2.5 flex flex-col gap-1 items-start">
                                        <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                                            <span class="material-symbols-outlined text-[13px]">flight</span>
                                            Flycam / Drone
                                        </span>
                                    </div>
                                    <button class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface-variant hover:text-error flex items-center justify-center transition-colors shadow-xs cursor-pointer" type="button">
                                        <span class="material-symbols-outlined text-[18px]">favorite</span>
                                    </button>
                                    <div class="absolute bottom-2 left-2.5">
                                        <span class="bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded">
                                            Tình trạng: Mới 99% + 3 Pin
                                        </span>
                                    </div>
                                </div>
                                <div class="p-space-md flex-1 flex flex-col justify-between gap-space-sm">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center justify-between text-on-surface-variant font-label-md text-label-md">
                                            <span class="flex items-center gap-1 truncate">
                                                <span class="material-symbols-outlined text-[15px] text-secondary">location_on</span>
                                                Quận 3, TP. Hồ Chí Minh
                                            </span>
                                            <span class="shrink-0 text-on-surface font-medium">Cách 1.8 km</span>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mt-1">
                                            Flycam DJI Mini 3 Pro Fly More Combo
                                        </h3>
                                        <div class="flex items-center gap-2 font-label-sm text-label-sm mt-0.5">
                                            <span class="flex items-center gap-0.5 text-on-surface font-bold">
                                                <span class="material-symbols-outlined text-[#F59E0B] text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                4.9
                                            </span>
                                            <span class="text-on-surface-variant">(39 đánh giá)</span>
                                        </div>
                                    </div>
                                    <div class="pt-2 bg-surface-container-low p-2.5 rounded-lg flex flex-col gap-1">
                                        <div class="flex items-baseline justify-between">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Giá thuê ngày:</span>
                                            <div class="text-right">
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold text-primary">320.000đ</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">/ ngày</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between text-label-sm font-label-sm">
                                            <span class="text-on-surface-variant">Ký quỹ cọc:</span>
                                            <span class="text-on-surface font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[13px] text-on-surface-variant">shield</span>
                                                Cọc 2.000.000đ + CCCD
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pt-2 flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <div class="relative shrink-0">
                                                <img class="w-8 h-8 rounded-full object-cover" data-alt="Portrait avatar of a young tech video creator with friendly smile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4z17UsSWpjtQTD0U9kvYrxPOBZlspLwblThmCS3YY7ZS-nVFIYts183v6vDprooeoVKF1hIdaH-jGf409MKL1VXP-wHcLpbaUHkSD3Uj83yORcHZWzOrM1WlWdkHsBEyxcCjP1cBCQ8KwdnWaczHtN5IZAv30wRqyJUPZSyBpynsRG3Xz-tn4Q4oW2f_sva7bbr6ZGMcMesEzaLZRzvf-mf4V0svv96sf4NkWftq4P69pWc6jWvg" />
                                                <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-secondary rounded-full flex items-center justify-center text-on-secondary text-[8px] font-bold">✓</span>
                                            </div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md text-on-surface truncate font-semibold">Phạm Hải Nam</span>
                                                <span class="font-label-sm text-label-sm text-secondary">Tín nhiệm: 97/100</span>
                                            </div>
                                        </div>
                                        <a class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-md px-3 py-1.5 rounded-lg transition-all shadow-xs" href="#">
                                            Thuê ngay
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <!-- Asset Card 5: Electric Scooter / Fat Tire E-Bike -->
                            <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                                <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Sleek modern electric scooter Segway Ninebot Max parked outside a trendy minimalist cafe with clean lines and warm daylight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHPE_Lu3LVCQAUwJkAPrk8ZrQ05VRPOCPNmngYz7W9lezKgb8rxiG-bJUfdDnGacLhXFJ9sRuijdb3FGNjnGJZ2dceSAG0p6Qh_5K7Ch3x7mmr9fxGnT2lwh3cud7JMS5ZYaKPCtRn5uFYiZgHd7ZV5pmY0pENOmyVzSTC8xdiK0Gwh6a_mLGv2U2akFOJQk_7Q7HD5A3peM6yFpkS81sQLVNXJzZ-R8LG56ze0_adCAa-eHhgls4" />
                                    <div class="absolute top-2.5 left-2.5 flex flex-col gap-1 items-start">
                                        <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                                            <span class="material-symbols-outlined text-[13px]">pedal_bike</span>
                                            Xe điện đô thị
                                        </span>
                                    </div>
                                    <button class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface-variant hover:text-error flex items-center justify-center transition-colors shadow-xs cursor-pointer" type="button">
                                        <span class="material-symbols-outlined text-[18px]">favorite</span>
                                    </button>
                                    <div class="absolute bottom-2 left-2.5">
                                        <span class="bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded">
                                            Pin 65km / 1 lần sạc
                                        </span>
                                    </div>
                                </div>
                                <div class="p-space-md flex-1 flex flex-col justify-between gap-space-sm">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center justify-between text-on-surface-variant font-label-md text-label-md">
                                            <span class="flex items-center gap-1 truncate">
                                                <span class="material-symbols-outlined text-[15px] text-secondary">location_on</span>
                                                Quận 7, TP. Hồ Chí Minh
                                            </span>
                                            <span class="shrink-0 text-on-surface font-medium">Cách 6.0 km</span>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mt-1">
                                            Xe trượt điện Segway Ninebot G30 Max
                                        </h3>
                                        <div class="flex items-center gap-2 font-label-sm text-label-sm mt-0.5">
                                            <span class="flex items-center gap-0.5 text-on-surface font-bold">
                                                <span class="material-symbols-outlined text-[#F59E0B] text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                4.7
                                            </span>
                                            <span class="text-on-surface-variant">(18 nhận xét)</span>
                                        </div>
                                    </div>
                                    <div class="pt-2 bg-surface-container-low p-2.5 rounded-lg flex flex-col gap-1">
                                        <div class="flex items-baseline justify-between">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Giá thuê ngày:</span>
                                            <div class="text-right">
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold text-primary">120.000đ</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">/ ngày</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between text-label-sm font-label-sm">
                                            <span class="text-on-surface-variant">Ký quỹ cọc:</span>
                                            <span class="text-secondary font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[13px]">verified</span>
                                                Cọc 1.000.000đ hoặc Giữ CCCD
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pt-2 flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <div class="relative shrink-0">
                                                <img class="w-8 h-8 rounded-full object-cover" data-alt="Portrait of an approachable Vietnamese female host with genuine warm smile in urban natural setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1aXE8XI7UMeik4aCbiyZLIqgPmvhNP3PfMVA4554HipoSc-QK3byeksFTalL4U9rZoHj53QLHKxKqS8gZ-6HTTD3OuzOUHhsTBR9GHQrhyBy9lgKETVILcAehPbvP_WhKWgwQgnDTVRYTnYXm110OTqSf5H9AL3vTM_rzWF4wwzYOh4gbVYCxvLuqFCq7CRVmIR0y9XY_tipTwAhHnngFS7mQ5BdYavAg5_e6xATfLgHnZ3SAvg0" />
                                                <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-secondary rounded-full flex items-center justify-center text-on-secondary text-[8px] font-bold">✓</span>
                                            </div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md text-on-surface truncate font-semibold">Đặng Mỹ Linh</span>
                                                <span class="font-label-sm text-label-sm text-secondary">Tín nhiệm: 95/100</span>
                                            </div>
                                        </div>
                                        <a class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-md px-3 py-1.5 rounded-lg transition-all shadow-xs" href="#">
                                            Thuê ngay
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <!-- Asset Card 6: Pro Sound & Projector -->
                            <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col group">
                                <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Compact portable smart cinema projector and Harman Kardon bluetooth speaker set up neatly in a cozy living room ambient setting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZFgJqB2FLMD8R4CteXZKzxLrkpdVoIfJ-Nd3NZfJ7eWxAl7NIbYH9jVl7jbvNnu13My3Pkd1QBCCLOnFGCDWNZnvDheTUxpJIDcx8xb_1xgP6caolQvOgFwC93XfQW9ThySYEW-J8ZCtPXgTrMJPmkOezOZzLCc938iqUq1NT6ZtctM3XYPeUC6EFwqy1xJlZ_lwUrVOLi_u7Pi2-idNbCpi2XoC_y7yoX36OEeHmRGo57GepntU" />
                                    <div class="absolute top-2.5 left-2.5 flex flex-col gap-1 items-start">
                                        <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full flex items-center gap-1 shadow-xs">
                                            <span class="material-symbols-outlined text-[13px]">tv</span>
                                            Máy chiếu &amp; Âm thanh
                                        </span>
                                    </div>
                                    <button class="absolute top-2.5 right-2.5 w-8 h-8 rounded-full bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface-variant hover:text-error flex items-center justify-center transition-colors shadow-xs cursor-pointer" type="button">
                                        <span class="material-symbols-outlined text-[18px]">favorite</span>
                                    </button>
                                    <div class="absolute bottom-2 left-2.5">
                                        <span class="bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded">
                                            Độ phân giải Full HD 1080p
                                        </span>
                                    </div>
                                </div>
                                <div class="p-space-md flex-1 flex flex-col justify-between gap-space-sm">
                                    <div class="flex flex-col gap-1">
                                        <div class="flex items-center justify-between text-on-surface-variant font-label-md text-label-md">
                                            <span class="flex items-center gap-1 truncate">
                                                <span class="material-symbols-outlined text-[15px] text-secondary">location_on</span>
                                                Phú Nhuận, TP. Hồ Chí Minh
                                            </span>
                                            <span class="shrink-0 text-on-surface font-medium">Cách 3.1 km</span>
                                        </div>
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mt-1">
                                            Máy chiếu mini XGIMI MoGo Pro + Màn 100 inch
                                        </h3>
                                        <div class="flex items-center gap-2 font-label-sm text-label-sm mt-0.5">
                                            <span class="flex items-center gap-0.5 text-on-surface font-bold">
                                                <span class="material-symbols-outlined text-[#F59E0B] text-[15px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                                4.9
                                            </span>
                                            <span class="text-on-surface-variant">(51 lượt thuê)</span>
                                        </div>
                                    </div>
                                    <div class="pt-2 bg-surface-container-low p-2.5 rounded-lg flex flex-col gap-1">
                                        <div class="flex items-baseline justify-between">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Giá thuê ngày:</span>
                                            <div class="text-right">
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold text-primary">190.000đ</span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">/ ngày</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between text-label-sm font-label-sm">
                                            <span class="text-on-surface-variant">Ký quỹ cọc:</span>
                                            <span class="text-on-surface font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[13px] text-on-surface-variant">lock</span>
                                                Cọc 1.000.000đ + CCCD
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pt-2 flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <div class="relative shrink-0">
                                                <img class="w-8 h-8 rounded-full object-cover" data-alt="Portrait of an approachable young Vietnamese male entrepreneur in clean casual wear" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCx_jppOsamomAYssai6bDUzzhJOdGAsNTVqCehcjbap6fNZdRyDfpNgblEo-K_0BAjJb9wL0fVJb8BBKF_DgmHkRSmmTst8oI-pBQ0nooSEc53l5fvKSk3osLDsA34pmDX9bXofC1Elxxa2sRmzb3L7HHTh1nN95xiNWgw7K4b-j1FuHRqJdQui4HndNlGaSc5P3n1FU78WrZNNqGqf3YotfuDKS7jF-biw7mmX69R8CEmUBUCX9s" />
                                                <span class="absolute -bottom-0.5 -right-0.5 w-3 h-3 bg-secondary rounded-full flex items-center justify-center text-on-secondary text-[8px] font-bold">✓</span>
                                            </div>
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-md text-on-surface truncate font-semibold">Lê Quốc Bảo</span>
                                                <span class="font-label-sm text-label-sm text-secondary">Tín nhiệm: 100/100</span>
                                            </div>
                                        </div>
                                        <a class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-md px-3 py-1.5 rounded-lg transition-all shadow-xs" href="#">
                                            Thuê ngay
                                        </a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- ================= MODERN PAGINATION BAR ================= -->
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col sm:flex-row items-center justify-between gap-space-sm mt-space-sm">
                            <span class="font-body-sm text-body-sm text-on-surface-variant text-center sm:text-left">
                                Hiển thị <strong class="text-on-surface font-semibold">1 - 6</strong> trong số <strong class="text-on-surface font-semibold">128</strong> tài sản
                            </span>
                            <nav class="flex items-center gap-1">
                                <button class="p-2 rounded-lg text-outline-variant hover:bg-surface-container-low disabled:opacity-40 disabled:pointer-events-none cursor-pointer" disabled="" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                                </button>
                                <button class="w-9 h-9 rounded-lg bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center shadow-xs" type="button">
                                    1
                                </button>
                                <button class="w-9 h-9 rounded-lg hover:bg-surface-container-low text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors" type="button">
                                    2
                                </button>
                                <button class="w-9 h-9 rounded-lg hover:bg-surface-container-low text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors" type="button">
                                    3
                                </button>
                                <span class="px-2 text-on-surface-variant font-label-md text-label-md">...</span>
                                <button class="w-9 h-9 rounded-lg hover:bg-surface-container-low text-on-surface font-label-md text-label-md flex items-center justify-center transition-colors" type="button">
                                    22
                                </button>
                                <button class="p-2 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container-low transition-colors cursor-pointer" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                                </button>
                            </nav>
                        </div>
                        <!-- ================= P2P RENTAL PROTECTION HIGHLIGHT BANNER ================= -->
                        <div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col md:flex-row items-center justify-between gap-space-lg">
                            <div class="flex items-start gap-space-md">
                                <div class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined text-2xl">handshake</span>
                                </div>
                                <div class="flex flex-col">
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Bạn cũng có đồ dùng ít xài muốn kiếm thêm thu nhập?</h2>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 max-w-xl">
                                        Đăng tài sản của bạn lên RentShare chỉ mất 3 phút. Chúng tôi bảo chứng đặt cọc, xác thực người thuê bằng CCCD gắn chip và hỗ trợ bảo hiểm thiết bị đến 50.000.000đ.
                                    </p>
                                </div>
                            </div>
                            <a class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg px-space-lg py-2.5 rounded-lg shadow-sm transition-all text-center" href="#">
                                Đăng cho thuê ngay
                            </a>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script>
            // Micro-interaction for heart favorite toggle
            document.querySelectorAll('article button:has(.material-symbols-outlined)').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    e.preventDefault();
                    const icon = btn.querySelector('.material-symbols-outlined');
                    if (icon && icon.textContent.trim() === 'favorite') {
                        if (icon.style.fontVariationSettings.includes("'FILL' 1")) {
                            icon.style.fontVariationSettings = "'FILL' 0";
                            icon.classList.remove('text-error');
                        } else {
                            icon.style.fontVariationSettings = "'FILL' 1";
                            icon.classList.add('text-error');
                        }
                    }
                });
            });
        </script>
    </main>
    <footer class="w-full bg-surface-container-lowest border-t border-surface-container-high mt-space-xl py-space-xl">
        <div class="max-w-7xl mx-auto px-gutter">
            <div class="flex flex-col md:flex-row items-center justify-between gap-space-lg pb-space-lg border-b border-surface-container-high">
                <div class="flex items-center gap-space-sm"><img alt="RentShare Brand Logo" class="h-7 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1VWoRtpvK-gkM-NNbLB6TQLyGcUhbTnXoaxWL-7rM8duuYAbAPYnbKGQA2C48vPuAdsfi6v60RtKhHUrOP8TZGlIXKRA906O_gQ0CSYgct1iSAuJrUlmdtdx7ClaaWGqSuSuu9coQ-CRaoqlHn-5ufJGUOqnYdutyBh3swBZ-hxMpGZGo_gWUxRIdrSoMcGWQVzZ5R2KC_oTOlXpJBTqHQevgHRGLMI-hQX7TbURmLsfrsjGiJK-sZsQQ" /><span class="font-headline-sm text-headline-sm text-on-surface">RentShare</span></div>
                <nav class="flex flex-wrap items-center justify-center gap-x-space-lg gap-y-space-sm"><a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="ve-rentshare" href="#">Về RentShare</a><a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="an-toan-bao-hiem" href="#">Hướng dẫn an toàn &amp; Bảo hiểm</a><a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="xac-minh-dat-coc" href="#">Quy chuẩn xác minh &amp; Đặt cọc</a><a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="dieu-khoan" href="#">Điều khoản</a><a class="font-body-md text-body-md text-on-surface-variant hover:text-on-surface transition-colors" data-path="ho-tro" href="#">Hỗ trợ 24/7</a></nav>
            </div>
            <div class="flex flex-col md:flex-row items-center justify-between gap-space-sm pt-space-md text-on-surface-variant font-label-md text-label-md">
                <p>© 2025 RentShare Inc. Nền tảng cho thuê tài sản cá nhân P2P an toàn &amp; bảo chứng.</p>
                <p class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px] text-secondary">shield</span><span>Ký quỹ an toàn &amp; Xác thực định danh CCCD/eKYC</span></p>
            </div>
        </div>
    </footer>
</body>

</html>