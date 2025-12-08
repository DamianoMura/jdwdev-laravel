@extends('layouts.skeleton')

@section('layout')
<header>
    @include('partials.nav')
</header>
<main class="min-h-screen mb-5">
    @yield('content')
</main>

@endsection