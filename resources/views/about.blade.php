@extends('layouts.folder')
@section('content')
<div class="h-full px-5 mx-auto mt-6">
    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:gap-8">
            <div class="flex flex-col gap-3">
                <div id="docs-card"
                    class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#3d3a3a] md:row-span-3 lg:p-10 lg:pb-10 ">
                    <!-- docs-card personal info -->
            
                    <div class="relative flex items-center gap-6 lg:items-end">
                        <div id="docs-card-content" class="flex items-start gap-6">
                            <div
                                class="flex size-20 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-20 overflow-hidden">
                                <img src="https://media.licdn.com/dms/image/v2/C4D03AQExiDr_5P7CDA/profile-displayphoto-shrink_400_400/profile-displayphoto-shrink_400_400/0/1549988698693?e=1767225600&v=beta&t=j1NsN51qk0mC_YDQeT-i2ZCe2mzGj5NfCblavPPuvEk" alt="" class="overflow-hidden">
                            </div>
            
                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                <h2 class="text-2xl font-semibold text-black">Damiano Mura</h2>
                                
                                    <div class="flex items-center"><i class="text-2xl fa-solid fa-earth-europe"></i> Sud Sardegna (SU)</div>
                                    <a href="https://www.linkedin.com/in/damiano-mura-435299100/">
                                        <i class="text-3xl fa-brands fa-linkedin"></i>
                                    </a> 
                                    <a href="https://github.com/DamianoMura"> 
                                        <i class="text-2xl fa-brands fa-github"></i>
                                    </a> 
                                    <a href="mailto:mura.damiano14@gmail.com"><i class="text-2xl fa-solid fa-envelope"></i></a>
            
                            
                        
                            </div>
                        </div>
            
                    </div>
                </div>
                <div id="docs-card"
                    class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#3d3a3a] md:row-span-3 lg:p-10 lg:pb-10 ">
                
                
                    <div class="relative flex items-center gap-6 lg:items-end">
                        <div id="docs-card-content" class="flex items-start gap-6">
                            <div
                                class="flex size-20 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-20 overflow-hidden">
                                <i class="text-4xl fa-solid fa-graduation-cap"></i>
                            </div>
                
                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                <h2 class="text-3xl font-semibold text-black ">Educazione</h2>
                            </div>
                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                <ul class="md:flex">
                                    <li>1</li>
                                    <li>2</li>
                                    <li>3</li>
                                </ul>
                            </div>
                
                
                        </div>
                
                    </div>
                </div>
            </div>    
            <div class="flex flex-col gap-3">
                <div id="docs-card"
                    class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#3d3a3a] md:row-span-3 lg:p-10 lg:pb-10 ">
    
    
                    <div class="relative flex items-center gap-6 lg:items-end">
                        <div id="docs-card-content" class="flex items-start gap-6">
                            <div
                                class="flex size-20 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-20 overflow-hidden">
                                <i class="text-3xl fa-solid fa-briefcase"></i>
                            </div>
    
                            <div class="pt-3 sm:pt-5 lg:pt-0">
                                <h2 class="text-xl font-semibold text-black">Esperienze Lavorative</h2>
                               
                                    <ul>
                                        <li class="py-2 border-b-2">
                                            <h3 class="text-2xl">Ristorazione</h3>
                                            <div class="flex justify-between ">
                                                <i class="self-center pr-2 text-3xl fa-solid fa-champagne-glasses">:</i>
                                                <ul class="px-3">
                                                    <li class="flex-col my-2">
                                                        <h4>Stagioni Estiva+Invernale 2024 - San Cassiano In Badia , (BZ)</h4>
                                                        <p>Diamant Hotel (Chef de Rang di Sala) </p>
                                                    </li>
                                                    <li class="flex-col my-2">
                                                        <h4>Stagione invernale 2023 - Courmayeur , (AO)</h4>
                                                        <p>La Chaumiere</p> (accoglienza, prenotazioni, commis di sala, carico/scarico motoslitta per merci/immondezza)
                                                    </li>
                                                    <li class="flex-col my-2">
                                                        <h4>Stagione estiva 2023 - Villasimius , (SU)</h4>
                                                        <p>Pullman Almar Timi Ama ***** (Chef de Rang di Sala) </p>
                                                    </li>
                                                    <li class="flex-col my-2">
                                                        <h4>Stagione estiva 2022 - Tertenia , (SU)</h4>
                                                        <p>Hotel Janas *** (Chef de Rang di Sala) </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="py-2 border-b-2">
                                            <h3 class="text-2xl">Magazzino</h3>
                                            <div class="flex">
                                                <i class="self-center pr-2 text-3xl fa-solid fa-truck-ramp-box">:</i>
                                                
                                                <ul class="px-3">
                                                    <li class="flex-col my-2">
                                                        <h4>2016/2018 - Northampton, UK</h4>
                                                        <p>Stanley Black and Decker - Inventory Specialist</p>
                                                    </li>
                                                    <li class="flex-col my-2">
                                                        <h4>2015/2016 - Northampton, UK</h4>
                                                        <p>Dalepak - Stock Controller</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                       
                                        <li class="py-2 border-b-2">
                                            <div class="flex justify-between ">
                                                <a href="/#">
                                                    <i class="fa-solid fa-folder-open">VAI_AL_CV_></i>
                                                </a>
                                    
                                            </div>
                                        </li>
                                    </ul>
                                </a>
                            </div>
                            
    
                        </div>
    
                    </div>
                </div>
            </div>    
       
    </div>
</div>
@endsection
            
