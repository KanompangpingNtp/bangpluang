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

    .forum-card {
        border: 1px solid #1dac01;
        transition: transform 0.2s, box-shadow 0.2s;
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .forum-card:hover {
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }

    .forum-img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 8px;
    }

    .hidden-img {
        display: none;
    }

    /* เพิ่มเส้นขอบให้ความคิดเห็น */
    .comment {
        border: 1px solid #1dac01;
        /* สีเขียวสำหรับขอบ */
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        background-color: #f9f9f9;
        transition: box-shadow 0.2s ease;
    }

    .comment:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    }

    /* เพิ่มการจัดการกับข้อความภายในความคิดเห็น */
    .comment p {
        margin-top: 10px;
    }

    .comment .text-muted {
        font-size: 0.9rem;
    }

</style>

<div class="bg py-5">
    <div class="container p-5  custom-gradient-shadow">
        <p class="fs-2 fw-bold text-center mb-4">หัวข้อกระทู้: {{$forumDeatils->title}}</p>

        <!-- ส่วนเนื้อหากระทู้ -->
        <div class="forum-content">
            <p class="text-muted">โพสต์โดย: <strong> {{ $forumDeatils->user->name ?? 'ผู้ใช้งานทั่วไป' }}</strong> | วันที่โพสต์: {{ \Carbon\Carbon::parse($forumDeatils->created_at)->format('d/m/Y') }}</p>
            <div class="mb-4">
                <h5 class="fw-bold">รายละเอียด</h5>
                {!! $forumDeatils->description !!}
            </div>


            <!-- ส่วนความคิดเห็น -->
            <div class="comments-section mt-5">
                <h5 class="fw-bold">ความคิดเห็น</h5>

                <!-- ตัวอย่างความคิดเห็น -->
                @foreach ($forumDeatils->comments as $comment)
                <div class="comment mb-3">
                    <div class="d-flex justify-content-between">
                        <span class="text-muted">
                            โพสต์โดย: <strong>{{ $comment->user->name ?? 'ไม่ทราบชื่อ' }}</strong>
                        </span>
                        <span class="text-muted small">
                            วันที่: {{ \Carbon\Carbon::parse($comment->created_at)->format('d/m/Y H:i') }}
                        </span>
                    </div>
                    <p>{{ $comment->comments_details }}</p>
                </div>
                @endforeach

                <!-- ปุ่มสำหรับเพิ่มความคิดเห็น -->
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#commentModal">เพิ่มความคิดเห็น</button>
            </div>
        </div>
    </div>

    <!-- Modal สำหรับเพิ่มความคิดเห็น -->
    <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="commentModalLabel">เพิ่มความคิดเห็น</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('ForumCommentsCreate',$forumDeatils->id)}}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="รายละเอียด" id="detail" name="comments_details"></textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            <button type="submit" class="btn btn-success">โพสต์ความคิดเห็น</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll("#detail, #editdetail").forEach(textarea => {
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
        .ck-editor__editable {
            min-height: 150px !important;
        }

    </style>

</div>
@endsection
