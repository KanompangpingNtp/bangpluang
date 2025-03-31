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

        .personal-img-sub{
            height: 16rem;
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
                        <div class="consultant-info text-center lh-sm">
                            <span class="fs-5 fw-bold">ปลัดองค์การบริหาร<br>ส่วนตำบลบางพลวง </span><br>
                            <span>ส.ต.อ.ธานินทร์ คล่องแคล้ว</span><br>
                            <a href="tel:+66819492003" class="fw-bold text-center text-dark pe-2 mt-2"
                                style="font-size:1rem; text-decoration: none;">
                                081-949-2003
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-2/ปลัด.gif') }}" alt="personal3" class="mb-4 mark-personal-img">
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="consultant-info text-center lh-sm">
                            <span class="fs-5 fw-bold">รองปลัดองค์การบริหาร<br>ส่วนตำบลบางพลวง </span><br>
                            <span>นางวรรณนภัส ประสังสิต</span><br>
                            <a href="tel:+66979968289" class="fw-bold text-dark pe-2 mt-2"
                                style="font-size:17px; text-decoration: none;">
                                097-996-8289
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-2/รองปลัด.png') }}" alt="personal1" class="personal-img">
                    </div>

                </div>
                <!-- Slide 3 -->

                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="consultant-info text-center lh-md">
                            <span class="fs-4 fw-bold">หัวหน้าสำนักปลัด</span><br>
                            <span>นางสาวปิ่นมณี ชาญชนะวิวัฒน์</span><br>
                            <a href="tel:+66824772029" class="fw-bold text-dark pe-2 mt-2"
                                style="font-size:17px; text-decoration: none;">
                                082-477-2029
                            </a>
                        </div>

                        <img src="{{ asset('pages/home/section-2/หัวหน้าสำนัก.png') }}" alt="personal2" class="personal-img">
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="consultant-info text-center lh-md">
                            <span class="fs-4 fw-bold">ผู้อำนวยการกองคลัง</span><br>
                            <span>นางสาววชิรญาณ์ จันทร์แดง</span><br>
                            <a href="tel:+66945415687" class="fw-bold text-dark pe-2 mt-2"
                                style="font-size:17px; text-decoration: none;">
                                094-541-5687
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-2/ผอ.คลัง.png') }}" alt="personal4" class="personal-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="horizontal-scroll-container">
            <div class="horizontal-scroll-content justify-content-between justify-content-lg-center">
                <!-- Slide 2 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="consultant-info text-center lh-md">
                            <span class="fs-4 fw-bold">ผู้อำนวยการกองช่าง</span><br>
                            <span>นายวิรวัฒน์ เศรษฐธนาศักดิ์</span><br>
                            <a href="tel:+66819402993" class="fw-bold text-dark pe-2 mt-2"
                                style="font-size:17px; text-decoration: none;">
                                081-940-2993
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-2/ผอ.ช่าง.png') }}" alt="personal1" class="personal-img-sub">
                    </div>

                </div>
                <!-- Slide 3 -->

                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="consultant-info text-center lh-sm">
                            <span class="fs-6 fw-bold">หัวหน้าสำนนักปลัด รักษาราชการแทน <br> ผู้อำนวยการกองศึกษา ศาสนาและวัฒนธรรม</span><br>
                            <span>นางสาวปิ่นมณี ชาญชนะวิวัฒน์</span><br>
                            <a href="tel:+66824772029" class="fw-bold text-dark pe-2 mt-2"
                                style="font-size:17px; text-decoration: none;">
                                082-477-2029
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-2/หัวหน้าสำนัก.png') }}" alt="personal2" class="personal-img-sub">
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="scroll-item">
                    <div class="d-flex flex-column-reverse align-items-center justify-content-center">
                        <div class="consultant-info text-center lh-md">
                            <span class="fs-4 fw-bold">ผู้อำนวยการกองการเกษตร</span><br>
                            <span>นายณรัชพงศ์ สีงุ้ม</span><br>
                            <a href="tel:+66935529669" class="fw-bold text-dark pe-2 mt-2"
                                style="font-size:17px; text-decoration: none;">
                                093-552-9669
                            </a>
                        </div>
                        <img src="{{ asset('pages/home/section-2/ผอ.กองการเกษตร.png') }}" alt="personal4" class=" personal-img-sub">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
