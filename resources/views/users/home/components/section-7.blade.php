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

        .bg-video{
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
    </style>
</head>

<main class="d-flex bg-page7">
    <div class="container d-flex flex-column justify-content-start align-items-center">
        <div class="title-section7 mb-3">
            หนังสือราชการ
        </div>
        <div class="row w-100 justify-content-center align-items-center gap-3">
            <div class="col-lg-5 bg-left-section7 pb-4 pt-2 px-3 d-flex flex-column justify-content-center align-items-start">
                <div class="bg-white rounded-4 px-2 py-1 fw-bold text-black mb-2 w-100">
                    จากกรมส่งเสริมการปกครองท้องถิ่น
                </div>
                <a href="#" class="link-section7">
                    หนังสือราชการของ สถ.
                </a>
                <a href="#" class="link-section7">
                    กฏหมาย ระเบียบ และมติ ก.กลาง
                </a>
                <a href="#" class="link-section7">
                    บทความที่น่าสนใจ
                </a>
                <a href="#" class="link-section7 fs-6 mb-2">
                    พรบ. และประกาศเกี่ยวกับ เทคโนโลยีสารสนเทศ
                </a>
            </div>
            <div
                class="col-lg-5 bg-right-section7 pb-4 pt-2 px-3 d-flex flex-column justify-content-center align-items-start">
                <img src="{{ asset('pages/home/section-7/ผ้าไหม1.png') }}" alt="cloth">
                <div class="bg-white rounded-4 px-2 py-1 fw-bold text-black mb-2 w-100">
                    จากราชการจากท้องถิ่นจังหวัด
                </div>
                <a href="#" class="link-section7">
                    ข่าวประชาสัมพันธ์ สถ.
                </a>
                <a href="#" class="link-section7">
                    หนังสือสั่งการจังหวัด
                </a>
                <a href="#" class="link-section7">
                    กระดานข่าว
                </a>
                <a href="#" class="link-section7">
                    ติดต่อหน่วยงาน สถ.จังหวัด
                </a>
            </div>
            <div class="col-lg-6">
                {{-- <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="lh-1 fw-bold w-100 ms-2 mb-4">
                        <span
                            style="font-size:50px; text-shadow: 0 0 10px white, 0 0 20px white, 0 0 30px white, 0 0 40px white;">ประกาศของคลัง</span>
                        <img src="{{ asset('images/section-7/hired.png') }}" alt="icon" height="50"> <br>
                        <span class="fs-4 ">องค์การบริหารส่วนตำบลแปลงยาว</span>
                    </div>
                    <div class="row bg-egp justify-content-center shadow-lg w-100">
                        <div
                            class="col-lg-4 d-flex flex-column justify-content-start align-items-center bg-menu-egp  ps-0 ps-lg-3 py-2 py-lg-5 fw-bold pe-0">
                            <div id="btnProcurement" onclick="changeContent('จัดซื้อจัดจ้าง', {{ json_encode($procurement) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('ProcurementDetail', ['id' => ':id']) }}">
                                ประกาศจัดซื้อจัดจ้าง
                            </div>
                            <div id="btnProcurementResults"
                                onclick="changeContent('ผลประกาศจัดซื้อจัดจ้างประจำปี', {{ json_encode($procurementResults) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('ProcurementResultsDetail', ['id' => ':id']) }}">
                                ผลประกาศจัดซื้อจัดจ้างประจำปี
                            </div>
                            <div id="btnAverage" onclick="changeContent('สรุปผลการจัดซื้อจัดจ้าง', {{ json_encode($average) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('RevenueDetail', ['id' => ':id']) }}">
                                สรุปผลการจัดซื้อจัดจ้าง</div>
                            <div id="btnProcurementPlan"
                                onclick="changeContent('แผนการจัดซื้อจัดจ้าง', {{ json_encode($revenue) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('ProcurementPlanDetail', ['id' => ':id']) }}">
                                แผนการจัดซื้อจัดจ้าง
                            </div>
                            <div id="btnWinnerAnnouncement"
                                onclick="changeContent('ประกาศผู้ชนะการเสนอราคา', {{ json_encode($announcement) }})"
                                class="w-100 text-center text-lg-start px-4 py-1"
                                data-link="{{ route('AveragePriceDetail', ['id' => ':id']) }}">
                                ประกาศผู้ชนะการเสนอราคา</div>
                        </div>
                        <div class="col-lg-8 d-flex flex-column justify-content-center align-items-center px-3 py-5 "
                            style="gap: 1rem 0;" id="contentArea">
        
                        </div>
                    </div>
                    <div class="d-flex justify-content-end align-items-center w-100 me-2 mt-2">
                        <a href="{{route('TreasuryAnnouncementData')}}" class="bg-link-button7 px-4 py-1 my-1 ">
                            ดูทั้งหมด
                        </a>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('pages/home/section-7/กรอบวิดิโอขวาล่าง.png') }}" alt="topper" class="mt-4 img-fluid px-2" style="z-index: 2; margin-bottom:-7px;">
                <div class="bg-video p-2">
                        <div class="video-container">
                            <iframe src="https://www.youtube.com/embed/VCHbh" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-2">
                    <a href="#" class=" banner-hover">
                        <img src="{{asset('pages/home/section-7/N1.png')}}" alt="btn-1">
                    </a>
                    <a href="#" class=" banner-hover">
                        <img src="{{asset('pages/home/section-7/N2.png')}}" alt="btn-2">
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
        document.addEventListener("DOMContentLoaded", function() {
            // กำหนดข้อมูลเริ่มต้นของปุ่ม
            let initialData = {
                'จัดซื้อจัดจ้าง': @json($procurement),
                'ผลประกาศจัดซื้อจัดจ้างประจำปี': @json($procurementResults),
                'สรุปผลการจัดซื้อจัดจ้าง': @json($average),
                'แผนการจัดซื้อจัดจ้าง': @json($revenue),
                'ประกาศผู้ชนะการเสนอราคา': @json($announcement)
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
            const buttons = ['btnProcurement', 'btnProcurementResults', 'btnAverage', 'btnProcurementPlan',
                'btnWinnerAnnouncement'
            ];
            const topics = ['จัดซื้อจัดจ้าง', 'ผลประกาศจัดซื้อจัดจ้างประจำปี', 'สรุปผลการจัดซื้อจัดจ้าง',
                'แผนการจัดซื้อจัดจ้าง', 'ประกาศผู้ชนะการเสนอราคา'
            ];
    
            buttons.forEach(buttonId => document.getElementById(buttonId).classList.remove('active'));
    
            const activeButtonIndex = topics.indexOf(topic);
            if (activeButtonIndex !== -1) {
                document.getElementById(buttons[activeButtonIndex]).classList.add('active');
            }
        }
    
        let currentPage = 1;
        const itemsPerPage = 6;
        let allItems = [];
        let baseLink = "#";
        const bookmarkIcon = "{{ asset('images/section-7/bookmark.png') }}";
        const timeIcon = "{{ asset('images/section-7/fast-time.png') }}";
    
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
                            <div class="card-text lh-1">
                                ${truncateText(item.title_name, 180)}
                            </div>
                            <div class="card-text text-muted">
                                <img src="${timeIcon}" alt="icon"
                                    class="me-1" width="18">
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
    </script> --}}
</main>
