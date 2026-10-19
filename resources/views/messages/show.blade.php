@extends('layouts.app')

@section('content')
<main class="w-full pt-20 bg-background min-h-screen">
    <div class="flex flex-col w-full">
        <!-- Interactive Modal for Inspection Form (Hidden by default) -->
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-primary/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300" id="inspection-modal">
            <div class="w-full max-w-xl bg-surface-container-lowest rounded-xl shadow-xl overflow-hidden transform scale-95 transition-transform duration-300" id="inspection-dialog">
                <div class="p-space-lg bg-surface-container-low flex items-center justify-between">
                    <div class="flex items-center gap-space-sm">
                        <div class="w-8 h-8 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
                            <span class="material-symbols-outlined text-[20px]">assignment_turned_in</span>
                        </div>
                        <div>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Biên bản nghiệm thu hoàn trả</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Đơn hàng #ORD-88219 • Sony A7 IV</p>
                        </div>
                    </div>
                    <button class="w-8 h-8 rounded-full hover:bg-surface-container-highest flex items-center justify-center text-on-surface-variant transition-colors" onclick="toggleInspectionModal(false)">
                        <span class="material-symbols-outlined text-[20px]">close</span>
                    </button>
                </div>
                <div class="p-space-lg flex flex-col gap-space-md max-h-[70vh] overflow-y-auto">
                    <div class="p-space-md rounded-lg bg-surface-container-high/60 flex items-start gap-space-sm">
                        <span class="material-symbols-outlined text-secondary text-[20px] mt-0.5">verified_user</span>
                        <div class="text-on-surface font-body-sm text-body-sm">
                            <span class="font-semibold">Bảo chứng đối soát 2 chiều:</span> Hai bên chụp xác nhận 6 góc thân máy thực tế trước khi bấm ký giải tỏa cọc ký quỹ Escrow 3.000.000 đ.
                        </div>
                    </div>
                    <div class="space-y-space-sm">
                        <span class="font-label-lg text-label-lg text-on-surface font-semibold">Danh mục kiểm tra nhanh (6 điểm chạm)</span>
                        <label class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                            <span class="font-body-sm text-body-sm text-on-surface">1. Cảm biến Full-frame &amp; Ngàm E-Mount không trầy</span>
                            <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                        </label>
                        <label class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                            <span class="font-body-sm text-body-sm text-on-surface">2. Màn hình lật LCD &amp; Kính ngắm điện tử EVF hoạt động</span>
                            <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                        </label>
                        <label class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                            <span class="font-body-sm text-body-sm text-on-surface">3. Ống kính FE 24-70 GM: Vòng zoom &amp; Thấu kính trong suốt</span>
                            <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                        </label>
                        <label class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                            <span class="font-body-sm text-body-sm text-on-surface">4. Phụ kiện: 02 pin Zin Sony NP-FZ100, sạc đôi, túi đựng</span>
                            <input checked="" class="w-4 h-4 rounded text-secondary accent-secondary focus:ring-0" type="checkbox" />
                        </label>
                    </div>
                    <div class="p-space-md rounded-lg bg-surface-container flex flex-col gap-space-xs">
                        <div class="flex justify-between items-center font-label-md text-label-md">
                            <span class="text-on-surface-variant">Trạng thái giải ngân ký quỹ:</span>
                            <span class="font-bold text-secondary">Hoàn trả 100% (3.000.000 đ)</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Tiền cọc sẽ lập tức chuyển hoàn về ví RentShare của Hoàng Linh trong 15 phút.</p>
                    </div>
                </div>
                <div class="p-space-lg bg-surface-container-low flex items-center justify-end gap-space-md">
                    <button class="px-space-md py-2 rounded-lg font-label-lg text-label-lg text-on-surface hover:bg-surface-container-highest transition-colors" onclick="toggleInspectionModal(false)">
                        Để sau
                    </button>
                    <button class="px-space-lg py-2.5 rounded-lg bg-secondary text-on-secondary font-label-lg text-label-lg hover:bg-on-secondary-fixed-variant transition-colors shadow-sm flex items-center gap-1.5" onclick="confirmInspection()">
                        <span class="material-symbols-outlined text-[18px]">verified</span>
                        <span>Xác nhận &amp; Giải tỏa cọc ngay</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Breadcrumb & Top Bar -->
        <div class="max-w-[1280px] w-full mx-auto px-margin-mobile lg:px-margin pt-space-md pb-space-xs">
            <div class="flex items-center justify-between mb-space-sm">
                <a class="inline-flex items-center gap-space-xs font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors py-1 group" data-path="tin-nhan" href="#">
                    <span class="material-symbols-outlined text-[18px] transition-transform group-hover:-translate-x-1">arrow_back</span>
                    <span>Trở lại Danh sách tin nhắn</span>
                </a>
                <div class="flex items-center gap-2">
                    <span class="inline-flex items-center gap-1.5 px-space-sm py-0.5 rounded-full bg-secondary-fixed/50 text-on-secondary-fixed-variant font-label-sm text-label-sm">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
                        Kênh đối soát mã hóa P2P
                    </span>
                </div>
            </div>
            <!-- Active Conversation Header Card -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md lg:p-space-lg flex flex-col md:flex-row items-start md:items-center justify-between gap-space-md">
                <!-- Partner Profile Summary -->
                <div class="flex items-center gap-space-md min-w-0">
                    <div class="relative shrink-0">
                        <div class="w-13 h-13 md:w-14 md:h-14 rounded-full bg-surface-container overflow-hidden ring-2 ring-surface-container-high">
                            <img class="w-full h-full object-cover" data-alt="Portrait photography of Hoang Linh, a friendly Vietnamese female tech reviewer with a bright smile, soft natural studio lighting, professional and trustworthy look, neutral grey background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnUJ30jgEd3pCT8XrHA5zyy8ALPbB3gSEmMQzyqMGzleNSGUEO1MFVtq_YY7fw7ExQRgNJpXncSUj7xlNeMNS1JtXlKxCQ3U9ful1gCegt9fEa5f5moGe_fNnrJuQxW2PFZaXs3o-eLek5lWjHX_CkjRMoX-6r8TJRlMTT975hSs_yqK9l6O8eYj4U7uYf5D_84thPf9dzS1nWxUEr6K4F0D_vpg8GHiJ7pm1lMpcIMPjTl1-tVAs" />
                        </div>
                        <span class="absolute bottom-0 right-0 w-3.5 h-3.5 rounded-full bg-secondary ring-2 ring-surface-container-lowest" title="Đang trực tuyến"></span>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <div class="flex items-center gap-space-xs flex-wrap">
                            <h1 class="font-headline-sm text-headline-sm text-on-surface font-bold tracking-tight">Hoàng Linh</h1>
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-secondary-fixed/70 text-on-secondary-fixed-variant font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[13px]">verified</span>
                                <span>eKYC Cấp 2</span>
                            </span>
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-sm text-label-sm">
                                <span>Uy tín 96/100</span>
                            </span>
                        </div>
                        <div class="flex items-center gap-space-sm text-on-surface-variant font-body-sm text-body-sm mt-0.5">
                            <span class="text-secondary font-medium">Khách thuê uy tín</span>
                            <span>•</span>
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">schedule</span>
                                Thời gian phản hồi ~5 phút
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Center Transaction Pill Badge -->
                <div class="hidden lg:flex items-center gap-space-sm px-space-md py-2 rounded-xl bg-surface-container-low">
                    <span class="material-symbols-outlined text-secondary text-[20px]">sync_alt</span>
                    <div class="flex flex-col text-left">
                        <div class="flex items-center gap-2">
                            <span class="font-label-md text-label-md text-on-surface font-semibold">Đơn #ORD-88219</span>
                            <span class="px-1.5 py-0.2 rounded bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm">Sắp hoàn tất</span>
                        </div>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Giai đoạn: Nghiệm thu &amp; Hoàn trả máy</span>
                    </div>
                </div>
                <!-- Action Buttons -->
                <div class="flex items-center gap-space-sm w-full md:w-auto justify-end">
                    <button class="flex items-center gap-1.5 px-space-md py-2 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high font-label-lg text-label-lg transition-colors" type="button">
                        <span class="material-symbols-outlined text-[18px] text-secondary">phone_in_talk</span>
                        <span class="hidden sm:inline">Cuộc gọi bảo mật</span>
                    </button>
                    <!-- Dropdown Menu Wrapper -->
                    <div class="relative group">
                        <button aria-label="Thao tác khác" class="w-10 h-10 rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high flex items-center justify-center transition-colors" type="button">
                            <span class="material-symbols-outlined text-[20px]">more_vert</span>
                        </button>
                        <div class="absolute right-0 top-full pt-1.5 hidden group-hover:block z-40 w-56">
                            <div class="bg-surface-container-lowest rounded-xl p-space-xs shadow-xl flex flex-col gap-0.5">
                                <a class="flex items-center gap-space-sm px-space-sm py-2 rounded-lg hover:bg-surface-container-low text-on-surface font-label-md text-label-md transition-colors" href="#">
                                    <span class="material-symbols-outlined text-[18px] text-on-surface-variant">notifications_off</span>
                                    <span>Tắt thông báo hội thoại</span>
                                </a>
                                <a class="flex items-center gap-space-sm px-space-sm py-2 rounded-lg hover:bg-surface-container-low text-on-surface font-label-md text-label-md transition-colors" href="#">
                                    <span class="material-symbols-outlined text-[18px] text-on-surface-variant">archive</span>
                                    <span>Lưu trữ hội thoại</span>
                                </a>
                                <div class="h-px bg-surface-container my-1"></div>
                                <a class="flex items-center gap-space-sm px-space-sm py-2 rounded-lg hover:bg-error-container text-error font-label-md text-label-md transition-colors" href="#">
                                    <span class="material-symbols-outlined text-[18px]">report</span>
                                    <span>Báo cáo vi phạm</span>
                                </a>
                                <a class="flex items-center gap-space-sm px-space-sm py-2 rounded-lg hover:bg-error-container text-error font-label-md text-label-md transition-colors" href="#">
                                    <span class="material-symbols-outlined text-[18px]">block</span>
                                    <span>Chặn người dùng này</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Area: 2-Column Desktop Grid -->
        <div class="max-w-[1280px] w-full mx-auto px-margin-mobile lg:px-margin py-space-md grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
            <!-- LEFT / MAIN CHAT COLUMN (8 of 12 Cols) -->
            <div class="lg:col-span-8 flex flex-col bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex-1">
                <!-- Trust Notice Banner -->
                <div class="bg-surface-container-low px-space-md py-space-sm flex items-start gap-space-sm">
                    <span class="material-symbols-outlined text-secondary text-[20px] shrink-0 mt-0.5">verified_user</span>
                    <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                        Cuộc trò chuyện này được bảo vệ bởi <strong class="text-on-surface font-semibold">RentShare TrustShield</strong>. Mọi thỏa thuận, tin nhắn và hình ảnh được lưu trữ có giá trị đối soát pháp lý khi giải quyết cọc Escrow.
                    </p>
                </div>
                <!-- Messages Stream Scrollable Canvas -->
                <div class="flex-1 p-space-md lg:p-space-lg flex flex-col gap-space-md overflow-y-auto max-h-[680px]" id="messages-container">
                    <!-- Date Separator 1 -->
                    <div class="flex items-center justify-center my-space-xs">
                        <div class="h-px bg-surface-container flex-1"></div>
                        <span class="px-space-md py-1 rounded-full bg-surface-container text-on-surface-variant font-label-sm text-label-sm uppercase tracking-wider font-semibold mx-space-sm">
                            Thứ Sáu, 24/10/2025 • Khởi đầu thuê
                        </span>
                        <div class="h-px bg-surface-container flex-1"></div>
                    </div>
                    <!-- Message: Partner Linh -->
                    <div class="flex items-start gap-space-sm max-w-[85%] sm:max-w-[75%]">
                        <div class="w-8 h-8 rounded-full bg-surface-container shrink-0 overflow-hidden mt-1">
                            <img class="w-full h-full object-cover" data-alt="Close-up avatar of Hoang Linh smiling, realistic Vietnamese young woman with shoulder length hair in soft daylight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBO7yNJgUH4R-zv0tIhvhQRvbKtKMmR0GCU3rnSR2YwPkM_bRupdkRR_nKy3w8ehTQ56S1oWFSk45KxF4-3nMUWb6OlMpnpg4die-ygNSNdvs-ZDKZr4Dm7SHvvqj0P3vwqThS6HXzK4YSoHF43LIUSEbUd_BsLqNLEQSxKNpHw8sAxkw-CcSpgFJ0wnrl5ymyEI75TE_VxWan_A_d17MwycS3VefOOPFnwibaUaAy8L5qqGn19hl4" />
                        </div>
                        <div class="flex flex-col gap-1 items-start">
                            <div class="flex items-baseline gap-space-xs">
                                <span class="font-label-sm text-label-sm font-bold text-on-surface">Hoàng Linh</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">08:45</span>
                            </div>
                            <div class="p-space-md rounded-2xl rounded-tl-sm bg-surface-container-low text-on-surface font-body-md text-body-md leading-relaxed shadow-sm">
                                Chào anh Tuấn, em đã chuẩn bị đến The Coffee House 180 Triệu Việt Vương để nhận máy Sony A7 IV rồi anh nhé.
                            </div>
                        </div>
                    </div>
                    <!-- Message: You (Nguyen Minh Tuan) -->
                    <div class="flex items-start gap-space-sm max-w-[85%] sm:max-w-[75%] self-end flex-row-reverse">
                        <div class="w-8 h-8 rounded-full bg-primary-container text-secondary-container font-bold text-xs flex items-center justify-center shrink-0 mt-1">
                            MT
                        </div>
                        <div class="flex flex-col gap-1 items-end">
                            <div class="flex items-baseline gap-space-xs">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">08:50</span>
                                <span class="font-label-sm text-label-sm font-bold text-on-surface">Bạn (Nguyễn Minh Tuấn)</span>
                            </div>
                            <div class="p-space-md rounded-2xl rounded-tr-sm bg-primary text-on-primary font-body-md text-body-md leading-relaxed shadow-sm">
                                Chào Linh, anh đang ngồi tầng 1 bàn số 3 rồi nhé. Anh đã sạc sẵn 2 pin đầy 100% và chuẩn bị đủ phụ kiện trong túi chống sốc rồi.
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-[13px]">done_all</span> Đã xem
                            </span>
                        </div>
                    </div>
                    <!-- System Event Box: Handover Escrow Sealed -->
                    <div class="my-space-xs mx-auto w-full max-w-xl">
                        <div class="p-space-md rounded-xl bg-surface-container-high/70 flex items-start gap-space-md">
                            <div class="w-10 h-10 rounded-lg bg-secondary text-on-secondary flex items-center justify-center shrink-0 shadow-sm">
                                <span class="material-symbols-outlined text-[22px]">verified</span>
                            </div>
                            <div class="flex flex-col gap-1 flex-1">
                                <div class="flex items-center justify-between">
                                    <span class="font-label-md text-label-md font-bold text-on-surface">Biên bản bàn giao 6 góc đã hoàn tất</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">24/10 09:12</span>
                                </div>
                                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                                    Đã ký duyệt điện tử hai chiều thành công. Giờ thuê chính thức bắt đầu. Tiền cọc <strong class="text-on-surface font-semibold">3.000.000 đ</strong> đã được khóa an toàn trong Smart Escrow hợp đồng #ORD-88219.
                                </p>
                                <div class="mt-1 flex items-center gap-space-sm">
                                    <a class="font-label-sm text-label-sm text-secondary hover:underline inline-flex items-center gap-1 font-semibold" href="#">
                                        <span class="material-symbols-outlined text-[14px]">photo_library</span> Xem ảnh 6 góc bàn giao ban đầu
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Date Separator 2 -->
                    <div class="flex items-center justify-center my-space-xs">
                        <div class="h-px bg-surface-container flex-1"></div>
                        <span class="px-space-md py-1 rounded-full bg-secondary-fixed/50 text-on-secondary-fixed-variant font-label-sm text-label-sm uppercase tracking-wider font-bold mx-space-sm">
                            Hôm nay, 27/10/2025 (Ngày trả tài sản)
                        </span>
                        <div class="h-px bg-surface-container flex-1"></div>
                    </div>
                    <!-- Message: Partner Linh return warning -->
                    <div class="flex items-start gap-space-sm max-w-[85%] sm:max-w-[75%]">
                        <div class="w-8 h-8 rounded-full bg-surface-container shrink-0 overflow-hidden mt-1">
                            <img class="w-full h-full object-cover" data-alt="Portrait photography avatar of Hoang Linh wearing a modern denim jacket and glasses, soft indoor cafe lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBByXzSTG8vnaBd96q6YL1eLN2P8qE64caV9D5LLcy2rk16KNr6bH_b6penK7ph2zwmK5LS1dapFARLIE7jdbQOZu1gY1azwSmGAeOcROOLYPWrNJIHEvOPG2XbM_oYz1xlsbhokTd_cG_kBB1B98_tUu-PORCYlWf8hGWgOu4saJWfU3vmizdLZ5ASki3aQGT-EUZB4CV6RhaHTxiHDl0amt395nMZbVKOvY_XumM0FhpuNy6Whx8" />
                        </div>
                        <div class="flex flex-col gap-1 items-start">
                            <div class="flex items-baseline gap-space-xs">
                                <span class="font-label-sm text-label-sm font-bold text-on-surface">Hoàng Linh</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">17:15</span>
                            </div>
                            <div class="p-space-md rounded-2xl rounded-tl-sm bg-surface-container-low text-on-surface font-body-md text-body-md leading-relaxed shadow-sm">
                                Anh Tuấn ơi, hôm nay em trả máy sớm 30 phút nhé. Em đã chụp trước ảnh 6 góc máy sau khi quay xong để anh xem trước ạ.
                            </div>
                        </div>
                    </div>
                    <!-- Message: Photos with zoom badge -->
                    <div class="flex items-start gap-space-sm max-w-[90%] sm:max-w-[80%] pl-10">
                        <div class="flex flex-col gap-space-xs">
                            <div class="grid grid-cols-2 gap-space-xs sm:gap-space-sm max-w-md">
                                <!-- Thumbnail 1 -->
                                <div class="relative group rounded-xl overflow-hidden bg-surface-container cursor-pointer shadow-sm aspect-4/3">
                                    <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="Crisp high-resolution camera photograph of a clean Sony A7 IV camera body with lens mount and sensor cap attached, sitting safely on a clean cafe table surface, well illuminated" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoJ44xeqCeKVpiVRGNlspvs0YBzhoKtkC6wDTGTEFTTsPm4gq6AZNsDUUPkwi6RzS8lZEd6CxmyMwx47WVABzhI2fFEVVTlBMJqZo29TooJEaa4X0BPqXakkW2xqLBSN-A0hvvMn1g4emDQEdapFqau1hHyoRdI6NtNGXG8IAMVHYkFEWucpSc9ZoD0pUlRw1MDdGOSAeL5pml3G6z-f6vdh-G8QPJBFNwiReMz8CByPkD0N3o-CQ" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent flex flex-col justify-end p-space-sm opacity-90">
                                        <span class="font-label-sm text-label-sm text-on-primary font-semibold truncate">1. Thân máy &amp; Ngàm cảm biến</span>
                                    </div>
                                    <div class="absolute top-2 right-2 w-7 h-7 rounded-full bg-primary/60 backdrop-blur-md flex items-center justify-center text-on-primary">
                                        <span class="material-symbols-outlined text-[16px]">zoom_in</span>
                                    </div>
                                </div>
                                <!-- Thumbnail 2 -->
                                <div class="relative group rounded-xl overflow-hidden bg-surface-container cursor-pointer shadow-sm aspect-4/3">
                                    <img class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="Macro photo showing the back articulating LCD screen and spotless front glass element of the Sony FE 24-70mm GM lens, pristine condition, sharp reflections" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCeYCkAYbL6DTWXC_tHWp_uxhlUotAoy5PMlKkN0LeAFHLTfdlpWhQqdMSuh5HSS-L_TvVmb7wiSnxMZ1LgdD_pamk5MrlBq62PHCSojsHXMH-anoQqXNcjYVdD1L5w7HNgOXEsBmxtxXzUEDo97WlGq3U7kWQGE5E2_9e4U4XuWtoswBk1WrKxk0XjzNqjXcEZjDgJ9I6kJzf2QGW9t5y--0o7Hj9VzLDACEOtMiAB95SYEj_L6gQ" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/70 via-transparent to-transparent flex flex-col justify-end p-space-sm opacity-90">
                                        <span class="font-label-sm text-label-sm text-on-primary font-semibold truncate">2. Mặt LCD &amp; Thấu kính</span>
                                    </div>
                                    <div class="absolute top-2 right-2 w-7 h-7 rounded-full bg-primary/60 backdrop-blur-md flex items-center justify-center text-on-primary">
                                        <span class="material-symbols-outlined text-[16px]">zoom_in</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-space-xs text-on-surface-variant font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[14px]">photo_camera</span>
                                <span>2 ảnh đối soát hoàn trả • 17:16</span>
                            </div>
                        </div>
                    </div>
                    <!-- Message: You -->
                    <div class="flex items-start gap-space-sm max-w-[85%] sm:max-w-[75%] self-end flex-row-reverse">
                        <div class="w-8 h-8 rounded-full bg-primary-container text-secondary-container font-bold text-xs flex items-center justify-center shrink-0 mt-1">
                            MT
                        </div>
                        <div class="flex flex-col gap-1 items-end">
                            <div class="flex items-baseline gap-space-xs">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">17:20</span>
                                <span class="font-label-sm text-label-sm font-bold text-on-surface">Bạn (Nguyễn Minh Tuấn)</span>
                            </div>
                            <div class="p-space-md rounded-2xl rounded-tr-sm bg-primary text-on-primary font-body-md text-body-md leading-relaxed shadow-sm">
                                Cảm ơn em nhé, anh vừa đến quán rồi, em đến nơi cứ vào bàn cũ tầng 1 anh em mình test máy trực tiếp nhé!
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary flex items-center gap-0.5">
                                <span class="material-symbols-outlined text-[13px]">done_all</span> Đã xem
                            </span>
                        </div>
                    </div>
                    <!-- Message: Partner Linh (Latest arrival announcement) -->
                    <div class="flex items-start gap-space-sm max-w-[85%] sm:max-w-[75%]">
                        <div class="w-8 h-8 rounded-full bg-surface-container shrink-0 overflow-hidden mt-1 ring-2 ring-secondary">
                            <img class="w-full h-full object-cover" data-alt="Portrait photography avatar of Hoang Linh smiling, realistic Vietnamese young woman with shoulder length hair in soft daylight" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDv0JiBcwTx-aM-G9D2BSd4OjkxoZ5sHG6UM-HG5L7YYw1KXIMl7AZAChtc0nV6niG-d_VA1PFj15SE823qrQL86iAzT5eGVSFi9J8mLxDZBJWrWC2ZRlVPr0ltfDmwAv6r5uCbMgA8VZ5m7QK2SHElwsCUiQ9QksIxy58yjJKKitadjfDmvFq3cXuFHjQcH-bIE-lX0BJNjVybjENNJKJ_6LdQfuTKMTlrSKvCIteWQVkDCcXWyK8" />
                        </div>
                        <div class="flex flex-col gap-1 items-start">
                            <div class="flex items-baseline gap-space-xs">
                                <span class="font-label-sm text-label-sm font-bold text-on-surface">Hoàng Linh</span>
                                <span class="font-label-sm text-label-sm text-secondary font-semibold">17:28 • Vừa xong</span>
                            </div>
                            <div class="p-space-md rounded-2xl rounded-tl-sm bg-surface-container text-on-surface font-body-md text-body-md leading-relaxed shadow-sm">
                                Dạ em đã đến điểm hẹn The Coffee House Triệu Việt Vương rồi anh Tuấn ơi, em đang đợi ở bàn số 3 tầng 1 ạ!
                            </div>
                        </div>
                    </div>
                    <!-- Interactive System Action Banner in Chat Flow -->
                    <div class="p-space-md rounded-xl bg-surface-container-high/90 flex flex-col sm:flex-row sm:items-center justify-between gap-space-md shadow-sm">
                        <div class="flex items-center gap-space-sm">
                            <div class="w-10 h-10 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant shrink-0">
                                <span class="material-symbols-outlined text-[22px]">location_on</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-label-lg text-label-lg font-bold text-on-surface">Giai đoạn hiện tại: Khách đã đến điểm hẹn</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Hãy cùng kiểm tra tình trạng vật lý thiết bị và phụ kiện trực tiếp.</span>
                            </div>
                        </div>
                        <button class="px-space-md py-2.5 rounded-lg bg-secondary text-on-secondary hover:bg-on-secondary-fixed-variant font-label-lg text-label-lg font-semibold transition-colors shadow-sm flex items-center justify-center gap-2 shrink-0" onclick="toggleInspectionModal(true)" type="button">
                            <span class="material-symbols-outlined text-[18px]">rule_folder</span>
                            <span>Mở Biên bản nghiệm thu &amp; Hoàn trả</span>
                        </button>
                    </div>
                </div>
                <!-- Quick Canned Response Chips -->
                <div class="px-space-md pt-space-xs pb-space-sm bg-surface-container-lowest flex items-center gap-space-xs overflow-x-auto no-scrollbar">
                    <span class="font-label-sm text-label-sm text-on-surface-variant shrink-0">Mẫu trả lời:</span>
                    <button class="shrink-0 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-body-sm text-body-sm hover:bg-surface-container-high transition-colors" onclick="insertTemplate('Anh đang ngồi bàn số 3 tầng 1 đây rồi em ơi!')">
                        📍 Tôi đã đến điểm hẹn
                    </button>
                    <button class="shrink-0 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-body-sm text-body-sm hover:bg-surface-container-high transition-colors" onclick="insertTemplate('Anh đang test qua cảm biến và thấu kính nhé, máy rất ổn!')">
                        🔍 Đang kiểm tra máy
                    </button>
                    <button class="shrink-0 px-2.5 py-1 rounded-full bg-surface-container text-on-surface font-body-sm text-body-sm hover:bg-surface-container-high transition-colors" onclick="insertTemplate('Đã nhận đầy đủ 2 pin và sạc đôi rồi Linh nhé, anh mở biên bản hoàn cọc luôn.')">
                        ✅ Đã xác nhận nhận đồ
                    </button>
                </div>
                <!-- Message Composer (Bottom fixed inside chat card) -->
                <div class="p-space-md bg-surface-container-low">
                    <form class="flex flex-col gap-space-xs bg-surface-container-lowest rounded-xl p-space-sm shadow-sm" onsubmit="handleSendMessage(event)">
                        <!-- Toolbar -->
                        <div class="flex items-center justify-between px-space-xs">
                            <div class="flex items-center gap-1">
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-secondary hover:bg-surface-container transition-colors" title="Đính kèm hình ảnh kiểm tra" type="button">
                                    <span class="material-symbols-outlined text-[20px]">add_photo_alternate</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-secondary hover:bg-surface-container transition-colors" title="Đính kèm tài liệu biên bản" type="button">
                                    <span class="material-symbols-outlined text-[20px]">attach_file</span>
                                </button>
                                <button class="p-1.5 rounded-lg text-on-surface-variant hover:text-secondary hover:bg-surface-container transition-colors" title="Biểu tượng cảm xúc" type="button">
                                    <span class="material-symbols-outlined text-[20px]">mood</span>
                                </button>
                                <div class="h-4 w-px bg-surface-container mx-1"></div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant hidden sm:inline">Tin nhắn được bảo lưu chứng từ</span>
                            </div>
                            <span class="font-label-sm text-label-sm text-secondary flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">lock</span>
                                Mã hóa 2 đầu
                            </span>
                        </div>
                        <!-- Input + Send Button -->
                        <div class="flex items-center gap-space-sm mt-1">
                            <input autocomplete="off" class="flex-1 bg-transparent px-space-sm py-2 font-body-md text-body-md text-on-surface focus:outline-none placeholder:text-on-surface-variant/60" id="chat-input" placeholder="Nhập tin nhắn trao đổi với Hoàng Linh... (Enter để gửi)" type="text" />
                            <button aria-label="Gửi tin nhắn" class="w-10 h-10 rounded-full bg-secondary text-on-secondary flex items-center justify-center hover:bg-on-secondary-fixed-variant transition-transform active:scale-95 shrink-0 shadow-sm" type="submit">
                                <span class="material-symbols-outlined text-[20px]">send</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- RIGHT / CONTEXT SIDEBAR COLUMN (4 of 12 Cols) -->
            <div class="lg:col-span-4 flex flex-col gap-space-md">
                <!-- Card 1: Rental Order Summary -->
                <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md lg:p-space-lg flex flex-col gap-space-md">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[20px]">receipt_long</span>
                            <h2 class="font-label-lg text-label-lg text-on-surface font-bold">Tóm tắt đơn thuê liên quan</h2>
                        </div>
                        <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-label-sm text-label-sm font-semibold">#ORD-88219</span>
                    </div>
                    <!-- Asset Mini Card -->
                    <div class="p-space-sm rounded-xl bg-surface-container-low flex gap-space-sm items-center">
                        <div class="w-18 h-18 rounded-lg overflow-hidden bg-surface-container shrink-0">
                            <img class="w-full h-full object-cover" data-alt="Sony Alpha A7 IV mirrorless digital camera body mounted with GM 24-70mm lens resting on a clean studio display block, high-end production quality photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDgzD538PqcONCz2ccN5lob8GPoejxP1BJyFjI2DMbLiJFnkwkifE32vMo6rZkIUZDPlduakossRiLmZ5DbM7tFELiIU64sTVGXodVcujFy7n78zcnxntrSEEOVeBt0FDHiGI6kq4pBIPBA3r8Pg1A2tNHE9t6cX-yTcxL7TYAQsFOHWBrcfP6F4hpPPhXZ7Er_OEvLjpMa4YSmFipr00Jpz_RzP8ata0-emnabAWRFAGHfoCc1_FA" />
                        </div>
                        <div class="flex flex-col min-w-0">
                            <span class="inline-block px-1.5 py-0.2 rounded bg-tertiary-fixed text-on-tertiary-fixed font-label-sm text-label-sm font-semibold w-max mb-0.5">
                                Thiết bị cao cấp
                            </span>
                            <h3 class="font-label-lg text-label-lg text-on-surface font-bold truncate">Sony Alpha A7 IV + FE 24-70mm GM</h3>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Trọn bộ phụ kiện 2 pin Zin</span>
                        </div>
                    </div>
                    <!-- Rental Timelines & Status -->
                    <div class="flex flex-col gap-space-xs bg-surface-container-low/60 p-space-md rounded-xl font-body-sm text-body-sm">
                        <div class="flex justify-between items-center">
                            <span class="text-on-surface-variant">Thời gian thuê:</span>
                            <span class="font-medium text-on-surface">3 ngày (72 giờ)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-on-surface-variant">Bàn giao:</span>
                            <span class="font-medium text-on-surface">24/10/2025 • 09:30</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-on-surface-variant">Hạn trả máy:</span>
                            <span class="font-medium text-on-surface">27/10/2025 • 18:00</span>
                        </div>
                        <div class="flex justify-between items-center pt-space-xs">
                            <span class="text-on-surface-variant">Trạng thái hiện tại:</span>
                            <span class="inline-flex items-center gap-1 font-semibold text-secondary">
                                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                Đang trả đồ (Sớm 30p)
                            </span>
                        </div>
                    </div>
                    <!-- Financial & Escrow Data -->
                    <div class="p-space-md rounded-xl bg-surface-container flex flex-col gap-space-xs">
                        <div class="flex items-center justify-between">
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Tổng tiền thuê:</span>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">1.275.750 đ</span>
                        </div>
                        <div class="flex items-center justify-between font-label-sm text-label-sm text-secondary">
                            <span>Tình trạng tiền thuê:</span>
                            <span class="font-bold flex items-center gap-1">
                                <span class="material-symbols-outlined text-[14px]">check_circle</span> Đã thanh toán
                            </span>
                        </div>
                        <div class="h-px bg-outline-variant/30 my-1"></div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-on-surface-variant font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-[16px] text-secondary">shield</span>
                                <span>Cọc ký quỹ Escrow:</span>
                            </div>
                            <span class="font-label-lg text-label-lg text-on-surface font-bold">3.000.000 đ</span>
                        </div>
                        <div class="flex items-center justify-between font-label-sm text-label-sm text-on-surface-variant">
                            <span>Trạng thái quỹ cọc:</span>
                            <span class="px-2 py-0.5 rounded-full bg-surface-container-high text-on-surface font-semibold">Đang phong tỏa an toàn</span>
                        </div>
                    </div>
                    <!-- Context Ghost Actions -->
                    <div class="flex flex-col gap-space-xs pt-space-xs">
                        <a class="w-full py-2.5 px-space-md rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-label-md text-label-md font-semibold text-center flex items-center justify-center gap-2" href="#">
                            <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                            <span>Xem chi tiết đơn thuê #ORD-88219</span>
                        </a>
                        <a class="w-full py-2.5 px-space-md rounded-lg bg-surface-container text-on-surface hover:bg-surface-container-high transition-colors font-label-md text-label-md font-semibold text-center flex items-center justify-center gap-2" href="#">
                            <span class="material-symbols-outlined text-[18px]">fact_check</span>
                            <span>Biên bản bàn giao 6 góc (Đã lưu)</span>
                        </a>
                    </div>
                </div>
                <!-- Card 2: Partner Profile Card -->
                <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md lg:p-space-lg flex flex-col gap-space-md">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[20px]">badge</span>
                            <h2 class="font-label-lg text-label-lg text-on-surface font-bold">Hồ sơ đối tác Hoàng Linh</h2>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary font-semibold">Thành viên 2 năm</span>
                    </div>
                    <!-- Verified credentials List -->
                    <div class="flex flex-col gap-space-sm">
                        <div class="flex items-start gap-space-sm p-space-sm rounded-lg bg-surface-container-low">
                            <div class="w-7 h-7 rounded-full bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-[16px]">id_card</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="font-label-md text-label-md text-on-surface font-semibold">CCCD gắn chip định danh</span>
                                <span class="font-body-sm text-body-sm text-secondary font-medium">Đã xác thực (VNeID Cấp 2 sinh trắc)</span>
                            </div>
                        </div>
                        <div class="flex items-start gap-space-sm p-space-sm rounded-lg bg-surface-container-low">
                            <div class="w-7 h-7 rounded-full bg-tertiary-fixed flex items-center justify-center text-on-tertiary-fixed shrink-0 mt-0.5">
                                <span class="material-symbols-outlined text-[16px]">stars</span>
                            </div>
                            <div class="flex flex-col">
                                <div class="flex items-center gap-2">
                                    <span class="font-label-md text-label-md text-on-surface font-semibold">Điểm tín nhiệm:</span>
                                    <span class="font-bold text-on-surface">96 / 100</span>
                                </div>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Hạng đối tác: Vàng (Đáng tin cậy cao)</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-space-xs pt-1">
                            <div class="p-space-sm rounded-lg bg-surface-container flex flex-col items-center text-center">
                                <span class="font-headline-sm text-headline-sm font-bold text-on-surface">14</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Lần thuê thành công</span>
                                <span class="font-label-sm text-label-sm text-secondary font-medium mt-0.5">0 tranh chấp</span>
                            </div>
                            <div class="p-space-sm rounded-lg bg-surface-container flex flex-col items-center text-center">
                                <span class="font-headline-sm text-headline-sm font-bold text-secondary">100%</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Trả đúng hạn</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant mt-0.5">Không chậm trễ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Process Quick Actions -->
                <div class="bg-surface-container-lowest rounded-xl shadow-sm p-space-md lg:p-space-lg flex flex-col gap-space-sm">
                    <h2 class="font-label-lg text-label-lg text-on-surface font-bold flex items-center gap-2">
                        <span class="material-symbols-outlined text-[20px] text-secondary">bolt</span>
                        Hành động theo quy trình
                    </h2>
                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        Sau khi kiểm tra camera trực tiếp tại quán cà phê, thực hiện các bước dưới đây:
                    </p>
                    <button class="w-full py-3 px-space-md rounded-lg bg-secondary text-on-secondary hover:bg-on-secondary-fixed-variant transition-all font-label-lg text-label-lg font-bold shadow-sm flex items-center justify-center gap-2 mt-2" onclick="toggleInspectionModal(true)" type="button">
                        <span class="material-symbols-outlined text-[20px]">assignment_turned_in</span>
                        <span>Nghiệm thu &amp; Giải tỏa cọc Escrow</span>
                    </button>
                    <button class="w-full py-2.5 px-space-md rounded-lg bg-error-container text-error hover:bg-error hover:text-on-error transition-colors font-label-md text-label-md font-semibold flex items-center justify-center gap-2" onclick="alert('Đã gửi yêu cầu hỗ trợ sự cố đến đội ngũ Kiểm duyệt &amp; Bảo hiểm RentShare. Chuyên viên sẽ liên hệ trong 5 phút.')" type="button">
                        <span class="material-symbols-outlined text-[18px]">warning</span>
                        <span>Báo cáo sự cố / Khiếu nại hư hại</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Inline Micro-interactions Script -->
        <script>
            function toggleInspectionModal(show) {
                const modal = document.getElementById('inspection-modal');
                const dialog = document.getElementById('inspection-dialog');
                if (show) {
                    modal.classList.remove('hidden');
                    setTimeout(() => {
                        modal.classList.remove('opacity-0');
                        dialog.classList.remove('scale-95');
                    }, 10);
                } else {
                    modal.classList.add('opacity-0');
                    dialog.classList.add('scale-95');
                    setTimeout(() => {
                        modal.classList.add('hidden');
                    }, 300);
                }
            }

            function insertTemplate(text) {
                const input = document.getElementById('chat-input');
                input.value = text;
                input.focus();
            }

            function handleSendMessage(event) {
                event.preventDefault();
                const input = document.getElementById('chat-input');
                const text = input.value.trim();
                if (!text) return;

                const container = document.getElementById('messages-container');
                const time = new Date().toLocaleTimeString('vi-VN', {
                    hour: '2-digit',
                    minute: '2-digit'
                });

                // Create new message node
                const messageDiv = document.createElement('div');
                messageDiv.className = 'flex items-start gap-space-sm max-w-[85%] sm:max-w-[75%] self-end flex-row-reverse';
                messageDiv.innerHTML = `
        <div class="w-8 h-8 rounded-full bg-primary-container text-secondary-container font-bold text-xs flex items-center justify-center shrink-0 mt-1">
          MT
        </div>
        <div class="flex flex-col gap-1 items-end">
          <div class="flex items-baseline gap-space-xs">
            <span class="font-label-sm text-label-sm text-on-surface-variant">${time}</span>
            <span class="font-label-sm text-label-sm font-bold text-on-surface">Bạn (Nguyễn Minh Tuấn)</span>
          </div>
          <div class="p-space-md rounded-2xl rounded-tr-sm bg-primary text-on-primary font-body-md text-body-md leading-relaxed shadow-sm">
            ${escapeHTML(text)}
          </div>
          <span class="font-label-sm text-label-sm text-on-surface-variant flex items-center gap-0.5">
            <span class="material-symbols-outlined text-[13px]">done</span> Đã gửi
          </span>
        </div>
      `;

                container.appendChild(messageDiv);
                input.value = '';
                container.scrollTop = container.scrollHeight;
            }

            function escapeHTML(str) {
                return str.replace(/[&<>'"]/g,
                    tag => ({
                        '&': '&amp;',
                        '<': '&lt;',
                        '>': '&gt;',
                        "'": '&#39;',
                        '"': '&quot;'
                    } [tag] || tag)
                );
            }

            function confirmInspection() {
                toggleInspectionModal(false);
                const container = document.getElementById('messages-container');
                const successBanner = document.createElement('div');
                successBanner.className = 'my-space-xs mx-auto w-full max-w-xl';
                successBanner.innerHTML = `
        <div class="p-space-md rounded-xl bg-secondary-fixed/50 flex items-start gap-space-md">
          <div class="w-10 h-10 rounded-lg bg-secondary text-on-secondary flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined text-[22px]">check_circle</span>
          </div>
          <div class="flex flex-col gap-1 flex-1">
            <span class="font-label-md text-label-md font-bold text-on-secondary-fixed-variant">Nghiệm thu hoàn tất!</span>
            <p class="font-body-sm text-body-sm text-on-surface leading-relaxed">
              Hai bên đã xác nhận hoàn trả thiết bị toàn vẹn. Hợp đồng #ORD-88219 đã hoàn tất. Lệnh hoàn cọc 3.000.000 đ cho Hoàng Linh đã được Smart Escrow thi hành.
            </p>
          </div>
        </div>
      `;
                container.appendChild(successBanner);
                container.scrollTop = container.scrollHeight;
            }
        </script>
    </div>
</main>
@endsection