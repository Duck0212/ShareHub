@extends('layouts.app')

@section('content')
<main class="w-full pt-20 bg-background min-h-screen">
    <div class="flex flex-col w-full">
        <!-- Header Bar & Breadcrumb -->
        <div class="w-full bg-surface-container-low py-space-md shadow-sm">
            <div class="max-w-5xl mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-sm">
                <!-- Breadcrumb -->
                <nav class="flex items-center gap-space-xs font-label-md text-label-lg text-on-surface-variant">
                    <a class="hover:text-secondary transition-colors" href="{{ route('home') }}">Trang chủ</a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <a class="hover:text-secondary transition-colors" href="{{ route('rental-requests.my-requests') }}">Quản lý yêu cầu</a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface font-semibold">Chỉnh sửa yêu cầu</span>
                </nav>
                <!-- Page Heading -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pt-space-xs">
                    <div>
                        <span class="font-label-sm text-label-md uppercase tracking-wider text-secondary font-bold flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-secondary"></span> Bảng tin cộng đồng P2P
                        </span>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Chỉnh sửa yêu cầu thuê đồ</h1>
                        <p class="font-body-md text-body-lg text-on-surface-variant max-w-2xl mt-1">
                            Cập nhật thông tin chi tiết, thời gian hoặc ngân sách cho yêu cầu thuê tài sản của bạn.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="max-w-5xl w-full mx-auto px-margin-mobile lg:px-margin py-space-xl">
            @if ($errors->any())
            <div class="mb-5 rounded-xl border border-error/30 bg-error-container p-4 text-on-error-container">
                <p class="mb-2 font-semibold">Vui lòng kiểm tra lại thông tin:</p>
                <ul class="list-inside list-disc space-y-1 text-sm">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('rental-requests.update', $rentalRequest) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-space-lg">
                @csrf
                @method('PUT')

                <!-- SECTION 1: THÔNG TIN MÓN ĐỒ CẦN THUÊ -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-md font-bold">1</span>
                            <div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Thông tin món đồ cần thuê</h2>
                                <p class="font-body-sm text-body-md text-on-surface-variant">Tiêu đề rõ ràng giúp chủ thiết bị dễ dàng nắm bắt nhu cầu</p>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-md text-secondary bg-surface-container-low px-2.5 py-1 rounded-full font-semibold">Bắt buộc</span>
                    </div>

                    <!-- Title Input -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="title">
                            Tiêu đề yêu cầu <span class="text-error">*</span>
                        </label>
                        <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-lg focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all"
                            id="title" name="title" value="{{ old('title', $rentalRequest->title) }}" required maxlength="180" type="text" />
                        @error('title') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                    </div>

                    <!-- Category & Quantity -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
                        <div class="sm:col-span-2 flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="category_id">
                                Danh mục mong muốn <span class="text-error">*</span>
                            </label>
                            <select id="category_id" name="category_id" required
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 text-on-surface outline-none focus:ring-2 focus:ring-secondary cursor-pointer">
                                <option value="">Chọn danh mục</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id', $rentalRequest->category_id) == $category->id)>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('category_id') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="quantity">Số lượng</label>
                            <input id="quantity" name="quantity" type="number" min="1" max="999"
                                value="{{ old('quantity', $rentalRequest->quantity) }}"
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 outline-none focus:ring-2 focus:ring-secondary">
                            @error('quantity') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <!-- Detailed Description -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="description">
                            Mô tả chi tiết <span class="text-error">*</span>
                        </label>
                        <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-lg focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all leading-relaxed"
                            id="description" name="description" rows="6" required minlength="10" maxlength="10000">{{ old('description', $rentalRequest->description) }}</textarea>
                        @error('description') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror

                        <button type="button" id="btn-sample-desc" class="cursor-pointer text-sm text-secondary hover:underline self-start">
                            ✨ Chèn mẫu mô tả nhanh
                        </button>
                    </div>
                </div>

                <!-- SECTION 2: THỜI GIAN VÀ ĐỊA ĐIỂM -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-md font-bold">2</span>
                            <div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Thời gian và địa điểm nhận đồ</h2>
                                <p class="font-body-sm text-body-md text-on-surface-variant">Xác định rõ lịch trình để chủ đồ dễ lên kế hoạch</p>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-md text-secondary bg-surface-container-low px-2.5 py-1 rounded-full font-semibold">Bắt buộc</span>
                    </div>

                    <!-- Dates Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <div>
                            <label for="start_date_display" class="mb-2 block font-semibold">Ngày nhận đồ <span class="text-error">*</span></label>
                            <div class="relative flex items-center">
                                <input id="start_date_display" type="text" inputmode="numeric" maxlength="10"
                                    class="date-mask-input w-full rounded-lg bg-surface-container-low px-4 py-3 pr-10 outline-none focus:ring-2 focus:ring-secondary"
                                    data-target-date="start_date" data-picker="start_date_picker">

                                <button type="button" onclick="document.getElementById('start_date_picker').showPicker()"
                                    class="absolute right-3 text-on-surface-variant hover:text-secondary cursor-pointer transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                                </button>

                                <input id="start_date_picker" type="date" min="{{ now()->toDateString() }}" class="sr-only" tabindex="-1">
                                <input id="start_date" name="start_date" type="hidden" value="{{ old('start_date', optional($rentalRequest->start_date)->format('Y-m-d')) }}" required>
                            </div>
                            <p id="start_date_error" class="mt-1 text-sm text-error hidden font-medium"></p>
                            @error('start_date') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="end_date_display" class="mb-2 block font-semibold">Ngày hoàn trả <span class="text-error">*</span></label>
                            <div class="relative flex items-center">
                                <input id="end_date_display" type="text" inputmode="numeric" maxlength="10"
                                    class="date-mask-input w-full rounded-lg bg-surface-container-low px-4 py-3 pr-10 outline-none focus:ring-2 focus:ring-secondary"
                                    data-target-date="end_date" data-picker="end_date_picker">

                                <button type="button" onclick="document.getElementById('end_date_picker').showPicker()"
                                    class="absolute right-3 text-on-surface-variant hover:text-secondary cursor-pointer transition-colors">
                                    <span class="material-symbols-outlined text-[20px]">calendar_today</span>
                                </button>

                                <input id="end_date_picker" type="date" min="{{ now()->toDateString() }}" class="sr-only" tabindex="-1">
                                <input id="end_date" name="end_date" type="hidden" value="{{ old('end_date', optional($rentalRequest->end_date)->format('Y-m-d')) }}" required>
                            </div>
                            <p id="end_date_error" class="mt-1 text-sm text-error hidden font-medium"></p>
                            @error('end_date') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <!-- City, District & Radius -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
                        <div class="relative">
                            <label for="city" class="mb-2 block font-semibold">Tỉnh / Thành phố <span class="text-error">*</span></label>
                            <input id="city" name="city" maxlength="100" value="{{ old('city', $rentalRequest->city) }}" required autocomplete="off"
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 outline-none focus:ring-2 focus:ring-secondary">
                            <div id="city-suggestions" class="absolute z-50 left-0 right-0 mt-1 max-h-60 overflow-y-auto bg-surface-container-lowest rounded-xl shadow-lg border border-outline/10 hidden"></div>
                            @error('city') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="relative">
                            <label for="district" class="mb-2 block font-semibold">Quận / Huyện</label>
                            <input id="district" name="district" maxlength="100" value="{{ old('district', $rentalRequest->district) }}" autocomplete="off"
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 outline-none focus:ring-2 focus:ring-secondary disabled:opacity-50 disabled:cursor-not-allowed">
                            <div id="district-suggestions" class="absolute z-50 left-0 right-0 mt-1 max-h-60 overflow-y-auto bg-surface-container-lowest rounded-xl shadow-lg border border-outline/10 hidden"></div>
                            @error('district') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="location_radius" class="mb-2 block font-semibold">
                                Phạm vi tìm kiếm <span class="text-xs font-normal text-on-surface-variant">(Bán kính nhận đồ)</span>
                            </label>
                            <select id="location_radius" name="location_radius"
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 text-on-surface outline-none focus:ring-2 focus:ring-secondary cursor-pointer">
                                <option value="">Không giới hạn (Toàn quốc / Tỉnh)</option>
                                @foreach ([3,5,10,20,50] as $radius)
                                <option value="{{ $radius }}" @selected(old('location_radius', $rentalRequest->location_radius) == $radius)>Trong vòng {{ $radius }} km</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Pickup Mode -->
                    <div>
                        <label class="mb-2 block font-semibold text-on-surface">Phương thức nhận tài sản <span class="text-error">*</span></label>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 rounded-lg bg-surface-container-low p-3">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="pickup_mode" value="direct"
                                    @checked(old('pickup_mode', $rentalRequest->pickup_mode) === 'direct')
                                class="pickup-mode-radio accent-secondary cursor-pointer">
                                <span>Nhận trực tiếp</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="pickup_mode" value="ship"
                                    @checked(old('pickup_mode', $rentalRequest->pickup_mode) === 'ship')
                                class="pickup-mode-radio accent-secondary cursor-pointer">
                                <span>Đường vận chuyển</span>
                            </label>
                        </div>
                        <p id="pickup_mode_hint" class="mt-2 text-xs italic text-on-surface-variant font-medium transition-all"></p>
                    </div>
                </div>

                <!-- SECTION 3: NGÂN SÁCH DỰ KIẾN -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-md font-bold">3</span>
                            <div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Ngân sách dự kiến thuê</h2>
                                <p class="font-body-sm text-body-md text-on-surface-variant">Giúp chủ tài sản biết được mức chi phí bạn có thể đáp ứng</p>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-md text-secondary bg-surface-container-low px-2.5 py-1 rounded-full font-semibold">Tùy chọn</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md">
                        <div>
                            <label for="min_daily_budget" class="mb-2 block font-semibold">Giá thấp nhất / ngày (VNĐ)</label>
                            <input id="min_daily_budget" name="min_daily_budget" type="number" min="0" step="1000"
                                value="{{ old('min_daily_budget', $rentalRequest->min_daily_budget) }}"
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 outline-none focus:ring-2 focus:ring-secondary">
                            @error('min_daily_budget') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="max_daily_budget" class="mb-2 block font-semibold">Giá cao nhất / ngày (VNĐ)</label>
                            <input id="max_daily_budget" name="max_daily_budget" type="number" min="0" step="1000"
                                value="{{ old('max_daily_budget', $rentalRequest->max_daily_budget) }}"
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 outline-none focus:ring-2 focus:ring-secondary">
                            @error('max_daily_budget') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="total_budget" class="mb-2 block font-semibold">Tổng ngân sách trọn gói (VNĐ)</label>
                            <input id="total_budget" name="total_budget" type="number" min="0" step="1000"
                                value="{{ old('total_budget', $rentalRequest->total_budget) }}"
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 outline-none focus:ring-2 focus:ring-secondary">
                            @error('total_budget') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                    </div>
                </div>

                <!-- SECTION 4: MỤC TẢI ẢNH LÊN -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">4</span>
                            <div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Tải ảnh lên</h2>
                                <p class="font-body-lg text-body-lg text-on-surface-variant">Tải thêm tối đa 5 ảnh. Định dạng JPG, PNG hoặc WebP; tối đa 5MB mỗi ảnh.</p>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2.5 py-1 rounded-full font-semibold">Tùy chọn</span>
                    </div>

                    <!-- Khu vực kéo thả / chọn file -->
                    <label id="drop-zone" for="images" class="p-space-lg rounded-xl bg-surface-container-low flex flex-col items-center justify-center text-center cursor-pointer hover:bg-surface-container transition-colors group border-2 border-dashed border-secondary/50">
                        <div class="w-12 h-12 rounded-full bg-surface-container-lowest flex items-center justify-center text-secondary shadow-sm mb-2 group-hover:scale-110 transition-transform">
                            <span class="material-symbols-outlined text-[28px]">add_photo_alternate</span>
                        </div>
                        <p class="font-label-lg text-label-lg text-on-surface font-semibold">Nhấn để chọn ảnh hoặc kéo thả vào đây</p>
                        <p class="font-body-lg text-body-lg text-on-surface-variant mt-1">Hỗ trợ JPG, PNG, WebP (Tối đa 5MB mỗi ảnh)</p>
                        <input id="images" name="images[]" type="file" accept=".jpg,.jpeg,.png,.webp" multiple class="hidden">
                    </label>

                    <!-- Thông báo lỗi dung lượng / định dạng / giới hạn 5 ảnh -->
                    <div id="file-error-msg" class="text-sm text-error hidden font-medium"></div>

                    <!-- Khu vực hiển thị thumbnail ảnh mới chọn (đã gỡ bỏ hoàn toàn dòng chữ thừa) -->
                    <div id="image-preview-container" class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-3 pt-1"></div>

                    @error('images') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                    @error('images.*') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                </div>

                <!-- SUBMIT ACTIONS (Nút Hủy sát sang phải như đoạn mẫu) -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col-reverse gap-3 border-t border-outline/20 sm:flex-row sm:justify-end items-center">
                    <a href="{{ route('rental-requests.my-requests') }}"
                        class="rounded-lg bg-surface-container px-6 py-3 text-center font-semibold text-on-surface hover:bg-surface-container-high">Hủy</a>
                    <button type="submit"
                        class="cursor-pointer rounded-lg bg-primary px-7 py-3 font-bold text-on-primary hover:opacity-90 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-secondary-container">send</span>
                        <span>Cập nhật yêu cầu</span>
                    </button>
                </div>
            </form>

            <!-- SECTION 5: HÌNH ẢNH CÓ SẴN (NẰM Ở DƯỚI CÙNG NGOÀI FORM) -->
            <div class="mt-8 bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                <div class="flex items-center justify-between pb-space-xs">
                    <div class="flex items-center gap-space-sm">
                        <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Hình ảnh có sẵn</h2>
                    </div>
                </div>

                <div>
                    @if ($rentalRequest->images->isEmpty())
                    <p class="font-body-lg text-body-lg text-on-surface-variant italic">Bài đăng chưa có ảnh nào.</p>
                    @else
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                        @foreach ($rentalRequest->images as $image)
                        <div class="overflow-hidden rounded-xl border border-outline/20 bg-surface-container-low">
                            <img src="{{ Storage::disk('public')->url($image->image_path) }}" alt="Ảnh yêu cầu thuê"
                                class="aspect-square w-full object-cover">
                            <div class="flex items-center justify-between gap-2 p-3">
                                <span></span>
                                <form action="{{ route('rental-requests.images.destroy', [$rentalRequest, $image]) }}" method="POST"
                                    onsubmit="return confirm('Bạn có chắc muốn xóa ảnh này?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="cursor-pointer text-xs font-semibold text-error hover:underline">Xóa</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btnSampleDesc = document.getElementById('btn-sample-desc');
        if (btnSampleDesc) {
            btnSampleDesc.addEventListener('click', function() {
                const descTextarea = document.getElementById('description');
                descTextarea.value = `- Mục đích sử dụng: (Ví dụ: Đi du lịch dã ngoại / Quay chụp sự kiện cưới...).\n- Yêu cầu kỹ thuật: Hoạt động tốt, không trầy xước nặng, pin dùng ổn định suốt sự kiện.\n- Phụ kiện mong muốn: Đầy đủ dây đeo, sạc hoặc phụ kiện cơ bản đi kèm.\n- Cam kết: Sử dụng cẩn thận, bảo quản an toàn và hoàn trả đúng hạn như đã cam kết.`;
            });
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        const dateInputs = document.querySelectorAll('.date-mask-input');
        const currentYear = new Date().getFullYear();

        function validateDateRange() {
            const startDateInput = document.getElementById('start_date');
            const endDateInput = document.getElementById('end_date');
            const endDateError = document.getElementById('end_date_error');

            if (startDateInput && endDateInput && startDateInput.value && endDateInput.value) {
                const start = new Date(startDateInput.value);
                const end = new Date(endDateInput.value);

                if (end < start) {
                    endDateError.textContent = '⚠️ Ngày hoàn trả không được nhỏ hơn ngày nhận đồ.';
                    endDateError.classList.remove('hidden');
                    endDateInput.value = '';
                    return false;
                }
            }
            return true;
        }

        dateInputs.forEach(input => {
            const targetHiddenId = input.dataset.targetDate;
            const pickerId = input.dataset.picker;
            const targetHidden = document.getElementById(targetHiddenId);
            const picker = document.getElementById(pickerId);
            const errorElement = document.getElementById(targetHiddenId + '_error');

            if (targetHidden && targetHidden.value) {
                const parts = targetHidden.value.split('-');
                if (parts.length === 3) {
                    input.value = `${parts[2]}/${parts[1]}/${parts[0]}`;
                    picker.value = targetHidden.value;
                }
            }

            input.addEventListener('input', function() {
                let val = this.value.replace(/[^0-9/]/g, '');
                let parts = val.split('/');
                if (parts.length === 1 && parts[0].length === 2) val = parts[0] + '/';
                if (parts.length === 2 && parts[1].length === 2) val = parts[0] + '/' + parts[1] + '/';
                this.value = val;

                if (parts.length === 3 && parts[2].length === 4) {
                    const isoDate = `${parts[2]}-${parts[1].padStart(2, '0')}-${parts[0].padStart(2, '0')}`;
                    targetHidden.value = isoDate;
                    picker.value = isoDate;
                    validateDateRange();
                } else {
                    targetHidden.value = '';
                }
            });

            if (picker) {
                picker.addEventListener('change', function() {
                    if (this.value) {
                        const parts = this.value.split('-');
                        input.value = `${parts[2]}/${parts[1]}/${parts[0]}`;
                        targetHidden.value = this.value;
                        validateDateRange();
                    }
                });
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const provincesList = [
            "Thành phố Hà Nội", "Thành phố Hồ Chí Minh", "Thành phố Hải Phòng", "Thành phố Đà Nẵng", "Thành phố Cần Thơ", "Thành phố Huế",
            "Tỉnh An Giang", "Tỉnh Bà Rịa - Vũng Tàu", "Tỉnh Bắc Giang", "Tỉnh Bắc Kạn", "Tỉnh Bạc Liêu", "Tỉnh Bắc Ninh",
            "Tỉnh Bến Tre", "Tỉnh Bình Định", "Tỉnh Bình Dương", "Tỉnh Bình Phước", "Tỉnh Bình Thuận", "Tỉnh Cà Mau",
            "Tỉnh Cao Bằng", "Tỉnh Đắk Lắk", "Tỉnh Đắk Nông", "Tỉnh Điện Biên", "Tỉnh Đồng Nai", "Tỉnh Đồng Tháp",
            "Tỉnh Gia Lai", "Tỉnh Hà Giang", "Tỉnh Hà Nam", "Tỉnh Hà Tĩnh", "Tỉnh Hải Dương", "Tỉnh Hậu Giang",
            "Tỉnh Hòa Bình", "Tỉnh Hưng Yên", "Tỉnh Khánh Hòa", "Tỉnh Kiên Giang", "Tỉnh Kon Tum", "Tỉnh Lai Châu",
            "Tỉnh Lâm Đồng", "Tỉnh Lạng Sơn", "Tỉnh Lào Cai", "Tỉnh Long An", "Tỉnh Nam Định", "Tỉnh Nghệ An",
            "Tỉnh Ninh Bình", "Tỉnh Ninh Thuận", "Tỉnh Phú Thọ", "Tỉnh Phú Yên", "Tỉnh Quảng Bình", "Tỉnh Quảng Nam",
            "Tỉnh Quảng Ngãi", "Tỉnh Quảng Ninh", "Tỉnh Quảng Trị", "Tỉnh Sóc Trăng", "Tỉnh Sơn La", "Tỉnh Tây Ninh",
            "Tỉnh Thái Bình", "Tỉnh Thái Nguyên", "Tỉnh Thanh Hóa", "Tỉnh Tiền Giang", "Tỉnh Trà Vinh", "Tỉnh Tuyên Quang",
            "Tỉnh Vĩnh Long", "Tỉnh Vĩnh Phúc", "Tỉnh Yên Bái"
        ];

        let districtsCache = {};

        function removeVietnameseTones(str) {
            if (!str) return '';
            return str.normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .replace(/đ/g, 'd').replace(/Đ/g, 'D')
                .toLowerCase();
        }

        const cityInput = document.getElementById('city');
        const cityBox = document.getElementById('city-suggestions');
        const districtInput = document.getElementById('district');
        const districtBox = document.getElementById('district-suggestions');

        async function loadDistrictsForCity(cityName) {
            if (!cityName) return;
            let cleanCityName = cityName.replace(/^(Thành phố|Tỉnh)\s+/i, '').trim();

            if (districtsCache[cleanCityName]) {
                districtInput.removeAttribute('disabled');
                return;
            }

            try {
                const response = await fetch(`https://provinces.open-api.vn/api/p/search/?q=${encodeURIComponent(cleanCityName)}`);
                const data = await response.json();
                if (data && data.length > 0) {
                    const provinceCode = data[0].code;
                    const pDetail = await fetch(`https://provinces.open-api.vn/api/p/${provinceCode}?depth=2`);
                    const pDetailData = await pDetail.json();
                    if (pDetailData && pDetailData.districts) {
                        districtsCache[cleanCityName] = pDetailData.districts.map(d => d.name);
                        districtInput.removeAttribute('disabled');
                    }
                }
            } catch (error) {}
        }

        if (cityInput.value.trim()) {
            loadDistrictsForCity(cityInput.value.trim());
        }

        cityInput.addEventListener('input', function() {
            const keyword = removeVietnameseTones(this.value.trim());
            cityBox.innerHTML = '';
            districtInput.value = '';
            districtInput.setAttribute('disabled', 'true');

            if (!keyword) {
                cityBox.classList.add('hidden');
                return;
            }

            const matchedCities = provincesList.filter(city => removeVietnameseTones(city).includes(keyword));
            if (matchedCities.length > 0) {
                matchedCities.forEach(city => {
                    const div = document.createElement('div');
                    div.className = "px-4 py-2.5 hover:bg-surface-container cursor-pointer text-on-surface text-sm transition-colors";
                    div.textContent = city;
                    div.addEventListener('click', function() {
                        cityInput.value = city;
                        cityBox.classList.add('hidden');
                        loadDistrictsForCity(city);
                        districtInput.focus();
                    });
                    cityBox.appendChild(div);
                });
                cityBox.classList.remove('hidden');
            } else {
                cityBox.classList.add('hidden');
            }
        });

        districtInput.addEventListener('input', function() {
            const currentCity = cityInput.value.replace(/^(Thành phố|Tỉnh)\s+/i, '').trim();
            const availableDistricts = districtsCache[currentCity] || [];
            const keyword = removeVietnameseTones(this.value.trim());
            districtBox.innerHTML = '';

            if (!keyword || availableDistricts.length === 0) {
                districtBox.classList.add('hidden');
                return;
            }

            const matchedDistricts = availableDistricts.filter(dist => removeVietnameseTones(dist).includes(keyword));
            if (matchedDistricts.length > 0) {
                matchedDistricts.forEach(dist => {
                    const div = document.createElement('div');
                    div.className = "px-4 py-2.5 hover:bg-surface-container cursor-pointer text-on-surface text-sm transition-colors";
                    div.textContent = dist;
                    div.addEventListener('click', function() {
                        districtInput.value = dist;
                        districtBox.classList.add('hidden');
                    });
                    districtBox.appendChild(div);
                });
                districtBox.classList.remove('hidden');
            } else {
                districtBox.classList.add('hidden');
            }
        });

        document.addEventListener('click', function(e) {
            if (!cityInput.contains(e.target) && !cityBox.contains(e.target)) cityBox.classList.add('hidden');
            if (!districtInput.contains(e.target) && !districtBox.contains(e.target)) districtBox.classList.add('hidden');
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const dropZone = document.getElementById('drop-zone');
        const imageInput = document.getElementById('images');
        const errorDiv = document.getElementById('file-error-msg');
        const previewContainer = document.getElementById('image-preview-container');

        let dataTransfer = new DataTransfer();

        function updateFileList() {
            imageInput.files = dataTransfer.files;
            renderPreviews();
        }

        function renderPreviews() {
            previewContainer.innerHTML = '';
            const files = dataTransfer.files;

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function(e) {
                    const wrapper = document.createElement('div');
                    wrapper.className = 'relative group rounded-xl overflow-hidden border border-outline/30 bg-surface-container-low aspect-square flex items-center justify-center';

                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'w-full h-full object-cover';
                    wrapper.appendChild(img);

                    const deleteBtn = document.createElement('button');
                    deleteBtn.type = 'button';
                    deleteBtn.className = 'absolute top-1 right-1 bg-error text-on-error rounded-full p-1 opacity-80 hover:opacity-100 transition-opacity shadow cursor-pointer';
                    deleteBtn.innerHTML = `<svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>`;

                    deleteBtn.addEventListener('click', function() {
                        const dt = new DataTransfer();
                        for (let j = 0; j < files.length; j++) {
                            if (j !== i) dt.items.add(files[j]);
                        }
                        dataTransfer = dt;
                        updateFileList();
                    });
                    wrapper.appendChild(deleteBtn);
                    previewContainer.appendChild(wrapper);
                }
                reader.readAsDataURL(file);
            }
        }

        function handleFiles(newFiles) {
            errorDiv.textContent = '';
            errorDiv.classList.add('hidden');

            let errorMessages = [];
            let invalidTypeFiles = [];
            let oversizedFiles = [];
            let limitExceeded = false;

            const maxSize = 5 * 1024 * 1024; // 5MB
            const allowedTypes = ['image/jpeg', 'image/png', 'image/webp'];

            for (let i = 0; i < newFiles.length; i++) {
                const file = newFiles[i];

                if (!allowedTypes.includes(file.type)) {
                    invalidTypeFiles.push(file.name);
                    continue;
                }

                if (file.size > maxSize) {
                    oversizedFiles.push(file.name);
                    continue;
                }

                if (dataTransfer.files.length >= 5) {
                    limitExceeded = true;
                    break;
                }

                dataTransfer.items.add(file);
            }

            if (invalidTypeFiles.length > 0) {
                errorMessages.push(`⚠️ Các file không phải định dạng ảnh hợp lệ (JPG, PNG, WebP): ${invalidTypeFiles.join(', ')}`);
            }
            if (oversizedFiles.length > 0) {
                errorMessages.push(`⚠️ Các ảnh vượt quá dung lượng tối đa 5MB: ${oversizedFiles.join(', ')}`);
            }
            if (limitExceeded) {
                errorMessages.push(`⚠️ Hệ thống giới hạn tối đa 5 ảnh. Các ảnh dư thừa đã bị bỏ qua.`);
            }

            if (errorMessages.length > 0) {
                errorDiv.innerHTML = errorMessages.join('<br>');
                errorDiv.classList.remove('hidden');
            }

            updateFileList();
        }

        if (imageInput) {
            imageInput.addEventListener('change', function(e) {
                handleFiles(e.target.files);
            });
        }

        if (dropZone) {
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                }, false);
            });
            dropZone.addEventListener('drop', function(e) {
                handleFiles(e.dataTransfer.files);
            }, false);
        }
    });
</script>
@endsection