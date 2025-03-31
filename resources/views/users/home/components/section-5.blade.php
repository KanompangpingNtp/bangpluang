<head>
    <style>
        .bg-page5 {
            background-image: url('{{ asset('pages/home/section-5/bg-5.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 4rem 0rem;
        }

        .title-section5 {
            font-size: 45px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .bg-blue-section5 {
            background: linear-gradient(to bottom, #86ccfe, #c7e4ff, #c9e5ff);
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .bg-card-section5 {

            background: linear-gradient(to bottom, #85cffe, #33acdd);
            border-radius: 20px;
            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }

        .bg-card-section5:hover {
            transform: scale(1.02);
            /* ขยายเล็กน้อยเมื่อ hover */
            box-shadow:
                4px 4px 8px rgba(255, 255, 255, 0.6),
                -4px -4px 8px rgba(255, 255, 255, 0.6),
                4px -4px 8px rgba(255, 255, 255, 0.6),
                -4px 4px 8px rgba(255, 255, 255, 0.6);
        }


        .bg-card-section5 img {
            height: 100px;
            width: 100px;
            border-radius: 20px;
            object-fit: cover;
        }

        .btn-viewall-section5 {
            background: linear-gradient(to bottom, #89d7fd, #37adde);
            width: 170px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            border-radius: 15px;
            padding: 10px 20px;
            /* เพิ่มขนาดปุ่ม */
            transition: all 0.3s ease-in-out;
            /* ทำให้การเปลี่ยนแปลงนุ่มนวล */
        }

        .btn-viewall-section5:hover {
            background: linear-gradient(to bottom, #37adde, #1f8dc0);
            /* เปลี่ยนสีให้เข้มขึ้น */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            /* เพิ่มเงา */
            transform: scale(1.02);
            /* ขยายปุ่มเล็กน้อย */
            color: #fff;
            box-shadow:
                4px 4px 8px rgba(255, 255, 255, 0.6),
                -4px -4px 8px rgba(255, 255, 255, 0.6),
                4px -4px 8px rgba(255, 255, 255, 0.6),
                -4px 4px 8px rgba(255, 255, 255, 0.6);
        }

        .btn-link-section5 {
            background: transparent;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            color: #000;
            transition: all 0.3s ease-in-out;
            /* ทำให้ hover ดูนุ่มนวล */
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .btn-link-section5:hover {
            color: #007bff;
            /* เปลี่ยนสีข้อความ */
            text-shadow:
                4px 4px 8px rgba(255, 255, 255, 0.8),
                -4px -4px 8px rgba(255, 255, 255, 0.8),
                4px -4px 8px rgba(255, 255, 255, 0.8),
                -4px 4px 8px rgba(255, 255, 255, 0.8);
            /* ทำให้เงาชัดขึ้น */
            transform: scale(1.05);
            /* ขยายเล็กน้อย */
        }

        .no-reverse img {
            height: 90px;
            margin-left: -2.6rem;
        }

        .yep-reverse img {
            height: 90px;
            margin-left: -2.6rem;
        }

        .bg-blue-right-section5 {
            background: linear-gradient(to bottom, #87ccfe, #c4e3ff, #87ccfe);
            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        @media (max-width: 991px) {
            .bg-blue-right-section5 {
                background: transparent;
                box-shadow: none;
            }

            .yep-reverse img {
                height: 120px;
                margin-left: 0rem;
                margin-right: -2.6rem;
            }

            .bg-blue-section5 {
                border-radius: 20px;
            }
        }

        .banner-hover {
            padding: 7px;
            position: relative;
            overflow: inherit;
        }

        .banner-text {
            position: absolute;
            width: 80%;
            /* กำหนดความกว้างให้กับข้อความ */
            white-space: normal;
            /* ให้ข้อความห่อได้ */
        }

        .banner-hover:hover .banner-text {
            color: #fff;
        }

        .banner-hover img {
            transition: transform 0.3s ease, opacity 0.3s ease;
            /* เพิ่ม transition ให้ภาพ */
        }

        .banner-hover:hover img {
            transform: scale(1.1);
            /* ขยายขนาดรูปภาพเมื่อ hover */
            opacity: 0.8;
            /* ลดความเข้มของภาพ */
        }

    </style>
</head>

<main class="d-flex bg-page5">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title-section5">
            ข่าวกิจกรรม
        </div>
        <div class="row w-100">

            <div class="col-lg-6 col-xl-4 d-flex flex-column justify-content-center align-items-center mb-4 mb-xl-0">
                <img src="{{ asset('pages/home/section-5/กรอบกลาง.gif') }}" alt="topper" class="mt-4 img-fluid px-2" style="z-index: 2; margin-bottom:-7px;">
                <div class="bg-blue-section5 d-flex flex-column justify-content-center px-3 py-4">
                    @foreach ($activity->take(3) as $item)
                    <a href="{{ route('ActivityShowDetails', $item->id) }}" class="bg-card-section5 p-2 d-flex justify-content-center align-items-center gap-2 mb-2">
                        @php
                        $imagePath = optional($item->photos->where('post_photo_status', '1')->first())->post_photo_file;
                        @endphp
                        <img src="{{ $imagePath ? asset('storage/' . $imagePath) : asset('pages/home/section-5/LOGOบางพลวง.png') }}" alt="logo" class="bg-white">
                        <div class="text d-flex flex-column justify-content-center">
                            <div class="bg-white py-1 px-4 text-dark text-center fw-bold fs-6 rounded-5">
                                {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
                            </div>
                            <div class="text-white p-1 lh-sm fs-6">
                                {{ Str::limit($item->title_name, 70, '...') }}
                            </div>
                        </div>
                    </a>
                    @endforeach

                    <a href="{{route('ActivityShowData')}}" class="btn-viewall-section5 px-4 py-1 mt-2 ms-auto">
                        <img src="{{ asset('pages/home/section-5/door-icon.png') }}" alt="icon-door"> ดูทั้งหมด
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                <div class="bg-blue-right-section5 d-flex flex-column align-items-start">
                    <a href="#" class="btn-link-section5 no-reverse lh-sm d-flex justify-content-start align-items-center">
                        <img src="{{ asset('pages/home/section-5/iconขวา1.png') }}" alt="icon1">
                        <span class="ms-2 me-4">รางวัล<br>แห่งความภาคภูมิใจ</span>
                    </a>
                    <a href="#" class="btn-link-section5 yep-reverse lh-sm d-flex flex-lg-row-reverse justify-content-start align-items-center">
                        <span class="ms-2 me-4">ปฎิทินกิจกรรม</span>
                        <img src="{{ asset('pages/home/section-5/iconขวา2.png') }}" alt="icon1">
                    </a>
                    <a href="#" class="btn-link-section5 no-reverse lh-sm d-flex justify-content-start align-items-center">
                        <img src="{{ asset('pages/home/section-5/iconขวา3.png') }}" alt="icon1">
                        <span class="ms-2 me-4">ประมวลจริยธรรม</span>
                    </a>
                    <a href="#" class="btn-link-section5 yep-reverse lh-sm d-flex flex-lg-row-reverse justify-content-start align-items-center">
                        <span class="ms-2 me-4">องค์กรแห่งการ<br>เรียนรู้(KM)</span>
                        <img src="{{ asset('pages/home/section-5/iconขวา4.png') }}" alt="icon1">
                    </a>
                    <a href="#" class="btn-link-section5 no-reverse lh-sm d-flex justify-content-start align-items-center">
                        <img src="{{ asset('pages/home/section-5/iconขวา5.png') }}" alt="icon1">
                        <span class="ms-2 me-4">แผนจัดซื้อจัดจ้าง</span>
                    </a>
                    <a href="#" class="btn-link-section5 yep-reverse lh-sm d-flex flex-lg-row-reverse justify-content-start align-items-center">
                        <span class="ms-2 me-4">แผนอัตรากำลัง</span>
                        <img src="{{ asset('pages/home/section-5/iconขวา6.png') }}" alt="icon1">
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-12 d-flex justify-content-center align-items-center order-xl-first ">
                <img src="{{ asset('pages/home/section-5/ป้ายบางพลวง.png') }}" alt="banner" class="img-fluid">
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-4 mx-0 mx-md-5 px-0 px-md-5">
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN1.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark banner-text" style="left: 57%; top: 68%; font-size:16px;">อาสาสมัครป้องกันภัย<br>ฝ่ายพลเรือน</span>
            </a>
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN2.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark banner-text" style="left: 57%; top: 68%; font-size:18px;">ประกาศ<br>จัดซื้อจัดจ้าง</span>
            </a>
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN3.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark  banner-text" style="left: 57%; top: 68%; font-size:18px;">ศูนย์ดำรงธรรม</span>
            </a>
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN4.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark  banner-text" style="left: 57%; top: 68%; font-size:14px;">การประเมินประสิทธิ<br>ภาพของ อปท. (LPA)</span>
            </a>
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN5.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark banner-text" style="left: 57%; top: 68%; font-size:14px;">ศูนย์ข้อมูลข่าวสาร<br>อิเล็กทรอนิกส์
                    <br>ราชการ(OIC)</span>
            </a>
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN6.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark banner-text" style="left: 57%; top: 68%; font-size:16px;">สาระดีๆจากศาล<br>ปกครอง</span>
            </a>
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN7.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark  banner-text" style="left: 57%; top: 68%; font-size:14px;">สำนักงานคณะกรรมการ<br>ป้องกันและปราบปราม<br>การทุจริตแห่งชาติ</span>
            </a>
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN8.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark banner-text" style="left: 57%; top: 68%; font-size:20px;">E-Leraning</span>
            </a>
            <a href="#" class="col-sm-6 col-lg-4 col-xl-4 lh-1 fw-bold position-relative d-flex justify-content-center align-items-center mt-3 banner-hover">
                <img src="{{ asset('pages/home/section-5/BN9.png') }}" alt="banner" class="img-fluid">
                <span class="position-absolute translate-middle text-center text-dark banner-text" style="left: 57%; top: 68%; font-size:14px;">งานบริการของศูนย์ <br>บริการร่วม One Stop
                    <br>Service</span>
            </a>
        </div>



    </div>
</main>
