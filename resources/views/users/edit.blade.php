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
            <div class="max-w-7xl mx-auto px-gutter py-space-lg w-full">
                <!-- Breadcrumb & Top Header -->
                <div class="flex flex-col gap-space-xs mb-space-lg">
                    <nav class="flex items-center gap-2 font-label-md text-label-md text-on-surface-variant">
                        <a class="hover:text-on-surface transition-colors flex items-center gap-1" data-path="trang-ca-nhan" href="#">
                            <span class="material-symbols-outlined text-[16px]">person</span>
                            <span>Tài khoản</span>
                        </a>
                        <span class="text-outline-variant">/</span>
                        <span class="text-on-surface font-semibold">Chỉnh sửa hồ sơ</span>
                    </nav>
                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm">
                        <div>
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Chỉnh sửa hồ sơ cá nhân</h1>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                                Quản lý thông tin hiển thị công khai để xây dựng lòng tin với đối tác thuê và chủ tài sản.
                            </p>
                        </div>
                        <div class="flex items-center gap-2 bg-secondary-container/30 px-3 py-1.5 rounded-full self-start md:self-auto">
                            <span class="material-symbols-outlined text-[18px] text-secondary">verified_user</span>
                            <span class="font-label-sm text-label-sm text-on-secondary-container font-semibold">Hồ sơ công khai đã bảo chứng</span>
                        </div>
                    </div>
                </div>
                <!-- Main 2-Column Content -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg items-start">
                    <!-- LEFT COLUMN: Live Public Profile Preview (5 cols) -->
                    <div class="lg:col-span-5 lg:sticky lg:top-24 flex flex-col gap-space-md">
                        <div class="flex items-center justify-between px-1">
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-secondary text-[20px]">visibility</span>
                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">Xem trước hồ sơ thực tế</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary bg-surface-container-high px-2 py-0.5 rounded-full font-medium">Trực tiếp</span>
                        </div>
                        <!-- Live Preview Card -->
                        <div class="bg-surface-container-lowest rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)] overflow-hidden">
                            <!-- Cover Container -->
                            <div class="relative h-36 w-full bg-surface-container-high overflow-hidden group">
                                <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="Minimalist architectural landscape photograph showing soft natural morning sunlight casting subtle geometric shadows over a clean modern concrete terrace in Dalat, Vietnam. Moody cinematic aesthetic, muted warm tones, film grain texture, high editorial resolution." id="preview-cover-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaMnqfMT4jdCDK7WRV0I3rpz9xQikI_pqqlQBzOJOcAn5bwIvIWHoMMEJonbGdc18NOOcJV_9Sg9pRSzabKUc9ZAOgFot5fFYGM0PzsP8UcfFEP6xMRCheESqZvjeHQ0VI_tQr2pEFcaJx7uRf3ik9Ep9nhZt8ByehMk94HnG6-7YiXRlxLcHD7ktDtXiTINpMEKjlNU4Y8yD-othH9pPhtkKseeVCTBPrqjoZkRy6aWtjykv3pIo" />
                                <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent opacity-80"></div>
                                <!-- Quick Cover Change Action -->
                                <label class="absolute top-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface font-label-sm text-label-sm px-2.5 py-1.5 rounded-lg shadow-sm cursor-pointer flex items-center gap-1.5 transition-all">
                                    <span class="material-symbols-outlined text-[16px]">photo_camera</span>
                                    <span>Đổi ảnh bìa</span>
                                    <input accept="image/*" class="hidden" id="cover-file-input" type="file" />
                                </label>
                            </div>
                            <!-- Body Profile Metadata -->
                            <div class="px-space-md pb-space-md pt-0 relative flex flex-col">
                                <!-- Avatar Placement Overlap -->
                                <div class="flex items-end justify-between -mt-12 mb-3">
                                    <div class="relative group">
                                        <div class="w-24 h-24 rounded-full p-1 bg-surface-container-lowest shadow-md overflow-hidden">
                                            <img alt="Nguyen Minh Tuan" class="w-full h-full rounded-full object-cover" id="preview-avatar-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2NN35lNpfGKcI8dXstQlMb0S7QSyFLtAX7ukuI4lsSCtRhN308LIYTZBeZfMDLZwkwD5QhA-QC4CmPedmPAqf6D-wjc1QDKmGgmffvONXxa082xqJfcprdDXOcbu-iw2CX7CWEsts53WTdAqCNt0rqLPdZ5Sh4imC4aFw-fwbdrMFiMXrRr3peQM7hmZdRf4ybA2wkDC1kIGh9lrDCJXYYuveHFJ6rauMkZaXIDOGUHMmNwuAP5E" />
                                        </div>
                                        <label class="absolute inset-0 flex items-center justify-center bg-primary/40 rounded-full opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer">
                                            <span class="material-symbols-outlined text-on-primary text-[22px]">photo_camera</span>
                                            <input accept="image/*" class="hidden" id="avatar-file-input" type="file" />
                                        </label>
                                    </div>
                                    <!-- Escrow Trust Score Badge (Locked) -->
                                    <div class="flex flex-col items-end gap-1">
                                        <div class="flex items-center gap-1.5 bg-surface-container-low px-2.5 py-1 rounded-full shadow-sm">
                                            <span class="material-symbols-outlined text-secondary text-[16px]" style="font-variation-settings: 'FILL' 1;">verified</span>
                                            <span class="font-label-sm text-label-sm text-secondary font-bold">Điểm tín nhiệm 98/100</span>
                                        </div>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[13px] text-outline">lock</span>
                                            <span>Khóa hệ thống</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Profile Names & Handle -->
                                <div class="flex flex-col">
                                    <div class="flex items-center gap-1.5 flex-wrap">
                                        <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold" id="preview-name">Nguyễn Minh Tuấn</h3>
                                        <span class="bg-secondary-container/40 text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full inline-flex items-center gap-1">
                                            <span class="material-symbols-outlined text-[12px] text-secondary">check_circle</span>
                                            <span>eKYC Level 2</span>
                                        </span>
                                    </div>
                                    <span class="font-label-md text-label-md text-on-surface-variant mt-0.5" id="preview-handle">rentshare.vn/@minhtuan</span>
                                </div>
                                <!-- Bio Preview -->
                                <div class="my-space-sm p-space-sm bg-surface-container-low rounded-lg">
                                    <p class="font-body-sm text-body-sm text-on-surface italic leading-relaxed" id="preview-bio">
                                        “Nhiếp ảnh gia tự do &amp; người đam mê thiết bị công nghệ. Ưu tiên giữ gìn máy móc kỹ lưỡng, bàn giao sạch sẽ đúng hẹn cho cộng đồng sáng tạo tại Sài Gòn.”
                                    </p>
                                </div>
                                <!-- Location & Handover Badges -->
                                <div class="flex flex-col gap-2 pt-1 font-body-sm text-body-sm text-on-surface-variant">
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-[18px] text-secondary">pin_drop</span>
                                        <span class="font-medium text-on-surface" id="preview-location">Quận 1, TP. Hồ Chí Minh</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <span class="material-symbols-outlined text-[18px] text-secondary">handshake</span>
                                        <span class="text-on-surface" id="preview-handover">Gặp trực tiếp đối chiếu CCCD &amp; Hỗ trợ hỏa tốc</span>
                                    </div>
                                </div>
                                <!-- Tags Preview -->
                                <div class="flex flex-wrap gap-1.5 mt-space-sm pt-2" id="preview-tags">
                                    <span class="font-label-sm text-label-sm bg-surface-container text-on-surface px-2 py-1 rounded-md">#NhiepAnhSony</span>
                                    <span class="font-label-sm text-label-sm bg-surface-container text-on-surface px-2 py-1 rounded-md">#DoCamTrai</span>
                                    <span class="font-label-sm text-label-sm bg-surface-container text-on-surface px-2 py-1 rounded-md">#XeDiPhuot</span>
                                </div>
                                <!-- Profile Summary Strip -->
                                <div class="mt-space-md pt-space-sm flex items-center justify-between text-center bg-surface-container-lowest rounded-lg p-2 shadow-inner">
                                    <div class="flex-1">
                                        <span class="font-headline-sm text-headline-sm text-on-surface block font-bold">24</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Lượt cho thuê</span>
                                    </div>
                                    <div class="w-px h-6 bg-surface-container-high"></div>
                                    <div class="flex-1">
                                        <span class="font-headline-sm text-headline-sm text-on-surface block font-bold">18</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Lượt đã mượn</span>
                                    </div>
                                    <div class="w-px h-6 bg-surface-container-high"></div>
                                    <div class="flex-1">
                                        <span class="font-headline-sm text-headline-sm text-secondary block font-bold">100%</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Hoàn cọc đúng hạn</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Trust Insight Note -->
                        <div class="bg-surface-container-low p-space-sm rounded-xl flex items-start gap-3">
                            <span class="material-symbols-outlined text-secondary text-[20px] mt-0.5">shield</span>
                            <div class="text-on-surface">
                                <h4 class="font-label-md text-label-md font-semibold text-on-surface">Minh bạch &amp; Bảo mật kép</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    Chỉ các thông tin tại thẻ xem trước hiển thị với khách thuê. Số CCCD, số tài khoản ngân hàng và email thật của bạn luôn được ẩn danh qua hệ thống bảo mật RentShare.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- RIGHT COLUMN: Profile Edit Form (7 cols) -->
                    <div class="lg:col-span-7 flex flex-col gap-space-lg">
                        <!-- SECTION 1: Avatar & Banner controls explicitly -->
                        <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]">
                            <div class="flex items-center gap-2 mb-space-md">
                                <span class="material-symbols-outlined text-secondary text-[22px]">badge</span>
                                <div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Hình ảnh nhận diện</h2>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Ảnh đại diện rõ mặt giúp tăng 78% tỷ lệ chấp nhận yêu cầu thuê tài sản.</p>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row items-center gap-space-md p-space-sm bg-surface rounded-lg">
                                <div class="relative">
                                    <img alt="Avatar thumbnail" class="w-16 h-16 rounded-full object-cover shadow-sm" id="form-avatar-display" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD2NN35lNpfGKcI8dXstQlMb0S7QSyFLtAX7ukuI4lsSCtRhN308LIYTZBeZfMDLZwkwD5QhA-QC4CmPedmPAqf6D-wjc1QDKmGgmffvONXxa082xqJfcprdDXOcbu-iw2CX7CWEsts53WTdAqCNt0rqLPdZ5Sh4imC4aFw-fwbdrMFiMXrRr3peQM7hmZdRf4ybA2wkDC1kIGh9lrDCJXYYuveHFJ6rauMkZaXIDOGUHMmNwuAP5E" />
                                </div>
                                <div class="flex-1 flex flex-col gap-1 text-center sm:text-left">
                                    <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2">
                                        <label class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-md px-space-md py-1.5 rounded-lg cursor-pointer transition-colors inline-flex items-center gap-1.5 shadow-sm">
                                            <span class="material-symbols-outlined text-[16px]">upload</span>
                                            <span>Tải ảnh mới</span>
                                            <input accept="image/*" class="hidden" id="avatar-input-btn" type="file" />
                                        </label>
                                        <button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md px-3 py-1.5 rounded-lg transition-colors inline-flex items-center gap-1" id="reset-avatar-btn" type="button">
                                            <span class="material-symbols-outlined text-[16px] text-error">delete_outline</span>
                                            <span>Gỡ ảnh</span>
                                        </button>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Định dạng JPG, PNG hoặc WebP. Tối đa 5MB.</span>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 2: Basic Information -->
                        <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]">
                            <div class="flex items-center gap-2 mb-space-md">
                                <span class="material-symbols-outlined text-secondary text-[22px]">account_circle</span>
                                <div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Thông tin cơ bản</h2>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Tên hiển thị công khai và cách người khác tìm thấy bạn trên RentShare.</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                <!-- Full Name -->
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-medium flex items-center justify-between" for="input-fullname">
                                        <span>Họ và tên hiển thị <span class="text-error">*</span></span>
                                    </label>
                                    <div class="relative flex items-center">
                                        <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px]">person</span>
                                        <input class="w-full pl-9 pr-3 py-2 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all" id="input-fullname" placeholder="Nhập tên của bạn" type="text" value="Nguyễn Minh Tuấn" />
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Nên trùng với tên định danh eKYC để dễ bàn giao đồ.</span>
                                </div>
                                <!-- Profile URL Handle -->
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-medium" for="input-username">
                                        Tên định danh / Đường dẫn hồ sơ
                                    </label>
                                    <div class="flex items-center bg-surface rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-secondary/40">
                                        <span class="pl-3 pr-1 py-2 font-body-sm text-body-sm text-on-surface-variant select-none bg-surface-container-low">rentshare.vn/@</span>
                                        <input class="w-full px-2 py-2 bg-surface text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none" id="input-username" placeholder="username" type="text" value="minhtuan" />
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Duy nhất, chỉ gồm chữ cái viết thường và số.</span>
                                </div>
                                <!-- Bio Textarea (Full Width) -->
                                <div class="md:col-span-2 flex flex-col gap-1.5">
                                    <div class="flex items-center justify-between">
                                        <label class="font-label-lg text-label-lg text-on-surface font-medium" for="input-bio">
                                            Giới thiệu bản thân &amp; Triết lý chia sẻ
                                        </label>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant font-mono" id="bio-counter">148/300</span>
                                    </div>
                                    <textarea class="w-full p-3 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all resize-none" id="input-bio" maxlength="300" placeholder="Chia sẻ về sở thích, cách bạn bảo quản đồ dùng, lý do bạn tham gia kinh tế chia sẻ..." rows="3">Nhiếp ảnh gia tự do &amp; người đam mê thiết bị công nghệ. Ưu tiên giữ gìn máy móc kỹ lưỡng, bàn giao sạch sẽ đúng hẹn cho cộng đồng sáng tạo tại Sài Gòn.</textarea>
                                    <div class="flex items-center gap-1.5 text-secondary font-label-sm text-label-sm mt-0.5">
                                        <span class="material-symbols-outlined text-[15px]">tips_and_updates</span>
                                        <span>Mẹo: Giới thiệu rõ chuyên môn giúp tăng độ tin tưởng khi thuê các thiết bị chuyên nghiệp giá trị cao.</span>
                                    </div>
                                </div>
                                <!-- Tags of interest -->
                                <div class="md:col-span-2 flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-medium flex items-center justify-between" for="input-tags">
                                        <span>Thẻ sở thích / Lĩnh vực quan tâm</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">Tối đa 5 thẻ</span>
                                    </label>
                                    <div class="relative flex items-center">
                                        <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px]">tag</span>
                                        <input class="w-full pl-9 pr-3 py-2 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all" id="input-tags" placeholder="Cách nhau bằng dấu phẩy: NhiepAnhSony, DoCongNghe..." type="text" value="NhiepAnhSony, DoCamTrai, XeDiPhuot" />
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Gợi ý phân loại các tài sản bạn thường xuyên sở hữu hoặc cần mượn.</span>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 3: Logistics & Handover Preferences -->
                        <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]">
                            <div class="flex items-center gap-2 mb-space-md">
                                <span class="material-symbols-outlined text-secondary text-[22px]">local_shipping</span>
                                <div>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Thông tin bàn giao công khai</h2>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Địa bàn hoạt động để người thuê ước tính khoảng cách di chuyển hoặc phí vận chuyển.</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                <!-- City / Province -->
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-medium" for="select-city">Tỉnh / Thành phố</label>
                                    <select class="w-full px-3 py-2 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all" id="select-city">
                                        <option selected="" value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
                                        <option value="Hà Nội">Hà Nội</option>
                                        <option value="Đà Nẵng">Đà Nẵng</option>
                                        <option value="Cần Thơ">Cần Thơ</option>
                                    </select>
                                </div>
                                <!-- District -->
                                <div class="flex flex-col gap-1.5">
                                    <label class="font-label-lg text-label-lg text-on-surface font-medium" for="select-district">Quận / Huyện</label>
                                    <select class="w-full px-3 py-2 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all" id="select-district">
                                        <option selected="" value="Quận 1">Quận 1</option>
                                        <option value="Quận 3">Quận 3</option>
                                        <option value="TP. Thủ Đức">TP. Thủ Đức</option>
                                        <option value="Bình Thạnh">Bình Thạnh</option>
                                        <option value="Phú Nhuận">Phú Nhuận</option>
                                    </select>
                                </div>
                                <!-- Preferred Handover method checkboxes -->
                                <div class="md:col-span-2 flex flex-col gap-2 pt-1">
                                    <label class="font-label-lg text-label-lg text-on-surface font-medium">Phương thức bàn giao ưu tiên</label>
                                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                        <label class="flex items-start gap-3 p-3 bg-surface rounded-lg cursor-pointer hover:bg-surface-container-low transition-colors">
                                            <input checked="" class="mt-0.5 w-4 h-4 rounded text-secondary focus:ring-secondary accent-[#006a61]" id="pref-direct" type="checkbox" />
                                            <div class="flex flex-col">
                                                <span class="font-label-md text-label-md text-on-surface font-semibold">Gặp trực tiếp đối chiếu CCCD</span>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">Phù hợp đồ công nghệ &amp; máy ảnh cao cấp</span>
                                            </div>
                                        </label>
                                        <label class="flex items-start gap-3 p-3 bg-surface rounded-lg cursor-pointer hover:bg-surface-container-low transition-colors">
                                            <input checked="" class="mt-0.5 w-4 h-4 rounded text-secondary focus:ring-secondary accent-[#006a61]" id="pref-ship" type="checkbox" />
                                            <div class="flex flex-col">
                                                <span class="font-label-md text-label-md text-on-surface font-semibold">Hỗ trợ giao hàng nội thành</span>
                                                <span class="font-body-sm text-body-sm text-on-surface-variant">Hỗ trợ ship Grab/Ahamove khi đã cọc thẻ</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- SECTION 4: Sensitive Account Information & Verification Status (Read-Only) -->
                        <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]">
                            <div class="flex items-center justify-between mb-space-md">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-[22px]">install_mobile</span>
                                    <div>
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Bảo mật &amp; Định danh gốc</h2>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant">Thông tin xác thực eKYC được mã hóa, không thể chỉnh sửa tại màn hình công khai.</p>
                                    </div>
                                </div>
                                <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2.5 py-1 rounded-full flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[14px]">lock</span>
                                    <span>Chỉ đọc</span>
                                </span>
                            </div>
                            <div class="flex flex-col gap-3">
                                <!-- Email Item -->
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between p-3.5 bg-surface rounded-lg gap-2">
                                    <div class="flex items-center gap-3">
                                        <div class="p-2 bg-surface-container rounded-lg text-on-surface-variant">
                                            <span class="material-symbols-outlined text-[20px]">mail</span>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">nguyen.minh.t***@gmail.com</span>
                                                <span class="bg-secondary-container/50 text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full inline-flex items-center gap-1">
                                                    <span class="material-symbols-outlined text-[12px] text-secondary">verified</span>
                                                    <span>Đã xác minh</span>
                                                </span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Dùng để nhận biên nhận thanh toán ký quỹ &amp; hợp đồng điện tử.</span>
                                        </div>
                                    </div>
                                    <a class="text-secondary hover:text-on-secondary-container font-label-md text-label-md inline-flex items-center gap-1 self-start sm:self-center transition-colors" data-path="cai-dat-tai-khoan" href="#">
                                        <span>Đổi tại Cài đặt</span>
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                </div>
                                <!-- Citizen ID / eKYC Item -->
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between p-3.5 bg-surface rounded-lg gap-2">
                                    <div class="flex items-center gap-3">
                                        <div class="p-2 bg-secondary-container/30 rounded-lg text-secondary">
                                            <span class="material-symbols-outlined text-[20px]">id_card</span>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">CCCD gắn chip / VNeID Cấp 2</span>
                                                <span class="bg-secondary-container text-on-secondary-container font-label-sm text-label-sm px-2 py-0.5 rounded-full inline-flex items-center gap-1 font-semibold">
                                                    <span class="material-symbols-outlined text-[12px]">check_circle</span>
                                                    <span>Đã bảo chứng pháp lý</span>
                                                </span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Mã số: 079201****** (Cục CSQLHC về TTXH cấp)</span>
                                        </div>
                                    </div>
                                    <div class="text-on-surface-variant font-label-sm text-label-sm flex items-center gap-1 self-start sm:self-center">
                                        <span class="material-symbols-outlined text-[15px] text-secondary">check</span>
                                        <span>Hợp lệ đến 2038</span>
                                    </div>
                                </div>
                                <!-- Phone Linked Item -->
                                <div class="flex flex-col sm:flex-row sm:items-center justify-between p-3.5 bg-surface rounded-lg gap-2">
                                    <div class="flex items-center gap-3">
                                        <div class="p-2 bg-surface-container rounded-lg text-on-surface-variant">
                                            <span class="material-symbols-outlined text-[20px]">call</span>
                                        </div>
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span class="font-label-lg text-label-lg text-on-surface font-semibold">0938 ••• 882</span>
                                                <span class="bg-surface-container text-on-surface font-label-sm text-label-sm px-2 py-0.5 rounded-full inline-flex items-center gap-1">
                                                    <span class="material-symbols-outlined text-[12px] text-secondary">lock</span>
                                                    <span>Ẩn đối với khách vãng lai</span>
                                                </span>
                                            </div>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Chỉ mở khi đơn thuê được hai bên xác nhận đặt cọc bảo đảm.</span>
                                        </div>
                                    </div>
                                    <a class="text-secondary hover:text-on-secondary-container font-label-md text-label-md inline-flex items-center gap-1 self-start sm:self-center transition-colors" data-path="cai-dat-tai-khoan" href="#">
                                        <span>Quản lý</span>
                                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Sticky Action Bar -->
                        <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-[0_10px_25px_-5px_rgba(11,28,48,0.08)] flex flex-col sm:flex-row items-center justify-between gap-space-sm">
                            <div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm text-center sm:text-left">
                                <span class="material-symbols-outlined text-[18px] text-secondary">history</span>
                                <span>Lần lưu thông tin gần nhất: 14:22 hôm qua</span>
                            </div>
                            <div class="flex items-center gap-3 w-full sm:w-auto">
                                <button class="w-full sm:w-auto px-space-md py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg transition-colors cursor-pointer" id="btn-cancel" type="button">
                                    Hủy bỏ
                                </button>
                                <button class="w-full sm:w-auto px-space-lg py-2.5 rounded-lg bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-2 shadow-sm transition-all cursor-pointer" id="btn-save" type="button">
                                    <span class="material-symbols-outlined text-[18px]">save</span>
                                    <span>Lưu thay đổi</span>
                                </button>
                            </div>
                        </div>
                        <!-- Notification Toast Toast Container (Client interactivity) -->
                        <div class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none" id="toast-success">
                            <div class="bg-primary text-on-primary px-4 py-3 rounded-xl shadow-xl flex items-center gap-3">
                                <span class="material-symbols-outlined text-secondary text-[22px]">task_alt</span>
                                <div>
                                    <p class="font-label-lg text-label-lg font-bold">Cập nhật hồ sơ thành công!</p>
                                    <p class="font-body-sm text-body-sm text-on-primary/80">Thông tin công khai của bạn đã được làm mới tức thì.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function() {
                // Form Inputs & Preview Bindings
                const inputName = document.getElementById('input-fullname');
                const inputUsername = document.getElementById('input-username');
                const inputBio = document.getElementById('input-bio');
                const inputTags = document.getElementById('input-tags');
                const selectCity = document.getElementById('select-city');
                const selectDistrict = document.getElementById('select-district');
                const prefDirect = document.getElementById('pref-direct');
                const prefShip = document.getElementById('pref-ship');
                const bioCounter = document.getElementById('bio-counter');

                // Preview Elements
                const previewName = document.getElementById('preview-name');
                const previewHandle = document.getElementById('preview-handle');
                const previewBio = document.getElementById('preview-bio');
                const previewLocation = document.getElementById('preview-location');
                const previewHandover = document.getElementById('preview-handover');
                const previewTags = document.getElementById('preview-tags');
                const previewAvatar = document.getElementById('preview-avatar-img');
                const formAvatarDisplay = document.getElementById('form-avatar-display');
                const avatarInputBtn = document.getElementById('avatar-input-btn');
                const avatarFileInput = document.getElementById('avatar-file-input');
                const coverFileInput = document.getElementById('cover-file-input');
                const previewCover = document.getElementById('preview-cover-img');
                const resetAvatarBtn = document.getElementById('reset-avatar-btn');

                const btnSave = document.getElementById('btn-save');
                const btnCancel = document.getElementById('btn-cancel');
                const toastSuccess = document.getElementById('toast-success');

                // 1. Live Sync Full Name
                if (inputName && previewName) {
                    inputName.addEventListener('input', (e) => {
                        previewName.textContent = e.target.value.trim() || 'Họ và tên của bạn';
                    });
                }

                // 2. Live Sync Username Handle
                if (inputUsername && previewHandle) {
                    inputUsername.addEventListener('input', (e) => {
                        const val = e.target.value.toLowerCase().replace(/[^a-z0-9_]/g, '');
                        e.target.value = val;
                        previewHandle.textContent = 'rentshare.vn/@' + (val || 'username');
                    });
                }

                // 3. Live Sync Bio & Character counter
                if (inputBio && previewBio && bioCounter) {
                    inputBio.addEventListener('input', (e) => {
                        const len = e.target.value.length;
                        bioCounter.textContent = len + '/300';
                        previewBio.textContent = e.target.value.trim() ? '“' + e.target.value.trim() + '”' : '“Chưa có tiểu sử giới thiệu.”';
                    });
                }

                // 4. Live Sync Location
                function updateLocation() {
                    if (selectDistrict && selectCity && previewLocation) {
                        previewLocation.textContent = selectDistrict.value + ', ' + selectCity.value;
                    }
                }
                if (selectCity) selectCity.addEventListener('change', updateLocation);
                if (selectDistrict) selectDistrict.addEventListener('change', updateLocation);

                // 5. Live Sync Handover Methods
                function updateHandover() {
                    if (!previewHandover) return;
                    const methods = [];
                    if (prefDirect && prefDirect.checked) methods.push('Gặp trực tiếp đối chiếu CCCD');
                    if (prefShip && prefShip.checked) methods.push('Hỗ trợ ship hỏa tốc nội thành');
                    previewHandover.textContent = methods.length ? methods.join(' & ') : 'Thỏa thuận trực tiếp qua tin nhắn';
                }
                if (prefDirect) prefDirect.addEventListener('change', updateHandover);
                if (prefShip) prefShip.addEventListener('change', updateHandover);

                // 6. Live Sync Tags
                if (inputTags && previewTags) {
                    inputTags.addEventListener('input', (e) => {
                        const raw = e.target.value;
                        const tags = raw.split(',').map(t => t.trim().replace(/^#/, '')).filter(t => t.length > 0);
                        previewTags.innerHTML = '';
                        if (tags.length === 0) {
                            const empty = document.createElement('span');
                            empty.className = 'font-label-sm text-label-sm text-on-surface-variant italic';
                            empty.textContent = 'Chưa chọn thẻ sở thích';
                            previewTags.appendChild(empty);
                            return;
                        }
                        tags.slice(0, 5).forEach(tag => {
                            const pill = document.createElement('span');
                            pill.className = 'font-label-sm text-label-sm bg-surface-container text-on-surface px-2 py-1 rounded-md';
                            pill.textContent = '#' + tag;
                            previewTags.appendChild(pill);
                        });
                    });
                }

                // 7. Image Upload Preview handling
                function handleImageSelection(file, targetImgs) {
                    if (!file) return;
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        targetImgs.forEach(img => {
                            if (img) img.src = e.target.result;
                        });
                    };
                    reader.readAsDataURL(file);
                }

                if (avatarInputBtn) {
                    avatarInputBtn.addEventListener('change', (e) => {
                        handleImageSelection(e.target.files[0], [previewAvatar, formAvatarDisplay]);
                    });
                }
                if (avatarFileInput) {
                    avatarFileInput.addEventListener('change', (e) => {
                        handleImageSelection(e.target.files[0], [previewAvatar, formAvatarDisplay]);
                    });
                }
                if (coverFileInput) {
                    coverFileInput.addEventListener('change', (e) => {
                        handleImageSelection(e.target.files[0], [previewCover]);
                    });
                }

                // Reset avatar placeholder
                if (resetAvatarBtn) {
                    resetAvatarBtn.addEventListener('click', () => {
                        const defaultAvatar = 'https://lh3.googleusercontent.com/aida-public/AB6AXuD2NN35lNpfGKcI8dXstQlMb0S7QSyFLtAX7ukuI4lsSCtRhN308LIYTZBeZfMDLZwkwD5QhA-QC4CmPedmPAqf6D-wjc1QDKmGgmffvONXxa082xqJfcprdDXOcbu-iw2CX7CWEsts53WTdAqCNt0rqLPdZ5Sh4imC4aFw-fwbdrMFiMXrRr3peQM7hmZdRf4ybA2wkDC1kIGh9lrDCJXYYuveHFJ6rauMkZaXIDOGUHMmNwuAP5E';
                        if (previewAvatar) previewAvatar.src = defaultAvatar;
                        if (formAvatarDisplay) formAvatarDisplay.src = defaultAvatar;
                    });
                }

                // 8. Save Trigger Feedback
                if (btnSave && toastSuccess) {
                    btnSave.addEventListener('click', () => {
                        btnSave.disabled = true;
                        const origContent = btnSave.innerHTML;
                        btnSave.innerHTML = '<span class="material-symbols-outlined text-[18px] animate-spin">progress_activity</span><span>Đang lưu...</span>';

                        setTimeout(() => {
                            btnSave.disabled = false;
                            btnSave.innerHTML = origContent;
                            toastSuccess.classList.remove('opacity-0', 'translate-y-24', 'pointer-events-none');
                            toastSuccess.classList.add('opacity-100', 'translate-y-0');

                            setTimeout(() => {
                                toastSuccess.classList.add('opacity-0', 'translate-y-24', 'pointer-events-none');
                                toastSuccess.classList.remove('opacity-100', 'translate-y-0');
                            }, 3500);
                        }, 700);
                    });
                }

                if (btnCancel) {
                    btnCancel.addEventListener('click', () => {
                        if (confirm('Bạn có muốn hủy các thay đổi chưa lưu?')) {
                            window.location.reload();
                        }
                    });
                }
            })();
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