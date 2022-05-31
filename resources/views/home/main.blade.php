@extends('layouts.main')
@section('content')
    <!-- Start main-content -->
    <div class="main-content">

        @include('home.slider')

        @include('home.tentang')
        
        @include('home.kurikulum')
        
        @include('home.classes')


        @include('home.metodebelajar')

        @include('home.aktivitas')

        @include('home.gallery')

        {{-- @include('home.blog') --}}

        <!-- end main-content -->
    </div>
@endsection
