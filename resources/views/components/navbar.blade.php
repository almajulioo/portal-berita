<nav class="flex px-4 md:px-8 lg::px-16 blue justify-between items-center py-4">
    <div class="flex gap-9 items-center">
        <h1 class="text-[32px] font-bold"><a href="/">Portal Berita</a></h1>
        <form class="hidden md:block" action="">
            <div class="flex items-center bg-[#8DAF80] rounded-full w-full max-w-[335px] px-4"
                style="box-shadow: inset 0px 4px 5px rgba(0, 0, 0, 0.25);">
                <i class="fa-solid fa-magnifying-glass text-[#2F4858] mr-2"></i>
                <input type="text" placeholder="Cari Berita terkini..."
                    class="bg-transparent py-2 text-[#2F4858] placeholder-[#2F4858] w-full focus:outline-none" />
            </div>
        </form>
    </div>
    <div class="hidden md:block">
        <ul class="flex gap-16 text-[16px] font-semibold">
            <li><a href="/berita">Berita</a></li>
            <li><a href="/kategori">Kategori</a></li>
            <li><a href="/aboutus">About Us</a></li>
        </ul>
    </div>
    
    <div class="md:hidden">
        <button id="menu-btn" class="text-gray-800 focus:outline-none">
            <i class="fas fa-bars text-2xl"></i>
        </button>
    </div>
    <div id="mobile-menu" class="hidden md:hidden absolute top-[80px] left-0 w-full blue bg-[#DFDAAE] shadow-lg">
           <div class="px-4 pt-2 pb-4">
                <form action="" class="mb-4">
                   <div class="flex items-center bg-[#8DAF80] rounded-full w-full px-4"
                       style="box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.2);">
                       <i class="fa-solid fa-magnifying-glass text-[#2F4858] mr-2"></i>
                       <input type="text" placeholder="Cari Berita..."
                           class="bg-transparent py-2 text-[#2F4858] placeholder-[#2F4858] w-full focus:outline-none" />
                   </div>
               </form>
               <ul class="flex flex-col gap-4 text-base font-semibold text-gray-700">
                   <li><a href="/berita" class="block py-2 px-2 rounded hover:bg-indigo-100 transition-colors">Berita</a></li>
                   <hr>
                   <li><a href="/kategori" class="block py-2 px-2 rounded hover:bg-indigo-100 transition-colors">Kategori</a></li>
                   <hr>
                   <li><a href="/aboutus" class="block py-2 px-2 rounded hover:bg-indigo-100 transition-colors">About Us</a></li>
               </ul>
           </div>
    </div>
</nav>


<script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = menuBtn.querySelector('i');

        menuBtn.addEventListener('click', () => {
            // Toggle the 'hidden' class on the mobile menu
            mobileMenu.classList.toggle('hidden');

            // Change the icon from bars to times (X) and back
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.classList.remove('fa-times');
                menuIcon.classList.add('fa-bars');
            } else {
                menuIcon.classList.remove('fa-bars');
                menuIcon.classList.add('fa-times');
            }
        });
    </script>