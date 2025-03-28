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
        <div class=" d-flex flex-column justify-content-center align-items-center mt-5">
            @if (!empty($contact))
            <div class="d-flex flex-column justify-content-center align-items-center">
                @if (!empty($contact->logo_file))
                <img src="{{ asset('storage/' . $contact->logo_file) }}" alt="โลโก้" width="130" class="mb-4">
                @else
                <span></span>
                @endif

                <div class="text-center">
                    <span class="fw-bold fs-3">องค์การบริหารส่วนตำบลบางพลวง</span>
                    <div class="fw-bold fs-5">Bang Phluang Subdistrict Administrative Organization</div>
                    <style>
                        .details-content p {
                            margin-bottom: 1px;
                        }

                    </style>

                    <p class="text-muted fs-5 mt-3">
                        @if (!empty($contact->details))
                        <div class="details-content">
                            {!! $contact->details !!}
                        </div>
                        @else
                        <span></span>
                        @endif
                    </p>

                </div>

                <div class="row justify-content-center mt-3">
                    <div class="col-lg-5 text-center">
                        <p><strong>ช่องทางการชำระค่าธรรมเนียมต่าง ๆ</strong></p>
                        @if (!empty($contact->payment_file))
                        <img src="{{ asset('storage/' . $contact->payment_file) }}" alt="qr-code" width="150">
                        @else
                        <span></span>
                        @endif
                    </div>

                    <div class="col-lg-5 text-center">
                        <p><strong>ช่องทางการติดต่อสอบถาม อบต.บางพลวง</strong></p>
                        @if (!empty($contact->contact_administration_file))
                        <img src="{{ asset('storage/' . $contact->contact_administration_file) }}" alt="qr-code" width="150">
                        @else
                        <span></span>
                        @endif
                    </div>

                    <div class="col-lg-5 text-center mt-3">
                        <p><strong>ช่องทางการติดต่อสอบถาม กองคลัง</strong></p>
                        @if (!empty($contact->contact_finance_file))
                        <img src="{{ asset('storage/' . $contact->contact_finance_file) }}" alt="qr-code" width="150">
                        @else
                        <span></span>
                        @endif
                    </div>
                </div>

                <br>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.023329758451!2d101.2778501!3d14.0078355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d009733eee497%3A0xeeb876eefe2f948c!2z4Liq4Liy4LiK4LmA4LiB4Li14Lii4Liy4LiH4LmI4Lit4LmI4LiZ4LmE4Lit4Li44LiZ4Liy4Lie4Lij4Li04Liq4Lin4Lix4LiH!5e0!3m2!1sth!2sth!4v1711711712345!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            @endif
        </div>
    </div>
    @endsection
