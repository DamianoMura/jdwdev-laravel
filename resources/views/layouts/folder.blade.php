@extends('layouts.skeleton')

@section('layout')


  
  <header>
   <x-jdwnav> </x-jdwnav>
  </header> 
  
   
  <main class="w-full h-full p-5">
        
        @yield('content')
  </main>

  <footer style="background-image:url('./img/sfondo.jpg')">
    
  </footer>

@endsection