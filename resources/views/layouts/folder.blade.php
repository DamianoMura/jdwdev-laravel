@extends('layouts.skeleton')

@section('layout')


  
  <header>
   <x-jdwnav> </x-jdwnav>
  </header> 
  
   
  <main>
        
        @yield('content')
  </main>

  <footer style="background-image:url('./img/sfondo.jpg')">
    
  </footer>

@endsection