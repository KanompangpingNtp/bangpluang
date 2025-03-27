<head>
    <style>
        .bg-page2 {
            background-image: url('{{ asset('pages/home/section-2/bg-2.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 2rem 0rem;
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
            padding: 1rem 5rem;
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
            font-size: 24px;
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
            width: 100px;
            /* ปรับขนาดรูป */
            height: auto;
            transition: transform 0.3s ease;
            /* เพิ่ม transition ให้รูปภาพ */
        }

        .bg-btn-section1:hover img {
            transform: translateX(-10px);
            /* เลื่อนรูปไปทางซ้ายเมื่อ hover */
        }
    </style>
</head>

<main class="d-flex bg-page2">
    <div class="container d-flex flex-column justify-content-center align-items-center">

        <!-- Container สำหรับเลื่อนแนวนอน -->
        <div class="horizontal-scroll-container">
            <div class="horizontal-scroll-content justify-content-between">
                <!-- Slide 1 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                            <div class="consultant-info text-center lh-sm" >
                                <span class="fs-3 fw-bold">ปลัด</span><br>
                                <span>ชื่อ-นามสกุล</span><br>
                                <a href="tel:9999999990" class="fw-bold text-center text-dark pe-2 mt-2"
                                    style="font-size:1.25rem; text-decoration: none;">
                                    999-9999990
                                </a>
                            </div>
                        <img src="{{ asset('pages/home/section-1/4.png') }}" alt="personal3" class="mb-4 personal-img">
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                            <div class="consultant-info text-center lh-sm">
                                <span class="fs-4 fw-bold">รองปลัด</span><br>
                                <span>ชื่อ-นามสกุล</span><br>
                                <a href="tel:9999999990" class="fw-bold text-dark pe-2 mt-2"
                                    style="font-size:17px; text-decoration: none;">
                                    999-9999990
                                </a>
                            </div>
                        <img src="{{ asset('pages/home/section-1/5.png') }}" alt="personal1" class="mb-4 personal-img">
                    </div>

                </div>
                <!-- Slide 3 -->
                
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                            <div class="consultant-info text-center lh-sm">
                                <span class="fs-4 fw-bold">หัสหน้าสำนัก</span><br>
                                <span>ชื่อ-นามสกุล</span><br>
                                <a href="tel:9999999990" class="fw-bold text-dark pe-2 mt-2"
                                    style="font-size:17px; text-decoration: none;">
                                    999-9999990
                                </a>
                            </div>
                        <img src="{{ asset('pages/home/section-1/2.png') }}" alt="personal2" class="mb-4 personal-img">
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                            <div class="consultant-info text-center lh-sm">
                                <span class="fs-4 fw-bold">ผอ.กองคลัง</span><br>
                                <span>ชื่อ-นามสกุล</span><br>
                                <a href="tel:9999999990" class="fw-bold text-dark pe-2 mt-2"
                                    style="font-size:17px; text-decoration: none;">
                                    999-9999990
                                </a>
                            </div>
                        <img src="{{ asset('pages/home/section-1/1.png') }}" alt="personal4" class="mb-4 personal-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="horizontal-scroll-container">
            <div class="horizontal-scroll-content justify-content-between justify-content-lg-center">
                <!-- Slide 2 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                            <div class="consultant-info text-center lh-sm">
                                <span class="fs-4 fw-bold">ผอ.กองช่าง</span><br>
                                <span>ชื่อ-นามสกุล</span><br>
                                <a href="tel:9999999990" class="fw-bold text-dark pe-2 mt-2"
                                    style="font-size:17px; text-decoration: none;">
                                    999-9999990
                                </a>
                            </div>
                        <img src="{{ asset('pages/home/section-1/5.png') }}" alt="personal1" class="mb-4 personal-img">
                    </div>

                </div>
                <!-- Slide 3 -->
                
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                            <div class="consultant-info text-center lh-sm">
                                <span class="fs-4 fw-bold">ผอ.กองการศึกษา</span><br>
                                <span>ชื่อ-นามสกุล</span><br>
                                <a href="tel:9999999990" class="fw-bold text-dark pe-2 mt-2"
                                    style="font-size:17px; text-decoration: none;">
                                    999-9999990
                                </a>
                            </div>
                        <img src="{{ asset('pages/home/section-1/2.png') }}" alt="personal2" class="mb-4 personal-img">
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                            <div class="consultant-info text-center lh-sm">
                                <span class="fs-4 fw-bold">ผอ.กองการเกษตร</span><br>
                                <span>ชื่อ-นามสกุล</span><br>
                                <a href="tel:9999999990" class="fw-bold text-dark pe-2 mt-2"
                                    style="font-size:17px; text-decoration: none;">
                                    999-9999990
                                </a>
                            </div>
                        <img src="{{ asset('pages/home/section-1/1.png') }}" alt="personal4" class="mb-4 personal-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
