@extends('layouts.auth')

@section('content')
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
@endsection