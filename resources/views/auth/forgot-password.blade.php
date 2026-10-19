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
        <div class="flex flex-col w-full items-center justify-center py-space-sm relative">
            <!-- Subtle Ambient Glow -->
            <div class="absolute -top-12 w-96 h-96 bg-secondary-container/30 rounded-full blur-3xl pointer-events-none -z-10"></div>
            <div class="absolute -bottom-10 w-80 h-80 bg-surface-variant/40 rounded-full blur-3xl pointer-events-none -z-10"></div>
            <!-- Main Card Container -->
            <div class="w-full max-w-lg bg-surface-container-lowest rounded-xl shadow-xl shadow-on-surface/5 p-space-lg sm:p-space-xl flex flex-col items-center">
                <!-- Top Security Icon Badge -->
                <div class="w-14 h-14 rounded-full bg-secondary-container/40 flex items-center justify-center mb-space-md text-secondary shadow-sm">
                    <span class="material-symbols-outlined text-[28px]" style="font-variation-settings: 'FILL' 1;">lock_reset</span>
                </div>
                <!-- Header & Subtitle -->
                <h1 class="font-headline-md text-headline-md text-on-surface text-center mb-space-xs">
                    Quên mật khẩu?
                </h1>
                <p class="font-body-md text-body-md text-on-surface-variant text-center max-w-md mb-space-lg leading-relaxed">
                    Nhập địa chỉ email liên kết với tài khoản của bạn. Chúng tôi sẽ gửi hướng dẫn khôi phục mật khẩu trong giây lát.
                </p>
                <!-- Form Module -->
                <form class="w-full flex flex-col gap-space-md" id="forgot-password-form" onsubmit="event.preventDefault(); handlePasswordReset();">
                    <!-- Input Group -->
                    <div class="flex flex-col gap-space-xs">
                        <label class="font-label-lg text-label-lg text-on-surface flex items-center justify-between" for="recovery-email">
                            <span>Email đăng ký của bạn</span>
                            <span class="font-label-sm text-label-sm text-secondary">Bắt buộc</span>
                        </label>
                        <div class="relative flex items-center">
                            <span class="material-symbols-outlined absolute left-3.5 text-on-surface-variant/60 pointer-events-none text-[20px]">
                                mail
                            </span>
                            <input class="w-full pl-11 pr-4 py-3 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all duration-200" id="recovery-email" name="email" placeholder="example@rentshare.vn" required="" type="email" />
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <button class="w-full py-3.5 px-space-md bg-primary text-on-primary font-label-lg text-label-lg rounded-lg shadow-md hover:opacity-95 active:scale-[0.99] transition-all duration-200 flex items-center justify-center gap-space-sm cursor-pointer mt-space-xs" id="submit-button" type="submit">
                        <span>Gửi liên kết đặt lại mật khẩu</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                    <!-- Security Notice Card -->
                    <div class="flex items-start gap-space-sm p-space-sm bg-surface-container-low rounded-lg mt-space-xs">
                        <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">
                            verified
                        </span>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Vì lý do bảo mật, nếu email tồn tại trong hệ thống, bạn sẽ nhận được đường dẫn khôi phục có hiệu lực trong <strong class="text-on-surface font-semibold">30 phút</strong>.
                        </p>
                    </div>
                    <!-- Success Notification Box (Initially Hidden) -->
                    <div class="hidden flex items-start gap-space-sm p-space-md bg-secondary-container/40 rounded-lg text-on-secondary-container transition-all duration-300" id="success-banner">
                        <span class="material-symbols-outlined text-secondary text-[22px] shrink-0 mt-0.5">
                            mark_email_read
                        </span>
                        <div class="flex flex-col gap-0.5">
                            <p class="font-label-lg text-label-lg font-semibold text-secondary">Đã gửi liên kết khôi phục</p>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Vui lòng kiểm tra hộp thư đến (và thư mục Spam/Quảng cáo) của bạn để tiếp tục quá trình đặt lại mật khẩu.</p>
                        </div>
                    </div>
                </form>
                <!-- Navigation Back Link -->
                <div class="mt-space-lg pt-space-md w-full flex items-center justify-center">
                    <a class="inline-flex items-center gap-space-xs font-label-lg text-label-lg text-on-surface hover:text-secondary transition-colors duration-150 py-1 px-space-xs rounded focus:outline-none" data-path="dang-nhap" href="#">
                        <span class="material-symbols-outlined text-[18px]">west</span>
                        <span>Quay lại Đăng nhập</span>
                    </a>
                </div>
                <!-- Quick Help & Support Panel -->
                <div class="mt-space-lg w-full bg-surface-container rounded-lg p-space-md flex items-center justify-between gap-space-sm">
                    <div class="flex items-center gap-space-sm">
                        <div class="w-8 h-8 rounded-full bg-surface-container-lowest flex items-center justify-center text-secondary">
                            <span class="material-symbols-outlined text-[18px]">support_agent</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Cần hỗ trợ?</span>
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Liên hệ bộ phận CSKH 24/7</span>
                        </div>
                    </div>
                    <a class="px-space-md py-1.5 rounded-full bg-surface-container-lowest text-on-surface hover:bg-surface font-label-sm text-label-sm shadow-sm transition-all duration-150 shrink-0" data-path="ho-tro" href="#">
                        Gửi yêu cầu
                    </a>
                </div>
            </div>
        </div>
        <script>
            function handlePasswordReset() {
                const emailInput = document.getElementById('recovery-email');
                const submitBtn = document.getElementById('submit-button');
                const successBanner = document.getElementById('success-banner');

                if (!emailInput.value || !emailInput.checkValidity()) {
                    emailInput.focus();
                    return;
                }

                // Interactive button loading state
                submitBtn.disabled = true;
                submitBtn.classList.add('opacity-75');
                submitBtn.innerHTML = `
      <span class="inline-block animate-spin material-symbols-outlined text-[18px]">progress_activity</span>
      <span>Đang gửi thông tin...</span>
    `;

                // Simulated network resolution
                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('opacity-75');
                    submitBtn.innerHTML = `
        <span class="material-symbols-outlined text-[18px]">check</span>
        <span>Đã gửi thành công</span>
      `;
                    submitBtn.classList.replace('bg-primary', 'bg-secondary');
                    successBanner.classList.remove('hidden');
                }, 700);
            }
        </script>
    </main>
    <footer class="w-full py-space-md px-gutter text-center text-on-surface-variant font-label-md text-label-md border-t border-surface-container-high">
        <p>© 2025 RentShare Inc. Nền tảng chia sẻ và thuê tài sản P2P an toàn số 1 Việt Nam.</p>
    </footer>
</body>

</html>