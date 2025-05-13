@extends('admin.layouts.app')
@section('title', 'หน้าหลัก')
@section('content')

<style>
    a {
        text-decoration: none;
        color: black;
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                {{-- <h4>Dashboard</h4> --}}
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="welcomeModalLabel">ยินดีต้อนรับ 🎉</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="font-size: 15px;">
                                <p><strong>รายการอัพเดทเมนูใหม่ สามารถคลิกเพื่อดูรายละเอียดได้ทันที</strong></p>
                                <ul id="menuList">
                                    <li class="mb-1"><a href="{{route('InformationCenterType')}}">ศูนย์ข้อมูลข่าวสาร</a></li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        $('#welcomeModal').modal('show');
    });

</script>

@endsection
