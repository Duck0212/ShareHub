@extends('layouts.auth')

@section('content')
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
                    Chúng tôi đã gửi một liên kết xác thực an toàn đến địa chỉ email của bạn để kích hoạt quyền truy cập ShareHub:
                </p>
                <!-- Masked Email Display Card with Status Badge -->
                <div class="w-full bg-surface-container-low rounded-lg p-space-md mb-space-lg flex flex-col sm:flex-row items-center justify-between gap-space-sm sm:gap-space-md">
                    <div class="flex items-center gap-space-sm min-w-0">
                        <span class="material-symbols-outlined text-on-surface-variant text-[20px]">alternate_email</span>
                        @php
                        $email = auth()->user()->email;
                        $maskedEmail = $email;

                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        [$name, $domain] = explode('@', $email);
                        $length = mb_strlen($name);

                        // Giữ lại 3 ký tự đầu, các ký tự tiếp theo thay bằng dấu sao (*)
                        if ($length > 3) {
                        $maskedName = mb_substr($name, 0, 3) . str_repeat('*', min(5, $length - 3));
                        } else {
                        $maskedName = $name . '***';
                        }

                        $maskedEmail = $maskedName . '@' . $domain;
                        }
                        @endphp

                        <span class="font-headline-sm text-headline-sm text-on-surface truncate" title="{{ auth()->user()->email }}">
                            {{ $maskedEmail }}
                        </span>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm uppercase tracking-wider font-semibold">
                        <span class="w-2 h-2 rounded-full bg-tertiary-fixed-dim animate-pulse"></span>
                        Chưa xác thực
                    </span>
                </div>
                @if (session('status') === 'email-updated')
                <div class="mb-4 rounded-lg bg-secondary-fixed p-3 text-center text-sm text-on-secondary-fixed">
                    Email đã được cập nhật. Vui lòng kiểm tra hộp thư mới để xác minh tài khoản.
                </div>
                @endif
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
                    <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:flex-1">
                        @csrf
                        <button type="submit" id="resendBtn" class="cursor-pointer w-full py-3 px-space-md bg-surface-container-high text-on-surface rounded-lg font-label-lg text-label-lg hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[18px]" id="resendIcon">refresh</span>
                            <span id="resendText">Gửi lại email xác thực</span>
                        </button>
                    </form>
                </div>
                <!-- Notification Toast Container -->
                @if (session('status') === 'verification-link-sent')
                <div class="w-full mb-space-md p-space-sm bg-secondary-fixed text-on-secondary-fixed rounded-lg text-center font-label-sm text-label-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">check_circle</span>
                    <span>Email xác thực mới đã được gửi thành công!</span>
                </div>
                @endif

                @if (session('status') === 'email-verified')
                <div class="w-full mb-space-md p-space-sm bg-secondary-fixed text-on-secondary-fixed rounded-lg text-center font-label-sm text-label-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">check_circle</span>
                    <span>Email của bạn đã được xác minh thành công!</span>
                </div>
                @endif

                @if (session('status') === 'email-already-verified')
                <div class="w-full mb-space-md p-space-sm bg-secondary-fixed text-on-secondary-fixed rounded-lg text-center font-label-sm text-label-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[16px]">check_circle</span>
                    <span>Email của bạn đã được xác minh trước đó.</span>
                </div>
                @endif
                <!-- Help Center Accordion / Guidance Box -->
                <div class="w-full bg-surface-container-low/70 rounded-lg p-space-md text-left flex items-start gap-space-md mb-space-md">
                    <span class="material-symbols-outlined text-secondary text-[22px] mt-0.5">help_outline</span>
                    <div class="flex-1">
                        <h3 class="font-label-md text-label-md text-on-surface">Bạn vẫn chưa nhận được thư?</h3>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                            Vui lòng rà soát lại ký tự địa chỉ email trên hoặc liên hệ bộ phận hỗ trợ khách hàng ShareHub để được xác minh thủ công.
                        </p>
                        <div class="mt-space-xs flex items-center gap-space-md">
                            <a class="font-label-sm text-label-sm text-secondary flex items-center gap-1" href="{{ route('verification.email.change') }}">
                                <span class="hover:underline">Đổi địa chỉ Email</span>
                                <span class="material-symbols-outlined text-[14px]">edit</span>
                            </a>
                            <span class="text-outline-variant">•</span>
                            <a class="font-label-sm text-label-sm text-secondary flex items-center gap-1" href="#">
                                <span class="hover:underline">Hỗ trợ trực tuyến</span>
                                <span class="material-symbols-outlined text-[14px]">headset_mic</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Auxiliary Navigation Links -->
                <div class="w-full pt-space-sm flex items-center justify-between text-on-surface-variant font-label-md text-label-md">
                    <a class="hover:text-on-surface flex items-center gap-1 transition-colors" href="{{ route('home') }}">
                        <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                        <span>Về Trang chủ</span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors cursor-pointer text-left bg-transparent border-none">
                            <span class=" material-symbols-outlined text-[16px]">logout</span>
                            <span>Đăng xuất</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @if (session('status') === 'verification-link-sent')
        <script>
            (function() {
                let timeLeft = 45;
                const resendBtn = document.getElementById('resendBtn');
                const resendText = document.getElementById('resendText');
                const resendIcon = document.getElementById('resendIcon');

                // Khóa nút ngay khi vừa gửi thành công
                resendBtn.disabled = true;
                resendBtn.classList.remove('bg-surface-container-high', 'text-on-surface', 'hover:bg-surface-variant', 'cursor-pointer');
                resendBtn.classList.add('bg-surface-container', 'text-on-surface-variant', 'cursor-not-allowed');
                resendText.innerHTML = `Gửi lại email (chờ <span id="countdown">${timeLeft}</span>s)`;
                resendIcon.textContent = 'history';

                const countdownElement = document.getElementById('countdown');

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
            })();
        </script>
        @endif
    </div>
</main>
@endsection