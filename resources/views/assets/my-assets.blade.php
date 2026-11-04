@extends('layouts.app')

@section('content')
<main class="w-full pt-16 bg-background min-h-screen">
    <div class="flex flex-col w-full">
        <!-- Subtle decorative ambient glows -->
        <div class="relative w-full overflow-hidden">
            <div class="absolute -top-24 left-1/4 w-96 h-96 bg-secondary-fixed/30 rounded-full blur-3xl pointer-events-none -z-10"></div>
            <div class="absolute top-48 right-10 w-80 h-80 bg-surface-container-high/60 rounded-full blur-2xl pointer-events-none -z-10"></div>

            <div class="max-w-[1280px] mx-auto px-margin-mobile lg:px-margin py-space-lg flex flex-col gap-space-lg">

                <!-- Breadcrumbs & Header Section -->
                <section class="flex flex-col gap-space-sm">
                    <div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-lg">
                        <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}">
                            <span class="material-symbols-outlined text-[16px]">home</span>
                            Trang chủ
                        </a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('my.activity') }}">
                            Hoạt động cá nhân
                        </a>
                        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                        <span class="text-on-surface font-semibold">Tài sản của tôi</span>
                    </div>

                    <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pt-space-xs">
                        <div class="flex flex-col max-w-2xl">
                            <h1 class="font-headline-xl text-headline-xl text-on-surface font-bold tracking-tight">Kho tài sản của tôi</h1>
                            <p class="font-body-lg text-body-lg text-on-surface-variant mt-1">Quản lý danh sách thiết bị cho thuê, theo dõi lịch đặt đồ và hiệu suất sinh lời P2P.</p>
                        </div>
                        <div class="flex items-center gap-space-sm shrink-0">
                            <a href="{{ route('assets.create') }}" class="inline-flex items-center gap-space-xs px-space-md py-3 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg shadow-md hover:bg-primary-container hover:text-on-primary-container transition-all">
                                <span class="material-symbols-outlined text-[20px]">add_circle</span>
                                <span>Đăng tài sản mới</span>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Session Flash Messages -->
                @if (session('success'))
                <div class="rounded-xl bg-secondary/10 p-4 text-secondary font-semibold flex items-center gap-2">
                    <span class="material-symbols-outlined">check_circle</span>
                    <span>{{ session('success') }}</span>
                </div>
                @endif
                @if (session('error'))
                <div class="rounded-xl bg-error-container p-4 text-on-error-container font-semibold flex items-center gap-2">
                    <span class="material-symbols-outlined">error</span>
                    <span>{{ session('error') }}</span>
                </div>
                @endif

                <!-- KPI Summary Cards (4 Metrics Dashboard) -->
                <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md">
                    <!-- Metric 1 -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-lg text-on-surface-variant font-medium">Tổng tài sản trong kho</span>
                            <div class="w-9 h-9 rounded-lg bg-surface-container flex items-center justify-center text-on-surface">
                                <span class="material-symbols-outlined text-[20px]">inventory_2</span>
                            </div>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-baseline gap-2">
                                <!-- Sử dụng biến tổng cố định thay vì $assets->total() -->
                                <span class="font-headline-lg text-headline-lg font-bold text-on-surface">{{ $totalAssetsCount }}</span>
                                <span class="font-label-md text-label-lg text-on-surface-variant">món đồ</span>
                            </div>
                            <div class="mt-2 flex items-center gap-1.5 text-on-surface-variant font-body-sm text-body-sm">
                                <span class="w-2 h-2 rounded-full bg-secondary"></span>
                                <span>{{ $publishedCount }} sẵn sàng</span>
                                <span class="mx-1">•</span>
                                <span class="w-2 h-2 rounded-full bg-outline"></span>
                                <span>{{ $otherStatusCount }} tạm ẩn/khác</span>
                            </div>
                        </div>
                    </div>

                    <!-- Metric 2 -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-lg text-on-surface-variant font-medium">Đang cho thuê</span>
                            <div class="w-9 h-9 rounded-lg bg-secondary-fixed flex items-center justify-center text-on-secondary-fixed-variant">
                                <span class="material-symbols-outlined text-[20px]">handshake</span>
                            </div>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-lg text-headline-lg font-bold text-secondary">--</span>
                                <span class="font-label-md text-label-lg text-on-surface-variant">thiết bị active</span>
                            </div>
                            <div class="mt-2 flex items-center gap-1 text-secondary font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[16px]">trending_up</span>
                                <span>Doanh thu đang chạy</span>
                            </div>
                        </div>
                    </div>

                    <!-- Metric 3 -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-lg text-on-surface-variant font-medium">Tổng thu nhập tháng này</span>
                            <div class="w-9 h-9 rounded-lg bg-primary-fixed flex items-center justify-center text-on-primary-fixed-variant">
                                <span class="material-symbols-outlined text-[20px]">account_balance_wallet</span>
                            </div>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-baseline gap-1">
                                <span class="font-headline-lg text-headline-lg font-bold text-on-surface">0</span>
                                <span class="font-label-md text-label-lg text-on-surface-variant">đ</span>
                            </div>
                            <div class="mt-2 flex items-center gap-1 text-on-surface-variant font-body-sm text-body-sm">
                                <span class="material-symbols-outlined text-secondary text-[16px]">verified</span>
                                <span>Đã quyết toán Escrow</span>
                            </div>
                        </div>
                    </div>

                    <!-- Metric 4 -->
                    <div class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-lg text-on-surface-variant font-medium">Đánh giá trung bình</span>
                            <div class="w-9 h-9 rounded-lg bg-surface-container-high flex items-center justify-center text-on-surface">
                                <span class="material-symbols-outlined text-[20px]">stars</span>
                            </div>
                        </div>
                        <div class="mt-space-md">
                            <div class="flex items-baseline gap-2">
                                <span class="font-headline-lg text-headline-lg font-bold text-on-surface">5.0</span>
                                <span class="font-label-md text-label-lg text-tertiary-container font-semibold">★</span>
                            </div>
                            <div class="mt-2 flex items-center gap-1 text-secondary font-label-sm text-label-sm">
                                <span class="material-symbols-outlined text-[16px]">bolt</span>
                                <span>Phản hồi nhanh chóng</span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Filter & Search Toolbar (Form kết nối Laravel Backend GET) -->
                <form method="GET" action="{{ route('assets.my-assets') }}" class="p-space-md rounded-xl bg-surface-container-lowest shadow-sm flex flex-col gap-space-md">
                    <div class="flex flex-col lg:flex-row gap-space-md items-stretch lg:items-center justify-between">
                        <!-- Search input -->
                        <div class="relative flex-1 min-w-[280px]">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                            <input name="q" value="{{ request('q') }}" class="w-full pl-10 pr-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-lg placeholder:text-on-surface-variant focus:bg-surface-container-lowest focus:outline-none transition-all" placeholder="Tìm kiếm theo tên thiết bị, thương hiệu..." type="text" />
                        </div>

                        <!-- Select controls -->
                        <div class="flex flex-wrap sm:flex-nowrap items-center gap-space-sm">
                            <div class="relative min-w-[170px] w-full sm:w-auto">
                                <select name="category_id" class="w-full px-3 py-2.5 rounded-lg bg-surface-container-low font-label-md text-label-lg text-on-surface appearance-none focus:outline-none cursor-pointer pr-8">
                                    <option value="">Tất cả danh mục</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @selected(request('category_id')==$category->id)>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-[18px]">expand_more</span>
                            </div>

                            <div class="relative min-w-[190px] w-full sm:w-auto">
                                <select name="status" class="w-full px-3 py-2.5 rounded-lg bg-surface-container-low font-label-md text-label-lg text-on-surface appearance-none focus:outline-none cursor-pointer pr-8">
                                    <option value="">Tất cả trạng thái</option>
                                    <option value="published" @selected(request('status')==='published' )>Đang công khai</option>
                                    <option value="hidden" @selected(request('status')==='hidden' )>Đang ẩn</option>
                                    {{--
                                    <option value="draft" @selected(request('status')==='draft' )>Bản nháp</option>
                                    <option value="closed" @selected(request('status')==='closed' )>Đã đóng</option>
                                    --}}
                                </select>
                                <span class="material-symbols-outlined absolute right-2.5 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-[18px]">sort</span>
                            </div>

                            <button type="submit" class="cursor-pointer px-4 py-2.5 rounded-lg bg-primary text-on-primary font-label-md text-label-lg font-semibold hover:bg-primary-container transition-all">Lọc</button>
                            <a href="{{ route('assets.my-assets') }}" class="px-4 py-2.5 rounded-lg bg-surface-container text-on-surface font-label-md text-label-lg font-semibold hover:bg-surface-container-high transition-all">Xóa lọc</a>
                        </div>
                    </div>
                </form>

                <!-- Assets Inventory List Cards -->
                <section class="flex flex-col gap-space-md">
                    @if ($totalAssetsCount == 0)
                    <!-- TRƯỜNG HỢP 1: Kho hoàn toàn trống (Chưa từng đăng tài sản nào) -->
                    <div class="rounded-2xl bg-surface-container-lowest p-12 text-center shadow-sm">
                        <span class="material-symbols-outlined text-4xl text-on-surface-variant mb-2">inventory_2</span>
                        <h2 class="text-xl font-bold text-on-surface">Bạn chưa có tài sản nào</h2>
                        <p class="mt-1 text-on-surface-variant">Đăng tài sản đầu tiên để bắt đầu tạo nguồn thu nhập thụ động.</p>
                        <a href="{{ route('assets.create') }}" class="mt-4 inline-flex items-center gap-2 rounded-lg bg-primary px-5 py-3 font-semibold text-on-primary shadow-sm hover:bg-primary-container">
                            <span class="material-symbols-outlined text-[18px]">add_circle</span>
                            <span>Đăng tài sản mới ngay</span>
                        </a>
                    </div>
                    @elseif ($assets->isEmpty())
                    <!-- TRƯỜNG HỢP 2: Kho có đồ, nhưng bộ lọc hiện tại (từ khóa/trạng thái) không khớp kết quả nào -->
                    <div class="rounded-2xl bg-surface-container-lowest p-10 text-center shadow-sm flex flex-col items-center justify-center gap-3">
                        <span class="material-symbols-outlined text-4xl text-on-surface-variant">search_off</span>
                        <h2 class="text-lg font-bold text-on-surface">Không tìm thấy tài sản phù hợp</h2>
                        <p class="text-on-surface-variant text-sm">Không có thiết bị nào khớp với bộ lọc hoặc từ khóa tìm kiếm của bạn.</p>
                        <a href="{{ route('assets.my-assets') }}" class="mt-2 px-4 py-2 rounded-lg bg-surface-container text-on-surface font-semibold text-sm hover:bg-surface-container-high transition-all">
                            Xóa bộ lọc tìm kiếm
                        </a>
                    </div>
                    @else
                    <!-- TRƯỜNG HỢP 3: Hiển thị danh sách tài sản bình thường -->
                    @foreach ($assets as $asset)
                    @php
                    $statusConfig = [
                    'published' => ['label' => 'Đang công khai', 'ribbon' => 'bg-secondary', 'badge' => 'bg-secondary-fixed text-on-secondary-fixed-variant'],
                    'hidden' => ['label' => 'Đang ẩn', 'ribbon' => 'bg-outline', 'badge' => 'bg-surface-container-highest text-on-surface-variant'],
                    'draft' => ['label' => 'Bản nháp', 'ribbon' => 'bg-outline-variant', 'badge' => 'bg-surface-container-low text-on-surface-variant'],
                    'closed' => ['label' => 'Đã đóng', 'ribbon' => 'bg-error', 'badge' => 'bg-error-container text-on-error-container'],
                    ];
                    $currStatus = $statusConfig[$asset->status] ?? ['label' => $asset->status, 'ribbon' => 'bg-outline', 'badge' => 'bg-surface-container-high'];

                    $categoryColors = [
                    1 => ['badge' => 'bg-blue-100 text-blue-800', 'accent' => 'bg-blue-600'],
                    2 => ['badge' => 'bg-amber-100 text-amber-800', 'accent' => 'bg-amber-500'],
                    3 => ['badge' => 'bg-emerald-100 text-emerald-800', 'accent' => 'bg-emerald-600'],
                    4 => ['badge' => 'bg-purple-100 text-purple-800', 'accent' => 'bg-purple-600'],
                    ];
                    $catStyle = $categoryColors[$asset->category_id] ?? [
                    'badge' => 'bg-gray-100 text-gray-800 font-semibold',
                    'accent' => 'bg-gray-600'
                    ];
                    @endphp

                    <article class="asset-card p-space-md rounded-xl bg-surface-container-lowest shadow-sm hover:shadow-md transition-all flex flex-col lg:flex-row gap-space-md relative overflow-hidden">
                        <!-- Dải màu dọc bên trái hiển thị theo danh mục -->
                        <div class="absolute top-0 left-0 bottom-0 w-1.5 {{ $catStyle['accent'] }}"></div>

                        <!-- Product Media & Code Tag -->
                        <a href="{{ route('assets.show', $asset) }}" class="relative w-full lg:w-72 h-52 lg:h-auto rounded-lg overflow-hidden shrink-0 bg-surface-container">
                            @if ($asset->primaryImage)
                            <img class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                                src="{{ Storage::disk('public')->url($asset->primaryImage->image_path) }}" alt="{{ $asset->title }}" />
                            @else
                            <div class="flex w-full h-full items-center justify-center bg-surface-container text-on-surface-variant font-body-sm">
                                Chưa có ảnh
                            </div>
                            @endif

                            <div class="absolute top-2 right-2 {{ $currStatus['badge'] }} px-2 py-0.5 rounded-full font-label-sm text-label-sm font-semibold flex items-center gap-1 shadow-sm">
                                <span class="w-1.5 h-1.5 rounded-full {{ $currStatus['ribbon'] }}"></span>
                                {{ $currStatus['label'] }}
                            </div>
                        </a>

                        <!-- Information Center & Metadata -->
                        <div class="flex-1 flex flex-col justify-between gap-space-sm">
                            <div>
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider px-2.5 py-0.5 rounded-full {{ $catStyle['badge'] }}">
                                        Danh mục: {{ $asset->category->name }}
                                    </span>
                                    <div class="flex items-center gap-1 text-on-surface font-label-md text-label-lg">
                                        <span class="text-tertiary-container">★</span>
                                        <span class="font-bold">5.0</span>
                                    </div>
                                </div>
                                <h2 class="font-headline-md text-headline-md text-on-surface font-bold mt-1 tracking-tight">
                                    <a href="{{ route('assets.show', $asset) }}" class="hover:text-secondary transition-colors">{{ $asset->title }}</a>
                                </h2>

                                <!-- Price & Deposit Specs -->
                                <div class="mt-2 flex flex-wrap items-center gap-x-space-md gap-y-1 font-body-sm text-body-sm text-on-surface-variant">
                                    <div class="flex items-baseline gap-1">
                                        <span class="text-on-surface font-bold text-headline-sm font-headline-sm">{{ number_format((float) $asset->price_per_day, 0, ',', '.') }} đ</span>
                                        <span>/ngày</span>
                                    </div>
                                    @if($asset->deposit)
                                    <span>•</span>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[16px] text-secondary">security</span>
                                        <span>Tiền cọc: <strong>{{ number_format((float) $asset->deposit, 0, ',', '.') }} đ</strong></span>
                                    </div>
                                    @endif
                                </div>

                                <!-- Location Info -->
                                <div class="mt-3 p-3 rounded-lg bg-surface-container-low flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">location_on</span>
                                    <span class="font-body-sm text-body-sm text-on-surface">
                                        Địa điểm bàn giao: {{ $asset->city ?: $asset->pickup_address }}
                                    </span>
                                </div>
                            </div>

                            <!-- Historical Stats & Quick Actions -->
                            <div class="pt-space-xs flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm border-t border-surface-container-high/60">
                                <div class="flex items-center gap-space-md text-on-surface-variant font-label-sm text-label-md">
                                    <span>Tình trạng: <strong class="text-on-surface">{{ ['new' => 'Mới 100%', 'like_new' => 'Như mới 99%', 'good' => 'Tốt', 'fair' => 'Đã qua sử dụng'][$asset->condition] ?? $asset->condition }}</strong></span>
                                </div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <a href="{{ route('assets.show', $asset) }}" class="px-space-md py-2 rounded-lg bg-surface-container-highest text-on-surface font-label-md text-label-lg font-semibold hover:bg-surface-container transition-colors">
                                        Xem chi tiết
                                    </a>
                                    <!-- MENU DROPDOWN DẤU 3 CHẤM -->
                                    <details class="relative">
                                        <summary class="list-none p-2 rounded-lg bg-surface-container-low text-on-surface-variant hover:text-on-surface hover:bg-surface-container transition-colors cursor-pointer flex items-center justify-center">
                                            <span class="material-symbols-outlined text-[18px]">more_vert</span>
                                        </summary>
                                        <div class="absolute right-0 bottom-full mb-2 w-48 rounded-xl bg-surface-container-lowest p-1.5 shadow-xl border border-outline-variant/30 z-20 flex flex-col gap-1">
                                            @if (in_array($asset->status, ['published', 'hidden'], true))
                                            <form action="{{ route('assets.toggle-status', $asset) }}" method="POST" class="w-full">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="cursor-pointer w-full text-left px-3 py-2 rounded-lg text-sm font-semibold text-on-surface hover:bg-surface-container-low transition-colors flex items-center gap-2">
                                                    <span class="material-symbols-outlined text-[16px]">{{ $asset->status === 'published' ? 'visibility_off' : 'visibility' }}</span>
                                                    <span>{{ $asset->status === 'published' ? 'Ẩn tin' : 'Hiện tin' }}</span>
                                                </button>
                                            </form>
                                            @endif
                                            <a href="{{ route('assets.edit', $asset) }}" class="px-3 py-2 rounded-lg text-sm font-semibold text-on-surface hover:bg-surface-container-low transition-colors flex items-center gap-2">
                                                <span class="material-symbols-outlined text-[16px]">edit</span>
                                                <span>Chỉnh sửa</span>
                                            </a>
                                        </div>
                                    </details>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                    @endif
                </section>

                <!-- Pagination Links -->
                <section class="mt-2">
                    {{ $assets->links() }}
                </section>

            </div>
        </div>
    </div>
</main>
@endsection