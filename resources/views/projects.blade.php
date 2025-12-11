@extends('layouts.folder')
@section('content')
<div class="px-5 mx-auto my-6">

  <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">


    <div class="grid grid-rows-1 gap-3">
<div id="docs-card"
        class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
          <i class="text-4xl fa-brands fa-git-alt"></i>
        </div>
      
        <div class="flex-col pt-3 sm:pt-5">
          <h2 class="text-xl font-semibold text-black ">Progetti</h2>
      
          <strong> qui posterò tutti i miei lavori più rilevanti!! </strong> <br>sarà un'occasione per mettere insieme tutte
          le
          tecnologie studiate nel corso degli anni!
          <a target="_blank" rel="noopener noreferrer" href="https://github.com/DamianoMura/jdwdev-laravel"
            class="flex items-center"> <i class="my-3 text-3xl fa-brands fa-git-alt"></i> github repo di www.jdwdev.it</a>
          <div class="flex items-center gap-6">
            <div
              class="my-10 flex size-12 shrink-0 self-center items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
              <i class="text-3xl fa-solid fa-person-digging"> </i>
            </div>
            
            <p class="text-2xl">Work in Progress!</p>
          </div>
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
          <h2 class="text-xl font-semibold text-black ">GitHub Repos degli esercizi</h2>
          <div class="max-w-lg mx-auto ">
            <div class="w-full divide-y divide-gray-100">
              <details class="group" >
                <summary
                  class="flex items-center justify-between py-4 text-lg font-medium list-none cursor-pointer text-secondary-900 group-open:text-primary-500">
                  Boolean Corso Base Full Stack Web Developement
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="block w-5 h-5 group-open:hidden">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="hidden w-5 h-5 group-open:block">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                    </svg>
                  </div>
                </summary>
                <div class="pb-4 text-secondary-500">
                  qui verranno caricati i link alle repo di tutti gli esercizi del corso base Boolean delle seguenti fasi.
                <ul>
                  <li>html/css - bootstrap (in questo sito verrà implementato tailwind.css)</li>
                  <li>javascript</li>
                  <li>node.js</li>
                  <li>React.js</li>
                </ul>
              </div>
              </details>
              <details class="group">
                <summary
                  class="flex items-center justify-between py-4 text-lg font-medium list-none cursor-pointer text-secondary-900 group-open:text-primary-500">
                  Specializzazione Boolean - PHP - Laravel
                  <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="block w-5 h-5 group-open:hidden">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                      stroke="currentColor" class="hidden w-5 h-5 group-open:block">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                    </svg>
                  </div>
                </summary>
                <div class="pb-4 text-secondary-500">Qui verranno caricati i link delle repo agli esercizi della specializzazione</div>
              </details>
             
            </div>
          </div>
        </div>


      </div>


    </div>







  </div>
</div>
@endsection