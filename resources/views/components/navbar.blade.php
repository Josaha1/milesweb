<nav
    class="bg-white text-black dark:bg-gray-900 dark:text-white shadow-md fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <div class="container mx-auto px-4 ">
        <div class="flex justify-between items-center py-2">
            <!-- Logo -->
            <a href="/" class="text-xl font-bold text-gray-800">
                <img src="{{ asset('assets/miles_logo.png') }}" alt="Logo" class="h-15 w-auto">
            </a>

            <!-- Navigation Links -->
            <ul class="hidden md:flex space-x-6" id="navbar-menu">
                <li class="relative group">
                    <a href="/" class="text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">
                        หน้าแรก
                        <span
                            class="absolute left-0 -bottom-1 w-0 h-[2px] bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>


                <li id="services-menu" class="relative group">
                    <a href="#" class="flex items-center text-gray-600 dark:text-white hover:text-orange-600">
                        บริการของเรา
                        <!-- Icon dropdown -->
                        <svg class="ml-1 w-4 h-4 text-gray-500 group-hover:rotate-180 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span
                            class="absolute left-0 -bottom-1 w-0 h-[2px] bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    <!-- Mega Menu -->
                    <div id="mega-menu"
                        class="absolute left-1/2 -translate-x-1/3 top-full mt-2 w-screen max-w-4xl bg-white shadow-lg p-8 hidden group-hover:flex gap-10 z-50 transition-all duration-300">

                        <!-- เมนูหลักแบบหลายคอลัมน์ -->
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 flex-grow">
                            <a href="/service1" class="text-gray-700 hover:text-orange-600">กลยุทธ์องค์กร</a>
                            <a href="/service2" class="text-gray-700 hover:text-orange-600">ที่ปรึกษา ISO</a>
                            <a href="/service3" class="text-gray-700 hover:text-orange-600">ระบบคุณภาพ</a>
                            <a href="/service4" class="text-gray-700 hover:text-orange-600">การตลาดและแบรนด์</a>
                            <a href="/service5" class="text-gray-700 hover:text-orange-600">HR & Training</a>
                            <a href="/service6" class="text-gray-700 hover:text-orange-600">Business Development</a>
                            <a href="/service7" class="text-gray-700 hover:text-orange-600">Franchise & Expansion</a>
                            <a href="/service8" class="text-gray-700 hover:text-orange-600">Digital Transformation</a>
                        </div>

                        <!-- Featured Content -->
                        <div class="border-l pl-6 min-w-[250px]">
                            <h4 class="text-sm font-semibold text-gray-500 uppercase mb-2">แนะนำพิเศษ</h4>

                            <div class="mb-4">
                                <h5 class="font-semibold text-gray-800">Digital</h5>
                                <p class="text-sm text-gray-600 dark:text-white">
                                    เราช่วยองค์กรทรานส์ฟอร์มให้เข้าสู่ยุคดิจิทัลอย่างยั่งยืน</p>
                                <ul class="mt-2 list-disc list-inside text-blue-600 text-sm">
                                    <li><a href="/digital/building">Business Building</a></li>
                                    <li><a href="/digital/ai">AI & Automation</a></li>
                                    <li><a href="/digital/tech">Technology</a></li>
                                </ul>
                            </div>

                            <div>
                                <h5 class="font-semibold text-gray-800">Transformation</h5>
                                <p class="text-sm text-gray-600 dark:text-white">เรานำเสนอการเปลี่ยนแปลงแบบครบวงจร</p>
                            </div>
                        </div>
                    </div>
                </li>



                <li id="about-menu" class="relative group">
                    <a href="#" class="flex items-center text-gray-600 dark:text-white hover:text-orange-600">
                        เกี่ยวกับเรา
                        <!-- Icon dropdown -->
                        <svg class="ml-1 w-4 h-4 text-gray-500 group-hover:rotate-180 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                        <span
                            class="absolute left-0 -bottom-1 w-0 h-[2px] bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>

                    <!-- Mega Menu -->
                    <div id="about-mega-menu"
                        class="absolute left-1/2 -translate-x-1/3 top-full mt-2 w-screen max-w-2xl bg-white shadow-lg p-8 hidden group-hover:flex gap-10 z-50 transition-all duration-300">

                        <!-- เมนูหลักแบบหลายคอลัมน์ -->
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 flex-grow">
                            <a href="/service1" class="text-gray-700 hover:text-orange-600">กลยุทธ์องค์กร</a>
                            <a href="/service2" class="text-gray-700 hover:text-orange-600">ที่ปรึกษา ISO</a>
                        </div>
                    </div>
                </li>


                <li class="relative group">
                    <a href="/team" class="text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">
                        ทีมที่ปรึกษา
                        <span
                            class="absolute left-0 -bottom-1 w-0 h-[2px] bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li class="relative group">
                    <a href="/knowledge" class="text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">
                        ความรู้
                        <span
                            class="absolute left-0 -bottom-1 w-0 h-[2px] bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>

                <li class="relative group">
                    <a href="/news" class="text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">
                        ข่าวสาร
                        <span
                            class="absolute left-0 -bottom-1 w-0 h-[2px] bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
                <li class="relative group">
                    <a href="/contact" class="text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">
                        ติดต่อ
                        <span
                            class="absolute left-0 -bottom-1 w-0 h-[2px] bg-orange-600 transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </li>
            </ul>
            <div class="flex gap-4">
                <button id="theme-toggle" class="text-sm px-3 py-1 rounded border flex items-center gap-2">
                    <span id="icon-light" class="hidden">☀️</span>
                    <span id="icon-dark" class="hidden">🌙</span>
                </button>

                <!-- Hamburger Menu (Mobile) -->
                <button class="block md:hidden text-gray-600 dark:text-white focus:outline-none" id="navbar-toggle">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

            </div>
            <!-- Auth Links -->
            <div class="hidden md:block">
                @auth
                    <a href="#"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Login
                    </a>

                @endauth
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden transition-all duration-300" id="mobile-menu">
            <ul class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <li><a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">หน้าแรก</a></li>
                <li><a href="/service1" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">บริการ 1</a></li>
                <li><a href="/service2" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">บริการ 2</a></li>
                <li><a href="/about1" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">เกี่ยวกับ 1</a></li>
                <li><a href="/about2" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">เกี่ยวกับ 2</a></li>
                <li><a href="/team" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">ทีมที่ปรึกษา</a></li>
                <li><a href="/knowledge" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">ความรู้</a></li>
                <li><a href="/news" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">ข่าวสาร</a></li>
                <li><a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 dark:text-white hover:text-gray-800 dark:hover:text-gray-200">ติดต่อ</a></li>
                @auth
                    <a href="#"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium transition-colors duration-200 flex items-center">Dashboard</a>
                @else
                    <a href="{{ route("login") }}"
                        class="flex items-center px-3 py-2 rounded-md text-base font-medium text-white bg-blue-600 hover:bg-blue-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Login
                    </a>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<script>
    document.getElementById('navbar-toggle').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('block');
    });
    // Mega Menu Delay Hover Handler
    const menuTrigger = document.getElementById('services-menu');
    const megaMenu = document.getElementById('mega-menu');
    const menuAboutTrigger = document.getElementById('about-menu');
    const megAboutaMenu = document.getElementById('about-mega-menu');

    function hideAllMegaMenus() {
        megaMenu.classList.add('hidden');
        megaMenu.classList.remove('flex');
        megAboutaMenu.classList.add('hidden');
        megAboutaMenu.classList.remove('flex');
    }




    let hideTimeout;

    menuTrigger.addEventListener('mouseenter', () => {
        clearTimeout(hideTimeout);
        hideAllMegaMenus(); // ซ่อนทั้งหมดก่อน

        megaMenu.classList.remove('hidden');
        megaMenu.classList.add('flex');
    });

    menuTrigger.addEventListener('mouseleave', () => {
        hideTimeout = setTimeout(() => {
            megaMenu.classList.add('hidden');
            megaMenu.classList.remove('flex');
        }, 200); // delay 200ms ก่อนซ่อน
    });

    megaMenu.addEventListener('mouseenter', () => {
        clearTimeout(hideTimeout);
        megaMenu.classList.remove('hidden');
        megaMenu.classList.add('flex');
    });

    megaMenu.addEventListener('mouseleave', () => {
        hideTimeout = setTimeout(() => {
            megaMenu.classList.add('hidden');
            megaMenu.classList.remove('flex');
        });
    });



    menuAboutTrigger.addEventListener('mouseenter', () => {
        clearTimeout(hideTimeout);
        hideAllMegaMenus(); // ซ่อนทั้งหมดก่อน

        megAboutaMenu.classList.remove('hidden');
        megAboutaMenu.classList.add('flex');
    });

    menuAboutTrigger.addEventListener('mouseleave', () => {
        hideTimeout = setTimeout(() => {
            megAboutaMenu.classList.add('hidden');
            megAboutaMenu.classList.remove('flex');
        }, 200); // delay 200ms ก่อนซ่อน
    });

    megAboutaMenu.addEventListener('mouseenter', () => {
        clearTimeout(hideTimeout);
        megAboutaMenu.classList.remove('hidden');
        megAboutaMenu.classList.add('flex');
    });

    megAboutaMenu.addEventListener('mouseleave', () => {
        hideTimeout = setTimeout(() => {
            megAboutaMenu.classList.add('hidden');
            megAboutaMenu.classList.remove('flex');
        });
    });

    const toggle = document.getElementById('theme-toggle');
    const iconLight = document.getElementById('icon-light');
    const iconDark = document.getElementById('icon-dark');
    const html = document.documentElement;

    // โหลดธีมจาก localStorage ถ้ามี
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme === 'dark') {
        html.setAttribute('data-theme', 'dark');
    }

    // ฟังก์ชันเปลี่ยนไอคอนตามธีม
    function updateToggleIcon() {
        const isDark = html.getAttribute('data-theme') === 'dark';
        iconLight.classList.toggle('hidden', isDark);
        iconDark.classList.toggle('hidden', !isDark);
    }

    // อัปเดตไอคอนทันทีเมื่อโหลด
    updateToggleIcon();

    toggle.addEventListener('click', () => {
        const isDark = html.getAttribute('data-theme') === 'dark';
        if (isDark) {
            html.removeAttribute('data-theme');
            localStorage.setItem('theme', 'light');
        } else {
            html.setAttribute('data-theme', 'dark');
            localStorage.setItem('theme', 'dark');
        }
        updateToggleIcon(); // อัปเดตไอคอนหลังสลับ
    });
</script>
