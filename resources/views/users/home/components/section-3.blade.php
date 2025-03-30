<head>
    <style>
        .bg-page3 {
            background-image: url('{{ asset('pages/home/section-3/bg-3.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 4rem 0rem 0rem 0rem;
        }

        .title-section3 {
            font-size: 45px;
            font-weight: bold;
        }

        .bg-btn-section3 {
            background: linear-gradient(to right, #56c1fc, #56c1fc);
            border-radius: 40px;
            color: #ffffff;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s, transform 0.3s;
        }

        .bg-btn-section3:hover {
            background: linear-gradient(to left, #37b2e5, #37b2e5);
            transform: scale(1.05);
        }

        .bg-out-slide {
            background: linear-gradient(to bottom, #8cd9ff, #20a7de);
            border-radius: 30px;
            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
        }

        .custom-carousel-btn {
            background-color: #4cc3ff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
        }

        .custom-carousel-btn:hover {
            background-color: #08a1dd;
        }

        .carousel-inner {
            height: 25rem;
            border-radius: 15px;
        }

        .carousel-inner .carousel-item img {
            width: 100%;
            height: 25rem;
            object-fit: cover;
            border-radius: 15px;
        }

        .bg-video-section2 {
            background: linear-gradient(to bottom, #52b8f2, #52b8f2);
            border-radius: 15px;
            box-shadow:
                2px 2px 4px rgba(255, 255, 255, 0.5),
                -2px -2px 4px rgba(255, 255, 255, 0.5),
                2px -2px 4px rgba(255, 255, 255, 0.5),
                -2px 2px 4px rgba(255, 255, 255, 0.5);
            width: 100%;
            height: 370px;
        }


        .video-container {
            background: linear-gradient(to bottom, #fd664f, #eba152);
            border-radius: 15px;
            position: relative;
            width: 100%;
            padding-bottom: 56.25%;
            /* อัตราส่วน 16:9 */
            height: 350px;
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        @media (max-width: 1024px) {
            .carousel-inner {
                height: 24rem;
            }

            .carousel-inner .carousel-item img {
                height: 24rem;
            }
        }

        @media (max-width: 768px) {
            .carousel-inner {
                height: 20rem;
            }

            .carousel-inner .carousel-item img {
                height: 20rem;
            }
        }

        @media (max-width: 640px) {
            .carousel-inner {
                height: 18rem;
            }

            .carousel-inner .carousel-item img {
                height: 18rem;
            }
        }

    </style>
</head>

<main class="d-flex bg-page3">
    <div class="container ">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <div class="title-section3 d-flex flex-column flex-md-row justify-content-center align-items-center">
                    ป้ายประกาศ
                    <a href="{{route('NoticeBoardShowData')}}" class="bg-btn-section3 px-3 py-2 ms-0 ms-md-4">
                        ดูเพิ่มเติม
                    </a>
                </div>
                <div class="p-3 bg-out-slide mt-4">
                    <div class="bg-white p-2" style="border-radius: 20px;">
                        <div id="carouselAnnouncement" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" style="border-radius: 15px;">
                                @if ($noticeBoard->isNotEmpty())
                                @foreach ($noticeBoard as $index => $item)
                                @php
                                $imagePath = optional($item->photos->where('post_photo_status', '1')->first())->post_photo_file;
                                @endphp
                                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                    <img src="{{ $imagePath ? asset('storage/' . $imagePath) : asset('pages/home/section-1/bg-1.png') }}" class="d-block w-100" alt="Announcement Slide">
                                </div>
                                @endforeach
                                @else
                                <div class="carousel-item active">
                                    <img src="{{ asset('pages/home/section-1/bg-1.png') }}" class="d-block w-100" alt="Default Slide 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('pages/home/section-2/bg-2.png') }}" class="d-block w-100" alt="Default Slide 2">
                                </div>
                                @endif
                            </div>

                            <!-- ปุ่ม Previous -->
                            <button class="carousel-control-prev custom-carousel-btn" type="button" data-bs-target="#carouselAnnouncement" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </button>

                            <!-- ปุ่ม Next -->
                            <button class="carousel-control-next custom-carousel-btn" type="button" data-bs-target="#carouselAnnouncement" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                <div class="title-section3 d-flex flex-column flex-md-row justify-content-center align-items-center">
                    วิดีทัศน์แนะนำ
                    <a href="#" class="bg-btn-section3 px-3 py-2 ms-0 ms-md-4">
                        ดูเพิ่มเติม
                    </a>
                </div>

                <!-- ปรับภาพให้ใช้ object-fit: contain -->
                <img src="{{ asset('pages/home/section-3/topper-video.png') }}" alt="topper" class="mt-4 img-fluid" style="z-index: 2; margin-bottom:-7px;">

                <div class="bg-video-section2 p-2 ">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/VCHbh" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                        </iframe>
                    </div>

                </div>
            </div>
        </div>



    </div>
</main>
