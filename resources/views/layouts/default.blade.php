@extends('layouts.skeleton')

@section('layout')
<header>
    @include('partials.nav')
</header>
<main class="min-h-screen">
    @yield('content')
</main>

@endsection