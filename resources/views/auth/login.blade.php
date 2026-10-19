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
            <div class="w-full max-w-5xl bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden flex flex-col md:flex-row">
                <!-- Left Column: Lifestyle & Trust Showcase -->
                <div class="relative md:w-5/12 bg-primary-container p-space-xl flex flex-col justify-between overflow-hidden text-on-primary">
                    <!-- Decorative Backdrop Subtle Bloom -->
                    <div class="absolute -top-24 -left-24 w-72 h-72 bg-secondary/20 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-secondary-fixed-dim/10 rounded-full blur-3xl pointer-events-none"></div>
                    <!-- Top Micro Badge -->
                    <div class="relative z-10 flex items-center gap-space-xs self-start bg-surface-container-lowest/10 backdrop-blur-md px-space-md py-space-xs rounded-full">
                        <span class="material-symbols-outlined text-secondary-fixed text-[18px]">verified</span>
                        <span class="font-label-sm text-label-sm text-surface-bright tracking-wider uppercase">Cộng đồng tin cậy P2P</span>
                    </div>
                    <!-- Center Media Card: Photography / Camping Lifestyle Rental -->
                    <div class="relative z-10 my-space-lg flex flex-col gap-space-md">
                        <div class="relative rounded-xl overflow-hidden shadow-lg group">
                            <img class="w-full h-64 object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" data-alt="Young Vietnamese traveler smiling holding a premium mirrorless camera outdoors during golden hour camping in Da Lat, peaceful green pine forest background, cinematic soft sunlight, natural authentic lifestyle moment, highly detailed, 8k resolution, photorealistic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBmA2rHN_JL2-cMVsgwk5CsnXi1KTCX2TnNg3bopQ-GS43HR3I6j77p8iAc4koY4pxFAyIT6dfywZRsAUKrLdYOTD05A47uYtqjcj_b-73iZBXNOs9wm2Ri96EV0Q4VQvX9UrFnige1RKSIEm65J0ElWidbikY5RbgOYhaYcJDkze-CBQuF0xrAXW1EoZ-RgUIMdN2gJhk1_kUGhDep8Nwtwxkjc5REvkKHOncwP2Ls-84M2sBBAs" />
                            <!-- Image Floating Badge -->
                            <div class="absolute bottom-3 left-3 right-3 bg-surface-container-lowest/90 backdrop-blur-md p-space-sm rounded-lg flex items-center justify-between text-on-surface">
                                <div class="flex items-center gap-space-sm">
                                    <div class="w-8 h-8 rounded-full bg-secondary/15 flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">photo_camera</span>
                                    </div>
                                    <div>
                                        <p class="font-headline-sm text-body-sm leading-tight text-on-surface font-semibold">Sony Alpha A7 IV</p>
                                        <p class="font-label-sm text-label-sm text-on-surface-variant">Bảo hiểm vật phẩm 100%</p>
                                    </div>
                                </div>
                                <span class="font-label-sm text-label-sm font-bold text-secondary bg-secondary/10 px-2 py-1 rounded">280k/ngày</span>
                            </div>
                        </div>
                        <!-- Inspiring Quote -->
                        <div class="bg-surface-container-lowest/5 backdrop-blur-sm p-space-md rounded-xl">
                            <p class="font-body-md text-body-md text-surface-bright italic leading-relaxed">
                                “Kết nối và chia sẻ đồ dùng yêu thích với cộng đồng văn minh.”
                            </p>
                            <div class="mt-space-sm flex items-center gap-space-sm">
                                <div class="flex -space-x-2">
                                    <div class="w-6 h-6 rounded-full bg-secondary-fixed flex items-center justify-center text-[10px] font-bold text-on-secondary-fixed">TL</div>
                                    <div class="w-6 h-6 rounded-full bg-surface-variant flex items-center justify-center text-[10px] font-bold text-on-surface">MH</div>
                                    <div class="w-6 h-6 rounded-full bg-primary-fixed flex items-center justify-center text-[10px] font-bold text-on-primary-fixed">+4k</div>
                                </div>
                                <span class="font-label-sm text-label-sm text-surface-container-high">Hơn 12.000+ lượt thuê an tâm</span>
                            </div>
                        </div>
                    </div>
                    <!-- Trust Pillars Footer -->
                    <div class="relative z-10 flex items-center justify-between text-surface-container-high pt-space-sm">
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-secondary-fixed text-[18px]">lock</span>
                            <span class="font-label-sm text-label-sm">RentShare Escrow</span>
                        </div>
                        <div class="flex items-center gap-1">
                            <span class="material-symbols-outlined text-secondary-fixed text-[18px]">workspace_premium</span>
                            <span class="font-label-sm text-label-sm">Định danh CCCD</span>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Login Form -->
                <div class="md:w-7/12 p-space-lg md:p-space-xl flex flex-col justify-center bg-surface-container-lowest">
                    <!-- Brand & Welcome Header -->
                    <div class="mb-space-lg">
                        <div class="flex items-center gap-space-xs mb-space-sm">
                            <div class="w-9 h-9 rounded-lg bg-secondary flex items-center justify-center text-on-secondary shadow-md">
                                <span class="material-symbols-outlined text-[22px]">swap_horizontal_circle</span>
                            </div>
                            <span class="font-headline-sm text-headline-sm text-on-surface tracking-tight font-bold">RentShare</span>
                        </div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-bold">
                            Chào mừng bạn trở lại!
                        </h1>
                        <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                            Đăng nhập để tiếp tục thuê, cho thuê và quản lý tài sản an toàn.
                        </p>
                    </div>
                    <!-- Form Component -->
                    <form class="space-y-space-md" onsubmit="event.preventDefault();">
                        <!-- Email Field -->
                        <div class="space-y-space-xs">
                            <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-1" for="email">
                                <span>Địa chỉ Email</span>
                                <span class="text-error">*</span>
                            </label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[20px] pointer-events-none">mail</span>
                                <input class="w-full pl-10 pr-4 py-3 bg-surface-container-low text-on-surface rounded-lg font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest transition-all duration-200" id="email" name="email" placeholder="name@example.com" required="" type="email" />
                            </div>
                        </div>
                        <!-- Password Field -->
                        <div class="space-y-space-xs">
                            <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-1" for="password">
                                <span>Mật khẩu</span>
                                <span class="text-error">*</span>
                            </label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[20px] pointer-events-none">lock</span>
                                <input class="w-full pl-10 pr-12 py-3 bg-surface-container-low text-on-surface rounded-lg font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest transition-all duration-200" id="password" name="password" placeholder="••••••••" required="" type="password" />
                                <button aria-label="Ẩn hoặc hiện mật khẩu" class="absolute right-3 p-1 text-on-surface-variant hover:text-on-surface focus:outline-none transition-colors" id="toggle-pwd" type="button">
                                    <span class="material-symbols-outlined text-[20px]" id="eye-icon">visibility</span>
                                </button>
                            </div>
                        </div>
                        <!-- Remember Me & Forgot Password Row -->
                        <div class="flex items-center justify-between pt-1">
                            <label class="flex items-center gap-space-xs cursor-pointer select-none">
                                <input class="w-4 h-4 rounded text-secondary focus:ring-0 focus:outline-none cursor-pointer" id="remember" name="remember" type="checkbox" />
                                <span class="font-body-md text-body-md text-on-surface-variant">Ghi nhớ tài khoản</span>
                            </label>
                            <a class="font-label-lg text-label-lg text-secondary hover:underline focus:outline-none font-medium" href="#">
                                Quên mật khẩu?
                            </a>
                        </div>
                        <!-- Primary CTA -->
                        <button class="w-full py-3.5 px-space-md bg-primary hover:bg-on-surface text-on-primary rounded-lg font-label-lg text-label-lg font-semibold tracking-wide shadow-md hover:shadow-lg transition-all duration-200 flex items-center justify-center gap-space-xs mt-2" type="submit">
                            <span>Đăng nhập</span>
                            <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </button>
                        <!-- Divider -->
                        <div class="relative flex py-2 items-center">
                            <div class="flex-grow bg-surface-container-high h-[1px]"></div>
                            <span class="flex-shrink mx-4 font-label-sm text-label-sm text-outline uppercase tracking-wider">
                                Hoặc tiếp tục với
                            </span>
                            <div class="flex-grow bg-surface-container-high h-[1px]"></div>
                        </div>
                        <!-- Google Social Login Button -->
                        <button class="w-full py-3 px-space-md bg-surface-container-low hover:bg-surface-container text-on-surface rounded-lg font-label-lg text-label-lg transition-all duration-200 flex items-center justify-center gap-space-sm shadow-sm" type="button">
                            <svg class="w-5 h-5" viewbox="0 0 24 24">
                                <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
                                <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
                                <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"></path>
                                <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"></path>
                            </svg>
                            <span class="font-medium">Tiếp tục với Google</span>
                        </button>
                    </form>
                    <!-- Sign up redirect -->
                    <div class="mt-space-md text-center">
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Chưa có tài khoản?
                            <a class="font-label-lg text-label-lg text-secondary hover:underline font-semibold ml-1" href="#">
                                Đăng ký ngay
                            </a>
                        </p>
                    </div>
                    <!-- Trust & Security Info Footer inside form -->
                    <div class="mt-space-lg p-space-sm bg-surface-container-low rounded-lg flex items-center justify-between gap-space-sm">
                        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                            <span class="material-symbols-outlined text-secondary text-[18px]">verified_user</span>
                            <span>Bảo mật tiền cọc qua <strong>RentShare Escrow</strong></span>
                        </div>
                        <span class="font-label-sm text-label-sm text-outline hidden sm:inline-block">Mã hóa 256-bit</span>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function() {
                const toggleBtn = document.getElementById('toggle-pwd');
                const pwdInput = document.getElementById('password');
                const eyeIcon = document.getElementById('eye-icon');

                if (toggleBtn && pwdInput && eyeIcon) {
                    toggleBtn.addEventListener('click', function() {
                        const isPassword = pwdInput.getAttribute('type') === 'password';
                        pwdInput.setAttribute('type', isPassword ? 'text' : 'password');
                        eyeIcon.textContent = isPassword ? 'visibility_off' : 'visibility';
                    });
                }
            })();
        </script>
    </main>
    <footer class="w-full py-space-md px-gutter text-center text-on-surface-variant font-label-md text-label-md border-t border-surface-container-high">
        <p>© 2025 RentShare Inc. Nền tảng chia sẻ và thuê tài sản P2P an toàn số 1 Việt Nam.</p>
    </footer>
</body>

</html>