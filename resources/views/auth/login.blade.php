@extends('layouts.auth')

@section('content')
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
                        <span class="font-label-sm text-label-sm">ShareHub Escrow</span>
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
                        <span class="font-headline-sm text-headline-lg text-on-surface tracking-tight font-bold">ShareHub</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight font-bold">
                        Chào mừng bạn trở lại!
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                        Đăng nhập để tiếp tục thuê, cho thuê và quản lý tài sản an toàn.
                    </p>
                </div>
                @if (session('status') === 'password-reset')
                <div class="rounded-lg bg-secondary-container/40 p-3 text-sm text-on-secondary-container">
                    Mật khẩu đã được đặt lại thành công. Vui lòng đăng nhập bằng mật khẩu mới.
                </div>
                @endif
                <!-- Form Component -->
                <form class="space-y-space-md"
                    method="POST"
                    action="{{ route('login.store') }}">
                    @csrf
                    @if ($errors->any())
                    <div
                        role="alert"
                        aria-live="polite"
                        class="rounded-lg bg-red-50 text-red-700 p-3">
                        <ul class="list-disc pl-5 space-y-1">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <!-- Email Field -->
                    <div class="space-y-space-xs">
                        <label class="font-label-lg text-label-lg text-on-surface flex items-center gap-1" for="email">
                            <span>Địa chỉ Email</span>
                            <span class="text-error">*</span>
                        </label>
                        <div class="relative flex items-center">
                            <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[20px] pointer-events-none">mail</span>
                            <input class="w-full pl-10 pr-4 py-3 bg-surface-container-low text-on-surface rounded-lg font-body-md text-body-md placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest transition-all duration-200"
                                id="email"
                                name="email"
                                type="email"
                                placeholder="name@example.com"
                                value="{{ old('email') }}"
                                autocomplete="username"
                                required />
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
                            <input class="w-full bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg pl-10 pr-11 py-3 placeholder:text-outline outline-none focus:ring-2 focus:ring-secondary transition-all"
                                id="password"
                                name="password"
                                placeholder="Nhập mật khẩu của bạn"
                                autocomplete="password"
                                required
                                type="password" />
                            <button class="absolute right-3.5 text-outline hover:text-on-surface transition-colors cursor-pointer flex items-center" onclick="togglePasswordVisibility('password', this)" type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                            </button>
                        </div>
                    </div>
                    <!-- Remember Me & Forgot Password Row -->
                    <div class="flex items-center justify-between pt-1">
                        <label class="flex items-center gap-space-xs cursor-pointer select-none">
                            <input class="w-4 h-4 rounded text-secondary focus:ring-0 focus:outline-none cursor-pointer"
                                id="remember"
                                name="remember"
                                type="checkbox"
                                value="1"
                                @checked(old('remember')) />
                            <span class="font-body-md text-body-md text-on-surface-variant">Ghi nhớ tài khoản</span>
                        </label>
                        <a class="font-label-lg text-label-lg text-secondary hover:underline focus:outline-none font-medium" href="{{ route('password.request') }}">
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
                        <a class="font-label-lg text-label-lg text-secondary hover:underline font-semibold ml-1" href="{{ route('register') }}">
                            Đăng ký ngay
                        </a>
                    </p>
                </div>
                <!-- Trust & Security Info Footer inside form -->
                <div class="mt-space-lg p-space-sm bg-surface-container-low rounded-lg flex items-center justify-between gap-space-sm">
                    <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                        <span class="material-symbols-outlined text-secondary text-[18px]">verified_user</span>
                        <span>Bảo mật tiền cọc qua <strong>ShareHub Escrow</strong></span>
                    </div>
                    <span class="font-label-sm text-label-sm text-outline hidden sm:inline-block">Mã hóa 256-bit</span>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility(fieldId, btn) {
            const input = document.getElementById(fieldId);
            const icon = btn.querySelector('.material-symbols-outlined');
            if (input.type === 'password') {
                input.type = 'text';
                icon.textContent = 'visibility';
            } else {
                input.type = 'password';
                icon.textContent = 'visibility_off';
            }
        };
    </script>
</main>
@endsection