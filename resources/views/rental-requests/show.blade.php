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
                <nav class="hidden xl:flex items-center gap-space-md" data-active-classes="text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg"><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="kham-pha" href="#">Khám phá</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="danh-sach-tai-san" href="#">Danh sách tài sản</a><a aria-current="page" class="transition-colors inline-flex items-center gap-1.5 text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg" data-path="yeu-cau-thue" href="#"><span>Yêu cầu thuê</span><span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-1.5 py-0.5 rounded-full">Mới</span></a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="don-thue-cua-toi" href="#">Đơn thuê của tôi</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors inline-flex items-center gap-1.5" data-path="tin-nhan" href="#"><span>Tin nhắn</span><span class="bg-secondary text-on-secondary font-label-sm text-label-sm w-4 h-4 rounded-full flex items-center justify-center text-[10px]">2</span></a></nav>
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
            <div class="w-full max-w-7xl mx-auto px-gutter py-space-md">
                <!-- Top Breadcrumb & Status Bar -->
                <div class="flex flex-wrap items-center justify-between gap-space-sm mb-space-lg">
                    <nav class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md">
                        <a class="hover:text-secondary transition-colors" href="#">Bảng tin yêu cầu thuê</a>
                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        <a class="hover:text-secondary transition-colors" href="#">Đồ cắm trại &amp; Dã ngoại</a>
                        <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                        <span class="text-on-surface font-semibold">Yêu cầu #REQ-8821</span>
                    </nav>
                    <div class="flex items-center gap-space-sm">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                            Đang nhận đề xuất (3/5)
                        </span>
                        <span class="text-on-surface-variant font-label-sm text-label-sm">Đăng cách đây 4 giờ</span>
                    </div>
                </div>
                <!-- Main Grid Layout -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
                    <!-- Left Column: Request Details & Offers (8 cols) -->
                    <div class="lg:col-span-8 flex flex-col gap-space-xl min-w-0">
                        <!-- Requester Profile Banner Card -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                                <div class="flex items-center gap-space-md">
                                    <div class="relative">
                                        <img class="w-16 h-16 rounded-full object-cover shadow-sm" data-alt="Chân dung người dùng Lê Hoàng Phúc đang mỉm cười tự tin ngoài trời, phong cách thể thao dã ngoại năng động, ánh sáng tự nhiên ấm áp, màu sắc sắc nét hiện đại" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCr0S39jFMaFkCctNhoGKAJ08t-6YFykWYTnDWdovAxEOfByttkLbVYpqqUl2KK7AQ39QM_1nShcBlQC9nRG877dK2EVHcSc8k8XYHzl1E-_igiUYGDBQRnD8E2AkAJGiT3tpbwQ44VCdOulhgULbygbZU9c7wKsnwvCA0o3NF7I9MAnZH-b4bdzgNcduXYtP_n41WpxxxWrTY8qJ18Mf4Bw5XhDne54PpS_L5hag5MveawZ5jIaVk" />
                                        <span class="absolute bottom-0 right-0 w-4 h-4 bg-secondary rounded-full flex items-center justify-center text-on-secondary text-[10px]" title="Đã xác thực CCCD">
                                            <span class="material-symbols-outlined text-[12px]">verified</span>
                                        </span>
                                    </div>
                                    <div class="min-w-0">
                                        <div class="flex flex-wrap items-center gap-2">
                                            <h2 class="font-headline-sm text-headline-sm text-on-surface truncate">Lê Hoàng Phúc</h2>
                                            <span class="inline-flex items-center gap-1 bg-surface-container-low text-secondary font-label-sm text-label-sm px-2.5 py-0.5 rounded-full font-semibold">
                                                <span class="material-symbols-outlined text-[14px]">shield</span>
                                                CCCD eKYC Đã xác minh
                                            </span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Thành viên từ tháng 04/2023 • TP. Huế</p>
                                    </div>
                                </div>
                                <!-- Trust Stats Pill Box -->
                                <div class="grid grid-cols-3 gap-space-sm bg-surface-container-low p-space-sm rounded-lg sm:w-auto w-full text-center sm:text-left">
                                    <div class="px-space-xs">
                                        <span class="block font-label-sm text-label-sm text-on-surface-variant">Điểm uy tín</span>
                                        <span class="font-headline-sm text-headline-sm text-secondary font-bold">96<span class="text-xs font-normal text-on-surface-variant">/100</span></span>
                                    </div>
                                    <div class="px-space-xs">
                                        <span class="block font-label-sm text-label-sm text-on-surface-variant">Đã thuê</span>
                                        <span class="font-headline-sm text-headline-sm text-on-surface font-bold">12 <span class="text-xs font-normal text-on-surface-variant">lần</span></span>
                                    </div>
                                    <div class="px-space-xs">
                                        <span class="block font-label-sm text-label-sm text-on-surface-variant">Đúng hạn</span>
                                        <span class="font-headline-sm text-headline-sm text-secondary font-bold">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Request Spec Card -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-lg">
                            <div>
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-md">Yêu cầu tìm thuê</span>
                                    <span class="text-on-surface-variant font-body-sm text-body-sm">• Khu vực Trung tâm Huế</span>
                                </div>
                                <h1 class="font-headline-lg text-headline-lg text-on-surface leading-snug">
                                    Cần thuê lều cắm trại 4 người chống thấm nước tốt + 1 bộ bàn ghế gấp dã ngoại
                                </h1>
                            </div>
                            <!-- Key Metrics Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                                <div class="bg-surface-container-low rounded-xl p-space-md flex items-start gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-surface shrink-0">
                                        <span class="material-symbols-outlined text-[22px]">calendar_today</span>
                                    </div>
                                    <div>
                                        <span class="block font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Thời gian thuê</span>
                                        <span class="font-label-lg text-label-lg text-on-surface block mt-0.5">10/10 – 12/10/2025</span>
                                        <span class="text-body-sm font-body-sm text-secondary font-medium">08:00 sáng – 18:00 chiều (3 ngày)</span>
                                    </div>
                                </div>
                                <div class="bg-surface-container-low rounded-xl p-space-md flex items-start gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-surface shrink-0">
                                        <span class="material-symbols-outlined text-[22px]">payments</span>
                                    </div>
                                    <div>
                                        <span class="block font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Ngân sách tối đa</span>
                                        <div class="flex items-baseline gap-1 mt-0.5">
                                            <span class="font-headline-sm text-headline-sm text-secondary font-bold">250.000 đ</span>
                                            <span class="text-body-sm font-body-sm text-on-surface-variant">/ ngày</span>
                                        </div>
                                        <span class="text-body-sm font-body-sm text-on-surface-variant">Ước tính 750.000 đ tổng cộng</span>
                                    </div>
                                </div>
                                <div class="bg-surface-container-low rounded-xl p-space-md flex items-start gap-3">
                                    <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-surface shrink-0">
                                        <span class="material-symbols-outlined text-[22px]">pin_drop</span>
                                    </div>
                                    <div>
                                        <span class="block font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Địa điểm nhận/trả</span>
                                        <span class="font-label-lg text-label-lg text-on-surface block mt-0.5">TP. Huế</span>
                                        <span class="text-body-sm font-body-sm text-on-surface-variant">Gần bờ sông Hương hoặc trung tâm</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Photo of Request Inspiration -->
                            <div class="flex flex-col gap-2">
                                <span class="font-label-lg text-label-lg text-on-surface">Hình ảnh kiểu dáng &amp; mẫu lều mong muốn:</span>
                                <div class="relative w-full rounded-xl overflow-hidden aspect-[16/9] shadow-sm">
                                    <img class="w-full h-full object-cover" data-alt="Hình ảnh thực tế một chiếc lều cắm trại 4 người màu xanh lá cây và bạc dựng trên đồng cỏ thảo nguyên rực rỡ hoa dại, nhìn ra rặng núi đá hùng vĩ hùng vĩ dưới bầu trời xanh ngắt, bàn ghế dã ngoại gấp gọn bên cạnh bếp lửa cắm trại ấm cúng" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4Jgfae2zMCKUbDKu4L8c8b1kBxIMvXjouYARwaU1DaYtTTrm2do2EBycICa9RuXRmqdyj2h4P1a7Vm9paphQ_mQfqumZEva26xd8Ea-QvVWo1w-yjiOemAApg2bxpgW7gY2dQw9mqD3iQetDbc8KTlpTGAaji4rVY9OZZKQmO0M5eziDA2u_jd0eq9f2pT32j9jDiMxa905uYPRk6Z5NGB-HJCFnEhxEv-jueO2cea_n-UGd7xyo" />
                                    <div class="absolute bottom-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-1.5 rounded-lg text-on-surface font-label-sm text-label-sm flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">image</span>
                                        <span>Ảnh tham khảo thực tế do người thuê cung cấp</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Description Section -->
                            <div class="flex flex-col gap-space-xs">
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Ghi chú &amp; Yêu cầu kỹ thuật</h3>
                                <div class="p-space-md bg-surface-container-low rounded-lg text-on-surface font-body-lg text-body-lg leading-relaxed">
                                    “Gia đình mình (2 người lớn + 2 bé nhỏ) đi cắm trại cuối tuần dã ngoại gần Huế. Cần lều 4 người khung hợp kim hoặc sợi thủy tinh chắc chắn, lớp vải ngoài chống mưa tốt từ 2000mm trở lên. Có thêm 1 bàn nhôm gấp cùng 2-4 ghế xếp du lịch càng tốt. Cam kết sử dụng cẩn thận, không hút thuốc trong lều, vệ sinh khô ráo sạch sẽ trước khi hoàn trả cho chủ xe/chủ đồ.”
                                </div>
                            </div>
                            <!-- Tags -->
                            <div class="flex flex-wrap gap-2 pt-space-xs">
                                <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#Leu4Nguoi</span>
                                <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#DoCamTraiHue</span>
                                <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#BanGheGap</span>
                                <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#Naturehike</span>
                                <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#Coleman</span>
                            </div>
                        </div>
                        <!-- Section: Offers Received -->
                        <div class="flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-sm">
                                    <h2 class="font-headline-md text-headline-md text-on-surface">Đề xuất cho thuê nhận được</h2>
                                    <span class="bg-secondary text-on-secondary px-2.5 py-0.5 rounded-full font-label-md text-label-md font-semibold">3 đề xuất</span>
                                </div>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Sắp xếp theo độ tin cậy</span>
                            </div>
                            <!-- Offer Card 1 (Top Recommended) -->
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md transition-all">
                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                                    <div class="flex items-center gap-space-sm">
                                        <div class="relative">
                                            <img class="w-12 h-12 rounded-full object-cover" data-alt="Chân dung chủ tài sản Nguyễn Văn Hùng tươi cười, ăn mặc gọn gàng chuyên nghiệp, phông nền cửa hàng thiết bị dã ngoại ngoài trời" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpoGYVCZINOd4QLpzIuIqu9ym1XaIaPokswj_jx_I8CqCrG59YBg5h6amFalx7HGLkoW0tP5CUVDYLqLyhYdYEcwRIFH0hbmNRvkTffcvofzEHrZZsZ0vwMlKqXDle0PNHf3s3SuESvI5ItHMxSIOCcIY7Mm5pySZXJp_z6-p9PnJjJZ41OFUhjo2vUpHuptt75T5aesiV2GYTU01rEFSJs5Gj-rFRtVJbBVx6RkoBIZkeIiz2xXE" />
                                            <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-secondary rounded-full ring-2 ring-surface-container-lowest"></span>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Nguyễn Văn Hùng</span>
                                                <span class="inline-flex items-center gap-0.5 bg-surface-container-low text-secondary text-[11px] font-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                    <span class="material-symbols-outlined text-[12px]">verified</span> Uy tín 98/100
                                                </span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Chủ tài sản Pro • Cách bạn 1.8 km (P. Phú Hội, Huế)</span>
                                        </div>
                                    </div>
                                    <div class="text-right flex md:flex-col items-baseline md:items-end justify-between">
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-secondary font-bold">220.000 đ</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">/ ngày</span>
                                        </div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đặt cọc: 500.000 đ (Qua Ký quỹ)</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-4 gap-space-md bg-surface-container-low p-space-sm rounded-lg">
                                    <div class="sm:col-span-1 rounded-lg overflow-hidden h-24 sm:h-full min-h-[5rem]">
                                        <img class="w-full h-full object-cover" data-alt="Bộ lều cắm trại Coleman 4 người thực tế màu xanh rêu kèm bàn nhôm dã ngoại gập gọn và 4 ghế tựa lưng xếp gọn gàng trong túi bạt cao cấp" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEy1vDxgmFHRYMOvv8dejsFhy4QVBZ8-FFzPlTFP5cJSEf95eU6OQhDlGIpGssSIxGRtDJaLUbQLnq1FppTHcsSoFjyPYGhZm4X-hsbyhv7Z8UzSPSRcw2NqSa9p1GB7GpiYQI94pFHz4XP5kKlMwjoBUwBcnYb81YrKnjl6TSEwe2QcJC6JkdZHv_DrT7dzkMg69IX4b9N334E3-BGhPNOvmobN4H804w-2wbHnWXu0AHavE4tCw" />
                                    </div>
                                    <div class="sm:col-span-3 flex flex-col justify-between">
                                        <div>
                                            <h4 class="font-label-lg text-label-lg text-on-surface font-semibold">Combo Lều Coleman Sundome 4P + Bàn ghế Naturehike hợp kim</h4>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                                “Đồ mình mua hè năm ngoái, mới dùng 2 lần đi Bạch Mã. Lều đã phủ nano chống thấm tuyệt đối, kèm sẵn bạt lót đáy và búa đóng cọc. Hỗ trợ giao tận nơi miễn phí quanh bờ nam sông Hương.”
                                            </p>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-2 mt-2">
                                            <span class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded">Giao tận nơi</span>
                                            <span class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded">Miễn phí cọc giấy tờ</span>
                                            <span class="text-on-surface-variant font-body-sm text-body-sm ml-auto">Gửi lúc 10:15 hôm nay</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end gap-space-sm pt-space-xs">
                                    <button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg px-4 py-2 rounded-lg flex items-center gap-1.5 transition-colors" type="button">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                        <span>Chat trao đổi</span>
                                    </button>
                                    <button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg px-5 py-2 rounded-lg flex items-center gap-1.5 shadow-sm transition-all" type="button">
                                        <span class="material-symbols-outlined text-[18px]">check_circle</span>
                                        <span>Chấp nhận thuê combo này</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Offer Card 2 -->
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md transition-all">
                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                                    <div class="flex items-center gap-space-sm">
                                        <div class="relative">
                                            <img class="w-12 h-12 rounded-full object-cover" data-alt="Chân dung Trần Anh Tuấn đang cắm trại với nón kết và trang phục đi trekking vui tươi ngoài tự nhiên" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOQrr2bB5AYwRyKKb5AYgNM-XhLKZe3e4neICa-lplMTY6Z8qeR4-h057dcohyWXwprrGG-gH_wDFPsSXb2jGg07vSrVjXUwsP1J4oaoT5STWGLuc4bd5yMDPMXNRFD4QtU33h4EmpHFHkkXHBNncF_0VuyqIvjn2PqslcX1mWEqRKc9ir84PG3fAtxVj6MeQDMz9c6xzqcBssGYue95rC4DpHVrDxKnBubf_45FSPcyzc3P2i6gA" />
                                            <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-secondary rounded-full ring-2 ring-surface-container-lowest"></span>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Trần Anh Tuấn</span>
                                                <span class="inline-flex items-center gap-0.5 bg-surface-container-low text-secondary text-[11px] font-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                    <span class="material-symbols-outlined text-[12px]">verified</span> Uy tín 94/100
                                                </span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Cá nhân • Cách bạn 3.5 km (Đường Điện Biên Phủ, Huế)</span>
                                        </div>
                                    </div>
                                    <div class="text-right flex md:flex-col items-baseline md:items-end justify-between">
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-secondary font-bold">180.000 đ</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">/ ngày</span>
                                        </div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đặt cọc: 400.000 đ</span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-4 gap-space-md bg-surface-container-low p-space-sm rounded-lg">
                                    <div class="sm:col-span-1 rounded-lg overflow-hidden h-24 sm:h-full min-h-[5rem]">
                                        <img class="w-full h-full object-cover" data-alt="Lều cắm trại 4 người Naturehike P-Series màu xanh lá cây đặt trên thảm cỏ ven hồ nước trong veo, khung lều dựng chắc chắn sắc nét" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsTo3Yq1cxkBXQOcgZUJy77u1ycgNTe65WgFWQBHgecoiTB2SQTQl_1fu_V5ync2a96UAdSVFqAi4QP1KW9TeX_xY0Vipwz9Sphjo8MEaK1jPwR7XnFRutj8WBLMNTlwfa-HAgwU54uFmng9nYb2WbwHIdtolK5JgylJBAdbWa_vNVsS0KnL6qPmaM3d7ptYl_C_ToyFGzhxQTpmsBAMwGr_5gIKRjlq4rkisdfSA8SS3PUieVzu0" />
                                    </div>
                                    <div class="sm:col-span-3 flex flex-col justify-between">
                                        <div>
                                            <h4 class="font-label-lg text-label-lg text-on-surface font-semibold">Lều Naturehike P-Series 4 người 2 lớp chống mưa UPF50+</h4>
                                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                                “Mình có sẵn lều Naturehike P4 rất nhẹ và thoáng khí, 2 cửa trước sau. Không có kèm bàn nhưng có tặng kèm đèn treo lều năng lượng mặt trời. Bạn qua nhà mình nhận hoặc book Grab ship nhé.”
                                            </p>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-2 mt-2">
                                            <span class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded">Tự nhận tại nhà</span>
                                            <span class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded">Tặng mượn đèn lều</span>
                                            <span class="text-on-surface-variant font-body-sm text-body-sm ml-auto">Gửi lúc 11:30 hôm nay</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end gap-space-sm pt-space-xs">
                                    <button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg px-4 py-2 rounded-lg flex items-center gap-1.5 transition-colors" type="button">
                                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                                        <span>Xem tài sản &amp; Chat</span>
                                    </button>
                                </div>
                            </div>
                            <!-- Offer Card 3 -->
                            <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md transition-all">
                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                                    <div class="flex items-center gap-space-sm">
                                        <div class="relative">
                                            <img class="w-12 h-12 rounded-full object-cover" data-alt="Chân dung đại diện cửa hàng Hué Outdoor Camping Equipment với logo chuyên nghiệp hiện đại" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlci2RfOMpTm7z1l-120P_S_2GThlGmMZT6_ImqoeJwWRazQJAnAvsxz1oNzTCg8p6rE6nIDGy56-xB-7uJ8v1P8Zp855bGXkfEOpnNjqtbDc0wB546aC0oKxSMH0oxRBsq-bI2DwyxKfcQuJUW4dcQEnwgQCLcMdv91O6SupC-ukjwhCLO5e33sTJUTQAkLxkzV32aCaUS16cyrYEA8zMzoDMMdwwSEfSOAsfrKDuU75_RGvGMMg" />
                                            <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-secondary rounded-full ring-2 ring-surface-container-lowest"></span>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Hue Camping Hub</span>
                                                <span class="inline-flex items-center gap-0.5 bg-surface-container-low text-secondary text-[11px] font-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                    <span class="material-symbols-outlined text-[12px]">verified</span> Shop Uy tín 99/100
                                                </span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Cửa hàng trang thiết bị dã ngoại • 0.9 km (Đường Lê Lợi, Huế)</span>
                                        </div>
                                    </div>
                                    <div class="text-right flex md:flex-col items-baseline md:items-end justify-between">
                                        <div class="flex items-baseline gap-1">
                                            <span class="font-headline-md text-headline-md text-secondary font-bold">250.000 đ</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">/ ngày</span>
                                        </div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đặt cọc: 0 đ (Cầm CCCD gốc)</span>
                                    </div>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface">
                                    Gói trọn bộ cắm trại gia đình: 1 Lều Vintage Glamping 4-5 người, 1 Thảm lót cách nhiệt, 1 Bàn dã ngoại cuộn gỗ, 4 Ghế dù gấp gọn Kermit. Đồ mới 100%, bảo dưỡng thơm tho khử khuẩn sau mỗi lượt thuê.
                                </p>
                                <div class="flex items-center justify-end gap-space-sm pt-space-xs">
                                    <button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg px-4 py-2 rounded-lg flex items-center gap-1.5 transition-colors" type="button">
                                        <span class="material-symbols-outlined text-[18px]">chat</span>
                                        <span>Chat với Shop</span>
                                    </button>
                                    <button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg px-5 py-2 rounded-lg flex items-center gap-1.5 shadow-sm transition-all" type="button">
                                        <span>Xem chi tiết gói</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Public Q&A / Community Discussion -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Hỏi đáp công khai với người cần thuê</h3>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">2 câu hỏi</span>
                            </div>
                            <!-- Existing Comments -->
                            <div class="flex flex-col gap-space-md">
                                <!-- Comment 1 -->
                                <div class="flex items-start gap-space-sm">
                                    <img class="w-9 h-9 rounded-full object-cover" data-alt="Chân dung avatar người hỏi Nguyễn Minh với phong cách trẻ trung" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrn7SnxlJjonbGimIn3NBT_0ZHAnPbo0woONqRwHVTgwbXr67H3FkTGoXOwrA8O9h87n76X4zIF5mWI670dmchnDFi_H2J2eyy0dGTM_JF4FhrJ4pf88ONesY82_Moykssp0qcLPVfR6pvM83Ftc4YxqAIY4_kgwuDb4ePxIDm5mqy0SCvB9fXt0RDXoM1yScbkBrkUWu2u6cbLLnefhDRx5azdOdAziqfd9fsAUl8i-SEhw8z3kU" />
                                    <div class="flex-1 bg-surface-container-low rounded-xl p-space-sm">
                                        <div class="flex items-center justify-between mb-1">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Minh Triết</span>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">2 giờ trước</span>
                                        </div>
                                        <p class="font-body-md text-body-md text-on-surface">Chào bạn Phúc, bạn có cần thêm bếp nướng dã ngoại mini và vỉ than không? Mình có sẵn nguyên bộ kèm túi than sạch.</p>
                                        <!-- Reply -->
                                        <div class="mt-space-sm pl-space-md border-l-2 border-secondary flex items-start gap-space-xs">
                                            <div class="min-w-0">
                                                <div class="flex items-center gap-1.5 mb-0.5">
                                                    <span class="font-label-sm text-label-sm text-secondary font-bold">Lê Hoàng Phúc</span>
                                                    <span class="bg-secondary-container text-on-secondary-container font-label-sm text-[10px] px-1.5 py-0.2 rounded font-semibold">Chủ bài đăng</span>
                                                </div>
                                                <p class="font-body-sm text-body-sm text-on-surface">Dạ em cảm ơn anh, gia đình em đợt này tự chuẩn bị đồ ăn nấu sẵn nên chỉ cần lều với bàn ghế ăn nhẹ thôi ạ!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Comment 2 -->
                                <div class="flex items-start gap-space-sm">
                                    <img class="w-9 h-9 rounded-full object-cover" data-alt="Chân dung một cô gái năng động thích du lịch trải nghiệm tên Hà My" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5B_-p4n3dERbEhA8xN22Gezd9lAE_63N1g5iffYfRkqK4llqlgxA4bn0vpXgILK5Vmk7Gf0mfuHDWy3sulg99h5im5bWEYWWs-5a0lvDm7K2EGZ8ZVu2y4JLfVdEK6GtHcLtRWzyK0D1LIA2zRYin8w3iWNiqX7M7I8TzS0BRr4mY2TIdtpz84y2WhnqVMSIeMeEB9R0__UMrfwJ6HdIjOy7saTsXQhqyByR7kUb-9ykLP8lP0EA" />
                                    <div class="flex-1 bg-surface-container-low rounded-xl p-space-sm">
                                        <div class="flex items-center justify-between mb-1">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Hà My Outdoor</span>
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">1 giờ trước</span>
                                        </div>
                                        <p class="font-body-md text-body-md text-on-surface">Thời gian trả đồ vào chiều ngày 12/10 khoảng 18h tại khách sạn Silk Path đường Lê Lợi được không anh?</p>
                                    </div>
                                </div>
                            </div>
                            <!-- New Comment Input -->
                            <div class="flex items-center gap-space-sm pt-space-xs">
                                <input class="flex-1 bg-surface-container-low text-on-surface font-body-md text-body-md px-4 py-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Đặt câu hỏi công khai cho anh Phúc về yêu cầu này..." type="text" />
                                <button class="bg-secondary hover:bg-on-secondary-fixed-variant text-on-secondary font-label-md text-label-md px-4 py-2.5 rounded-lg transition-colors flex items-center gap-1" type="button">
                                    <span>Gửi hỏi</span>
                                    <span class="material-symbols-outlined text-[16px]">send</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column: Offer Submission Form & Escrow Trust Assurances (4 cols) -->
                    <div class="lg:col-span-4 flex flex-col gap-space-lg sticky top-20">
                        <!-- Submission Card -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-md flex flex-col gap-space-md">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">handshake</span>
                                </div>
                                <div>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Gửi đề xuất cho thuê</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Bạn có món đồ người này đang tìm?</p>
                                </div>
                            </div>
                            <form class="flex flex-col gap-space-md" onsubmit="event.preventDefault(); alert('Đề xuất của bạn đã được gửi thành công đến Lê Hoàng Phúc!');">
                                <!-- Asset Selection Selector -->
                                <div>
                                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 font-medium">Chọn tài sản từ kho của bạn:</label>
                                    <div class="relative">
                                        <select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md px-3.5 py-2.5 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-secondary pr-10 cursor-pointer">
                                            <option value="1">Lều Coleman 4P + Bàn ghế (Đang rảnh)</option>
                                            <option value="2">Bộ bếp gas dã ngoại Campingmoon</option>
                                            <option value="custom">+ Đề xuất món đồ ngoài danh mục...</option>
                                        </select>
                                        <span class="material-symbols-outlined absolute right-3 top-2.5 text-on-surface-variant pointer-events-none text-[20px]">expand_more</span>
                                    </div>
                                </div>
                                <!-- Price & Deposit Inputs -->
                                <div class="grid grid-cols-2 gap-space-sm">
                                    <div>
                                        <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 font-medium">Giá thuê (đ/ngày)</label>
                                        <div class="relative">
                                            <input class="w-full bg-surface-container-low text-on-surface font-label-lg text-label-lg px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" type="text" value="200.000" />
                                            <span class="absolute right-2.5 top-2 text-[12px] text-on-surface-variant">đ</span>
                                        </div>
                                    </div>
                                    <div>
                                        <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 font-medium">Tiền cọc yêu cầu</label>
                                        <div class="relative">
                                            <input class="w-full bg-surface-container-low text-on-surface font-label-lg text-label-lg px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" type="text" value="500.000" />
                                            <span class="absolute right-2.5 top-2 text-[12px] text-on-surface-variant">đ</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Total Revenue Estimate Box -->
                                <div class="bg-surface-container-low p-space-sm rounded-lg flex items-center justify-between">
                                    <div>
                                        <span class="block font-label-sm text-label-sm text-on-surface-variant">Thu nhập dự kiến (3 ngày)</span>
                                        <span class="font-headline-sm text-headline-sm text-secondary font-bold">600.000 đ</span>
                                    </div>
                                    <span class="text-[11px] font-label-sm text-on-secondary-container bg-secondary-container px-2 py-0.5 rounded-md font-semibold">Phí sàn 0%</span>
                                </div>
                                <!-- Note / Message Input -->
                                <div>
                                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 font-medium">Lời nhắn &amp; Điều kiện kèm theo:</label>
                                    <textarea class="w-full bg-surface-container-low text-on-surface font-body-sm text-body-sm p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary resize-none" placeholder="Mô tả tình trạng đồ dùng, phụ kiện tặng kèm, hoặc địa chỉ nhận đồ thuận tiện..." rows="3"></textarea>
                                </div>
                                <!-- Checkbox Option -->
                                <label class="flex items-start gap-2.5 cursor-pointer">
                                    <input checked="" class="mt-0.5 rounded text-secondary focus:ring-secondary" type="checkbox" />
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">
                                        Tôi đồng ý giao nhận đúng tình trạng đã cam kết và tuân thủ quy chế giải quyết tranh chấp RentShare.
                                    </span>
                                </label>
                                <!-- Submit CTA Buttons -->
                                <div class="flex flex-col gap-2 pt-space-xs">
                                    <button class="w-full bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-3 rounded-lg flex items-center justify-center gap-2 shadow-md transition-all" type="submit">
                                        <span class="material-symbols-outlined text-[20px]">send_time_extension</span>
                                        <span>Gửi đề xuất cho thuê ngay</span>
                                    </button>
                                    <button class="w-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg py-2.5 rounded-lg flex items-center justify-center gap-2 transition-colors" type="button">
                                        <span class="material-symbols-outlined text-[18px]">mail</span>
                                        <span>Nhắn tin riêng cho anh Phúc</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- RentShare Safety Guarantee Card -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center gap-2 text-secondary">
                                <span class="material-symbols-outlined text-[24px]">verified_user</span>
                                <h4 class="font-label-lg text-label-lg font-bold uppercase tracking-wider">Bảo chứng an toàn RentShare</h4>
                            </div>
                            <ul class="flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant">
                                <li class="flex items-start gap-2.5">
                                    <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">security</span>
                                    <span><strong>Bảo hiểm hư hại 10.000.000 đ:</strong> Tự động kích hoạt khi bàn giao tài sản qua ứng dụng.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">account_balance_wallet</span>
                                    <span><strong>Ký quỹ tiền cọc minh bạch:</strong> RentShare giữ tiền cọc trung gian an toàn và chỉ hoàn trả khi hai bên xác nhận đồ nguyên vẹn.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">badge</span>
                                    <span><strong>Xác thực CCCD gắn chip:</strong> 100% người thuê và người cho thuê đều trải qua quy trình eKYC định danh sinh trắc học.</span>
                                </li>
                            </ul>
                            <div class="pt-2 border-t border-surface-container-high flex items-center justify-between text-[12px] font-label-sm text-on-surface-variant">
                                <span>Cần trợ giúp trực tiếp?</span>
                                <a class="text-secondary font-semibold hover:underline flex items-center gap-1" href="#">
                                    <span>Hotline 24/7</span>
                                    <span class="material-symbols-outlined text-[14px]">call</span>
                                </a>
                            </div>
                        </div>
                        <!-- Mini Regional Demand Widget -->
                        <div class="bg-surface-container-low rounded-xl p-space-md flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[20px]">trending_up</span>
                                </div>
                                <div>
                                    <span class="block font-label-md text-label-md text-on-surface font-semibold">Nhu cầu đồ dã ngoại tại Huế</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Tăng 35% trong tuần này</span>
                                </div>
                            </div>
                            <span class="material-symbols-outlined text-on-surface-variant text-[18px]">north_east</span>
                        </div>
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