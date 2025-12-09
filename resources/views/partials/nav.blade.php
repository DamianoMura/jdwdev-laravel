<?php
$links=config('links');
?>


    <nav class="flex items-center justify-between px-6 py-4 mx-auto mb-6 bg-blue-400 rounded-md">
        <div>
            <a href="./" class="flex items-center text-2xl font-bold gap-2s">
              < <img src="{{url('./img/logo-jdw-trans-black.png')}}" alt="jdw logo" class="h-8 "> 
               <span> {{"dev.it>"}} </span>
            </a>
        </div>
            
        <div class="hidden lg:flex">
            <ul class="flex-end">
               <li class="flex gap-6">
                
                    <a href="/dashboard" class="text-white hover:text-gray-200">dashboard</a>
               </li>
            </ul>
        </div>

        <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
        <el-dropdown class="hidden lg:hidden">
        {{-- <el-dropdown class="inline-block lg:hidden"> sobstitute with this if you need menu button--}}
            <button
                class="uppercase inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs inset-ring-1 inset-ring-gray-300 hover:bg-gray-50">
                menù
                
            </button>
        
            <el-menu anchor="bottom end " popover
                class="p-3 w-56 origin-top-right rounded-md bg-white shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                <div class="py-1">
                   <ul >
                    <li class="flex flex-col gap-4 ">
                      links
                    </li>
                </ul>
                </div>
            </el-menu>
        </el-dropdown>
        
    </nav>








