<!DOCTYPE html>

<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_blank" name="shell-type" />
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

<body class="bg-surface font-body-md text-on-surface antialiased min-h-screen flex flex-col justify-between">
    <header class="w-full py-space-md px-gutter flex items-center justify-between max-w-7xl mx-auto"><a class="flex items-center gap-space-sm focus:outline-none" data-path="kham-pha" href="#"><img alt="RentShare Brand Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/AEtjO1VWoRtpvK-gkM-NNbLB6TQLyGcUhbTnXoaxWL-7rM8duuYAbAPYnbKGQA2C48vPuAdsfi6v60RtKhHUrOP8TZGlIXKRA906O_gQ0CSYgct1iSAuJrUlmdtdx7ClaaWGqSuSuu9coQ-CRaoqlHn-5ufJGUOqnYdutyBh3swBZ-hxMpGZGo_gWUxRIdrSoMcGWQVzZ5R2KC_oTOlXpJBTqHQevgHRGLMI-hQX7TbURmLsfrsjGiJK-sZsQQ" /><span class="font-headline-sm text-headline-sm text-on-surface tracking-tight">RentShare</span></a>
        <div class="flex items-center gap-space-sm text-on-surface-variant font-body-sm text-body-sm"><span class="material-symbols-outlined text-secondary text-[18px]">verified_user</span><span>Bảo mật 256-bit SSL</span></div>
    </header>
    <main class="flex-1 w-full max-w-7xl mx-auto px-gutter py-space-lg flex items-center justify-center">
        <div class="flex flex-col w-full items-center justify-center py-space-sm sm:py-space-md">
            <div class="w-full max-w-2xl bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden relative">
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-secondary/5 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-surface-container-high/60 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative p-space-md sm:p-space-xl flex flex-col items-center text-center">
                    <!-- Top Graphic: Status Icon with Verification Ring -->
                    <div class="relative mb-space-lg flex items-center justify-center">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-surface-container-low flex items-center justify-center text-primary transition-transform duration-500 hover:scale-105">
                            <span class="material-symbols-outlined text-[40px] sm:text-[48px] text-on-surface">mark_email_unread</span>
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-8 h-8 rounded-full bg-secondary text-on-secondary flex items-center justify-center shadow-md ring-4 ring-surface-container-lowest">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                        </div>
                    </div>
                    <!-- Main Headline & Subtitle -->
                    <h1 class="font-headline-lg text-headline-lg text-on-surface mb-space-xs tracking-tight">
                        Xác minh địa chỉ Email của bạn
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-lg mb-space-md">
                        Chúng tôi đã gửi một liên kết xác thực an toàn đến địa chỉ email của bạn để kích hoạt quyền truy cập RentShare:
                    </p>
                    <!-- Masked Email Display Card with Status Badge -->
                    <div class="w-full bg-surface-container-low rounded-lg p-space-md mb-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-sm sm:gap-space-md">
                        <div class="flex items-center gap-space-sm min-w-0">
                            <span class="material-symbols-outlined text-on-surface-variant text-[20px]">alternate_email</span>
                            <span class="font-headline-sm text-headline-sm text-on-surface truncate">nguyen.minh.t***@gmail.com</span>
                        </div>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-tertiary-fixed-dim font-label-sm text-label-sm uppercase tracking-wider font-semibold">
                            <span class="w-2 h-2 rounded-full bg-tertiary-fixed-dim animate-pulse"></span>
                            Chưa xác thực
                        </span>
                    </div>
                    <!-- Instruction Steps Grid -->
                    <div class="w-full text-left bg-surface rounded-lg p-space-md mb-space-lg space-y-space-md">
                        <div class="flex items-start gap-space-md">
                            <div class="w-7 h-7 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center flex-shrink-0 font-label-md text-label-md">
                                1
                            </div>
                            <div class="flex-1">
                                <h2 class="font-label-lg text-label-lg text-on-surface">Kiểm tra hộp thư đến (Inbox)</h2>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    Nếu không tìm thấy trong hộp thư chính, vui lòng kiểm tra thư mục <span class="font-medium text-on-surface">Spam, Thư rác</span> hoặc <span class="font-medium text-on-surface">Quảng cáo</span>.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-md">
                            <div class="w-7 h-7 rounded-full bg-surface-container-high text-on-surface flex items-center justify-center flex-shrink-0 font-label-md text-label-md">
                                2
                            </div>
                            <div class="flex-1">
                                <h2 class="font-label-lg text-label-lg text-on-surface">Bấm vào liên kết xác nhận</h2>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    Liên kết có hiệu lực trong vòng <span class="font-medium text-on-surface">24 giờ</span>. Sau khi bấm kích hoạt, bạn có thể bắt đầu tạo tài sản chia sẻ hoặc thuê đồ an toàn.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="w-full flex flex-col sm:flex-row items-center gap-space-sm mb-space-lg">
                        <a class="w-full sm:flex-1 py-3 px-space-md bg-primary text-on-primary rounded-lg font-label-lg text-label-lg hover:opacity-95 transition-opacity flex items-center justify-center gap-2 shadow-sm" href="https://mail.google.com" rel="noopener noreferrer" target="_blank">
                            <span class="material-symbols-outlined text-[20px]">open_in_new</span>
                            <span>Mở ứng dụng Email</span>
                        </a>
                        <button class="w-full sm:flex-1 py-3 px-space-md bg-surface-container text-on-surface-variant rounded-lg font-label-lg text-label-lg transition-colors flex items-center justify-center gap-2 cursor-not-allowed" disabled="" id="resendBtn">
                            <span class="material-symbols-outlined text-[18px]" id="resendIcon">history</span>
                            <span id="resendText">Gửi lại email (chờ <span id="countdown">45</span>s)</span>
                        </button>
                    </div>
                    <!-- Notification Toast Container -->
                    <div class="hidden w-full mb-space-md p-space-sm bg-secondary-fixed text-on-secondary-fixed rounded-lg text-center font-label-sm text-label-sm flex items-center justify-center gap-2 transition-all" id="toastMessage">
                        <span class="material-symbols-outlined text-[16px]">check_circle</span>
                        <span>Email xác thực mới đã được gửi thành công!</span>
                    </div>
                    <!-- Help Center Accordion / Guidance Box -->
                    <div class="w-full bg-surface-container-low/70 rounded-lg p-space-md text-left flex items-start gap-space-md mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[22px] mt-0.5">help_outline</span>
                        <div class="flex-1">
                            <h3 class="font-label-md text-label-md text-on-surface">Bạn vẫn chưa nhận được thư?</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                Vui lòng rà soát lại ký tự địa chỉ email trên hoặc liên hệ bộ phận hỗ trợ khách hàng RentShare để được xác minh thủ công.
                            </p>
                            <div class="mt-space-xs flex items-center gap-space-md">
                                <a class="font-label-sm text-label-sm text-secondary hover:underline flex items-center gap-1" href="#">
                                    <span>Đổi địa chỉ Email</span>
                                    <span class="material-symbols-outlined text-[14px]">edit</span>
                                </a>
                                <span class="text-outline-variant">•</span>
                                <a class="font-label-sm text-label-sm text-secondary hover:underline flex items-center gap-1" href="#">
                                    <span>Hỗ trợ trực tuyến</span>
                                    <span class="material-symbols-outlined text-[14px]">headset_mic</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Auxiliary Navigation Links -->
                    <div class="w-full pt-space-sm flex items-center justify-between text-on-surface-variant font-label-md text-label-md">
                        <a class="hover:text-on-surface flex items-center gap-1 transition-colors" href="#">
                            <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                            <span>Quay lại Đăng nhập</span>
                        </a>
                        <a class="hover:text-error flex items-center gap-1 transition-colors" href="#">
                            <span class="material-symbols-outlined text-[16px]">logout</span>
                            <span>Đăng xuất</span>
                        </a>
                    </div>
                </div>
            </div>
            <script>
                (function() {
                    let timeLeft = 45;
                    const countdownElement = document.getElementById('countdown');
                    const resendBtn = document.getElementById('resendBtn');
                    const resendText = document.getElementById('resendText');
                    const resendIcon = document.getElementById('resendIcon');
                    const toastMessage = document.getElementById('toastMessage');

                    const timer = setInterval(() => {
                        timeLeft--;
                        if (countdownElement) {
                            countdownElement.textContent = timeLeft;
                        }

                        if (timeLeft <= 0) {
                            clearInterval(timer);
                            resendBtn.disabled = false;
                            resendBtn.classList.remove('bg-surface-container', 'text-on-surface-variant', 'cursor-not-allowed');
                            resendBtn.classList.add('bg-surface-container-high', 'text-on-surface', 'hover:bg-surface-variant', 'cursor-pointer');
                            resendText.textContent = 'Gửi lại email xác thực';
                            resendIcon.textContent = 'refresh';
                        }
                    }, 1000);

                    resendBtn.addEventListener('click', () => {
                        if (timeLeft <= 0) {
                            toastMessage.classList.remove('hidden');
                            resendBtn.disabled = true;
                            resendBtn.classList.remove('bg-surface-container-high', 'text-on-surface', 'hover:bg-surface-variant', 'cursor-pointer');
                            resendBtn.classList.add('bg-surface-container', 'text-on-surface-variant', 'cursor-not-allowed');
                            timeLeft = 60;
                            resendText.innerHTML = 'Gửi lại email (chờ <span id="countdown">60</span>s)';
                            resendIcon.textContent = 'history';

                            const newTimer = setInterval(() => {
                                timeLeft--;
                                const newCountdown = document.getElementById('countdown');
                                if (newCountdown) newCountdown.textContent = timeLeft;
                                if (timeLeft <= 0) {
                                    clearInterval(newTimer);
                                    resendBtn.disabled = false;
                                    resendBtn.classList.remove('bg-surface-container', 'text-on-surface-variant', 'cursor-not-allowed');
                                    resendBtn.classList.add('bg-surface-container-high', 'text-on-surface', 'hover:bg-surface-variant', 'cursor-pointer');
                                    resendText.textContent = 'Gửi lại email xác thực';
                                    resendIcon.textContent = 'refresh';
                                }
                            }, 1000);

                            setTimeout(() => {
                                toastMessage.classList.add('hidden');
                            }, 5000);
                        }
                    });
                })();
            </script>
        </div>
    </main>
    <footer class="w-full py-space-md px-gutter text-center text-on-surface-variant font-label-md text-label-md border-t border-surface-container-high">
        <p>© 2025 RentShare Inc. Nền tảng chia sẻ và thuê tài sản P2P an toàn số 1 Việt Nam.</p>
    </footer>
</body>

</html>