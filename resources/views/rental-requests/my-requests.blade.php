@extends('layouts.app')

@section('content')
<main class="w-full pt-20 bg-background min-h-screen">
    <div class="flex flex-col w-full">
        <div class="relative w-full max-w-[1280px] mx-auto px-margin-mobile lg:px-margin pb-space-xl">

            <!-- Decorative Background -->
            <div class="absolute top-10 right-20 w-72 h-72 bg-secondary/5 rounded-full blur-3xl pointer-events-none -z-10"></div>
            <div class="absolute top-64 left-10 w-96 h-96 bg-secondary-container/10 rounded-full blur-3xl pointer-events-none -z-10"></div>

            <!-- Breadcrumb -->
            <nav class="flex items-center gap-space-xs py-space-md text-on-surface-variant font-label-md text-label-md">
                <a class="hover:text-secondary transition-colors flex items-center gap-1" href="{{ route('home') }}">
                    <span class="material-symbols-outlined text-[16px]">home</span>
                    Trang chủ
                </a>

                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="text-on-surface-variant">Hoạt động cá nhân</span>

                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="text-on-surface font-semibold">Yêu cầu thuê của tôi</span>
            </nav>

            <!-- Header Section -->
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-gutter pb-space-lg">
                <div class="flex flex-col max-w-2xl">
                    <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
                        Yêu cầu thuê của tôi
                    </h1>

                    <p class="font-body-lg text-body-lg text-on-surface-variant mt-space-xs">
                        Theo dõi các tin tìm thuê đồ đã đăng, quản lý trạng thái và các đề xuất chào giá trực tiếp từ chủ tài sản uy tín trong cộng đồng RentShare.
                    </p>
                </div>

                <div class="flex items-center gap-space-sm self-start lg:self-auto">
                    <a href="{{ route('rental-requests.create') }}"
                        class="inline-flex h-11 items-center justify-center gap-space-xs px-space-lg rounded-lg bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-primary-container hover:text-on-primary-container transition-all whitespace-nowrap">
                        <span class="material-symbols-outlined text-[20px]">add_circle</span>
                        <span>Tạo yêu cầu thuê mới</span>
                    </a>
                </div>
            </div>

            <!-- Summary Metric Cards -->
            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-gutter mb-space-xl">

                <!-- Total -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface-variant font-medium">Tổng số yêu cầu</span>
                            <span class="font-headline-xl text-headline-xl text-on-surface font-bold mt-1 tracking-tight">
                                {{ $counts['all'] ?? 0 }}
                            </span>
                        </div>

                        <div class="w-10 h-10 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
                            <span class="material-symbols-outlined text-[22px]">radar</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-1.5 mt-space-md pt-space-xs text-secondary font-label-sm text-label-md">
                        <span>Tổng hợp toàn bộ tin đã đăng</span>
                    </div>
                </div>

                <!-- Open -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface-variant font-medium">Tin đang mở</span>
                            <span class="font-headline-xl text-headline-xl text-on-surface font-bold mt-1 tracking-tight">
                                {{ $counts['open'] ?? 0 }}
                            </span>
                        </div>

                        <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface">
                            <span class="material-symbols-outlined text-[22px]">price_change</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-1.5 mt-space-md pt-space-xs text-secondary font-label-sm text-label-md font-semibold">
                        <span class="material-symbols-outlined text-[16px]">trending_down</span>
                        <span>Đang hiển thị nhận báo giá</span>
                    </div>
                </div>

                <!-- Closed -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface-variant font-medium">Đã đóng / Kết thúc</span>
                            <span class="font-headline-xl text-headline-xl text-on-surface font-bold mt-1 tracking-tight">
                                {{ $counts['closed'] ?? 0 }}
                            </span>
                        </div>

                        <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-primary-fixed">
                            <span class="material-symbols-outlined text-[22px]">handshake</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-1.5 mt-space-md pt-space-xs text-on-surface-variant font-label-sm text-label-md">
                        <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                        <span>Lưu trữ lịch sử giao dịch</span>
                    </div>
                </div>

                <!-- Draft -->
                <div class="bg-surface-container-lowest p-space-md rounded-xl shadow-sm flex flex-col justify-between relative overflow-hidden group hover:shadow-md transition-shadow">
                    <div class="flex items-start justify-between">
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface-variant font-medium">Bản nháp</span>
                            <span class="font-headline-xl text-headline-xl text-on-surface font-bold mt-1 tracking-tight">
                                {{ $counts['draft'] ?? 0 }}
                            </span>
                        </div>

                        <div class="w-10 h-10 rounded-lg bg-surface-container-low flex items-center justify-center text-on-surface-variant">
                            <span class="material-symbols-outlined text-[22px]">archive</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-1.5 mt-space-md pt-space-xs text-on-surface-variant font-label-sm text-label-md">
                        <span class="material-symbols-outlined text-[16px]">history</span>
                        <span>Chưa công khai</span>
                    </div>
                </div>
            </div>

            <!-- Success Alert -->
            @if (session('success'))
            <div id="success-alert"
                class="mb-5 rounded-xl bg-secondary/10 p-4 text-secondary font-semibold shadow-sm transition-all duration-500 opacity-100">
                {{ session('success') }}
            </div>
            @endif

            <!-- Filter Bar -->
            <form method="GET"
                action="{{ route('rental-requests.my-requests') }}"
                class="mb-space-lg p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">

                <div class="flex flex-col lg:flex-row gap-space-md items-stretch lg:items-center justify-between">

                    <div class="relative flex-1 min-w-[280px]">
                        <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">
                            search
                        </span>

                        <input name="q"
                            value="{{ request('q') }}"
                            class="w-full pl-10 pr-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-lg placeholder:text-on-surface-variant focus:bg-surface-container-lowest focus:outline-none transition-all"
                            placeholder="Tìm theo tiêu đề yêu cầu..."
                            type="text" />
                    </div>

                    <div class="flex flex-wrap sm:flex-nowrap items-center gap-space-sm">

                        <!-- Category -->
                        <div class="relative min-w-[170px] w-full sm:w-auto">
                            <select name="category_id"
                                class="w-full px-3 py-2.5 rounded-lg bg-surface-container-low font-label-md text-label-lg text-on-surface appearance-none focus:outline-none cursor-pointer pr-8">

                                <option value="">Tất cả danh mục</option>

                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @selected(request('category_id')==$category->id)>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>

                            <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-[18px]">
                                expand_more
                            </span>
                        </div>

                        <!-- Status -->
                        <div class="relative min-w-[190px] w-full sm:w-auto">
                            <select name="status"
                                class="w-full px-3 py-2.5 rounded-lg bg-surface-container-low font-label-md text-label-lg text-on-surface appearance-none focus:outline-none cursor-pointer pr-8">

                                <option value="">Tất cả trạng thái</option>

                                <option value="open" @selected(request('status')==='open' )>
                                    Đang mở
                                </option>

                                <option value="closed" @selected(request('status')==='closed' )>
                                    Đã đóng
                                </option>

                                <option value="draft" @selected(request('status')==='draft' )>
                                    Bản nháp
                                </option>
                            </select>

                            <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-[18px]">
                                sort
                            </span>
                        </div>

                        <button type="submit"
                            class="h-10 px-4 rounded-lg bg-primary text-on-primary font-label-md text-label-lg font-semibold hover:bg-primary-container transition-all cursor-pointer whitespace-nowrap">
                            Lọc
                        </button>

                        <a href="{{ route('rental-requests.my-requests') }}"
                            class="h-10 px-4 rounded-lg bg-surface-container text-on-surface font-label-md text-label-lg font-semibold hover:bg-surface-container-high transition-all flex items-center justify-center whitespace-nowrap">
                            Xóa lọc
                        </a>
                    </div>
                </div>
            </form>

            <!-- Main Content: Đồng bộ chiều rộng với index -->
            <div class="flex flex-col lg:flex-row items-start justify-between gap-gutter">

                <!-- ========================================== -->
                <!-- LEFT: REQUEST POSTS -->
                <!-- ========================================== -->

                <section class="w-full lg:w-[calc(100%-320px)] min-w-0 flex flex-col gap-space-lg">

                    @forelse ($rentalRequests as $item)

                    <article class="bg-surface-container-lowest rounded-xl p-space-md md:p-space-lg shadow-sm hover:shadow-md transition-all flex flex-col gap-space-md">

                        <!-- Post Header -->
                        <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-space-sm">

                            <div class="flex flex-col min-w-0">

                                <!-- ID + Category -->
                                <div class="flex flex-wrap items-center gap-space-sm mb-1.5">

                                    <span class="font-label-sm text-label-md font-semibold tracking-wide text-on-surface-variant bg-surface-container px-2 py-0.5 rounded">
                                        #REQ-{{ $item->id }}
                                    </span>

                                    <span class="px-2.5 py-0.5 rounded-full bg-surface-container font-label-sm text-label-md text-on-surface-variant uppercase tracking-wider font-semibold">
                                        Danh mục: {{ $item->category->name ?? 'Chung' }}
                                    </span>

                                </div>

                                <!-- Schedule + Location: Ngay dưới ID và danh mục -->
                                <div class="flex flex-wrap items-center gap-x-2 gap-y-1 text-on-surface-variant font-label-md text-label-md mb-1.5">

                                    <!-- Thời gian gần đây -->
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-[14px]">
                                            schedule
                                        </span>

                                        <span>
                                            {{ $item->created_at?->diffForHumans() ?? 'Chưa xác định thời gian' }}
                                        </span>
                                    </div>

                                    <!-- Dấu phân cách -->
                                    <span class="text-outline-variant">•</span>

                                    <!-- Địa điểm -->
                                    <div class="flex items-center gap-1.5 min-w-0">
                                        <span class="material-symbols-outlined text-[14px]">
                                            near_me
                                        </span>

                                        <span class="break-words">
                                            {{ $item->city }}{{ $item->district ? ', '.$item->district : '' }}
                                        </span>
                                    </div>

                                </div>

                                <!-- Title -->
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold leading-snug break-words">
                                    <a href="{{ route('rental-requests.show', $item) }}"
                                        class="hover:text-secondary transition-colors">
                                        {{ $item->title }}
                                    </a>
                                </h2>

                            </div>

                            <!-- Status Badge -->
                            <div class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full font-label-sm text-label-md font-bold whitespace-nowrap self-start shrink-0
                                {{ $item->status === 'open'
                                    ? 'bg-secondary-fixed text-on-secondary-fixed-variant'
                                    : ($item->status === 'closed'
                                        ? 'bg-red-100 text-red-800'
                                        : 'bg-amber-100 text-amber-800') }}">

                                <span class="material-symbols-outlined text-[16px]">
                                    {{ $item->status === 'open'
                                        ? 'campaign'
                                        : ($item->status === 'closed'
                                            ? 'check_circle'
                                            : 'edit_note') }}
                                </span>

                                {{ [
                                    'open' => 'Đang mở',
                                    'closed' => 'Đã đóng',
                                    'draft' => 'Bản nháp'
                                ][$item->status] ?? $item->status }}

                            </div>
                        </div>

                        <!-- Description -->
                        <div class="js-truncable-desc text-body-md text-on-surface-variant leading-relaxed"
                            data-fulltext="{{ json_encode($item->description ?: 'Chưa có mô tả chi tiết cho yêu cầu này.') }}">

                            <span class="desc-text whitespace-pre-line break-words"></span>

                            <span class="desc-dots" style="display: none;">... </span>

                            <button type="button"
                                onclick="toggleDesc(this)"
                                class="hover:underline desc-toggle inline-block text-secondary font-semibold cursor-pointer bg-transparent border-none p-0 ml-1"
                                style="display: none;">
                                Xem thêm
                            </button>
                        </div>

                        <!-- Schedule & Budget Information: Đồng bộ với index -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-xs p-space-sm rounded-xl bg-surface-container-low">

                            <!-- Rental Period -->
                            <div class="flex items-center gap-2.5 px-space-xs py-1 min-w-0">
                                <div class="w-8 h-8 shrink-0 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">calendar_today</span>
                                </div>

                                <div class="min-w-0">
                                    <div class="font-label-sm text-label-sm text-on-surface-variant">
                                        Thời gian thuê
                                    </div>

                                    <div class="font-label-lg text-label-lg text-on-surface font-semibold break-words">
                                        @if ($item->start_date && $item->end_date)
                                        {{ $item->start_date->format('d/m/Y') }} – {{ $item->end_date->format('d/m/Y') }}
                                        @else
                                        Chưa chọn lịch
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Budget -->
                            <div class="flex items-center gap-2.5 px-space-xs py-1 min-w-0">
                                <div class="w-8 h-8 shrink-0 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">payments</span>
                                </div>

                                <div class="min-w-0">
                                    <div class="font-label-sm text-label-sm text-on-surface-variant">
                                        Ngân sách dự kiến
                                    </div>

                                    <div class="font-label-lg text-label-lg text-secondary font-bold break-words">
                                        @if ($item->min_daily_budget || $item->max_daily_budget)
                                        {{ number_format((float) ($item->min_daily_budget ?? 0), 0, ',', '.') }}
                                        –
                                        {{ number_format((float) ($item->max_daily_budget ?? $item->min_daily_budget), 0, ',', '.') }}
                                        đ/ngày
                                        @else
                                        Thoả thuận
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="flex items-center gap-2.5 px-space-xs py-1 min-w-0">
                                <div class="w-8 h-8 shrink-0 rounded-lg bg-surface-container flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined text-[18px]">pin_drop</span>
                                </div>

                                <div class="min-w-0">
                                    <div class="font-label-sm text-label-sm text-on-surface-variant">
                                        Địa điểm nhận
                                    </div>

                                    <div class="font-label-lg text-label-lg text-on-surface font-semibold break-words">
                                        {{ $item->city ?: 'Chưa xác định' }}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Attached Image -->
                        @if ($item->images && $item->images->isNotEmpty())

                        <div class="mt-2 overflow-hidden rounded-xl bg-surface-container relative group">
                            <a href="{{ route('rental-requests.show', $item) }}" class="block">

                                <div class="relative w-full h-56 md:h-64 bg-cover bg-center rounded-xl transition-transform duration-300 group-hover:scale-[1.01]"
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

                        <!-- ========================================== -->
                        <!-- ACTION BUTTONS -->
                        <!-- ========================================== -->

                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm pt-space-sm mt-space-xs border-t border-outline-variant/20">

                            <!-- LEFT ACTIONS -->
                            <div class="flex flex-wrap items-center gap-space-sm">

                                <!-- DETAIL: All statuses -->
                                <a href="{{ route('rental-requests.show', $item) }}"
                                    class="inline-flex h-10 items-center justify-center gap-1.5 px-3 rounded-lg bg-surface-container text-on-surface font-label-md text-label-lg font-semibold hover:bg-surface-container-high transition-colors whitespace-nowrap">

                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    <span>Chi tiết</span>
                                </a>

                                @if ($item->status === 'open' || $item->status === 'closed')

                                <!-- Open / Closed: Move to Draft -->
                                <form method="POST"
                                    action="{{ route('rental-requests.update-status', $item) }}"
                                    class="inline-flex">

                                    @csrf
                                    @method('PATCH')

                                    <input type="hidden" name="status" value="draft">

                                    <button type="submit"
                                        class="inline-flex h-10 items-center justify-center px-3 rounded-lg bg-amber-100 text-amber-800 font-label-md text-label-lg font-semibold hover:bg-amber-200 transition-colors cursor-pointer whitespace-nowrap">
                                        Chuyển thành bản nháp
                                    </button>
                                </form>

                                @elseif ($item->status === 'draft')

                                <!-- Draft: Edit instead of Move to Draft -->
                                <a href="{{ route('rental-requests.edit', $item) }}"
                                    class="inline-flex h-10 items-center justify-center gap-1.5 px-3 rounded-lg bg-surface-container text-on-surface font-label-md text-label-lg font-semibold hover:bg-surface-container-high transition-colors whitespace-nowrap">

                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                    <span>Chỉnh sửa</span>
                                </a>

                                @endif

                            </div>

                            <!-- RIGHT ACTIONS -->
                            <div class="flex flex-wrap items-center gap-space-sm">

                                @if ($item->status === 'open')

                                <!-- OPEN: Edit -->
                                <a href="{{ route('rental-requests.edit', $item) }}"
                                    class="inline-flex h-10 items-center justify-center gap-1.5 px-3 rounded-lg bg-surface-container text-on-surface font-label-md text-label-lg font-semibold hover:bg-surface-container-high transition-colors whitespace-nowrap">

                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                    <span>Chỉnh sửa</span>
                                </a>

                                <!-- OPEN: Close -->
                                <form method="POST"
                                    action="{{ route('rental-requests.update-status', $item) }}"
                                    class="inline-flex">

                                    @csrf
                                    @method('PATCH')

                                    <input type="hidden" name="status" value="closed">

                                    <button type="submit"
                                        class="inline-flex h-10 items-center justify-center gap-1.5 px-3 rounded-lg bg-red-100 text-red-800 font-label-md text-label-lg font-semibold hover:bg-red-200 transition-colors cursor-pointer whitespace-nowrap">

                                        <span class="material-symbols-outlined text-[18px]">lock_person</span>
                                        <span>Đóng yêu cầu</span>
                                    </button>
                                </form>

                                @elseif ($item->status === 'closed')

                                <!-- CLOSED: Reopen -->
                                <form method="POST"
                                    action="{{ route('rental-requests.update-status', $item) }}"
                                    class="inline-flex">

                                    @csrf
                                    @method('PATCH')

                                    <input type="hidden" name="status" value="open">

                                    <button type="submit"
                                        class="inline-flex h-10 items-center justify-center px-3 rounded-lg bg-secondary text-on-secondary font-label-md text-label-lg font-semibold hover:opacity-90 transition-opacity cursor-pointer whitespace-nowrap">

                                        Mở lại yêu cầu
                                    </button>
                                </form>

                                <!-- CLOSED: Edit -->
                                <a href="{{ route('rental-requests.edit', $item) }}"
                                    class="inline-flex h-10 items-center justify-center gap-1.5 px-3 rounded-lg bg-surface-container text-on-surface font-label-md text-label-lg font-semibold hover:bg-surface-container-high transition-colors whitespace-nowrap">

                                    <span class="material-symbols-outlined text-[18px]">edit</span>
                                    <span>Chỉnh sửa</span>
                                </a>

                                @elseif ($item->status === 'draft')

                                <!-- DRAFT: Reopen -->
                                <form method="POST"
                                    action="{{ route('rental-requests.update-status', $item) }}"
                                    class="inline-flex">

                                    @csrf
                                    @method('PATCH')

                                    <input type="hidden" name="status" value="open">

                                    <button type="submit"
                                        class="inline-flex h-10 items-center justify-center px-3 rounded-lg bg-secondary text-on-secondary font-label-md text-label-lg font-semibold hover:opacity-90 transition-opacity cursor-pointer whitespace-nowrap">

                                        Mở lại yêu cầu
                                    </button>
                                </form>

                                <!-- DRAFT: Close -->
                                <form method="POST"
                                    action="{{ route('rental-requests.update-status', $item) }}"
                                    class="inline-flex">

                                    @csrf
                                    @method('PATCH')

                                    <input type="hidden" name="status" value="closed">

                                    <button type="submit"
                                        class="inline-flex h-10 items-center justify-center gap-1.5 px-3 rounded-lg bg-red-100 text-red-800 font-label-md text-label-lg font-semibold hover:bg-red-200 transition-colors cursor-pointer whitespace-nowrap">

                                        <span class="material-symbols-outlined text-[18px]">lock_person</span>
                                        <span>Đóng yêu cầu</span>
                                    </button>
                                </form>

                                @endif

                            </div>
                        </div>

                    </article>

                    @empty

                    <!-- Empty State -->
                    <div class="rounded-xl bg-surface-container-lowest p-12 text-center shadow-sm">

                        <span class="material-symbols-outlined text-5xl text-on-surface-variant mb-2">
                            search_off
                        </span>

                        <h3 class="text-lg font-semibold text-on-surface">

                            @if(request('status') === 'draft')
                            Không có yêu cầu nào ở trạng thái Bản nháp

                            @elseif(request('status') === 'closed')
                            Không có yêu cầu nào đã đóng

                            @elseif(request('status') === 'open')
                            Không có yêu cầu nào đang mở

                            @else
                            Bạn chưa có yêu cầu thuê nào
                            @endif

                        </h3>

                        <p class="mt-2 text-on-surface-variant text-sm">
                            Bạn có thể thay đổi bộ lọc hoặc tạo yêu cầu mới để bắt đầu.
                        </p>

                        @if(!request('status') && !request('q') && !request('category_id'))

                        <a href="{{ route('rental-requests.create') }}"
                            class="mt-4 inline-flex items-center justify-center h-11 px-5 rounded-lg bg-primary font-semibold text-on-primary shadow-sm hover:opacity-90 transition-opacity">

                            Đăng yêu cầu đầu tiên
                        </a>

                        @endif

                    </div>

                    @endforelse

                    <!-- Pagination -->
                    <div class="mt-6">
                        {{ $rentalRequests->links() }}
                    </div>

                </section>

                <!-- ========================================== -->
                <!-- RIGHT: TIPS SIDEBAR -->
                <!-- ========================================== -->

                <aside class="w-full lg:w-[290px] shrink-0 flex flex-col gap-space-lg lg:sticky lg:top-20 self-start">

                    <!-- Tips Card -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">

                        <div class="flex items-center gap-space-sm pb-space-xs border-b border-surface-container">

                            <div class="w-9 h-9 shrink-0 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
                                <span class="material-symbols-outlined text-[20px]">lightbulb</span>
                            </div>

                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">
                                Hướng dẫn chọn đề xuất tốt nhất
                            </h3>

                        </div>

                        <div class="flex flex-col gap-space-md">

                            <!-- Step 1 -->
                            <div class="flex items-start gap-space-sm">

                                <div class="w-6 h-6 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-label-sm text-label-md font-bold shrink-0 mt-0.5">
                                    1
                                </div>

                                <div class="flex flex-col">

                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">
                                        Ưu tiên chủ tài sản xác minh
                                    </span>

                                    <p class="font-body-sm text-body-md text-on-surface-variant mt-0.5">
                                        Luôn chọn chủ tài sản có huy hiệu eKYC CCCD gắn chip sinh trắc và điểm uy tín RentShare trên 90 điểm.
                                    </p>

                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="flex items-start gap-space-sm">

                                <div class="w-6 h-6 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-label-sm text-label-md font-bold shrink-0 mt-0.5">
                                    2
                                </div>

                                <div class="flex flex-col">

                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">
                                        Biên bản chụp ảnh hiện trạng
                                    </span>

                                    <p class="font-body-sm text-body-md text-on-surface-variant mt-0.5">
                                        Kiểm tra kỹ bộ ảnh 360° và video kiểm thử tình trạng thiết bị trước khi xác nhận mở cọc Escrow.
                                    </p>

                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="flex items-start gap-space-sm">

                                <div class="w-6 h-6 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-label-sm text-label-md font-bold shrink-0 mt-0.5">
                                    3
                                </div>

                                <div class="flex flex-col">

                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">
                                        Thương lượng qua hộp chat bảo mật
                                    </span>

                                    <p class="font-body-sm text-body-md text-on-surface-variant mt-0.5">
                                        Sử dụng công cụ chat nội bộ RentShare để thống nhất địa điểm bàn giao, phụ kiện kèm theo nhằm lưu lại chứng cứ hợp đồng.
                                    </p>

                                </div>
                            </div>

                        </div>

                        <!-- Escrow Information -->
                        <div class="p-space-sm rounded-lg bg-surface-container-low flex items-center gap-space-sm mt-space-xs">

                            <span class="material-symbols-outlined text-secondary text-[20px] shrink-0">
                                shield_lock
                            </span>

                            <span class="font-label-sm text-label-md text-on-surface-variant">
                                Tiền đặt cọc được giữ an toàn tại tài khoản Escrow ngân hàng liên kết, chỉ giải tỏa khi 2 bên hoàn thành việc thuê.
                            </span>

                        </div>

                    </div>

                </aside>

            </div>
        </div>
    </div>
</main>

<script>
    // ==========================================
    // 1. DROPDOWN MENU 3 CHẤM
    // ==========================================

    function toggleDropdown(event, button) {
        event.stopPropagation();

        const container = button.closest('.dropdown-container');
        const menu = container.querySelector('.dropdown-menu');

        // Đóng các menu khác
        document.querySelectorAll('.dropdown-menu').forEach(m => {
            if (m !== menu) {
                m.classList.add('hidden');

                const otherButton = m.closest('.dropdown-container')
                    ?.querySelector('button');

                otherButton?.setAttribute('aria-expanded', 'false');
            }
        });

        // Đóng / mở menu hiện tại
        const isHidden = menu.classList.toggle('hidden');

        button.setAttribute('aria-expanded', String(!isHidden));
    }

    // Click bên ngoài dropdown để đóng menu
    document.addEventListener('click', function() {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.classList.add('hidden');

            const button = menu.closest('.dropdown-container')
                ?.querySelector('button');

            button?.setAttribute('aria-expanded', 'false');
        });
    });


    // ==========================================
    // 2. TỰ ĐỘNG ẨN THÔNG BÁO SAU 5 GIÂY
    // ==========================================

    document.addEventListener('DOMContentLoaded', function() {

        const successAlert = document.getElementById('success-alert');

        if (successAlert) {

            setTimeout(() => {

                successAlert.classList.add('opacity-0');

                successAlert.style.transform = 'translateY(-5px)';

                setTimeout(() => {
                    successAlert.remove();
                }, 500);

            }, 5000);
        }

    });


    // ==========================================
    // 3. XỬ LÝ CẮT NGẮN MÔ TẢ
    // ==========================================

    document.addEventListener('DOMContentLoaded', function() {

        document.querySelectorAll('.js-truncable-desc').forEach(container => {

            try {

                const fullTextAttr = container.getAttribute('data-fulltext');

                if (!fullTextAttr) return;

                const fullText = JSON.parse(fullTextAttr);

                const textSpan = container.querySelector('.desc-text');
                const dotsSpan = container.querySelector('.desc-dots');
                const toggleBtn = container.querySelector('.desc-toggle');

                if (!fullText || !textSpan) return;

                textSpan.innerText = fullText;

                if (dotsSpan) {
                    dotsSpan.style.display = 'none';
                }

                if (toggleBtn) {
                    toggleBtn.style.display = 'none';
                }

                const computedStyle = window.getComputedStyle(container);

                const lineHeight = parseFloat(computedStyle.lineHeight) || 20;

                const maxHeight = lineHeight * 2;

                // Nếu mô tả vượt quá 2 dòng
                if (container.clientHeight > maxHeight + 6) {

                    let low = 0;
                    let high = fullText.length;
                    let bestFit = fullText;

                    while (low <= high) {

                        let mid = Math.floor((low + high) / 2);

                        textSpan.innerText = fullText.substring(0, mid);

                        if (dotsSpan) {
                            dotsSpan.style.display = 'inline';
                        }

                        if (toggleBtn) {
                            toggleBtn.style.display = 'inline-block';
                        }

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

                    if (dotsSpan) {
                        dotsSpan.style.display = 'none';
                    }

                    if (toggleBtn) {
                        toggleBtn.style.display = 'none';
                    }
                }

            } catch (e) {

                console.error('Lỗi xử lý cắt ngắn mô tả:', e);

            }

        });

    });


    // ==========================================
    // 4. HIỂN THỊ / THU GỌN MÔ TẢ
    // ==========================================

    function renderDescState(container, isExpanded) {

        const textSpan = container.querySelector('.desc-text');

        const dotsSpan = container.querySelector('.desc-dots');

        const toggleBtn = container.querySelector('.desc-toggle');

        const fullText = JSON.parse(container.getAttribute('data-fulltext'));

        const truncatedText = container.getAttribute('data-truncated');

        if (isExpanded) {

            textSpan.innerText = fullText;

            if (dotsSpan) {
                dotsSpan.style.display = 'none';
            }

            if (toggleBtn) {
                toggleBtn.innerHTML = 'Thu gọn';
            }

            container.classList.add('expanded');

        } else {

            textSpan.innerText = truncatedText;

            if (dotsSpan) {
                dotsSpan.style.display = 'inline';
            }

            if (toggleBtn) {
                toggleBtn.innerHTML = '<span class="hover:underline">Xem thêm</span>';
            }

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