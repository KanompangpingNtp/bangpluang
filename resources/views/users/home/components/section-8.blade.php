<head>
    <style>
        .bg-page-8 {
            background: linear-gradient(to bottom, #c8ecfb, #2890bb);
            min-height: 70vh;
            padding-bottom:2rem;
        }
        .bg-page-in-8 {
            background-image: url('{{ asset('pages/home/section-8/bg-8.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 30vh;
            padding-bottom:2rem;
            border-bottom-left-radius:90px;
            border-bottom-right-radius:90px;
            box-shadow:
                0px 0px 0px rgba(255, 255, 255, 0.5),
                -0px -0px 0px rgba(255, 255, 255, 0.5),
                0px -0px 0px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .title-section8 {
            font-size: 24px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .bg-blue-section8 {
            background: linear-gradient(to bottom, #8ad8fe, #20a8de);
            border-radius: 20px;
            border: 3px solid #ffff;
        }

        .bg-blue-footer{
            background: linear-gradient(to bottom, #8ad8fe, #20a8de);
            border-radius: 40px;
            border: 3px solid #ffff;
        }

        .link-footer a {
    text-decoration: none;
    color: #000; /* สีเริ่มต้นของลิงก์ */
    transition: all 0.3s ease; /* เพิ่มการเปลี่ยนแปลงอย่างนุ่มนวล */
}

.link-footer a:hover {
    color: #1ecbff; /* สีเมื่อ hover */
    text-decoration: underline; /* เพิ่มขีดเส้นใต้ */
    transform: scale(1.1); /* ขยายขนาดเล็กน้อยเมื่อ hover */
}

    </style>
</head>

<main class=" bg-page-8">
    <div class=" d-flex bg-page-in-8">
        <div class="container ">
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-end h-100 gap-2">
                <div class="bg-blue-section8 p-2">
                    <div class="bg-white p-2 rounded-4 text-center fw-bold lh-sm">
                        จำนวนผู้เข้าชมเว็บไซต์ <br>
                        <span class="fs-6">number of website visitors</span>
                    </div>
                </div>
                <div class="bg-blue-section8 p-2 ">
                    <div
                        class="bg-white p-2 rounded-4 text-center fw-bold lh-sm d-flex flex-column flex-md-row justify-content-center align-items-center">
                        <div class="mx-3">
                            ขณะนี้ <br>
                            5
                        </div>
                        <div class="mx-3">
                            วันนี้ <br>
                            12
                        </div>
                        <div class="mx-3">
                            สัปดาห์นี้ <br>
                            50
                        </div>
                        <div class="mx-3">
                            เดือนนี้ <br>
                            400
                        </div>
                        <div class="mx-3">
                            ปีนี้ <br>
                            5000
                        </div>
                    </div>
                </div>
                <div class="bg-blue-section8 p-2">
                    <div class="bg-white p-2 rounded-4 text-center fw-bold lh-sm">
                        <div class="mx-3">
                            ทั้งหมด <br>
                            10000
                        </div>
                    </div>
    
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center mt-5 gap-4">
                <div class="d-flex flex-column justify-content-center align-items-center text-center">
                    <img src="{{asset('navbar/logo.png')}}" alt="icon">
                    <div class="title-section8">
                        องค์การบริหารส่วนตำบลบางพลวง
                    </div>
                    <div class="lh-sm fs-6 text-white fw-bold">
                        Bang Phluang Subdistrict Administrative Organization <br>
                        ตำบลบางพลวง อำเภอบ้านสร้าง จังหวัดปราจีนบุรี 25150
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-start gap-2">
                    <div class="d-flex justify-content-center align-items-center link-footer">
                        <div class="bg-blue-footer p-1">
                            <div class="bg-white p-1 px-3 rounded-5 text-center fw-bold lh-sm">
                                ติดต่อ
                            </div>
                        </div>
                        <div class="ms-3 fw-bold fs-6">
                            เมล์:.................................... 
                            เบอร์ติดต่อ:.................................
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center fs-6">
                        <div class="d-flex justify-content-center align-items-center link-footer gap-2">
                            <div class="bg-blue-footer p-1 me-3">
                                <div class="bg-white p-1 px-3 rounded-5 text-center fw-bold lh-sm">
                                    ตัวช่วยเพิ่มเติม
                                </div>
                            </div>
                            <a href="#">ตรวจสอบอีเมล์</a>
                            <a href="#">เว็บเพื่อนบ้าน</a>
                            <a href="#">เว็บมาสเตอร์</a>
                            <a href="#">สำหรับแอดมิน</a>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center fs-6">
                        <div class="d-flex justify-content-center align-items-center link-footer gap-2">
                            <div class="bg-blue-footer p-1 me-3">
                                <div class="bg-white p-1 px-3 rounded-5 text-center fw-bold lh-sm">
                                    -ข้อมูลเว็บไซต์
                                </div>
                            </div>
                            <a href="#">หน้าแรก</a>
                            <a href="#">ติดต่อ</a>
                            <a href="#">กระดานกระทู้</a>
                            <a href="#">แผนผังเว็บไซต์</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</main>
