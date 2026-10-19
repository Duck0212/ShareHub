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
        <div class="flex flex-col w-full items-center justify-center py-space-sm">
            <div class="w-full max-w-lg mx-auto relative">
                <div class="absolute -top-12 -left-12 w-48 h-48 bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-10 -right-10 w-44 h-44 bg-surface-container-highest/60 rounded-full blur-2xl pointer-events-none"></div>
                <div class="relative bg-surface-container-lowest rounded-xl shadow-xl p-space-lg sm:p-space-xl overflow-hidden">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center text-secondary mb-space-md shadow-sm">
                            <span class="material-symbols-outlined text-[30px]" style="font-variation-settings: 'FILL' 1;">lock_reset</span>
                        </div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface">Tạo mật khẩu mới</h1>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs max-w-sm">
                            Vui lòng thiết lập mật khẩu mạnh mới để bảo vệ tài khoản và các giao dịch của bạn trên RentShare.
                        </p>
                    </div>
                    <form class="mt-space-lg flex flex-col gap-space-md" id="reset-password-form" onsubmit="event.preventDefault(); handleFormSubmit();">
                        <div class="flex flex-col gap-space-xs">
                            <label class="font-label-lg text-label-lg text-on-surface flex items-center justify-between" for="new-password">
                                <span>Mật khẩu mới</span>
                                <span class="font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant transition-colors duration-200" id="strength-badge">Chưa nhập</span>
                            </label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3 text-outline text-[20px] pointer-events-none">key</span>
                                <input class="w-full pl-10 pr-11 py-2.5 bg-surface-container-low text-on-surface rounded-lg font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none transition-all placeholder:text-outline-variant" id="new-password" oninput="validatePassword()" placeholder="••••••••••••" required="" type="password" />
                                <button aria-label="Hiển thị hoặc ẩn mật khẩu" class="absolute right-3 text-outline hover:text-on-surface focus:outline-none flex items-center justify-center p-1" onclick="toggleVisibility('new-password', 'toggle-icon-1')" type="button">
                                    <span class="material-symbols-outlined text-[20px]" id="toggle-icon-1">visibility</span>
                                </button>
                            </div>
                            <div class="w-full bg-surface-container h-1.5 rounded-full overflow-hidden mt-1">
                                <div class="h-full w-0 bg-outline transition-all duration-300" id="strength-meter-bar"></div>
                            </div>
                        </div>
                        <div class="bg-surface-container-low p-space-sm sm:p-space-md rounded-lg flex flex-col gap-2">
                            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">Tiêu chuẩn mật khẩu an toàn</p>
                            <div class="grid grid-cols-1 gap-1.5">
                                <div class="flex items-center gap-2 text-on-surface-variant transition-colors duration-200" id="rule-length">
                                    <span class="material-symbols-outlined text-[18px] text-outline">radio_button_unchecked</span>
                                    <span class="font-body-sm text-body-sm">Tối thiểu 8 ký tự</span>
                                </div>
                                <div class="flex items-center gap-2 text-on-surface-variant transition-colors duration-200" id="rule-uppercase">
                                    <span class="material-symbols-outlined text-[18px] text-outline">radio_button_unchecked</span>
                                    <span class="font-body-sm text-body-sm">Ít nhất 1 chữ in hoa (A-Z)</span>
                                </div>
                                <div class="flex items-center gap-2 text-on-surface-variant transition-colors duration-200" id="rule-number-symbol">
                                    <span class="material-symbols-outlined text-[18px] text-outline">radio_button_unchecked</span>
                                    <span class="font-body-sm text-body-sm">Chứa ít nhất 1 chữ số hoặc ký tự đặc biệt (!@#$)</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-space-xs">
                            <label class="font-label-lg text-label-lg text-on-surface" for="confirm-password">Xác nhận mật khẩu mới</label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3 text-outline text-[20px] pointer-events-none">lock</span>
                                <input class="w-full pl-10 pr-11 py-2.5 bg-surface-container-low text-on-surface rounded-lg font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none transition-all placeholder:text-outline-variant" id="confirm-password" oninput="validateMatch()" placeholder="••••••••••••" required="" type="password" />
                                <button aria-label="Hiển thị hoặc ẩn mật khẩu xác nhận" class="absolute right-3 text-outline hover:text-on-surface focus:outline-none flex items-center justify-center p-1" onclick="toggleVisibility('confirm-password', 'toggle-icon-2')" type="button">
                                    <span class="material-symbols-outlined text-[20px]" id="toggle-icon-2">visibility</span>
                                </button>
                            </div>
                            <div class="hidden items-center gap-1.5 font-body-sm text-body-sm mt-0.5" id="match-status">
                                <span class="material-symbols-outlined text-[16px]" id="match-icon">check_circle</span>
                                <span id="match-text">Mật khẩu trùng khớp</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-2.5 bg-surface-container-low/70 p-3 rounded-lg text-on-surface-variant">
                            <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">shield_with_heart</span>
                            <p class="font-body-sm text-body-sm leading-tight text-on-surface-variant">
                                Sau khi đổi mật khẩu thành công, tất cả các phiên đăng nhập khác trên thiết bị lạ sẽ tự động đăng xuất để bảo đảm an toàn.
                            </p>
                        </div>
                        <button class="w-full bg-primary text-on-primary py-3 rounded-lg font-label-lg text-label-lg hover:opacity-90 active:scale-[0.99] transition-all flex items-center justify-center gap-2 mt-2 shadow-sm" id="submit-btn" type="submit">
                            <span>Cập nhật mật khẩu mới</span>
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </button>
                    </form>
                    <div class="mt-space-md text-center pt-space-sm">
                        <a class="inline-flex items-center gap-1.5 text-secondary hover:text-on-secondary-container font-label-md text-label-md transition-colors focus:outline-none" data-path="dang-nhap" href="#">
                            <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                            <span>Quay lại trang Đăng nhập</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function toggleVisibility(inputId, iconId) {
                const input = document.getElementById(inputId);
                const icon = document.getElementById(iconId);
                if (!input || !icon) return;

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.textContent = 'visibility_off';
                } else {
                    input.type = 'password';
                    icon.textContent = 'visibility';
                }
            }

            function updateRuleVisual(elementId, isValid) {
                const el = document.getElementById(elementId);
                if (!el) return;
                const icon = el.querySelector('.material-symbols-outlined');
                if (isValid) {
                    el.classList.remove('text-on-surface-variant');
                    el.classList.add('text-secondary', 'font-medium');
                    if (icon) {
                        icon.textContent = 'check_circle';
                        icon.classList.remove('text-outline');
                        icon.classList.add('text-secondary');
                        icon.setAttribute('style', "font-variation-settings: 'FILL' 1;");
                    }
                } else {
                    el.classList.remove('text-secondary', 'font-medium');
                    el.classList.add('text-on-surface-variant');
                    if (icon) {
                        icon.textContent = 'radio_button_unchecked';
                        icon.classList.remove('text-secondary');
                        icon.classList.add('text-outline');
                        icon.removeAttribute('style');
                    }
                }
            }

            function validatePassword() {
                const pwd = document.getElementById('new-password').value;
                const hasLength = pwd.length >= 8;
                const hasUpper = /[A-Z]/.test(pwd);
                const hasNumOrSpecial = /[0-9\W_]/.test(pwd);

                updateRuleVisual('rule-length', hasLength);
                updateRuleVisual('rule-uppercase', hasUpper);
                updateRuleVisual('rule-number-symbol', hasNumOrSpecial);

                let score = 0;
                if (hasLength) score++;
                if (hasUpper) score++;
                if (hasNumOrSpecial) score++;

                const badge = document.getElementById('strength-badge');
                const bar = document.getElementById('strength-meter-bar');

                if (pwd.length === 0) {
                    badge.textContent = 'Chưa nhập';
                    badge.className = 'font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-surface-container text-on-surface-variant transition-colors duration-200';
                    bar.style.width = '0%';
                    bar.className = 'h-full w-0 bg-outline transition-all duration-300';
                } else if (score === 1) {
                    badge.textContent = 'Yếu';
                    badge.className = 'font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-error-container text-on-error-container transition-colors duration-200';
                    bar.style.width = '33%';
                    bar.className = 'h-full bg-error transition-all duration-300';
                } else if (score === 2) {
                    badge.textContent = 'Trung bình';
                    badge.className = 'font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed-variant transition-colors duration-200';
                    bar.style.width = '66%';
                    bar.className = 'h-full bg-tertiary-container transition-all duration-300';
                } else {
                    badge.textContent = 'Mạnh';
                    badge.className = 'font-label-sm text-label-sm px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container transition-colors duration-200';
                    bar.style.width = '100%';
                    bar.className = 'h-full bg-secondary transition-all duration-300';
                }

                validateMatch();
            }

            function validateMatch() {
                const pwd = document.getElementById('new-password').value;
                const confirmPwd = document.getElementById('confirm-password').value;
                const matchStatus = document.getElementById('match-status');
                const matchIcon = document.getElementById('match-icon');
                const matchText = document.getElementById('match-text');

                if (!confirmPwd) {
                    matchStatus.classList.add('hidden');
                    matchStatus.classList.remove('flex');
                    return;
                }

                matchStatus.classList.remove('hidden');
                matchStatus.classList.add('flex');

                if (pwd === confirmPwd && pwd.length > 0) {
                    matchStatus.className = 'flex items-center gap-1.5 font-body-sm text-body-sm mt-0.5 text-secondary';
                    matchIcon.textContent = 'check_circle';
                    matchIcon.setAttribute('style', "font-variation-settings: 'FILL' 1;");
                    matchText.textContent = 'Mật khẩu trùng khớp hoàn toàn';
                } else {
                    matchStatus.className = 'flex items-center gap-1.5 font-body-sm text-body-sm mt-0.5 text-error';
                    matchIcon.textContent = 'cancel';
                    matchIcon.setAttribute('style', "font-variation-settings: 'FILL' 1;");
                    matchText.textContent = 'Mật khẩu xác nhận chưa khớp';
                }
            }

            function handleFormSubmit() {
                const pwd = document.getElementById('new-password').value;
                const confirmPwd = document.getElementById('confirm-password').value;
                const isValid = pwd.length >= 8 && /[A-Z]/.test(pwd) && /[0-9\W_]/.test(pwd) && pwd === confirmPwd;

                if (!isValid) {
                    alert('Vui lòng hoàn thành đúng các tiêu chuẩn mật khẩu an toàn và kiểm tra tính trùng khớp.');
                    return;
                }

                const btn = document.getElementById('submit-btn');
                btn.disabled = true;
                btn.innerHTML = `<span class="material-symbols-outlined animate-spin text-[18px]">progress_activity</span><span>Đang cập nhật...</span>`;

                setTimeout(() => {
                    btn.className = "w-full bg-secondary text-on-secondary py-3 rounded-lg font-label-lg text-label-lg flex items-center justify-center gap-2 mt-2 shadow-sm";
                    btn.innerHTML = `<span class="material-symbols-outlined text-[18px]">check_circle</span><span>Đổi mật khẩu thành công!</span>`;
                }, 1000);
            }
        </script>
    </main>
    <footer class="w-full py-space-md px-gutter text-center text-on-surface-variant font-label-md text-label-md border-t border-surface-container-high">
        <p>© 2025 RentShare Inc. Nền tảng chia sẻ và thuê tài sản P2P an toàn số 1 Việt Nam.</p>
    </footer>
</body>

</html>