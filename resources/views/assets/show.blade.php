@extends('layouts.app')

@section('content')
<!-- Main Container -->
<main class="min-h-screen bg-surface font-sans text-text-main antialiased pt-16">
    <div class="max-w-7xl mx-auto px-6 py-6 space-y-8">

        @if (!$isOwner && $asset->status !== 'published')
        @php abort(404); @endphp
        @endif

        @if ($isOwner && $asset->status !== 'published')
        <div class="rounded-xl bg-amber-50 border border-amber-200 p-4 text-sm font-semibold text-amber-900 flex items-center gap-2 shadow-sm">
            <span class="material-symbols-outlined text-[20px]">info</span>
            <span>Đây là bản xem trước tin của bạn. Trạng thái hiện tại: <strong>{{ $asset->status }}</strong>.</span>
        </div>
        @endif

        <!-- Breadcrumb -->
        <nav aria-label="Breadcrumb" class="flex items-center gap-space-xs text-on-surface-variant font-label-md text-label-lg">
            <a class="hover:text-secondary transition-colors" href="{{ route('home') }}">Trang chủ</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <a class="hover:text-secondary transition-colors" href="{{ route('my.activity') }}">Hoạt động cá nhân</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-on-surface font-semibold">Tài sản của tôi</span>
        </nav>

        <!-- Top Section: Media Showcase & Booking Box -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- Media Gallery (7 cols) -->
            <div class="lg:col-span-7 space-y-3">
                @php
                $primaryImage = $asset->images->firstWhere('is_primary', true) ?? $asset->images->first();
                @endphp

                <div class="relative aspect-4/3 rounded-2xl overflow-hidden bg-slate-100 border border-border shadow-sm group">
                    @if ($primaryImage)
                    <img id="main-image" src="{{ Storage::disk('public')->url($primaryImage->image_path) }}" alt="{{ $asset->title }}" class="w-full h-full object-cover group-hover:scale-102 transition-transform duration-300" />
                    @else
                    <div class="flex w-full h-full items-center justify-center bg-slate-100 text-text-muted font-semibold text-sm">
                        Chưa có hình ảnh
                    </div>
                    @endif

                    <div class="absolute top-4 left-4 flex gap-2">
                        <span class="bg-white/95 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold text-secondary flex items-center gap-1.5 shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                            Sẵn sàng giao ngay
                        </span>
                        <span class="bg-white/95 backdrop-blur px-3 py-1 rounded-full text-sm font-semibold text-text-main flex items-center gap-1 shadow-sm">
                            <span class="material-symbols-outlined text-[16px] text-secondary">verified</span>
                            Kiểm định {{ ['new' => 'Mới 100%', 'like_new' => 'Như mới 99%', 'good' => 'Tốt', 'fair' => 'Đã qua sử dụng'][$asset->condition] ?? $asset->condition }}
                        </span>
                    </div>

                    <!-- Nút lưu yêu thích (Nút tạm với URL #) -->
                    <a href="#" class="absolute top-4 right-4 w-9 h-9 rounded-full bg-white/90 hover:bg-white backdrop-blur flex items-center justify-center text-slate-700 shadow-sm transition-transform active:scale-95" title="Lưu yêu thích">
                        <span class="material-symbols-outlined text-[20px] text-red-500" style="font-variation-settings: 'FILL' 1;">favorite</span>
                    </a>
                </div>

                <!-- Thumbnails Gallery -->
                @if ($asset->images->count() > 1)
                <div class="grid grid-cols-4 sm:grid-cols-5 gap-3">
                    @foreach ($asset->images as $image)
                    <div onclick="changeMainImage('{{ Storage::disk('public')->url($image->image_path) }}', this)"
                        class="thumbnail-item aspect-4/3 rounded-xl overflow-hidden border-2 {{ $loop->first ? 'border-secondary' : 'border-border' }} bg-slate-100 cursor-pointer shadow-sm hover:border-secondary transition-colors">
                        <img src="{{ Storage::disk('public')->url($image->image_path) }}" alt="Ảnh {{ $loop->iteration }} của {{ $asset->title }}" class="w-full h-full object-cover" />
                    </div>
                    @endforeach
                </div>
                @endif
            </div>

            <!-- Detail & Rental Calculation (5 cols) -->
            <div class="lg:col-span-5 bg-white rounded-2xl p-6 border border-border shadow-sm space-y-5">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="px-2.5 py-0.5 rounded-full bg-slate-100 text-text-muted text-sm font-semibold">Danh mục: {{ $asset->category->name }}</span>
                        @if($asset->brand)
                        <span class="px-2.5 py-0.5 rounded-full bg-teal-50 text-secondary text-sm font-semibold">Thương hiệu: {{ $asset->brand }}</span>
                        @endif
                    </div>
                    <h1 class="text-xl lg:text-2xl font-bold text-text-main leading-snug">
                        {{ $asset->title }}
                    </h1>
                    @if($asset->model)
                    <p class="text-sm text-text-muted mt-1">Model / Dòng máy: {{ $asset->model }}</p>
                    @endif
                </div>

                <div class="flex items-center justify-between py-2 px-3 bg-slate-50 rounded-xl text-sm">
                    <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[18px] text-amber-500" style="font-variation-settings: 'FILL' 1;">star</span>
                        <span class="font-bold text-text-main text-sm">5.0</span>
                        <span class="text-text-muted">(Đánh giá mới)</span>
                    </div>
                    <div class="h-4 w-px bg-border"></div>
                    <div class="text-text-muted">
                        <strong class="text-text-main font-semibold">Tình trạng:</strong>
                        {{ ['new' => 'Mới 100%', 'like_new' => 'Như mới 99%', 'good' => 'Tốt', 'fair' => 'Đã qua sử dụng'][$asset->condition] ?? $asset->condition }}
                    </div>
                </div>

                <!-- Pricing Tier -->
                <div class="p-4 rounded-xl bg-slate-50 border border-border/60 space-y-2">
                    <div class="flex items-baseline justify-between">
                        <div>
                            <span class="text-2xl font-bold text-secondary">{{ number_format((float) $asset->price_per_day, 0, ',', '.') }}₫</span>
                            <span class="text-sm text-text-muted font-normal"> / ngày</span>
                        </div>
                    </div>
                    @if($asset->deposit)
                    <div class="flex items-center gap-1.5 text-sm text-text-muted pt-1 border-t border-border/60">
                        <span class="material-symbols-outlined text-[16px] text-secondary">shield</span>
                        <span>Tiền đặt cọc: <strong class="text-text-main">{{ number_format((float) $asset->deposit, 0, ',', '.') }}₫</strong></span>
                    </div>
                    @endif
                </div>

                <!-- Pickup Location -->
                <div class="space-y-2">
                    <label class="text-sm font-semibold text-text-main block">Địa điểm nhận tài sản:</label>
                    <div class="p-3 bg-slate-50 rounded-xl border border-border flex items-center gap-2 text-sm">
                        <span class="material-symbols-outlined text-secondary text-[20px]">location_on</span>
                        <span class="font-semibold text-text-main">
                            {{ collect([$asset->pickup_address, $asset->district, $asset->city])->filter()->implode(', ') }}
                        </span>
                    </div>
                </div>

                <!-- Action Buttons -->
                @if ($isOwner)
                <div class="space-y-2 pt-1">
                    <a href="{{ route('assets.edit', $asset) }}" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-semibold py-3 rounded-xl flex items-center justify-center gap-2 transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-[18px]">edit</span>
                        <span>Chỉnh sửa tài sản này</span>
                    </a>
                    <a href="{{ route('assets.my-assets') }}" class="w-full bg-slate-100 hover:bg-slate-200 text-text-main font-semibold py-2.5 rounded-xl flex items-center justify-center gap-2 transition-colors">
                        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                        <span>Quay lại Kho tài sản của tôi</span>
                    </a>
                </div>
                @else
                <!-- Các nút hành động cho khách thuê (dùng URL tạm #) -->
                <div class="space-y-2 pt-1">
                    <a href="#" class="w-full bg-slate-900 hover:bg-slate-800 text-white font-semibold py-3 rounded-xl flex items-center justify-center gap-2 transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                        <span>Yêu cầu thuê ngay</span>
                    </a>
                    <a href="#" class="w-full bg-slate-100 hover:bg-slate-200 text-text-main font-semibold py-2.5 rounded-xl flex items-center justify-center gap-2 transition-colors">
                        <span class="material-symbols-outlined text-[18px] text-secondary">chat_bubble</span>
                        <span>Nhắn tin cho chủ máy</span>
                    </a>
                </div>
                <p class="text-center text-[11px] text-text-muted">
                    Chủ tài sản thường xác nhận trong <span class="font-semibold text-text-main">10 phút</span>. Tiền cọc được ShareHub Escrow bảo chứng an toàn 100%.
                </p>
                @endif
            </div>
        </div>

        <!-- Middle Tabs/Sections: Specs, Rules, Owner Profile & Description -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            <!-- Left Content (8 cols) -->
            <div class="lg:col-span-8 space-y-6">

                <!-- 1. Mô tả tài sản -->
                <section class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-3">
                    <h2 class="text-base font-bold text-text-main flex items-center gap-2">
                        <span class="w-1.5 h-4 bg-secondary rounded-full"></span>
                        Mô tả tài sản & Mục đích sử dụng
                    </h2>
                    <div class="text-sm text-text-muted leading-relaxed whitespace-pre-line">
                        {{ $asset->description }}
                    </div>
                </section>

                <!-- 2. Thông số kỹ thuật & Phụ kiện đi kèm -->
                <section class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-4">
                    <h2 class="text-base font-bold text-text-main flex items-center gap-2">
                        <span class="w-1.5 h-4 bg-secondary rounded-full"></span>
                        Thông số kỹ thuật & Phụ kiện bàn giao
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm">
                        <div class="flex justify-between p-2.5 rounded-lg bg-slate-50">
                            <span class="text-text-muted">Thương hiệu</span>
                            <span class="font-semibold text-text-main">{{ $asset->brand ?: 'Chưa cập nhật' }}</span>
                        </div>
                        <div class="flex justify-between p-2.5 rounded-lg bg-slate-50">
                            <span class="text-text-muted">Model / Dòng máy</span>
                            <span class="font-semibold text-text-main">{{ $asset->model ?: 'Chưa cập nhật' }}</span>
                        </div>
                        <div class="flex justify-between p-2.5 rounded-lg bg-slate-50">
                            <span class="text-text-muted">Tình trạng thực tế</span>
                            <span class="font-semibold text-text-main">{{ ['new' => 'Mới 100%', 'like_new' => 'Như mới 99%', 'good' => 'Tốt', 'fair' => 'Đã qua sử dụng'][$asset->condition] ?? $asset->condition }}</span>
                        </div>
                        <div class="flex justify-between p-2.5 rounded-lg bg-slate-50">
                            <span class="text-text-muted">Tiền đặt cọc</span>
                            <span class="font-semibold text-secondary">{{ number_format((float) $asset->deposit, 0, ',', '.') }}₫</span>
                        </div>
                    </div>

                    @if ($asset->accessories)
                    <div class="p-4 rounded-xl bg-teal-50/50 border border-teal-100 text-sm space-y-2">
                        <p class="font-semibold text-secondary flex items-center gap-1.5">
                            <span class="material-symbols-outlined text-[16px]">inventory_2</span>
                            Phụ kiện đi kèm gồm có:
                        </p>
                        <p class="text-text-main whitespace-pre-line leading-relaxed">
                            {{ $asset->accessories }}
                        </p>
                    </div>
                    @endif
                </section>

                <!-- 3. Quy định sử dụng -->
                @if ($asset->rental_rules)
                <section class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-4">
                    <h2 class="text-base font-bold text-text-main flex items-center gap-2">
                        <span class="w-1.5 h-4 bg-secondary rounded-full"></span>
                        Quy định thuê & Tình trạng kiểm tra
                    </h2>
                    <div class="p-4 rounded-xl bg-slate-50 border border-border/60 text-sm text-text-muted whitespace-pre-line leading-relaxed">
                        {{ $asset->rental_rules }}
                    </div>
                </section>
                @endif
            </div>

            <!-- Right Column: Owner Profile Box (4 cols) -->
            <div class="lg:col-span-4 space-y-6">
                <div class="bg-white rounded-2xl p-6 border border-border shadow-sm space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-14 h-14 rounded-full bg-teal-100 text-secondary font-bold text-xl flex items-center justify-center shrink-0 ring-2 ring-secondary/30">
                            <img alt="Profile" class="w-full h-full object-cover rounded-full" src="{{ $asset->user->avatar ? asset('storage/' . $asset->user->avatar) : asset('imgs/default-avatar.png') }}" />
                        </div>
                        <div>
                            <div class="flex items-center gap-1">
                                <h3 class="font-bold text-text-main text-base">{{ $asset->user->name }}</h3>
                            </div>
                            <p class="text-[11px] text-text-muted">Tham gia từ {{ $asset->user->created_at ? $asset->user->created_at->format('m/Y') : 'Chưa rõ' }}</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-2 text-center text-sm">
                        <div class="p-2.5 rounded-xl bg-slate-50 border border-border/60">
                            <span class="text-text-muted text-[11px] block">Điểm tin cậy</span>
                            <span class="text-lg font-bold text-secondary mt-0.5 block">100/100</span>
                        </div>
                        <div class="p-2.5 rounded-xl bg-slate-50 border border-border/60">
                            <span class="text-text-muted text-[11px] block">Kho tài sản</span>
                            <span class="text-lg font-bold text-text-main mt-0.5 block">{{ $asset->user->assets()->count() }} món đồ</span>
                        </div>
                    </div>

                    @if ($asset->user->username)
                    <a href="{{ route('users.show', $asset->user->username) }}" class="w-full py-2.5 rounded-xl bg-slate-100 hover:bg-slate-200 text-text-main font-semibold text-sm flex items-center justify-center gap-1.5 transition-colors">
                        <span>Xem hồ sơ công khai của {{ $asset->user->name }}</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                    @endif
                </div>

                <!-- Safe Escrow Notice -->
                <div class="bg-teal-50/60 rounded-2xl p-5 border border-teal-100 text-sm space-y-2.5">
                    <div class="flex items-center gap-2 text-secondary font-bold text-sm">
                        <span class="material-symbols-outlined text-[20px]">security</span>
                        Bảo chứng an toàn ShareHub
                    </div>
                    <p class="text-text-muted leading-relaxed text-[11px]">
                        Toàn bộ tiền thuê và tiền cọc được giữ trung gian an toàn trong ví ShareHub Escrow. Chủ tài sản chỉ nhận thanh toán khi bạn đã nhận thiết bị đúng mô tả và kiểm tra nguyên vẹn.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Hàm chuyển đổi ảnh chính khi click vào thumbnail
    function changeMainImage(imageUrl, element) {
        const mainImg = document.getElementById('main-image');
        if (mainImg) {
            mainImg.src = imageUrl;
        }

        // Cập nhật viền cho thumbnail được chọn
        document.querySelectorAll('.thumbnail-item').forEach(item => {
            item.classList.remove('border-secondary');
            item.classList.add('border-border');
        });
        element.classList.remove('border-border');
        element.classList.add('border-secondary');
    }
</script>
@endsection