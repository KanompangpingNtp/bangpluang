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
        <div class=" d-flex flex-column justify-content-center p-5 ">
            <div class="fs-1 fw-bold mb-4 text-center">ศูนย์ข้อมูลข่าวสาร</div>

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
                @foreach($InformationCenter as $detail)
                <tr>
                    <td><a href="{{route('InformationCenterDetail',$detail->id)}}">{{ $detail->name }}</a></td>
                </tr>
                @endforeach
            </table>

            @if($InformationCenter && $InformationCenter->count() > 0)
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-5">
                    <!-- Previous button -->
                    <li class="page-item {{ $InformationCenter->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $InformationCenter->previousPageUrl() }}">ก่อนหน้า</a>
                    </li>

                    <!-- Page number buttons -->
                    @foreach ($InformationCenter->getUrlRange(1, $InformationCenter->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $InformationCenter->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                    @endforeach

                    <!-- Next button -->
                    <li class="page-item {{ !$InformationCenter->hasMorePages() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $InformationCenter->nextPageUrl() }}">ต่อไป</a>
                    </li>
                </ul>
            </nav>
            @endif

        </div>
    </div>
</div>
@endsection
