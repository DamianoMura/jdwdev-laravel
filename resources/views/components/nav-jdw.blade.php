<div class="w-full text-sm text-white nav-jdw">
    
    <nav
        class=" relative h-[70px] flex items-center justify-between px-6 md:px-16 lg:px-24 xl:px-32 py-4  text-gray-900 transition-all shadow">

        <a href="./" class="logo">
            
                <img src="{{url('./img/logo-jdw-black.png')}}" alt="">
           
        </a>

        <ul class="items-center hidden space-x-8 text-2xl text-white md:flex md:pl-28">
            <li class="menu-link"><a href="/">Home</a></li>
            <li class="menu-link"><a href="/about">About</a></li>
            <li class="menu-link"><a href="/projects">Progetti</a></li>
        </ul>


        <button aria-label="menu-btn" type="button" class="inline-block transition menu-btn md:hidden active:scale-90">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
                <path
                    d="M3 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2zm0 7a1 1 0 1 0 0 2h24a1 1 0 1 0 0-2z" />
            </svg>
        </button>

        <div class="mobile-menu absolute top-[70px] right-0 w-full bg-white z-10 shadow-sm p-6 hidden md:hidden ">
            <ul class="flex flex-col space-y-4 text-lg ">
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/projects">Progetti</a></li>
            </ul>

        </div>
    </nav>
</div>

<script>
    const menuButtons = document.querySelectorAll('.menu-btn');
   const mobileMenus = document.querySelectorAll('.mobile-menu');

   menuButtons.forEach((btn, index) => {
       btn.addEventListener('click', () => {
           mobileMenus[index].classList.toggle('hidden');
       });
   });

</script>