@extends('layouts.app')

@section('content')
<main class="w-full pt-20 bg-background min-h-screen">
    <div class="flex flex-col w-full">
        <div class="max-w-[1280px] w-full mx-auto px-margin-mobile lg:px-margin py-space-md sm:py-space-lg flex flex-col gap-space-lg">
            <!-- Breadcrumb & Top Bar -->
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm">
                <nav aria-label="Đường dẫn trang" class="flex items-center gap-1.5 font-label-md text-label-md text-on-surface-variant flex-wrap">
                    <a class="hover:text-secondary transition-colors" data-path="kham-pha" href="#">Trang chủ</a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <a class="hover:text-secondary transition-colors" data-path="don-thue-cua-toi" href="#">Tài sản của tôi</a>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-on-surface font-semibold truncate max-w-[200px] sm:max-w-xs">Sony Alpha A7 IV</span>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-secondary font-bold">Chỉnh sửa</span>
                </nav>
                <div class="flex items-center gap-space-xs">
                    <a class="inline-flex items-center gap-1.5 px-space-md py-1.5 rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-all" data-path="danh-sach-tai-san" href="#">
                        <span class="material-symbols-outlined text-[18px]">visibility</span>
                        <span>Xem trang chi tiết</span>
                    </a>
                    <span class="inline-flex items-center gap-1 px-space-sm py-1 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold">
                        <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                        Đang hiển thị công khai
                    </span>
                </div>
            </div>
            <!-- Editorial Header Banner -->
            <section class="relative overflow-hidden rounded-xl bg-surface-container-low p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-space-md">
                    <div class="flex flex-col gap-space-xs">
                        <div class="flex items-center gap-2 flex-wrap">
                            <span class="px-2 py-0.5 rounded font-label-sm text-label-sm bg-primary text-on-primary font-bold">#ASSET-8492</span>
                            <span class="text-on-surface-variant font-label-sm text-label-sm font-medium">Khởi tạo ngày: 12/03/2024</span>
                        </div>
                        <h1 class="font-headline-lg text-headline-lg text-on-surface font-bold tracking-tight">
                            Chỉnh sửa: Sony Alpha A7 IV (Kèm Lens FE 24-70mm)
                        </h1>
                        <div class="flex items-center gap-space-lg font-label-md text-label-md text-on-surface-variant flex-wrap pt-1">
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-secondary text-[18px]">remove_red_eye</span>
                                <strong class="text-on-surface font-semibold">1.240</strong> lượt xem
                            </span>
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-secondary text-[18px]">task_alt</span>
                                <strong class="text-on-surface font-semibold">64</strong> lượt thuê thành công
                            </span>
                            <span class="flex items-center gap-1">
                                <span class="material-symbols-outlined text-secondary text-[18px]">star</span>
                                <strong class="text-on-surface font-semibold">4.95</strong> (48 đánh giá)
                            </span>
                        </div>
                    </div>
                    <!-- Quick Switch Indicator -->
                    <div class="flex items-center gap-space-sm bg-surface-container-lowest p-2 rounded-lg shadow-sm">
                        <div class="w-10 h-10 rounded-lg bg-surface-container-high flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[24px]">photo_camera</span>
                        </div>
                        <div class="flex flex-col pr-space-sm">
                            <span class="font-label-sm text-label-sm text-on-surface-variant">Tình trạng niêm yết</span>
                            <span class="font-label-lg text-label-lg text-secondary font-bold">Sẵn sàng nhận khách</span>
                        </div>
                    </div>
                </div>
                <!-- Notice Banner -->
                <div class="flex items-start gap-space-sm p-space-sm sm:p-space-md rounded-lg bg-surface-container-highest text-on-surface">
                    <span class="material-symbols-outlined text-secondary text-[20px] mt-0.5 shrink-0">info</span>
                    <p class="font-body-md text-body-md leading-relaxed">
                        <strong class="font-bold">Lưu ý quan trọng:</strong> Mọi cập nhật về đơn giá thuê theo ngày và số tiền bảo chứng Escrow sẽ chỉ áp dụng cho các lượt đặt thuê mới phát sinh sau thời điểm lưu. Toàn bộ đơn thuê đang trong thời gian giữ chỗ hoặc đang thực hiện sẽ bảo lưu điều khoản hợp đồng cũ.
                    </p>
                </div>
            </section>
            <!-- Main Grid: Form (Col-8) & Sidebar (Col-4) -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
                <!-- Left Column: Pre-filled Edit Form -->
                <div class="lg:col-span-8 flex flex-col gap-space-lg">
                    <!-- Form Navigation Sticky/Tabs -->
                    <div class="bg-surface-container-lowest rounded-xl p-1.5 shadow-sm flex items-center gap-1 overflow-x-auto">
                        <button class="px-space-md py-2 rounded-lg bg-primary text-on-primary font-label-md text-label-md font-bold whitespace-nowrap shadow-sm" type="button">
                            1. Thông tin chung &amp; Ảnh
                        </button>
                        <button class="px-space-md py-2 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container font-label-md text-label-md whitespace-nowrap transition-colors" type="button">
                            2. Giá thuê &amp; Ký quỹ
                        </button>
                        <button class="px-space-md py-2 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container font-label-md text-label-md whitespace-nowrap transition-colors" type="button">
                            3. Lịch trống &amp; Đã cọc
                        </button>
                        <button class="px-space-md py-2 rounded-lg text-on-surface-variant hover:text-on-surface hover:bg-surface-container font-label-md text-label-md whitespace-nowrap transition-colors" type="button">
                            4. Quy định bàn giao
                        </button>
                    </div>
                    <form class="flex flex-col gap-space-lg" id="edit-asset-form" onsubmit="event.preventDefault();">
                        <!-- Section 1: Tiêu đề & Thông số -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-xs">
                                    <span class="w-6 h-6 rounded bg-primary-container text-secondary-container flex items-center justify-center font-label-sm text-label-sm font-bold">1</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Tiêu đề &amp; Thông số thiết bị</h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Bắt buộc</span>
                            </div>
                            <div class="flex flex-col gap-space-sm">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="asset-title">Tên tài sản niêm yết</label>
                                <input class="w-full px-space-md py-2.5 rounded-lg bg-surface text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-secondary transition-all shadow-inner" id="asset-title" type="text" value="Máy ảnh Sony Alpha A7 IV (Kèm Lens FE 24-70mm F2.8 GM)" />
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Tên hiển thị rõ ràng bao gồm model chính và phụ kiện giá trị đi kèm.</p>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="asset-category">Danh mục thiết bị</label>
                                    <div class="relative">
                                        <select class="w-full px-space-md py-2.5 rounded-lg bg-surface text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-secondary appearance-none cursor-pointer" id="asset-category">
                                            <option selected="">Máy ảnh &amp; Thiết bị số</option>
                                            <option>Ống kính chuyên dụng (Lens)</option>
                                            <option>Flycam &amp; Thiết bị quay</option>
                                            <option>Đèn &amp; Phụ kiện Studio</option>
                                        </select>
                                        <span class="material-symbols-outlined absolute right-3 top-3 text-on-surface-variant pointer-events-none text-[20px]">expand_more</span>
                                    </div>
                                </div>
                                <div class="flex flex-col gap-space-xs">
                                    <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="asset-condition">Tình trạng thực tế</label>
                                    <div class="relative">
                                        <select class="w-full px-space-md py-2.5 rounded-lg bg-surface text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-secondary appearance-none cursor-pointer" id="asset-condition">
                                            <option selected="">Like New 98% (Đã kiểm định)</option>
                                            <option>Rất tốt 95% (Có xước răm nhẹ)</option>
                                            <option>Tốt 90% (Hoạt động hoàn hảo)</option>
                                        </select>
                                        <span class="material-symbols-outlined absolute right-3 top-3 text-on-surface-variant pointer-events-none text-[20px]">expand_more</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="asset-accessories">Phụ kiện kèm theo trọn bộ</label>
                                <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-secondary transition-all" id="asset-accessories" rows="3">02 Pin zin NP-FZ100, 01 Đốc sạc đôi LCD, Thẻ 128GB UHS-II SanDisk Extreme 300MB/s, Túi đựng chống sốc Peak Design Everyday Sling 6L.</textarea>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Liệt kê chính xác để làm cơ sở biên bản giao nhận tài sản điện tử.</p>
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-lg text-label-lg text-on-surface font-semibold" for="asset-notes">Mô tả chi tiết &amp; kiểm định kỹ thuật</label>
                                <textarea class="w-full px-space-md py-2.5 rounded-lg bg-surface text-on-surface font-body-md text-body-md focus:outline-none focus:ring-2 focus:ring-secondary transition-all" id="asset-notes" rows="3">Body máy mới chụp xấp xỉ 8.200 shot. Cảm biến Full-frame Exmor R BSI CMOS 33MP sạch hoàn hảo, không bụi, không điểm chết (hot pixel). Kính lens trong veo, lớp tráng phủ Nano AR Coating II nguyên vẹn.</textarea>
                            </div>
                        </section>
                        <!-- Section 2: Quản lý thư viện ảnh -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-xs">
                                    <span class="w-6 h-6 rounded bg-primary-container text-secondary-container flex items-center justify-center font-label-sm text-label-sm font-bold">2</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Quản lý thư viện ảnh (4/8 ảnh)</h2>
                                </div>
                                <span class="font-label-sm text-label-sm text-secondary font-semibold">Ảnh chất lượng cao tăng 40% đơn thuê</span>
                            </div>
                            <p class="font-body-md text-body-md text-on-surface-variant">
                                Kéo thả để đổi thứ tự. Ảnh đầu tiên được thiết lập làm ảnh bìa chính hiển thị trên danh mục tìm kiếm.
                            </p>
                            <!-- Gallery Grid -->
                            <div class="grid grid-cols-2 sm:grid-cols-4 gap-space-md">
                                <!-- Photo 1 (Cover) -->
                                <div class="group relative rounded-lg overflow-hidden bg-surface-container aspect-4/3 flex flex-col justify-between shadow-sm">
                                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="Professional studio shot of a Sony Alpha A7 IV mirrorless digital camera with a 24-70mm GM lens mounted on it, resting on a clean concrete textured surface with subtle cyan rim lighting and warm fill, razor sharp focus, high-end commercial tech aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAdtSEfPlweKDif5R5mJUiOPe_nhJfv3DAES3WYgQd5bXPEzQvcg_stuhIe7wmQjLg7jNAVGGPO6jHQNdtxbayNo-3xJbkKPt7X0NdNMUv0s5hiiC3276i9hPL_EJtLNsQrPy6KCkmXo-2FM8YnmPCagQ1jC3jEm--OU1f3eaeeIKEAyXVAHIrD3FhY_2BkAX9R1usUZLLg5_J1lzjqUjSECVlmfp2MhRIM0ewmVRvaRAGJ7C3cTmM" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-primary/40"></div>
                                    <div class="relative z-10 p-2 flex justify-between items-center">
                                        <span class="px-2 py-0.5 rounded bg-secondary text-on-secondary font-label-sm text-label-sm font-bold">Ảnh bìa</span>
                                        <button aria-label="Xóa ảnh 1" class="w-7 h-7 rounded bg-surface/80 hover:bg-surface text-error flex items-center justify-center backdrop-blur-sm transition-colors" type="button">
                                            <span class="material-symbols-outlined text-[16px]">delete</span>
                                        </button>
                                    </div>
                                    <div class="relative z-10 p-2 flex items-center justify-between gap-1 text-on-primary">
                                        <span class="font-label-sm text-label-sm truncate">Sony-A7IV-main.jpg</span>
                                        <button class="text-on-primary hover:text-secondary-fixed transition-colors font-label-sm text-label-sm" type="button">Sửa</button>
                                    </div>
                                </div>
                                <!-- Photo 2 -->
                                <div class="group relative rounded-lg overflow-hidden bg-surface-container aspect-4/3 flex flex-col justify-between shadow-sm">
                                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="Close-up detailed macro view of the Sony Alpha A7 IV LCD flip screen rotated outward showing active video menu settings with clean camera controls and dials in shallow depth of field, sleek tech minimalism" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAjfsZCu5zLHR2Avw1yHQmflwDgj4Ko6G0zH67NIQeF7F50DZA3gmkbbHvtP46hz-CUyVQ5MYdvegUUjhdKIlDldrkUYQjguaj6g5cqGO0MtPF6pgjYI1SNxqdeirYL75jFHRnseOENnreOpPjnhwUUJQ55e-kCZV4bi0S2toV2VxRoAb46PXqecityIzeRfN-d3EVrrYR99dXxWY-gJeeTuqsWwz702W5I8LEUB5nl3hl_rPYEUc8" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
                                    <div class="relative z-10 p-2 flex justify-end">
                                        <button aria-label="Xóa ảnh 2" class="w-7 h-7 rounded bg-surface/80 hover:bg-surface text-error flex items-center justify-center backdrop-blur-sm transition-colors" type="button">
                                            <span class="material-symbols-outlined text-[16px]">delete</span>
                                        </button>
                                    </div>
                                    <div class="relative z-10 p-2 flex items-center justify-between gap-1 text-on-primary">
                                        <button class="text-xs text-secondary-container hover:underline font-label-sm text-label-sm" type="button">Đặt làm bìa</button>
                                        <button class="text-on-primary hover:text-secondary-fixed font-label-sm text-label-sm" type="button">Sửa</button>
                                    </div>
                                </div>
                                <!-- Photo 3 -->
                                <div class="group relative rounded-lg overflow-hidden bg-surface-container aspect-4/3 flex flex-col justify-between shadow-sm">
                                    <img class="absolute inset-0 w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" data-alt="Top-down flatlay composition showing Sony camera accessories neatly arranged: two Sony batteries, dual LCD charging dock, Sandisk extreme pro SD card, lens caps, and Peak Design black carrying bag on dark slate background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDAhaDrokTyCWW7uOgNSNkQkerThMGWJf2rMnrpQLIaMdo7mtA1Ymfhe14svpe0xGCG6ON-vBXUm8xxVwp0HKrrLNASBf6AvQ78yXnRuuF8Z758mxhHXIc4q7KCreBnscQT98Gq23nTL8m4B7M_oiEuQ5hR4WdklSfckT0MD4li-Pz_nLwlRy25EiThjAdq8yYds9hAgRQjYuNeXeQUoyAUc3vb2k9cU7ZAhOJk4977A4H0Trrdks0" />
                                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-transparent to-transparent"></div>
                                    <div class="relative z-10 p-2 flex justify-end">
                                        <button aria-label="Xóa ảnh 3" class="w-7 h-7 rounded bg-surface/80 hover:bg-surface text-error flex items-center justify-center backdrop-blur-sm transition-colors" type="button">
                                            <span class="material-symbols-outlined text-[16px]">delete</span>
                                        </button>
                                    </div>
                                    <div class="relative z-10 p-2 flex items-center justify-between gap-1 text-on-primary">
                                        <button class="text-xs text-secondary-container hover:underline font-label-sm text-label-sm" type="button">Đặt làm bìa</button>
                                        <button class="text-on-primary hover:text-secondary-fixed font-label-sm text-label-sm" type="button">Sửa</button>
                                    </div>
                                </div>
                                <!-- Photo 4: Add New Slot -->
                                <label class="rounded-lg bg-surface-container hover:bg-surface-container-high transition-colors aspect-4/3 flex flex-col items-center justify-center gap-1.5 cursor-pointer text-center p-2 text-on-surface-variant hover:text-on-surface">
                                    <span class="material-symbols-outlined text-[32px] text-secondary">add_photo_alternate</span>
                                    <span class="font-label-md text-label-md font-semibold">Tải ảnh thêm (+)</span>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Tối đa 15MB/ảnh</span>
                                    <input accept="image/*" class="hidden" type="file" />
                                </label>
                            </div>
                        </section>
                        <!-- Section 3: Điều chỉnh giá thuê & Cọc Escrow -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-xs">
                                    <span class="w-6 h-6 rounded bg-primary-container text-secondary-container flex items-center justify-center font-label-sm text-label-sm font-bold">3</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Giá niêm yết &amp; Ký quỹ Escrow</h2>
                                </div>
                                <span class="flex items-center gap-1 text-secondary font-label-sm text-label-sm font-semibold">
                                    <span class="material-symbols-outlined text-[16px]">shield_with_heart</span>
                                    Escrow giữ tiền an toàn
                                </span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                                <div class="flex flex-col gap-space-xs bg-surface-container-low p-space-md rounded-lg">
                                    <label class="font-label-lg text-label-lg text-on-surface font-bold" for="rental-price">Đơn giá thuê 1 ngày (24 giờ)</label>
                                    <div class="relative flex items-center">
                                        <input class="w-full pl-space-md pr-16 py-2.5 rounded-lg bg-surface text-on-surface font-headline-sm text-headline-sm font-bold focus:outline-none focus:ring-2 focus:ring-secondary" id="rental-price" step="10000" type="number" value="450000" />
                                        <span class="absolute right-3 font-label-lg text-label-lg text-on-surface-variant font-bold">đ/ngày</span>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Mức giá gợi ý thị trường: 400.000 đ – 500.000 đ/ngày.</span>
                                </div>
                                <div class="flex flex-col gap-space-xs bg-surface-container-low p-space-md rounded-lg">
                                    <label class="font-label-lg text-label-lg text-on-surface font-bold" for="escrow-deposit">Tiền bảo chứng ký quỹ (Escrow)</label>
                                    <div class="relative flex items-center">
                                        <input class="w-full pl-space-md pr-12 py-2.5 rounded-lg bg-surface text-on-surface font-headline-sm text-headline-sm font-bold focus:outline-none focus:ring-2 focus:ring-secondary" id="escrow-deposit" step="500000" type="number" value="3000000" />
                                        <span class="absolute right-3 font-label-lg text-label-lg text-on-surface-variant font-bold">VNĐ</span>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant">Sẽ hoàn trả tự động cho khách sau khi bàn giao an toàn.</span>
                                </div>
                            </div>
                            <!-- Alternative deposit option -->
                            <div class="flex items-start gap-space-sm p-space-sm rounded-lg bg-surface-container">
                                <input checked="" class="w-5 h-5 rounded accent-secondary mt-0.5 cursor-pointer" id="accept-id-card" type="checkbox" />
                                <div class="flex flex-col">
                                    <label class="font-label-lg text-label-lg text-on-surface font-bold cursor-pointer" for="accept-id-card">
                                        Chấp nhận giữ CCCD gắn chip gốc thay thế 70% tiền cọc
                                    </label>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                                        Người thuê chỉ cần cọc 900.000 đ qua Escrow kèm gửi CCCD gốc đã xác thực sinh trắc học trực tiếp khi nhận máy. Giúp tài sản tiếp cận thêm 35% lượt khách.
                                    </p>
                                </div>
                            </div>
                            <!-- Long-term discount tiers -->
                            <div class="flex flex-col gap-space-sm pt-space-xs">
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">Ưu đãi giảm giá thuê dài ngày (Đang kích hoạt)</span>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-space-md">
                                    <div class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low">
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Thuê từ 3 ngày trở lên</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Áp dụng tự động</span>
                                        </div>
                                        <span class="px-2.5 py-1 rounded bg-secondary-fixed text-on-secondary-fixed-variant font-label-lg text-label-lg font-bold">Giảm 10%</span>
                                    </div>
                                    <div class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low">
                                        <div class="flex flex-col">
                                            <span class="font-label-md text-label-md text-on-surface font-semibold">Thuê từ 7 ngày (1 tuần)</span>
                                            <span class="font-body-sm text-body-sm text-on-surface-variant">Khuyến khích dự án dài</span>
                                        </div>
                                        <span class="px-2.5 py-1 rounded bg-secondary-fixed text-on-secondary-fixed-variant font-label-lg text-label-lg font-bold">Giảm 20%</span>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Section 4: Quản lý lịch sẵn sàng -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center justify-between flex-wrap gap-2">
                                <div class="flex items-center gap-space-xs">
                                    <span class="w-6 h-6 rounded bg-primary-container text-secondary-container flex items-center justify-center font-label-sm text-label-sm font-bold">4</span>
                                    <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Quản lý lịch sẵn sàng &amp; Ngày bận</h2>
                                </div>
                                <div class="flex items-center gap-2 font-label-sm text-label-sm">
                                    <span class="inline-flex items-center gap-1"><span class="w-2.5 h-2.5 rounded bg-surface-container-high"></span> Đã cọc (Khóa)</span>
                                    <span class="inline-flex items-center gap-1"><span class="w-2.5 h-2.5 rounded bg-secondary"></span> Trống</span>
                                    <span class="inline-flex items-center gap-1"><span class="w-2.5 h-2.5 rounded bg-on-surface"></span> Bận cá nhân</span>
                                </div>
                            </div>
                            <!-- Mini Calendar Demo for October / November -->
                            <div class="p-space-md rounded-lg bg-surface-container-low flex flex-col gap-space-sm">
                                <div class="flex items-center justify-between font-label-lg text-label-lg text-on-surface font-bold">
                                    <span class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                                        Tháng 10 &amp; Tháng 11 / 2024
                                    </span>
                                    <div class="flex items-center gap-1">
                                        <button aria-label="Tháng trước" class="p-1 rounded hover:bg-surface" type="button"><span class="material-symbols-outlined text-[18px]">chevron_left</span></button>
                                        <button aria-label="Tháng sau" class="p-1 rounded hover:bg-surface" type="button"><span class="material-symbols-outlined text-[18px]">chevron_right</span></button>
                                    </div>
                                </div>
                                <!-- Days Grid -->
                                <div class="grid grid-cols-7 gap-1 text-center font-label-sm text-label-sm text-on-surface-variant py-1">
                                    <span>T2</span><span>T3</span><span>T4</span><span>T5</span><span>T6</span><span>T7</span><span>CN</span>
                                </div>
                                <div class="grid grid-cols-7 gap-1 font-label-md text-label-md">
                                    <span class="p-2 text-outline-variant">20</span>
                                    <span class="p-2 text-outline-variant">21</span>
                                    <span class="p-2 rounded bg-secondary-fixed/50 text-on-surface">22</span>
                                    <span class="p-2 rounded bg-secondary-fixed/50 text-on-surface">23</span>
                                    <!-- Booked 24-26 -->
                                    <span class="p-2 rounded bg-surface-container-highest text-on-surface font-bold relative" title="Đã có khách cọc">
                                        24
                                        <span class="w-1.5 h-1.5 rounded-full bg-error absolute bottom-1 left-1/2 -translate-x-1/2"></span>
                                    </span>
                                    <span class="p-2 rounded bg-surface-container-highest text-on-surface font-bold relative" title="Đã có khách cọc">
                                        25
                                        <span class="w-1.5 h-1.5 rounded-full bg-error absolute bottom-1 left-1/2 -translate-x-1/2"></span>
                                    </span>
                                    <span class="p-2 rounded bg-surface-container-highest text-on-surface font-bold relative" title="Đã có khách cọc">
                                        26
                                        <span class="w-1.5 h-1.5 rounded-full bg-error absolute bottom-1 left-1/2 -translate-x-1/2"></span>
                                    </span>
                                    <!-- 27 Available -->
                                    <span class="p-2 rounded bg-secondary-fixed text-on-secondary-fixed-variant font-bold">27</span>
                                    <!-- Booked 28-30 -->
                                    <span class="p-2 rounded bg-surface-container-highest text-on-surface font-bold relative" title="Đã có khách cọc">28</span>
                                    <span class="p-2 rounded bg-surface-container-highest text-on-surface font-bold relative" title="Đã có khách cọc">29</span>
                                    <span class="p-2 rounded bg-surface-container-highest text-on-surface font-bold relative" title="Đã có khách cọc">30</span>
                                    <!-- Personal block 31 Oct - 02 Nov -->
                                    <span class="p-2 rounded bg-primary text-on-primary font-bold">31</span>
                                    <span class="p-2 rounded bg-primary text-on-primary font-bold">01</span>
                                    <span class="p-2 rounded bg-primary text-on-primary font-bold">02</span>
                                </div>
                            </div>
                            <!-- Lock Personal Dates Control -->
                            <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-space-sm p-space-sm rounded-lg bg-surface-container">
                                <div class="flex items-center gap-space-sm">
                                    <span class="material-symbols-outlined text-secondary text-[22px]">lock_clock</span>
                                    <div class="flex flex-col">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Khóa nhanh ngày bận cá nhân</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Chủ tài sản giữ dùng riêng (Ví dụ: 01/11 - 03/11/2024)</span>
                                    </div>
                                </div>
                                <button class="px-space-md py-2 rounded-lg bg-surface text-on-surface font-label-md text-label-md font-semibold hover:bg-surface-container-high transition-colors shadow-sm self-start sm:self-auto" type="button">
                                    + Thêm khoảng ngày bận
                                </button>
                            </div>
                        </section>
                        <!-- Section 5: Trạng thái hiển thị tin đăng -->
                        <section class="bg-surface-container-lowest rounded-xl p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                            <div class="flex items-center gap-space-xs">
                                <span class="w-6 h-6 rounded bg-primary-container text-secondary-container flex items-center justify-center font-label-sm text-label-sm font-bold">5</span>
                                <h2 class="font-headline-sm text-headline-sm text-on-surface font-bold">Trạng thái công khai tin đăng</h2>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                                <label class="flex flex-col gap-space-xs p-space-md rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Đang cho thuê</span>
                                        <input checked="" class="w-4 h-4 accent-secondary" name="asset_status" type="radio" value="published" />
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Hiển thị công khai trên chợ RentShare, sẵn sàng nhận booking mới.</p>
                                </label>
                                <label class="flex flex-col gap-space-xs p-space-md rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="font-label-lg text-label-lg text-on-surface font-bold">Tạm ẩn tin</span>
                                        <input class="w-4 h-4 accent-secondary" name="asset_status" type="radio" value="hidden" />
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Ẩn khỏi tìm kiếm nhưng vẫn giữ nguyên quyền quản lý và các lịch đã cọc.</p>
                                </label>
                                <label class="flex flex-col gap-space-xs p-space-md rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-all">
                                    <div class="flex items-center justify-between">
                                        <span class="font-label-lg text-label-lg text-error font-bold">Ngừng cho thuê</span>
                                        <input class="w-4 h-4 accent-error" name="asset_status" type="radio" value="closed" />
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant">Đóng hẳn giao dịch cho thuê với thiết bị này (không xóa lịch sử).</p>
                                </label>
                            </div>
                        </section>
                        <!-- Footer Actions Row -->
                        <div class="flex flex-col sm:flex-row items-center justify-between gap-space-md pt-space-xs">
                            <div class="flex items-center gap-space-sm w-full sm:w-auto">
                                <button class="w-full sm:w-auto px-space-md py-2.5 rounded-lg bg-surface-container text-on-surface font-label-lg text-label-lg hover:bg-surface-container-high transition-colors" type="button">
                                    Hủy thay đổi
                                </button>
                                <button class="w-full sm:w-auto px-space-md py-2.5 rounded-lg bg-error-container text-on-error-container hover:bg-error/20 font-label-lg text-label-lg transition-colors flex items-center justify-center gap-1" type="button">
                                    <span class="material-symbols-outlined text-[18px]">archive</span>
                                    Lưu trữ tài sản
                                </button>
                            </div>
                            <div class="flex items-center gap-space-sm w-full sm:w-auto justify-end">
                                <button class="w-full sm:w-auto px-space-xl py-3 rounded-lg bg-primary text-on-primary font-label-lg text-label-lg font-bold hover:bg-primary-container hover:text-on-primary-container transition-all shadow-md flex items-center justify-center gap-2" type="submit">
                                    <span class="material-symbols-outlined text-[20px]">save</span>
                                    Lưu cập nhật tài sản
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Right Column: Sidebar (Stats, Next Bookings, AI Insights) -->
                <aside class="lg:col-span-4 flex flex-col gap-space-lg">
                    <!-- Card 1: Thống kê hiệu suất tài sản -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                        <div class="flex items-center justify-between">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Hiệu suất tài sản</h3>
                            <span class="p-1 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant">
                                <span class="material-symbols-outlined text-[18px]">trending_up</span>
                            </span>
                        </div>
                        <div class="flex flex-col gap-space-sm">
                            <!-- Metric 1 -->
                            <div class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">payments</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant">Doanh thu tích lũy</span>
                                </div>
                                <span class="font-label-lg text-label-lg text-on-surface font-bold">28.800.000 đ</span>
                            </div>
                            <!-- Metric 2 -->
                            <div class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">hotel_class</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant">Đánh giá trung bình</span>
                                </div>
                                <div class="flex items-center gap-1 font-label-lg text-label-lg text-on-surface font-bold">
                                    <span>4.95 / 5.0</span>
                                    <span class="text-xs text-on-surface-variant font-normal">(48)</span>
                                </div>
                            </div>
                            <!-- Metric 3 -->
                            <div class="flex items-center justify-between p-space-sm rounded-lg bg-surface-container-low">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-secondary text-[20px]">verified</span>
                                    <span class="font-label-md text-label-md text-on-surface-variant">Tỷ lệ duyệt đơn</span>
                                </div>
                                <span class="font-label-lg text-label-lg text-secondary font-bold">98% (Rất cao)</span>
                            </div>
                        </div>
                        <!-- Mini Inline Performance Sparkline Chart -->
                        <div class="flex flex-col gap-1 pt-1">
                            <div class="flex items-center justify-between text-xs text-on-surface-variant font-label-sm text-label-sm">
                                <span>Thu nhập 6 tháng gần nhất</span>
                                <strong class="text-secondary">+18% so với quý trước</strong>
                            </div>
                            <div class="h-16 w-full flex items-end gap-1.5 pt-2">
                                <div class="flex-1 bg-surface-container-high hover:bg-secondary transition-colors rounded-t h-[45%]" title="Tháng 5: 3.2M"></div>
                                <div class="flex-1 bg-surface-container-high hover:bg-secondary transition-colors rounded-t h-[60%]" title="Tháng 6: 4.5M"></div>
                                <div class="flex-1 bg-surface-container-high hover:bg-secondary transition-colors rounded-t h-[80%]" title="Tháng 7: 5.8M"></div>
                                <div class="flex-1 bg-surface-container-high hover:bg-secondary transition-colors rounded-t h-[70%]" title="Tháng 8: 5.1M"></div>
                                <div class="flex-1 bg-surface-container-high hover:bg-secondary transition-colors rounded-t h-[90%]" title="Tháng 9: 6.4M"></div>
                                <div class="flex-1 bg-secondary rounded-t h-[100%]" title="Tháng 10: 7.2M (Hiện tại)"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2: Lịch thuê sắp tới -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                        <div class="flex items-center justify-between">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Lịch thuê sắp diễn ra</h3>
                            <span class="px-2 py-0.5 rounded-full bg-secondary-fixed text-on-secondary-fixed-variant font-label-sm text-label-sm font-semibold">1 đơn</span>
                        </div>
                        <!-- Booking preview item -->
                        <div class="p-space-sm rounded-lg bg-surface-container-low flex flex-col gap-space-xs">
                            <div class="flex items-center justify-between">
                                <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider">Đang chờ bàn giao</span>
                                <span class="font-label-sm text-label-sm text-on-surface-variant">#BK-9041</span>
                            </div>
                            <div class="flex items-center gap-space-sm py-1">
                                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold">
                                    HL
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-label-lg text-label-lg text-on-surface font-bold">Hoàng Linh</span>
                                    <span class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
                                        <span class="material-symbols-outlined text-secondary text-[14px]">verified</span> CCCD đã ký quỹ Escrow
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center justify-between font-label-md text-label-md pt-1">
                                <span class="text-on-surface-variant">Thời gian:</span>
                                <strong class="text-on-surface font-bold">24/10 – 27/10 (3 ngày)</strong>
                            </div>
                            <a class="mt-2 w-full py-2 rounded-lg bg-surface text-center font-label-md text-label-md text-on-surface font-bold hover:bg-surface-container transition-colors shadow-sm" data-path="don-thue-cua-toi" href="#">
                                Xem đơn thuê &amp; Bàn giao
                            </a>
                        </div>
                    </div>
                    <!-- Card 3: Khuyến nghị tối ưu tin đăng từ AI RentShare -->
                    <div class="bg-gradient-to-br from-surface-container-highest via-surface-container-low to-surface-container-lowest rounded-xl p-space-md sm:p-space-lg shadow-sm flex flex-col gap-space-md">
                        <div class="flex items-center gap-space-xs">
                            <span class="material-symbols-outlined text-secondary text-[22px]">auto_awesome</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface font-bold">Gợi ý AI RentShare</h3>
                        </div>
                        <div class="flex flex-col gap-space-sm font-body-sm text-body-sm text-on-surface">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">check_circle</span>
                                <p>Mức giá <strong>450.000 đ/ngày</strong> đang có độ cạnh tranh tốt nhất trong phân khúc máy ảnh Full-frame khu vực Hà Nội &amp; TP.HCM.</p>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">lightbulb</span>
                                <p>Bổ sung thêm 1 video quay test lấy nét thực tế để tăng điểm tin cậy hồ sơ thêm <strong>+15 điểm</strong>.</p>
                            </div>
                        </div>
                        <div class="p-space-sm rounded-lg bg-surface-container-lowest shadow-inner flex items-center justify-between">
                            <div class="flex flex-col">
                                <span class="font-label-sm text-label-sm text-on-surface-variant">Điểm hoàn thiện tin:</span>
                                <span class="font-label-lg text-label-lg text-secondary font-bold">92 / 100 Điểm</span>
                            </div>
                            <span class="material-symbols-outlined text-secondary text-[28px]">speed</span>
                        </div>
                    </div>
                    <!-- Help & Safety link box -->
                    <div class="p-space-md rounded-xl bg-surface-container-low flex items-center gap-space-sm">
                        <span class="material-symbols-outlined text-secondary text-[24px]">gavel</span>
                        <div class="flex flex-col">
                            <span class="font-label-md text-label-md text-on-surface font-bold">Bảo hiểm tài sản 100%</span>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Tài sản được bảo hiểm tự động lên đến 50.000.000 đ trong mọi chuyến thuê.</span>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>
@endsection