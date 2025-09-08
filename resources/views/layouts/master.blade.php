@extends('layouts.base')
@section('body')
    @include('layouts.partials.sub-header')
    @include('layouts.partials.header')
    <main class="main">
        @yield('content')
    </main>
    @include('layouts.partials.footer')
    @stack('script')
@endsection