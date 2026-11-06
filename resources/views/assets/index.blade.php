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
                    <span class="text-on-surface font-semibold">Danh sách tài sản cho thuê</span>
                </div>

                <!-- Escrow Protection Badge -->
                <div class="flex items-center gap-2 bg-surface-container-lowest px-3 py-1 rounded-full shadow-sm text-secondary font-label-md text-label-lg">
                    <span class="material-symbols-outlined text-[16px]">verified_user</span>
                    <span>Hợp đồng điện tử & Ký quỹ ShareHub Escrow 100% minh bạch</span>
                </div>
            </div>
        </div>

        <!-- Main Content Area: Bố cục 2 cột (Bộ lọc bên trái chiếm <= 1/3) -->
        <div class="max-w-7xl mx-auto w-full px-gutter py-space-lg">
            <div class="flex flex-col lg:flex-row items-start gap-space-lg">

                <!-- ================= BÊN TRÁI: CỘT BỘ LỌC TÌM KIẾM (w-full lg:w-[290px] <= 1/3) ================= -->
                <aside class="w-full lg:w-[290px] shrink-0 flex flex-col gap-space-md lg:sticky top-20 self-start z-10">
                    <form action="{{ route('assets.index') }}" method="GET" class="bg-surface-container-lowest rounded-xl p-space-md shadow-sm flex flex-col gap-space-md">

                        <!-- Header & Reset -->
                        <div class="flex items-center justify-between pb-space-xs border-b border-surface-container-high">
                            <div class="flex items-center gap-1.5 text-on-surface font-headline-sm text-headline-sm font-bold">
                                <span class="material-symbols-outlined text-secondary">tune</span>
                                <span>Bộ lọc tìm kiếm</span>
                            </div>
                            <a href="{{ route('assets.index') }}" class="text-on-surface-variant hover:text-error font-label-sm text-label-sm underline transition-colors">
                                Đặt lại
                            </a>
                        </div>

                        <!-- 1. Từ khóa tìm kiếm -->
                        <div class="flex flex-col gap-1.5">
                            <label for="q" class="font-label-lg text-label-lg text-on-surface font-semibold">Từ khóa</label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-2.5 top-2.5 text-on-surface-variant text-[18px]">search</span>
                                <input id="q" name="q" value="{{ request('q') }}" placeholder="Tên tài sản, thương hiệu..."
                                    class="w-full pl-8 pr-3 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-lg outline-none focus:ring-2 focus:ring-secondary transition-all">
                            </div>
                        </div>

                        <!-- 2. Danh mục tài sản -->
                        <div class="flex flex-col gap-1.5">
                            <label for="category_id" class="font-label-lg text-label-lg text-on-surface font-semibold">Danh mục tài sản</label>
                            <select id="category_id" name="category_id" class="w-full px-3 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-lg outline-none focus:ring-2 focus:ring-secondary cursor-pointer">
                                <option value="">Tất cả danh mục</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(request('category_id')==$category->id)>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- 3. Khu vực / Tỉnh thành -->
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

                        <!-- 4. Tình trạng thiết bị -->
                        <div class="flex flex-col gap-1.5">
                            <label for="condition" class="font-label-lg text-label-lg text-on-surface font-semibold">Tình trạng máy</label>
                            <select id="condition" name="condition" class="w-full px-3 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-lg outline-none focus:ring-2 focus:ring-secondary cursor-pointer">
                                <option value="">Tất cả tình trạng</option>
                                <option value="new" @selected(request('condition')==='new' )>Mới (100%)</option>
                                <option value="like_new" @selected(request('condition')==='like_new' )>Như mới (99%)</option>
                                <option value="good" @selected(request('condition')==='good' )>Tốt (Hoạt động ổn định)</option>
                                <option value="fair" @selected(request('condition')==='fair' )>Đã qua sử dụng</option>
                            </select>
                        </div>

                        <!-- 5. Khoảng giá thuê (VNĐ / ngày) -->
                        <div class="flex flex-col gap-2 pt-1">
                            <span class="font-label-lg text-label-lg text-on-surface font-semibold">Giá thuê / ngày (VNĐ)</span>
                            <div class="grid grid-cols-2 gap-2">
                                <div class="relative">
                                    <input name="min_price" type="number" min="0" step="10000" value="{{ request('min_price') }}" placeholder="Từ"
                                        class="w-full px-2.5 py-1.5 bg-surface-container-low rounded-lg text-on-surface font-label-md text-label-lg outline-none focus:ring-2 focus:ring-secondary">
                                </div>
                                <div class="relative">
                                    <input name="max_price" type="number" min="0" step="10000" value="{{ request('max_price') }}" placeholder="Đến"
                                        class="w-full px-2.5 py-1.5 bg-surface-container-low rounded-lg text-on-surface font-label-md text-label-lg outline-none focus:ring-2 focus:ring-secondary">
                                </div>
                            </div>
                        </div>

                        <!-- 6. Sắp xếp kết quả -->
                        <div class="flex flex-col gap-1.5">
                            <label for="sort" class="font-label-lg text-label-lg text-on-surface font-semibold">Sắp xếp theo</label>
                            <select id="sort" name="sort" class="w-full px-3 py-2 bg-surface-container-low rounded-lg text-on-surface font-body-md text-body-lg outline-none focus:ring-2 focus:ring-secondary cursor-pointer">
                                <option value="latest" @selected(request('sort', 'latest' )==='latest' )>Mới đăng gần đây</option>
                                <option value="price_asc" @selected(request('sort')==='price_asc' )>Giá thuê: Thấp đến Cao</option>
                                <option value="price_desc" @selected(request('sort')==='price_desc' )>Giá thuê: Cao đến Thấp</option>
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
                            Tiền thuê và cọc được giữ an toàn tại ShareHub. Chủ đồ chỉ nhận thanh toán khi bạn đã kiểm tra tài sản nguyên vẹn.
                        </p>
                    </div>
                </aside>

                <!-- ================= BÊN PHẢI: KẾT QUẢ DANH SÁCH TÀI SẢN ================= -->
                <section class="flex-1 w-full flex flex-col gap-space-md">
                    <!-- Top Toolbar Summary -->
                    <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                        <div>
                            <h1 class="font-headline-md text-headline-md text-on-surface tracking-tight font-bold">
                                Tài sản đang sẵn sàng cho thuê
                            </h1>
                            <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                Tìm thấy <strong class="text-on-surface font-semibold">{{ $assets->total() }}</strong> món đồ phù hợp với tìm kiếm của bạn
                            </p>
                        </div>
                        <a href="{{ auth()->check() ? route('assets.create') : route('login') }}"
                            class="shrink-0 rounded-lg bg-secondary px-4 py-2 font-semibold text-on-secondary flex items-center gap-1 hover:opacity-90 transition-opacity">
                            <span class="material-symbols-outlined text-[18px]">add</span>
                            <span>Đăng tài sản</span>
                        </a>
                    </div>

                    <!-- Filter Tags (nếu có từ khóa đang lọc) -->
                    @php
                    $hasActiveFilters = request()->filled('q')
                    || request()->filled('category_id')
                    || request()->filled('city')
                    || request()->filled('condition')
                    || request()->filled('min_price')
                    || request()->filled('max_price')
                    || (request()->filled('sort') && request('sort') !== 'latest');
                    @endphp

                    @if($hasActiveFilters)
                    <div class="flex items-center gap-2 flex-wrap text-label-sm font-label-sm" id="active-filter-tags">
                        <span class="text-on-surface-variant">Đang lọc theo:</span>

                        <!-- 1. Tag Từ khóa -->
                        @if(request()->filled('q'))
                        <span class="inline-flex items-center gap-1.5 bg-blue-50 text-blue-700 dark:bg-blue-950/40 dark:text-blue-300 px-2.5 py-1 rounded-full border border-blue-200/50 ">
                            Từ khóa: "{{ request('q') }}"
                            <button type="button" onclick="removeFilter('q')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif

                        <!-- 2. Tag Danh mục -->
                        @if(request()->filled('category_id') && isset($categories))
                        @php
                        $selectedCategory = $categories->firstWhere('id', request('category_id'));
                        @endphp
                        @if($selectedCategory)
                        <span class="inline-flex items-center gap-1.5 bg-purple-50 text-purple-700 dark:bg-purple-950/40 dark:text-purple-300 px-2.5 py-1 rounded-full border border-purple-200/50 ">
                            Danh mục: {{ $selectedCategory->name }}
                            <button type="button" onclick="removeFilter('category_id')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif
                        @endif

                        <!-- 3. Tag Khu vực / Tỉnh thành -->
                        @if(request()->filled('city'))
                        <span class="inline-flex items-center gap-1.5 bg-teal-50 text-teal-700 dark:bg-teal-950/40 dark:text-teal-300 px-2.5 py-1 rounded-full border border-teal-200/50 ">
                            Khu vực: {{ request('city') }}
                            <button type="button" onclick="removeFilter('city')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif

                        <!-- 4. Tag Tình trạng máy -->
                        @if(request()->filled('condition'))
                        @php
                        $conditionLabels = [
                        'new' => 'Mới (100%)',
                        'like_new' => 'Như mới (99%)',
                        'good' => 'Tốt (Hoạt động ổn định)',
                        'fair' => 'Đã qua sử dụng'
                        ];
                        $conditionText = $conditionLabels[request('condition')] ?? request('condition');
                        @endphp
                        <span class="inline-flex items-center gap-1.5 bg-indigo-50 text-indigo-700 dark:bg-indigo-950/40 dark:text-indigo-300 px-2.5 py-1 rounded-full border border-indigo-200/50 ">
                            Tình trạng: {{ $conditionText }}
                            <button type="button" onclick="removeFilter('condition')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif

                        <!-- 5. Tag Giá thuê -->
                        @if(request()->filled('min_price') || request()->filled('max_price'))
                        <span class="inline-flex items-center gap-1.5 bg-amber-50 text-amber-700 dark:bg-amber-950/40 dark:text-amber-300 px-2.5 py-1 rounded-full border border-amber-200/50 ">
                            Giá thuê:
                            @if(request()->filled('min_price') && request()->filled('max_price'))
                            {{ number_format((float)request('min_price'), 0, ',', '.') }}đ - {{ number_format((float)request('max_price'), 0, ',', '.') }}đ
                            @elseif(request()->filled('min_price'))
                            Trên {{ number_format((float)request('min_price'), 0, ',', '.') }}đ
                            @else
                            Dưới {{ number_format((float)request('max_price'), 0, ',', '.') }}đ
                            @endif
                            <button type="button" onclick="removeBudgetFilters()" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif

                        <!-- 6. Tag Sắp xếp (Đã sửa lại đúng key khớp với select & bỏ chữ Sắp xếp) -->
                        @if(request()->filled('sort') && request('sort') !== 'latest')
                        @php
                        $sortLabels = [
                        'price_asc' => 'Giá thuê: Thấp đến Cao',
                        'price_desc' => 'Giá thuê: Cao đến Thấp'
                        ];
                        @endphp
                        @if(isset($sortLabels[request('sort')]))
                        <span class="inline-flex items-center gap-1.5 bg-rose-50 text-rose-700 dark:bg-rose-950/40 dark:text-rose-300 px-2.5 py-1 rounded-full border border-rose-200/50 ">
                            {{ $sortLabels[request('sort')] }}
                            <button type="button" onclick="removeFilter('sort')" class="hover:opacity-75 transition-opacity font-bold text-xs cursor-pointer">✕</button>
                        </span>
                        @endif
                        @endif

                        <a href="{{ route('assets.index') }}" class="text-secondary hover:underline font-semibold ml-1">Xóa tất cả bộ lọc</a>
                    </div>
                    @endif

                    <!-- Asset Cards Grid (3 cột ở màn hình lớn) -->
                    @if ($assets->isEmpty())
                    <div class="rounded-2xl bg-surface-container-lowest p-12 text-center shadow-sm">
                        <span class="material-symbols-outlined text-4xl text-on-surface-variant mb-2">search_off</span>
                        <h2 class="text-xl font-bold text-on-surface">Chưa tìm thấy tài sản phù hợp</h2>
                        <p class="mt-1 text-on-surface-variant">Thử thay đổi từ khóa hoặc đặt lại bộ lọc tìm kiếm.</p>
                        <a href="{{ route('assets.index') }}" class="mt-4 inline-block text-sm font-semibold text-secondary hover:underline">Xóa các điều kiện lọc</a>
                    </div>
                    @else
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-space-md">
                        @foreach ($assets as $asset)
                        <!-- Thêm class h-full và flex flex-col để thẻ card luôn giãn đều chiều cao -->
                        <article class="bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-200 flex flex-col h-full group">

                            <!-- Image Media -->
                            <a href="{{ route('assets.show', $asset) }}" class="relative w-full aspect-[4/3] bg-surface-container-high overflow-hidden shrink-0">
                                @if ($asset->primaryImage)
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                                    src="{{ Storage::disk('public')->url($asset->primaryImage->image_path) }}"
                                    alt="{{ $asset->title }}" />
                                @else
                                <div class="flex w-full h-full items-center justify-center bg-surface-container text-on-surface-variant font-body-sm">
                                    Chưa có ảnh
                                </div>
                                @endif

                                <!-- Category Badge -->
                                <div class="absolute top-2.5 left-2.5 flex flex-col gap-1 items-start">
                                    <span class="bg-surface-container-lowest/90 backdrop-blur-md text-secondary font-label-sm text-label-sm px-2 py-0.5 rounded-full flex items-center gap-1 shadow-xs font-semibold">
                                        Danh mục: {{ $asset->category->name }}
                                    </span>
                                </div>

                                <!-- Condition Tag -->
                                @if($asset->condition)
                                <div class="absolute bottom-2 left-2.5">
                                    <span class="bg-primary/80 backdrop-blur-md text-on-primary font-label-sm text-label-sm px-2 py-0.5 rounded">
                                        Tình trạng: {{ ['new' => 'Mới 100%', 'like_new' => 'Như mới 99%', 'good' => 'Tốt', 'fair' => 'Đã qua sử dụng'][$asset->condition] ?? $asset->condition }}
                                    </span>
                                </div>
                                @endif
                            </a>

                            <!-- Content Area: Sử dụng flex-1 để tự giãn và justify-between để đẩy giá xuống đáy -->
                            <div class="p-space-md flex-1 flex flex-col justify-between gap-space-sm">

                                <div class="flex flex-col gap-1">
                                    <!-- Location -->
                                    <div class="flex items-center justify-between text-on-surface-variant font-label-md text-label-lg">
                                        <span class="flex items-center gap-1 truncate">
                                            <span class="material-symbols-outlined text-[15px] text-secondary">location_on</span>
                                            {{ $asset->city ?: $asset->pickup_address }}
                                        </span>
                                    </div>

                                    <!-- Title: Cố định min-height (đủ chứa 2 dòng) và dùng line-clamp-2 để giới hạn độ dài -->
                                    <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-2 min-h-[3rem] font-bold">
                                        <a href="{{ route('assets.show', $asset) }}">{{ $asset->title }}</a>
                                    </h3>
                                </div>

                                <!-- Khối thông tin Giá thuê & Tiền cọc được neo cố định ở phía dưới -->
                                <div class="mt-auto">
                                    <!-- Pricing & Deposit -->
                                    <div class="pt-2 bg-surface-container-low p-2.5 rounded-lg flex flex-col gap-1 mb-2">
                                        <div class="flex items-baseline justify-between">
                                            <span class="font-label-sm text-label-sm text-on-surface-variant">Giá thuê:</span>
                                            <div class="text-right">
                                                <span class="font-headline-sm text-headline-sm text-on-surface font-bold text-primary">
                                                    {{ number_format((float) $asset->price_per_day, 0, ',', '.') }}đ
                                                </span>
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">/ ngày</span>
                                            </div>
                                        </div>
                                        @if($asset->deposit)
                                        <div class="flex items-center justify-between text-label-sm font-label-sm pt-1 border-t border-outline/10">
                                            <span class="text-on-surface-variant">Tiền cọc:</span>
                                            <span class="text-secondary font-semibold">
                                                {{ number_format((float) $asset->deposit, 0, ',', '.') }}đ
                                            </span>
                                        </div>
                                        @endif
                                    </div>

                                    <!-- Owner Info Footer & Action -->
                                    <div class="pt-1 flex items-center justify-between gap-2">
                                        <div class="flex items-center gap-2 min-w-0">
                                            <div class="flex flex-col truncate">
                                                <span class="font-label-md text-label-lg text-on-surface truncate font-semibold">
                                                    Chủ máy: {{ $asset->user->name }}
                                                </span>
                                            </div>
                                        </div>
                                        <a class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-lg px-3 py-1.5 rounded-lg transition-all shadow-xs"
                                            href="{{ route('assets.show', $asset) }}">
                                            Thuê ngay
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </article>
                        @endforeach
                    </div>

                    <!-- Pagination Links -->
                    <div class="mt-6">
                        {{ $assets->links() }}
                    </div>
                    @endif

                    <!-- Banner Đăng Tin Kiếm Thêm Thu Nhập -->
                    <div class="bg-surface-container-low p-space-lg rounded-xl flex flex-col md:flex-row items-center justify-between gap-space-lg mt-4">
                        <div class="flex items-start gap-space-md">
                            <div class="w-12 h-12 rounded-xl bg-secondary-container text-on-secondary-container flex items-center justify-center shrink-0">
                                <span class="material-symbols-outlined text-2xl">handshake</span>
                            </div>
                            <div class="flex flex-col">
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Bạn có đồ dùng ít xài muốn kiếm thêm thu nhập?</h2>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1 max-w-xl">
                                    Đăng tài sản lên ShareHub chỉ mất 3 phút. Ký quỹ an toàn, bảo vệ thiết bị và kết nối trực tiếp với người thuê xung quanh.
                                </p>
                            </div>
                        </div>
                        <a href="{{ auth()->check() ? route('assets.create') : route('login') }}"
                            class="shrink-0 bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg px-space-lg py-2.5 rounded-lg shadow-sm transition-all text-center font-semibold">
                            Đăng cho thuê ngay
                        </a>
                    </div>
                </section>

            </div>
        </div>
    </div>
</main>

<script>
    // Hàm xóa từng tiêu chí độc lập khi bấm vào nút '✕' trên mỗi tag
    function removeFilter(filterName) {
        const urlParams = new URLSearchParams(window.location.search);
        urlParams.delete(filterName);
        window.location.search = urlParams.toString();
    }

    // Hàm riêng để xử lý xóa đồng thời cả 2 input giá (min_price và max_price)
    function removeBudgetFilters() {
        const urlParams = new URLSearchParams(window.location.search);
        urlParams.delete('min_price');
        urlParams.delete('max_price');
        window.location.search = urlParams.toString();
    }

    document.addEventListener('DOMContentLoaded', function() {
        const cityInput = document.getElementById('city');
        const suggestionBox = document.getElementById('city-suggestions');
        const wrapper = document.getElementById('city-autocomplete-wrapper');

        let provinces = [];

        // 1. Tự động gọi API lấy đủ 63 Tỉnh/Thành phố giống trang create
        fetch('https://provinces.open-api.vn/api/?depth=1')
            .then(response => response.json())
            .then(data => {
                provinces = data.map(province => province.name);
            })
            .catch(error => console.error('Lỗi tải danh sách tỉnh thành:', error));

        // 2. Hàm loại bỏ dấu tiếng Việt để tìm kiếm thông minh không cần gõ chuẩn dấu
        function removeVietnameseTones(str) {
            return str.normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .replace(/đ/g, 'd').replace(/Đ/g, 'D')
                .toLowerCase().trim();
        }

        // 3. Hiển thị bảng danh sách gợi ý
        function renderSuggestions(filteredList) {
            suggestionBox.innerHTML = '';

            if (filteredList.length === 0) {
                suggestionBox.innerHTML = '<div class="px-3 py-2 text-sm text-on-surface-variant italic">Không tìm thấy địa điểm phù hợp</div>';
            } else {
                filteredList.forEach(item => {
                    const div = document.createElement('div');
                    div.className = 'px-3 py-2 hover:bg-surface-container-low text-body-lg text-on-surface cursor-pointer transition-colors';
                    div.textContent = item;

                    // Khi click chọn một tỉnh trong danh sách
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

        // 4. Khi click vào ô input -> Hiển thị danh sách gợi ý
        cityInput.addEventListener('focus', function() {
            filterAndShow();
        });

        // 5. Khi người dùng gõ từng ký tự -> Lọc danh sách theo thời gian thực
        cityInput.addEventListener('input', function() {
            filterAndShow();
        });

        function filterAndShow() {
            const query = removeVietnameseTones(cityInput.value);

            // Lọc các tỉnh thành khớp với từ khóa (hỗ trợ cả có dấu và không dấu)
            const filtered = provinces.filter(province =>
                removeVietnameseTones(province).includes(query)
            );

            renderSuggestions(filtered);
        }

        // 6. Tự động đóng bảng gợi ý khi click ra ngoài ô input
        document.addEventListener('click', function(e) {
            if (!wrapper.contains(e.target)) {
                hideSuggestions();
            }
        });

        // Hỗ trợ phím Escape trên bàn phím để đóng nhanh
        cityInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                hideSuggestions();
            }
        });
    });
</script>
@endsection