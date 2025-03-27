@extends('admin.layouts.app')
@section('title', 'ติดต่อ')
@section('content')

<h3 class="text-center">จัดการข้อมูลการติดต่อ</h3><br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    ใส่ข้อมูลข้อมูล
</button>

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

                    <div class="mb-3">
                        <label for="link_map" class="form-label">link google map</label>
                        <input type="text" class="form-control" id="link_map" name="link_map" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
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
