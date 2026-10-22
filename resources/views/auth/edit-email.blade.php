@extends('layouts.auth')

@section('content')
<main
    class="flex-1 w-full max-w-7xl mx-auto px-gutter py-space-lg flex items-center justify-center">
    <div
        class="flex flex-col w-full items-center justify-center py-space-sm sm:py-space-md">
        <!-- Card Container: Max 560px for high-trust auth flow -->
        <div
            class="w-full max-w-xl bg-surface-container-lowest shadow-xl rounded-xl p-6 sm:p-8 flex flex-col gap-6 relative overflow-hidden">
            <!-- Ambient Security Highlight Accent Strip -->
            <div
                class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-secondary via-on-surface to-secondary"></div>
            <!-- Header & Badge -->
            <div class="flex flex-col items-center text-center gap-3 pt-2">
                <div
                    class="w-14 h-14 rounded-full bg-surface-container-low flex items-center justify-center text-secondary shadow-sm">
                    <span class="material-symbols-outlined text-[28px]">mark_email_unread</span>
                </div>
                <div class="flex flex-col gap-1">
                    <h1
                        class="font-headline-md text-headline-md text-on-surface tracking-tight">
                        Đổi địa chỉ Email xác minh
                    </h1>
                    <p
                        class="font-body-md text-body-md text-on-surface-variant max-w-md">
                        Cập nhật lại địa chỉ email chính xác để nhận mã kích hoạt tài
                        khoản ShareHub.
                    </p>
                </div>
            </div>
            <!-- Current Pending Status Strip -->
            <div
                class="bg-surface-container-low rounded-lg p-4 flex flex-col gap-2">
                <div class="flex items-center justify-between flex-wrap gap-2">
                    <div class="flex items-center gap-2 min-w-0">
                        <span class="leading-none material-symbols-outlined shrink-0 text-on-surface-variant text-[20px] translate-y-0.5">outgoing_mail</span>
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
                <p
                    class="font-body-sm text-body-sm text-on-surface-variant flex items-start gap-1.5">
                    <span
                        class="material-symbols-outlined text-outline text-[16px] mt-0.5 shrink-0">info</span>
                    <span>Mã xác minh đã gửi đến email cũ sẽ tự động bị vô hiệu hóa ngay
                        khi bạn cập nhật sang email mới.</span>
                </p>
            </div>
            <!-- Form Section -->
            <form
                action="{{ route('verification.email.update') }}"
                method="POST"
                class="flex flex-col gap-5"
                id="change-email-form">
                @csrf
                @method('PUT')
                <!-- New Email Field -->
                <div class="flex flex-col gap-1.5">
                    <label
                        class="font-label-lg text-label-lg text-on-surface flex items-center justify-between"
                        for="new-email">
                        <span>Địa chỉ Email mới <span class="text-error">*</span></span>
                    </label>
                    <div class="relative flex items-center">
                        <span
                            class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">alternate_email</span>
                        <input
                            class="w-full bg-surface-container-lowest text-on-surface font-body-md text-body-md pl-11 pr-4 py-3 rounded-lg bg-surface-container-low/40 focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary transition-all"
                            id="new-email"
                            name="new_email"
                            value="{{ old('new_email') }}"
                            placeholder="vidu@domain.com"
                            autocomplete="email"
                            required
                            type="email" />
                    </div>
                    @error('new_email')
                    <p class="text-sm text-error">{{ $message }}</p>
                    @enderror
                    <p
                        class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
                        <span class="material-symbols-outlined text-outline text-[15px]">schedule</span>
                        <span>Chúng tôi sẽ gửi một liên kết xác minh mới có hiệu lực trong
                            24 giờ đến hòm thư này.</span>
                    </p>
                </div>
                <!-- Account Password Confirmation Field -->
                <div class="flex flex-col gap-1.5">
                    <label
                        class="font-label-lg text-label-lg text-on-surface"
                        for="account-password">
                        Mật khẩu tài khoản ShareHub <span class="text-error">*</span>
                    </label>
                    <div class="relative flex items-center">
                        <span
                            class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">lock</span>
                        <input class="w-full bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg pl-10 pr-11 py-3 placeholder:text-outline outline-none focus:ring-2 focus:ring-secondary transition-all"
                            id="password"
                            name="password"
                            placeholder="Nhập mật khẩu của bạn"
                            autocomplete="current-password"
                            required
                            type="password" />
                        <button class="absolute right-3.5 text-outline hover:text-on-surface transition-colors cursor-pointer flex items-center" onclick="togglePasswordVisibility('password', this)" type="button">
                            <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                        </button>
                    </div>
                    @error('password')
                    <p class="text-sm text-error">{{ $message }}</p>
                    @enderror
                    <p
                        class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
                        <span class="material-symbols-outlined text-outline text-[15px]">verified_user</span>
                        <span>Xác nhận bạn là chủ sở hữu tài khoản trước khi thay đổi email
                            đăng nhập.</span>
                    </p>
                </div>
                <!-- Security Guidance Notice -->
                <div
                    class="bg-surface-container rounded-lg p-4 flex gap-3 text-on-surface">
                    <span
                        class="material-symbols-outlined text-secondary text-[22px] shrink-0 mt-0.5">security</span>
                    <div class="flex flex-col gap-1">
                        <span
                            class="font-label-lg text-label-lg text-on-surface font-semibold">Lưu ý bảo mật:</span>
                        <ul
                            class="list-disc list-inside font-body-sm text-body-sm text-on-surface-variant space-y-1">
                            <li>
                                Mỗi tài khoản ShareHub chỉ liên kết duy nhất với một địa
                                chỉ email đã xác minh.
                            </li>
                            <li>
                                Kiểm tra kỹ cả thư mục Hộp thư đến (Inbox) và Thư rác (Spam
                                / Quảng cáo) sau khi gửi.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Action Buttons -->
                <div class="flex flex-col gap-3 pt-2">
                    <button
                        class="cursor-pointer w-full py-3.5 px-6 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg hover:bg-primary-container active:scale-[0.99] transition-all flex items-center justify-center gap-2 shadow-md"
                        id="submit-btn"
                        type="submit">
                        <span>Cập nhật &amp; Gửi lại email xác minh</span>
                        <span class="material-symbols-outlined text-[20px]">send</span>
                    </button>
                    <a
                        class="w-full py-3 px-6 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg text-center transition-colors flex items-center justify-center gap-2"
                        data-path="xac-minh-email"
                        href="{{ route('verification.show') }}">
                        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                        <span>Hủy &amp; Quay lại trang xác minh</span>
                    </a>
                </div>
            </form>
            <!-- Support Center Contact Footer -->
            <div
                class="flex flex-col sm:flex-row items-center justify-between pt-3 text-on-surface-variant font-body-sm text-body-sm gap-2">
                <div class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-secondary text-[18px]">headset_mic</span>
                    <span>Gặp trở ngại kỹ thuật?</span>
                </div>
                <a
                    class="font-label-md text-label-md text-secondary hover:underline flex items-center gap-1 font-semibold"
                    href="#">
                    <span>Liên hệ bộ phận CSKH</span>
                    <span class="material-symbols-outlined text-[16px]">open_in_new</span>
                </a>
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
        }

        document
            .getElementById("change-email-form")
            ?.addEventListener("submit", function() {
                const submitBtn = document.getElementById("submit-btn");

                if (!submitBtn) return;

                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                <span class="inline-block animate-spin material-symbols-outlined text-[20px]">
                    progress_activity
                </span>
                <span>Đang cập nhật...</span>
            `;
            });
    </script>
</main>
@endsection