@extends('admin.layouts.app')
@section('title', 'ศูนย์ข้อมูลข่าวสาร')
@section('content')

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

<h3 class="text-center">ศูนย์ข้อมูลข่าวสาร</h3><br>

<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
    สร้างหัวข้อ
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">สร้างหัวข้อ</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('InformationCenterCreate')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="date" class="form-label">วันที่</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">หัวข้อ</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<table class="table table-bordered" id="data_table">
    <thead class="text-center">
        <tr>
            <th>#</th>
            <th>หัวข้อ</th>
            <th>การจัดการ</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($InformationCenter as $index => $details)
        <tr>
            <td class="text-center">{{ $index + 1 }}</td>
            <td>
                <a href="{{ route('InformationCenterShowDetail', $details->id) }}">
                    {{ $details->name }}
                </a>
            </td>
            <td class="text-center">
                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal-{{ $details->id }}">
                    <i class="bi bi-pencil-square"></i>
                </button>

                <form action="{{ route('InformationCenterDelete', $details->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@foreach ($InformationCenter as $details)
<div class="modal fade" id="editModal-{{ $details->id }}" tabindex="-1" aria-labelledby="editModalLabel-{{ $details->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" style="margin-top: 5%;">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editModalLabel-{{ $details->id }}">แก้ไขหัวข้อ</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('InformationCenterUpdate', $details->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="date-{{ $details->id }}" class="form-label">วันที่</label>
                        <input type="date" class="form-control" id="date-{{ $details->id }}" name="date" value="{{ $details->date }}">
                    </div>

                    <div class="mb-3">
                        <label for="type_name-{{ $details->id }}" class="form-label">หัวข้อ</label>
                        <input type="text" class="form-control" id="name-{{ $details->id }}" name="name" value="{{ $details->name }}">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<script src="{{asset('js/datatable.js')}}"></script>

@endsection

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" defer></script>
