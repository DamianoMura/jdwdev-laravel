@extends('layouts.folder')
@section('content')
<div class="px-5 mx-auto my-6 ">
  <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
    <div class="grid grid-rows-1">
      <div id="docs-card" href="./projects"
        class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 ">
        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
          <i class="text-4xl fa-brands fa-git-alt"></i>
        </div>
      
        <div class="pt-3 sm:pt-5">
          <h2 class="text-xl font-semibold text-black ">Progetti</h2>
      
          <strong> qui posterò tutti i miei lavori più rilevanti!! </strong> <br>sarà un'occasione per mettere insieme tutte
          le
          tecnologie studiate nel corso degli anni!
        </div>
      
      
      </div>
    </div>
  </div>
</div>
@endsection