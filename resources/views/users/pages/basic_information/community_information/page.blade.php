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

</style>
<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        <div class=" d-flex flex-column justify-content-center p-5">
            <div class="fs-1 fw-bold mb-4 text-center">ข้อมูลชุมชน</div>
            @forelse ($basicInfoDetail as $detail)

            <p>{!! $detail->details !!}</p>

            {{-- แสดงไฟล์ PDF --}}
            @if ($detail->pdf->count() > 0)
            {{-- <h6>ไฟล์ PDF:</h6> --}}
            @foreach ($detail->pdf as $pdf)
            <iframe src="{{ asset('storage/' . $pdf->pdf_file) }}" width="100%" height="1000px"></iframe>
            @endforeach
            @else
            <p></p>
            @endif

            {{-- แสดงรูปภาพ --}}
            @if ($detail->images->count() > 0)
            <p class="text-center"><strong>ตราสัญญาลักษณ์</strong></p>
            <div class="d-flex flex-wrap justify-content-center align-items-center">
                @foreach ($detail->images as $image)
                <div class="col-md-3 p-2 d-flex justify-content-center">
                    <img src="{{ asset('storage/' . $image->images_file) }}" class="img-fluid rounded" alt="รูปภาพ">
                </div>
                @endforeach
            </div>
            @else
            <p class="text-center"></p>
            @endif

            @empty
            <p class="text-center"></p>
            @endforelse

        </div>
    </div>
</div>


@endsection
