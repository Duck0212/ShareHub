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
                <nav class="hidden xl:flex items-center gap-space-md" data-active-classes="text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg"><a aria-current="page" class="transition-colors text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg" data-path="kham-pha" href="#">Khám phá</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="danh-sach-tai-san" href="#">Danh sách tài sản</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors inline-flex items-center gap-1.5" data-path="yeu-cau-thue" href="#"><span>Yêu cầu thuê</span><span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-1.5 py-0.5 rounded-full">Mới</span></a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors" data-path="don-thue-cua-toi" href="#">Đơn thuê của tôi</a><a class="text-on-surface-variant hover:text-on-surface font-body-md text-body-md transition-colors inline-flex items-center gap-1.5" data-path="tin-nhan" href="#"><span>Tin nhắn</span><span class="bg-secondary text-on-secondary font-label-sm text-label-sm w-4 h-4 rounded-full flex items-center justify-center text-[10px]">2</span></a></nav>
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
            <!-- Top Highlight Bar / Notification -->
            <section class="w-full bg-surface-container-low py-2.5">
                <div class="max-w-7xl mx-auto px-gutter flex flex-wrap items-center justify-between gap-3 text-on-surface-variant font-label-md text-label-md">
                    <div class="flex items-center gap-2">
                        <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-secondary text-on-secondary">
                            <span class="material-symbols-outlined text-[13px]">format_image_left</span>
                        </span>
                        <span class="font-medium text-on-surface">Bảo chứng cọc qua Escrow an toàn 100%</span>
                        <span class="hidden sm:inline text-outline">• Xác minh danh tính CCCD &amp; VNeID định danh tự động</span>
                    </div>
                    <div class="flex items-center gap-4 text-on-surface-variant">
                        <span class="inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-[16px] text-secondary">verified</span>
                            <span>12.400+ Giao dịch bảo vệ</span>
                        </span>
                        <a class="text-secondary font-semibold hover:underline" href="#">Tìm hiểu cơ chế bảo hiểm →</a>
                    </div>
                </div>
            </section>
            <!-- Hero & Primary Search Engine -->
            <section class="relative w-full bg-gradient-to-b from-surface via-surface-container-low to-surface py-space-xl">
                <div class="max-w-7xl mx-auto px-gutter flex flex-col items-center">
                    <!-- Sub-headline & Title with institutional clarity -->
                    <div class="text-center max-w-3xl mb-space-lg">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase tracking-wider mb-3">
                            <span class="material-symbols-outlined text-[14px]">bolt</span>
                            <span>Sở hữu trải nghiệm, tối ưu chi phí</span>
                        </div>
                        <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
                            Thuê đồ dùng an tâm, tiết kiệm &amp; tiện lợi
                        </h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant mt-2">
                            Kết nối trực tiếp chủ tài sản và người cần thuê với quy trình ký quỹ bảo vệ 2 chiều.
                        </p>
                    </div>
                    <!-- Main Search Box Console -->
                    <div class="w-full max-w-5xl bg-surface-container-lowest rounded-2xl shadow-xl p-3 md:p-4">
                        <!-- Toggle Tabs: Thuê đồ / Tìm người cần đồ -->
                        <div class="flex items-center justify-between pb-3 mb-3 border-b border-surface-container">
                            <div class="flex items-center gap-2">
                                <button class="px-4 py-1.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg flex items-center gap-2 shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[18px]">search</span>
                                    <span>Tìm tài sản cần thuê</span>
                                </button>
                                <button class="px-4 py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface-variant font-label-lg text-label-lg flex items-center gap-2 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-[18px]">handshake</span>
                                    <span>Ai đang cần đồ quanh bạn?</span>
                                </button>
                            </div>
                            <span class="hidden md:inline-flex items-center gap-1.5 font-label-sm text-label-sm text-secondary bg-surface-container-low px-3 py-1 rounded-full">
                                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                                Hơn 1.850 tài sản sẵn sàng hôm nay
                            </span>
                        </div>
                        <!-- Inputs Row Grid -->
                        <form class="grid grid-cols-1 md:grid-cols-12 gap-3" onsubmit="event.preventDefault();">
                            <!-- Keyword Input -->
                            <div class="md:col-span-4 bg-surface-container-low rounded-xl px-3.5 py-2.5 flex items-center gap-3">
                                <span class="material-symbols-outlined text-outline">search</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label class="font-label-sm text-label-sm text-on-surface-variant uppercase font-medium">Tài sản / Từ khoá</label>
                                    <input class="bg-transparent border-0 outline-none text-on-surface font-body-md text-body-md placeholder:text-outline p-0 w-full" placeholder="Vespa, Sony A7, Lều cắm trại..." type="text" value="Vespa Primavera" />
                                </div>
                            </div>
                            <!-- Category Select -->
                            <div class="md:col-span-3 bg-surface-container-low rounded-xl px-3.5 py-2.5 flex items-center gap-3">
                                <span class="material-symbols-outlined text-outline">category</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label class="font-label-sm text-label-sm text-on-surface-variant uppercase font-medium">Danh mục</label>
                                    <select class="bg-transparent border-0 outline-none text-on-surface font-body-md text-body-md p-0 cursor-pointer w-full">
                                        <option value="all">Tất cả danh mục</option>
                                        <option selected="" value="vehicle">Phương tiện di chuyển</option>
                                        <option value="camping">Cắm trại &amp; Dã ngoại</option>
                                        <option value="camera">Máy ảnh &amp; Kỹ thuật số</option>
                                        <option value="tools">Dụng cụ &amp; Máy móc</option>
                                        <option value="costumes">Trang phục &amp; Phụ kiện</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Location Dropdown -->
                            <div class="md:col-span-3 bg-surface-container-low rounded-xl px-3.5 py-2.5 flex items-center gap-3">
                                <span class="material-symbols-outlined text-outline">location_on</span>
                                <div class="flex flex-col flex-1 min-w-0">
                                    <label class="font-label-sm text-label-sm text-on-surface-variant uppercase font-medium">Địa điểm</label>
                                    <select class="bg-transparent border-0 outline-none text-on-surface font-body-md text-body-md p-0 cursor-pointer w-full">
                                        <option selected="" value="hue">Huế (Thừa Thiên Huế)</option>
                                        <option value="hcm">TP. Hồ Chí Minh</option>
                                        <option value="hanoi">Hà Nội</option>
                                        <option value="danang">Đà Nẵng</option>
                                        <option value="dalat">Đà Lạt (Lâm Đồng)</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Search CTA Button -->
                            <div class="md:col-span-2 flex items-stretch">
                                <button class="w-full bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg rounded-xl py-3 px-4 flex items-center justify-center gap-2 transition-all shadow-md active:scale-[0.98]" type="submit">
                                    <span class="material-symbols-outlined text-[20px]">search</span>
                                    <span>Tìm kiếm</span>
                                </button>
                            </div>
                        </form>
                        <!-- Quick Filter Chips & Popular Searches Bar -->
                        <div class="mt-4 pt-3 flex flex-wrap items-center gap-2 text-on-surface-variant font-label-sm text-label-sm">
                            <span class="text-on-surface font-semibold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[16px] text-tertiary-fixed-dim">trending_up</span>
                                Tìm nhiều:
                            </span>
                            <button class="bg-surface-container hover:bg-surface-variant text-on-surface px-2.5 py-1 rounded-full transition-colors" type="button">
                                Thuê xe máy tay ga ở Huế
                            </button>
                            <button class="bg-surface-container hover:bg-surface-variant text-on-surface px-2.5 py-1 rounded-full transition-colors" type="button">
                                Lều cắm trại 4 người
                            </button>
                            <button class="bg-surface-container hover:bg-surface-variant text-on-surface px-2.5 py-1 rounded-full transition-colors" type="button">
                                Máy ảnh Sony A7IV
                            </button>
                            <button class="bg-surface-container hover:bg-surface-variant text-on-surface px-2.5 py-1 rounded-full transition-colors" type="button">
                                Trang phục biểu diễn
                            </button>
                            <button class="bg-surface-container hover:bg-surface-variant text-on-surface px-2.5 py-1 rounded-full transition-colors" type="button">
                                Bộ đồ nghề cầm tay Bosch
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Popular Categories Section -->
            <section class="w-full max-w-7xl mx-auto px-gutter py-space-lg">
                <div class="flex items-center justify-between mb-space-md">
                    <div>
                        <h2 class="font-headline-md text-headline-md text-on-surface">Danh mục tài sản phổ biến</h2>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Lựa chọn từ hơn 30+ danh mục thiết bị được thẩm định chất lượng</p>
                    </div>
                    <a class="font-label-lg text-label-lg text-secondary hover:text-on-secondary-container flex items-center gap-1" href="#">
                        <span>Xem tất cả danh mục</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-3">
                    <!-- Category 1 -->
                    <a class="group flex flex-col items-center p-3.5 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low shadow-sm hover:shadow-md transition-all text-center" href="#">
                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-2">
                            <span class="material-symbols-outlined text-[24px]">moped</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface font-semibold line-clamp-1">Phương tiện</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px] mt-0.5">380+ tài sản</span>
                    </a>
                    <!-- Category 2 -->
                    <a class="group flex flex-col items-center p-3.5 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low shadow-sm hover:shadow-md transition-all text-center" href="#">
                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-2">
                            <span class="material-symbols-outlined text-[24px]">camping</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface font-semibold line-clamp-1">Dã ngoại &amp; Lều</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px] mt-0.5">240+ tài sản</span>
                    </a>
                    <!-- Category 3 -->
                    <a class="group flex flex-col items-center p-3.5 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low shadow-sm hover:shadow-md transition-all text-center" href="#">
                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-2">
                            <span class="material-symbols-outlined text-[24px]">photo_camera</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface font-semibold line-clamp-1">Máy ảnh số</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px] mt-0.5">195+ tài sản</span>
                    </a>
                    <!-- Category 4 -->
                    <a class="group flex flex-col items-center p-3.5 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low shadow-sm hover:shadow-md transition-all text-center" href="#">
                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-2">
                            <span class="material-symbols-outlined text-[24px]">apparel</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface font-semibold line-clamp-1">Trang phục</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px] mt-0.5">140+ trang phục</span>
                    </a>
                    <!-- Category 5 -->
                    <a class="group flex flex-col items-center p-3.5 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low shadow-sm hover:shadow-md transition-all text-center" href="#">
                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-2">
                            <span class="material-symbols-outlined text-[24px]">sports_tennis</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface font-semibold line-clamp-1">Thể thao</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px] mt-0.5">110+ dụng cụ</span>
                    </a>
                    <!-- Category 6 -->
                    <a class="group flex flex-col items-center p-3.5 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low shadow-sm hover:shadow-md transition-all text-center" href="#">
                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-2">
                            <span class="material-symbols-outlined text-[24px]">construction</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface font-semibold line-clamp-1">Máy &amp; Đồ nghề</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px] mt-0.5">85+ thiết bị</span>
                    </a>
                    <!-- Category 7 -->
                    <a class="group flex flex-col items-center p-3.5 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low shadow-sm hover:shadow-md transition-all text-center" href="#">
                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-2">
                            <span class="material-symbols-outlined text-[24px]">celebration</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface font-semibold line-clamp-1">Tiệc &amp; Sự kiện</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px] mt-0.5">70+ phụ kiện</span>
                    </a>
                    <!-- Category 8 -->
                    <a class="group flex flex-col items-center p-3.5 rounded-xl bg-surface-container-lowest hover:bg-surface-container-low shadow-sm hover:shadow-md transition-all text-center" href="#">
                        <div class="w-12 h-12 rounded-xl bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-2">
                            <span class="material-symbols-outlined text-[24px]">more_horiz</span>
                        </div>
                        <span class="font-label-md text-label-md text-on-surface font-semibold line-clamp-1">Khác</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant text-[11px] mt-0.5">150+ món đồ</span>
                    </a>
                </div>
            </section>
            <!-- Trending Assets Section (Tài sản đang thịnh hành) -->
            <section class="w-full max-w-7xl mx-auto px-gutter py-space-lg">
                <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-space-md gap-2">
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-secondary"></span>
                            <span class="font-label-sm text-label-sm font-semibold text-secondary uppercase tracking-wider">Được thuê nhiều nhất</span>
                        </div>
                        <h2 class="font-headline-md text-headline-md text-on-surface mt-1">Tài sản đang thịnh hành</h2>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Lọc nhanh:</span>
                        <button class="px-3 py-1 bg-primary text-on-primary rounded-full font-label-sm text-label-sm" type="button">Tất cả</button>
                        <button class="px-3 py-1 bg-surface-container hover:bg-surface-variant text-on-surface rounded-full font-label-sm text-label-sm transition-colors" type="button">Xe máy</button>
                        <button class="px-3 py-1 bg-surface-container hover:bg-surface-variant text-on-surface rounded-full font-label-sm text-label-sm transition-colors" type="button">Máy ảnh</button>
                        <button class="px-3 py-1 bg-surface-container hover:bg-surface-variant text-on-surface rounded-full font-label-sm text-label-sm transition-colors" type="button">Lều trại</button>
                    </div>
                </div>
                <!-- Trending Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                    <!-- Card 1: Xe máy Vespa (Image 20) -->
                    <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                        <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A stylish modern gray Vespa scooter parked neatly along a clean European city sidewalk with warm natural sunlight, urban street aesthetic, high clarity photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtomSWU4hzPYs7LlBcbkB7II0hr9H6pPWsn28vibejyB_fHuKUuVxg07B3iLcZj6fUcyCh0yfcCDczwA-DXtUwaq-N-BYsfiBeJqVUoM5gnOFck5b-zAC465QkCjp7BM2WOFf3c8Kls6KQupPtA67VY_HPbK04aK4h_E1QrQk0KH24iVnJP6pkQaHBLxO8hNAPm3SgTjHnhn5nkL5dn8oGvbyXehE9xguqjGo6uZa5cjTlTSJACO4" />
                            <div class="absolute top-3 left-3 flex flex-col gap-1.5 items-start">
                                <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm font-semibold px-2.5 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                    Sẵn sàng cho thuê
                                </span>
                                <span class="bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm px-2.5 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-[14px] text-secondary">verified_user</span>
                                    Chủ xe uy tín (98%)
                                </span>
                            </div>
                            <button class="absolute top-3 right-3 w-9 h-9 rounded-full bg-surface-container-lowest/90 backdrop-blur-md text-on-surface flex items-center justify-center hover:bg-surface-container-lowest hover:text-error transition-colors shadow-sm" type="button">
                                <span class="material-symbols-outlined text-[20px]">favorite</span>
                            </button>
                            <div class="absolute bottom-3 left-3 bg-primary/80 backdrop-blur-sm text-on-primary px-2.5 py-0.5 rounded-md font-label-sm text-label-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-[13px]">location_on</span>
                                Phường Phú Nhuận, TP. Huế (cách 1.2km)
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mb-1.5">
                                    <span>Phương tiện • Xe tay ga</span>
                                    <div class="flex items-center gap-1 text-on-surface">
                                        <span class="material-symbols-outlined text-[16px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="font-bold">4.9</span>
                                        <span class="text-on-surface-variant">(42 đánh giá)</span>
                                    </div>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-secondary transition-colors">
                                    Xe máy Vespa Sprint 125cc Đen Xám (Kèm 2 mũ bảo hiểm)
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 line-clamp-2">
                                    Xe bảo dưỡng định kỳ, máy chạy êm, tiết kiệm xăng, hỗ trợ giao nhận tận nơi khu vực nội thành Huế.
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
                                <div>
                                    <div class="flex items-baseline gap-1">
                                        <span class="font-headline-md text-headline-md text-on-surface font-bold">180.000₫</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">/ngày</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Cọc bảo chứng: 2.000.000₫</span>
                                </div>
                                <button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary px-4 py-2 rounded-lg font-label-lg text-label-lg transition-colors flex items-center gap-1.5 shadow-sm" type="button">
                                    <span>Thuê ngay</span>
                                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2: Máy ảnh Sony A7 (Image 21) -->
                    <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                        <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A Sony Alpha mirrorless camera with professional 24-70mm G Master zoom lens resting on a clean wooden desktop, studio lighting, sharp product photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDoKFChllsUdn4gqBA5uWG6MHYHQ7EHgg7KYuiYXns_wPO6Fda2Y2vJSMg2tuXXWi6jCyFh8ZF3lgQ7UfbBJoTOAFFrgUNQDnTXwEJyLX6L7b2ex3qnv79TyhJNcdfB4TjOWP8dQXuU3TCAbG_U-T_qAO4D6VfCFPemOA6iqDpFIXhIeazPjq5PvMlB_ho2n-5Rbgg6PD1-J4Xkjy61_eq4BRrs6825u8YnmRcaaf705dXNWlDYEd4" />
                            <div class="absolute top-3 left-3 flex flex-col gap-1.5 items-start">
                                <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm font-semibold px-2.5 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                    Sẵn sàng cho thuê
                                </span>
                                <span class="bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm px-2.5 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-[14px] text-secondary">verified_user</span>
                                    Chủ thiết bị uy tín (99%)
                                </span>
                            </div>
                            <button class="absolute top-3 right-3 w-9 h-9 rounded-full bg-surface-container-lowest/90 backdrop-blur-md text-on-surface flex items-center justify-center hover:bg-surface-container-lowest hover:text-error transition-colors shadow-sm" type="button">
                                <span class="material-symbols-outlined text-[20px]">favorite</span>
                            </button>
                            <div class="absolute bottom-3 left-3 bg-primary/80 backdrop-blur-sm text-on-primary px-2.5 py-0.5 rounded-md font-label-sm text-label-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-[13px]">location_on</span>
                                Hải Châu, Đà Nẵng (giao nhận toàn quốc)
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mb-1.5">
                                    <span>Thiết bị số • Máy ảnh</span>
                                    <div class="flex items-center gap-1 text-on-surface">
                                        <span class="material-symbols-outlined text-[16px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="font-bold">5.0</span>
                                        <span class="text-on-surface-variant">(68 đánh giá)</span>
                                    </div>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-secondary transition-colors">
                                    Body Sony A7 IV + Lens GM 24-70mm f/2.8 II (Kèm 2 pin &amp; sạc đôi)
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 line-clamp-2">
                                    Body sạch không trầy xước, cảm biến hoàn hảo. Đầy đủ thẻ nhớ tốc độ cao Lexar 128GB và túi chống sốc Peak Design.
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
                                <div>
                                    <div class="flex items-baseline gap-1">
                                        <span class="font-headline-md text-headline-md text-on-surface font-bold">450.000₫</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">/ngày</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Cọc linh hoạt CCCD gắn chip</span>
                                </div>
                                <button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary px-4 py-2 rounded-lg font-label-lg text-label-lg transition-colors flex items-center gap-1.5 shadow-sm" type="button">
                                    <span>Thuê ngay</span>
                                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3: Lều cắm trại (Image 22) -->
                    <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col group">
                        <div class="relative w-full aspect-[4/3] overflow-hidden bg-surface-container">
                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" data-alt="A green modern camping dome tent set up in a lush alpine meadow surrounded by wildflowers and towering mountain peaks under clear blue skies" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhVQ1Nkjd8McBo-TRwh9wHdWrK9D0418rX2aR4jluWyyyRLI_1rgm-BIWy_5_iKIJQG6lS4teuYeeZhsQpp0o054TB9rfTKMV0sM3T7DC2mzsqYSKJI4lrpuyj1zqHjVJ3rthDjGUS0mkUpIFfgmMVorQKozbVHoaI5oDQU2_jwfswqs5MSyo_3chgrektYqTOnQAv7bSe0jAI5p2oCt2O87gkPZNCAgiMbtRn0ba89JHlBdvTrVI" />
                            <div class="absolute top-3 left-3 flex flex-col gap-1.5 items-start">
                                <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm font-semibold px-2.5 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-[14px]">check_circle</span>
                                    Sẵn sàng cho thuê
                                </span>
                                <span class="bg-surface-container-lowest/90 backdrop-blur-md text-on-surface font-label-sm text-label-sm px-2.5 py-1 rounded-full flex items-center gap-1 shadow-sm">
                                    <span class="material-symbols-outlined text-[14px] text-secondary">verified_user</span>
                                    Chủ đồ uy tín (97%)
                                </span>
                            </div>
                            <button class="absolute top-3 right-3 w-9 h-9 rounded-full bg-surface-container-lowest/90 backdrop-blur-md text-on-surface flex items-center justify-center hover:bg-surface-container-lowest hover:text-error transition-colors shadow-sm" type="button">
                                <span class="material-symbols-outlined text-[20px]">favorite</span>
                            </button>
                            <div class="absolute bottom-3 left-3 bg-primary/80 backdrop-blur-sm text-on-primary px-2.5 py-0.5 rounded-md font-label-sm text-label-sm flex items-center gap-1">
                                <span class="material-symbols-outlined text-[13px]">location_on</span>
                                Sơn Trà, Đà Nẵng
                            </div>
                        </div>
                        <div class="p-space-md flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-center justify-between text-on-surface-variant font-label-sm text-label-sm mb-1.5">
                                    <span>Dã ngoại • Cắm trại</span>
                                    <div class="flex items-center gap-1 text-on-surface">
                                        <span class="material-symbols-outlined text-[16px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span>
                                        <span class="font-bold">4.9</span>
                                        <span class="text-on-surface-variant">(35 đánh giá)</span>
                                    </div>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-semibold group-hover:text-secondary transition-colors">
                                    Bộ lều cắm trại 4 người Naturehike Village 5.0 (Chống mưa bão)
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 line-clamp-2">
                                    Bao gồm lều tự bung 2 lớp, đệm hơi đôi, 2 ghế xếp Glamping và đèn bão năng lượng mặt trời.
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-surface-container flex items-center justify-between">
                                <div>
                                    <div class="flex items-baseline gap-1">
                                        <span class="font-headline-md text-headline-md text-on-surface font-bold">150.000₫</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">/ngày</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Cọc linh hoạt: 500.000₫</span>
                                </div>
                                <button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary px-4 py-2 rounded-lg font-label-lg text-label-lg transition-colors flex items-center gap-1.5 shadow-sm" type="button">
                                    <span>Thuê ngay</span>
                                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- People Looking to Rent Section (Social Demand Feed / Yêu cầu tìm đồ quanh bạn) -->
            <section class="w-full bg-surface-container-low py-space-xl">
                <div class="max-w-7xl mx-auto px-gutter">
                    <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-lg gap-3">
                        <div>
                            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase font-semibold">
                                <span class="material-symbols-outlined text-[14px]">groups</span>
                                <span>Cộng đồng cần thuê thực tế</span>
                            </div>
                            <h2 class="font-headline-md text-headline-md text-on-surface mt-1">Người đang cần tìm thuê tài sản</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Bạn đang có đồ nhàn rỗi? Kết nối ngay để có thêm thu nhập an toàn.</p>
                        </div>
                        <a class="px-4 py-2 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface font-label-lg text-label-lg flex items-center gap-2 transition-colors shadow-sm self-start md:self-auto" href="#">
                            <span>Xem tất cả yêu cầu tìm thuê (48)</span>
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </a>
                    </div>
                    <!-- Feed Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                        <!-- Post 1 -->
                        <div class="bg-surface-container-lowest rounded-2xl p-space-md shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                            <div>
                                <div class="flex items-center justify-between pb-3 border-b border-surface-container">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center font-bold text-secondary text-sm">
                                            HN
                                        </div>
                                        <div>
                                            <h4 class="font-label-lg text-label-lg text-on-surface leading-tight">Hoàng Nam</h4>
                                            <span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[12px]">verified</span>
                                                CCCD đã định danh
                                            </span>
                                        </div>
                                    </div>
                                    <span class="px-2.5 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">
                                        15 phút trước
                                    </span>
                                </div>
                                <div class="mt-3">
                                    <span class="inline-block text-[11px] font-semibold text-secondary uppercase bg-secondary-container px-2 py-0.5 rounded-full mb-1">
                                        Dã ngoại &amp; Cắm trại
                                    </span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Cần thuê lều cắm trại 4 người chống nước gấp cuối tuần</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Nhóm mình đi phượt hồ Khe Ngang 2 ngày 1 đêm, cần lều sạch sẽ, kèm thảm cách nhiệt và đèn lều. Nhận đồ chiều thứ Sáu tại TP. Huế.
                                    </p>
                                </div>
                                <div class="mt-4 p-3 rounded-xl bg-surface-container-low grid grid-cols-2 gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <div>
                                        <span class="block text-outline">Địa điểm nhận:</span>
                                        <span class="font-semibold text-on-surface flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px] text-secondary">location_on</span>
                                            TP. Huế
                                        </span>
                                    </div>
                                    <div>
                                        <span class="block text-outline">Thời gian thuê:</span>
                                        <span class="font-semibold text-on-surface">10/10 - 12/10 (2 ngày)</span>
                                    </div>
                                    <div class="col-span-2 pt-2 border-t border-surface-container flex items-center justify-between">
                                        <span class="text-outline">Ngân sách mong muốn:</span>
                                        <span class="font-bold text-on-surface text-base text-secondary">200.000₫ / ngày</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-3 flex items-center gap-2">
                                <button class="flex-1 bg-primary hover:bg-on-primary-fixed-variant text-on-primary py-2.5 rounded-lg font-label-lg text-label-lg transition-colors flex items-center justify-center gap-1.5 shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[16px]">check_box</span>
                                    <span>Tôi có tài sản này</span>
                                </button>
                                <button class="px-3 py-2.5 rounded-lg bg-surface-container hover:bg-surface-variant text-on-surface transition-colors flex items-center justify-center" title="Nhắn tin với Hoàng Nam" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                </button>
                            </div>
                        </div>
                        <!-- Post 2 -->
                        <div class="bg-surface-container-lowest rounded-2xl p-space-md shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                            <div>
                                <div class="flex items-center justify-between pb-3 border-b border-surface-container">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center font-bold text-secondary text-sm">
                                            TL
                                        </div>
                                        <div>
                                            <h4 class="font-label-lg text-label-lg text-on-surface leading-tight">Thùy Linh</h4>
                                            <span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[12px]">verified</span>
                                                CCCD đã định danh
                                            </span>
                                        </div>
                                    </div>
                                    <span class="px-2.5 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">
                                        1 giờ trước
                                    </span>
                                </div>
                                <div class="mt-3">
                                    <span class="inline-block text-[11px] font-semibold text-secondary uppercase bg-secondary-container px-2 py-0.5 rounded-full mb-1">
                                        Máy ảnh &amp; Thiết bị số
                                    </span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Cần thuê lens Sony 85mm f/1.4 GM hoặc f/1.8 chụp kỷ yếu</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Cần 1 ống kính chân dung cho bạn chụp kỷ yếu tại trường Quốc học Huế. Giữ gìn cẩn thận, có đặt cọc tài sản đảm bảo.
                                    </p>
                                </div>
                                <div class="mt-4 p-3 rounded-xl bg-surface-container-low grid grid-cols-2 gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <div>
                                        <span class="block text-outline">Địa điểm nhận:</span>
                                        <span class="font-semibold text-on-surface flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px] text-secondary">location_on</span>
                                            TP. Huế
                                        </span>
                                    </div>
                                    <div>
                                        <span class="block text-outline">Thời gian thuê:</span>
                                        <span class="font-semibold text-on-surface">Chủ nhật này (1 ngày)</span>
                                    </div>
                                    <div class="col-span-2 pt-2 border-t border-surface-container flex items-center justify-between">
                                        <span class="text-outline">Ngân sách mong muốn:</span>
                                        <span class="font-bold text-on-surface text-base text-secondary">250.000₫ / ngày</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-3 flex items-center gap-2">
                                <button class="flex-1 bg-primary hover:bg-on-primary-fixed-variant text-on-primary py-2.5 rounded-lg font-label-lg text-label-lg transition-colors flex items-center justify-center gap-1.5 shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[16px]">check_box</span>
                                    <span>Tôi có tài sản này</span>
                                </button>
                                <button class="px-3 py-2.5 rounded-lg bg-surface-container hover:bg-surface-variant text-on-surface transition-colors flex items-center justify-center" title="Nhắn tin với Thùy Linh" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                </button>
                            </div>
                        </div>
                        <!-- Post 3 -->
                        <div class="bg-surface-container-lowest rounded-2xl p-space-md shadow-sm flex flex-col justify-between hover:shadow-md transition-all">
                            <div>
                                <div class="flex items-center justify-between pb-3 border-b border-surface-container">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center font-bold text-secondary text-sm">
                                            VK
                                        </div>
                                        <div>
                                            <h4 class="font-label-lg text-label-lg text-on-surface leading-tight">Văn Khoa</h4>
                                            <span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[12px]">verified</span>
                                                CCCD đã định danh
                                            </span>
                                        </div>
                                    </div>
                                    <span class="px-2.5 py-1 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant">
                                        3 giờ trước
                                    </span>
                                </div>
                                <div class="mt-3">
                                    <span class="inline-block text-[11px] font-semibold text-secondary uppercase bg-secondary-container px-2 py-0.5 rounded-full mb-1">
                                        Phương tiện di chuyển
                                    </span>
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface">Cần thuê 2 xe máy tay ga (AirBlade hoặc Lead) cho gia đình</h3>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                        Gia đình vào du lịch Đà Nẵng - Huế 3 ngày, ưu tiên xe mới chạy ổn định, lốp tốt, chủ xe có mũ bảo hiểm sạch sẽ.
                                    </p>
                                </div>
                                <div class="mt-4 p-3 rounded-xl bg-surface-container-low grid grid-cols-2 gap-2 text-on-surface-variant font-label-sm text-label-sm">
                                    <div>
                                        <span class="block text-outline">Địa điểm nhận:</span>
                                        <span class="font-semibold text-on-surface flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[14px] text-secondary">location_on</span>
                                            Đà Nẵng / Ga Huế
                                        </span>
                                    </div>
                                    <div>
                                        <span class="block text-outline">Thời gian thuê:</span>
                                        <span class="font-semibold text-on-surface">15/10 - 18/10 (3 ngày)</span>
                                    </div>
                                    <div class="col-span-2 pt-2 border-t border-surface-container flex items-center justify-between">
                                        <span class="text-outline">Ngân sách dự kiến:</span>
                                        <span class="font-bold text-on-surface text-base text-secondary">160.000₫ / xe / ngày</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 pt-3 flex items-center gap-2">
                                <button class="flex-1 bg-primary hover:bg-on-primary-fixed-variant text-on-primary py-2.5 rounded-lg font-label-lg text-label-lg transition-colors flex items-center justify-center gap-1.5 shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[16px]">check_box</span>
                                    <span>Tôi có tài sản này</span>
                                </button>
                                <button class="px-3 py-2.5 rounded-lg bg-surface-container hover:bg-surface-variant text-on-surface transition-colors flex items-center justify-center" title="Nhắn tin với Văn Khoa" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Highly Rated Assets (Được đánh giá cao - 4 Cards Grid) -->
            <section class="w-full max-w-7xl mx-auto px-gutter py-space-xl">
                <div class="flex items-center justify-between mb-space-md">
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="font-label-sm text-label-sm font-semibold text-tertiary-fixed-dim uppercase tracking-wider">Chất lượng 5.0 sao</span>
                        </div>
                        <h2 class="font-headline-md text-headline-md text-on-surface mt-1">Được đánh giá cao nhất</h2>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Tài sản có tỷ lệ hài lòng 100% qua hàng chục lượt thuê thành công</p>
                    </div>
                    <a class="font-label-lg text-label-lg text-secondary hover:text-on-secondary-container flex items-center gap-1" href="#">
                        <span>Xem toàn bộ</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </a>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
                    <!-- Card 1 -->
                    <div class="bg-surface-container-lowest rounded-xl p-3 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
                        <div>
                            <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="A premium DJI Mini 4 Pro drone with remote controller resting on a tactical gear backpack on a scenic cliff overlook" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDUynIrw1zgTRstCJ88Fw784T59CBOIxDkyRR266Y-9eBNbccnKQQeG-d327dAJ-9euP_fikHutTD7vm-oiSeuNYWbss56vTmv2z7Bb_fvNa3gDwZKjSiRMlRt8SvJXp8YK6jMHIeFdBucaSk7pt0Gwr4CA4NOnZS4bqo6cF_uy8uXwwjNc3fB5Ow27VBpbdR3CEpIxRYdG9cizXbKhg3oFKJEqbkcYR2SQ4gDHz7Wcpnbwt5ToBRs" />
                                <span class="absolute top-2 left-2 bg-primary/90 text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[12px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span> 5.0 (52)
                                </span>
                            </div>
                            <div class="mt-2.5">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Flycam • Drone</span>
                                <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold line-clamp-1 group-hover:text-secondary transition-colors mt-0.5">
                                    Flycam DJI Mini 4 Pro Fly More Combo
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">3 pin sạc, túi đựng, kính lọc ND</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-surface-container flex items-center justify-between">
                            <div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">320.000₫</span>
                                <span class="text-[12px] text-on-surface-variant">/ngày</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2 py-0.5 rounded">Hải Châu, ĐN</span>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="bg-surface-container-lowest rounded-xl p-3 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
                        <div>
                            <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="A high quality professional Dewalt power cordless drill and multi tool set organized in a rugged hard case" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCr9GnYO80vJKwVEyRljGBOCqNjzBQAJBwdYicAFFXxxFbpcsDIq5BCcBdk6doNKm7IGUyn24X6yYnLC7XSqMb-uEHvWw9mqNv1CxuNsANzAp6FCompwruF2zWfbjJGxCrMn7YnomolkKHrNgVEoSPBpqrunZWMd0v5LMPvzVvu5ZnrV66qmVZ7pgF7rXrvZLvpmzmMLACURsIPxfgvzUOHwh1YGkq7sPeXVusgsRobh1wLocuX_f0" />
                                <span class="absolute top-2 left-2 bg-primary/90 text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[12px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span> 5.0 (41)
                                </span>
                            </div>
                            <div class="mt-2.5">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Dụng cụ &amp; Đồ nghề</span>
                                <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold line-clamp-1 group-hover:text-secondary transition-colors mt-0.5">
                                    Bộ máy khoan pin đa năng DeWalt 20V Max
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Kèm 32 mũi khoan tường &amp; gỗ</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-surface-container flex items-center justify-between">
                            <div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">90.000₫</span>
                                <span class="text-[12px] text-on-surface-variant">/ngày</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2 py-0.5 rounded">Vỹ Dạ, Huế</span>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="bg-surface-container-lowest rounded-xl p-3 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
                        <div>
                            <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="A modern portable outdoor cinema projector with wireless bluetooth speaker and fold-out tripod standing on a wooden deck" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdQ3ZSQNlpTA2HXuf5Uh1m-9WRmocjLdU0ASq7w6w2mpKwzXbvbHR4_QHsPTz9kY2DWaOmaBpzA7C--uds1zmmahlM442ZQ_M_3DeGR9MmcNb_dAV8L3rJVb56o0wdTgytC-CChEkf11b-nZ5A9u9F0VmGw1_KRJ5SaoqPwb6E3dNi9Q6tLlDs4bn5J6lGzoguhddacCz0ncfnZQTxh-BxednVtyiUtyrxFnjE4I71wIbA7X8LYd0" />
                                <span class="absolute top-2 left-2 bg-primary/90 text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[12px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span> 5.0 (39)
                                </span>
                            </div>
                            <div class="mt-2.5">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Sự kiện &amp; Tiệc</span>
                                <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold line-clamp-1 group-hover:text-secondary transition-colors mt-0.5">
                                    Máy chiếu mini Full HD XGIMI Mogo 2 Pro
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Kèm màn chiếu 100 inch gấp gọn</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-surface-container flex items-center justify-between">
                            <div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">190.000₫</span>
                                <span class="text-[12px] text-on-surface-variant">/ngày</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2 py-0.5 rounded">Thanh Khê, ĐN</span>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="bg-surface-container-lowest rounded-xl p-3 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
                        <div>
                            <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="A pair of elegant traditional Vietnamese Ao Dai silk garments displayed neatly on minimalist hangers with soft ambient lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD8Yp_pP-9JbcE26MCIESVQXeX-ADh-UzWMi2fSFwd2QCsmWPySaYRcTXuADDTKJYrEizH3TBE9Jw3PjaMl34mDIUnO0Q9pTVjjm3OZZj4sB7TXsl-TtiUwhwcMOHpdwBQgYZ7dV8ifUzMZLbmCO7m2R7ksbFbEwOomEMNyjtTVfxgq9zY3v1X2aUJKMpiTxdqPtzxbFTuWF3fbegZFpjz4s8WQTrJyj7mdZjustzbdNIU_cOtDEl4" />
                                <span class="absolute top-2 left-2 bg-primary/90 text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[12px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span> 5.0 (47)
                                </span>
                            </div>
                            <div class="mt-2.5">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Trang phục Cổ phong</span>
                                <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold line-clamp-1 group-hover:text-secondary transition-colors mt-0.5">
                                    Bộ Cổ Phục Nhật Bình Triều Nguyễn cao cấp
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Đủ mấn đội đầu, quạt lụa và hài cổ</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-surface-container flex items-center justify-between">
                            <div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">120.000₫</span>
                                <span class="text-[12px] text-on-surface-variant">/ngày</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2 py-0.5 rounded">Thuận Hòa, Huế</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Trusted Landlords Section (Chủ tài sản uy tín) -->
            <section class="w-full bg-surface-container-low py-space-xl">
                <div class="max-w-7xl mx-auto px-gutter">
                    <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-space-lg gap-2">
                        <div>
                            <div class="flex items-center gap-1.5">
                                <span class="material-symbols-outlined text-secondary">verified_user</span>
                                <span class="font-label-sm text-label-sm font-semibold text-secondary uppercase tracking-wider">Hệ thống tín nhiệm RentShare</span>
                            </div>
                            <h2 class="font-headline-md text-headline-md text-on-surface mt-1">Chủ tài sản được chứng nhận uy tín</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Người cho thuê sở hữu điểm đánh giá cao và thời gian phản hồi dưới 15 phút</p>
                        </div>
                        <a class="font-label-lg text-label-lg text-secondary hover:text-on-secondary-container flex items-center gap-1 self-start sm:self-auto" href="#">
                            <span>Tìm hiểu bộ tiêu chuẩn uy tín</span>
                            <span class="material-symbols-outlined text-[18px]">info</span>
                        </a>
                    </div>
                    <!-- Landlords Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
                        <!-- Landlord 1: Using exact https://lh3.googleusercontent.com/aida-public/AB6AXuD2NN35lNpfGKcI8dXstQlMb0S7QSyFLtAX7ukuI4lsSCtRhN308LIYTZBeZfMDLZwkwD5QhA-QC4CmPedmPAqf6D-wjc1QDKmGgmffvONXxa082xqJfcprdDXOcbu-iw2CX7CWEsts53WTdAqCNt0rqLPdZ5Sh4imC4aFw-fwbdrMFiMXrRr3peQM7hmZdRf4ybA2wkDC1kIGh9lrDCJXYYuveHFJ6rauMkZaXIDOGUHMmNwuAP5E -->
                        <div class="bg-surface-container-lowest rounded-2xl p-space-md shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-start gap-3.5">
                                    <div class="relative">
                                        <img alt="Trần Nam Avatar" class="w-16 h-16 rounded-full object-cover ring-2 ring-secondary" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2NN35lNpfGKcI8dXstQlMb0S7QSyFLtAX7ukuI4lsSCtRhN308LIYTZBeZfMDLZwkwD5QhA-QC4CmPedmPAqf6D-wjc1QDKmGgmffvONXxa082xqJfcprdDXOcbu-iw2CX7CWEsts53WTdAqCNt0rqLPdZ5Sh4imC4aFw-fwbdrMFiMXrRr3peQM7hmZdRf4ybA2wkDC1kIGh9lrDCJXYYuveHFJ6rauMkZaXIDOGUHMmNwuAP5E" />
                                        <span class="absolute bottom-0 right-0 w-4 h-4 bg-secondary rounded-full border-2 border-surface-container-lowest flex items-center justify-center text-on-secondary" title="Đã định danh CCCD">
                                            <span class="material-symbols-outlined text-[10px]">check</span>
                                        </span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-1.5">
                                            <h3 class="font-headline-sm text-headline-sm text-on-surface truncate">Trần Nam</h3>
                                            <span class="material-symbols-outlined text-[18px] text-secondary" title="Đã xác thực CCCD &amp; VNeID">verified</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Chuyên thiết bị máy ảnh &amp; công nghệ</p>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">shield</span>
                                                Điểm uy tín: 99/100
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Stats Box -->
                                <div class="mt-4 grid grid-cols-3 gap-2 bg-surface-container-low rounded-xl p-2.5 text-center">
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-on-surface font-bold">45</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đơn thuê</span>
                                    </div>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-on-surface font-bold flex items-center justify-center gap-0.5">
                                            4.9 <span class="material-symbols-outlined text-[14px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span>
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đánh giá</span>
                                    </div>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-secondary font-bold">99%</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Phản hồi 15p</span>
                                    </div>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-3 text-[13px]">
                                    "Cho thuê các dòng máy Sony, lens GM và phụ kiện quay phim chuyên nghiệp tại Huế &amp; Đà Nẵng. Thiết bị luôn kiểm tra kỹ trước khi giao."
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-surface-container flex items-center gap-2">
                                <a class="flex-1 bg-surface-container hover:bg-surface-variant text-on-surface py-2 rounded-lg font-label-lg text-label-lg text-center transition-colors" href="#">
                                    Xem hồ sơ &amp; 12 tài sản
                                </a>
                                <button class="px-3 py-2 bg-primary text-on-primary hover:bg-on-primary-fixed-variant rounded-lg transition-colors" title="Nhắn tin với Nam" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                </button>
                            </div>
                        </div>
                        <!-- Landlord 2 -->
                        <div class="bg-surface-container-lowest rounded-2xl p-space-md shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-start gap-3.5">
                                    <div class="relative">
                                        <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center font-bold text-secondary text-xl ring-2 ring-secondary">
                                            LT
                                        </div>
                                        <span class="absolute bottom-0 right-0 w-4 h-4 bg-secondary rounded-full border-2 border-surface-container-lowest flex items-center justify-center text-on-secondary" title="Đã định danh CCCD">
                                            <span class="material-symbols-outlined text-[10px]">check</span>
                                        </span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-1.5">
                                            <h3 class="font-headline-sm text-headline-sm text-on-surface truncate">Lê Thảo</h3>
                                            <span class="material-symbols-outlined text-[18px] text-secondary" title="Đã xác thực CCCD &amp; VNeID">verified</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Dã ngoại &amp; Đồ cắm trại cao cấp</p>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">shield</span>
                                                Điểm uy tín: 98/100
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Stats Box -->
                                <div class="mt-4 grid grid-cols-3 gap-2 bg-surface-container-low rounded-xl p-2.5 text-center">
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-on-surface font-bold">62</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đơn thuê</span>
                                    </div>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-on-surface font-bold flex items-center justify-center gap-0.5">
                                            5.0 <span class="material-symbols-outlined text-[14px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span>
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đánh giá</span>
                                    </div>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-secondary font-bold">100%</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Phản hồi 8p</span>
                                    </div>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-3 text-[13px]">
                                    "Cung cấp trọn gói đồ glamping, lều 2-6 người, bếp gas dã ngoại và đèn trang trí. Đồ được vệ sinh sạch sẽ, phơi khô sau mỗi lần thuê."
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-surface-container flex items-center gap-2">
                                <a class="flex-1 bg-surface-container hover:bg-surface-variant text-on-surface py-2 rounded-lg font-label-lg text-label-lg text-center transition-colors" href="#">
                                    Xem hồ sơ &amp; 18 tài sản
                                </a>
                                <button class="px-3 py-2 bg-primary text-on-primary hover:bg-on-primary-fixed-variant rounded-lg transition-colors" title="Nhắn tin với Thảo" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                </button>
                            </div>
                        </div>
                        <!-- Landlord 3 -->
                        <div class="bg-surface-container-lowest rounded-2xl p-space-md shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                            <div>
                                <div class="flex items-start gap-3.5">
                                    <div class="relative">
                                        <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center font-bold text-secondary text-xl ring-2 ring-secondary">
                                            HV
                                        </div>
                                        <span class="absolute bottom-0 right-0 w-4 h-4 bg-secondary rounded-full border-2 border-surface-container-lowest flex items-center justify-center text-on-secondary" title="Đã định danh CCCD">
                                            <span class="material-symbols-outlined text-[10px]">check</span>
                                        </span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-1.5">
                                            <h3 class="font-headline-sm text-headline-sm text-on-surface truncate">Hoàng Vũ</h3>
                                            <span class="material-symbols-outlined text-[18px] text-secondary" title="Đã xác thực CCCD &amp; VNeID">verified</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Phương tiện di chuyển &amp; Du lịch</p>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="inline-flex items-center gap-1 bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                <span class="material-symbols-outlined text-[13px]">shield</span>
                                                Điểm uy tín: 97/100
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Stats Box -->
                                <div class="mt-4 grid grid-cols-3 gap-2 bg-surface-container-low rounded-xl p-2.5 text-center">
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-on-surface font-bold">89</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đơn thuê</span>
                                    </div>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-on-surface font-bold flex items-center justify-center gap-0.5">
                                            4.9 <span class="material-symbols-outlined text-[14px] text-tertiary-fixed-dim" style="font-variation-settings: 'FILL' 1;">star</span>
                                        </span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Đánh giá</span>
                                    </div>
                                    <div>
                                        <span class="block font-headline-sm text-headline-sm text-secondary font-bold">98%</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Phản hồi 10p</span>
                                    </div>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-3 text-[13px]">
                                    "Đội xe tay ga và xe côn tay du lịch tại Huế. Hỗ trợ cứu hộ 24/7, tặng kèm áo mưa tiện lợi và giá đỡ điện thoại dẫn đường."
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-surface-container flex items-center gap-2">
                                <a class="flex-1 bg-surface-container hover:bg-surface-variant text-on-surface py-2 rounded-lg font-label-lg text-label-lg text-center transition-colors" href="#">
                                    Xem hồ sơ &amp; 8 tài sản
                                </a>
                                <button class="px-3 py-2 bg-primary text-on-primary hover:bg-on-primary-fixed-variant rounded-lg transition-colors" title="Nhắn tin với Vũ" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Recommended For You (Gợi ý dành cho bạn) -->
            <section class="w-full max-w-7xl mx-auto px-gutter py-space-xl">
                <div class="flex items-center justify-between mb-space-md">
                    <div>
                        <div class="flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-secondary">recommend</span>
                            <span class="font-label-sm text-label-sm font-semibold text-secondary uppercase tracking-wider">Cá nhân hóa theo khu vực Huế &amp; Lân cận</span>
                        </div>
                        <h2 class="font-headline-md text-headline-md text-on-surface mt-1">Gợi ý dành riêng cho bạn</h2>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Dựa trên danh mục bạn vừa quan tâm: Xe cộ, Máy ảnh và Đồ cắm trại</p>
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="w-9 h-9 rounded-full bg-surface-container hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors" type="button">
                            <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                        </button>
                        <button class="w-9 h-9 rounded-full bg-surface-container hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors" type="button">
                            <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                        </button>
                    </div>
                </div>
                <!-- Recommendations Grid (4 items) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
                    <!-- Reco 1 -->
                    <div class="bg-surface-container-lowest rounded-xl p-3 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
                        <div>
                            <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="A modern electric scooter with LED headlamp parked on a paved stone terrace overlooking a river at twilight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDIxTCFiRb6WS1UlwNrpvVKaXVlHLpFYCjZA8942_f-RIuy5melqgZLFlJmG7_jAdH-wOtOHVRkRSW5wDLaMKZPv56l-ExPt-yx5GnG7B6Z_lzpM40KpVpXrFPfW5OUJxGHLstq8Cl-WCLmMYVYbIQyN6Pml_UFHsohxBKsvPnyvTepK2li70pE18ShpoQcIMvGplWJTb8vUOYUoRLH43KbQKdjl3TIVbBrjZHt6p-hIIOmCpZ9vU" />
                                <span class="absolute top-2 right-2 bg-surface-container-lowest/90 px-2 py-0.5 rounded text-[11px] font-semibold text-secondary">
                                    Gần bạn 0.8km
                                </span>
                            </div>
                            <div class="mt-2.5">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Xe máy điện</span>
                                <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold line-clamp-1 group-hover:text-secondary transition-colors mt-0.5">
                                    Xe máy điện VinFast Feliz S (Pin 198km)
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Êm ái, có sẵn sạc tại nhà</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-surface-container flex items-center justify-between">
                            <div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">140.000₫</span>
                                <span class="text-[12px] text-on-surface-variant">/ngày</span>
                            </div>
                            <button class="text-primary hover:text-secondary font-label-sm text-label-sm font-semibold flex items-center" type="button">
                                Chi tiết →
                            </button>
                        </div>
                    </div>
                    <!-- Reco 2 -->
                    <div class="bg-surface-container-lowest rounded-xl p-3 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
                        <div>
                            <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="An action camera GoPro Hero 12 Black with underwater waterproof housing and floating grip on a beach rock" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDWt7l2jIyFW8QCTdH7aPXyGR-T3y4DChB_OMjq84SAoj_Ci8r0R7zKjpG_vmNRUEN7EPUD0e-ipzbxVH1YaiFDEYZ8yCNhRzkDpYAxkoDpBLJKpBTVCeZyGZLTwezuWnOFEEozNesE46eNqI__ezMP7DeoOEvSXUPoE4WnWV8OQV8KSH97Gi5YNN4m6Ch-xDvvPBR8Xkr-GlxczNs8lEHcsu_Zob2v-1sWxaBiW14aq-Lfj4yccQ" />
                                <span class="absolute top-2 right-2 bg-surface-container-lowest/90 px-2 py-0.5 rounded text-[11px] font-semibold text-secondary">
                                    Gần bạn 1.5km
                                </span>
                            </div>
                            <div class="mt-2.5">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Action Cam</span>
                                <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold line-clamp-1 group-hover:text-secondary transition-colors mt-0.5">
                                    GoPro Hero 12 Black + Bộ phụ kiện lặn biển
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Chống rung Hypersmooth 6.0</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-surface-container flex items-center justify-between">
                            <div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">160.000₫</span>
                                <span class="text-[12px] text-on-surface-variant">/ngày</span>
                            </div>
                            <button class="text-primary hover:text-secondary font-label-sm text-label-sm font-semibold flex items-center" type="button">
                                Chi tiết →
                            </button>
                        </div>
                    </div>
                    <!-- Reco 3 -->
                    <div class="bg-surface-container-lowest rounded-xl p-3 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
                        <div>
                            <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="An inflatable stand up paddle board SUP with aluminum paddle and life vest by a serene emerald lake" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNE059PY2WYS8PDwpXHEUo7GilsC7dMMRwGVP8tQ2MDnXZYINm_VYntCUSlG94cfI8pEaVNvZ_MjBrbbhl1IiIuYfec688BBLua3rfwmWBrg788aLmuy9X5yJ67IkC6It_mQSrb7O7q74b2kxJEe4k-7ceNItz30OtQMzdiCWT6_JBaXeDH1TvAPqJdbTDksMMPo103nsm3zz4oJSsHlXfxBADX-YxmQMUkjFrdVtqRrRi8rFd-VM" />
                                <span class="absolute top-2 right-2 bg-surface-container-lowest/90 px-2 py-0.5 rounded text-[11px] font-semibold text-secondary">
                                    Gần bạn 2.1km
                                </span>
                            </div>
                            <div class="mt-2.5">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Thể thao dưới nước</span>
                                <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold line-clamp-1 group-hover:text-secondary transition-colors mt-0.5">
                                    Thuyền SUP hơi bơm tay chèo sông Hương
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Tặng kèm 2 áo phao trợ nổi</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-surface-container flex items-center justify-between">
                            <div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">120.000₫</span>
                                <span class="text-[12px] text-on-surface-variant">/ngày</span>
                            </div>
                            <button class="text-primary hover:text-secondary font-label-sm text-label-sm font-semibold flex items-center" type="button">
                                Chi tiết →
                            </button>
                        </div>
                    </div>
                    <!-- Reco 4 -->
                    <div class="bg-surface-container-lowest rounded-xl p-3 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between group">
                        <div>
                            <div class="relative w-full aspect-[4/3] rounded-lg overflow-hidden bg-surface-container">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform" data-alt="A DJI RS3 Pro gimbal stabilizer with follow focus motor mounted on a camera setup in a modern studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHPQlKxZAyQc5yPxmMno1zyZIRmCl2MLr6Bjr2XJ5Hg6BLIziASa893Pt56dA3ju5RIzXdN2Xl9ptTwOEoO43jk8QmnIenF3BrpCeGNYyC374GCMtacyxCUKPLz2nwl7DOXEkNG3yJYwbvefih2wQjRo-PYMSf2WvWGEBZfzD6u0WkvSGVFZ1fLh9rfSYh6-4hZZU_rHtCG1n-SvxZr2J7TJowJ37Mf2o4LgN5utYz-JGEOFGVcdE" />
                                <span class="absolute top-2 right-2 bg-surface-container-lowest/90 px-2 py-0.5 rounded text-[11px] font-semibold text-secondary">
                                    Gần bạn 3.0km
                                </span>
                            </div>
                            <div class="mt-2.5">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Phụ kiện Quay phim</span>
                                <h4 class="font-headline-sm text-[16px] text-on-surface font-semibold line-clamp-1 group-hover:text-secondary transition-colors mt-0.5">
                                    Gimbal chống rung DJI RS3 Pro Combo
                                </h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant text-[12px] mt-0.5">Tải trọng 4.5kg, cánh tay sợi carbon</p>
                            </div>
                        </div>
                        <div class="mt-3 pt-2.5 border-t border-surface-container flex items-center justify-between">
                            <div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">220.000₫</span>
                                <span class="text-[12px] text-on-surface-variant">/ngày</span>
                            </div>
                            <button class="text-primary hover:text-secondary font-label-sm text-label-sm font-semibold flex items-center" type="button">
                                Chi tiết →
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Trust & Safety Banner -->
            <section class="w-full max-w-7xl mx-auto px-gutter pb-space-xl">
                <div class="bg-primary text-on-primary rounded-2xl p-space-lg md:p-space-xl relative overflow-hidden">
                    <!-- Decorative background glow -->
                    <div class="absolute -right-20 -bottom-20 w-80 h-80 rounded-full bg-secondary/20 blur-3xl pointer-events-none"></div>
                    <div class="relative z-10 grid grid-cols-1 md:grid-cols-12 gap-space-lg items-center">
                        <div class="md:col-span-8">
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm uppercase font-semibold mb-3">
                                <span class="material-symbols-outlined text-[14px]">verified</span>
                                Bảo chứng kép RentShare Escrow
                            </span>
                            <h3 class="font-headline-lg text-headline-lg font-bold tracking-tight text-on-primary">
                                Bạn có đồ dùng ít dùng tới? Kiếm thêm từ 3 - 10 triệu/tháng
                            </h3>
                            <p class="font-body-lg text-body-lg text-on-primary-container mt-2 max-w-2xl">
                                Tài sản được bảo đảm nguyên trạng bằng ký quỹ an toàn, hợp đồng điện tử tự động và bảo hiểm hỏng hóc lên đến 50.000.000₫ cho mỗi hợp đồng thuê.
                            </p>
                            <div class="flex flex-wrap items-center gap-4 mt-space-md">
                                <a class="bg-surface-container-lowest hover:bg-surface-container-low text-on-surface font-label-lg text-label-lg px-6 py-3 rounded-xl transition-all shadow-md flex items-center gap-2" href="#">
                                    <span class="material-symbols-outlined text-[20px] text-secondary">add_circle</span>
                                    <span>Đăng tài sản cho thuê miễn phí</span>
                                </a>
                                <a class="border border-outline-variant hover:bg-surface-container-lowest/10 text-on-primary font-label-lg text-label-lg px-5 py-3 rounded-xl transition-all flex items-center gap-2" href="#">
                                    <span class="material-symbols-outlined text-[18px]">verified_user</span>
                                    <span>Xem chính sách bồi hoàn</span>
                                </a>
                            </div>
                        </div>
                        <div class="md:col-span-4 bg-surface-container-lowest/10 backdrop-blur-md rounded-xl p-4 flex flex-col gap-3">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-secondary text-on-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">lock</span>
                                </div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-primary">Ký quỹ an toàn</p>
                                    <p class="font-body-sm text-body-sm text-on-primary-container">Tiền cọc giữ bởi ngân hàng đối tác</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-secondary text-on-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">id_card</span>
                                </div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-primary">Xác minh CCCD/eKYC</p>
                                    <p class="font-body-sm text-body-sm text-on-primary-container">100% người dùng định danh rõ ràng</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-secondary text-on-secondary flex items-center justify-center">
                                    <span class="material-symbols-outlined text-[20px]">support_agent</span>
                                </div>
                                <div>
                                    <p class="font-label-lg text-label-lg text-on-primary">Hỗ trợ tranh chấp 24/7</p>
                                    <p class="font-body-sm text-body-sm text-on-primary-container">Đội ngũ pháp lý giải quyết trong 2h</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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