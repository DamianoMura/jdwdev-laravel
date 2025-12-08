@extends('layouts.default')
@section('content')



    <div class="container grid grid-cols-1 mx-auto md:grid-cols-2">
        <div class="p-5 ">
            <h1 class="mb-3 text-3xl">Benvenuti su JDWdev.it!</h1>
            <h2 class="text-center">- John Demian Walls Dev -</h2>
            <p><strong>Benvenuti nel mio sito vetrina.</strong> <br>
                Questo sito nasce come progetto parallelo alla formazione come <strong>Full Stack Web Developer</strong> di <strong>Boolean</strong>
                , un corso intensivo di 6 mesi in presenza Zoom obbligatoria con esercizi giornalieri.
                Inizialmente inserirò solamente gli ultimi relativi la specializzazione PhP/Laravel con il quale questa applicazione è stata prodotta.
                </p>
            <p>ps: i recruiter sono sempre beneaccetti <i class="fa-brands fa-angellist"></i></p>
        </div>

        <div class="p-5 text-center bg-gray-200 border-gray-400 shadow-2xl frame flex-cols">
            <div class="title">
                <h3 class="mb-3 text-2xl">Tecnologie in ballo <i class="fa-solid fa-biohazard"></i> </h3>
            </div>

            <x-technology_list></x-technology_list>
            
        </div> 
        <i class="fa-solid fa-link label">curriculum</i>
   
    </div>
            
           

           

    @endsection