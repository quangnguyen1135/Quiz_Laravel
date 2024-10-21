@extends('layout.master')
@section('content')
    <div class="main-container-course" id="app">
        <course-list></course-list>
        <router-view></router-view>
    </div>
@endsection
@php
    $hideFooter = true;
@endphp
