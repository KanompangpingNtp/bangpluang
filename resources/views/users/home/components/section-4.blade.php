<head>
    <style>
        .bg-page4 {
            background: linear-gradient(to bottom, #92d7fd, #92d7fd);
            padding: 1rem 0rem;
        }


        /* ปรับขนาดปุ่มให้ใหญ่ขึ้น */
    .swiper-button-next,
    .swiper-button-prev {
        width: 30px;
        /* กำหนดขนาดปุ่ม */
        height: 30px;
        background-color: #20a7de;
        /* สีพื้นหลัง */
        color: white;
        /* สีของลูกศร */
        border-radius: 50%;
        /* ทำให้เป็นวงกลม */
        padding: 30px;

        transition: all 0.3s ease-in-out;
        /* ทำให้มีเอฟเฟกต์เวลา hover */
    }

    /* ทำให้ไอคอนข้างในใหญ่ขึ้น */
    .swiper-button-next::after,
    .swiper-button-prev::after {
        font-size: 20px;
        /* ขยายขนาดไอคอนลูกศร */
        font-weight: bold;
        text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        /* เพิ่มเงา */
        color: white;
        /* สีของลูกศร */
    }

    /* ทำให้ปุ่มดูเด่นขึ้นเมื่อ hover */
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: #8cd9ff;
        /* เปลี่ยนสีพื้นหลัง */
        transform: scale(1.2);
        /* ขยายปุ่ม */
    }

    /* จัดตำแหน่งให้ปุ่มไม่ชิดเกินไป */
    .swiper-button-next {
        right: 10px;
        /* ขยับให้ปุ่มถัดไปออกไปข้างขวา */
    }

    .swiper-button-prev {
        left: 10px;
        /* ขยับให้ปุ่มย้อนกลับออกไปข้างซ้าย */
    }

    .slide-container {
        position: relative;
        display: inline-block;
    }

    .slide-image-6 {
        display: block;
        width: 80%;
        height: auto;
        transition: all 0.3s ease;
    }

    .slide-text {
        position: absolute;
        top: 50%;
        left: 30%;
        width: 100%;
        transform: translate(-50%, -50%);
        color: rgb(0, 0, 0);
        font-size: 20px;
        font-weight: bold;
        text-align: center;
        padding: 5px 10px;
        border-radius: 5px;
        line-height: 1;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    /* 🔥 เอฟเฟกต์ Hover */
    .slide-container:hover .slide-image-6 {
        transform: scale(1.05);
        /* ขยายรูปเล็กน้อย */
        filter: drop-shadow(0 4px 10px rgba(255, 255, 255, 0.8));
    }

    .slide-container:hover .slide-text {
        opacity: 1;
        /* ทำให้ข้อความชัดขึ้น */
        transform: translate(-50%, -50%) scale(1.1);
        /* ขยายข้อความ */

    }
    </style>
</head>

<main class="d-flex bg-page4">
    <div class="container ">
        {{-- <div class="swiper mySwiper">
            <div class="swiper-wrapper py-3">
                <div class="swiper-slide mt-5">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon1.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">กระดาน<br>กระทู้</div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon2.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text" style="font-size: 15px;">โรงพยาบาล<br>ส่งเสริม<br>สุขภาพ<br>ตำบล(รพ.สต.)</div>
                    </a>
                </div>
                <div class="swiper-slide mt-5">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon3.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">เงินอุดหนุน<br>ดูแลเด็ก<br>แรกเกิด</div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon4.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">ศูนย์พัฒนา<br>ผู้สูงอายุ</div>
                    </a>
                </div>
                <div class="swiper-slide mt-5">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon5.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">เบี้ยยังชีพ<br>ผู้พิการ</div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon6.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">วารสาร<br>ออนไลน์</div>
                    </a>
                </div>
                <div class="swiper-slide mt-5">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon7.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text" style="font-size: 16px;">กองทุนหลัก<br>ประกันสุขภาพ<br>(สปสช.)</div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon8.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">เบี้ยยังชีพ<br>ผู้สูงอายุ</div>
                    </a>
                </div>
                <div class="swiper-slide mt-5">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon9.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">ศูนย์ข้อมูล<br>ข่าวสาร</div>
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon10.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">ข้อมูล<br>วารสาร</div>
                    </a>
                </div>
                <div class="swiper-slide mt-5">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon11.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text">กลุ่มสตรี</div>
                    </a>
                </div>
                <div class="swiper-slide ">
                    <a href="#" class="slide-container">
                        <img src="{{ asset('pages/home/section-4/รวมicon12.png') }}" alt="banner" class="slide-image-6">
                        <div class="slide-text" style="font-size: 18px;">พรบ.อำนวย<br>ความสะดวก<br>2558</div>
                    </a>
                </div>
                
            </div>
            <!-- ปุ่มเลื่อน -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div> --}}
        <div class="row justiy-content-center align-items-center g-4 mt-3">

            <!-- เริ่มลูป icon -->
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/1.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 45%;">กระดานกระทู้</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/2.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="font-size: 16px; left: 43%;">โรงพยาบาลส่งเสริม<br>สุขภาพตำบล(รพ.สต.)</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/3.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="font-size: 18px; left: 43%;">เงินอุดหนุน<br>ดูแลเด็กแรกเกิด</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/4.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 43%;">ศูนย์พัฒนา<br>ผู้สูงอายุ</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/5.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 45%;">เบี้ยยังชีพ<br>ผู้พิการ</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/6.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 45%;">วารสาร<br>ออนไลน์</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/7.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 45%; font-size:16px;">กองทุนหลัก<br>ประกันสุขภาพ<br>(สปสช.)</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/8.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 46%;">เบี้ยยังชีพ<br>ผู้สูงอายุ</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/9.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 45%;">ศูนย์ข้อมูล<br>ข่าวสาร</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/10.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 45%;">ข้อมูลวารสาร</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/11.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text" style="left: 45%;">กลุ่มสตรี</div>
              </a>
            </div>
      
            <div class="col-md-6  col-lg-4 col-xl-3 text-center">
              <a href="#" class="slide-container d-block d-flex justify-content-center">
                <img src="{{ asset('pages/home/section-4/12.png') }}" alt="banner" class="slide-image-6">
                <div class="slide-text"  style="left: 45%; font-size:16px;">พรบ.อำนวย<br>ความสะดวก<br>2558</div>
              </a>
            </div>
            <!-- จบลูป icon -->
      
          </div>
    </div>
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 8,  // แสดงทีละ 4 อัน
          spaceBetween: 1,  // ระยะห่างระหว่างภาพ
          loop: true,        // ให้วนลูป
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          autoplay: {
            delay: 3000,   // สไลด์อัตโนมัติทุก 3 วินาที
            disableOnInteraction: false
          },
          breakpoints: {
            320: { slidesPerView: 2 },  // หน้าจอเล็ก แสดง 1 อัน
            520: { slidesPerView: 3 },  // หน้าจอเล็ก แสดง 1 อัน
            676: { slidesPerView: 4 },  // หน้าจอกลาง แสดง 2 อัน
            868: { slidesPerView: 5 },  // หน้าจอใหญ่ขึ้น แสดง 3 อัน
            1024: { slidesPerView: 7 },  
            1200: { slidesPerView: 8 }  
          }
        });
      </script>
</main>
