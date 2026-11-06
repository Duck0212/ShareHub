@extends('layouts.app')

@section('content')
<main class="w-full pt-16 bg-surface min-h-[calc(100vh-16rem)]">
    <div class="flex flex-col w-full">
        <!-- Sub-header Breadcrumb & Quick Info Bar -->
        <div class="w-full bg-surface-container-low py-space-sm px-gutter">
            <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-space-sm">
                <!-- Breadcrumb -->
                <div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-lg">
                    <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}">
                        <span class="material-symbols-outlined text-[16px]">home</span>
                        Trang chủ
                    </a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface font-semibold">Danh sách yêu cầu thuê</span>
                </div>

                <!-- Escrow Protection Badge -->
                <div class="flex items-center gap-2 bg-surface-container-lowest px-3 py-1 rounded-full shadow-sm text-secondary font-label-md text-label-lg">
                    <span class="material-symbols-outlined text-[16px]">verified_user</span>
                    <span>Bảo chứng ký quỹ ShareHub Escrow 100% an toàn minh bạch</span>
                </div>
            </div>
        </div>

        <!-- Main Content Area: Bố cục 2 cột (Bộ lọc bên trái chiếm <= 1/3, Danh sách yêu cầu bên phải) -->
        <div class="max-w-7xl mx-auto w-full px-gutter py-space-lg">
            @if (session('success'))
            <div class="mb-5 rounded-xl bg-secondary/10 p-4 text-secondary font-semibold shadow-sm">{{ session('success') }}</div>
            @endif

            <div class="flex flex-col lg:flex-row items-start justify-between gap-space-lg">
                <!-- ================= BÊN TRÁI: CỘT BỘ LỌC TÌM KIẾM YÊU CẦU THUÊ ================= -->
                <aside class="w-full lg:w-[290px] shrink-0 flex flex-col gap-space-md lg:sticky top-20 self-start z-10">
                    <form action="{{ route('rental-requests.index') }}" method="GET" class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-md">

                        <!-- Header & Reset -->
                        <div class="flex items-center justify-between pb-space-xs border-b border-surface-container-high">
                            <div class="flex items-center gap-1.5 text-on-surface font-headline-sm text-headline-sm font-bold">
                                <span class="material-symbols-outlined text-secondary">tune</span>
                                <span>Bộ lọc yêu cầu</span>
                            </div>
                            <a href="{{ route('rental-requests.index') }}" class="text-on-surface-variant hover:text-error font-label-sm text-label-sm underline transition-colors">
                                Đặt lại
                            </a>
                        </div>

                        <!-- 1. Từ khóa tìm kiếm -->
                        <div class="flex flex-col gap-1.5">
                            <label for="q" class="font-label-lg text-label-lg text-on-surface font-semibold">Từ khóa</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-on-surface-variant text-[18px]">search</span>
                                <input id="q" name="q" value="{{ request('q') }}" placeholder="Tìm món đồ cần thuê..."
                                    class="w-full pl-8 pr-3 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-lg outline-none focus:ring-2 focus:ring-secondary transition-all">
                            </div>
                        </div>

                        <!-- 2. Danh mục mong muốn -->
                        <div class="flex flex-col gap-1.5">
                            <label for="category_id" class="font-label-lg text-label-lg text-on-surface font-semibold">Danh mục mong muốn</label>
                            <select id="category_id" name="category_id" class="w-full px-3 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-lg outline-none focus:ring-2 focus:ring-secondary cursor-pointer">
                                <option value="">Tất cả danh mục</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(request('category_id')==$category->id)>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- 3. Khu vực / Tỉnh thành (Có autocomplete tích hợp) -->
                        <div class="flex flex-col gap-1.5 relative" id="city-autocomplete-wrapper">
                            <label for="city" class="font-label-lg text-label-lg text-on-surface font-semibold">Khu vực / Tỉnh thành</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-on-surface-variant text-[18px]">location_on</span>
                                <input id="city" name="city" value="{{ request('city') }}" autocomplete="off"
                                    placeholder="Nhập hoặc chọn Tỉnh/Thành..."
                                    class="w-full pl-8 pr-8 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-lg outline-none focus:ring-2 focus:ring-secondary transition-all">
                                <span class="material-symbols-outlined absolute right-2.5 top-2.5 text-on-surface-variant text-[18px] pointer-events-none">expand_more</span>
                            </div>
                            <div id="city-suggestions"
                                class="hidden absolute left-0 right-0 top-full mt-1 max-h-48 overflow-y-auto bg-surface-container-lowest rounded-lg shadow-lg border border-surface-container-high z-50 flex flex-col">
                            </div>
                        </div>

                        <!-- 4. Khoảng ngân sách dự kiến (VNĐ) -->
                        <div class="flex flex-col gap-2 pt-1">
                            <span class="font-label-lg text-label-lg text-on-surface font-semibold">Ngân sách dự kiến (đ)</span>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="relative">
                                    <input name="min_budget" type="number" min="0" step="10000" value="{{ request('min_budget') }}" placeholder="Từ"
                                        class="w-full px-2.5 py-1.5 bg-surface-container-low rounded-lg text-on-surface font-label-md text-label-lg outline-none focus:ring-2 focus:ring-secondary">
                                </div>
                                <div class="relative">
                                    <input name="max_budget" type="number" min="0" step="10000" value="{{ request('max_budget') }}" placeholder="Đến"
                                        class="w-full px-2.5 py-1.5 bg-surface-container-low rounded-lg text-on-surface font-label-md text-label-lg outline-none focus:ring-2 focus:ring-secondary">
                                </div>
                            </div>
                        </div>

                        <!-- 5. Sắp xếp kết quả -->
                        <div class="flex flex-col gap-1.5">
                            <label for="sort" class="font-label-lg text-label-lg text-on-surface font-semibold">Sắp xếp theo</label>
                            <select id="sort" name="sort" class="w-full px-3 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-lg outline-none focus:ring-2 focus:ring-secondary cursor-pointer">
                                <option value="latest" @selected(request('sort', 'latest' )==='latest' )>Mới đăng gần đây</option>
                                <option value="budget_asc" @selected(request('sort')==='budget_asc' )>Ngân sách: Thấp đến Cao</option>
                                <option value="budget_desc" @selected(request('sort')==='budget_desc' )>Ngân sách: Cao đến Thấp</option>
                                <option value="start_date" @selected(request('sort')==='start_date' )>Ngày cần thuê gần nhất</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-2">
                            <button type="submit" class="w-full bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-2.5 rounded-lg shadow-sm transition-all flex items-center justify-center gap-2 cursor-pointer">
                                <span class="material-symbols-outlined text-[18px]">search</span>
                                <span>Áp dụng bộ lọc</span>
                            </button>
                        </div>
                    </form>

                    <!-- Trust Escrow Guarantee Widget -->
                    <div class="bg-surface-container rounded-xl p-space-md flex flex-col gap-2">
                        <div class="flex items-center gap-2 text-secondary">
                            <span class="material-symbols-outlined text-2xl">shield_with_heart</span>
                            <span class="font-headline-sm text-headline-sm text-on-surface font-bold">ShareHub Escrow</span>
                        </div>
                        <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                            Mọi giao dịch kết nối đều được bảo vệ qua hệ thống ký quỹ và xác thực CCCD minh bạch.
                        </p>
                    </div>
                </aside>

                <!-- ================= BÊN PHẢI: KẾT QUẢ DANH SÁCH YÊU CẦU THUÊ ================= -->
                <section class="w-full lg:w-[calc(100%-320px)] flex flex-col gap-space-md">
                    <!-- Top Toolbar Summary -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                        <div>
                            <h1 class="font-headline-md text-headline-md text-on-surface tracking-tight font-bold">
                                Yêu cầu thuê đang mở
                            </h1>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                Tìm thấy <strong class="text-on-surface font-semibold">{{ $rentalRequests->total() }}</strong> yêu cầu phù hợp
                            </p>
                        </div>
                        <a href="{{ route('rental-requests.create') }}"
                            class="shrink-0 rounded-lg bg-primary px-4 py-2 font-semibold text-on-primary flex items-center gap-1 hover:opacity-90 transition-opacity">
                            <span class="material-symbols-outlined text-[18px]">add_circle</span>
                            <span>Đăng yêu cầu thuê mới</span>
                        </a>
                    </div>

                    <!-- Filter Active Tags -->
                    @php
                    $hasActiveFilters = request()->filled('q')
                    || request()->filled('category_id')
                    || request()->filled('city')
                    || request()->filled('min_budget')
                    || request()->filled('max_budget')
                    || (request()->filled('sort') && request('sort') !== 'latest');
                    @endphp

                    @if($hasActiveFilters)
                    <div class="flex items-center gap-2 flex-wrap text-label-sm font-label-sm" id="active-filter-tags">
                        <span class="text-on-surface-variant">Đang lọc theo:</span>

                        @if(request()->filled('q'))
                        <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 dark:bg-blue-950/40 dark:text-blue-300 px-2.5 py-1 rounded-full border border-blue-200/50">
                            Từ khóa: "{{ request('q') }}"
                            <button type="button" onclick="removeFilter('q')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif

                        @if(request()->filled('category_id') && isset($categories))
                        @php
                        $selectedCategory = $categories->firstWhere('id', request('category_id'));
                        @endphp
                        @if($selectedCategory)
                        <span class="inline-flex items-center gap-1.5 bg-purple-50 text-purple-700 dark:bg-purple-950/40 dark:text-purple-300 px-2.5 py-1 rounded-full border border-purple-200/50">
                            Danh mục: {{ $selectedCategory->name }}
                            <button type="button" onclick="removeFilter('category_id')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif
                        @endif

                        @if(request()->filled('city'))
                        <span class="inline-flex items-center gap-1.5 bg-teal-50 text-teal-700 dark:bg-teal-950/40 dark:text-teal-300 px-2.5 py-1 rounded-full border border-teal-200/50">
                            Khu vực: {{ request('city') }}
                            <button type="button" onclick="removeFilter('city')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif

                        @if(request()->filled('min_budget') || request()->filled('max_budget'))
                        <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-700 dark:bg-amber-950/40 dark:text-amber-300 px-2.5 py-1 rounded-full border border-amber-200/50">
                            Ngân sách:
                            @if(request()->filled('min_budget') && request()->filled('max_budget'))
                            {{ number_format((float)request('min_budget'), 0, ',', '.') }}đ - {{ number_format((float)request('max_budget'), 0, ',', '.') }}đ
                            @elseif(request()->filled('min_budget'))
                            Trên {{ number_format((float)request('min_budget'), 0, ',', '.') }}đ
                            @else
                            Dưới {{ number_format((float)request('max_budget'), 0, ',', '.') }}đ
                            @endif
                            <button type="button" onclick="removeBudgetFilters()" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif

                        @if(request()->filled('sort') && request('sort') !== 'latest')
                        @php
                        $sortLabels = [
                        'budget_asc' => 'Ngân sách: Thấp đến Cao',
                        'budget_desc' => 'Ngân sách: Cao đến Thấp',
                        'start_date' => 'Ngày cần thuê gần nhất'
                        ];
                        @endphp
                        @if(isset($sortLabels[request('sort')]))
                        <span class="inline-flex items-center gap-1.5 bg-rose-50 text-rose-700 dark:bg-rose-950/40 dark:text-rose-300 px-2.5 py-1 rounded-full border border-rose-200/50">
                            {{ $sortLabels[request('sort')] }}
                            <button type="button" onclick="removeFilter('sort')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif
                        @endif

                        <a href="{{ route('rental-requests.index') }}" class="text-secondary hover:underline font-semibold ml-1">Xóa tất cả bộ lọc</a>
                    </div>
                    @endif

                    <!-- Rental Requests List -->
                    @forelse ($rentalRequests as $item)
                    <article class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm hover:shadow-md transition-all">
                        <!-- Post Author Header -->
                        <div class="flex items-start justify-between gap-space-sm">
                            <div class="flex items-center gap-space-sm">
                                <a href="{{ route('users.show', $item->user->username) }}" class="relative">
                                    @php
                                    $userAvatar = $item->user->avatar
                                    ? asset('storage/' . $item->user->avatar)
                                    : asset('imgs/default-avatar.png');
                                    @endphp
                                    <img class="w-12 h-12 rounded-full object-cover" src="{{ $userAvatar }}" alt="{{ $item->user->name }}" />
                                </a>
                                <div>
                                    <a href="{{ route('users.show', $item->user->username) }}" class="flex items-center gap-1.5 flex-wrap">
                                        <span class="font-label-lg text-body-lg text-on-surface font-semibold hover:underline">{{ $item->user->name }}</span>
                                        <span>•</span>
                                        <span class="inline-flex items-center gap-1 text-secondary text-body-md font-normal hover:underline">
                                            {{ $item->user->username ? '@' . $item->user->username : ''}}
                                        </span>
                                    </a>
                                    <div class="flex items-center gap-2 mt-0.5 text-on-surface-variant font-label-md text-label-md">
                                        <span>{{ $item->published_at?->diffForHumans() ?? 'Vừa đăng' }}</span>
                                        <span>•</span>
                                        <span class="inline-flex items-center gap-1 text-secondary font-medium">
                                            <span class="material-symbols-outlined text-[14px]">near_me</span>
                                            {{ $item->city }}{{ $item->district ? ', '.$item->district : '' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Bookmark Button -->
                            <button class="p-2 rounded-full hover:bg-surface-container-low text-outline transition-colors" onclick="toggleSaveBookmark(this)" title="Lưu tin này" type="button">
                                <span class="material-symbols-outlined text-[20px]">bookmark</span>
                            </button>
                        </div>

                        <!-- Main Post Body -->
                        <div class="mt-space-md">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2 py-0.5 rounded-full bg-surface-container font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider font-semibold">
                                    Danh mục: {{ $item->category->name }}
                                </span>
                                <span class="px-2 py-0.5 rounded-full bg-error-container text-on-error-container font-label-sm text-label-sm font-semibold flex items-center gap-1">
                                    <span class="material-symbols-outlined text-[12px]">schedule</span>
                                    Số lượng: {{ $item->quantity }}
                                </span>
                            </div>

                            <h2 class="font-headline-md text-headline-md text-on-surface font-bold tracking-tight">
                                <a href="{{ route('rental-requests.show', $item) }}" class="hover:text-secondary transition-colors">{{ $item->title }}</a>
                            </h2>

                            <!-- Mô tả bài viết hỗ trợ cắt ngắn 2 dòng, Xem thêm nằm inline ở cuối dòng 2 -->
                            <div class="js-truncable-desc mt-2 text-body-md text-on-surface-variant leading-relaxed"
                                data-fulltext="{{ json_encode($item->description) }}">
                                <span class="desc-text whitespace-pre-line break-words"></span>
                                <span class="desc-dots" style="display: none;">... </span>
                                <button type="button"
                                    onclick="toggleDesc(this)"
                                    class="hover:underline desc-toggle inline-block text-secondary font-semibold cursor-pointer bg-transparent border-none p-0"
                                    style="display: none;">
                                    Xem thêm
                                </button>
                            </div>

                            <!-- Metadata High-Density Chips -->
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-xs mt-space-md p-space-sm rounded-xl bg-surface-container-low">
                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Thời gian thuê</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold">
                                            {{ $item->start_date?->format('d/m/Y') }} – {{ $item->end_date?->format('d/m/Y') }}
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">payments</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Ngân sách dự kiến</div>
                                        <div class="font-label-lg text-label-lg text-secondary font-bold">
                                            @if ($item->min_daily_budget || $item->max_daily_budget)
                                            {{ number_format((float) ($item->min_daily_budget ?? 0), 0, ',', '.') }} – {{ number_format((float) ($item->max_daily_budget ?? $item->min_daily_budget), 0, ',', '.') }} đ/ngày
                                            @else
                                            Thoả thuận
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center gap-2.5 px-space-xs py-1">
                                    <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                        <span class="material-symbols-outlined text-[18px]">pin_drop</span>
                                    </div>
                                    <div>
                                        <div class="font-label-sm text-label-sm text-on-surface-variant">Địa điểm nhận</div>
                                        <div class="font-label-lg text-label-lg text-on-surface font-semibold truncate">
                                            {{ $item->city }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Attached Image (If exists) -->
                            @if ($item->images->isNotEmpty())
                            <div class="mt-space-md overflow-hidden rounded-xl bg-surface-container relative group">
                                <a href="{{ route('rental-requests.show', $item) }}" class="block">
                                    <div class="relative w-full h-64 md:h-72 bg-cover bg-center rounded-xl transition-transform duration-300 group-hover:scale-[1.01]"
                                        style="background-image: url('{{ Storage::disk('public')->url($item->images->first()->image_path) }}');">
                                        <div class="absolute inset-0 bg-gradient-to-t from-primary/60 via-transparent to-transparent"></div>
                                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-on-primary">
                                            <span class="font-label-md text-label-md flex items-center gap-1.5 backdrop-blur-md bg-primary/40 px-3 py-1 rounded-full">
                                                <span class="material-symbols-outlined text-[16px]">photo_camera</span>
                                                Ảnh minh họa thực tế yêu cầu
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                        </div>

                        <!-- Interaction Counter Bar -->
                        <div class="flex items-center justify-between mt-space-md pt-space-sm border-t border-surface-container">
                            <div class="flex items-center gap-space-md text-on-surface-variant font-label-md text-label-md">
                                <span class="flex items-center gap-1 font-semibold text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">local_offer</span>
                                    Nền tảng ký quỹ bảo chứng Escrow Shield
                                </span>
                            </div>
                            <div class="flex items-center gap-1">
                                <a href="{{ route('rental-requests.show', $item) }}" class="font-semibold text-secondary hover:underline text-sm">Xem chi tiết →</a>
                            </div>
                        </div>

                        <!-- Action Buttons Dual Row -->
                        <div class="flex flex-col sm:flex-row items-center gap-space-sm mt-space-sm pt-space-xs">
                            <button class="w-full sm:flex-1 inline-flex items-center justify-center gap-2 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-2.5 px-space-md rounded-lg shadow-sm transition-all transform active:scale-[0.98]"
                                onclick="handleOfferModal('{{ addslashes($item->title) }}')" type="button">
                                <span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1">front_hand</span>
                                <span>Tôi có tài sản này (Gửi đề xuất cho thuê)</span>
                            </button>
                            <a href="#" class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 bg-surface-container-low hover:bg-surface-container text-on-surface font-label-lg text-label-lg py-2.5 px-space-md rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-[18px] text-secondary">chat</span>
                                <span>Nhắn tin trao đổi</span>
                            </a>
                        </div>
                    </article>
                    @empty
                    <div class="rounded-xl bg-surface-container-lowest p-12 text-center shadow-sm">
                        <span class="material-symbols-outlined text-5xl text-on-surface-variant mb-2">search_off</span>
                        <h3 class="text-lg font-semibold text-on-surface">Chưa tìm thấy yêu cầu phù hợp</h3>
                        <p class="mt-2 text-on-surface-variant text-sm">Bạn có thể thay đổi bộ lọc tìm kiếm hoặc quay lại sau.</p>
                    </div>
                    @endforelse

                    <!-- Pagination Links -->
                    <div class="mt-6">
                        {{ $rentalRequests->links() }}
                    </div>
                </section>

            </div>
        </div>

        <!-- Interactive Modal: Send Rental Offer -->
        <div class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-primary/60 backdrop-blur-sm" id="offer-modal">
            <div class="bg-surface-container-lowest rounded-xl max-w-lg w-full p-space-md md:p-space-lg shadow-xl relative animate-in fade-in duration-200">
                <div class="flex items-center justify-between pb-space-sm border-b border-surface-container">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-secondary text-[22px]">storefront</span>
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Gửi đề xuất cho thuê</h3>
                    </div>
                    <button class="p-1 rounded-lg text-outline hover:bg-surface-container hover:text-on-surface cursor-pointer" onclick="closeOfferModal()" type="button">
                        <span class="material-symbols-outlined text-[20px]">close</span>
                    </button>
                </div>
                <div class="mt-space-md">
                    <p class="font-body-sm text-body-sm text-on-surface-variant">Bạn đang phản hồi yêu cầu:</p>
                    <p class="font-label-lg text-label-lg text-on-surface font-bold mt-0.5 line-clamp-1" id="offer-modal-title">Cần tìm thuê tài sản</p>
                    <form class="mt-space-md flex flex-col gap-space-sm" onsubmit="event.preventDefault(); alert('Đề xuất của bạn đã được gửi thành công đến người thuê!'); closeOfferModal();">
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Chọn tài sản bạn muốn cho thuê</label>
                            <select class="w-full bg-surface rounded-lg p-2.5 font-body-md text-body-md text-on-surface focus:outline-none">
                                <option value="1">Tài sản sẵn có trong kho của bạn...</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-space-sm">
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Giá đề xuất (đ / ngày)</label>
                                <input class="w-full bg-surface rounded-lg p-2.5 font-body-md text-body-md text-on-surface focus:outline-none" type="number" value="150000" />
                            </div>
                            <div>
                                <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Mức cọc yêu cầu (đ)</label>
                                <input class="w-full bg-surface rounded-lg p-2.5 font-body-md text-body-md text-on-surface focus:outline-none" type="number" value="500000" />
                            </div>
                        </div>
                        <div>
                            <label class="block font-label-md text-label-md text-on-surface font-semibold mb-1">Ghi chú kèm theo cho người thuê</label>
                            <textarea class="w-full bg-surface rounded-lg p-2.5 font-body-md text-body-md text-on-surface focus:outline-none resize-none" placeholder="Ví dụ: Thiết bị của mình mới 99%, có thể giao ngay hôm nay..." rows="3"></textarea>
                        </div>
                        <div class="p-space-xs rounded-lg bg-secondary-container/40 flex items-center gap-2 text-on-secondary-container">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                            <span class="font-label-sm text-label-sm">Đề xuất của bạn sẽ kích hoạt bảo chứng ký quỹ RentShare tự động.</span>
                        </div>
                        <div class="flex items-center justify-end gap-space-sm mt-space-sm pt-space-xs">
                            <button class="px-space-md py-2 rounded-lg bg-surface-container font-label-md text-label-md text-on-surface hover:bg-surface-container-high transition-colors cursor-pointer" onclick="closeOfferModal()" type="button">Hủy</button>
                            <button class="px-space-lg py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md hover:bg-on-primary-fixed-variant transition-colors shadow-sm cursor-pointer" type="submit">Xác nhận gửi đề xuất</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- 1. XỬ LÝ AUTOCOMPLETE TỈNH/THÀNH PHỐ ---
        const cityInput = document.getElementById('city');
        const suggestionBox = document.getElementById('city-suggestions');
        const wrapper = document.getElementById('city-autocomplete-wrapper');

        let provinces = [];

        fetch('https://provinces.open-api.vn/api/?depth=1')
            .then(response => response.json())
            .then(data => {
                provinces = data.map(province => province.name);
            })
            .catch(error => console.error('Lỗi tải danh sách tỉnh thành:', error));

        function removeVietnameseTones(str) {
            return str.normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .replace(/đ/g, 'd').replace(/Đ/g, 'D')
                .toLowerCase().trim();
        }

        function renderSuggestions(filteredList) {
            suggestionBox.innerHTML = '';

            if (filteredList.length === 0) {
                suggestionBox.innerHTML = '<div class="px-3 py-2 text-sm text-on-surface-variant italic">Không tìm thấy địa điểm phù hợp</div>';
            } else {
                filteredList.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'px-3 py-2 hover:bg-surface-container-low text-body-lg text-on-surface cursor-pointer transition-colors';
                    div.textContent = item;

                    div.addEventListener('click', function() {
                        cityInput.value = item;
                        hideSuggestions();
                    });
                    suggestionBox.appendChild(div);
                });
            }
            suggestionBox.classList.remove('hidden');
        }

        function hideSuggestions() {
            suggestionBox.classList.add('hidden');
        }

        function filterAndShow() {
            const query = removeVietnameseTones(cityInput.value);
            const filtered = provinces.filter(province =>
                removeVietnameseTones(province).includes(query)
            );
            renderSuggestions(filtered);
        }

        if (cityInput) {
            cityInput.addEventListener('focus', filterAndShow);
            cityInput.addEventListener('input', filterAndShow);
            cityInput.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') hideSuggestions();
            });
        }

        document.addEventListener('click', function(e) {
            if (wrapper && !wrapper.contains(e.target)) {
                hideSuggestions();
            }
        });


        // --- 2. XỬ LÝ CẮT NGẮN MÔ TẢ (XEM THÊM / THU GỌN) ---
        document.querySelectorAll('.js-truncable-desc').forEach(container => {
            try {
                const fullTextAttr = container.getAttribute('data-fulltext');
                if (!fullTextAttr) return;
                const fullText = JSON.parse(fullTextAttr);

                const textSpan = container.querySelector('.desc-text');
                const dotsSpan = container.querySelector('.desc-dots');
                const toggleBtn = container.querySelector('.desc-toggle');

                if (!fullText || !textSpan) return;

                // Đưa toàn bộ text vào để đo chiều cao thực tế
                textSpan.innerText = fullText;
                if (dotsSpan) dotsSpan.style.display = 'none';
                if (toggleBtn) toggleBtn.style.display = 'none';

                // Tính toán chiều cao tối đa của 2 dòng dựa vào line-height
                const computedStyle = window.getComputedStyle(container);
                const lineHeight = parseFloat(computedStyle.lineHeight) || 20;
                const maxHeight = lineHeight * 2;

                // Kiểm tra nếu nội dung dài hơn 2 dòng
                if (container.clientHeight > maxHeight + 6) {
                    let low = 0;
                    let high = fullText.length;
                    let bestFit = fullText;

                    while (low <= high) {
                        let mid = Math.floor((low + high) / 2);
                        textSpan.innerText = fullText.substring(0, mid);
                        if (dotsSpan) dotsSpan.style.display = 'inline';
                        if (toggleBtn) toggleBtn.style.display = 'inline-block';

                        if (container.clientHeight <= maxHeight + 6) {
                            bestFit = fullText.substring(0, mid);
                            low = mid + 1;
                        } else {
                            high = mid - 1;
                        }
                    }

                    container.setAttribute('data-truncated', bestFit);
                    renderDescState(container, false);
                } else {
                    textSpan.innerText = fullText;
                    if (dotsSpan) dotsSpan.style.display = 'none';
                    if (toggleBtn) toggleBtn.style.display = 'none';
                }
            } catch (e) {
                console.error('Lỗi xử lý cắt ngắn mô tả:', e);
            }
        });
    });

    // --- CÁC HÀM HỖ TRỢ XÓA BỘ LỌC & XEM THÊM ---
    function removeFilter(filterName) {
        const urlParams = new URLSearchParams(window.location.search);
        urlParams.delete(filterName);
        window.location.search = urlParams.toString();
    }

    function removeBudgetFilters() {
        const urlParams = new URLSearchParams(window.location.search);
        urlParams.delete('min_budget');
        urlParams.delete('max_budget');
        window.location.search = urlParams.toString();
    }

    function renderDescState(container, isExpanded) {
        const textSpan = container.querySelector('.desc-text');
        const dotsSpan = container.querySelector('.desc-dots');
        const toggleBtn = container.querySelector('.desc-toggle');
        const fullText = JSON.parse(container.getAttribute('data-fulltext'));
        const truncatedText = container.getAttribute('data-truncated');

        if (isExpanded) {
            textSpan.innerText = fullText;
            if (dotsSpan) dotsSpan.style.display = 'none';
            if (toggleBtn) toggleBtn.innerHTML = ' Thu gọn';
            container.classList.add('expanded');
        } else {
            textSpan.innerText = truncatedText;
            if (dotsSpan) dotsSpan.style.display = 'inline';
            if (toggleBtn) toggleBtn.innerHTML = '<span class="hover:underline">Xem thêm</span>';
            container.classList.remove('expanded');
        }
    }

    function toggleDesc(button) {
        const container = button.closest('.js-truncable-desc');
        const isExpanded = container.classList.contains('expanded');
        renderDescState(container, !isExpanded);
    }
</script>
@endsection