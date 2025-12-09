@extends('layouts.skeleton')

@section('layout')
<div class="fullscreen">
  <div>
    <div class="top-panel">
      <img src="{{url('./img/logo-jdw-trans-black.png')}}" alt="background-logo">
   <x-nav-jdw>  </x-nav-jdw>
        
       
          
        
          
       
      
    </div>
      <div class="content">
        
        @yield('content')
      </div>
    </div>
  
   
  </div>
</div>



@endsection