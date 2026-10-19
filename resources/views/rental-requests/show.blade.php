@extends('layouts.app')

@section('content')
<main class="w-full pt-16 bg-surface min-h-[calc(100vh-16rem)]">
    <div class="flex flex-col w-full">
        <div class="w-full max-w-7xl mx-auto px-gutter py-space-md">
            <!-- Top Breadcrumb & Status Bar -->
            <div class="flex flex-wrap items-center justify-between gap-space-sm mb-space-lg">
                <nav class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md">
                    <a class="hover:text-secondary transition-colors" href="#">Bảng tin yêu cầu thuê</a>
                    <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    <a class="hover:text-secondary transition-colors" href="#">Đồ cắm trại &amp; Dã ngoại</a>
                    <span class="material-symbols-outlined text-[16px]">chevron_right</span>
                    <span class="text-on-surface font-semibold">Yêu cầu #REQ-8821</span>
                </nav>
                <div class="flex items-center gap-space-sm">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container font-label-sm text-label-sm font-semibold">
                        <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                        Đang nhận đề xuất (3/5)
                    </span>
                    <span class="text-on-surface-variant font-label-sm text-label-sm">Đăng cách đây 4 giờ</span>
                </div>
            </div>
            <!-- Main Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-start">
                <!-- Left Column: Request Details & Offers (8 cols) -->
                <div class="lg:col-span-8 flex flex-col gap-space-xl min-w-0">
                    <!-- Requester Profile Banner Card -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-md">
                            <div class="flex items-center gap-space-md">
                                <div class="relative">
                                    <img class="w-16 h-16 rounded-full object-cover shadow-sm" data-alt="Chân dung người dùng Lê Hoàng Phúc đang mỉm cười tự tin ngoài trời, phong cách thể thao dã ngoại năng động, ánh sáng tự nhiên ấm áp, màu sắc sắc nét hiện đại" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCr0S39jFMaFkCctNhoGKAJ08t-6YFykWYTnDWdovAxEOfByttkLbVYpqqUl2KK7AQ39QM_1nShcBlQC9nRG877dK2EVHcSc8k8XYHzl1E-_igiUYGDBQRnD8E2AkAJGiT3tpbwQ44VCdOulhgULbygbZU9c7wKsnwvCA0o3NF7I9MAnZH-b4bdzgNcduXYtP_n41WpxxxWrTY8qJ18Mf4Bw5XhDne54PpS_L5hag5MveawZ5jIaVk" />
                                    <span class="absolute bottom-0 right-0 w-4 h-4 bg-secondary rounded-full flex items-center justify-center text-on-secondary text-[10px]" title="Đã xác thực CCCD">
                                        <span class="material-symbols-outlined text-[12px]">verified</span>
                                    </span>
                                </div>
                                <div class="min-w-0">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <h2 class="font-headline-sm text-headline-sm text-on-surface truncate">Lê Hoàng Phúc</h2>
                                        <span class="inline-flex items-center gap-1 bg-surface-container-low text-secondary font-label-sm text-label-sm px-2.5 py-0.5 rounded-full font-semibold">
                                            <span class="material-symbols-outlined text-[14px]">shield</span>
                                            CCCD eKYC Đã xác minh
                                        </span>
                                    </div>
                                    <p class="font-body-sm text-body-sm text-on-surface-variant mt-0.5">Thành viên từ tháng 04/2023 • TP. Huế</p>
                                </div>
                            </div>
                            <!-- Trust Stats Pill Box -->
                            <div class="grid grid-cols-3 gap-space-sm bg-surface-container-low p-space-sm rounded-lg sm:w-auto w-full text-center sm:text-left">
                                <div class="px-space-xs">
                                    <span class="block font-label-sm text-label-sm text-on-surface-variant">Điểm uy tín</span>
                                    <span class="font-headline-sm text-headline-sm text-secondary font-bold">96<span class="text-xs font-normal text-on-surface-variant">/100</span></span>
                                </div>
                                <div class="px-space-xs">
                                    <span class="block font-label-sm text-label-sm text-on-surface-variant">Đã thuê</span>
                                    <span class="font-headline-sm text-headline-sm text-on-surface font-bold">12 <span class="text-xs font-normal text-on-surface-variant">lần</span></span>
                                </div>
                                <div class="px-space-xs">
                                    <span class="block font-label-sm text-label-sm text-on-surface-variant">Đúng hạn</span>
                                    <span class="font-headline-sm text-headline-sm text-secondary font-bold">100%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Request Spec Card -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-lg">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-surface-container text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded-md">Yêu cầu tìm thuê</span>
                                <span class="text-on-surface-variant font-body-sm text-body-sm">• Khu vực Trung tâm Huế</span>
                            </div>
                            <h1 class="font-headline-lg text-headline-lg text-on-surface leading-snug">
                                Cần thuê lều cắm trại 4 người chống thấm nước tốt + 1 bộ bàn ghế gấp dã ngoại
                            </h1>
                        </div>
                        <!-- Key Metrics Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <div class="bg-surface-container-low rounded-xl p-space-md flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-surface shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">calendar_today</span>
                                </div>
                                <div>
                                    <span class="block font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Thời gian thuê</span>
                                    <span class="font-label-lg text-label-lg text-on-surface block mt-0.5">10/10 – 12/10/2025</span>
                                    <span class="text-body-sm font-body-sm text-secondary font-medium">08:00 sáng – 18:00 chiều (3 ngày)</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-low rounded-xl p-space-md flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-surface shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">payments</span>
                                </div>
                                <div>
                                    <span class="block font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Ngân sách tối đa</span>
                                    <div class="flex items-baseline gap-1 mt-0.5">
                                        <span class="font-headline-sm text-headline-sm text-secondary font-bold">250.000 đ</span>
                                        <span class="text-body-sm font-body-sm text-on-surface-variant">/ ngày</span>
                                    </div>
                                    <span class="text-body-sm font-body-sm text-on-surface-variant">Ước tính 750.000 đ tổng cộng</span>
                                </div>
                            </div>
                            <div class="bg-surface-container-low rounded-xl p-space-md flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg bg-surface-container-highest flex items-center justify-center text-on-surface shrink-0">
                                    <span class="material-symbols-outlined text-[22px]">pin_drop</span>
                                </div>
                                <div>
                                    <span class="block font-label-sm text-label-sm text-on-surface-variant uppercase tracking-wider">Địa điểm nhận/trả</span>
                                    <span class="font-label-lg text-label-lg text-on-surface block mt-0.5">TP. Huế</span>
                                    <span class="text-body-sm font-body-sm text-on-surface-variant">Gần bờ sông Hương hoặc trung tâm</span>
                                </div>
                            </div>
                        </div>
                        <!-- Photo of Request Inspiration -->
                        <div class="flex flex-col gap-2">
                            <span class="font-label-lg text-label-lg text-on-surface">Hình ảnh kiểu dáng &amp; mẫu lều mong muốn:</span>
                            <div class="relative w-full rounded-xl overflow-hidden aspect-[16/9] shadow-sm">
                                <img class="w-full h-full object-cover" data-alt="Hình ảnh thực tế một chiếc lều cắm trại 4 người màu xanh lá cây và bạc dựng trên đồng cỏ thảo nguyên rực rỡ hoa dại, nhìn ra rặng núi đá hùng vĩ hùng vĩ dưới bầu trời xanh ngắt, bàn ghế dã ngoại gấp gọn bên cạnh bếp lửa cắm trại ấm cúng" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4Jgfae2zMCKUbDKu4L8c8b1kBxIMvXjouYARwaU1DaYtTTrm2do2EBycICa9RuXRmqdyj2h4P1a7Vm9paphQ_mQfqumZEva26xd8Ea-QvVWo1w-yjiOemAApg2bxpgW7gY2dQw9mqD3iQetDbc8KTlpTGAaji4rVY9OZZKQmO0M5eziDA2u_jd0eq9f2pT32j9jDiMxa905uYPRk6Z5NGB-HJCFnEhxEv-jueO2cea_n-UGd7xyo" />
                                <div class="absolute bottom-3 left-3 bg-surface/90 backdrop-blur-md px-3 py-1.5 rounded-lg text-on-surface font-label-sm text-label-sm flex items-center gap-1.5">
                                    <span class="material-symbols-outlined text-[16px] text-secondary">image</span>
                                    <span>Ảnh tham khảo thực tế do người thuê cung cấp</span>
                                </div>
                            </div>
                        </div>
                        <!-- Description Section -->
                        <div class="flex flex-col gap-space-xs">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Ghi chú &amp; Yêu cầu kỹ thuật</h3>
                            <div class="p-space-md bg-surface-container-low rounded-lg text-on-surface font-body-lg text-body-lg leading-relaxed">
                                “Gia đình mình (2 người lớn + 2 bé nhỏ) đi cắm trại cuối tuần dã ngoại gần Huế. Cần lều 4 người khung hợp kim hoặc sợi thủy tinh chắc chắn, lớp vải ngoài chống mưa tốt từ 2000mm trở lên. Có thêm 1 bàn nhôm gấp cùng 2-4 ghế xếp du lịch càng tốt. Cam kết sử dụng cẩn thận, không hút thuốc trong lều, vệ sinh khô ráo sạch sẽ trước khi hoàn trả cho chủ xe/chủ đồ.”
                            </div>
                        </div>
                        <!-- Tags -->
                        <div class="flex flex-wrap gap-2 pt-space-xs">
                            <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#Leu4Nguoi</span>
                            <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#DoCamTraiHue</span>
                            <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#BanGheGap</span>
                            <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#Naturehike</span>
                            <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface font-label-md text-label-md">#Coleman</span>
                        </div>
                    </div>
                    <!-- Section: Offers Received -->
                    <div class="flex flex-col gap-space-md">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-sm">
                                <h2 class="font-headline-md text-headline-md text-on-surface">Đề xuất cho thuê nhận được</h2>
                                <span class="bg-secondary text-on-secondary px-2.5 py-0.5 rounded-full font-label-md text-label-md font-semibold">3 đề xuất</span>
                            </div>
                            <span class="font-body-sm text-body-sm text-on-surface-variant">Sắp xếp theo độ tin cậy</span>
                        </div>
                        <!-- Offer Card 1 (Top Recommended) -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md transition-all">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-sm">
                                    <div class="relative">
                                        <img class="w-12 h-12 rounded-full object-cover" data-alt="Chân dung chủ tài sản Nguyễn Văn Hùng tươi cười, ăn mặc gọn gàng chuyên nghiệp, phông nền cửa hàng thiết bị dã ngoại ngoài trời" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpoGYVCZINOd4QLpzIuIqu9ym1XaIaPokswj_jx_I8CqCrG59YBg5h6amFalx7HGLkoW0tP5CUVDYLqLyhYdYEcwRIFH0hbmNRvkTffcvofzEHrZZsZ0vwMlKqXDle0PNHf3s3SuESvI5ItHMxSIOCcIY7Mm5pySZXJp_z6-p9PnJjJZ41OFUhjo2vUpHuptt75T5aesiV2GYTU01rEFSJs5Gj-rFRtVJbBVx6RkoBIZkeIiz2xXE" />
                                        <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-secondary rounded-full ring-2 ring-surface-container-lowest"></span>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-label-lg text-label-lg text-on-surface font-semibold">Nguyễn Văn Hùng</span>
                                            <span class="inline-flex items-center gap-0.5 bg-surface-container-low text-secondary text-[11px] font-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                <span class="material-symbols-outlined text-[12px]">verified</span> Uy tín 98/100
                                            </span>
                                        </div>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Chủ tài sản Pro • Cách bạn 1.8 km (P. Phú Hội, Huế)</span>
                                    </div>
                                </div>
                                <div class="text-right flex md:flex-col items-baseline md:items-end justify-between">
                                    <div class="flex items-baseline gap-1">
                                        <span class="font-headline-md text-headline-md text-secondary font-bold">220.000 đ</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">/ ngày</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Đặt cọc: 500.000 đ (Qua Ký quỹ)</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-4 gap-space-md bg-surface-container-low p-space-sm rounded-lg">
                                <div class="sm:col-span-1 rounded-lg overflow-hidden h-24 sm:h-full min-h-[5rem]">
                                    <img class="w-full h-full object-cover" data-alt="Bộ lều cắm trại Coleman 4 người thực tế màu xanh rêu kèm bàn nhôm dã ngoại gập gọn và 4 ghế tựa lưng xếp gọn gàng trong túi bạt cao cấp" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEy1vDxgmFHRYMOvv8dejsFhy4QVBZ8-FFzPlTFP5cJSEf95eU6OQhDlGIpGssSIxGRtDJaLUbQLnq1FppTHcsSoFjyPYGhZm4X-hsbyhv7Z8UzSPSRcw2NqSa9p1GB7GpiYQI94pFHz4XP5kKlMwjoBUwBcnYb81YrKnjl6TSEwe2QcJC6JkdZHv_DrT7dzkMg69IX4b9N334E3-BGhPNOvmobN4H804w-2wbHnWXu0AHavE4tCw" />
                                </div>
                                <div class="sm:col-span-3 flex flex-col justify-between">
                                    <div>
                                        <h4 class="font-label-lg text-label-lg text-on-surface font-semibold">Combo Lều Coleman Sundome 4P + Bàn ghế Naturehike hợp kim</h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                            “Đồ mình mua hè năm ngoái, mới dùng 2 lần đi Bạch Mã. Lều đã phủ nano chống thấm tuyệt đối, kèm sẵn bạt lót đáy và búa đóng cọc. Hỗ trợ giao tận nơi miễn phí quanh bờ nam sông Hương.”
                                        </p>
                                    </div>
                                    <div class="flex flex-wrap items-center gap-2 mt-2">
                                        <span class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded">Giao tận nơi</span>
                                        <span class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded">Miễn phí cọc giấy tờ</span>
                                        <span class="text-on-surface-variant font-body-sm text-body-sm ml-auto">Gửi lúc 10:15 hôm nay</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end gap-space-sm pt-space-xs">
                                <button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg px-4 py-2 rounded-lg flex items-center gap-1.5 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Chat trao đổi</span>
                                </button>
                                <button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg px-5 py-2 rounded-lg flex items-center gap-1.5 shadow-sm transition-all" type="button">
                                    <span class="material-symbols-outlined text-[18px]">check_circle</span>
                                    <span>Chấp nhận thuê combo này</span>
                                </button>
                            </div>
                        </div>
                        <!-- Offer Card 2 -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md transition-all">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-sm">
                                    <div class="relative">
                                        <img class="w-12 h-12 rounded-full object-cover" data-alt="Chân dung Trần Anh Tuấn đang cắm trại với nón kết và trang phục đi trekking vui tươi ngoài tự nhiên" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOQrr2bB5AYwRyKKb5AYgNM-XhLKZe3e4neICa-lplMTY6Z8qeR4-h057dcohyWXwprrGG-gH_wDFPsSXb2jGg07vSrVjXUwsP1J4oaoT5STWGLuc4bd5yMDPMXNRFD4QtU33h4EmpHFHkkXHBNncF_0VuyqIvjn2PqslcX1mWEqRKc9ir84PG3fAtxVj6MeQDMz9c6xzqcBssGYue95rC4DpHVrDxKnBubf_45FSPcyzc3P2i6gA" />
                                        <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-secondary rounded-full ring-2 ring-surface-container-lowest"></span>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-label-lg text-label-lg text-on-surface font-semibold">Trần Anh Tuấn</span>
                                            <span class="inline-flex items-center gap-0.5 bg-surface-container-low text-secondary text-[11px] font-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                <span class="material-symbols-outlined text-[12px]">verified</span> Uy tín 94/100
                                            </span>
                                        </div>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Cá nhân • Cách bạn 3.5 km (Đường Điện Biên Phủ, Huế)</span>
                                    </div>
                                </div>
                                <div class="text-right flex md:flex-col items-baseline md:items-end justify-between">
                                    <div class="flex items-baseline gap-1">
                                        <span class="font-headline-md text-headline-md text-secondary font-bold">180.000 đ</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">/ ngày</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Đặt cọc: 400.000 đ</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-4 gap-space-md bg-surface-container-low p-space-sm rounded-lg">
                                <div class="sm:col-span-1 rounded-lg overflow-hidden h-24 sm:h-full min-h-[5rem]">
                                    <img class="w-full h-full object-cover" data-alt="Lều cắm trại 4 người Naturehike P-Series màu xanh lá cây đặt trên thảm cỏ ven hồ nước trong veo, khung lều dựng chắc chắn sắc nét" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsTo3Yq1cxkBXQOcgZUJy77u1ycgNTe65WgFWQBHgecoiTB2SQTQl_1fu_V5ync2a96UAdSVFqAi4QP1KW9TeX_xY0Vipwz9Sphjo8MEaK1jPwR7XnFRutj8WBLMNTlwfa-HAgwU54uFmng9nYb2WbwHIdtolK5JgylJBAdbWa_vNVsS0KnL6qPmaM3d7ptYl_C_ToyFGzhxQTpmsBAMwGr_5gIKRjlq4rkisdfSA8SS3PUieVzu0" />
                                </div>
                                <div class="sm:col-span-3 flex flex-col justify-between">
                                    <div>
                                        <h4 class="font-label-lg text-label-lg text-on-surface font-semibold">Lều Naturehike P-Series 4 người 2 lớp chống mưa UPF50+</h4>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">
                                            “Mình có sẵn lều Naturehike P4 rất nhẹ và thoáng khí, 2 cửa trước sau. Không có kèm bàn nhưng có tặng kèm đèn treo lều năng lượng mặt trời. Bạn qua nhà mình nhận hoặc book Grab ship nhé.”
                                        </p>
                                    </div>
                                    <div class="flex flex-wrap items-center gap-2 mt-2">
                                        <span class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded">Tự nhận tại nhà</span>
                                        <span class="bg-surface-container-lowest text-on-surface-variant font-label-sm text-label-sm px-2 py-0.5 rounded">Tặng mượn đèn lều</span>
                                        <span class="text-on-surface-variant font-body-sm text-body-sm ml-auto">Gửi lúc 11:30 hôm nay</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end gap-space-sm pt-space-xs">
                                <button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg px-4 py-2 rounded-lg flex items-center gap-1.5 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                    <span>Xem tài sản &amp; Chat</span>
                                </button>
                            </div>
                        </div>
                        <!-- Offer Card 3 -->
                        <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md transition-all">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-space-sm">
                                <div class="flex items-center gap-space-sm">
                                    <div class="relative">
                                        <img class="w-12 h-12 rounded-full object-cover" data-alt="Chân dung đại diện cửa hàng Hué Outdoor Camping Equipment với logo chuyên nghiệp hiện đại" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBlci2RfOMpTm7z1l-120P_S_2GThlGmMZT6_ImqoeJwWRazQJAnAvsxz1oNzTCg8p6rE6nIDGy56-xB-7uJ8v1P8Zp855bGXkfEOpnNjqtbDc0wB546aC0oKxSMH0oxRBsq-bI2DwyxKfcQuJUW4dcQEnwgQCLcMdv91O6SupC-ukjwhCLO5e33sTJUTQAkLxkzV32aCaUS16cyrYEA8zMzoDMMdwwSEfSOAsfrKDuU75_RGvGMMg" />
                                        <span class="absolute bottom-0 right-0 w-3.5 h-3.5 bg-secondary rounded-full ring-2 ring-surface-container-lowest"></span>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <span class="font-label-lg text-label-lg text-on-surface font-semibold">Hue Camping Hub</span>
                                            <span class="inline-flex items-center gap-0.5 bg-surface-container-low text-secondary text-[11px] font-label-sm px-2 py-0.5 rounded-full font-semibold">
                                                <span class="material-symbols-outlined text-[12px]">verified</span> Shop Uy tín 99/100
                                            </span>
                                        </div>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">Cửa hàng trang thiết bị dã ngoại • 0.9 km (Đường Lê Lợi, Huế)</span>
                                    </div>
                                </div>
                                <div class="text-right flex md:flex-col items-baseline md:items-end justify-between">
                                    <div class="flex items-baseline gap-1">
                                        <span class="font-headline-md text-headline-md text-secondary font-bold">250.000 đ</span>
                                        <span class="font-body-sm text-body-sm text-on-surface-variant">/ ngày</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm text-on-surface-variant">Đặt cọc: 0 đ (Cầm CCCD gốc)</span>
                                </div>
                            </div>
                            <p class="font-body-sm text-body-sm text-on-surface">
                                Gói trọn bộ cắm trại gia đình: 1 Lều Vintage Glamping 4-5 người, 1 Thảm lót cách nhiệt, 1 Bàn dã ngoại cuộn gỗ, 4 Ghế dù gấp gọn Kermit. Đồ mới 100%, bảo dưỡng thơm tho khử khuẩn sau mỗi lượt thuê.
                            </p>
                            <div class="flex items-center justify-end gap-space-sm pt-space-xs">
                                <button class="bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg px-4 py-2 rounded-lg flex items-center gap-1.5 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-[18px]">chat</span>
                                    <span>Chat với Shop</span>
                                </button>
                                <button class="bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg px-5 py-2 rounded-lg flex items-center gap-1.5 shadow-sm transition-all" type="button">
                                    <span>Xem chi tiết gói</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Public Q&A / Community Discussion -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                        <div class="flex items-center justify-between">
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Hỏi đáp công khai với người cần thuê</h3>
                            <span class="font-label-sm text-label-sm text-on-surface-variant">2 câu hỏi</span>
                        </div>
                        <!-- Existing Comments -->
                        <div class="flex flex-col gap-space-md">
                            <!-- Comment 1 -->
                            <div class="flex items-start gap-space-sm">
                                <img class="w-9 h-9 rounded-full object-cover" data-alt="Chân dung avatar người hỏi Nguyễn Minh với phong cách trẻ trung" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrn7SnxlJjonbGimIn3NBT_0ZHAnPbo0woONqRwHVTgwbXr67H3FkTGoXOwrA8O9h87n76X4zIF5mWI670dmchnDFi_H2J2eyy0dGTM_JF4FhrJ4pf88ONesY82_Moykssp0qcLPVfR6pvM83Ftc4YxqAIY4_kgwuDb4ePxIDm5mqy0SCvB9fXt0RDXoM1yScbkBrkUWu2u6cbLLnefhDRx5azdOdAziqfd9fsAUl8i-SEhw8z3kU" />
                                <div class="flex-1 bg-surface-container-low rounded-xl p-space-sm">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="font-label-md text-label-md text-on-surface font-semibold">Minh Triết</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">2 giờ trước</span>
                                    </div>
                                    <p class="font-body-md text-body-md text-on-surface">Chào bạn Phúc, bạn có cần thêm bếp nướng dã ngoại mini và vỉ than không? Mình có sẵn nguyên bộ kèm túi than sạch.</p>
                                    <!-- Reply -->
                                    <div class="mt-space-sm pl-space-md border-l-2 border-secondary flex items-start gap-space-xs">
                                        <div class="min-w-0">
                                            <div class="flex items-center gap-1.5 mb-0.5">
                                                <span class="font-label-sm text-label-sm text-secondary font-bold">Lê Hoàng Phúc</span>
                                                <span class="bg-secondary-container text-on-secondary-container font-label-sm text-[10px] px-1.5 py-0.2 rounded font-semibold">Chủ bài đăng</span>
                                            </div>
                                            <p class="font-body-sm text-body-sm text-on-surface">Dạ em cảm ơn anh, gia đình em đợt này tự chuẩn bị đồ ăn nấu sẵn nên chỉ cần lều với bàn ghế ăn nhẹ thôi ạ!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment 2 -->
                            <div class="flex items-start gap-space-sm">
                                <img class="w-9 h-9 rounded-full object-cover" data-alt="Chân dung một cô gái năng động thích du lịch trải nghiệm tên Hà My" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5B_-p4n3dERbEhA8xN22Gezd9lAE_63N1g5iffYfRkqK4llqlgxA4bn0vpXgILK5Vmk7Gf0mfuHDWy3sulg99h5im5bWEYWWs-5a0lvDm7K2EGZ8ZVu2y4JLfVdEK6GtHcLtRWzyK0D1LIA2zRYin8w3iWNiqX7M7I8TzS0BRr4mY2TIdtpz84y2WhnqVMSIeMeEB9R0__UMrfwJ6HdIjOy7saTsXQhqyByR7kUb-9ykLP8lP0EA" />
                                <div class="flex-1 bg-surface-container-low rounded-xl p-space-sm">
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="font-label-md text-label-md text-on-surface font-semibold">Hà My Outdoor</span>
                                        <span class="font-label-sm text-label-sm text-on-surface-variant">1 giờ trước</span>
                                    </div>
                                    <p class="font-body-md text-body-md text-on-surface">Thời gian trả đồ vào chiều ngày 12/10 khoảng 18h tại khách sạn Silk Path đường Lê Lợi được không anh?</p>
                                </div>
                            </div>
                        </div>
                        <!-- New Comment Input -->
                        <div class="flex items-center gap-space-sm pt-space-xs">
                            <input class="flex-1 bg-surface-container-low text-on-surface font-body-md text-body-md px-4 py-2.5 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" placeholder="Đặt câu hỏi công khai cho anh Phúc về yêu cầu này..." type="text" />
                            <button class="bg-secondary hover:bg-on-secondary-fixed-variant text-on-secondary font-label-md text-label-md px-4 py-2.5 rounded-lg transition-colors flex items-center gap-1" type="button">
                                <span>Gửi hỏi</span>
                                <span class="material-symbols-outlined text-[16px]">send</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Right Column: Offer Submission Form & Escrow Trust Assurances (4 cols) -->
                <div class="lg:col-span-4 flex flex-col gap-space-lg sticky top-20">
                    <!-- Submission Card -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-md flex flex-col gap-space-md">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center">
                                <span class="material-symbols-outlined text-[20px]">handshake</span>
                            </div>
                            <div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface">Gửi đề xuất cho thuê</h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Bạn có món đồ người này đang tìm?</p>
                            </div>
                        </div>
                        <form class="flex flex-col gap-space-md" onsubmit="event.preventDefault(); alert('Đề xuất của bạn đã được gửi thành công đến Lê Hoàng Phúc!');">
                            <!-- Asset Selection Selector -->
                            <div>
                                <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 font-medium">Chọn tài sản từ kho của bạn:</label>
                                <div class="relative">
                                    <select class="w-full bg-surface-container-low text-on-surface font-body-md text-body-md px-3.5 py-2.5 rounded-lg appearance-none focus:outline-none focus:ring-2 focus:ring-secondary pr-10 cursor-pointer">
                                        <option value="1">Lều Coleman 4P + Bàn ghế (Đang rảnh)</option>
                                        <option value="2">Bộ bếp gas dã ngoại Campingmoon</option>
                                        <option value="custom">+ Đề xuất món đồ ngoài danh mục...</option>
                                    </select>
                                    <span class="material-symbols-outlined absolute right-3 top-2.5 text-on-surface-variant pointer-events-none text-[20px]">expand_more</span>
                                </div>
                            </div>
                            <!-- Price & Deposit Inputs -->
                            <div class="grid grid-cols-2 gap-space-sm">
                                <div>
                                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 font-medium">Giá thuê (đ/ngày)</label>
                                    <div class="relative">
                                        <input class="w-full bg-surface-container-low text-on-surface font-label-lg text-label-lg px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" type="text" value="200.000" />
                                        <span class="absolute right-2.5 top-2 text-[12px] text-on-surface-variant">đ</span>
                                    </div>
                                </div>
                                <div>
                                    <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 font-medium">Tiền cọc yêu cầu</label>
                                    <div class="relative">
                                        <input class="w-full bg-surface-container-low text-on-surface font-label-lg text-label-lg px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary" type="text" value="500.000" />
                                        <span class="absolute right-2.5 top-2 text-[12px] text-on-surface-variant">đ</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Total Revenue Estimate Box -->
                            <div class="bg-surface-container-low p-space-sm rounded-lg flex items-center justify-between">
                                <div>
                                    <span class="block font-label-sm text-label-sm text-on-surface-variant">Thu nhập dự kiến (3 ngày)</span>
                                    <span class="font-headline-sm text-headline-sm text-secondary font-bold">600.000 đ</span>
                                </div>
                                <span class="text-[11px] font-label-sm text-on-secondary-container bg-secondary-container px-2 py-0.5 rounded-md font-semibold">Phí sàn 0%</span>
                            </div>
                            <!-- Note / Message Input -->
                            <div>
                                <label class="block font-label-sm text-label-sm text-on-surface-variant mb-1 font-medium">Lời nhắn &amp; Điều kiện kèm theo:</label>
                                <textarea class="w-full bg-surface-container-low text-on-surface font-body-sm text-body-sm p-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-secondary resize-none" placeholder="Mô tả tình trạng đồ dùng, phụ kiện tặng kèm, hoặc địa chỉ nhận đồ thuận tiện..." rows="3"></textarea>
                            </div>
                            <!-- Checkbox Option -->
                            <label class="flex items-start gap-2.5 cursor-pointer">
                                <input checked="" class="mt-0.5 rounded text-secondary focus:ring-secondary" type="checkbox" />
                                <span class="font-body-sm text-body-sm text-on-surface-variant">
                                    Tôi đồng ý giao nhận đúng tình trạng đã cam kết và tuân thủ quy chế giải quyết tranh chấp RentShare.
                                </span>
                            </label>
                            <!-- Submit CTA Buttons -->
                            <div class="flex flex-col gap-2 pt-space-xs">
                                <button class="w-full bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label-lg text-label-lg py-3 rounded-lg flex items-center justify-center gap-2 shadow-md transition-all" type="submit">
                                    <span class="material-symbols-outlined text-[20px]">send_time_extension</span>
                                    <span>Gửi đề xuất cho thuê ngay</span>
                                </button>
                                <button class="w-full bg-surface-container hover:bg-surface-container-high text-on-surface font-label-lg text-label-lg py-2.5 rounded-lg flex items-center justify-center gap-2 transition-colors" type="button">
                                    <span class="material-symbols-outlined text-[18px]">mail</span>
                                    <span>Nhắn tin riêng cho anh Phúc</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- RentShare Safety Guarantee Card -->
                    <div class="bg-surface-container-lowest rounded-xl p-space-lg shadow-sm flex flex-col gap-space-md">
                        <div class="flex items-center gap-2 text-secondary">
                            <span class="material-symbols-outlined text-[24px]">verified_user</span>
                            <h4 class="font-label-lg text-label-lg font-bold uppercase tracking-wider">Bảo chứng an toàn RentShare</h4>
                        </div>
                        <ul class="flex flex-col gap-3 font-body-sm text-body-sm text-on-surface-variant">
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">security</span>
                                <span><strong>Bảo hiểm hư hại 10.000.000 đ:</strong> Tự động kích hoạt khi bàn giao tài sản qua ứng dụng.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">account_balance_wallet</span>
                                <span><strong>Ký quỹ tiền cọc minh bạch:</strong> RentShare giữ tiền cọc trung gian an toàn và chỉ hoàn trả khi hai bên xác nhận đồ nguyên vẹn.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-secondary text-[18px] shrink-0 mt-0.5">badge</span>
                                <span><strong>Xác thực CCCD gắn chip:</strong> 100% người thuê và người cho thuê đều trải qua quy trình eKYC định danh sinh trắc học.</span>
                            </li>
                        </ul>
                        <div class="pt-2 border-t border-surface-container-high flex items-center justify-between text-[12px] font-label-sm text-on-surface-variant">
                            <span>Cần trợ giúp trực tiếp?</span>
                            <a class="text-secondary font-semibold hover:underline flex items-center gap-1" href="#">
                                <span>Hotline 24/7</span>
                                <span class="material-symbols-outlined text-[14px]">call</span>
                            </a>
                        </div>
                    </div>
                    <!-- Mini Regional Demand Widget -->
                    <div class="bg-surface-container-low rounded-xl p-space-md flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-surface-container flex items-center justify-center text-secondary">
                                <span class="material-symbols-outlined text-[20px]">trending_up</span>
                            </div>
                            <div>
                                <span class="block font-label-md text-label-md text-on-surface font-semibold">Nhu cầu đồ dã ngoại tại Huế</span>
                                <span class="font-body-sm text-body-sm text-on-surface-variant">Tăng 35% trong tuần này</span>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-on-surface-variant text-[18px]">north_east</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection