@extends('admin.layouts.app')
@section('title', 'ติดต่อ')
@section('content')

<h3 class="text-center">จัดการข้อมูลการติดต่อ</h3><br>

@if (empty($contact))
    <div class="d-inline-block me-2">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ใส่ข้อมูล
        </button>
    </div>
@endif

<div class="d-inline-block me-2">
    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
        แก้ไขข้อมูล
    </button>
</div>

@if (!empty($contact))
<div class="d-inline-block">
    <form action="{{ route('ContactDelete', $contact->id) }}" method="POST" onsubmit="return confirm('คุณแน่ใจหรือไม่ที่จะลบข้อมูลนี้?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">ลบ</button>
    </form>
</div>
@endif


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">ใส่ข้อมูลข้อมูล</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{route('ContactCreate')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="logo_file" class="form-label">ภาพ Logo</label>
                        <input type="file" class="form-control" id="logo_file" name="logo_file" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="รายละเอียด" id="details" name="details"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="payment_file" class="form-label">ช่องทางการชำระค่าธรรมเนียมต่าง ๆ</label>
                        <input type="file" class="form-control" id="payment_file" name="payment_file" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact_administration_file" class="form-label">ช่องทางการติดต่อสอบถาม อบต.</label>
                        <input type="file" class="form-control" id="contact_administration_file" name="contact_administration_file" required>
                    </div>
                    <div class="mb-3">
                        <label for="contact_finance_file" class="form-label">ช่องทางการติดต่อสอบถาม กองคลัง</label>
                        <input type="file" class="form-control" id="contact_finance_file" name="contact_finance_file" required>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="link_map" class="form-label">link google map</label>
                        <input type="text" class="form-control" id="link_map" name="link_map" required>
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="bg py-5">
    <div class="container py-5 custom-gradient-shadow">
        @if (!empty($contact))
        <div class="d-flex flex-column justify-content-center align-items-center">
            @if (!empty($contact->logo_file))
            <img src="{{ asset('storage/' . $contact->logo_file) }}" alt="โลโก้" width="120">
            @else
            <span class="text-danger mb-3" style="font-size: 13px;">ยังไม่เพิ่มรูปโลโก้</span>
            @endif

            <div class="text-center">
                <span class="fw-bold fs-2">องค์การบริหารส่วนตำบลบางพลวง</span>
                <div class="fw-bold fs-4">Bang Phluang Subdistrict Administrative Organization</div>
                <p class="text-muted fs-4 mt-3">
                    @if (!empty($contact->details))
                    {!! $contact->details !!}
                    @else
                    <span class="text-danger" style="font-size: 13px;">ยังไม่เพิ่มเนื้อหา</span>
                    @endif
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-5 text-center">
                    <p><strong>ช่องทางการชำระค่าธรรมเนียมต่าง ๆ</strong></p>
                    @if (!empty($contact->payment_file))
                    <img src="{{ asset('storage/' . $contact->payment_file) }}" alt="qr-code" width="150">
                    @else
                    <span class="text-danger mb-3" style="font-size: 13px;">ยังไม่เพิ่มรูป qrcode</span>
                    @endif
                </div>

                <div class="col-lg-5 text-center">
                    <p><strong>ช่องทางการติดต่อสอบถาม อบต.บางพลวง</strong></p>
                    @if (!empty($contact->contact_administration_file))
                    <img src="{{ asset('storage/' . $contact->contact_administration_file) }}" alt="qr-code" width="150">
                    @else
                    <span class="text-danger mb-3" style="font-size: 13px;">ยังไม่เพิ่มรูป qrcode</span>
                    @endif
                </div>

                <div class="col-lg-5 text-center mt-3">
                    <p><strong>ช่องทางการติดต่อสอบถาม กองคลัง</strong></p>
                    @if (!empty($contact->contact_finance_file))
                    <img src="{{ asset('storage/' . $contact->contact_finance_file) }}" alt="qr-code" width="150">
                    @else
                    <span class="text-danger mb-3" style="font-size: 13px;">ยังไม่เพิ่มรูป qrcode</span>
                    @endif
                </div>
            </div>

            <br><br>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.023329758451!2d101.2778501!3d14.0078355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d009733eee497%3A0xeeb876eefe2f948c!2z4Liq4Liy4LiK4LmA4LiB4Li14Lii4Liy4LiH4LmI4Lit4LmI4LiZ4LmE4Lit4Li44LiZ4Liy4Lie4Lij4Li04Liq4Lin4Lix4LiH!5e0!3m2!1sth!2sth!4v1711711712345!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        @endif

    </div>
</div>


<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll("#details").forEach(textarea => {
            ClassicEditor
                .create(textarea)
                .then(editor => {
                    const editable = editor.ui.view.editable.element;
                    editable.style.resize = "none";
                    editable.style.overflow = "auto";
                })
                .catch(error => {
                    console.error("CKEditor error:", error);
                });
        });
    });

</script>

<style>
    /* ใช้ CSS เพื่อบังคับให้ CKEditor มีความสูงที่แน่นอน */
    .ck-editor__editable {
        min-height: 200px !important;

    }

</style>

@endsection
