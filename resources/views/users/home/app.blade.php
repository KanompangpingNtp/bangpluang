@extends('users.layouts.main-layout')

@section('title', 'home')
@section('content')
    @include('users.home.components.section-1')
    @include('users.home.components.section-2')
    @include('users.home.components.section-3')
    @include('users.home.components.section-4')
@endsection