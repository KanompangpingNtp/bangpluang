@extends('users.layouts.sub-layout')
@section('content')
<style>
    .bg {
        background-image: url('{{ asset('dashboard/bg_login/BG.png') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        padding: 2rem 0px;
    }

    .custom-gradient-shadow {
        border-radius: 30px;
        box-shadow:
            0 4px 15px rgba(0, 123, 255, 0.3),
            0 0 50px -10px rgba(0, 198, 255, 0.8),
            0 0 50px -10px rgba(102, 204, 255, 0.8);
        background-color: #ffffff;
    }

    /* ปรับแต่งการ์ด */
    .custom-card {
        border: none;
        border-radius: 12px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        cursor: pointer;
    }

    /* Hover Effect: ทำให้เด่นขึ้น */
    .custom-card:hover {
        transform: translateY(-10px);
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* กำหนดขนาดรูปภาพให้เท่ากัน */
    .image-container {
        width: 100%;
        height: 220px;
        /* ปรับความสูงที่ต้องการ */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* ให้รูปภาพเต็มพื้นที่และตัดส่วนที่เกิน */
    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    /* Hover Effect: ซูมรูปภาพเบาๆ */
    .custom-card:hover .image-container img {
        transform: scale(1.1);
    }

    /* ปรับแต่งเนื้อหาในการ์ด */
    .card-body {
        background: #fff;
        padding: 15px;
        border-top: 2px solid #46c700;
        /* เส้นสีฟ้าที่ด้านบน */
    }

    .card-title {
        font-size: 30px;
        font-weight: bold;
        color: #333;
        margin-bottom: 0;
        transition: color 0.3s ease;
    }

    /* Hover Effect: เปลี่ยนสีข้อความ */
    .custom-card:hover .card-title {
        color: #77b329;
    }

</style>
<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        <div class=" d-flex flex-column justify-content-center p-5">
            <div class="fs-1 fw-bold mb-4 text-center">ผลิตภัณฑ์ชุมชน</div>

            <div class="row">
                @foreach ($listDetail as $index => $detail)
                @php
                    $cardBackgroundClass = ($index % 2 == 0) ? 'bg-blue-card-section-6' : 'bg-pink-card-section-6';
                @endphp
                <div class="col-lg-6 p-2">
                    <a href="{{ route('ShowDetails', $detail->id) }}" class="text-decoration-none">
                        <div class="d-flex align-items-center p-3 {{ $cardBackgroundClass }}"
                             style="height: 150px; border-radius: 10px; box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); display: block;">

                            <!-- รูปภาพด้านซ้าย -->
                            <div style="flex: 0 0 100px; height: 100px; overflow: hidden; border-radius: 10px;">
                                <img src="{{ $detail->images->isNotEmpty() && $detail->images->where('status', 1)->first()
                                ? asset('storage/' . $detail->images->where('status', 1)->first()->images_file)
                                : asset('images/navbar/Logo-601.png') }}"
                                     alt="Image {{ $index + 1 }}"
                                     style="width: 100%; height: 100%; object-fit: cover;">
                            </div>

                            <!-- ข้อความด้านขวา -->
                            <div class="ms-3 bg-white h-100 rounded p-1" style="flex: 1; position: relative; height: 100%;">
                                <div class="card-text text-dark">
                                    {{ Str::limit($detail->list_details_name ?? 'No Title', 60, '...') }}
                                </div>
                                <div class="card-date d-flex align-items-center">
                                    <img src="{{ asset('images/section-5/hourglass.png') }}" alt="icon" width="15" height="20" class="me-2">
                                    <div class="card-text text-dark">
                                        {{ \Carbon\Carbon::parse($detail->date ?? now())->format('d-m-Y') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

            @if($listDetail && $listDetail->count() > 0)
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-5">
                    <!-- Previous button -->
                    <li class="page-item {{ $listDetail->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $listDetail->previousPageUrl() }}">ก่อนหน้า</a>
                    </li>

                    <!-- Page number buttons -->
                    @foreach ($listDetail->getUrlRange(1, $listDetail->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $listDetail->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    <!-- Next button -->
                    <li class="page-item {{ !$listDetail->hasMorePages() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $listDetail->nextPageUrl() }}">ต่อไป</a>
                    </li>
                </ul>
            </nav>
            @endif

        </div>
    </div>
</div>
@endsection
