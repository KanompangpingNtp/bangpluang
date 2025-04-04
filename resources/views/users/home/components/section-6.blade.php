<head>
    <style>
        .bg-page6 {
            background-image: url('{{ asset('pages/home/section-6/bg-6.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 4rem 0rem;
        }

        .title-section6 {
            font-size: 35px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .bg-blue-section6 {
            background: linear-gradient(to bottom, #85e3ff, #85e3ff);
            border-radius: 30px;
        }

        .bg-card-section6 {
            position: relative;
            background: transparent;
            border-radius: 20px;
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }

        .bg-card-section6:hover {
            transform: scale(1.02);
            /* ขยายเล็กน้อยเมื่อ hover */
            box-shadow:
                4px 4px 8px rgba(255, 255, 255, 0.6),
                -4px -4px 8px rgba(255, 255, 255, 0.6),
                4px -4px 8px rgba(255, 255, 255, 0.6),
                -4px 4px 8px rgba(255, 255, 255, 0.6);
        }


        .bg-card-section6 img {
            height: 100px;
            width: 100px;
            border-radius: 20px;
            object-fit: cover;
        }

        .control-date {
            bottom: 8%;
            left: 3%;
        }

        @media (max-width: 1200px) {

            .control-date {
                bottom: 8%;
                left: 2%;
            }
        }

        @media (max-width: 767px) {

            .bg-card-section6 img {
                height: auto;
                width: 100%;
            }

            .control-date {
                bottom: 3%;
                left: 3%;
            }
        }


        .btn-viewall-section6 {
            background: linear-gradient(to bottom, #1ecbff, #1ecbff);
            width: 170px;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            border-radius: 15px;
            padding: 10px 20px;
            box-shadow:
                2px 2px 2px rgba(255, 255, 255, 0.6),
                -2px -2px 2px rgba(255, 255, 255, 0.6),
                2px -2px 2px rgba(255, 255, 255, 0.6),
                -2px 2px 2px rgba(255, 255, 255, 0.6);
            transition: all 0.3s ease-in-out;
            /* ทำให้การเปลี่ยนแปลงนุ่มนวล */
        }

        .btn-viewall-section6:hover {
            transform: scale(1.02);
            /* ขยายปุ่มเล็กน้อย */
            color: #fff;
            box-shadow:
                4px 4px 8px rgba(255, 255, 255, 0.6),
                -4px -4px 8px rgba(255, 255, 255, 0.6),
                4px -4px 8px rgba(255, 255, 255, 0.6),
                -4px 4px 8px rgba(255, 255, 255, 0.6);
        }

        .title-coomment {
            background: linear-gradient(to bottom, #82d5fb, #23a8df);
            border-radius: 20px;
            border: 2px solid #ffff;
        }

        .title-coomment .main-title {
            font-size: 25px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .title-coomment .sub-title {
            font-size: 20px;
            color: #ffffff;
        }

        .btn-accept-comment {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            background-color: #ffff;
            border-radius: 30px;
            border: 4px solid #1ecbff;
            font-size: 20px;
            transition: all 0.3s ease-in-out;
        }

        /* เอฟเฟกต์เมื่อโฮเวอร์ปุ่ม */
        .btn-accept-comment:hover {
            background-color: #1ecbff;
            /* เปลี่ยนพื้นหลังเป็นสีฟ้า */
            color: white;
            /* เปลี่ยนตัวอักษรเป็นสีขาว */
            border-color: #0fa7d7;
            /* เปลี่ยนสีขอบให้เข้มขึ้น */
            transform: scale(1.05);
            /* ขยายขึ้นเล็กน้อย */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            /* เพิ่มเงา */
        }

        .lay-out-btn-accept {
            border-radius: 40px;
            border: 4px solid #1ecbff;
            display: inline-block;
            transition: all 0.3s ease-in-out;
        }

        /* เอฟเฟกต์เมื่อโฮเวอร์กรอบรอบปุ่ม */
        .lay-out-btn-accept:hover {
            border-color: #0fa7d7;
            /* เปลี่ยนสีขอบให้เข้มขึ้น */
            transform: scale(1.05);
            /* ขยายขึ้นเล็กน้อย */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            /* เพิ่มเงา */
        }

        .bg-footer-comment {
            background-color: #42b7e8;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

    </style>
</head>

<main class="d-flex bg-page6">
    <div class="container ">
        <div class="row w-100">
            <div class="col-xl-6 d-flex flex-column justify-content-center align-items-center">
                <div class="title-section6">
                    ข่าวประชาสัมพันธ์
                </div>
                <img src="{{ asset('pages/home/section-6/กรอบข่าวประชาสัมพันธ์.gif') }}" alt="topper" class="mt-4 img-fluid px-2" style="z-index: 2; margin-bottom:-7px;">
                <div class="bg-blue-section6 d-flex flex-column justify-content-center px-3 py-4">
                    @foreach ($pressRelease->take(4) as $item)
                        <a href="{{ route('PressReleaseShowDetails', $item->id) }}" class="bg-card-section6 pt-2 px-3 pb-4 d-flex flex-column justify-content-start align-items-start mb-2">
                            <div class="d-flex flex-column flex-md-row justify-content-center align-items-start gap-2 w-100">
                                @php
                                    $imagePath = optional($item->photos->where('post_photo_status', '1')->first())->post_photo_file;
                                @endphp
                                <img src="{{ $imagePath ? asset('storage/' . $imagePath) : asset('pages/home/section-5/LOGOบางพลวง.png') }}"
                                     alt="logo" class="bg-white">
                                <div class="text d-flex flex-column justify-content-center" style="width: 100%; height:100%;">
                                    <div class="text-dark bg-white py-1 py-md-3 py-lg-1 py-xl-3 px-3 lh-sm fs-6 rounded-4 h-100">
                                        {{ Str::limit($item->title_name, 140, '...') }}
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 mt-4 rounded-4 ms-3 me-2" style="border:2px solid #ffff;">
                                {{-- เส้น --}}
                            </div>
                            <div class="bg-white text-dark fw-bold d-flex justify-content-center align-items-center py-1 px-2 rounded-4 text-decoration control-date" style="position: absolute; font-size:14px;">
                                <img src="{{ asset('pages/home/section-6/นาฬิกา.png') }}" alt="clock" style="width: 15px; height:15px;" class="me-1">
                                {{ \Carbon\Carbon::parse($item->date)->format('d/m/Y') }}
                            </div>
                        </a>
                    @endforeach
                    <a href="{{route('PressReleaseShowData')}}" class="btn-viewall-section6 px-4 py-1 mt-1 ms-auto">
                        <img src="{{ asset('pages/home/section-5/door-icon.png') }}" alt="icon-door"> ดูทั้งหมด
                    </a>
                </div>
            </div>
            <div class="col-xl-6 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-end">
                    <div class="d-flex flex-column justify-content-center align-items-center mt-4">
                        <a href="#" class="banner-hover px-3 py-1">
                            <img src="{{ asset('pages/home/section-6/banner_ศูนพัฒนาเด็ก.png') }}" alt="banner_ศูนพัฒนาเด็ก" class="img-fluid ">
                        </a>
                        <a href="https://www.facebook.com/BangPhluangSubDistrict" class="banner-hover px-3 py-1">
                            <img src="{{ asset('pages/home/section-6/BN เฟสบุ๊ค.png') }}" alt="facebook" class="img-fluid ">
                        </a>
                        <a href="#" class="banner-hover px-3 py-1">
                            <img src="{{ asset('pages/home/section-6/BN ห้องสมุด.png') }}" alt="e-library" class="img-fluid">
                        </a>
                    </div>
                    <a href="https://lin.ee/rwSQgop" class="banner-hover px-3 pt-2 ">
                        <img src="{{ asset('pages/home/section-6/line_.png') }}" alt="line" class="img-fluid">
                    </a>
                </div>
                <a href="{{route('eservice_pages')}}" class="banner-hover px-4 py-1">
                    <img src="{{ asset('pages/home/section-6/oss.png') }}" alt="oss" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-12 d-flex flex-column mt-5">
            <div class="bg-white d-flex flex-column justify-content-center align-items-start p-2" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                <div class="d-flex justify-content-between w-100">
                    <div class="title-coomment py-1 ps-1 pe-3 d-flex justify-content-center align-items-center" style="margin-top: -1rem; margin-left:-7px;">
                        <img src="{{ asset('pages/home/section-6/icon-comment.png') }}" alt="icon" class="img-fluid" style="margin-top: -1rem;">
                        <div class="text-title lh-1 ms-2">
                            <div class="main-title">
                                แสดงความคิดเห็น
                            </div>
                            <div class="sub-title">
                                อยากให้อบต.บางพลวงเร่งแก้ปัญหาเรื่องใด
                            </div>
                        </div>
                    </div>
                    {{-- <form action="" method="POST"> --}}
                        <div class="lay-out-btn-accept px-2 py-2 ms-auto me-4 d-none d-md-block">
                            {{-- <a href="#" class="btn-accept-comment p-2">กดโหวต</a> --}}
                            <button type="submit" class="btn-accept-comment p-2">กดโหวต</button>
                        </div>
                </div>
                <div class="d-flex flex-column justify-content-start align-items-center">
                    <div class="row p-3">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option" id="option1" value="1">
                                <label class="form-check-label" for="option1">จัดการเรื่องการป้องกันน้ำท่วม</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option" id="option2" value="2">
                                <label class="form-check-label" for="option2">แก้ไขปัญหาสิ่งแวดล้อม</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option" id="option3" value="3">
                                <label class="form-check-label" for="option3">แก้ไขปัญหาไฟฟ้าดับบ่อย</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option" id="option4" value="4">
                                <label class="form-check-label" for="option4">จัดมาตรการป้องกันน้ำท่วม</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option" id="option5" value="5">
                                <label class="form-check-label" for="option5">แก้ไขปัญหายาเสพติด</label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="option" id="option6" value="6">
                                <label class="form-check-label" for="option6">แก้ไขปัญหาลักขโมย</label>
                            </div>
                        </div>
                    </div>


                    <div class="lay-out-btn-accept px-2 py-2  me-4 d-block d-md-none">
                        <button type="submit" class="btn-accept-comment p-2">กดโหวต</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="bg-footer-comment p-3">

            </div>
        </div>
    </div>
</main>
