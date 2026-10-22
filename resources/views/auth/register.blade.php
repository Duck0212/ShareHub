@extends('layouts.auth')

@section('content')
<main class="flex-1 w-full max-w-7xl mx-auto px-gutter py-space-lg flex items-center justify-center">
    <div class="flex flex-col w-full">
        <div class="w-full max-w-6xl mx-auto my-auto grid grid-cols-1 lg:grid-cols-12 gap-space-lg lg:gap-space-xl items-center py-space-md">
            <!-- Left Column: Trust & Ecosystem Value (5 cols) -->
            <div class="lg:col-span-5 flex flex-col gap-space-lg">
                <div class="flex flex-col gap-space-xs">
                    <div class="inline-flex items-center gap-space-xs px-3 py-1 rounded-full bg-secondary-container w-fit text-on-secondary-container">
                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings: 'FILL' 1;">verified</span>
                        <span class="font-label-sm text-label-sm uppercase tracking-wider">Hệ sinh thái P2P chuẩn hóa</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight mt-space-xs">
                        Khai phóng giá trị từ mọi tài sản xung quanh bạn
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Nền tảng gắn kết chủ sở hữu thiết bị cao cấp và người thuê văn minh với bảo chứng an toàn tuyệt đối.
                    </p>
                </div>
                <!-- Trust Pillars Bento Cards -->
                <div class="flex flex-col gap-space-md">
                    <!-- Pillar 1: Dual Role -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-space-md transition-transform hover:-translate-y-0.5 duration-200">
                        <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center shrink-0 text-secondary">
                            <span class="material-symbols-outlined text-[22px]">swap_horizontal_circle</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-headline-sm text-headline-sm text-on-surface">Một tài khoản · Đôi vai trò</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                Chuyển đổi liền mạch giữa đi thuê thiết bị chuyên nghiệp tiết kiệm chi phí và cho thuê đồ nhàn rỗi để tạo dòng tiền ổn định.
                            </p>
                        </div>
                    </div>
                    <!-- Pillar 2: Escrow Protection -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-space-md transition-transform hover:-translate-y-0.5 duration-200">
                        <div class="w-10 h-10 rounded-lg bg-secondary/10 flex items-center justify-center shrink-0 text-secondary">
                            <span class="material-symbols-outlined text-[22px]">shield_with_heart</span>
                        </div>
                        <div class="flex flex-col">
                            <div class="flex items-center gap-2">
                                <span class="font-headline-sm text-headline-sm text-on-surface">ShareHub Escrow</span>
                                <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed font-label-sm text-label-sm">Bảo chứng</span>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                Tiền đặt cọc được giữ an toàn tại tài khoản ủy thác độc lập, hoàn trả tự động ngay khi hoàn tất kiểm tra tình trạng tài sản.
                            </p>
                        </div>
                    </div>
                    <!-- Pillar 3: eKYC & Chip ID -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex items-start gap-space-md transition-transform hover:-translate-y-0.5 duration-200">
                        <div class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center shrink-0 text-on-surface">
                            <span class="material-symbols-outlined text-[22px]">fingerprint</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-headline-sm text-headline-sm text-on-surface">Xác thực CCCD gắn chip</span>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                100% người dùng định danh eKYC qua Bộ Công An và căn cước công dân gắn chip NFC, loại bỏ hoàn toàn rủi ro ẩn danh hay gian lận.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Real-time Trust Metric Snippet -->
                <div class="p-space-md rounded-xl bg-surface-container-low flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full object-cover shadow-sm" data-alt="Portrait photo of a young Vietnamese professional woman smiling outdoors with confident expression" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB61l54j0_I3vgD7KQV-Szkktqcag460syM_fvoEGqHqVAV2O6OqWSwBybXS6BYGtinrJJu2MclN_50G8P5uAlEEVrY79H-_vhKS1UMAITTnVfiYxtwbnEX8Sd4uztWoUwTqVL6r6QJvePtkN8H6xW51Y714alRq5mbyqCn3WEdiwf1Cwtl9HU0R_QrcjzGgdlSiKL0FKzBqTt3aVyQtmI_GYbBnvCMMYBkYA0n8l1P25HzuoMmi-I" />
                            <img class="w-8 h-8 rounded-full object-cover shadow-sm" data-alt="Portrait photo of an Asian male photographer holding high-end camera equipment smiling in natural lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOlgMV9lnVFf0uLf7fZkq6ARlTf5o970HNyxpmgd6GBvG4x5RoSYRxDtodm20EjooHSKukE2gxFpwT1tvhzr_HF8ULqE8tAKFCgUllRaDGiOanzoz7k1xr4pbc9noE7eJ0j6wsgBzHcQejpwZa4snkEixlUBu4GDnl1PgTphFfPePHKpXCBda0DZZWxMQaqm9UunHVA6chDbBMJjrLMLF6UEuVQI0vmd4GV0d1A1IaxV-4G7zBQ78" />
                            <img class="w-8 h-8 rounded-full object-cover shadow-sm" data-alt="Close up face portrait of an authentic young Vietnamese creative entrepreneur with clean natural background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDdPBcI8e75Z_hOvkMQSqnkiicg200Tsf3iEiUV2kqf3gwV_kikuDrWvyHlzyo2w3Pdc_XRZpMq4nMoSl_PKobUvskIGYHNq5W6oc0kfBLikwIiIKMHEQoPMfi7IibX8WJrLHMDmyMyHKxCg97unCISQloKutFHJ0yePSWSv5K05sKfdj3STFjZwZ8g8cabqjDND_XweF9WJ3HAOj_Bp-ghQEhrUBD2bp6F2j_5Y7BTEMwbAP-Nk0o" />
                        </div>
                        <div class="flex flex-col">
                            <span class="font-label-lg text-label-lg text-on-surface leading-none">24,500+</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Thành viên đã xác minh</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-1 text-secondary font-label-md text-label-md">
                        <span class="material-symbols-outlined text-[16px]">lock</span>
                        <span>An toàn 100%</span>
                    </div>
                </div>
            </div>
            <!-- Right Column: Registration Card (7 cols) -->
            <div class="lg:col-span-7">
                <div class="bg-surface-container-lowest rounded-xl shadow-xl p-space-md sm:p-space-xl">
                    <!-- Header -->
                    <div class="flex flex-col gap-1 mb-space-lg">
                        <h2 class="font-headline-md text-headline-md text-on-surface tracking-tight">Tạo tài khoản mới</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Tham gia ShareHub để thuê đồ bạn cần và kiếm tiền từ đồ bạn có.
                        </p>
                    </div>
                    <!-- Social SSO Button -->
                    <button class="w-full flex items-center justify-center gap-3 py-3 px-4 rounded-lg bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg transition-colors cursor-pointer" type="button">
                        <svg class="w-5 h-5 shrink-0" viewbox="0 0 24 24">
                            <path d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z" fill="#4285F4"></path>
                            <path d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.26v3.15C3.25 21.36 7.33 24 12 24z" fill="#34A853"></path>
                            <path d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.14-1.55.38-2.27V6.58H1.26C.46 8.16 0 9.96 0 12s.46 3.84 1.26 5.42l4.02-3.15z" fill="#FBBC05"></path>
                            <path d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.25 2.64 1.26 6.58l4.02 3.15c.95-2.83 3.6-4.93 6.72-4.93z" fill="#EA4335"></path>
                        </svg>
                        <span>Đăng ký nhanh bằng Google</span>
                    </button>
                    <!-- Divider -->
                    <div class="relative my-space-md flex items-center justify-center">
                        <div class="w-full h-px bg-surface-container-high"></div>
                        <span class="absolute bg-surface-container-lowest px-3 font-label-md text-label-md text-outline">Hoặc đăng ký bằng email</span>
                    </div>
                    <!-- Form Elements -->
                    <form
                        class="flex flex-col gap-space-md" method="POST" action="{{ route('register.store') }}">
                        @csrf
                        @if ($errors->any())
                        <div
                            role="alert"
                            aria-live="polite"
                            class="rounded-lg bg-red-50 text-red-700 p-3 font-body-sm text-body-sm">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- Full Name -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface" for="fullname">Họ và tên</label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">person</span>
                                <input class="w-full bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg pl-10 pr-4 py-3 placeholder:text-outline outline-none focus:ring-2 focus:ring-secondary transition-all"
                                    id="fullname"
                                    name="name"
                                    type="text"
                                    placeholder="Nguyễn Văn A"
                                    value="{{ old('name') }}"
                                    autocomplete="name"
                                    maxlength="255"
                                    required />
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface" for="email">Địa chỉ Email</label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">mail</span>
                                <input class="w-full bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg pl-10 pr-4 py-3 placeholder:text-outline outline-none focus:ring-2 focus:ring-secondary transition-all"
                                    id="email"
                                    name="email"
                                    type="email"
                                    placeholder="tenban@email.com"
                                    value="{{ old('email') }}"
                                    autocomplete="email"
                                    maxlength="255"
                                    required />
                            </div>
                        </div>
                        <!-- Password & Strength Meter -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface" for="password">Mật khẩu</label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">lock</span>
                                <input class="w-full bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg pl-10 pr-11 py-3 placeholder:text-outline outline-none focus:ring-2 focus:ring-secondary transition-all"
                                    id="password"
                                    name="password"
                                    oninput="checkPasswordStrength(this.value)"
                                    placeholder="Tạo mật khẩu an toàn"
                                    autocomplete="new-password"
                                    required
                                    type="password" />
                                <button class="absolute right-3.5 text-outline hover:text-on-surface transition-colors cursor-pointer flex items-center" onclick="togglePasswordVisibility('password', this)" type="button">
                                    <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                                </button>
                            </div>
                            <!-- Strength Segmented Indicator -->
                            <div class="flex flex-col gap-1 mt-1">
                                <div class="grid grid-cols-3 gap-1.5 w-full">
                                    <div class="h-1.5 rounded-full bg-surface-container transition-colors" id="bar-1"></div>
                                    <div class="h-1.5 rounded-full bg-surface-container transition-colors" id="bar-2"></div>
                                    <div class="h-1.5 rounded-full bg-surface-container transition-colors" id="bar-3"></div>
                                </div>
                                <div class="flex justify-between items-center text-label-sm font-label-sm">
                                    <span class="text-outline" id="strength-label">Độ mạnh: Chưa nhập</span>
                                    <span class="text-outline">Tối thiểu 8 ký tự, có số &amp; chữ hoa</span>
                                </div>
                            </div>
                        </div>
                        <!-- Confirm Password -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface" for="confirm-password">Xác nhận mật khẩu</label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3.5 text-outline text-[20px] pointer-events-none">lock_clock</span>
                                <input class="w-full bg-surface-container-low focus:bg-surface-container-lowest text-on-surface font-body-md text-body-md rounded-lg pl-10 pr-11 py-3 placeholder:text-outline outline-none focus:ring-2 focus:ring-secondary transition-all"
                                    id="confirm-password"
                                    name="password_confirmation"
                                    oninput="checkPasswordMatch()"
                                    placeholder="Nhập lại mật khẩu"
                                    autocomplete="new-password"
                                    required
                                    type="password" />
                                <button class="absolute right-3.5 text-outline hover:text-on-surface transition-colors cursor-pointer flex items-center" onclick="togglePasswordVisibility('confirm-password', this)" type="button">
                                    <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                                </button>
                            </div>
                            <span class="hidden text-error font-label-sm text-label-sm mt-0.5"
                                id="match-error"
                                aria-live="polite">
                                Mật khẩu nhập lại không khớp
                            </span>
                        </div>
                        <!-- Checkboxes -->
                        <div class="flex flex-col gap-2.5 pt-1">
                            <label class="flex items-start gap-2.5 cursor-pointer">
                                <input class="mt-1 w-4 h-4 rounded text-secondary accent-secondary focus:ring-secondary shrink-0 cursor-pointer"
                                    id="terms"
                                    name="terms"
                                    value="1"
                                    required
                                    type="checkbox" />
                                <span class=" font-body-sm text-body-sm text-on-surface">
                                    Tôi đồng ý với <a class="text-secondary hover:underline font-label-lg text-label-lg" href="#">Điều khoản dịch vụ</a> và <a class="text-secondary hover:underline font-label-lg text-label-lg" href="#">Chính sách bảo mật</a> của ShareHub.
                                </span>
                            </label>
                            <label class="flex items-start gap-2.5 cursor-pointer">
                                <input class="mt-1 w-4 h-4 rounded text-secondary accent-secondary focus:ring-secondary shrink-0 cursor-pointer" type="checkbox" />
                                <span class="font-body-sm text-body-sm text-on-surface-variant">
                                    Nhận thông báo về ưu đãi thuê và cơ hội kiếm thêm thu nhập từ tài sản nhàn rỗi qua email.
                                </span>
                            </label>
                        </div>
                        <!-- Primary CTA -->
                        <button class="w-full mt-2 py-3.5 px-6 rounded-lg bg-primary hover:bg-primary-container text-on-primary font-headline-sm text-headline-sm flex items-center justify-center gap-2 shadow-md transition-all active:scale-[0.99] cursor-pointer" type="submit">
                            <span>Đăng ký tài khoản</span>
                            <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                        </button>
                    </form>
                    <!-- Redirect to Login -->
                    <div class="mt-space-md pt-space-md text-center bg-surface-container-low rounded-lg p-3">
                        <p class="font-body-md text-body-md text-on-surface">
                            Đã có tài khoản?
                            <a class="text-secondary hover:underline font-headline-sm text-headline-sm ml-1 inline-flex items-center gap-0.5" href="{{ route('login') }}">
                                Đăng nhập ngay
                            </a>
                        </p>
                    </div>
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
        }

        function checkPasswordStrength(val) {
            const bar1 = document.getElementById('bar-1');
            const bar2 = document.getElementById('bar-2');
            const bar3 = document.getElementById('bar-3');
            const label = document.getElementById('strength-label');

            bar1.className = 'h-1.5 rounded-full transition-colors bg-surface-container';
            bar2.className = 'h-1.5 rounded-full transition-colors bg-surface-container';
            bar3.className = 'h-1.5 rounded-full transition-colors bg-surface-container';

            if (!val) {
                label.textContent = 'Độ mạnh: Chưa nhập';
                label.className = 'text-outline';
                return;
            }

            let score = 0;
            if (val.length >= 8) score++;
            if (/[0-9]/.test(val) && /[a-zA-Z]/.test(val)) score++;
            if (/[A-Z]/.test(val) && /[^A-Za-z0-9]/.test(val) && val.length >= 10) score++;

            if (score <= 1) {
                bar1.classList.add('bg-error');
                label.textContent = 'Độ mạnh: Yếu';
                label.className = 'text-error font-medium';
            } else if (score === 2) {
                bar1.classList.add('bg-tertiary-fixed-dim');
                bar2.classList.add('bg-tertiary-fixed-dim');
                label.textContent = 'Độ mạnh: Trung bình';
                label.className = 'text-tertiary font-medium';
            } else {
                bar1.classList.add('bg-secondary');
                bar2.classList.add('bg-secondary');
                bar3.classList.add('bg-secondary');
                label.textContent = 'Độ mạnh: Mạnh';
                label.className = 'text-secondary font-medium';
            }
            checkPasswordMatch();
        }

        function checkPasswordMatch() {
            const pw = document.getElementById('password').value;
            const confirm = document.getElementById('confirm-password').value;
            const errorEl = document.getElementById('match-error');
            if (confirm.length > 0 && pw !== confirm) {
                errorEl.classList.remove('hidden');
            } else {
                errorEl.classList.add('hidden');
            }
        }
    </script>
</main>
@endsection