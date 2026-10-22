@extends('layouts.auth')

@section('content')
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
            <form class="w-full flex flex-col gap-space-md"
                action="{{ route('password.email') }}"
                method="POST"
                id="forgot-password-form">

                @csrf
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
                        <input
                            class="w-full pl-11 pr-4 py-3 bg-surface-container-low rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:bg-surface-container-lowest focus:shadow-md transition-all duration-200"
                            id="recovery-email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="example@ShareHub.vn"
                            autocomplete="email"
                            required
                            type="email" />
                    </div>
                    @error('email')
                    <p class="text-sm text-error">{{ $message }}</p>
                    @enderror
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
                        Vì lý do bảo mật, nếu email tồn tại trong hệ thống, bạn sẽ nhận được đường dẫn khôi phục có hiệu lực trong <strong class="text-on-surface font-semibold">60 phút</strong>.
                    </p>
                </div>
                <!-- Success Notification Box (Initially Hidden) -->
                @if (session('status') === 'password-reset-link-sent')
                <div class="flex items-start gap-space-sm p-space-md bg-secondary-container/40 rounded-lg text-on-secondary-container">
                    <span class="material-symbols-outlined text-secondary text-[22px] shrink-0 mt-0.5">
                        mark_email_read
                    </span>

                    <div class="flex flex-col gap-0.5">
                        <p class="font-label-lg text-label-lg font-semibold text-secondary">
                            Đã tiếp nhận yêu cầu
                        </p>

                        <p class="font-body-sm text-body-sm text-on-surface-variant">
                            Nếu email phù hợp với một tài khoản trong hệ thống, bạn sẽ nhận được hướng dẫn đặt lại mật khẩu. Vui lòng kiểm tra hộp thư đến và thư mục Spam/Quảng cáo.
                        </p>
                    </div>
                </div>
                @endif
            </form>
            <!-- Navigation Back Link -->
            <div class="mt-space-lg pt-space-md w-full flex items-center justify-center">
                <a class="inline-flex items-center gap-space-xs font-label-lg text-label-lg text-on-surface hover:text-secondary transition-colors duration-150 py-1 px-space-xs rounded focus:outline-none" data-path="dang-nhap" href="{{ route('login') }}">
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
</main>
@endsection