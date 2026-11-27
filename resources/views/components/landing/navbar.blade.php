
<!-- NAVBAR -->
<header class="sticky top-0 z-50 w-full border-b border-[#243852] bg-[#132133]">
    <div class="relative mx-auto flex max-w-[1440px] items-center justify-between gap-[30px] px-[28px] py-[15px] min-[1200px]:px-[120px] max-[768px]:px-5 max-[480px]:px-4">

        <!-- LOGO -->
        <a href="/" class="inline-flex items-center gap-[10px] text-[#f5b900] max-[480px]:gap-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Sekolah" class="h-[38px] w-[38px] object-contain max-[992px]:h-[34px] max-[480px]:h-[30px]">
            <span class="text-[20px] font-bold tracking-[-0.5px] text-[#f5b900]">SIMPATI</span>
        </a>

        <!-- HAMBURGER -->
        <button id="menuToggle" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="navMenu"
                class="ml-auto hidden flex-col gap-[5px] border-0 bg-transparent p-0 max-[768px]:flex">
            <span class="h-[2px] w-[18px] rounded bg-white"></span>
            <span class="h-[2px] w-[18px] rounded bg-white"></span>
            <span class="h-[2px] w-[18px] rounded bg-white"></span>
        </button>

        <!-- NAVIGATION -->
        <nav id="navMenu" class="hidden min-[769px]:absolute min-[769px]:left-1/2 min-[769px]:flex min-[769px]:-translate-x-1/2 min-[769px]:items-center min-[769px]:gap-[34px] max-[768px]:absolute max-[768px]:left-5 max-[768px]:right-5 max-[768px]:top-[calc(100%+8px)] max-[768px]:flex-col max-[768px]:gap-0 max-[768px]:rounded-[12px] max-[768px]:border max-[768px]:border-[#263a55] max-[768px]:bg-[#132133] max-[768px]:p-2 max-[768px]:shadow-md">

            <a href="#home" data-nav-link class="nav-active relative py-2 text-[14px] font-bold text-white max-[768px]:px-[14px] max-[768px]:py-3">Beranda</a>

            <a href="#fitur" data-nav-link class="relative py-2 text-[14px] font-medium text-white/80 transition hover:text-[#f5b900] max-[768px]:px-[14px] max-[768px]:py-3">Fitur</a>

            <a href="#tentang" data-nav-link class="relative py-2 text-[14px] font-medium text-white/80 transition hover:text-[#f5b900] max-[768px]:px-[14px] max-[768px]:py-3">Tentang Kami</a>

            <a href="#testimoni" data-nav-link class="relative py-2 text-[14px] font-medium text-white/80 transition hover:text-[#f5b900] max-[768px]:px-[14px] max-[768px]:py-3">Informasi</a>

            <!-- LOGIN MOBILE -->
            <a href="#" class="hidden items-center gap-2 rounded-full bg-[#f5b900] px-[22px] py-[10px] text-[13px] font-bold text-[#132133] transition hover:bg-[#e6a900] max-[768px]:inline-flex max-[768px]:mx-[14px] max-[768px]:my-2">

                <svg class="h-[16px] w-[16px] shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M10 17L15 12L10 7M15 12H3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <span>Masuk</span>
            </a>
        </nav>

        <!-- LOGIN DESKTOP -->
        <div class="max-[768px]:hidden">
            <a href="#" class="inline-flex items-center gap-2 rounded-full bg-[#f5b900] px-[22px] py-[10px] text-[13px] font-bold text-[#132133] transition hover:bg-[#e6a900]">

                <svg class="h-[16px] w-[16px] shrink-0" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M10 17L15 12L10 7M15 12H3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 3H19C20.1046 3 21 3.89543 21 5V19C21 20.1046 20.1046 21 19 21H12" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <span>Masuk</span>
            </a>
        </div>
    </div>
</header>
