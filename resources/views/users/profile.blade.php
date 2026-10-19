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
            <!-- Interactive View State Controller -->
            <div class="w-full bg-secondary text-on-secondary px-margin-mobile lg:px-margin py-2.5 flex items-center justify-between text-body-sm transition-all duration-300" id="viewStateNotice">
                <div class="max-w-[1280px] mx-auto w-full flex flex-wrap items-center justify-between gap-space-sm">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">admin_panel_settings</span>
                        <span class="font-medium">Chế độ xem: <strong id="currentViewLabel">Chủ tài khoản (Đang quản lý hồ sơ cá nhân)</strong></span>
                        <span class="hidden sm:inline-block w-1.5 h-1.5 rounded-full bg-secondary-container"></span>
                        <span class="hidden sm:inline-block text-secondary-container">Bạn có thể chỉnh sửa, thêm tài sản và quản lý ký quỹ trực tiếp</span>
                    </div>
                    <div class="flex items-center gap-space-sm">
                        <button class="px-3 py-1 rounded-full bg-surface text-on-surface hover:bg-surface-container font-label-sm text-label-sm font-semibold transition-all flex items-center gap-1.5 shadow-sm" id="toggleViewModeBtn" type="button">
                            <span class="material-symbols-outlined text-[15px]">visibility</span>
                            <span id="toggleBtnText">Xem dưới góc nhìn khách xem</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="max-w-[1280px] mx-auto w-full px-margin-mobile lg:px-margin py-space-md">
                <!-- Breadcrumb -->
                <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md mb-space-md">
                    <a class="hover:text-secondary transition-colors" href="#">Trang chủ</a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <a class="hover:text-secondary transition-colors" href="#">Hoạt động cá nhân</a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface font-semibold">Hồ sơ cá nhân (@tuannm_photo)</span>
                </nav>
                <!-- Main Profile Card -->
                <section class="w-full bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden mb-space-lg">
                    <!-- Cover Banner with Modern Tactile Gradient & Quick Action -->
                    <div class="relative h-48 md:h-56 w-full bg-gradient-to-r from-primary-container via-secondary to-primary-container p-space-md flex justify-end items-start overflow-hidden">
                        <div class="absolute inset-0 opacity-15 bg-[radial-gradient(#86f2e4_1px,transparent_1px)] [background-size:16px_16px]"></div>
                        <button class="owner-control relative z-10 px-3 py-1.5 rounded-lg bg-surface/90 hover:bg-surface text-on-surface text-label-sm font-semibold flex items-center gap-1.5 backdrop-blur-md shadow-sm transition-transform active:scale-95" type="button">
                            <span class="material-symbols-outlined text-[16px]">add_a_photo</span>
                            <span>Đổi ảnh bìa</span>
                        </button>
                    </div>
                    <!-- Profile Header Identity Bar -->
                    <div class="px-space-md lg:px-space-lg pb-space-lg">
                        <div class="flex flex-col lg:flex-row lg:items-start justify-between gap-space-lg -mt-16 sm:-mt-20 relative z-20">
                            <!-- Left: Avatar + Basic Info -->
                            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-space-md max-w-3xl">
                                <!-- Avatar with eKYC Verified Shield -->
                                <div class="relative shrink-0">
                                    <div class="w-28 h-28 sm:w-32 sm:h-32 rounded-xl p-1 bg-surface-container-lowest shadow-md">
                                        <img class="w-full h-full object-cover rounded-lg" data-alt="Portrait photo of Nguyen Minh Tuan, a sharp and friendly Vietnamese male photographer in his late 20s with a modern haircut, wearing a crisp dark casual shirt, smiling confidently in soft studio lighting with subtle teal and slate undertones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCKB82K4TbRLeA4uc3JJ9wZJteMtLSF-hsFcu_6i20kcEu2qluyq3nr4mIKySgMG4w4_QRclXR7uS3AGTyavgQHd1q1ZP4S2XoPc05OQIktOp6_LMyxC0BM_Ad1zEwXeMKvisvFfLnznsuwQvlxuyLw6tqTKKYxGZutbd0EPAzLDXP2kO5V-GBw24RXIbO-XKkUiIwnmUZ2ea1dsofuM9PxSWA1bOofJw4H4_r3RKAT7fY1v-OW21Y" />
                                    </div>
                                    <div class="absolute -bottom-1 -right-1 bg-secondary text-on-secondary w-7 h-7 rounded-full flex items-center justify-center shadow-md" title="Đã đối chiếu sinh trắc học VNeID Cấp 2">
                                        <span class="material-symbols-outlined text-[16px]">verified</span>
                                    </div>
                                </div>
                                <!-- Text Content -->
                                <div class="flex flex-col items-center sm:items-start text-center sm:text-left pt-2">
                                    <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 mb-1">
                                        <h1 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">Nguyễn Minh Tuấn</h1>
                                        <span class="font-label-md text-label-md text-on-surface-variant font-medium">@tuannm_photo</span>
                                        <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold">
                                            <span class="material-symbols-outlined text-[13px]">military_tech</span> SuperHost &amp; Renter Vàng
                                        </span>
                                    </div>
                                    <p class="font-body-md text-body-md text-on-surface mb-2 max-w-xl">
                                        Nhiếp ảnh gia tự do &amp; Đam mê du lịch cắm trại tại Hà Nội. Luôn bảo quản thiết bị kỹ lưỡng, đúng hẹn và sẵn sàng chia sẻ kinh nghiệm sử dụng thực tế.
                                    </p>
                                    <div class="flex flex-wrap items-center justify-center sm:justify-start gap-y-1 gap-x-4 text-on-surface-variant font-body-sm text-body-sm">
                                        <span class="inline-flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[16px] text-secondary">location_on</span>
                                            Ba Đình, Hà Nội
                                        </span>
                                        <span class="inline-flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                                            Thành viên từ: 03/2023
                                        </span>
                                        <span class="inline-flex items-center gap-1.5 font-medium text-secondary">
                                            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                                            Đang hoạt động (Online)
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Right: Owner Action CTA Buttons -->
                            <div class="flex flex-wrap items-center justify-center sm:justify-end gap-2.5 pt-2">
                                <button class="owner-control px-4 py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg font-semibold flex items-center gap-2 shadow-sm transition-all" type="button">
                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                    <span>Chỉnh sửa hồ sơ</span>
                                </button>
                                <button class="owner-control px-3.5 py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg font-semibold flex items-center gap-1.5 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-[18px]">settings</span>
                                    <span class="hidden sm:inline">Cài đặt</span>
                                </button>
                                <button class="px-3.5 py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg font-semibold flex items-center gap-1.5 transition-colors" title="Sao chép liên kết hồ sơ" type="button">
                                    <span class="material-symbols-outlined text-[18px]">share</span>
                                    <span class="hidden sm:inline">Chia sẻ</span>
                                </button>
                                <button class="visitor-only hidden px-4 py-2.5 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-lg text-label-lg font-semibold items-center gap-2 shadow-sm transition-all" id="contactHostBtn" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Nhắn tin cho Tuấn</span>
                                </button>
                            </div>
                        </div>
                        <!-- Trust & Metrics Strip -->
                        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-3 mt-space-lg pt-space-md bg-surface-container-low rounded-xl p-space-md">
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                                    Điểm Tín Nhiệm (TrustScore)
                                    <span class="material-symbols-outlined text-[14px] text-secondary cursor-help" title="Dựa trên lịch sử thanh toán, hoàn trả tài sản đúng hạn và CCCD định danh">info</span>
                                </span>
                                <div class="flex items-baseline gap-1.5 mt-1">
                                    <span class="font-headline-md text-headline-md text-on-surface font-bold">98</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">/100</span>
                                    <span class="ml-1 px-1.5 py-0.5 rounded bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-bold">Hạng Vàng</span>
                                </div>
                                <span class="font-body-sm text-body-sm text-secondary font-medium">Miễn/giảm 50% tiền cọc</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Đánh giá trung bình</span>
                                <div class="flex items-baseline gap-1 mt-1">
                                    <span class="font-headline-md text-headline-md text-on-surface font-bold">4.96</span>
                                    <div class="flex text-amber-500">
                                        <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                    </div>
                                </div>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Từ 112 lượt nhận xét</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Giao dịch thành công</span>
                                <div class="flex items-baseline gap-1 mt-1">
                                    <span class="font-headline-md text-headline-md text-on-surface font-bold">58</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">lượt</span>
                                </div>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">42 cho thuê • 16 đi thuê</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Tỷ lệ phản hồi tin nhắn</span>
                                <div class="flex items-baseline gap-1 mt-1">
                                    <span class="font-headline-md text-headline-md text-on-surface font-bold">98%</span>
                                </div>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Phản hồi trong ~8 phút</span>
                            </div>
                            <div class="flex flex-col col-span-2 sm:col-span-1">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Tỷ lệ hoàn trả đúng hẹn</span>
                                <div class="flex items-baseline gap-1 mt-1">
                                    <span class="font-headline-md text-headline-md text-on-surface font-bold text-secondary">100%</span>
                                </div>
                                <span class="font-body-sm text-body-sm text-secondary font-medium">Cam kết đúng giờ tuyệt đối</span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Navigation Tabs -->
                <div class="flex items-center gap-2 overflow-x-auto pb-space-sm mb-space-md border-b-0">
                    <button class="px-space-md py-2.5 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg font-semibold shrink-0 shadow-sm transition-colors" type="button">
                        Tổng quan
                    </button>
                    <button class="px-space-md py-2.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant hover:text-on-surface font-label-lg text-label-lg font-semibold shrink-0 transition-colors flex items-center gap-1.5" type="button">
                        <span>Tài sản cho thuê</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm">6</span>
                    </button>
                    <button class="px-space-md py-2.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant hover:text-on-surface font-label-lg text-label-lg font-semibold shrink-0 transition-colors flex items-center gap-1.5" type="button">
                        <span>Yêu cầu tìm thuê</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm">2</span>
                    </button>
                    <button class="px-space-md py-2.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant hover:text-on-surface font-label-lg text-label-lg font-semibold shrink-0 transition-colors flex items-center gap-1.5" type="button">
                        <span>Đánh giá cộng đồng</span>
                        <span class="px-1.5 py-0.2 rounded-full bg-surface-container-highest text-on-surface font-label-sm text-label-sm">112</span>
                    </button>
                    <button class="px-space-md py-2.5 rounded-lg bg-surface-container-lowest hover:bg-surface-container text-on-surface-variant hover:text-on-surface font-label-lg text-label-lg font-semibold shrink-0 transition-colors" type="button">
                        Lịch sử &amp; Hoạt động
                    </button>
                </div>
                <!-- Main Content Two-Column Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                    <!-- Left Column (68% approx -> 8 cols) -->
                    <main class="lg:col-span-8 flex flex-col gap-space-lg">
                        <!-- Section 1: Featured Listings -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm">
                            <div class="flex items-center justify-between mb-space-md">
                                <div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Tài sản cho thuê nổi bật</h2>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Thiết bị bảo quản định kỳ, có hợp đồng điện tử &amp; cọc qua RentShare Escrow</p>
                                </div>
                                <a class="font-label-lg text-label-lg text-secondary hover:underline flex items-center gap-1 font-semibold" href="#">
                                    <span>Xem tất cả (6)</span>
                                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </a>
                            </div>
                            <!-- Asset Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-md">
                                <!-- Asset Card 1 -->
                                <article class="group bg-surface-container-low rounded-xl overflow-hidden flex flex-col justify-between hover:shadow-md transition-all">
                                    <div>
                                        <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="High-end Sony Alpha A7 Mark IV full-frame camera mounted with a 24-70mm GM lens resting on a clean concrete surface in studio lighting with high clarity and contrast." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAuROQYlMS7hSe3qDVhTo8eq8Wqe8R-rSWiIG3bQCduksvHl0acaJKB4Som6OquUdCpYvGSmJ2k7awGat-VzTJP9raEJkftnfYN_ze6DsorOK8K3ci6OPnnGP-krI7o25E_MJxYZ6ekbm6-meLmkiryAvwgobIDMOwiI2jvbAfEXNy1F-PimpDWsCkSD5UF6GcqTWcDyIIXuLNLRIa65E1Xyp1DvTq_RcOfjiLVbL7QaQyEz8jiSc8" />
                                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md bg-primary/80 backdrop-blur-sm text-on-primary font-label-sm text-label-sm font-semibold">
                                                Máy ảnh cao cấp
                                            </span>
                                            <span class="absolute bottom-2.5 left-2.5 px-2 py-0.5 rounded-md bg-amber-500/90 text-white font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[12px]">schedule</span> Đang cho thuê (đến 27/10)
                                            </span>
                                        </div>
                                        <div class="p-space-md">
                                            <div class="flex items-center justify-between text-body-sm text-on-surface-variant mb-1">
                                                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">pin_drop</span> Ba Đình, Hà Nội</span>
                                                <span class="flex items-center gap-1 font-semibold text-on-surface">
                                                    <span class="material-symbols-outlined text-[14px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span> 4.95 (64)
                                                </span>
                                            </div>
                                            <h3 class="font-label-lg text-label-lg text-on-surface font-bold line-clamp-2 group-hover:text-secondary transition-colors">
                                                Sony Alpha A7 Mark IV (Kèm Lens 24-70mm GM F2.8)
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="p-space-md pt-0">
                                        <div class="pt-2 border-t-0 flex items-end justify-between">
                                            <div>
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">450.000 đ</span>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">/ngày</span>
                                            </div>
                                            <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container text-on-surface-variant">
                                                Cọc: 3.000.000 đ
                                            </span>
                                        </div>
                                    </div>
                                </article>
                                <!-- Asset Card 2 -->
                                <article class="group bg-surface-container-low rounded-xl overflow-hidden flex flex-col justify-between hover:shadow-md transition-all">
                                    <div>
                                        <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Modern cement gray Vespa Sprint S 150 ABS scooter parked beside a minimalist urban wall, shining metallic paint, elegant sporty look with sleek angles." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyPGgGj8aOJqLr0OG9jHx5YSOeXgxY3PTDvtkgaoS7Y_vU7vMv_ZYbXIhgDsWy0JsqtfVQsQkpXilMdMt06rQvlBGWwmTSyQKeI_Z71wXiqMkNxfHzCTA8WInEAxJfaD0-20PHZZCPEK2ziSbEWSggWPQJM-VkWLE1SclHwtY00Sji55ueE32xQ1EKNuM7CPISz-OlXMvwnYCFek_wHj4DbJa3g8FeM0c-QV0kjiG1DqgdsbKwjTk" />
                                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md bg-secondary text-on-secondary font-label-sm text-label-sm font-semibold">
                                                Phương tiện
                                            </span>
                                            <span class="absolute bottom-2.5 left-2.5 px-2 py-0.5 rounded-md bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[12px]">check_circle</span> Sẵn sàng giao ngay
                                            </span>
                                        </div>
                                        <div class="p-space-md">
                                            <div class="flex items-center justify-between text-body-sm text-on-surface-variant mb-1">
                                                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">pin_drop</span> Ba Đình, Hà Nội</span>
                                                <span class="flex items-center gap-1 font-semibold text-on-surface">
                                                    <span class="material-symbols-outlined text-[14px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span> 4.90 (42)
                                                </span>
                                            </div>
                                            <h3 class="font-label-lg text-label-lg text-on-surface font-bold line-clamp-2 group-hover:text-secondary transition-colors">
                                                Xe máy Vespa Sprint S 150 ABS (Xám Xi Măng)
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="p-space-md pt-0">
                                        <div class="pt-2 border-t-0 flex items-end justify-between">
                                            <div>
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">280.000 đ</span>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">/ngày</span>
                                            </div>
                                            <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container text-on-surface-variant">
                                                Giữ CCCD gốc
                                            </span>
                                        </div>
                                    </div>
                                </article>
                                <!-- Asset Card 3 -->
                                <article class="group bg-surface-container-low rounded-xl overflow-hidden flex flex-col justify-between hover:shadow-md transition-all">
                                    <div>
                                        <div class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden">
                                            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" data-alt="Aesthetic Naturehike 4-person glamping tent pitched on green pine forest meadow with foldable wooden camp table and camping chairs in serene morning mist." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqW0sjMHWEghSmAgSreTX0jfDqb0PW6gieJggNIv1wlqkkzTIhPMe2271Z-4u3XdVlpzWvubIrTb9rqNP7b6MdgFJef7E-igSve500hEJu6Bl-6imu9-tIKfMbyXlbz_28-oQcnuIt_wcPFsyvBCQUrz63r5-5fVMCRj-_bn1NKBVeV7G8yyICUyubRG2AzbM1qpOcphT9yxIhlR7CMiH7PMTeRL2BmD1bDpXxwvh_3TRc0KUh284" />
                                            <span class="absolute top-2.5 left-2.5 px-2 py-0.5 rounded-md bg-secondary text-on-secondary font-label-sm text-label-sm font-semibold">
                                                Du lịch &amp; Cắm trại
                                            </span>
                                            <span class="absolute bottom-2.5 left-2.5 px-2 py-0.5 rounded-md bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[12px]">check_circle</span> Sẵn sàng giao ngay
                                            </span>
                                        </div>
                                        <div class="p-space-md">
                                            <div class="flex items-center justify-between text-body-sm text-on-surface-variant mb-1">
                                                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[14px]">pin_drop</span> Ba Đình, Hà Nội</span>
                                                <span class="flex items-center gap-1 font-semibold text-on-surface">
                                                    <span class="material-symbols-outlined text-[14px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span> 5.0 (14)
                                                </span>
                                            </div>
                                            <h3 class="font-label-lg text-label-lg text-on-surface font-bold line-clamp-2 group-hover:text-secondary transition-colors">
                                                Bộ lều cắm trại Glamping Naturehike 4 người + Bàn ghế
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="p-space-md pt-0">
                                        <div class="pt-2 border-t-0 flex items-end justify-between">
                                            <div>
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold">320.000 đ</span>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">/2N1Đ</span>
                                            </div>
                                            <span class="font-label-sm text-label-sm px-2 py-1 rounded bg-surface-container text-on-surface-variant">
                                                Cọc: 1.000.000 đ
                                            </span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </section>
                        <!-- Section 2: Active Rental Requests -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm">
                            <div class="flex items-center justify-between mb-space-md">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Yêu cầu tìm thuê đang mở</h2>
                                        <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold">Đang tìm</span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Cộng đồng chủ tài sản có thể báo giá trực tiếp cho Tuấn</p>
                                </div>
                                <a class="font-label-lg text-label-lg text-secondary hover:underline flex items-center gap-1 font-semibold" href="#">
                                    <span>Quản lý yêu cầu</span>
                                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </a>
                            </div>
                            <!-- Request Card -->
                            <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col md:flex-row md:items-center justify-between gap-space-md">
                                <div class="flex items-start gap-space-md">
                                    <div class="w-12 h-12 rounded-lg bg-surface-container-high flex items-center justify-center text-secondary shrink-0">
                                        <span class="material-symbols-outlined text-[28px]">photo_camera</span>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex items-center gap-2 flex-wrap mb-1">
                                            <h3 class="font-label-lg text-label-lg text-on-surface font-bold">Cần thuê ống kính Sony FE 70-200mm F2.8 GM II</h3>
                                            <span class="px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Cuối tuần (02/11 - 04/11)</span>
                                        </div>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xl">
                                            Mục đích: Chụp giải thể thao chạy marathon tại Hồ Tây. Đã có body Sony A7IV, cam kết giữ gìn cẩn thận trong hộp chống sốc, chỉ giao nhận trực tiếp tại Hà Nội.
                                        </p>
                                        <div class="flex flex-wrap items-center gap-space-md mt-2 font-body-sm text-body-sm text-on-surface">
                                            <span class="font-semibold text-secondary">Ngân sách dự kiến: 400.000 đ - 500.000 đ/ngày</span>
                                            <span class="text-on-surface-variant flex items-center gap-1">
                                                <span class="material-symbols-outlined text-[15px] text-secondary">forum</span> 3 chủ máy đã gửi báo giá
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex md:flex-col items-center justify-end gap-2 shrink-0">
                                    <button class="owner-control px-4 py-2 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md font-semibold transition-colors w-full text-center" type="button">
                                        Xem 3 báo giá
                                    </button>
                                    <button class="visitor-only hidden px-4 py-2 rounded-lg bg-secondary hover:bg-on-secondary-container text-on-secondary font-label-md text-label-md font-semibold transition-colors w-full text-center" type="button">
                                        Gửi báo giá ngay
                                    </button>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant text-center">Hạn nhận: Còn 3 ngày</span>
                                </div>
                            </div>
                        </section>
                        <!-- Section 3: Recent Reviews -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm">
                            <div class="flex items-center justify-between mb-space-md">
                                <div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Đánh giá nổi bật gần đây</h2>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Phản hồi thực từ các giao dịch đã hoàn tất và xác nhận hợp đồng</p>
                                </div>
                                <a class="font-label-lg text-label-lg text-secondary hover:underline flex items-center gap-1 font-semibold" href="#">
                                    <span>Xem tất cả 112 đánh giá</span>
                                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </a>
                            </div>
                            <div class="space-y-space-md">
                                <!-- Review 1: From a renter -->
                                <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-2">
                                    <div class="flex items-start justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center text-on-surface font-bold text-label-md">
                                                HL
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-center gap-2">
                                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Hoàng Linh</span>
                                                    <span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Khách thuê máy</span>
                                                </div>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">Thuê: Sony Alpha A7 Mark IV • Ngày 27/10/2025</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-1 text-amber-500">
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                        </div>
                                    </div>
                                    <p class="font-body-md text-body-md text-on-surface">
                                        “Anh Tuấn bàn giao máy ảnh Sony A7 IV cực kỳ cẩn thận, pin sạc 100%, thẻ nhớ xịn kèm hộp chống ẩm. Hướng dẫn sử dụng phím tắt rất nhiệt tình, thủ tục ký quỹ Escrow của RentShare nhanh gọn chỉ mất 2 phút. Sẽ thuê tiếp dài dài!”
                                    </p>
                                </div>
                                <!-- Review 2: From a host -->
                                <div class="p-space-md rounded-xl bg-surface-container-low flex flex-col gap-2">
                                    <div class="flex items-start justify-between">
                                        <div class="flex items-center gap-3">
                                            <div class="w-10 h-10 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant flex items-center justify-center font-bold text-label-md">
                                                AT
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-center gap-2">
                                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Trần Anh Tuấn</span>
                                                    <span class="px-2 py-0.5 rounded bg-surface-container text-on-surface-variant font-label-sm text-label-sm">Chủ xe máy</span>
                                                </div>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">Cho Tuấn thuê xe: Honda CB500X • Ngày 15/10/2025</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-1 text-amber-500">
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
                                        </div>
                                    </div>
                                    <p class="font-body-md text-body-md text-on-surface">
                                        “Bạn Tuấn thuê xe đi cung Ba Vì về trả xe đúng hẹn, bình xăng đổ lại đầy đủ, xe rửa sạch sẽ trước khi trả. Giữ gìn xe như xe của chính mình. Xứng đáng 10/10 điểm uy tín, rất mong được hợp tác lần sau!”
                                    </p>
                                </div>
                            </div>
                        </section>
                    </main>
                    <!-- Right Column Sidebar (32% approx -> 4 cols) -->
                    <aside class="lg:col-span-4 flex flex-col gap-space-lg">
                        <!-- Sidebar Card 1: Trust & Security Verification Checklist -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm">
                            <div class="flex items-center gap-2 mb-space-md">
                                <span class="material-symbols-outlined text-secondary text-[24px]">verified_user</span>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bảo chứng &amp; Xác thực</h3>
                            </div>
                            <div class="flex flex-col gap-space-md">
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">check_circle</span>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Định danh CCCD Cấp 2</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Đối chiếu sinh trắc học VNeID</span>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">check_circle</span>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Số điện thoại &amp; Email</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Đã xác minh OTP 2 lớp bảo mật</span>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">check_circle</span>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Tài khoản Ngân hàng Escrow</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Vietcombank - Chính chủ NGUYEN MINH TUAN</span>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">shield</span>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Bảo hiểm RentShare Shield</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Bảo vệ rủi ro hỏng hóc tài sản tới 50 triệu đồng/giao dịch</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-space-md pt-space-md border-t-0 bg-surface-container-low rounded-lg p-space-sm flex items-center justify-between text-body-sm">
                                <span class="text-on-surface-variant font-medium">Hồ sơ xác minh lúc:</span>
                                <span class="font-semibold text-on-surface">12/03/2023</span>
                            </div>
                        </div>
                        <!-- Sidebar Card 2: Dual Role Performance -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-space-md">Hiệu suất theo vai trò</h3>
                            <div class="space-y-space-md">
                                <!-- Role: Host -->
                                <div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1.5">
                                    <div class="flex items-center justify-between">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold flex items-center gap-1.5">
                                            <span class="material-symbols-outlined text-secondary text-[18px]">key</span> Là Chủ tài sản (Host)
                                        </span>
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">4.98 ★</span>
                                    </div>
                                    <div class="w-full bg-surface-container-highest rounded-full h-2 overflow-hidden">
                                        <div class="bg-secondary h-2 rounded-full" style="width: 98%;"></div>
                                    </div>
                                    <div class="flex justify-between text-body-sm text-on-surface-variant">
                                        <span>76 lượt bàn giao máy</span>
                                        <span>Tỷ lệ duyệt đơn: 96%</span>
                                    </div>
                                </div>
                                <!-- Role: Renter -->
                                <div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-1.5">
                                    <div class="flex items-center justify-between">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold flex items-center gap-1.5">
                                            <span class="material-symbols-outlined text-primary text-[18px]">shopping_bag</span> Là Khách đi thuê (Renter)
                                        </span>
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">4.94 ★</span>
                                    </div>
                                    <div class="w-full bg-surface-container-highest rounded-full h-2 overflow-hidden">
                                        <div class="bg-primary h-2 rounded-full" style="width: 96%;"></div>
                                    </div>
                                    <div class="flex justify-between text-body-sm text-on-surface-variant">
                                        <span>16 lần đi thuê</span>
                                        <span>100% hoàn trả nguyên vẹn</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar Card 3: Owner Quick Links (Visible in Owner Mode) -->
                        <div class="owner-control bg-surface-container-lowest rounded-xl p-space-md lg:p-space-lg shadow-sm">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold mb-space-md">Lối tắt quản lý riêng tư</h3>
                            <div class="flex flex-col gap-2">
                                <a class="p-2.5 rounded-lg hover:bg-surface-container-low text-on-surface flex items-center justify-between transition-colors font-body-md text-body-md font-medium" href="#">
                                    <span class="flex items-center gap-2.5">
                                        <span class="material-symbols-outlined text-[18px] text-secondary">receipt_long</span>
                                        Quản lý đơn thuê (#ORD)
                                    </span>
                                    <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-bold">2 đơn mới</span>
                                </a>
                                <a class="p-2.5 rounded-lg hover:bg-surface-container-low text-on-surface flex items-center justify-between transition-colors font-body-md text-body-md font-medium" href="#">
                                    <span class="flex items-center gap-2.5">
                                        <span class="material-symbols-outlined text-[18px] text-secondary">account_balance_wallet</span>
                                        Sổ quỹ &amp; Lịch sử ký quỹ Escrow
                                    </span>
                                    <span class="font-semibold text-secondary">4.200.000 đ</span>
                                </a>
                                <a class="p-2.5 rounded-lg hover:bg-surface-container-low text-on-surface flex items-center justify-between transition-colors font-body-md text-body-md font-medium" href="#">
                                    <span class="flex items-center gap-2.5">
                                        <span class="material-symbols-outlined text-[18px]">draft</span>
                                        Danh sách bài nháp chưa đăng
                                    </span>
                                    <span class="text-on-surface-variant font-label-sm text-label-sm">1 bài</span>
                                </a>
                                <a class="p-2.5 rounded-lg hover:bg-surface-container-low text-on-surface flex items-center justify-between transition-colors font-body-md text-body-md font-medium" href="#">
                                    <span class="flex items-center gap-2.5">
                                        <span class="material-symbols-outlined text-[18px]">support_agent</span>
                                        Trợ giúp &amp; Báo cáo hỗ trợ 24/7
                                    </span>
                                    <span class="material-symbols-outlined text-[16px] text-on-surface-variant">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                        <!-- Sidebar Card 4: Community Badge & Policy -->
                        <div class="bg-surface-container-low rounded-xl p-space-md text-center flex flex-col items-center">
                            <div class="w-12 h-12 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant mb-2">
                                <span class="material-symbols-outlined text-[24px]">verified</span>
                            </div>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">Thành viên Cam kết Vàng</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 mb-space-md">
                                Nguyễn Minh Tuấn tuân thủ bộ quy tắc ứng xử RentShare Trust Standard, không hủy lịch phút chót và giữ gìn tài sản chung.
                            </p>
                            <button class="text-secondary font-label-md text-label-md font-semibold hover:underline" type="button">
                                Tìm hiểu tiêu chuẩn cộng đồng
                            </button>
                        </div>
                    </aside>
                </div>
            </div>
            <script>
                (function initProfileModeToggle() {
                    const toggleBtn = document.getElementById('toggleViewModeBtn');
                    const toggleBtnText = document.getElementById('toggleBtnText');
                    const currentViewLabel = document.getElementById('currentViewLabel');
                    const viewNotice = document.getElementById('viewStateNotice');
                    const contactBtn = document.getElementById('contactHostBtn');
                    const ownerControls = document.querySelectorAll('.owner-control');
                    const visitorOnlyControls = document.querySelectorAll('.visitor-only');

                    let isOwnerMode = true;

                    if (toggleBtn) {
                        toggleBtn.addEventListener('click', function() {
                            isOwnerMode = !isOwnerMode;

                            if (isOwnerMode) {
                                // Mode: Owner (Profile Manager)
                                currentViewLabel.textContent = 'Chủ tài khoản (Đang quản lý hồ sơ cá nhân)';
                                toggleBtnText.textContent = 'Xem dưới góc nhìn khách xem';
                                viewNotice.classList.remove('bg-primary-container');
                                viewNotice.classList.add('bg-secondary');

                                ownerControls.forEach(el => el.classList.remove('hidden'));
                                visitorOnlyControls.forEach(el => {
                                    el.classList.add('hidden');
                                    el.classList.remove('flex');
                                });
                            } else {
                                // Mode: Visitor (Public Profile)
                                currentViewLabel.textContent = 'Chế độ xem công khai (Khách ghé thăm nhìn thấy)';
                                toggleBtnText.textContent = 'Quay về quyền quản trị hồ sơ';
                                viewNotice.classList.remove('bg-secondary');
                                viewNotice.classList.add('bg-primary-container');

                                ownerControls.forEach(el => el.classList.add('hidden'));
                                visitorOnlyControls.forEach(el => {
                                    el.classList.remove('hidden');
                                    el.classList.add('flex');
                                });
                            }
                        });
                    }
                })();
            </script>
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