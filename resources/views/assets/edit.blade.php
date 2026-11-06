@extends('layouts.app')

@section('content')
<main class="w-full pt-20 bg-background min-h-screen">
    <div class="flex flex-col w-full">
        <!-- Header Bar & Breadcrumb -->
        <div class="w-full bg-surface-container-low py-space-md shadow-sm">
            <div class="max-w-5xl mx-auto px-margin-mobile lg:px-margin flex flex-col gap-space-sm">
                <!-- Breadcrumb -->
                <div class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-lg">
                    <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('home') }}">
                        <span class="material-symbols-outlined text-[16px]">home</span>
                        Trang chủ
                    </a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <a class="hover:text-primary transition-colors flex items-center gap-1" href="{{ route('assets.my-assets') }}">
                        Tài sản của tôi
                    </a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface font-semibold">Chỉnh sửa tài sản</span>
                </div>
                <!-- Page Heading -->
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-md pt-space-xs">
                    <div>
                        <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-bold flex items-center gap-1.5 mb-1">
                            <span class="w-2 h-2 rounded-full bg-secondary"></span> Quản lý & Cập nhật tin đăng
                        </span>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Chỉnh sửa tài sản</h1>
                        <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl mt-1">
                            Cập nhật thông tin và hình ảnh mới nhất cho tin cho thuê của bạn.
                        </p>
                    </div>
                    <div class="flex items-center gap-space-sm self-start md:self-auto bg-surface-container-lowest px-space-md py-2 rounded-xl shadow-sm">
                        <span class="material-symbols-outlined text-secondary text-[22px]">verified_user</span>
                        <div class="flex flex-col">
                            <span class="font-label-sm text-label-sm text-on-surface font-semibold">Bảo hộ Escrow Shield</span>
                            <span class="font-body-lg text-body-lg text-secondary">Ký quỹ an toàn 100%</span>
                        </div>
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

            <form action="{{ route('assets.update', $asset) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-space-lg">
                @csrf
                @method('PUT')

                <!-- SECTION 1: THÔNG TIN CƠ BẢN -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">1</span>
                            <div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Thông tin cơ bản</h2>
                                <p class="font-body-lg text-body-lg text-on-surface-variant">Tên chuẩn xác giúp người thuê tìm thấy thiết bị nhanh hơn</p>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2.5 py-1 rounded-full font-semibold">Bắt buộc</span>
                    </div>

                    <!-- Title Input -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="title">
                            Tên tài sản <span class="text-error">*</span>
                        </label>
                        <input class="w-full px-space-md py-3 rounded-lg bg-surface-container-low text-on-surface font-body-lg text-body-lg focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all"
                            id="title" name="title" value="{{ old('title', $asset->title) }}" required maxlength="180"
                            placeholder="Ví dụ: Máy ảnh Sony Alpha A7 IV" type="text" />
                        @error('title') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                    </div>

                    <!-- Category & Condition -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="category_id">
                                Danh mục tài sản <span class="text-error">*</span>
                            </label>
                            <select id="category_id" name="category_id" required
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 text-on-surface font-body-lg text-body-lg outline-none focus:ring-2 focus:ring-secondary">
                                <option value="">Chọn danh mục</option>
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id', $asset->category_id) == $category->id)>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            </select>
                            @error('category_id') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>

                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="condition">
                                Tình trạng thiết bị thực tế <span class="text-error">*</span>
                            </label>
                            <select id="condition" name="condition" required
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 text-on-surface font-body-lg text-body-lg outline-none focus:ring-2 focus:ring-secondary">
                                <option value="" disabled>-- Chọn tình trạng tài sản --</option>
                                <option value="new" @selected(old('condition', $asset->condition) === 'new')>Mới (100%, nguyên hộp)</option>
                                <option value="like_new" @selected(old('condition', $asset->condition) === 'like_new')>Như mới (99%, ít sử dụng)</option>
                                <option value="good" @selected(old('condition', $asset->condition) === 'good')>Tốt (Hoạt động bình thường)</option>
                                <option value="fair" @selected(old('condition', $asset->condition) === 'fair')>Đã qua sử dụng (Có trầy xước nhẹ)</option>
                            </select>
                            @error('condition') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <!-- Brand & Model Inputs -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="brand">Thương hiệu</label>
                            <input class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-lg text-body-lg focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all"
                                id="brand" name="brand" value="{{ old('brand', $asset->brand) }}" maxlength="120" placeholder="Ví dụ: Sony, Canon, Apple" type="text" />
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="model">Model / Dòng máy</label>
                            <input class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-lg text-body-lg focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all"
                                id="model" name="model" value="{{ old('model', $asset->model) }}" maxlength="160" placeholder="Ví dụ: Alpha A7 IV" type="text" />
                        </div>
                    </div>

                    <!-- Detailed Description -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="description">
                            Mô tả chi tiết <span class="text-error">*</span>
                        </label>
                        <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-lg text-body-lg focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all leading-relaxed"
                            id="description" name="description" rows="6" required minlength="20" maxlength="10000"
                            placeholder="Gợi ý nội dung mô tả:
- Tình trạng thực tế (ngoại hình, số lần sử dụng...)
- Các tính năng nổi bật hoặc thông số kỹ thuật chính
- Phụ kiện đi kèm (nếu có)
- Lưu ý hoặc quy định riêng khi sử dụng tài sản này...">{{ old('description', $asset->description) }}</textarea>
                        @error('description') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        <button type="button" id="btn-sample-desc" class="cursor-pointer text-sm text-secondary hover:underline self-start">
                            ✨ Chèn mẫu mô tả nhanh
                        </button>
                    </div>

                    <!-- Accessories -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="accessories">Phụ kiện đi kèm</label>
                        <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-lg text-body-lg focus:bg-surface-container-lowest focus:shadow-[0_0_0_2px_#006a61] outline-none transition-all"
                            id="accessories" name="accessories" rows="3" placeholder="Liệt kê phụ kiện, số lượng, tình trạng...">{{ old('accessories', $asset->accessories) }}</textarea>
                    </div>
                </div>

                <!-- SECTION 2: GIÁ THUÊ & ĐỊA ĐIỂM -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">2</span>
                            <div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Giá thuê và địa điểm</h2>
                                <p class="font-body-lg text-body-lg text-on-surface-variant">Minh bạch giá và khu vực nhận máy thuận tiện</p>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2.5 py-1 rounded-full font-semibold">Bắt buộc</span>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <div>
                            <label for="price_per_day" class="mb-2 block font-semibold">Giá thuê mỗi ngày (VNĐ) <span class="text-error">*</span></label>
                            <input id="price_per_day" name="price_per_day" type="number" min="1000" step="1000"
                                value="{{ old('price_per_day', $asset->price_per_day) }}" required
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 font-body-lg text-body-lg outline-none focus:ring-2 focus:ring-secondary">
                            @error('price_per_day') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="deposit" class="mb-2 block font-semibold">Tiền đặt cọc (VNĐ)</label>
                            <input id="deposit" name="deposit" type="number" min="0" step="1000"
                                value="{{ old('deposit', $asset->deposit) }}"
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 font-body-lg text-body-lg outline-none focus:ring-2 focus:ring-secondary">
                            @error('deposit') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <!-- Chọn Tỉnh / Thành phố và Quận / Huyện (Tự động sync API hành chính) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                        <div>
                            <label for="city_select" class="mb-2 block font-semibold">Tỉnh / Thành phố <span class="text-error">*</span></label>
                            <select id="city_select" required
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 text-on-surface font-body-lg text-body-lg outline-none focus:ring-2 focus:ring-secondary">
                                <option value="">-- Chọn Tỉnh / Thành phố --</option>
                            </select>
                            <input type="hidden" id="city" name="city" value="{{ old('city', $asset->city) }}">
                            @error('city') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="district_select" class="mb-2 block font-semibold">Quận / Huyện <span class="text-error">*</span></label>
                            <select id="district_select" disabled required
                                class="w-full rounded-lg bg-surface-container-low px-4 py-3 text-on-surface font-body-lg text-body-lg outline-none focus:ring-2 focus:ring-secondary disabled:opacity-50">
                                <option value="">-- Chọn Quận / Huyện --</option>
                            </select>
                            <input type="hidden" id="district" name="district" value="{{ old('district', $asset->district) }}">
                            @error('district') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                        </div>
                    </div>

                    <div>
                        <label for="pickup_address" class="mb-2 block font-semibold">Địa chỉ chi tiết (Số nhà, đường, phường/xã) <span class="text-error">*</span></label>
                        <input id="pickup_address" name="pickup_address" value="{{ old('pickup_address', $asset->pickup_address) }}" required maxlength="255"
                            class="w-full rounded-lg bg-surface-container-low px-4 py-3 font-body-lg text-body-lg outline-none focus:ring-2 focus:ring-secondary"
                            placeholder="Ví dụ: 123 Đường Nguyễn Huệ, Phường Bến Nghé">
                        @error('pickup_address') <p class="mt-1 text-sm text-error">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="rental_rules" class="mb-2 block font-semibold">Quy định sử dụng</label>
                        <textarea id="rental_rules" name="rental_rules" rows="3"
                            class="w-full rounded-lg bg-surface-container-low px-4 py-3 font-body-lg text-body-lg outline-none focus:ring-2 focus:ring-secondary"
                            placeholder="Các quy định người thuê cần tuân thủ...">{{ old('rental_rules', $asset->rental_rules) }}</textarea>
                    </div>
                </div>

                <!-- SECTION 3: THÊM ẢNH MỚI -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col gap-space-md">
                    <div class="flex items-center justify-between pb-space-xs">
                        <div class="flex items-center gap-space-sm">
                            <span class="w-8 h-8 rounded-lg bg-primary text-on-primary flex items-center justify-center font-label-sm text-label-sm font-bold">3</span>
                            <div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Tải thêm ảnh mới</h2>
                                <p class="font-body-lg text-body-lg text-on-surface-variant">Có thể tải thêm tối đa 10 ảnh trong một lần. Định dạng JPG, PNG hoặc WebP; tối đa 5MB mỗi ảnh.</p>
                            </div>
                        </div>
                        <span class="font-label-sm text-label-sm text-secondary bg-surface-container-low px-2.5 py-1 rounded-full font-semibold">Bắt buộc</span>
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

                    <!-- Thông báo lỗi dung lượng ảnh -->
                    <div id="file-error-msg" class="text-sm text-error hidden font-medium"></div>

                    <!-- Khu vực hiển thị danh sách ảnh mới tải lên thu nhỏ (Thumbnail Preview) -->
                    <div id="image-preview-container" class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-3 pt-2"></div>

                    @error('images') <p class="text-sm text-error">{{ $message }}</p> @enderror
                    @error('images.*') <p class="text-sm text-error">{{ $message }}</p> @enderror
                </div>

                <!-- SUBMIT BUTTONS -->
                <div class="bg-surface-container-lowest p-space-md sm:p-space-lg rounded-xl shadow-sm flex flex-col-reverse gap-3 border-t border-outline/20 sm:flex-row sm:justify-end">
                    <a href="{{ route('assets.my-assets') }}"
                        class="rounded-lg bg-surface-container px-6 py-3 text-center font-semibold text-on-surface hover:bg-surface-container-high">Hủy</a>
                    <button type="submit"
                        class="cursor-pointer rounded-lg bg-primary px-7 py-3 font-bold text-on-primary hover:opacity-90 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[18px] text-secondary-container">save</span>
                        <span>Lưu thay đổi</span>
                    </button>
                </div>
            </form>

            <!-- SECTION 4: QUẢN LÝ ẢNH HIỆN TẠI (Giữ nguyên tính năng đặc thù của trang Edit) -->
            <section class="mt-8 rounded-2xl bg-surface-container-lowest p-space-md sm:p-space-lg shadow-sm">
                <h2 class="mb-4 text-xl font-bold text-on-surface">Ảnh hiện tại của tài sản</h2>
                @if ($asset->images->isEmpty())
                <p class="font-body-lg text-body-lg text-on-surface-variant">Tài sản chưa có ảnh nào. Hãy tải ảnh mới ở biểu mẫu phía trên.</p>
                @else
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                    @foreach ($asset->images as $image)
                    <div class="overflow-hidden rounded-xl border border-outline/20 bg-surface-container-low">
                        <img src="{{ Storage::disk('public')->url($image->image_path) }}" alt="Ảnh tài sản"
                            class="aspect-square w-full object-cover">
                        <div class="flex items-center justify-between gap-2 p-3">
                            @if ($image->is_primary)
                            <span class="text-xs font-bold text-secondary bg-surface-container px-2 py-0.5 rounded">Ảnh đại diện</span>
                            @else
                            <span class="text-xs text-on-surface-variant">Ảnh phụ</span>
                            @endif
                            <form action="{{ route('assets.images.destroy', [$asset, $image]) }}" method="POST"
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
            </section>
        </div>
    </div>
</main>

<script>
    // Chèn mẫu mô tả nhanh
    document.getElementById('btn-sample-desc').addEventListener('click', function() {
        const descTextarea = document.getElementById('description');
        descTextarea.value = `- Tình trạng: Thiết bị hoạt động hoàn hảo, ngoại hình mới khoảng 95%.\n- Thông số chính: (Nhập thông số kỹ thuật ở đây).\n- Phụ kiện: Đầy đủ cáp sạc, phụ kiện kèm theo như hình.\n- Cam kết: Hàng chính hãng, đúng mô tả.`;
    });

    // API Tỉnh / Thành phố & Quận / Huyện (Tự động đồng bộ giá trị cũ từ cơ sở dữ liệu)
    document.addEventListener('DOMContentLoaded', function() {
        const citySelect = document.getElementById('city_select');
        const districtSelect = document.getElementById('district_select');
        const cityInput = document.getElementById('city');
        const districtInput = document.getElementById('district');

        const oldCity = "{{ old('city', $asset->city) }}";
        const oldDistrict = "{{ old('district', $asset->district) }}";

        const API_URL = 'https://provinces.open-api.vn/api/?depth=2';

        fetch(API_URL)
            .then(response => response.json())
            .then(data => {
                window.provinceData = data;

                data.forEach(province => {
                    const option = document.createElement('option');
                    option.value = province.code;
                    option.textContent = province.name;
                    option.dataset.name = province.name;

                    if (oldCity && province.name === oldCity) {
                        option.selected = true;
                    }
                    citySelect.appendChild(option);
                });

                if (citySelect.value) {
                    // Tìm code của tỉnh cũ để load đúng quận huyện
                    const matchedProvince = data.find(p => p.name === oldCity);
                    if (matchedProvince) {
                        citySelect.value = matchedProvince.code;
                        loadDistricts(matchedProvince.code, oldDistrict);
                    }
                }
            })
            .catch(error => console.error('Lỗi tải danh sách tỉnh thành:', error));

        citySelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            cityInput.value = selectedOption.dataset.name || '';

            const provinceCode = this.value;
            districtSelect.innerHTML = '<option value="">-- Chọn Quận / Huyện --</option>';
            districtInput.value = '';

            if (provinceCode) {
                loadDistricts(provinceCode);
            } else {
                districtSelect.disabled = true;
            }
        });

        function loadDistricts(provinceCode, selectedDistrictName = '') {
            districtSelect.disabled = false;
            districtSelect.innerHTML = '<option value="">-- Chọn Quận / Huyện --</option>';

            const province = window.provinceData.find(p => p.code == provinceCode);
            if (province && province.districts) {
                province.districts.forEach(district => {
                    const option = document.createElement('option');
                    option.value = district.code;
                    option.textContent = district.name;
                    option.dataset.name = district.name;

                    if (selectedDistrictName && district.name === selectedDistrictName) {
                        option.selected = true;
                        districtInput.value = district.name;
                    }
                    districtSelect.appendChild(option);
                });
            }
        }

        districtSelect.addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            districtInput.value = selectedOption.dataset.name || '';
        });
    });

    // Kéo thả và chọn file ảnh mới với DataTransfer
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

            if (files.length > 0) {
                errorDiv.textContent = '';
                errorDiv.classList.add('hidden');
            }

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
                            if (j !== i) {
                                dt.items.add(files[j]);
                            }
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

            const maxSize = 5 * 1024 * 1024;
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

                if (dataTransfer.files.length >= 10) {
                    limitExceeded = true;
                    break;
                }

                dataTransfer.items.add(file);
            }

            if (invalidTypeFiles.length > 0) {
                errorMessages.push(`⚠️ Các file không phải định dạng ảnh hợp lệ (JPG, PNG, WebP): ${invalidTypeFiles.join(', ')}`);
            }
            if (oversizedFiles.length > 0) {
                errorMessages.push(`⚠️ Các ảnh vượt quá dung lượng 5MB: ${oversizedFiles.join(', ')}`);
            }
            if (limitExceeded) {
                errorMessages.push(`⚠️ Hệ thống chỉ cho phép tải tối đa 10 ảnh. Các ảnh dư thừa đã bị bỏ qua.`);
            }

            if (errorMessages.length > 0) {
                errorDiv.innerHTML = errorMessages.join('<br>');
                errorDiv.classList.remove('hidden');
            }

            updateFileList();
        }

        imageInput.addEventListener('change', function(e) {
            handleFiles(e.target.files);
        });

        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, function(e) {
                e.preventDefault();
                e.stopPropagation();
            }, false);
        });

        ['dragenter', 'dragover'].forEach(eventName => {
            dropZone.addEventListener(eventName, function() {
                dropZone.classList.add('border-primary', 'bg-surface-container');
            }, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropZone.addEventListener(eventName, function() {
                dropZone.classList.remove('border-primary', 'bg-surface-container');
            }, false);
        });

        dropZone.addEventListener('drop', function(e) {
            handleFiles(e.dataTransfer.files);
        }, false);
    });
</script>
@endsection