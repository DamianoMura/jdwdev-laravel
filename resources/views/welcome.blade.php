@extends('layouts.folder')
@section('content')
                    <div class="px-5 mx-auto mt-6">
                      
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">


                            <div class="flex flex-col gap-3 description">
                                <div id="docs-card"
                                        class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#3d3a3a] md:row-span-3 lg:p-10 lg:pb-10 ">
                                    
                                    
                                        <div class="relative flex items-center gap-6 lg:items-end">
                                            <div id="docs-card-content" class="flex items-start gap-6">
                                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                                 <i class="text-3xl fa-solid fa-earth-europe"></i>
                                                </div>
                                    
                                                <div class="pt-3 sm:pt-5 lg:pt-0">
                                                    <h2 class="text-xl font-semibold text-black">Benvenuti nel mio sito vetrina</h2>
                                                    <h3>sito web a cura di Damiano Mura </h3>
                                                    <p>
                                                        <br>
                                                        Ho sempre amato il mondo della programmazione e dopo anni provando i lavori più disparati ho deciso
                                                        di provare a trasformare
                                                        questa mia vecchia passione in un lavoro. <i class="text-4xl fa-brands fa-angellists"></i>.
                                    
                                    
                                    
                                                    </p>
                                    
                                                </div>
                                    
                                            </div>
                                    
                                        </div>
                                    </div>
                                    <a id="docs-card" href="./about"
                                            class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
                                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                                <i class="text-2xl fa-solid fa-address-card"></i>
                                            </div>
                                        
                                            <div class="pt-3 sm:pt-5">
                                                <h2 class="text-xl font-semibold text-black ">info personali</h2>
                                        
                                                <p class="mt-4 text-sm/relaxed">
                                                    <strong>sezione infase di costruzione!</strong>
                                                    <span class="font-bold">presenterà:</span>
                                                <ul >
                                                    <li>- curriculum vitae</li>
                                                    <li>- link vari</li>
                                                    <li>- contatti</li>
                                                </ul>
                                                </p>
                                            </div>
                                        
                                            <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                            </svg>
                                        </a>
                            </div>
                            <div class="flex flex-col gap-3">

                                <a id="docs-card" href="./projects"
                                    class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <i class="text-4xl fa-brands fa-git-alt"></i>
                                    </div>
                                
                                    <div class="pt-3 sm:pt-5">
                                        <h2 class="text-xl font-semibold text-black ">Progetti</h2>
                                
                                      <strong> qui posterò tutti i miei lavori più rilevanti!! </strong> <br>sarà un'occasione per mettere insieme tutte le
                                    tecnologie studiate nel corso degli anni!
                                    </div>
                                
                                    <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                    </svg>
                                </a>
                          
    
                                <a id="docs-card" href="./#"
                                    class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <i class="text-2xl fa-solid fa-code-branch"></i>
                                    </div>
                                
                                    <div class="pt-3 sm:pt-5">
                                        <h2 class="text-xl font-semibold text-black ">Questo progetto</h2>
                                        <div class="p-3 ">
                                                                                    Messa in atto di cio che ho imparato con
                                                                                    <strong>Boolean Full Stack Web Developement</strong> in particolare L'ultima fase di specializzazione in
                                            PHP/Laravel.
                                        </div>
                                    </div>
                                
                                    <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                    </svg>
                                </a>
                                <a id="docs-card" href="./#"
                                    class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <i class="text-2xl fa-solid fa-person-digging"></i>
                                    </div>
                                
                                    <div class="pt-3 sm:pt-5">
                                        <h2 class="text-xl font-semibold text-black ">work in progress!</h2>
                                        
                                    </div>
                                    
                                    <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                    </svg>
                                </a>
                               
                            </div>
                            
                     

                          


                         
                        </div>
                    </div>
@endsection