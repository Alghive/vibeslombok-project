@extends('admin.layouts.base')
@section('body')
    @include('admin.layouts.partials.navbar ')
    @include('admin.layouts.partials.sidebar')
    <main class="main">
        @yield('content')
    </main>
    @include('admin.layouts.partials.footer')
    @stack('script')
@endsection
