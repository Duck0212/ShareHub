<!DOCTYPE html>

<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
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
                <nav class="hidden xl:flex items-center gap-space-md" data-active-classes="text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg"><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="kham-pha" href="#">Khám phá</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="danh-sach-tai-san" href="#">Danh sách tài sản</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors inline-flex items-center gap-1.5" data-path="yeu-cau-thue" href="#"><span>Yêu cầu thuê</span><span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-1.5 py-0.5 rounded-full">Mới</span></a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="don-thue-cua-toi" href="#">Đơn thuê của tôi</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors inline-flex items-center gap-1.5" data-path="tin-nhan" href="#"><span>Tin nhắn</span><span class="bg-secondary text-on-secondary font-label-sm text-label-sm w-4 h-4 rounded-full flex items-center justify-center text-[10px]">2</span></a></nav>
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
                    <div class="absolute right-0 top-full pt-2 w-60 hidden group-hover:block transition-all duration-150 z-50">
                        <div class="bg-surface-container-lowest rounded-xl p-space-xs shadow-[0_10px_25px_-5px_rgba(11,28,48,0.12)] border border-surface-container-high">
                            <div class="px-space-sm py-2 border-b border-surface-container-high mb-1">
                                <p class="font-label-lg text-label-lg text-on-surface">Minh Tuấn</p>
                                <div class="flex items-center gap-1.5 mt-0.5"><span class="material-symbols-outlined text-[14px] text-secondary">verified_user</span><span class="font-label-sm text-label-sm text-secondary font-semibold">Điểm tín nhiệm: 98/100</span></div>
                            </div><a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" data-path="trang-ca-nhan" href="#"><span class="material-symbols-outlined text-[18px]">person</span><span>Hồ sơ cá nhân</span></a><a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" data-path="hoat-dong-ca-nhan" href="#"><span class="material-symbols-outlined text-[18px]">history</span><span>Hoạt động cá nhân</span></a><a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" data-path="chinh-sua-ho-so" href="#"><span class="material-symbols-outlined text-[18px]">edit_square</span><span>Chỉnh sửa hồ sơ</span></a><a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" data-path="cai-dat-tai-khoan" href="#"><span class="material-symbols-outlined text-[18px]">settings</span><span>Cài đặt tài khoản</span></a>
                            <div class="border-t border-surface-container-high my-1"></div><a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-error hover:bg-error-container/20 font-body-md text-body-md transition-colors" data-path="dang-nhap" href="#"><span class="material-symbols-outlined text-[18px]">logout</span><span>Đăng xuất</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="w-full pt-16 bg-surface min-h-[calc(100vh-16rem)]">
        <div class="flex flex-col w-full">
            <div class="max-w-7xl mx-auto px-gutter w-full py-space-lg flex flex-col gap-space-lg">
                <!-- Profile & Page Action Header (No redundant H1, focused on command status) -->
                <div class="w-full bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col lg:flex-row items-start lg:items-center justify-between gap-space-md">
                    <div class="flex items-center gap-space-md">
                        <div class="relative">
                            <img class="w-16 h-16 rounded-full object-cover shadow-sm" data-alt="Professional portrait of a friendly young Vietnamese male entrepreneur in a navy minimalist blazer with natural studio lighting and a clean neutral background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCrjshJR3vad4hVFKW1X5k6x-RMoUtI_BVYk9cco5uGWUlbE-GWEtWbcU5k_JS1I5FEN4S1h_d4vnF9C6qJGZzIGIgMsqE8BWvoWHGwi59nYlkmGJ2v-6-VWY9cnk9N4wNQEi8AXatBzE1Eohysa_vL4RC1JzP_jmCpourHdbHGZX9z0nqUKeOL4380IgXW7oaF3qL6UwnQSCmZ5GqY3K1sO-K3NYG1Y4MXefVZ8cF1vxughZ86jis" />
                            <span class="absolute bottom-0 right-0 w-4 h-4 bg-secondary rounded-full flex items-center justify-center text-on-secondary shadow-sm">
                                <span class="material-symbols-outlined text-[10px]" style="font-variation-settings: 'FILL' 1;">check</span>
                            </span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex flex-wrap items-center gap-2">
                                <span class="font-headline-md text-headline-md text-on-surface">Nguyễn Minh Tuấn</span>
                                <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full">
                                    <span class="material-symbols-outlined text-[14px]">verified</span>
                                    <span>Đã xác minh CCCD/eKYC</span>
                                </span>
                                <span class="inline-flex items-center gap-1 bg-surface-container-low text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full">
                                    <span class="material-symbols-outlined text-[14px]" style="font-variation-settings: 'FILL' 1;">shield</span>
                                    <span class="font-bold">Điểm uy tín: 98/100</span>
                                </span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                Thành viên từ 02/2023 · Hoạt động đồng thời 2 vai trò: Khách thuê &amp; Chủ tài sản uy tín
                            </p>
                        </div>
                    </div>
                    <!-- Quick Action Pill Group -->
                    <div class="flex items-center gap-space-sm w-full sm:w-auto self-stretch sm:self-auto justify-end">
                        <a class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-1.5 px-4 py-2 bg-surface-container hover:bg-surface-container-high text-secondary rounded-lg font-label-lg text-label-lg transition-colors" href="#">
                            <span class="material-symbols-outlined text-[18px]">search_check</span>
                            <span>Đăng tìm thuê</span>
                        </a>
                        <a class="flex-1 sm:flex-initial inline-flex items-center justify-center gap-1.5 px-4 py-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary rounded-lg font-label-lg text-label-lg shadow-sm transition-colors" href="#">
                            <span class="material-symbols-outlined text-[18px]">add_box</span>
                            <span>+ Đăng cho thuê</span>
                        </a>
                    </div>
                </div>
                <!-- 5 KPI Overview Stats Row -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-space-sm">
                    <!-- Card 1: Renting (Borrower) -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Đang thuê</span>
                            <span class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                            </span>
                        </div>
                        <div class="mt-space-sm">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-xl text-headline-xl text-on-surface leading-none">2</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">thiết bị</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-secondary mt-1 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">schedule</span>
                                <span>Hạn gần nhất: 18:00 hôm nay</span>
                            </p>
                        </div>
                    </div>
                    <!-- Card 2: Renting Out (Owner) -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Đang cho thuê</span>
                            <span class="w-8 h-8 rounded-lg bg-secondary-container flex items-center justify-center text-on-secondary-container">
                                <span class="material-symbols-outlined text-[18px]">sync_alt</span>
                            </span>
                        </div>
                        <div class="mt-space-sm">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-xl text-headline-xl text-on-surface leading-none">3</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">đơn đang chạy</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                Doanh thu ước tính: <span class="font-semibold text-on-surface">3.450.000₫</span>
                            </p>
                        </div>
                    </div>
                    <!-- Card 3: My Inventory -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Kho tài sản</span>
                            <span class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface">
                                <span class="material-symbols-outlined text-[18px]">inventory_2</span>
                            </span>
                        </div>
                        <div class="mt-space-sm">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-xl text-headline-xl text-on-surface leading-none">6</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">mặt hàng</span>
                            </div>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="font-label-sm text-label-sm text-secondary font-semibold">5 Sẵn sàng</span>
                                <span class="text-on-surface-variant">•</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">1 Bảo dưỡng</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4: Rental Requests Published -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Tin tìm thuê</span>
                            <span class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-on-surface">
                                <span class="material-symbols-outlined text-[18px]">find_in_page</span>
                            </span>
                        </div>
                        <div class="mt-space-sm">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-xl text-headline-xl text-on-surface leading-none">2</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">tin công khai</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-secondary mt-1 flex items-center gap-1 font-semibold">
                                <span class="material-symbols-outlined text-[14px]">local_offer</span>
                                <span>4 đề xuất mới nhận</span>
                            </p>
                        </div>
                    </div>
                    <!-- Card 5: Safe Escrow Balance & Net Revenue -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Ký quỹ &amp; Ví</span>
                            <span class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[18px]">account_balance_wallet</span>
                            </span>
                        </div>
                        <div class="mt-space-sm">
                            <div class="font-headline-md text-headline-md text-on-surface leading-none">12.500.000₫</div>
                            <div class="flex flex-col gap-0.5 mt-1 font-body-sm text-body-sm text-on-surface-variant">
                                <span>Ký quỹ giữ an toàn: 8.5M</span>
                                <span class="text-secondary font-semibold">Đã nhận tháng này: 4.0M</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Urgent Action Required Module (Priority Task Bar) -->
                <div class="bg-surface-container-low rounded-xl p-space-md flex flex-col gap-space-sm">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-error animate-ping"></span>
                            <span class="font-headline-sm text-headline-sm text-on-surface">Cần bạn xử lý ngay</span>
                            <span class="bg-error-container text-on-error-container font-label-sm text-label-sm px-2 py-0.5 rounded-full">2 hành động</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Hạn phản hồi chuẩn Kinetic: dưới 2 giờ</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-sm mt-1">
                        <!-- Task Item 1: Handover Inspection Confirmation -->
                        <div class="bg-surface-container-lowest p-space-md rounded-lg shadow-sm flex items-start justify-between gap-space-sm">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">photo_camera_front</span>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Xác nhận bàn giao thiết bị</span>
                                        <span class="bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm px-1.5 py-0.2 rounded">Chủ máy</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                        Khách thuê <strong>Hoàng Linh</strong> đã gửi biên bản ảnh 6 góc cho <strong>Sony A7 IV + Lens 24-70mm GM</strong>.
                                    </p>
                                    <span class="font-label-sm text-label-sm text-error mt-1 flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[13px]">alarm</span>
                                        <span>Tự động kích hoạt sau: 45 phút</span>
                                    </span>
                                </div>
                            </div>
                            <button class="shrink-0 px-3 py-1.5 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-sm text-label-sm rounded-lg shadow-sm transition-all">
                                Kiểm tra ảnh &amp; Ký
                            </button>
                        </div>
                        <!-- Task Item 2: New Rental Proposal Received -->
                        <div class="bg-surface-container-lowest p-space-md rounded-lg shadow-sm flex items-start justify-between gap-space-sm">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg bg-secondary-container flex items-center justify-center text-on-secondary-container shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">quickreply</span>
                                </div>
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-2">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">3 Đề xuất cho thuê mới</span>
                                        <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-1.5 py-0.2 rounded">Khách tìm</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                        Tin: <em>'Cần thuê Flycam DJI Mini 4 Pro quay dự án cuối tuần'</em> có báo giá từ 3 chủ thiết bị đã KYC.
                                    </p>
                                    <span class="font-label-sm text-label-sm text-secondary mt-1 flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[13px]">savings</span>
                                        <span>Giá tốt nhất: 350.000₫/ngày (rẻ hơn 15%)</span>
                                    </span>
                                </div>
                            </div>
                            <button class="shrink-0 px-3 py-1.5 bg-secondary hover:bg-on-secondary-container text-on-secondary font-label-sm text-label-sm rounded-lg shadow-sm transition-all">
                                Xem báo giá
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Interactive Navigation Tabs & Search/Filter Toolbar -->
                <div class="flex flex-col lg:flex-row items-stretch lg:items-center justify-between gap-space-md">
                    <!-- Segmented Navigation Tabs -->
                    <div class="flex items-center gap-1 overflow-x-auto pb-1 lg:pb-0 bg-surface-container-low p-1.5 rounded-xl">
                        <button class="px-4 py-2 rounded-lg font-label-lg text-label-lg bg-surface-container-lowest text-on-surface shadow-sm whitespace-nowrap">
                            Tất cả (13)
                        </button>
                        <button class="px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container/60 transition-colors whitespace-nowrap flex items-center gap-1.5">
                            <span>Tôi đang thuê</span>
                            <span class="w-5 h-5 rounded-full bg-surface-container flex items-center justify-center font-label-sm text-label-sm text-on-surface">2</span>
                        </button>
                        <button class="px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container/60 transition-colors whitespace-nowrap flex items-center gap-1.5">
                            <span>Tôi đang cho thuê</span>
                            <span class="w-5 h-5 rounded-full bg-secondary-container flex items-center justify-center font-label-sm text-label-sm text-on-secondary-container font-bold">3</span>
                        </button>
                        <button class="px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container/60 transition-colors whitespace-nowrap flex items-center gap-1.5">
                            <span>Tài sản của tôi</span>
                            <span class="w-5 h-5 rounded-full bg-surface-container flex items-center justify-center font-label-sm text-label-sm text-on-surface">6</span>
                        </button>
                        <button class="px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container/60 transition-colors whitespace-nowrap flex items-center gap-1.5">
                            <span>Tin tìm thuê</span>
                            <span class="w-5 h-5 rounded-full bg-surface-container flex items-center justify-center font-label-sm text-label-sm text-on-surface">2</span>
                        </button>
                        <button class="px-4 py-2 rounded-lg font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container/60 transition-colors whitespace-nowrap">
                            Lịch sử giao dịch
                        </button>
                    </div>
                    <!-- Quick Search & State Filter -->
                    <div class="flex items-center gap-space-sm">
                        <div class="relative flex-1 sm:w-64">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">search</span>
                            <input class="w-full pl-9 pr-3 py-2 bg-surface-container-lowest rounded-lg font-body-sm text-body-sm text-on-surface focus:outline-none focus:ring-2 focus:ring-secondary/20 shadow-sm" placeholder="Tìm theo mã đơn, thiết bị..." type="text" />
                        </div>
                        <select class="bg-surface-container-lowest text-on-surface font-body-sm text-body-sm px-3 py-2 rounded-lg shadow-sm focus:outline-none cursor-pointer">
                            <option value="all">Tất cả trạng thái</option>
                            <option value="ongoing">Đang hoạt động</option>
                            <option value="verifying">Chờ kiểm tra bàn giao</option>
                            <option value="deposit">Đang giữ cọc bảo đảm</option>
                            <option value="completed">Đã hoàn tất</option>
                        </select>
                    </div>
                </div>
                <!-- Active Activity Feed & Order Detail Cards -->
                <div class="grid grid-cols-1 gap-space-md">
                    <!-- Item Card 1: Handover Inspection Pending (Landlord Perspective) -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row gap-space-md justify-between items-start md:items-center">
                        <div class="flex items-start gap-space-md flex-1">
                            <div class="relative shrink-0">
                                <img class="w-24 h-24 rounded-lg object-cover bg-surface-container" data-alt="Black Sony A7 IV full frame mirrorless camera with high end zoom lens on a neutral clean wooden surface, studio lighting, crisp high definition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOk1VlcwMA7cTG0XKlD5lyysfRhzlQpYLqtnCMV2RWS971vlsh9dO2XVU39s4IFD-DJytsz5NBeJJa6xuaZAdK07rDa6JzjGuMp5Y4GanNhyGblzS-BJtIchZRMIQDZhliybofHA9E5LmnMmpJ-ANR2y6iVWJeJnluy3y3EtqBlEBqiieBJV98SoTJJClAsGJumhtI8n0Jdourc0Y85i48qKvbLg7z-qsqjuKnPK7rzGpO8U6AiC0" />
                                <span class="absolute top-1 left-1 bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm px-1.5 py-0.5 rounded shadow-xs">
                                    Mã #RS-8492
                                </span>
                            </div>
                            <div class="flex flex-col gap-1 min-w-0">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="inline-flex items-center gap-1 bg-error-container text-on-error-container font-label-sm text-label-sm px-2 py-0.5 rounded-full font-semibold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                        Đang chờ bạn kiểm tra bàn giao
                                    </span>
                                    <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-full">
                                        Bạn là Chủ cho thuê
                                    </span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface truncate">Sony Alpha A7 IV + Lens FE 24-70mm F2.8 GM II</h3>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                        <span>24/10/2025 – 27/10/2025 (3 ngày)</span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">person</span>
                                        <span>Người thuê: <strong class="text-on-surface font-medium">Hoàng Linh</strong> (★ 4.9 · CCCD đã đối chiếu)</span>
                                    </span>
                                </div>
                                <div class="flex items-center gap-3 mt-1 font-body-sm text-body-sm">
                                    <span class="text-on-surface">Tiền thuê: <strong class="text-secondary font-semibold">1.800.000₫</strong></span>
                                    <span class="text-on-surface-variant">|</span>
                                    <span class="text-on-surface-variant">Tiền cọc giữ bởi RentShare: <strong class="text-on-surface font-medium">15.000.000₫</strong></span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row md:flex-col items-center md:items-end justify-between w-full md:w-auto gap-space-sm pt-space-sm md:pt-0 shrink-0">
                            <div class="flex items-center gap-2">
                                <button class="px-3 py-2 bg-surface-container hover:bg-surface-container-high text-on-surface rounded-lg font-label-lg text-label-lg transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span class="hidden sm:inline">Nhắn tin</span>
                                </button>
                                <button class="px-4 py-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary rounded-lg font-label-lg text-label-lg shadow-sm transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">fact_check</span>
                                    <span>Duyệt ảnh 6 góc</span>
                                </button>
                            </div>
                            <a class="font-label-sm text-label-sm text-secondary hover:underline flex items-center gap-0.5" href="#">
                                <span>Xem hợp đồng số hoá</span>
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                    <!-- Item Card 2: In-Use Asset (Renter Perspective) -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row gap-space-md justify-between items-start md:items-center">
                        <div class="flex items-start gap-space-md flex-1">
                            <div class="relative shrink-0">
                                <img class="w-24 h-24 rounded-lg object-cover bg-surface-container" data-alt="Modern DJI Ronin RS3 gimbal stabilizer standing upright on a minimalist clean tabletop with cool studio ambiance, highly detailed tech product shot." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBItMnVS9RdHNX93D1McHHlab-f7jkduG8skZVtEBeoaw00mMG3Dgd36DZoFsmLvT5ts5E3iAJOKxtgfbh6nRNhTa0i_Yr1tgCehT7KdcyOo_K8AnExwFuRFXVkpQpTMYJRuNAk3SWnOU6KGWP06vMv4S9yBllb53uv34q3wVCKKK9LWSECR5BflgvRhml1mAbPOo2eAz1_QFaMRgdQPZVC1fjZaO8aCXXuWUifluP5R4dq3wDpAdw" />
                                <span class="absolute top-1 left-1 bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm px-1.5 py-0.5 rounded shadow-xs">
                                    Mã #RS-7921
                                </span>
                            </div>
                            <div class="flex flex-col gap-1 min-w-0">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full font-semibold">
                                        <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
                                        Đang trong thời gian thuê
                                    </span>
                                    <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-full">
                                        Bạn là Khách thuê
                                    </span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface truncate">Gimbal chống rung DJI RS 3 Pro Combo</h3>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">event_repeat</span>
                                        <span>Hạn trả: <strong>Hôm nay, 18:00 (còn 4 giờ)</strong></span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">storefront</span>
                                        <span>Chủ tài sản: <strong class="text-on-surface font-medium">Lê Văn Hùng</strong> (Quận 1, TP.HCM)</span>
                                    </span>
                                </div>
                                <div class="flex items-center gap-3 mt-1 font-body-sm text-body-sm">
                                    <span class="text-on-surface">Đã thanh toán: <strong>450.000₫</strong></span>
                                    <span class="text-on-surface-variant">|</span>
                                    <span class="text-secondary font-medium flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">lock</span>
                                        <span>Ký quỹ tự động: 3.000.000₫ (Hoàn sau khi trả máy)</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row md:flex-col items-center md:items-end justify-between w-full md:w-auto gap-space-sm pt-space-sm md:pt-0 shrink-0">
                            <div class="flex items-center gap-2">
                                <button class="px-3 py-2 bg-surface-container hover:bg-surface-container-high text-on-surface rounded-lg font-label-lg text-label-lg transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span class="hidden sm:inline">Liên hệ chủ</span>
                                </button>
                                <button class="px-4 py-2 bg-secondary hover:bg-on-secondary-container text-on-secondary rounded-lg font-label-lg text-label-lg shadow-sm transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">assignment_return</span>
                                    <span>Bắt đầu quy trình trả</span>
                                </button>
                            </div>
                            <button class="font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface transition-colors">
                                Gia hạn thêm thời gian (+150k/ngày)
                            </button>
                        </div>
                    </div>
                    <!-- Item Card 3: Rental Request Proposal Selection (Demand Post) -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row gap-space-md justify-between items-start md:items-center">
                        <div class="flex items-start gap-space-md flex-1">
                            <div class="relative shrink-0">
                                <div class="w-24 h-24 rounded-lg bg-surface-container flex flex-col items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[36px]">flight</span>
                                    <span class="font-label-sm text-label-sm mt-1 text-on-surface-variant">Tin tìm kiếm</span>
                                </div>
                                <span class="absolute top-1 left-1 bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm px-1.5 py-0.5 rounded shadow-xs">
                                    Mã #RQ-1038
                                </span>
                            </div>
                            <div class="flex flex-col gap-1 min-w-0">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full font-semibold">
                                        <span class="material-symbols-outlined text-[14px]">bolt</span>
                                        Đang nhận đề xuất (4 chủ máy chào giá)
                                    </span>
                                    <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-full">
                                        Yêu cầu tìm thuê
                                    </span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface truncate">Flycam DJI Mini 4 Pro (Bản Fly More Combo kèm màn hình RC2)</h3>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span>Khu vực: Quận 7, TP.HCM hoặc lân cận 5km</span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">schedule</span>
                                        <span>Cần ngày: Thứ Bảy 26/10 đến Chủ Nhật 27/10</span>
                                    </span>
                                </div>
                                <div class="flex items-center gap-3 mt-1 font-body-sm text-body-sm">
                                    <span class="text-on-surface">Ngân sách mong muốn: <strong>400.000₫/ngày</strong></span>
                                    <span class="text-on-surface-variant">|</span>
                                    <span class="text-secondary font-semibold">Đề xuất thấp nhất: 350.000₫/ngày từ Studio Thanh Đa</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row md:flex-col items-center md:items-end justify-between w-full md:w-auto gap-space-sm pt-space-sm md:pt-0 shrink-0">
                            <div class="flex items-center gap-2">
                                <button class="px-4 py-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary rounded-lg font-label-lg text-label-lg shadow-sm transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">checklist</span>
                                    <span>So sánh 4 đề xuất</span>
                                </button>
                            </div>
                            <button class="font-label-sm text-label-sm text-on-surface-variant hover:text-error transition-colors">
                                Đóng bài tìm kiếm
                            </button>
                        </div>
                    </div>
                    <!-- Item Card 4: Active Rented Out Item (Landlord Perspective - Safe Transit) -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row gap-space-md justify-between items-start md:items-center">
                        <div class="flex items-start gap-space-md flex-1">
                            <div class="relative shrink-0">
                                <img class="w-24 h-24 rounded-lg object-cover bg-surface-container" data-alt="Sony FE 70-200mm f2.8 GM OSS II professional telephoto lens standing on an industrial grey background, crisp clean lighting, razor sharp details." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8YuqJ3zUFHXlnQr7lV9qS3utTRZHyuT6we9J8CjBn7fmVRDiubprVZ-gwtNhRtYEL1Q1V5cohpmEeaDi-h85GCTVxqnJGLFxKtv25BkofOXJQ8utnXK44xe8hGPtyJCrSZ21NyPF6VnzAVveDURhc46qp2iNkQBF8K_TQGc3jEYIiSIdqwZR7xpP3kefz4zfvw4fwZtI0DWIKytFz-ofiDcAIRRwaEIC-QYKJO1YwojewzXYaZT8" />
                                <span class="absolute top-1 left-1 bg-surface-container-lowest/90 backdrop-blur-sm text-primary font-label-sm text-label-sm px-1.5 py-0.5 rounded shadow-xs">
                                    Mã #RS-8319
                                </span>
                            </div>
                            <div class="flex flex-col gap-1 min-w-0">
                                <div class="flex flex-wrap items-center gap-2">
                                    <span class="inline-flex items-center gap-1 bg-surface-container-high text-on-surface font-label-sm text-label-sm px-2 py-0.5 rounded-full font-semibold">
                                        <span class="material-symbols-outlined text-[14px] text-secondary">verified_user</span>
                                        Khách đang sử dụng tốt
                                    </span>
                                    <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-full">
                                        Bạn là Chủ cho thuê
                                    </span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface truncate">Ống kính Sony FE 70-200mm F2.8 GM OSS II</h3>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">event_available</span>
                                        <span>Hẹn trả: 28/10/2025 lúc 10:00 sáng</span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px]">account_circle</span>
                                        <span>Khách thuê: <strong class="text-on-surface font-medium">Trần Đình Bảo</strong> (Đã cọc CCCD &amp; Ký quỹ đầy đủ)</span>
                                    </span>
                                </div>
                                <div class="flex items-center gap-3 mt-1 font-body-sm text-body-sm">
                                    <span class="text-on-surface">Thu nhập thực nhận: <strong class="text-secondary font-semibold">1.200.000₫</strong></span>
                                    <span class="text-on-surface-variant">|</span>
                                    <span class="text-on-surface-variant">Ký quỹ gián tiếp bảo đảm: 12.000.000₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-row md:flex-col items-center md:items-end justify-between w-full md:w-auto gap-space-sm pt-space-sm md:pt-0 shrink-0">
                            <div class="flex items-center gap-2">
                                <button class="px-3 py-2 bg-surface-container hover:bg-surface-container-high text-on-surface rounded-lg font-label-lg text-label-lg transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span class="hidden sm:inline">Nhắn khách</span>
                                </button>
                                <button class="px-4 py-2 bg-surface-container-high hover:bg-surface-container text-on-surface rounded-lg font-label-lg text-label-lg transition-colors flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    <span>Chi tiết đơn</span>
                                </button>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                <span class="material-symbols-outlined text-[13px]">verified</span>
                                <span>Bảo chứng RentShare Care 100%</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Trust Architecture Footnote & Guarantee Summary -->
                <div class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-md">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center text-on-secondary-container shrink-0">
                            <span class="material-symbols-outlined text-[20px]">security</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-lg text-label-lg text-on-surface">Ký quỹ an toàn &amp; Bảo chứng tranh chấp tự động</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Mọi giao dịch trên RentShare đều được giữ cọc qua tài khoản ký quỹ trung gian. Tiền chỉ được giải ngân cho chủ thiết bị sau khi 2 bên ký hoàn tất biên bản kiểm tra trả đồ.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-space-sm shrink-0">
                        <a class="font-label-lg text-label-lg text-secondary hover:underline flex items-center gap-1" href="#">
                            <span>Quy trình bảo hiểm tài sản</span>
                            <span class="material-symbols-outlined text-[16px]">launch</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
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