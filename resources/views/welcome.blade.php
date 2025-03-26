@extends('layouts.app')
@section('slider')
    <div id="slider" class="relative w-full pt-16 overflow-hidden max-h-screen">
        <div class="slider-images flex transition-transform duration-1000 ease-in-out">
            <div class="slider-item w-full flex-shrink-0">
                <img src="https://wallpapercave.com/wp/wp7098422.jpg" alt="Slide 1"
                    class="w-full h-full object-cover object-center">
            </div>
            <div class="slider-item w-full flex-shrink-0">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/024/039/736/small_2x/closeup-view-of-businessmen-working-together-on-a-document-with-computer-and-sitting-at-desk-in-modern-office-room-generative-ai-illustration-photo.jpg"
                    alt="Slide 2" class="w-full h-full object-cover object-center">
            </div>
            <div class="slider-item w-full flex-shrink-0">
                <img src="https://wallpapercave.com/wp/wp7098419.jpg" alt="Slide 3"
                    class="w-full h-full object-cover object-center">
            </div>
        </div>

        <!-- ข้อความทับบน slider -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-4 z-10">
            <h2 class="text-2xl sm:text-4xl font-bold drop-shadow-lg">Consulting Services</h2>
            <p class="text-sm sm:text-lg mt-2 drop-shadow-md">Step towards intelligent enterprise</p>
        </div>

        <!-- ปุ่ม -->
        <button id="prev"
            class="absolute top-1/2 sm:top-[50%] left-2 sm:left-4 transform -translate-y-1/2 z-10 text-white text-2xl rounded-full bg-black/30 hover:bg-black/60 transition p-2">
            &#10094;
        </button>
        <button id="next"
            class="absolute top-1/2 sm:top-[50%] right-2 sm:right-4 transform -translate-y-1/2 z-10 text-white text-2xl rounded-full bg-black/30 hover:bg-black/60 transition p-2">
            &#10095;
        </button>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.querySelector('.slider-images');
            const slides = document.querySelectorAll('.slider-item');
            const prevButton = document.getElementById('prev');
            const nextButton = document.getElementById('next');
            let currentIndex = 0;

            const updateSlider = () => {
                slider.style.transform = `translateX(-${currentIndex * 100}%)`;
            };

            const autoSlide = () => {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlider();
            };

            let autoSlideInterval = setInterval(autoSlide, 6000);

            prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + slides.length) % slides.length;
                updateSlider();
                clearInterval(autoSlideInterval);
                autoSlideInterval = setInterval(autoSlide, 6000);
            });

            nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlider();
                clearInterval(autoSlideInterval);
                autoSlideInterval = setInterval(autoSlide, 6000);
            });
        });
    </script>
@endsection
@section('content')
    <main class="py-12 lg:py-20 bg-white text-black dark:dark:bg-gray-900 dark:text-white">
        <section id="home" class="min-h-screen w-full text-center px-6" data-aos="fade-up"
            data-aos-duration="1000">
            <div class="group inline-block">
                <h2 class="text-5xl py-6 cursor-pointer">Consultant Service</h2>
                <div
                    class="mx-auto w-24 h-1 bg-orange-600 mb-6 transition-all duration-500 group-hover:w-40 group-hover:bg-yellow-400">
                </div>
            </div>
            <p class="py-6 bg-white text-gray-700 dark:text-white dark:dark:bg-gray-900 dark:text-white">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
            </p>
        </section>
        {{-- About 1 --}}
        {{-- About Section Modern Interactive --}}
        @php
            $about1Sections = [
                [
                    'image' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'hover' => 'https://virgosara.com/media/wysiwyg/bannerimages/4_About_page_images_700_x700_-_1.jpg',
                ],
            ];
            $about2Sections = [
                [
                    'image' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'hover' => 'https://virgosara.com/media/wysiwyg/bannerimages/4_About_page_images_700_x700_-_1.jpg',
                ],
            ];
            $about3Sections = [
                [
                    'image' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'hover' => 'https://virgosara.com/media/wysiwyg/bannerimages/4_About_page_images_700_x700_-_1.jpg',
                ],
            ];
        @endphp
        @foreach ($about1Sections as $index => $about)
            <section
                class="w-full min-h-screen flex flex-col {{ $index % 2 === 1 ? 'lg:flex-row-reverse' : 'lg:flex-row' }} group relative overflow-hidden transition-all duration-500"
                data-aos="fade-up" data-aos-duration="1000">
                <!-- รูปภาพ -->
                <div class="w-full lg:w-1/2 h-[300px] lg:h-auto relative overflow-hidden">
                    <img src="{{ $about['image'] }}" data-hover="{{ $about['hover'] }}" alt="About us image"
                        class="w-full h-full object-cover transition-all duration-700 ease-in-out group-hover:scale-105 group-hover:opacity-0 hover-img" />
                    <img src="{{ $about['hover'] }}" alt="Hover image"
                        class="w-full h-full object-cover absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out" />
                </div>

                <!-- เนื้อหา -->
                <div
                    class="w-full lg:w-1/2 bg-white dark:bg-gray-900 dark:text-white flex flex-col justify-center px-6 py-12 lg:px-20">
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                        ขับเคลื่อนการเปลี่ยนแปลงองค์กรด้วย AI
                    </h2>
                    <p class="text-base lg:text-lg text-gray-700 dark:text-white mb-6 leading-relaxed">
                        ด้วยเครื่องมือวิเคราะห์ข้อมูลขั้นสูงและแนวคิดเชิงกลยุทธ์
                        เราสามารถช่วยองค์กรในการยกระดับกระบวนการทำงาน เพิ่มประสิทธิภาพ และสร้างคุณค่าใหม่ในยุคดิจิทัล
                    </p>
                    <div class="space-y-3">
                        <a href="/process"
                            class="inline-flex items-center text-blue-600 font-semibold hover:underline transition">
                            ปรับปรุงกระบวนการของคุณ <span class="ml-2">→</span>
                        </a>
                        <a href="/team"
                            class="inline-flex items-center text-blue-600 font-semibold hover:underline transition">
                            รู้จักทีมที่ปรึกษาของเรา <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </section>
        @endforeach
        @foreach ($about2Sections as $index => $about)
            {{-- About 2 --}}
            <section
                class="w-full min-h-screen flex flex-col-reverse {{ $index % 2 === 1 ? 'lg:flex-row-reverse' : 'lg:flex-row' }} group relative overflow-hidden transition-all duration-500"
                data-aos="fade-up" data-aos-duration="1000">
                <!-- ข้อความ (ซ้าย) -->
                <div
                    class="w-full lg:w-1/2 bg-white dark:bg-gray-900 dark:text-white flex flex-col justify-center px-6 py-12 lg:px-16">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 dark:text-white leading-tight mb-6">
                        ขับเคลื่อนการเปลี่ยนแปลงองค์กรด้วย AI
                    </h2>
                    <p class="text-base lg:text-lg text-gray-700 dark:text-white mb-6 leading-relaxed">
                        ด้วยเครื่องมือวิเคราะห์ข้อมูลขั้นสูงและแนวคิดเชิงกลยุทธ์
                        เราสามารถช่วยองค์กรในการยกระดับกระบวนการทำงาน เพิ่มประสิทธิภาพ และสร้างคุณค่าใหม่ในยุคดิจิทัล
                    </p>
                    <div class="space-y-4">
                        <a href="/process" class="text-blue-600 hover:underline font-semibold flex items-center">
                            ปรับปรุงกระบวนการของคุณ <span class="ml-2">→</span>
                        </a>
                        <a href="/team" class="text-blue-600 hover:underline font-semibold flex items-center">
                            รู้จักทีมที่ปรึกษาของเรา <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
                <!-- ภาพ (ขวา) -->
                <div class="w-full lg:w-1/2 h-[300px] lg:h-auto relative overflow-hidden">
                    <img src="{{ $about['image'] }}" data-hover="{{ $about['hover'] }}" alt="About us image"
                        class="w-full h-full object-cover transition-all duration-700 ease-in-out group-hover:scale-105 group-hover:opacity-0 hover-img" />
                    <img src="{{ $about['hover'] }}" alt="Hover image"
                        class="w-full h-full object-cover absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out" />
                </div>
            </section>
        @endforeach
        {{-- About 3 --}}
        @foreach ($about3Sections as $index => $about)
            <section
                class="w-full min-h-screen flex flex-col {{ $index % 2 === 1 ? 'lg:flex-row-reverse' : 'lg:flex-row' }} group relative overflow-hidden transition-all duration-500 "
                data-aos="fade-up" data-aos-duration="1000">
                <!-- รูปภาพ -->
                <div class="w-full lg:w-1/2 h-[300px] lg:h-auto relative overflow-hidden">
                    <img src="{{ $about['image'] }}" data-hover="{{ $about['hover'] }}" alt="About us image"
                        class="w-full h-full object-cover transition-all duration-700 ease-in-out group-hover:scale-105 group-hover:opacity-0 hover-img" />
                    <img src="{{ $about['hover'] }}" alt="Hover image"
                        class="w-full h-full object-cover absolute inset-0 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out" />
                </div>

                <!-- เนื้อหา -->
                <div
                    class="w-full lg:w-1/2 bg-white dark:bg-gray-900 dark:text-white flex flex-col justify-center px-6 py-12 lg:px-20">
                    <h2 class="text-3xl lg:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                        ขับเคลื่อนการเปลี่ยนแปลงองค์กรด้วย AI
                    </h2>
                    <p class="text-base lg:text-lg text-gray-700 dark:text-white mb-6 leading-relaxed">
                        ด้วยเครื่องมือวิเคราะห์ข้อมูลขั้นสูงและแนวคิดเชิงกลยุทธ์
                        เราสามารถช่วยองค์กรในการยกระดับกระบวนการทำงาน เพิ่มประสิทธิภาพ และสร้างคุณค่าใหม่ในยุคดิจิทัล
                    </p>
                    <div class="space-y-3">
                        <a href="/process"
                            class="inline-flex items-center text-blue-600 font-semibold hover:underline transition">
                            ปรับปรุงกระบวนการของคุณ <span class="ml-2">→</span>
                        </a>
                        <a href="/team"
                            class="inline-flex items-center text-blue-600 font-semibold hover:underline transition">
                            รู้จักทีมที่ปรึกษาของเรา <span class="ml-2">→</span>
                        </a>
                    </div>
                </div>
            </section>
        @endforeach
        @php
            $latestNews = [
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'date' => '2025-03-15',
                    'title' => 'โครงการพัฒนาผู้นำองค์กรเริ่มต้นแล้ว',
                    'excerpt' => 'MCR Consulting เปิดตัวโครงการพัฒนาศักยภาพผู้นำองค์กรเพื่อปรับตัวสู่ยุคดิจิทัล',
                ],
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'date' => '2025-03-10',
                    'title' => 'เผยผลวิจัย 9Q และ Burnout ในกลุ่มพนักงาน',
                    'excerpt' => 'แบบสอบถาม 9Q และภาวะหมดไฟช่วยให้ผู้บริหารเข้าใจความเครียดในองค์กร',
                ],
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'date' => '2025-03-01',
                    'title' => 'เริ่มใช้ระบบวิเคราะห์ข้อมูลสุขภาพจิตองค์กร',
                    'excerpt' => 'เครื่องมือใหม่ใช้วิเคราะห์ข้อมูลสุขภาพจิตผ่าน Dashboard อย่างมืออาชีพ',
                ],
            ];

            $pressReleases = [
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'title' => 'MCR เปิดตัวระบบ AI ด้านสุขภาพจิต',
                    'excerpt' => 'ระบบช่วยประเมินภาวะเครียด และแนะนำวิธีดูแลตนเองด้วยข้อมูลจากแบบสอบถาม',
                    'url' => '#',
                ],
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'title' => 'โครงการอบรมผู้บริหารองค์กร 2025',
                    'excerpt' => 'ฝึกทักษะผู้นำยุคใหม่ ตั้งเป้าปรับใช้กับทุกหน่วยงานภายในองค์กร',
                    'url' => '#',
                ],
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'title' => 'เผยแนวโน้มการใช้ Data-Driven สำหรับ HR',
                    'excerpt' =>
                        'การตัดสินใจโดยอิงข้อมูลเพิ่มความแม่นยำในการบริหารบุคลากรการตัดสินใจโดยอิงข้อมูลเพิ่มความแม่นยำในการบริหารบุคลากรการตัดสินใจโดยอิงข้อมูลเพิ่มความแม่นยำในการบริหารบุคลากร',
                    'url' => '#',
                ],
            ];
            $ourservices = [
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'title' => 'MCR เปิดตัวระบบ AI ด้านสุขภาพจิต',
                    'excerpt' => 'ระบบช่วยประเมินภาวะเครียด และแนะนำวิธีดูแลตนเองด้วยข้อมูลจากแบบสอบถาม',
                    'url' => '#',
                ],
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'title' => 'โครงการอบรมผู้บริหารองค์กร 2025',
                    'excerpt' => 'ฝึกทักษะผู้นำยุคใหม่ ตั้งเป้าปรับใช้กับทุกหน่วยงานภายในองค์กร',
                    'url' => '#',
                ],
                [
                    'image_url' => 'https://cdn.pixabay.com/photo/2024/07/05/06/55/about-8874037_960_720.png',
                    'title' => 'เผยแนวโน้มการใช้ Data-Driven สำหรับ HR',
                    'excerpt' =>
                        'การตัดสินใจโดยอิงข้อมูลเพิ่มความแม่นยำในการบริหารบุคลากรการตัดสินใจโดยอิงข้อมูลเพิ่มความแม่นยำในการบริหารบุคลากรการตัดสินใจโดยอิงข้อมูลเพิ่มความแม่นยำในการบริหารบุคลากร',
                    'url' => '#',
                ],
            ];
        @endphp

        {{-- ข่าว --}}
        <section id="news" class="w-full min-h-screen bg-white dark:bg-gray-900  px-6 py-12 lg:px-16"
            data-aos="fade-up" data-aos-duration="1000">
            <!-- Heading -->
            <div class="flex items-center space-x-4 group cursor-pointer mb-6">
                <div
                    class="w-16 h-16 flex items-center justify-center rounded-full bg-orange-600 border-2 border-orange-600 transition-all duration-300 group-hover:bg-transparent group-hover:border-orange-600">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 text-white group-hover:text-orange-600 transition-colors duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 4V2a1 1 0 012 0v2a1 1 0 01-2 0zM2 9h2a1 1 0 100-2H2a1 1 0 000 2zm21 4v9a1 1 0 01-1 1H8a1 1 0 01-1-1V8a1 1 0 011-1h9c.27 0 .52.11.71.29l5 5a1 1 0 01.29.71zM21 14h-4a1 1 0 01-1-1V9H9v12h12v-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold text-gray-700 dark:text-white">ข่าว</h2>
            </div>
            <div class="w-full h-[1px] bg-orange-600 mb-6"></div>

            <!-- News List -->
            <div class="space-y-8">
                @foreach ($latestNews as $news)
                    <div
                        class="flex flex-col md:flex-row items-start gap-4 bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 group">
                        <img src="{{ $news['image_url'] }}" alt="ข่าว"
                            class="w-full md:w-48 h-32 object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="p-3">
                            <p class="text-sm text-gray-500 dark:text-white mb-1">
                                {{ \Carbon\Carbon::parse($news['date'])->format('d M Y') }}
                            </p>
                            <h3
                                class="text-lg font-semibold text-gray-800 dark:text-white group-hover:text-orange-600 transition">
                                {{ $news['title'] }}
                            </h3>
                            <p class="text-gray-600 dark:text-white line-clamp-2">{{ $news['excerpt'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </section>

        {{-- ประชาสัมพันธ์ --}}
        <section id="press_release" class="w-full min-h-screen bg-white dark:bg-gray-900 px-6 py-12 lg:px-16"
            data-aos="fade-up" data-aos-duration="1000">
            <!-- Heading -->
            <div class="flex items-center space-x-4 group cursor-pointer mb-6">
                <div
                    class="w-16 h-16 flex items-center justify-center rounded-full bg-orange-600 border-2 border-orange-600 transition-all duration-300 group-hover:bg-transparent group-hover:border-orange-600">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-8 h-8 text-white group-hover:text-orange-600 transition-colors duration-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 4V2a1 1 0 012 0v2a1 1 0 01-2 0zM2 9h2a1 1 0 100-2H2a1 1 0 000 2zm21 4v9a1 1 0 01-1 1H8a1 1 0 01-1-1V8a1 1 0 011-1h9c.27 0 .52.11.71.29l5 5a1 1 0 01.29.71zM21 14h-4a1 1 0 01-1-1V9H9v12h12v-7z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-white">ประชาสัมพันธ์</h2>
            </div>
            <div class="w-full h-[1px] bg-orange-600 mb-6"></div>

            <!-- Grid Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($pressReleases as $release)
                    <div
                        class="group rounded-lg overflow-hidden shadow-md hover:shadow-xl transition duration-300 bg-white">
                        <div class="relative w-full h-48 overflow-hidden">
                            <img src="{{ $release['image_url'] }}" alt="PR Image"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        </div>
                        <div class="p-4 flex flex-col justify-between h-[200px] dark:bg-gray-800">
                            <h3
                                class="font-semibold text-gray-900 dark:text-white mb-2 group-hover:text-orange-600 transition">
                                {{ $release['title'] }}
                            </h3>
                            <p class="text-sm text-gray-600 line-clamp-3 dark:text-white">{{ $release['excerpt'] }}</p>
                            <div class="flex justify-end mt-2 ">
                                <a href="{{ $release['url'] }}"
                                    class="text-black dark:text-white hover:text-orange-600 transition">

                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <span>อ่านต่อ ></span>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>
@endsection
