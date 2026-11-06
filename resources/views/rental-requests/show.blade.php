@extends('layouts.app')

@section('content')
@php
$author = $rentalRequest->user;

$statusLabels = [
'open' => 'Đang mở',
'closed' => 'Đã đóng',
'draft' => 'Bản nháp',
];

$statusLabel = $statusLabels[$rentalRequest->status] ?? 'Không xác định';
$publishedAt = $rentalRequest->published_at ?? $rentalRequest->created_at;
$budgetMin = $rentalRequest->min_daily_budget;
$budgetMax = $rentalRequest->max_daily_budget;

$budgetText = 'Chưa cung cấp';
if ($budgetMin !== null && $budgetMax !== null) {
$budgetText = (float) $budgetMin === (float) $budgetMax
? number_format((float) $budgetMin, 0, ',', '.') . ' đ'
: number_format((float) $budgetMin, 0, ',', '.') . ' – ' . number_format((float) $budgetMax, 0, ',', '.') . ' đ';
} elseif ($budgetMin !== null) {
$budgetText = 'Từ ' . number_format((float) $budgetMin, 0, ',', '.') . ' đ';
} elseif ($budgetMax !== null) {
$budgetText = 'Đến ' . number_format((float) $budgetMax, 0, ',', '.') . ' đ';
}

$pickupModeText = $rentalRequest->pickup_mode === 'ship'
? 'Giao hàng / vận chuyển'
: 'Nhận trực tiếp';
@endphp

<main class="min-h-screen bg-background pt-20">
    {{-- Breadcrumb --}}
    <div class="bg-surface-container-low px-4 py-3 lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-wrap items-center gap-2 text-sm text-on-surface-variant">
            <a href="{{ route('home') }}" class="hover:text-secondary">Trang chủ</a>
            <span class="material-symbols-outlined text-base">chevron_right</span>
            <a href="{{ route('rental-requests.index') }}" class="hover:text-secondary">Nhu cầu thuê</a>
            <span class="material-symbols-outlined text-base">chevron_right</span>
            <span class="truncate font-semibold text-on-surface">{{ $rentalRequest->title }}</span>
        </div>
    </div>

    <div class="mx-auto w-full max-w-7xl px-4 py-8 lg:px-8">
        {{-- Thông báo --}}
        @if ($isOwner && session('success'))
        <div
            id="status-success-toast"
            role="status"
            aria-live="polite"
            data-toast-duration="5"
            class="mb-5 rounded-xl border border-secondary/20 bg-secondary/10 p-4 text-secondary shadow-sm">
            <div class="flex items-start justify-between gap-4">
                <div class="flex min-w-0 items-start gap-2">
                    <span class="material-symbols-outlined mt-0.5">check_circle</span>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
                <span class="shrink-0 text-sm font-semibold tabular-nums">
                    Tự đóng sau <span id="status-toast-countdown">5</span>s
                </span>
            </div>
            <div class="mt-3 h-1 overflow-hidden rounded-full bg-secondary/15">
                <div id="status-toast-progress" class="h-full origin-left rounded-full bg-secondary transition-[width] duration-1000 ease-linear" style="width: 100%"></div>
            </div>
        </div>
        @endif

        @if ($errors->any())
        <div class="mb-5 rounded-xl bg-error-container p-4 text-on-error-container">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif

        <div class="grid grid-cols-1 items-stretch gap-6 lg:grid-cols-12">
            {{-- CỘT TRÁI: THÔNG TIN NGƯỜI ĐĂNG, ẢNH, MÔ TẢ, HỎI ĐÁP, BÌNH LUẬN --}}
            <div class="flex min-w-0 flex-col gap-6 lg:col-span-7">
                {{-- Người đăng được đưa lên trước nội dung bài đăng --}}
                <section class="flex items-center gap-space-sm rounded-2xl bg-surface-container-lowest p-4 shadow-sm sm:p-5">
                    @if ($author?->avatar)
                    <img
                        src="{{ Storage::disk('public')->url($author->avatar) }}"
                        alt="{{ $author->name }}"
                        class="w-12 h-12 shrink-0 rounded-full object-cover">
                    @else
                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-full bg-primary text-lg font-bold text-on-primary">
                        {{ mb_strtoupper(mb_substr($author?->name ?? 'U', 0, 1)) }}
                    </div>
                    @endif

                    <div class="min-w-0">
                        <div class="flex flex-wrap items-center gap-space-sm">
                            <a href="{{ route('users.show', $author->username) }}"
                                class="font-label-lg text-body-lg text-on-surface font-semibold hover:underline">
                                {{ $author?->name ?? 'Người dùng ShareHub' }}
                            </a>

                            @if ($author?->username)
                            <span class="text-outline">•</span>
                            <a href="{{ route('users.show', $author->username) }}"
                                class="inline-flex items-center gap-1 text-secondary text-body-md font-normal hover:underline">
                                {{ '@' . $author->username }}
                            </a>
                            @endif
                        </div>
                        <p class="mt-0.5 text-on-surface-variant font-label-md text-label-md">
                            Thành viên từ {{ $author?->created_at?->format('m/Y') ?? 'chưa xác định' }}
                        </p>
                    </div>
                </section>

                {{-- Nội dung bài đăng --}}
                <article class="overflow-hidden rounded-2xl bg-surface-container-lowest p-5 shadow-sm sm:p-7">
                    {{-- Thư viện ảnh yêu cầu thuê --}}
                    @if ($rentalRequest->images->isNotEmpty())

                    @php
                    $galleryImages = $rentalRequest->images->take(5)->values();
                    @endphp

                    <div class="w-full">

                        {{-- Ảnh xem chính --}}
                        <div class="relative aspect-[16/10] w-full overflow-hidden rounded-xl bg-surface-container">
                            @foreach ($galleryImages as $image)
                            <img
                                src="{{ Storage::disk('public')->url($image->image_path) }}"
                                alt="Ảnh yêu cầu {{ $loop->iteration }}"
                                data-gallery-image="{{ $loop->index }}"
                                class="absolute inset-0 h-full w-full object-contain {{ $loop->first ? '' : 'hidden' }}">
                            @endforeach
                        </div>

                        {{-- Danh sách ảnh thu nhỏ --}}
                        <div class="mt-3 flex w-full gap-2">
                            @foreach ($galleryImages as $image)
                            <button
                                type="button"
                                data-gallery-thumbnail="{{ $loop->index }}"
                                aria-label="Xem ảnh {{ $loop->iteration }}"
                                aria-pressed="{{ $loop->first ? 'true' : 'false' }}"
                                class="group min-w-0 flex-1 cursor-pointer overflow-hidden rounded-lg border-2 {{ $loop->first ? 'border-secondary' : 'border-transparent' }} bg-surface-container transition hover:border-secondary/50">
                                <img
                                    src="{{ Storage::disk('public')->url($image->image_path) }}"
                                    alt="Ảnh thu nhỏ {{ $loop->iteration }}"
                                    class="aspect-square w-full object-cover transition duration-200 group-hover:scale-105">
                            </button>
                            @endforeach
                        </div>

                        <p class="mt-2 text-xs text-on-surface-variant">
                            {{ $galleryImages->count() }} / 5 ảnh
                            <span class="mx-1">·</span>
                            Chọn ảnh bên dưới để xem kích thước lớn.
                        </p>

                    </div>

                    @else

                    <div class="flex min-h-40 items-center justify-center rounded-xl bg-surface-container-low text-sm text-on-surface-variant">
                        Người đăng chưa đính kèm ảnh tham khảo.
                    </div>

                    @endif

                    {{-- Mô tả --}}
                    <section class="mt-6 border-t border-outline-variant/30 pt-5">
                        <h2 class="text-xl font-bold text-on-surface">Mô tả chi tiết</h2>
                        <div class="mt-3 whitespace-pre-line break-words rounded-xl bg-surface-container-low p-4 leading-7 text-on-surface">
                            {{ $rentalRequest->description ?: 'Người đăng chưa cung cấp mô tả chi tiết.' }}
                        </div>
                    </section>
                </article>

                {{-- Hỏi đáp công khai --}}
                <section class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm sm:p-6">
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <div>
                            <h2 class="text-xl font-bold text-on-surface">Hỏi đáp về yêu cầu này</h2>
                            <p class="mt-1 text-sm text-on-surface-variant">
                                Trao đổi công khai để làm rõ nhu cầu trước khi gửi đề xuất.
                            </p>
                        </div>
                        <span class="rounded-full bg-surface-container px-3 py-1 text-xs font-semibold text-on-surface-variant">
                            Đang phát triển
                        </span>
                    </div>

                    <div class="mt-5 rounded-xl border border-dashed border-outline-variant p-5 text-center">
                        <span class="material-symbols-outlined text-3xl text-outline">forum</span>
                        <p class="mt-2 font-semibold text-on-surface">Chưa có câu hỏi nào</p>
                        <p class="mt-1 text-sm text-on-surface-variant">
                            Phần hỏi đáp sẽ cho phép người dùng đặt câu hỏi và người đăng phản hồi công khai.
                        </p>
                    </div>

                    <div class="mt-4">
                        <textarea
                            rows="3"
                            disabled
                            placeholder="Tính năng đặt câu hỏi đang được phát triển..."
                            class="w-full resize-none rounded-xl bg-surface-container-low p-3 text-sm text-on-surface-variant outline-none"></textarea>
                        <div class="mt-2 flex justify-end">
                            <a
                                href="#"
                                class="inline-flex items-center gap-2 rounded-lg bg-surface-container px-4 py-2.5 text-sm font-semibold text-on-surface-variant">
                                Gửi câu hỏi
                                <span class="material-symbols-outlined text-base">send</span>
                            </a>
                        </div>
                    </div>
                </section>

                {{-- Bình luận: giữ bên dưới phần nội dung bài đăng và hỏi đáp --}}
                <section id="comments" class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm sm:p-6">
                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <div>
                            <h2 class="text-xl font-bold text-on-surface">Bình luận</h2>
                            <p class="mt-1 text-sm text-on-surface-variant">
                                Chia sẻ ý kiến hoặc trao đổi thêm về yêu cầu thuê này.
                            </p>
                        </div>
                        <span class="rounded-full bg-surface-container px-3 py-1 text-xs font-semibold text-on-surface-variant">
                            0 bình luận
                        </span>
                    </div>

                    <div class="mt-5 rounded-xl border border-dashed border-outline-variant p-5 text-center">
                        <span class="material-symbols-outlined text-3xl text-outline">chat_bubble_outline</span>
                        <p class="mt-2 font-semibold text-on-surface">Chưa có bình luận</p>
                        <p class="mt-1 text-sm text-on-surface-variant">
                            Hãy là người đầu tiên tham gia trao đổi về yêu cầu này.
                        </p>
                    </div>

                    <div class="mt-4">
                        <textarea
                            rows="3"
                            disabled
                            placeholder="Tính năng bình luận đang được phát triển..."
                            class="w-full resize-none rounded-xl bg-surface-container-low p-3 text-sm text-on-surface-variant outline-none"></textarea>
                        <div class="mt-2 flex justify-end">
                            <a
                                href="#"
                                class="inline-flex items-center gap-2 rounded-lg bg-primary px-4 py-2.5 text-sm font-semibold text-on-primary transition hover:bg-primary-container">
                                Gửi bình luận
                                <span class="material-symbols-outlined text-base">send</span>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

            {{-- CỘT PHẢI: CHI TIẾT YÊU CẦU VÀ HÀNH ĐỘNG --}}
            <aside class="flex min-w-0 flex-col gap-5 self-stretch lg:col-span-5 {{ $isOwner ? 'lg:sticky lg:top-24 lg:self-start' : '' }}">
                {{-- Chi tiết yêu cầu --}}
                <section class="rounded-2xl border border-outline-variant/30 bg-surface-container-lowest p-5 shadow-sm sm:p-6">
                    {{-- Danh mục và trạng thái --}}
                    <div class="mb-3 flex flex-wrap items-center gap-2">
                        <span class="rounded-full bg-surface-container px-3 py-1.5 text-sm font-semibold text-on-surface-variant">
                            Danh mục: {{ $rentalRequest->category?->name ?? 'Chưa phân loại' }}
                        </span>

                        {{-- Chỉ chủ bài đăng mới nhìn thấy trạng thái --}}
                        @if ($isOwner)
                        <div class="inline-flex items-center gap-1.5 rounded-full px-3 py-1.5 font-label-sm text-label-md font-bold whitespace-nowrap shrink-0
            {{ $rentalRequest->status === 'open'
                ? 'bg-secondary-fixed text-on-secondary-fixed-variant'
                : ($rentalRequest->status === 'closed'
                    ? 'bg-red-100 text-red-800'
                    : 'bg-amber-100 text-amber-800') }}">

                            <span class="material-symbols-outlined text-[16px]">
                                {{ $rentalRequest->status === 'open'
                    ? 'campaign'
                    : ($rentalRequest->status === 'closed'
                        ? 'check_circle'
                        : 'edit_note') }}
                            </span>

                            {{ $statusLabels[$rentalRequest->status] ?? $rentalRequest->status }}
                        </div>
                        @endif
                    </div>

                    {{-- Thời gian đăng, địa điểm và mã yêu cầu --}}
                    <div class="mb-2 flex flex-wrap items-center gap-x-2 gap-y-1 text-xs text-on-surface-variant">
                        <span class="inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">schedule</span>
                            {{ $publishedAt?->diffForHumans() ?? 'Chưa xác định thời gian' }}
                        </span>

                        <span class="text-outline">·</span>

                        <span class="inline-flex items-center gap-1">
                            <span class="material-symbols-outlined text-sm">location_on</span>
                            {{ collect([$rentalRequest->city, $rentalRequest->district])->filter()->implode(', ') ?: 'Chưa cung cấp địa điểm' }}
                        </span>

                        <span class="text-outline">·</span>

                        <span>#REQ-{{ $rentalRequest->id }}</span>
                    </div>

                    {{-- Tiêu đề --}}
                    <h1 class="text-xl font-bold leading-snug tracking-tight text-on-surface sm:text-2xl">
                        {{ $rentalRequest->title }}
                    </h1>

                    {{-- Thông tin yêu cầu thuê --}}
                    <div class="mt-5 grid grid-cols-1 gap-3 sm:grid-cols-2">

                        {{-- Thời gian cần thuê --}}
                        <div class="flex min-w-0 items-start gap-3 rounded-xl bg-surface-container-low p-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary-fixed/50 text-primary">
                                <span class="material-symbols-outlined text-xl">calendar_month</span>
                            </div>

                            <div class="min-w-0">
                                <p class="text-xs text-on-surface-variant">
                                    Thời gian cần thuê
                                </p>

                                <p class="mt-1 font-semibold leading-6 text-on-surface">
                                    @if ($rentalRequest->start_date && $rentalRequest->end_date)
                                    {{ $rentalRequest->start_date->format('d/m/Y') }}
                                    – {{ $rentalRequest->end_date->format('d/m/Y') }}
                                    @else
                                    Chưa xác định
                                    @endif
                                </p>
                            </div>
                        </div>

                        {{-- Số lượng --}}
                        <div class="flex min-w-0 items-start gap-3 rounded-xl bg-surface-container-low p-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-secondary-container text-secondary">
                                <span class="material-symbols-outlined text-xl">inventory_2</span>
                            </div>

                            <div class="min-w-0">
                                <p class="text-xs text-on-surface-variant">
                                    Số lượng cần thuê
                                </p>

                                <p class="mt-1 font-semibold leading-6 text-on-surface">
                                    {{ $rentalRequest->quantity ?? 'Chưa xác định' }}

                                    @if ($rentalRequest->quantity)
                                    món
                                    @endif
                                </p>
                            </div>
                        </div>

                        {{-- Ngân sách mỗi ngày --}}
                        <div class="flex min-w-0 items-start gap-3 rounded-xl bg-surface-container-low p-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-tertiary-fixed text-tertiary">
                                <span class="material-symbols-outlined text-xl">payments</span>
                            </div>

                            <div class="min-w-0">
                                <p class="text-xs text-on-surface-variant">
                                    Ngân sách dự kiến / ngày
                                </p>

                                <p class="mt-1 font-bold leading-6 text-secondary">
                                    {{ $budgetText }}
                                </p>
                            </div>
                        </div>

                        {{-- Tổng ngân sách --}}
                        <div class="flex min-w-0 items-start gap-3 rounded-xl bg-surface-container-low p-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-surface-container-high text-on-surface">
                                <span class="material-symbols-outlined text-xl">account_balance_wallet</span>
                            </div>

                            <div class="min-w-0">
                                <p class="text-xs text-on-surface-variant">
                                    Tổng ngân sách
                                </p>

                                <p class="mt-1 font-semibold leading-6 text-on-surface">
                                    {{ $rentalRequest->total_budget !== null
                    ? number_format((float) $rentalRequest->total_budget, 0, ',', '.') . ' đ'
                    : 'Chưa cung cấp' }}
                                </p>
                            </div>
                        </div>

                        {{-- Phương thức nhận đồ: chiếm toàn bộ dòng --}}
                        <div class="flex min-w-0 items-start gap-3 rounded-xl bg-surface-container-low p-4 sm:col-span-2">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-secondary-container text-secondary">
                                <span class="material-symbols-outlined text-xl">local_shipping</span>
                            </div>

                            <div class="min-w-0">
                                <p class="text-xs text-on-surface-variant">
                                    Phương thức nhận đồ
                                </p>

                                <p class="mt-1 font-semibold leading-6 text-on-surface">
                                    {{ $pickupModeText }}
                                </p>

                                <p class="mt-1 text-sm text-on-surface-variant">
                                    Bán kính:
                                    {{ $rentalRequest->location_radius
                    ? $rentalRequest->location_radius . ' km'
                    : 'Không giới hạn' }}
                                </p>
                            </div>
                        </div>

                    </div>

                    {{-- Chức năng quản lý chỉ dành cho chủ bài đăng --}}
                    @if ($isOwner)
                    <div class="mt-5 space-y-2 border-t border-outline-variant/30 pt-5">
                        <a
                            href="{{ route('rental-requests.edit', $rentalRequest) }}"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-primary px-4 py-3 font-semibold text-on-primary transition hover:bg-primary-container">
                            <span class="material-symbols-outlined text-lg">edit</span>
                            Chỉnh sửa yêu cầu này
                        </a>

                        <a
                            href="{{ route('rental-requests.my-requests') }}"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-surface-container px-4 py-2.5 font-semibold text-on-surface transition hover:bg-surface-container-high">
                            <span class="material-symbols-outlined text-lg">arrow_back</span>
                            Quay lại yêu cầu thuê của tôi
                        </a>

                        {{-- Quản lý trạng thái --}}
                        <div class="grid grid-cols-2 gap-3 pt-2">

                            {{-- Đóng yêu cầu --}}
                            @if ($rentalRequest->status === 'open' || $rentalRequest->status === 'draft')
                            <form
                                method="POST"
                                action="{{ route('rental-requests.update-status', $rentalRequest) }}"
                                class="min-w-0" data-status-form>

                                @csrf
                                @method('PATCH')

                                <input type="hidden" name="status" value="closed">

                                <button
                                    type="submit"
                                    data-status-submit
                                    class="flex min-h-11 w-full items-center justify-center gap-1.5 rounded-lg bg-red-100 px-2 py-2.5 text-center text-sm font-semibold text-red-800 transition hover:bg-red-200">

                                    <span class="material-symbols-outlined text-base">
                                        check_circle
                                    </span>

                                    Đóng yêu cầu
                                </button>
                            </form>
                            @endif

                            {{-- Mở lại yêu cầu --}}
                            @if ($rentalRequest->status === 'closed' || $rentalRequest->status === 'draft')
                            <form
                                method="POST"
                                action="{{ route('rental-requests.update-status', $rentalRequest) }}"
                                class="min-w-0" data-status-form>

                                @csrf
                                @method('PATCH')

                                <input type="hidden" name="status" value="open">

                                <button
                                    type="submit"
                                    data-status-submit
                                    class="flex min-h-11 w-full items-center justify-center gap-1.5 rounded-lg bg-secondary-fixed px-2 py-2.5 text-center text-sm font-semibold text-on-secondary-fixed-variant transition hover:opacity-80">

                                    <span class="material-symbols-outlined text-base">
                                        campaign
                                    </span>

                                    Mở công khai
                                </button>
                            </form>
                            @endif

                            {{-- Chuyển về bản nháp --}}
                            @if ($rentalRequest->status !== 'draft')
                            <form
                                method="POST"
                                action="{{ route('rental-requests.update-status', $rentalRequest) }}"
                                class="min-w-0" data-status-form>

                                @csrf
                                @method('PATCH')

                                <input type="hidden" name="status" value="draft">

                                <button
                                    type="submit"
                                    data-status-submit
                                    class="flex min-h-11 w-full items-center justify-center gap-1.5 rounded-lg bg-amber-100 px-2 py-2.5 text-center text-sm font-semibold text-amber-800 transition hover:bg-amber-200">

                                    <span class="material-symbols-outlined text-base">
                                        edit_note
                                    </span>

                                    Chuyển về bản nháp
                                </button>
                            </form>
                            @endif

                        </div>
                    </div>
                    @endif
                </section>

                {{-- Người xem không phải chủ bài đăng: đề xuất và lưu ý --}}
                @unless ($isOwner)
                {{-- Sticky cả hai khối ở góc nhìn người dùng khác để luôn dễ thao tác khi cuộn --}}
                <div class="flex flex-col gap-5 lg:sticky lg:top-24 lg:self-start">

                    {{-- Đề xuất tài sản phù hợp --}}
                    @if ($rentalRequest->status === 'open')
                    <section class="rounded-2xl bg-surface-container-lowest p-5 shadow-sm">
                        <div class="flex items-center gap-3">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-secondary-container text-secondary">
                                <span class="material-symbols-outlined text-2xl">handshake</span>
                            </div>

                            <div>
                                <h2 class="font-bold text-on-surface">Bạn có tài sản phù hợp?</h2>
                                <p class="text-xs text-on-surface-variant">Gửi đề xuất đến người đăng</p>
                            </div>
                        </div>

                        <div class="mt-4 rounded-xl bg-surface-container-low p-4">
                            <p class="text-xs text-on-surface-variant">Ngân sách dự kiến / ngày</p>
                            <p class="mt-1 text-xl font-bold text-secondary">{{ $budgetText }}</p>
                        </div>

                        <p class="mt-4 text-sm leading-6 text-on-surface-variant">
                            Nếu bạn đang có tài sản phù hợp với yêu cầu, bạn có thể gửi đề xuất cho người đăng.
                        </p>

                        <a
                            href="#"
                            class="mt-4 flex w-full items-center justify-center gap-2 rounded-lg bg-primary px-4 py-3 text-sm font-semibold text-on-primary shadow-sm transition hover:bg-primary-container">
                            <span class="material-symbols-outlined text-lg">send</span>
                            Gửi đề xuất cho thuê
                        </a>

                        <p class="mt-3 text-center text-xs text-outline">
                            Chức năng gửi đề xuất sẽ được triển khai sau.
                        </p>
                    </section>
                    @endif

                    {{-- Lưu ý khi trao đổi --}}
                    <section class="rounded-2xl bg-surface-container-low p-5">
                        <div class="flex items-center gap-2 text-secondary">
                            <span class="material-symbols-outlined text-2xl">lightbulb</span>
                            <h2 class="font-bold text-on-surface">Lưu ý khi trao đổi</h2>
                        </div>

                        <ul class="mt-4 flex flex-col gap-3 text-sm leading-6 text-on-surface-variant">
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined mt-0.5 text-lg text-secondary">check_circle</span>
                                Đọc kỹ thời gian, số lượng và ngân sách người đăng mong muốn.
                            </li>

                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined mt-0.5 text-lg text-secondary">check_circle</span>
                                Trao đổi rõ tình trạng tài sản, phụ kiện và phương thức giao nhận.
                            </li>

                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined mt-0.5 text-lg text-secondary">check_circle</span>
                                Thống nhất các điều kiện thuê trước khi tiến hành giao dịch.
                            </li>
                        </ul>
                    </section>

                </div>
                @endunless
            </aside>
        </div>

        {{-- Gợi ý yêu cầu thuê cùng danh mục --}}
        <section class="mt-10">
            <div class="mb-5 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <div class="flex items-center gap-1.5 text-sm font-semibold text-secondary">
                        <span class="material-symbols-outlined text-lg">recommend</span>
                        GỢI Ý DÀNH CHO BẠN
                    </div>
                    <h2 class="mt-1 text-2xl font-bold text-on-surface">Yêu cầu thuê cùng danh mục</h2>
                    <p class="mt-1 text-sm text-on-surface-variant">
                        Các yêu cầu đang mở thuộc danh mục
                        <strong>{{ $rentalRequest->category?->name ?? 'này' }}</strong>.
                    </p>
                </div>

                <form
                    method="GET"
                    action="{{ route('rental-requests.show', $rentalRequest) }}"
                    class="flex items-center gap-2">
                    <label for="recommendation_sort" class="whitespace-nowrap text-sm text-on-surface-variant">
                        Sắp xếp:
                    </label>
                    <select
                        id="recommendation_sort"
                        name="recommendation_sort"
                        onchange="this.form.submit()"
                        class="rounded-lg border-0 bg-surface-container-low px-3 py-2 text-sm font-medium text-on-surface outline-none focus:ring-2 focus:ring-secondary">
                        <option value="latest" @selected(($recommendationSort ?? 'latest' )==='latest' )>
                            Mới đăng gần đây
                        </option>
                        <option value="oldest" @selected(($recommendationSort ?? 'latest' )==='oldest' )>
                            Đăng từ lâu
                        </option>
                    </select>
                </form>
            </div>

            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                @forelse ($relatedRequests as $item)
                <article class="flex min-w-0 flex-col overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm transition hover:shadow-md">
                    <div class="flex gap-4 p-4">
                        <a
                            href="{{ route('rental-requests.show', $item) }}"
                            class="block h-28 w-28 shrink-0 overflow-hidden rounded-lg bg-surface-container">
                            @if ($item->images->isNotEmpty())
                            <img
                                src="{{ Storage::disk('public')->url($item->images->first()->image_path) }}"
                                alt="{{ $item->title }}"
                                class="h-full w-full object-cover">
                            @else
                            <div class="flex h-full w-full items-center justify-center text-on-surface-variant">
                                <span class="material-symbols-outlined text-4xl">inventory_2</span>
                            </div>
                            @endif
                        </a>

                        <div class="flex min-w-0 flex-1 flex-col">
                            <div class="flex flex-wrap items-center gap-2 text-xs text-on-surface-variant">
                                <span>{{ $item->category?->name ?? 'Chưa phân loại' }}</span>
                                <span>·</span>
                                <span>{{ ($item->published_at ?? $item->created_at)?->diffForHumans() }}</span>
                            </div>
                            <h3 class="mt-1 line-clamp-2 font-bold text-on-surface">
                                <a href="{{ route('rental-requests.show', $item) }}" class="hover:text-secondary">
                                    {{ $item->title }}
                                </a>
                            </h3>
                            <p class="mt-1 line-clamp-2 text-xs text-on-surface-variant">
                                {{ $item->description }}
                            </p>
                            <div class="mt-auto pt-2 text-sm font-bold text-secondary">
                                @if ($item->min_daily_budget !== null || $item->max_daily_budget !== null)
                                {{ number_format((float) ($item->min_daily_budget ?? $item->max_daily_budget), 0, ',', '.') }}
                                @if ($item->max_daily_budget !== null && $item->min_daily_budget !== null && (float) $item->min_daily_budget !== (float) $item->max_daily_budget)
                                – {{ number_format((float) $item->max_daily_budget, 0, ',', '.') }}
                                @endif
                                đ/ngày
                                @else
                                Chưa nêu ngân sách
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between border-t border-surface-container px-4 py-3 text-xs text-on-surface-variant">
                        <span>{{ $item->city }}{{ $item->district ? ', ' . $item->district : '' }}</span>
                        <a
                            href="{{ route('rental-requests.show', $item) }}"
                            class="font-semibold text-secondary hover:underline">
                            Xem yêu cầu →
                        </a>
                    </div>
                </article>
                @empty
                <div class="rounded-xl bg-surface-container-lowest p-8 text-center md:col-span-2">
                    <span class="material-symbols-outlined text-4xl text-outline">search_off</span>
                    <h3 class="mt-2 font-semibold text-on-surface">Chưa có yêu cầu tương tự</h3>
                    <p class="mt-1 text-sm text-on-surface-variant">
                        Hiện chưa có yêu cầu thuê đang mở khác trong danh mục này.
                    </p>
                    <a
                        href="{{ route('rental-requests.index') }}"
                        class="mt-4 inline-flex items-center gap-2 font-semibold text-secondary hover:underline">
                        Khám phá các yêu cầu thuê khác
                        <span class="material-symbols-outlined text-base">arrow_forward</span>
                    </a>
                </div>
                @endforelse
            </div>

            @if ($relatedRequests->hasPages())
            <div class="mt-6">
                {{ $relatedRequests->links() }}
            </div>
            @endif
        </section>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Chuyển ảnh chính khi người dùng chọn ảnh thu nhỏ.
        const galleryImages = document.querySelectorAll('[data-gallery-image]');
        const galleryThumbnails = document.querySelectorAll('[data-gallery-thumbnail]');

        galleryThumbnails.forEach((thumbnail) => {
            thumbnail.addEventListener('click', () => {
                const selectedIndex = thumbnail.dataset.galleryThumbnail;

                galleryImages.forEach((image) => {
                    image.classList.toggle('hidden', image.dataset.galleryImage !== selectedIndex);
                });

                galleryThumbnails.forEach((item) => {
                    const isActive = item.dataset.galleryThumbnail === selectedIndex;
                    item.classList.toggle('border-secondary', isActive);
                    item.classList.toggle('border-transparent', !isActive);
                    item.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                });
            });
        });

        // Thông báo thao tác trạng thái tự đóng sau 5 giây.
        const toast = document.getElementById('status-success-toast');

        if (toast) {
            const countdown = document.getElementById('status-toast-countdown');
            const progress = document.getElementById('status-toast-progress');
            let remaining = Number(toast.dataset.toastDuration || 5);

            const updateToast = () => {
                if (countdown) countdown.textContent = String(remaining);
                if (progress) progress.style.width = `${(remaining / 5) * 100}%`;
            };

            updateToast();

            const timer = window.setInterval(() => {
                remaining -= 1;
                updateToast();

                if (remaining <= 0) {
                    window.clearInterval(timer);
                    toast.style.transition = 'opacity 250ms ease, transform 250ms ease';
                    toast.style.opacity = '0';
                    toast.style.transform = 'translateY(-6px)';
                    window.setTimeout(() => toast.remove(), 260);
                }
            }, 1000);
        }

        // Chặn gửi lặp khi người dùng nhấn liên tục nút đổi trạng thái.
        document.querySelectorAll('[data-status-form]').forEach((form) => {
            form.addEventListener('submit', () => {
                const button = form.querySelector('[data-status-submit]');
                if (!button) return;

                button.disabled = true;
                button.classList.add('opacity-60', 'cursor-not-allowed');
                button.setAttribute('aria-busy', 'true');
            });
        });
    });
</script>
@endsection