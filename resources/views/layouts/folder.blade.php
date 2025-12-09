@extends('layouts.skeleton')

@section('layout')

<div class="fullscreen">
 
  <div>
    <div class="top-panel">
      <x-nav-jdw> </x-nav-jdw>
     
    </div>
      <main class="py-3 content">
        
        @yield('content')
      </main>
    </div>
  
   
  </div>
</div>



@endsection