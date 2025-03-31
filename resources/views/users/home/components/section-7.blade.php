<head>
    <style>
        .bg-page7 {
            background-image: url('{{ asset('pages/home/section-7/bg-7.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 100vh;
            padding: 4rem 0rem;
        }

        .title-section7 {
            font-size: 35px;
            font-weight: bold;
            text-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .bg-left-section7 {
            background: linear-gradient(to bottom, #89d7fd, #23a8de);
            border-radius: 20px;
            box-shadow:
                2px 2px 4px #23a9de70,
                -2px -2px 4px #23a9de70,
                2px -2px 4px #23a9de70,
                -2px 2px 4px #23a9de70;
        }

        .bg-right-section7 {
            background: linear-gradient(to bottom, #89d7fd, #23a8de);
            border-radius: 20px;
            position: relative;
            box-shadow:
                2px 2px 4px #23a9de70,
                -2px -2px 4px #23a9de70,
                2px -2px 4px #23a9de70,
                -2px 2px 4px #23a9de70;
        }

        .bg-right-section7 img {
            position: absolute;
            /* ทำให้รูปภาพเคลื่อนที่ได้ */
            top: -20%;
            /* อยู่ที่มุมบน */
            right: 3%;
            /* อยู่ที่มุมขวา */
            max-width: 60px;
            /* ทำให้รูปภาพยืดหยุ่นตามขนาดคอนเทนเนอร์ */
            height: auto;
            /* ควบคุมอัตราส่วนของภาพ */
            border-radius: 8px;
            /* หากต้องการมุมมนให้รูป */
        }

        .link-section7 {
            color: #000;
            /* สีตัวอักษรเป็นดำ */
            text-decoration: none;
            /* เอาเส้นใต้ของลิงก์ออก */
            border-bottom: 3px solid #ffffff;
            /* ขอบเป็นสีดำ */
            font-weight: bold;
            /* ตัวหนา */
            font-size: 1.25rem;
            /* ขนาดฟอนต์ 1.25rem หรือ 20px */
            padding: 1px 0px;
            /* เพิ่มพื้นที่ภายใน */
            transition: all 0.3s ease-in-out;
            /* เพิ่ม transition */
            white-space: nowrap;
        }

        /* เอฟเฟกต์เมื่อโฮเวอร์ */
        .link-section7:hover {
            color: #fff;
            /* เปลี่ยนสีตัวอักษรเป็นขาว */
            border-color: #1ecbff;
            /* ขอบสีฟ้า */
        }

        .bg-video {
            background-color: #9fe0ff;
            border-radius: 15px;
            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            width: 100%;
            height: 370px;
        }

        .bg-egp {
            background: linear-gradient(to right, #77cff8, #20a7de);
            position: relative;
            border: 3px solid #ffffff;
            border-radius: 20px;
        }

        .accessory-bg-egp {
            position: absolute;
            /* ทำให้รูปภาพเคลื่อนที่ได้ */
            top: -8%;
            /* อยู่ที่มุมบน */
            left: 1%;
            /* อยู่ที่มุมขวา */
            max-width: 90px;
            /* ทำให้รูปภาพยืดหยุ่นตามขนาดคอนเทนเนอร์ */
            height: auto;
            /* ควบคุมอัตราส่วนของภาพ */
            border-radius: 8px;
            /* หากต้องการมุมมนให้รูป */
        }

        .bg-menu-egp {
            background-image: url('{{ asset('pages/home/section-7/แถบEGP.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: 15px;
            gap: 0.6rem 0;
        }

        .bg-menu-egp div {
            text-decoration: none;
            color: #ffffff;
            font-size: 25px;
            cursor: pointer;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            /* ขนาดตัวอักษรปกติ */
            transition: all 0.3s ease-in-out;
        }

        @media (max-width: 1400px) {

            /* เมื่อหน้าจอมีความกว้างน้อยกว่าหรือเท่ากับ 991px */
            .bg-menu-egp div {
                font-size: 22px;
                /* ปรับขนาดตัวอักษรให้เล็กลง */
            }
        }

        @media (max-width: 991px) {

            /* เมื่อหน้าจอมีความกว้างน้อยกว่าหรือเท่ากับ 991px */
            .bg-menu-egp div {
                font-size: 23px;
                border-radius: 20px;
                /* ปรับขนาดตัวอักษรให้เล็กลง */
            }

            .accessory-bg-egp {
                top: -7%;

            }
        }

        .bg-menu-egp div:hover {
            color: black;
            background: #f3f3f3;
        }

        .bg-menu-egp .active {
            color: black;
            background: #f3f3f3;
        }

        .egp-card {
            background-color: #ffff;
            border: 0px solid black;
            border-radius: 20px;
            transition: all 0.3s ease-in-out;
            /* ให้เอฟเฟกต์เปลี่ยนสีพื้นหลังนุ่มนวล */
        }

        .egp-card:hover {
            background-color: rgba(0, 0, 0, 0.5) !important;
            /* พื้นหลังสีดำโปร่งแสงเมื่อ hover */
            color: white;
            /* เปลี่ยนสีตัวอักษรเป็นสีขาวเพื่อให้อ่านง่ายขึ้น */
        }

        .egp-card:hover .card-text {
            color: #f1f1f1;
            /* เปลี่ยนสีข้อความเมื่อ hover */
        }

        .bg-link-button7 {
            background-color: #56c0ed;
            border: 2px solid #ffff;
            text-decoration: none;
            color: #000;
            border-radius: 20px;
            transition: all 0.3s ease;
            /* เพิ่มการเปลี่ยนแปลงอย่างนุ่มนวล */
        }

        .bg-link-button7:hover {
            background-color: #1ea7db;
            /* เปลี่ยนสีพื้นหลังเมื่อ hover */
            color: #fff;
            /* เปลี่ยนสีตัวอักษรเมื่อ hover */
            transform: scale(1.02);
            /* ขยายขนาดปุ่มเล็กน้อย */
            border-color: #fff;
            /* เปลี่ยนสีเส้นขอบ */
        }

        @media (max-width: 1199px) {

            /* ขนาดต่ำกว่า 1200px */
            .bg-video {
                height: 500px;
            }
        }

        @media (max-width: 768px) {

            /* ขนาดต่ำกว่า 991px */
            .bg-video {
                height: 350px;
            }
        }

        .bg-video iframe {
            width: 100%;
            height: 100%;
            border-radius: 15px;
        }

        .custom-carousel {
            width: 100%;
            max-width: 700px;
            /* ปรับขนาดตามต้องการ */
            height: 350px;
            /* ปรับความสูงให้รูปภาพมีขนาดคงที่ */
            overflow: hidden;
            border-radius: 20px;
        }

        .custom-carousel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* ป้องกันการผิดสัดส่วน */
            border-radius: 15px;
        }
    </style>
</head>

<main class="d-flex bg-page7">
    <div class="container d-flex flex-column justify-content-start align-items-center">
        <div class="title-section7 mb-3">
            หนังสือราชการ
        </div>
        <div class="row w-100 justify-content-center align-items-center gap-3">
            <div
                class="col-lg-5 bg-left-section7 pb-4 pt-2 px-3 d-flex flex-column justify-content-center align-items-start">
                <div class="bg-white rounded-4 px-2 py-1 fw-bold text-black mb-2 w-100">
                    จากกรมส่งเสริมการปกครองท้องถิ่น
                </div>
                <a href="https://www.dla.go.th/servlet/DocumentServlet?documentType=2&isSbpac=N" class="link-section7"
                    target="_blank">
                    หนังสือราชการของ สถ.
                </a>
                <a href="https://www.dla.go.th/servlet/LawServlet?regType=1" class="link-section7" target="_blank">
                    กฏหมาย ระเบียบ และมติ ก.กลาง
                </a>
                <a href="https://www.dla.go.th/servlet/DocumentServlet?documentType=4" class="link-section7"
                    target="_blank">
                    บทความที่น่าสนใจ
                </a>
                <a href="https://www.dla.go.th/visit/it_royal.jsp" class="link-section7 fs-6 mb-2" target="_blank">
                    พรบ. และประกาศเกี่ยวกับ เทคโนโลยีสารสนเทศ
                </a>
            </div>
            <div
                class="col-lg-5 bg-right-section7 pb-4 pt-2 px-3 d-flex flex-column justify-content-center align-items-start">
                <img src="{{ asset('pages/home/section-7/ผ้าไหม1.png') }}" alt="cloth">
                <div class="bg-white rounded-4 px-2 py-1 fw-bold text-black mb-2 w-100">
                    จากราชการจากท้องถิ่นจังหวัด
                </div>
                <a href="http://www.prachinburilocal.go.th/view_all.php?id=841" class="link-section7" target="_blank">
                    ข่าวประชาสัมพันธ์ สถ.
                </a>
                <a href="http://www.prachinburilocal.go.th/view_all.php?id=3448" class="link-section7" target="_blank">
                    หนังสือสั่งการจังหวัด
                </a>
                <a href="http://www.prachinburilocal.go.th/view_all.php?id=850" class="link-section7" target="_blank">
                    สถานที่สำคัญ/แหล่งท่องเที่ยว
                </a>
                <a href="http://www.prachinburilocal.go.th/page.php?id=1203" class="link-section7" target="_blank">
                    ติดต่อหน่วยงาน สถ.จังหวัด
                </a>
            </div>
            <div class="col-xl-6">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="lh-1 fw-bold w-100 ms-2 mb-3 text-center">
                        <span class="title-section7 mb-3">ประกาศของคลัง</span>
                    </div>
                    <div class="row bg-egp justify-content-center shadow-lg w-100">
                        <img src="{{ asset('pages/home/section-7/ผ้าไหม2.png') }}" alt="cloth"
                            class="accessory-bg-egp">
                        <div
                            class="col-lg-4 d-flex flex-column justify-content-start align-items-center bg-menu-egp  ps-0 ps-lg-3 py-2 py-lg-5 fw-bold pe-0">
                            <div id="btnProcurement"
                                onclick="changeContent('จัดซื้อจัดจ้าง', {{ json_encode($procurement) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('ProcurementDetail', ['id' => ':id']) }}">
                                ประกาศจัดซื้อจัดจ้าง
                            </div>
                            <div id="btnProcurementResults"
                                onclick="changeContent('ผลประกาศจัดซื้อจัดจ้าง', {{ json_encode($procurementResults) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('ProcurementResultsDetail', ['id' => ':id']) }}">
                                ผลประกาศจัดซื้อจัดจ้าง
                            </div>
                            <div id="btnAverage"
                                onclick="changeContent('ประกาศราคากลาง', {{ json_encode($averagePrice) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('AveragePriceDetail', ['id' => ':id']) }}">
                                ประกาศราคากลาง</div>
                            <div id="btnProcurementPlan"
                                onclick="changeContent('รายงานผลจัดซื้อจัดจ้าง', {{ json_encode($procurementReport) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('ProcurementReportDetail', ['id' => ':id']) }}">
                                รายงานผลจัดซื้อจัดจ้าง
                            </div>
                        </div>
                        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center px-3 py-5 bg-right-egp"
                            style="gap: 0.5rem 0;" id="contentArea">

                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center w-100 me-2 mt-2">
                        <a href="{{ route('TreasuryAnnouncementData') }}" class="bg-link-button7 px-4 py-1 my-1 ">
                            <span class="px-2 py-1 fw-bold"
                                style="background-color: #86d2f4; border-radius:20px;">ดูทั้งหมด</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <div class="title-section7 mb-1">
                    แนะนำสถานที่ท่องเที่ยว
                </div>
                <img src="{{ asset('pages/home/section-7/กรอบวิดิโอขวาล่าง.gif') }}" alt="topper"
                    class="mt-4 img-fluid px-2" style="z-index: 2; margin-bottom:-7px;">
                <div class="bg-video p-2">
                    <iframe src="https://www.youtube.com/embed/VCHbh" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="col-xl-8 d-flex flex-column justify-content-center align-items-center">
                <div class="title-section7 mb-1">
                    แนะนำสถานที่ท่องเที่ยว
                </div>
                <div class="p-3 bg-out-slide">
                    <div class="bg-white p-2" style="border-radius: 20px;">
                        <div id="carouselTravel" class="carousel slide custom-carousel" data-bs-ride="carousel">
                            <div class="carousel-inner ">
                                <div class="carousel-item active" data-place="วิสาหกิจชุมชนบ้านบางพลวง">
                                    <img src="{{ asset('pages/home/section-1/bg-1.png') }}" class="d-block w-100"
                                        alt="Default Slide 1">
                                </div>
                                <div class="carousel-item" data-place="ล่องเรือชมวิถีชีวิตลุ่มน้ำปราจีนบุรี">
                                    <img src="{{ asset('pages/home/section-2/bg-2.png') }}" class="d-block w-100"
                                        alt="Default Slide 2">
                                </div>
                                <div class="carousel-item" data-place="ล่องเรือชมวิถีชีวิตลุ่มน้ำปราจีนบุรี1">
                                    <img src="{{ asset('pages/home/section-2/bg-2.png') }}" class="d-block w-100"
                                        alt="Default Slide 2">
                                </div>
                                <div class="carousel-item" data-place="ล่องเรือชมวิถีชีวิตลุ่มน้ำปราจีนบุรี2">
                                    <img src="{{ asset('pages/home/section-2/bg-2.png') }}" class="d-block w-100"
                                        alt="Default Slide 2">
                                </div>
                            </div>

                            <!-- ปุ่ม Previous -->
                            <button class="carousel-control-prev custom-carousel-btn" type="button"
                                data-bs-target="#carouselTravel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>

                            <!-- ปุ่ม Next -->
                            <button class="carousel-control-next custom-carousel-btn" type="button"
                                data-bs-target="#carouselTravel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- ชื่อสถานที่ -->
                <div class="bg-white px-5 py-2 my-3 rounded-5" id="placeName">
                    สถานที่ 1
                </div>

            </div>
            <div class="col-xl-3 d-flex flex-row flex-xl-column justify-content-center align-items-center gap-2 banner-container">
                <a href="#" class="banner-hover">
                    <img src="{{ asset('pages/home/section-7/N1.png') }}" alt="btn-1" class="img-fluid">
                </a>
                <a href="#" class="banner-hover">
                    <img src="{{ asset('pages/home/section-7/N2.png') }}" alt="btn-2" class="img-fluid">
                </a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let carousel = document.getElementById("carouselTravel");
            let placeName = document.getElementById("placeName");

            // ✅ ตั้งค่าชื่อสถานที่เริ่มต้นจากรูปแรกที่แสดง
            let activeItem = carousel.querySelector(".carousel-item.active");
            if (activeItem) {
                placeName.textContent = activeItem.getAttribute("data-place");
            }

            // ✅ อัปเดตชื่อเมื่อเปลี่ยนสไลด์ (ใช้ "slid.bs.carousel" แทน)
            carousel.addEventListener("slid.bs.carousel", function() {
                let newActiveItem = carousel.querySelector(".carousel-item.active");
                if (newActiveItem) {
                    placeName.textContent = newActiveItem.getAttribute("data-place");
                }
            });
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let initialData = {
                'จัดซื้อจัดจ้าง': @json($procurement),
                'ผลประกาศจัดซื้อจัดจ้าง': @json($procurementResults),
                'ประกาศราคากลาง': @json($averagePrice),
                'รายงานผลจัดซื้อจัดจ้าง': @json($procurementReport),
            };

            // ตั้งค่าลิงก์เริ่มต้นให้ปุ่มทั้งหมด
            for (let [key, value] of Object.entries(initialData)) {
                if (value.length > 0) {
                    let firstId = value[0]?.id || 1;
                    let button = document.querySelector(`[onclick*="changeContent('${key}'"]`);
                    if (button) {
                        let link = button.getAttribute('data-link').replace(':id', firstId);
                        button.setAttribute('data-link', link);
                    }
                }
            }

            // โหลดหมวดหมู่แรกสุดที่มีข้อมูล
            for (let [topic, data] of Object.entries(initialData)) {
                if (data.length > 0) {
                    changeContent(topic, data);
                    setActiveButton(topic); // เรียก setActiveButton() หลังจากเปลี่ยนเนื้อหา
                    break;
                }
            }
        });

        function changeContent(topic, data) {
            allItems = data;

            if (data.length > 0) {
                let firstId = data[0].id;
                let activeButton = document.querySelector(`[onclick*="changeContent('${topic}'"]`);

                if (activeButton) {
                    let linkTemplate = activeButton.getAttribute('data-link');
                    baseLink = linkTemplate.replace(':id', firstId);
                }
            } else {
                baseLink = "#";
            }

            displayItems();
            setActiveButton(topic);
        }


        function setActiveButton(topic) {
            const buttonMap = {
                'จัดซื้อจัดจ้าง': 'btnProcurement',
                'ผลประกาศจัดซื้อจัดจ้าง': 'btnProcurementResults',
                'ประกาศราคากลาง': 'btnAverage',
                'รายงานผลจัดซื้อจัดจ้าง': 'btnProcurementPlan',
            };

            // ลบคลาส 'active' ออกจากปุ่มทั้งหมด
            Object.values(buttonMap).forEach(buttonId => {
                let button = document.getElementById(buttonId);
                if (button) {
                    button.classList.remove('active');
                }
            });

            // เพิ่ม 'active' ให้ปุ่มที่ตรงกับ topic
            let activeButtonId = buttonMap[topic];
            if (activeButtonId) {
                let activeButton = document.getElementById(activeButtonId);
                if (activeButton) {
                    activeButton.classList.add('active');
                }
            }
        }


        let currentPage = 1;
        const itemsPerPage = 4;
        let allItems = [];
        let baseLink = "#";
        const bookmarkIcon = "{{ asset('navbar/logo.png') }}";

        function displayItems() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = currentPage * itemsPerPage;
            const itemsToDisplay = allItems.slice(startIndex, endIndex);

            let contentArea = document.getElementById('contentArea');
            contentArea.innerHTML = '';

            itemsToDisplay.forEach((item) => {
                let newContent = document.createElement('a');

                // ใช้ baseLink ที่ตั้งไว้จาก changeContent() แล้วแทนค่า :id ด้วย item.id
                let itemLink = baseLink.replace(/\d+$/, item.id);

                newContent.href = itemLink;
                newContent.className = "w-100";
                newContent.style.textDecoration = "none";

                newContent.innerHTML = `
                <div class="card p-3 egp-card text-black w-100">
                    <div class="d-flex align-items-center">
                        <img src="${bookmarkIcon}" alt="รูปภาพ"
                            class="rounded me-3" style="width: 45px; height: 45px; object-fit: contain;">
                        <div class="flex-grow-1">
                            <div class="card-text fs-6 lh-1">
                                ${truncateText(item.title_name, 140)}
                            </div>
                            <div class="card-text fs-6 text-muted">
                                ${item.date}
                            </div>
                        </div>
                    </div>
                </div>`;

                contentArea.appendChild(newContent);
            });
        }


        function truncateText(text, maxLength) {
            return text.length > maxLength ? text.substring(0, maxLength) + '...' : text;
        }
    </script>
</main>
