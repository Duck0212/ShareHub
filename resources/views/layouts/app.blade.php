<!DOCTYPE html>

<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="web_standard" name="shell-type" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="bg-surface font-body-md text-on-surface antialiased">
    <header class="relative h-20 w-full px-gutter grid grid-cols-[1fr_auto_1fr] items-center gap-space-md">

        <div class="flex items-center justify-start">
            <a class="absolute left-10 top-1/2 -translate-y-1/2 z-10" href="{{ route('home') }}">
                <img alt="ShareHub Brand Logo" class="h-18 w-auto max-w-none object-contain" src="{{ asset('imgs/Logo.png') }}" />
            </a>
        </div>

        <div class="flex items-center justify-center">
            <nav class="hidden xl:flex items-center gap-space-xl" data-active-classes="text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg">
                <a href="{{ route('home') }}" class="transition-colors font-body-md text-headline-sm {{ request()->routeIs('home') ? 'text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg' : 'text-on-surface-variant hover:text-on-surface' }}">Khám phá</a>
                <a href="{{ route('assets.index') }}" class="transition-colors font-body-md text-headline-sm {{ request()->routeIs('assets.index') ? 'text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg' : 'text-on-surface-variant hover:text-on-surface' }}">Danh sách tài sản</a>
                <a href="{{ route('rental-requests.index') }}" class="transition-colors font-body-md text-headline-sm {{ request()->routeIs('rental-requests.index') ? 'text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg' : 'text-on-surface-variant hover:text-on-surface' }}">Yêu cầu thuê</a>
                <a href="{{ route('rental-requests.my-requests') }}" class="transition-colors font-body-md text-headline-sm {{ request()->routeIs('rental-requests.my-requests') ? 'text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg' : 'text-on-surface-variant hover:text-on-surface' }}">Đơn thuê của tôi</a>
                <a href="{{ route('messages.index') }}" class="transition-colors font-body-md text-headline-sm {{ request()->routeIs('messages.index') ? 'text-on-surface font-semibold bg-surface-container-low px-space-sm py-space-xs rounded-lg' : 'text-on-surface-variant hover:text-on-surface' }}">Tin nhắn</a>
            </nav>
        </div>

        <div class="flex items-center justify-end gap-space-sm md:gap-space-md">
            <div class="relative group">
                <button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-headline-sm px-space-md py-space-xs h-9 rounded-lg flex items-center gap-1.5 shadow-[0_1px_4px_rgba(0,0,0,0.08)] transition-all cursor-pointer" type="button">
                    <span>Đăng tin</span>
                    <span class="material-symbols-outlined text-[18px]">expand_more</span>
                </button>
                <div class="absolute right-0 top-full pt-2 w-72 hidden group-hover:block transition-all duration-150 z-50">
                    <div class="bg-surface-container-lowest rounded-xl p-space-xs shadow-[0_10px_25px_-5px_rgba(11,28,48,0.12)] border border-surface-container-high">
                        <a class="flex items-start gap-3 p-space-sm rounded-lg hover:bg-surface-container-low transition-colors" href="{{ route('assets.create') }}">
                            <div class="p-1.5 bg-surface-container rounded-md text-secondary">
                                <span class="material-symbols-outlined text-lg">storefront</span>
                            </div>
                            <div>
                                <p class="font-label-lg text-label-xl text-on-surface">1. Đăng tài sản cho thuê</p>
                                <p class="font-body-sm text-body-md text-on-surface-variant">Đăng tài sản muốn cho thuê</p>
                            </div>
                        </a><a class="flex items-start gap-3 p-space-sm rounded-lg hover:bg-surface-container-low transition-colors" href="{{ route('rental-requests.create') }}">
                            <div class="p-1.5 bg-secondary-container rounded-md text-on-secondary-container"><span class="material-symbols-outlined text-lg">search_check</span></div>
                            <div>
                                <p class="font-label-lg text-label-xl text-on-surface">2. Đăng tìm thuê tài sản</p>
                                <p class="font-body-sm text-body-md text-on-surface-variant">Đăng tìm tài sản cần thuê</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a class="relative p-2 rounded-full hover:bg-surface-container-low text-on-surface-variant hover:text-on-surface transition-colors" href="{{ route('notifications.index') }}">
                <span class="material-symbols-outlined text-[22px]">notifications</span>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-error ring-2 ring-surface">
                </span>
            </a>
            <div class="hidden md:flex flex-col text-right">
                <a href="{{ route('my.profile') }}">
                    <span class="font-label-lg text-headline-sm text-on-surface leading-tight">Minh Tuấn</span>
                </a>
                <span class="font-label-sm text-label-md text-secondary font-semibold">Uy tín 98/100</span>
            </div>
            <div class="relative group">
                <button class="peer flex items-center justify-center w-12 h-12 rounded-full overflow-hidden ring-1 ring-surface-container-high hover:ring-2 hover:ring-secondary transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary"
                    aria-label="Mở menu tài khoản"
                    aria-haspopup="true"
                    type="button">
                    <a href="{{ route('my.profile') }}">
                        <img alt="Profile" class="w-full h-full object-cover rounded-full" src="#" />
                    </a>
                </button>
                <div class="absolute right-0 top-full pt-2 w-56 invisible opacity-0 pointer-events-none group-hover:visible group-hover:opacity-100 group-hover:pointer-events-auto focus-within:visible focus-within:opacity-100 focus-within:pointer-events-auto transition-all duration-150 z-50">
                    <div class="bg-surface-container-lowest rounded-xl p-space-xs shadow-[0_10px_25px_-5px_rgba(11,28,48,0.12)] border border-surface-container-high">
                        <div class="px-space-sm py-2 border-b border-surface-container-high mb-1">
                            <a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" href="#">
                                <span class="material-symbols-outlined text-[18px]">person</span>
                                <span>Trang cá nhân</span>
                            </a>
                            <a class="flex items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" href="#">
                                <span class="material-symbols-outlined text-[18px]">settings</span>
                                <span>Cài đặt tài khoản</span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class="cursor-pointer flex w-full items-center gap-2.5 px-space-sm py-2 rounded-lg text-on-surface-variant hover:bg-surface-container-low hover:text-on-surface font-body-md text-body-md transition-colors" href="{{ route('logout') }}">
                                    <span class="material-symbols-outlined text-[18px]">logout</span>
                                    <span>Đăng xuất</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="w-full bg-surface-container-low mt-space-xl border-t border-outline-variant/30">
        <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-xl">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-space-lg mb-space-lg">
                <div class="lg:col-span-2 flex flex-col gap-space-md">
                    <div class="relative h-20">
                        <img alt="ShareHub Brand Logo" class="absolute left-0 top-1/2 -translate-y-1/2 h-25 w-auto max-w-none object-contain cursor-pointer" src="{{ asset('imgs/Logo.png') }}" />
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-md">Nền tảng cho thuê tài sản cá nhân ngang hàng (P2P) tiên phong tại Việt Nam. Kết nối nhu cầu thuê và cho thuê minh bạch, an toàn với giải pháp ký quỹ thông minh.</p>
                    <div class="flex items-center gap-space-sm">
                        <div class="flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-surface-container-highest border border-outline-variant/40">
                            <span class="material-symbols-outlined text-secondary text-[16px]">shield</span>
                            <span class="font-label-sm text-label-sm text-secondary font-semibold">Bảo chứng ký quỹ Escrow 100%</span>
                        </div>
                        <div class="flex items-center gap-1.5 px-space-sm py-1 rounded-full bg-surface-container-highest border border-outline-variant/40">
                            <span class="material-symbols-outlined text-secondary text-[16px]">verified_user</span>
                            <span class="font-label-sm text-label-sm text-on-surface-variant font-medium">CCCD định danh sinh trắc</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-on-surface mb-space-md font-bold">Khám phá &amp; Thuê</h4>
                    <ul class="flex flex-col gap-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li><a class="hover:text-secondary transition-colors" href="#">Thiết bị điện tử &amp; Máy ảnh</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Dụng cụ cắm trại &amp; Du lịch</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Xe máy &amp; Phương tiện xanh</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Thiết bị cơ khí gia dụng</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-on-surface mb-space-md font-bold">Chủ tài sản</h4>
                    <ul class="flex flex-col gap-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li><a class="hover:text-secondary transition-colors" href="#">Đăng cho thuê tài sản</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Quản lý lịch cho thuê</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Chính sách bảo hiểm ShareHub</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Quy trình bồi hoàn tài sản</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-label-lg text-label-lg text-on-surface mb-space-md font-bold">Hỗ trợ &amp; Pháp lý</h4>
                    <ul class="flex flex-col gap-space-sm font-body-md text-body-md text-on-surface-variant">
                        <li><a class="hover:text-secondary transition-colors" href="#">Trung tâm trợ giúp 24/7</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Quy chế bảo vệ quyền riêng tư</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Hợp đồng thuê điện tử</a></li>
                        <li><a class="hover:text-secondary transition-colors" href="#">Tiêu chuẩn đánh giá uy tín</a></li>
                    </ul>
                </div>
            </div>
            <div class="pt-space-md border-t border-outline-variant/30 flex flex-col sm:flex-row items-center justify-between gap-space-md text-on-surface-variant font-label-md text-label-md">
                <span>© 2025 ShareHub Vietnam JSC. Mọi quyền được bảo lưu.</span>
                <div class="flex items-center gap-space-md"><span>Hà Nội: Tầng 8, Keangnam Landmark 72</span><span>TP. HCM: Tầng 12, Bitexco Financial Tower</span></div>
            </div>
        </div>
    </footer>
</body>

</html>