<head>
    <style>
        .bg-page1 {
            background-image: url('{{ asset('pages/home/section-1/bg-1.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 4rem 0rem;
        }

        .title-section1 {
            font-size: 60px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและล่าง */
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านซ้ายและบน */
                2px -2px 4px rgba(255, 255, 255, 0.5),
                /* เงาขอบด้านขวาและบน */
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            /* เงาขอบด้านซ้ายและล่าง */
        }

        .consultant-info {
            background: linear-gradient(to left, #ffffff, #ffffff);
            aspect-ratio: 2/√3;
            /* ยืดความกว้างให้มากขึ้น */

            clip-path: polygon(25% -50%, 75% -50%, 100% 50%, 75% 150%, 25% 150%, 0 50%);
            padding: 0.5rem 3rem;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }



        /* ทำให้สามารถเลื่อนได้ในแนวนอน */
        .horizontal-scroll-container {
            overflow-x: auto;
            white-space: nowrap;
            width: 100%;
            padding-bottom: 20px;
        }

        /* กำหนดให้ element ในแนวนอน */
        .horizontal-scroll-content {
            display: flex;
            gap: 10px;
        }

        .scroll-item {
            display: inline-flex;
            flex-direction: column;
            align-items: center;
            justify-content: end;
            flex-shrink: 0;
        }

        .bg-btn-section1 {
            background: linear-gradient(to right, #37b2e5, #88d7fd);
            border-radius: 40px;
            color: #000000;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            position: relative;
            box-shadow:
                2px 2px 3px rgba(0, 0, 0, 0.7);
            transition: background 0.3s, transform 0.3s;
            /* เพิ่ม transition เพื่อให้การเปลี่ยนแปลงดูนุ่มนวล */
        }

        .bg-btn-section1:hover {
            background: linear-gradient(to left, #37b2e5, #88d7fd);
            /* สลับสีพื้นหลังเมื่อ hover */
            transform: scale(1.05);
            /* ขยายขนาดปุ่มเล็กน้อย */
        }

        .bg-btn-section1 img {
            position: absolute;
            left: -30px;
            /* ออกมาครึ่งหนึ่ง */
            width: 90px;
            /* ปรับขนาดรูป */
            height: auto;
            transition: transform 0.3s ease;
            /* เพิ่ม transition ให้รูปภาพ */
        }

        .bg-btn-section1:hover img {
            transform: translateX(-10px);
            /* เลื่อนรูปไปทางซ้ายเมื่อ hover */
        }

        .phone-link:hover {
            color: #008cff !important;
            /* เปลี่ยนสีตอน hover */
            text-decoration: underline !important;
            /* เพิ่มเส้นใต้ */
            transition: 0.3s ease-in-out;
            /* ทำให้เอฟเฟกต์นุ่มนวล */
        }

        .mark-personal-img{
            height: 25rem;
        }

        .personal-img{
            height: 20rem;
        }
    </style>
</head>

<main class="d-flex bg-page1">
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <div class="title-section1">
            คณะผู้บริหาร
        </div>

        <!-- Container สำหรับเลื่อนแนวนอน -->
        <div class="horizontal-scroll-container">
            <div class="horizontal-scroll-content justify-content-between">
                <!-- Slide 1 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="py-3 px-3"
                            style="background: linear-gradient(to right, #37b1e500, #37b2e5, #37b1e500);">
                            <div class="consultant-info fs-6 text-center lh-sm">
                                <span class="fs-5 fw-bold">นายกองค์การบริหาร<br>ส่วนตำบลบางพลวง</span><br>
                                <span>นายจิตรกร แก้วไทรเลิศ</span><br>
                                <a href="tel:+66819492003" class="fw-bold text-center text-dark pe-2 phone-link"
                                    style="font-size:1rem; text-decoration: none;">
                                    081-949-2003
                                </a>
                            </div>

                        </div>

                        <img src="{{ asset('pages/home/section-1/นายก.gif') }}" alt="personal3" class="mb-4 mark-personal-img">
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="py-2 px-3"
                            style="background: linear-gradient(to right, #37b1e500, #37b2e5, #37b1e500);">
                            <div class="consultant-info fs-6 text-center lh-sm">
                                <span class="fs-5 fw-bold">รองนายกองค์การบริหาร<br>ส่วนตำบลบางพลวง</span><br>
                                <span>นายสุดสาย จิระวัฒนโสภณ</span><br>
                                <a href="tel:+66638286843" class="fw-bold text-dark pe-2 d-block mt-2 phone-link"
                                    style="font-size:1rem; text-decoration: none;">
                                    063-828-6843
                                </a>
                            </div>
                        </div>
                        <img src="{{ asset('pages/home/section-1/รองนายก.png') }}" alt="personal1" class=" personal-img">
                    </div>

                </div>
                <!-- Slide 3 -->

                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="py-2 px-3"
                            style="background: linear-gradient(to right, #37b1e500, #37b2e5, #37b1e500);">
                            <div class="consultant-info fs-6 text-center lh-sm">
                                <span class="fs-5 fw-bold">รองนายกองค์การบริหาร<br>ส่วนตำบลบางพลวง</span><br>
                                <span>นางเกษณี หมื่นศรี</span><br>
                                <a href="tel:+66981915666" class="fw-bold text-dark pe-2 d-block mt-2 phone-link"
                                    style="font-size:1rem; text-decoration: none;">
                                    065-548-5948
                                </a>
                            </div>
                        </div>

                        <img src="{{ asset('pages/home/section-1/รองนายกเกษณี.png') }}" alt="personal2" class="personal-img">
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="py-3 px-3"
                            style="background: linear-gradient(to right, #37b1e500, #37b2e5, #37b1e500);">
                        <div class="consultant-info fs-6 text-center lh-md">
                            <span class="fs-5 fw-bold">เลขนุการนายก</span><br>
                            <span>นายปราโมทย์ ตันเสียง</span><br>
                            <a href="tel:+66890019105" class="fw-bold text-dark pe-2 d-block mt-2 phone-link"
                                style="font-size:1rem; text-decoration: none;">
                                089-001-9105
                            </a>
                        </div>
                        </div>
                        <img src="{{ asset('pages/home/section-1/เลขานายก ปราโมท.png') }}" alt="personal4" class="personal-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="row w-100 mt-2 justify-content-start align-items-center">
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="#"
                    class="bg-btn-section1 d-flex justify-content-center align-items-center py-4 ps-5 lh-1"
                    style="font-size:20px;">
                    <img src="{{ asset('pages/home/section-1/logo1.png') }}" alt="icon">
                    สารจากนายก
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="#" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:18px;">
                    <img src="{{ asset('pages/home/section-1/logo2.png') }}" alt="icon">
                    <span style="padding-left: 4rem;">รับแจ้งเรื่องราว<br> ร้องทุกข์</span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="{{ route('itaPage') }}"
                    class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:16px;">
                    <img src="{{ asset('pages/home/section-1/logo3.png') }}" alt="icon">
                    <span style="padding-left: 4rem;">การประเมินคุณธรรม<br>และความโปร่งใส<br> (ITA)</span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="#" class="bg-btn-section1 d-flex justify-content-center align-items-center py-4 lh-1"
                    style="font-size:18px;">
                    <img src="{{ asset('pages/home/section-1/logo4.png') }}" alt="icon">
                    <span style="padding-left: 4rem;">ท้องถิ่นดิจิทัล </span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="#" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:18px;">
                    <img src="{{ asset('pages/home/section-1/logo5.png') }}" alt="icon">
                    <span style="padding-left: 4rem;"> เจตจำนงสุจริต <br> ของผู้บริหาร</span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="#" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:16px;">
                    <img src="{{ asset('pages/home/section-1/logo6.png') }}" alt="icon">
                    <span style="padding-left: 4rem;">รับเรื่องร้องเรียน <br> ทุจริตประพฤติมิชอบ</span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-3 px-4 my-4 my-lg-3">
                <a href="#" class="bg-btn-section1 d-flex justify-content-center align-items-center p-3 lh-1"
                    style="font-size:16px;">
                    <img src="{{ asset('pages/home/section-1/logo7.png') }}" alt="icon">
                    <span style="padding-left: 4rem;"> ระบบภูมิศาสตร์สนเทศ<br>การจัดการน้ำ<br> และชุมชน</span>
                </a>
            </div>
        </div>
    </div>
</main>
