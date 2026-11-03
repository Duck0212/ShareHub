@extends('layouts.app')

@section('content')
<main class="w-full pt-16 bg-surface min-h-[calc(100vh-16rem)]">
    <div class="flex flex-col w-full">
        <div class="max-w-7xl mx-auto px-gutter py-space-lg w-full">

            <!-- Breadcrumb & Top Header -->
            <div class="flex flex-col gap-space-xs mb-space-lg">
                <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md mb-space-md">
                    <a class="hover:text-secondary transition-colors" href="{{ route('home') }}">Trang chủ</a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <a class="hover:text-secondary transition-colors" href="{{ route('my.profile') }}">Hồ sơ cá nhân {{ auth()->user()->username ? "(@".auth()->user()->username.")" : '' }}</a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface font-semibold">Chỉnh sửa hồ sơ cá nhân</span>
                </nav>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-space-sm">
                    <div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Chỉnh sửa hồ sơ cá nhân</h1>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Quản lý hình ảnh đại diện, thông tin công khai và tùy chọn hồ sơ của bạn.</p>
                    </div>
                </div>
            </div>

            <!-- FORM GỬI DỮ LIỆU CHÍNH THỨC -->
            <form action="{{ route('my.profile.update') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-space-lg w-full">
                @csrf
                @method('PUT')
                <!-- Bổ sung input ẩn để xử lý gỡ avatar gửi lên Controller -->
                <input type="hidden" name="remove_avatar" id="remove-avatar-input" value="0">

                <!-- SECTION 1: Cấu hình Ảnh Bìa (Cover Banner) -->
                <div class="bg-surface-container-lowest rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)] overflow-hidden">
                    <div class="p-space-lg border-b border-surface-container-low">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-secondary text-[22px]">landscape</span>
                            <div>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Ảnh bìa trang cá nhân</h2>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Hình ảnh bao quát phía trên hồ sơ. Khuyến nghị tỉ lệ rộng (16:9 hoặc 3:1).</p>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Định dạng JPG, PNG hoặc WebP. Tối đa 5MB.</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-space-lg flex flex-col gap-space-md">
                        <div class="relative h-48 md:h-100 w-full bg-surface-container-high rounded-xl overflow-hidden group shadow-inner">
                            @if(!empty($user->cover_image))
                            <img src="{{ asset('storage/' . $user->cover_image) }}" alt="Cover Image" class="absolute inset-0 w-full h-full object-cover" id="cover-display-img" />
                            @else
                            <img src="{{ asset('imgs/default-cover.png') }}" alt="Default Cover" class="absolute inset-0 w-full h-full object-cover" id="cover-display-img" />
                            @endif
                            <div class="absolute inset-0 bg-black/10"></div>

                            <!-- Nút Đổi ảnh bìa -->
                            <label class="absolute bottom-4 right-4 bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface font-label-md text-label-md px-4 py-2 rounded-lg shadow-md cursor-pointer flex items-center gap-2 transition-all active:scale-95">
                                <span class="material-symbols-outlined text-[18px]">photo_camera</span>
                                <span>Tải ảnh bìa mới</span>
                                <input accept="image/*" class="hidden" id="cover-file-input" name="cover_image" type="file" />
                            </label>
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: Hình Ảnh Nhận Diện (Avatar) -->
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]">
                    <div class="flex items-center gap-2 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[22px]">badge</span>
                        <div>
                            <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Hình ảnh nhận diện (Ảnh đại diện)</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Ảnh đại diện rõ mặt giúp tăng 78% tỷ lệ chấp nhận yêu cầu thuê tài sản.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-md items-center p-space-md bg-surface rounded-xl border border-surface-container">
                        <div class="lg:col-span-6 flex flex-col sm:flex-row items-center gap-space-md">
                            <div class="relative shrink-0">
                                <img alt="Avatar thumbnail" class="w-24 h-24 rounded-full object-cover shadow-md ring-4 ring-surface-container-lowest" id="form-avatar-display" src="{{ !empty($user->avatar) ? asset('storage/' . $user->avatar) : asset('imgs/default-avatar.png') }}" />
                            </div>

                            <div class="flex-1 flex flex-col gap-1.5 text-center sm:text-left">
                                <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2">
                                    <label class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-md text-label-md px-space-md py-2 rounded-lg cursor-pointer transition-colors inline-flex items-center gap-1.5 shadow-sm">
                                        <span class="material-symbols-outlined text-[18px]">upload</span>
                                        <span>Tải ảnh đại diện</span>
                                        <input accept="image/*" class="hidden" id="avatar-input-btn" name="avatar" type="file" />
                                    </label>

                                    <button class="cursor-pointer bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md px-3 py-2 rounded-lg transition-colors inline-flex items-center gap-1"
                                        id="reset-avatar-btn"
                                        type="button"
                                        style="{{ empty($user->avatar) ? 'display: none;' : '' }}">
                                        <span class="material-symbols-outlined text-[18px] text-error">delete_outline</span>
                                        <span>Gỡ</span>
                                    </button>
                                </div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">JPG, PNG hoặc WebP. Tối đa 5MB.</span>
                            </div>
                        </div>

                        <div class="lg:col-span-6 flex items-start gap-3 p-3.5 bg-surface-container-low rounded-xl border border-surface-container-high">
                            <span class="material-symbols-outlined text-secondary text-[20px] mt-0.5">lightbulb</span>
                            <div class="flex flex-col text-on-surface">
                                <span class="font-label-md text-label-md font-semibold">Tiêu chuẩn ảnh chân dung ShareHub</span>
                                <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">
                                    Ảnh nên chụp chính diện, rõ khuôn mặt, không đeo kính râm để dễ dàng nhận diện khi giao nhận thiết bị trực tiếp.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 3: Thông Tin Cơ Bản -->
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]">
                    <div class="flex items-center gap-2 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[22px]">account_circle</span>
                        <div>
                            <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Thông tin cơ bản</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Tên hiển thị công khai và cách người khác tìm thấy bạn trên ShareHub.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <!-- Họ và Tên -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-medium" for="input-fullname">
                                <span>Họ và tên hiển thị <span class="text-error">*</span></span>
                            </label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px]">person</span>
                                <input class="w-full pl-9 pr-3 py-2 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all @error('name') ring-2 ring-error @enderror" id="input-fullname" name="name" placeholder="Nhập tên của bạn" type="text" value="{{ old('name', $user->name) }}" required />
                            </div>
                            @error('name')
                            <span class="font-label-sm text-label-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Username / Handle -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-medium" for="input-username">
                                <span>Tên định danh / Đường dẫn hồ sơ <span class="text-error">*</span></span>
                            </label>
                            <div class="flex items-center bg-surface rounded-lg overflow-hidden focus-within:ring-2 focus-within:ring-secondary/40 @error('username') ring-2 ring-error @enderror">
                                <span class="pl-3 pr-1 py-2 font-body-sm text-body-sm text-on-surface-variant select-none bg-surface-container-low">ShareHub.vn/@</span>
                                <input class="w-full px-2 py-2 bg-surface text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none" id="input-username" name="username" placeholder="username" type="text" value="{{ old('username', $user->username) }}" required />
                            </div>
                            @error('username')
                            <span class="font-label-sm text-label-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Bio Textarea -->
                        <div class="md:col-span-2 flex flex-col gap-1.5">
                            <div class="flex items-center justify-between">
                                <label class="font-label-lg text-label-lg text-on-surface font-medium" for="input-bio">
                                    Giới thiệu bản thân &amp; Triết lý chia sẻ
                                </label>
                                <span class="font-label-sm text-label-sm text-on-surface-variant font-mono" id="bio-counter">{{ strlen(old('bio', $user->bio ?? '')) }}/300</span>
                            </div>
                            <textarea class="w-full p-3 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all resize-none @error('bio') ring-2 ring-error @enderror" id="input-bio" name="bio" maxlength="300" placeholder="Chia sẻ về sở thích, cách bạn bảo quản đồ dùng..." rows="3">{{ old('bio', $user->bio) }}</textarea>
                            @error('bio')
                            <span class="font-label-sm text-label-sm text-error">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Tags of Interest -->
                        <div class="md:col-span-2 flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-medium flex items-center justify-between" for="input-tags">
                                <span>Thẻ sở thích / Lĩnh vực quan tâm</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Tối đa 5 thẻ (phân cách bằng dấu phẩy)</span>
                            </label>
                            <div class="relative flex items-center">
                                <span class="material-symbols-outlined absolute left-3 text-on-surface-variant text-[18px]">tag</span>
                                <input class="w-full pl-9 pr-3 py-2 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all" id="input-tags" name="tags" placeholder="NhiepAnhSony, DoCamTrai..." type="text" value="{{ old('tags', is_array($user->tags) ? implode(', ', $user->tags) : $user->tags) }}" />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 4: Khu vực hoạt động -->
                <div class="bg-surface-container-lowest p-space-lg rounded-xl shadow-[0_1px_3px_0_rgba(15,23,42,0.05)]">
                    <div class="flex items-center gap-2 mb-space-md">
                        <span class="material-symbols-outlined text-secondary text-[22px]">local_shipping</span>
                        <div>
                            <h2 class="font-headline-sm text-headline-sm text-on-surface font-semibold">Khu vực hoạt động</h2>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">Địa bàn hoạt động để người thuê ước tính khoảng cách di chuyển hoặc phí vận chuyển.</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                        <!-- Tỉnh / Thành phố -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-medium" for="select-city">Tỉnh / Thành phố</label>
                            <select class="w-full px-3 py-2 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all" id="select-city" name="city">
                                <option value="">Chọn tỉnh / thành phố</option>
                            </select>
                        </div>
                        <!-- Quận / Huyện -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-lg text-label-lg text-on-surface font-medium" for="select-district">Quận / Huyện</label>
                            <select class="w-full px-3 py-2 bg-surface rounded-lg text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest focus:outline-none focus:ring-2 focus:ring-secondary/40 transition-all" id="select-district" name="district">
                                <option value="">Chọn quận / huyện</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Sticky Action Bar -->
                <div class="sticky bottom-6 z-40 bg-surface-container-lowest p-space-md rounded-xl shadow-[0_10px_25px_-5px_rgba(11,28,48,0.12)] border border-surface-container-high flex flex-col sm:flex-row items-center justify-between gap-space-sm">
                    <div class="flex items-center gap-2 text-on-surface-variant font-body-sm text-body-sm text-center sm:text-left">
                        <span class="material-symbols-outlined text-[18px] text-secondary">history</span>
                        <span>Cập nhật mới nhất trực tuyến</span>
                    </div>
                    <div class="flex items-center gap-3 w-full sm:w-auto">
                        <button class="w-full sm:w-auto px-space-md py-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg transition-colors cursor-pointer" id="btn-cancel" type="button">
                            Hủy bỏ
                        </button>
                        <button class="w-full sm:w-auto px-space-lg py-2.5 rounded-lg bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg flex items-center justify-center gap-2 shadow-sm transition-all cursor-pointer" id="btn-save" type="submit">
                            <span class="material-symbols-outlined text-[18px]">save</span>
                            <span>Lưu thay đổi</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript Xử Lý Chọn Ảnh & Tương Tác Giao Diện -->
    <script>
        (function() {
            const inputBio = document.getElementById('input-bio');
            const bioCounter = document.getElementById('bio-counter');
            const formAvatarDisplay = document.getElementById('form-avatar-display');
            const avatarInputBtn = document.getElementById('avatar-input-btn');
            const coverFileInput = document.getElementById('cover-file-input');
            const coverDisplayImg = document.getElementById('cover-display-img');
            const resetAvatarBtn = document.getElementById('reset-avatar-btn');
            const removeAvatarInput = document.getElementById('remove-avatar-input');
            const btnCancel = document.getElementById('btn-cancel');

            const defaultAvatarSrc = "{{ asset('imgs/default-avatar.png') }}";
            const MAX_FILE_SIZE = 5 * 1024 * 1024; // Giới hạn 5MB

            // 1. Đếm ký tự Bio
            if (inputBio && bioCounter) {
                inputBio.addEventListener('input', (e) => {
                    bioCounter.textContent = e.target.value.length + '/300';
                });
            }

            // 2. Kiểm tra và đọc file ảnh tải lên chung (Có chặn định dạng & dung lượng > 5MB)
            function handleImageSelection(file, targetImg, fileInput = null) {
                if (!file || !targetImg) return;

                // Kiểm tra định dạng ảnh
                if (!['image/jpeg', 'image/png', 'image/webp'].includes(file.type)) {
                    Swal.fire({
                        title: 'Sai định dạng ảnh!',
                        text: 'Vui lòng chọn tệp ảnh có định dạng JPG, PNG hoặc WebP.',
                        icon: 'warning',
                        confirmButtonColor: '#006a61',
                        confirmButtonText: 'Đã hiểu'
                    });
                    if (fileInput) fileInput.value = '';
                    return;
                }

                // Kiểm tra dung lượng tối đa 5MB
                if (file.size > MAX_FILE_SIZE) {
                    Swal.fire({
                        title: 'Ảnh vượt quá dung lượng!',
                        text: 'Dung lượng ảnh không được vượt quá 5MB. Vui lòng chọn ảnh nhỏ hơn.',
                        icon: 'error',
                        confirmButtonColor: '#006a61',
                        confirmButtonText: 'Đã hiểu'
                    });
                    if (fileInput) fileInput.value = '';
                    return;
                }

                const reader = new FileReader();
                reader.onload = function(e) {
                    targetImg.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }

            // Chọn Avatar mới
            if (avatarInputBtn) {
                avatarInputBtn.addEventListener('change', (e) => {
                    const file = e.target.files[0];
                    if (file) {
                        handleImageSelection(file, formAvatarDisplay, avatarInputBtn);
                        if (resetAvatarBtn) {
                            resetAvatarBtn.style.display = 'inline-flex';
                        }
                        if (removeAvatarInput) {
                            removeAvatarInput.value = '0'; // Hủy lệnh gỡ nếu chọn ảnh mới
                        }
                    }
                });
            }

            // Chọn Ảnh bìa mới
            if (coverFileInput) {
                coverFileInput.addEventListener('change', (e) => {
                    const file = e.target.files[0];
                    if (file) {
                        handleImageSelection(file, coverDisplayImg, coverFileInput);
                    }
                });
            }

            // Reset / Gỡ Avatar kèm SweetAlert2
            if (resetAvatarBtn) {
                resetAvatarBtn.addEventListener('click', (e) => {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Gỡ ảnh đại diện?',
                        text: "Hành động này sẽ xóa ảnh hiện tại khi bạn bấm Lưu thay đổi!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#006a61',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Đồng ý gỡ',
                        cancelButtonText: 'Hủy bỏ'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            if (formAvatarDisplay) formAvatarDisplay.src = defaultAvatarSrc;
                            if (avatarInputBtn) avatarInputBtn.value = '';
                            if (removeAvatarInput) removeAvatarInput.value = '1'; // Bật cờ xóa avatar trong DB
                            resetAvatarBtn.style.display = 'none';

                            Swal.fire('Đã gỡ!', 'Ảnh đại diện đã được gỡ trên giao diện.', 'success');
                        }
                    });
                });
            }

            // Nút Hủy bỏ (Hiển thị SweetAlert2 và chuyển hướng về trang hồ sơ cá nhân)
            if (btnCancel) {
                btnCancel.addEventListener('click', (e) => {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Hủy thay đổi?',
                        text: "Các thay đổi chưa được lưu sẽ bị bỏ qua!",
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#006a61',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Đồng ý thoát',
                        cancelButtonText: 'Tiếp tục chỉnh sửa'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('my.profile') }}";
                        }
                    });
                });
            }
        })();

        document.addEventListener("DOMContentLoaded", function() {
            const citySelect = document.getElementById("select-city");
            const districtSelect = document.getElementById("select-district");

            // Giá trị cũ từ database của user (nếu có)
            const oldCity = "{{ old('city', $user->city ?? '') }}";
            const oldDistrict = "{{ old('district', $user->district ?? '') }}";

            // 1. Tải danh sách Tỉnh/Thành phố
            fetch("https://provinces.open-api.vn/api/?depth=2")
                .then(response => response.json())
                .then(data => {
                    data.forEach(province => {
                        const option = document.createElement("option");
                        option.value = province.name;
                        option.textContent = province.name;
                        option.dataset.code = province.code; // Lưu mã tỉnh để lọc quận huyện

                        if (province.name === oldCity) {
                            option.selected = true;
                            loadDistricts(province.code, oldDistrict); // Tự động load quận huyện nếu đã chọn tỉnh trước đó
                        }
                        citySelect.appendChild(option);
                    });
                });

            // 2. Sự kiện khi thay đổi Tỉnh/Thành phố
            citySelect.addEventListener("change", function() {
                const selectedOption = this.options[this.selectedIndex];
                const provinceCode = selectedOption.dataset.code;

                districtSelect.innerHTML = '<option value="">Chọn quận / huyện</option>';
                if (provinceCode) {
                    loadDistricts(provinceCode);
                }
            });

            // 3. Hàm tải danh sách Quận/Huyện dựa theo mã Tỉnh
            function loadDistricts(provinceCode, selectedDistrict = "") {
                fetch(`https://provinces.open-api.vn/api/p/${provinceCode}?depth=2`)
                    .then(response => response.json())
                    .then(provinceData => {
                        districtSelect.innerHTML = '<option value="">Chọn quận / huyện</option>';
                        provinceData.districts.forEach(district => {
                            const option = document.createElement("option");
                            option.value = district.name;
                            option.textContent = district.name;
                            if (district.name === selectedDistrict) {
                                option.selected = true;
                            }
                            districtSelect.appendChild(option);
                        });
                    });
            }
        });
    </script>
</main>
@endsection