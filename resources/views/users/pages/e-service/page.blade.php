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
        <div class=" d-flex flex-column justify-content-center align-items-center p-5 ">
            <div class="fs-1 fw-bold mb-4 text-center">E-Service</div>

            <style>
                .table td:hover {
                    background-color: #53b2e6;
                    color: white;
                }

                table {
                    border-collapse: collapse;
                }

                table td,
                table th {
                    border: none;
                }

                table tr:nth-child(odd) {
                    background-color: #7eccec;
                }

                table tr:nth-child(even) {
                    background-color: #ffffff;
                }

                a {
                    text-decoration: none;
                    color: #333;
                }

            </style>

            <table class="table">

                <tr>
                    <td><a href="{{route('GeneralRequestsFormPage')}}">คำร้องทั่วไป</a></td>
                </tr>
                <tr>
                    <td><a href="{{route('ElderlyAllowanceFormPage')}}">แบบยืนยันเบี้ยยังชีพผู้สูงอายุ</a></td>
                </tr>
                <tr>
                    <td>
                        <a href="{{route('DisabilityFormPage')}}">แบบคำขอลงทะเบียนรับเงินเบี้ยความพิการ</a>

                        <a href="{{ asset('eserivce/คู่มือแบบคำขอลงทะเบียนรับเงินเบี้ยความพ.pdf') }}" class="btn btn-success btn-sm">
                            คู่มือการใช้งาน E-Service
                            <i class="bi bi-file-earmark-pdf"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td><a href="{{route('ReceiveAssistanceFormPage')}}">แบบคำขอรับการสงเคราะห์ (ผู้ป่วยเอดส์)</a></td>
                </tr>

                <tr>
                    <td><a href="{{route('HealthHazardApplicationFormPage')}}">แบบคำร้องใบอนุญาตประกอบกิจการที่เป็นอันตรายต่อสุขภาพ</a></td>
                </tr>

            </table>

            {{-- <div class="d-flex justify-content-center align-items-center text-center mt-5">
                <a href="{{ asset('eserivce/คู่มือแบบคำขอลงทะเบียนรับเงินเบี้ยความพ.pdf') }}" class="btn btn-success">
                    คู่มือการใช้งานระบบ E-Service
                    <i class="bi bi-file-earmark-pdf"></i>
                </a>
            </div> --}}
        </div>
    </div>
</div>
@endsection
