@extends('layouts.folder')
@section('content')
<div class="px-5 mx-auto my-6">
    
        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
    
    
            <div class="grid grid-rows-1 gap-3">
                
                <div class="flex justify-between gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
                    <div class="flex flex-col">
                       <div class="flex items-center">
                        <div
                            class="flex flex-col  size-20 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-20 overflow-hidden">
                            <img src="https://media.licdn.com/dms/image/v2/C4D03AQExiDr_5P7CDA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1549988698693?e=1767225600&v=beta&t=j1NsN51qk0mC_YDQeT-i2ZCe2mzGj5NfCblavPPuvEk"
                                alt="">
                        
                        </div>
                        <h2 class="px-3 text-xl font-semibold text-black">Damiano Mura </h2>
                       </div>
                        <div class="flex items-center"><i class="mx-2 text-2xl fa-solid fa-map-location-dot"></i> Sud Sardegna</div>
                        <div class="flex items-center"><i class="mx-2 text-2xl fa-solid fa-flag-checkered"></i> corso Boolean Full Stack Web Developement </div>
                        <div class="flex items-center"><i class="mx-2 text-2xl fa-solid fa-magnifying-glass"></i>Full-Stack, back-end o front-end junior dev</div>
                        
                    </div>
                    
                    <div class="pt-3 sm:pt-5 ">
                        
    
                        <p class="mt-4 text-sm/relaxed">
                            <span class="font-bold">Profili professionali e contatti:</span>
                        <ul>
                            <li><a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/damiano-mura-435299100"><i class="px-2 text-2xl fa-brands fa-linkedin"></i> Profilo LinkedIn</a> </li>
                            <li><a target="_blank" rel="noopener noreferrer" href="https://github.com/DamianoMura"><i class="px-2 text-2xl fa-brands fa-github"></i> Profilo GitHub</a></li>
                            <li><a href="mailto:mura.damiano14@gmail.com"><i class="px-2 text-2xl fa-brands fa-google"></i>  Mail</a></li>
                          
                        </ul>
                        </p>
                    </div>
    
                  
                </div>
                <div id="docs-card" 
                    class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
                    <div class="flex flex-col justify-between">
                        <div class="flex items-center my-2">
                            <div
                                class="flex flex-col  size-20 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-20 overflow-hidden">
                                <i class="text-4xl fa-solid fa-graduation-cap"></i>
                    
                            </div>
                            <h2 class="px-3 text-xl font-semibold text-black">Educazione: </h2>
                        </div>
                        <div class="flex items-center my-2">
                            
                            <div
                                class="flex flex-col  size-20 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-20 overflow-hidden mx-5">
                            
                                <i class="text-5xl mx-7 fa-solid fa-school" width="120px"></i>
                            </div>
                            Diploma Perito Industriale Capotecnico indirizzo informatica 76%</div>
                        <div class="flex items-center my-2">
                             
                            <div class="flex flex-col items-center justify-center mx-5 overflow-hidden rounded-full size-20 shrink-0 bg-blue-950 sm:size-20">
                            
                                <img src="https://lwfiles.mycourse.app/6368e5089f20781a7e4f1805-public/2c162927114072f9ebbf04043a593fb9.png" alt="boolean"
                                class="bg-cover "    >
                            </div> 
                            Corso Boolean Full Stack Web Developement (in corso) </div>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.coursera.org/account/accomplishments/verify/K6DCCHQEHEDM" class="flex items-center my-2">
                        
                            <div
                                class="flex flex-col  size-20 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-20 overflow-hidden mx-5">
                            
                                <img src="{{url('./img/courseralearning_logo.jpg')}}" class="bg-cover" alt="coursera" >
                            </div>
                            Google: Operating Systems and You:Becoming a Power User</a>
                        <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/damiano-mura-435299100/details/education/1758020470887/single-media-viewer/?profileId=ACoAABmrsCkBxzJ0cghTjF_Q0KfrgXep-ElvW_0" class="flex items-center my-2"> 
                            <div
                                class="flex flex-col items-center justify-center mx-5 overflow-hidden bg-gray-800 rounded-full size-20 shrink-0 sm:size-20">
                            
                                <img src="{{url('./img/appbrewery.png')}}" class="bg-gray-800 bg-cover" alt="appBreweryLondon">
                            </div>
                            Introduction to Flutter Developement Using Dart</a>
                        
                    
                    </div>
                </div>
            </div>
            <div class="grid grid-rows-1 gap-3">
    
    
    
                <div id="docs-card" href="./#"
                    class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                        <i class="text-2xl fa-solid fa-code-branch"></i>
                    </div>
    
                    <div class="flex flex-col h-full pt-3 sm:pt-5">
                        <h2 class="text-xl font-semibold text-black ">Questo progetto</h2>
                        <div class="p-3 ">
                            Con questo progetto vorrei dimostrare ciò che ho imparato negli anni e in particolare nell'ultimo corso
                            <strong>Boolean Full Stack Web Developement</strong> in particolare L'ultima fase di
                            specializzazione in
                            PHP/Laravel ma non solo.
                        </div>
                        <div class="p-3 ">
                           Ho realizzato altri progettini come scraper con php e giochini con javascript come esercizio di stile per imparare ad utilizzare al meglio le tecnologie che ho imparato e tutto compresi gli esercizi della specializzazione boolean e qualche altro degno di nota del corso in presenza zoom riguardante React.js
                        </div>
                        <div class="p-3">
                          <a target="_blank" rel="noopener noreferrer" href="https://github.com/DamianoMura/jdwdev-laravel" class="flex items-center"> <i class="mx-3 text-3xl fa-brands fa-git-alt"></i> github repo</a>
                        </div>
                    </div>
    
                  
                </div>
                
    
            </div>
    
    
    
    
    
    
    
        </div>
    </div>
@endsection
            
