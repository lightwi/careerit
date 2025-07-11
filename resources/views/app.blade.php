<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Careerit | @yield('title')</title>
  <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
  <!-- Load Google Fonts (Poppins + Roboto) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <script src="{{ asset('vendor/tailwind/tailwind.min.js') }}"></script>
  @stack('stylelinks')
  @stack('styles')

</head>

<body class="bg-b-main">


  <nav class="bg-white shadow-lg relative z-10">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <!-- Camera Icon -->
      <img src="{{ asset('assets/graphics/Logomark.png') }}" width="40px" height="40px" alt="">
      <!-- Navigation Links and Buttons -->
      <div class="flex items-center gap-6 mt-1">
        <div class="hidden md:flex gap-6 font-roboto items-center">
          <a href="#" class="text-t-second hover:text-c-main text-[16px] font-normal transition">Home</a>

          <!-- Mega Menu Wrapper -->
          <div class="group">
            <a href="#"
              class="text-t-second hover:text-c-main text-[16px] font-normal transition flex items-center gap-1">
              Career
              <i class="fa-solid fa-chevron-down text-xs"></i>
            </a>
            <!-- Mega Menu Panel -->
            <div
              class="absolute left-0 top-[60px] w-full bg-white shadow-lg rounded-xl mt-4 p-6 opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all duration-200">

              <!-- Navbar Mega Menu Content Section -->

              <div class="container mx-auto flex" x-data="{ tab: 'digital' }">
                <!-- Sidebar -->
                <div class="w-64 pr-6 border-r">
                  <ul class="flex flex-col gap-2">
                    <li>
                      <button @click="tab = 'digital'"
                        :class="tab === 'digital' ? 'text-c-main bg-orange-50 font-semibold' : 'text-t-second hover:text-c-main'"
                        class="rounded p-2 block w-full text-left transition">Digital Marketing</button>
                    </li>
                    <li>
                      <button @click="tab = 'it'"
                        :class="tab === 'it' ? 'text-c-main bg-orange-50 font-semibold' : 'text-t-second hover:text-c-main'"
                        class="rounded p-2 block w-full text-left transition">IT</button>
                    </li>
                  </ul>
                </div>
                <!-- Services Grid -->
                <div class="flex-1 pl-6 grid grid-cols-3 gap-6">
                  <!-- Digital Marketing Tab -->
                  <template x-if="tab === 'digital'">
                    <div class="contents">
                      <div>
                        <i class="fa-regular fa-square text-c-main"></i>
                        <span class="block font-semibold mt-2">Digital Marketing</span>
                        <p class="text-xs text-gray-500">Easily assign, monitor, and manage tasks to ensure timely</p>
                      </div>
                      <div>
                        <i class="fa-solid fa-chart-line text-c-main"></i>
                        <span class="block font-semibold mt-2">SEO</span>
                        <p class="text-xs text-gray-500">Easily assign, monitor, and manage tasks to ensure timely</p>
                      </div>
                      <div>
                        <i class="fa-solid fa-g text-c-main"></i>
                        <span class="block font-semibold mt-2">SMM</span>
                        <p class="text-xs text-gray-500">Easily assign, monitor, and manage tasks to ensure timely</p>
                      </div>
                      <div>
                        <i class="fa-solid fa-bullhorn text-c-main"></i>
                        <span class="block font-semibold mt-2">PPC</span>
                        <p class="text-xs text-gray-500">Easily assign, monitor, and manage tasks to ensure timely</p>
                      </div>
                      <div>
                        <i class="fa-solid fa-pen-nib text-c-main"></i>
                        <span class="block font-semibold mt-2">Content Marketing</span>
                        <p class="text-xs text-gray-500">Easily assign, monitor, and manage tasks to ensure timely</p>
                      </div>
                      <div>
                        <i class="fa-solid fa-envelope text-c-main"></i>
                        <span class="block font-semibold mt-2">Email Marketing</span>
                        <p class="text-xs text-gray-500">Easily assign, monitor, and manage tasks to ensure timely</p>
                      </div>
                      <div>
                        <i class="fa-solid fa-video text-c-main"></i>
                        <span class="block font-semibold mt-2">Video Marketing</span>
                        <p class="text-xs text-gray-500">Easily assign, monitor, and manage tasks to ensure timely</p>
                      </div>
                    </div>
                  </template>
                  <!-- IT Tab -->
                  <template x-if="tab === 'it'">
                    <div class="contents">
                      <div>
                        <i class="fa-solid fa-laptop-code text-c-main"></i>
                        <span class="block font-semibold mt-2">Web Development</span>
                        <p class="text-xs text-gray-500">Build and manage websites & applications</p>
                      </div>
                      <div>
                        <i class="fa-solid fa-network-wired text-c-main"></i>
                        <span class="block font-semibold mt-2">Network Security</span>
                        <p class="text-xs text-gray-500">Secure networking & maintenance</p>
                      </div>
                      <!-- Add more IT services as needed -->
                      <div>
                        <i class="fa-solid fa-database text-c-main"></i>
                        <span class="block font-semibold mt-2">Database Management</span>
                        <p class="text-xs text-gray-500">Manage and optimize data</p>
                      </div>
                    </div>
                  </template>
                </div>
              </div>

            </div>
          </div>
          <!-- END Mega Menu Wrapper -->

          <a href="#" class="text-t-second hover:text-c-main text-[16px] font-normal transition">Case Studies</a>
          <a href="#" class="text-t-second hover:text-c-main text-[16px] font-normal transition">News & trend</a>
          <a href="#" class="text-t-second hover:text-c-main text-[16px] font-normal transition">Blog</a>
          <a href="#" class="text-t-second hover:text-c-main text-[16px] font-normal transition">Contact</a>
        </div>
        <!-- Buttons Omitted for Brevity (keep your original) -->
        <div class="flex flex-col sm:flex-row gap-3">
          <!-- Free Roadmap Button -->
          <button
            class="font-roboto bg-c-main hover:bg-[#E1663C] text-white rounded-lg text-sm h-11 px-4 flex items-center justify-center transition-colors">
            Get your free roadmap
          </button>

          <!-- Meet Button -->
          <button
            class="font-roboto bg-black hover:bg-gray-800 text-white rounded-lg text-sm h-11 px-4 flex items-center justify-center gap-2 transition-colors">
            <i class="fa-solid fa-video"></i>
            Meet Roheet Rajput
          </button>
        </div>
      </div>
    </div>
  </nav>

  @yield('content')

  <!-- HERO SECTION -->
  <section
    class="relative bg-gradient-to-b from-[#111111] via-[#0D151A] to-[#1D252E] flex flex-col items-center justify-center py-32 text-center autoflow">
    <h2 class="text-[64px] font-poppins font-medium leading-[106px] tracking-[-0.02em] text-center mb-6 px-4">
      <span class="bg-gradient-to-r from-white to-c-main bg-clip-text text-transparent">
        Build a digital career that fits you.
      </span>
    </h2>
    <p
      class="text-[#b0b0b0] font-roboto text-[24px]/7 font-light tracking-[0.04em] text-center mb-8 px-4 max-w-2xl mx-auto">
      Thousands have already taken the first step.<br>
      You're next. Start your roadmap. Learn with purpose.
    </p>
    <button class="bg-[#FF7F4C] hover:bg-[#FF6732] text-white rounded-[16px] w-[240px] h-[56px] py-[14px] px-[16px] gap-2 font-roboto font-medium text-base leading-[24px] tracking-[0.02em] transition-colors duration-200
    ">
      Get my free roadmap
    </button>
  </section>


  <!-- FOOTER SECTION -->
  <footer class="bg-black pt-16 pb-8 px-6 md:px-24 border-t border-[#232323]">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-5 gap-12 py-8 text-sm">
      <!-- Career Into IT -->
      <div class="col-span-2">
        <h2 class="font-poppins text-t-white font-semibold text-[28.42px] leading-[100%] tracking-[0%] mb-4">
          Career Into IT
        </h2>
        <p class="font-roboto text-t-white font-light text-[18px] leading-[30px] tracking-[0.06em] mb-6">
          Real stories. Real steps. Your path to a digital career starts here — with honest, beginner-friendly guidance.
        </p>
        <div class="flex space-x-4">
          <a href="#" class="text-[#b0b0b0] hover:text-white transition-colors duration-200">
            <i class="fa-brands fa-x-twitter text-t-white bg-c-main w-6 h-6 flex items-center justify-center"></i>
          </a>
          <a href="#" class="text-[#b0b0b0] hover:text-white transition-colors duration-200">
            <i class="fa-brands fa-facebook-f text-t-white bg-blue-600 w-6 h-6 flex items-center justify-center"></i>
          </a>
          <a href="#" class="text-[#b0b0b0] hover:text-white transition-colors duration-200">
            <i class="fa-brands fa-instagram text-t-white bg-red-600 w-6 h-6 flex items-center justify-center"></i>
          </a>
          <a href="#" class="text-[#b0b0b0] hover:text-white transition-colors duration-200">
            <i class="fa-brands fa-linkedin-in text-t-white bg-blue-600 w-6 h-6 flex items-center justify-center"></i>
          </a>
        </div>
      </div>
      <!-- Explore -->
      <div>
        <h3 class="font-poppins font-medium text-xl text-t-white leading-[100%] tracking-[0%] mb-2 relative">Explore
        </h3>
        <div class="py-0.5 mb-6 bg-c-main w-[20%]"></div>
        <ul class="space-y-3">
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Home</a>
          </li>
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Career
              paths</a></li>
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Case
              studies</a></li>
        </ul>
      </div>
      <!-- Connect -->
      <div>
        <h3 class="font-poppins font-medium text-xl text-t-white leading-[100%] tracking-[0%] mb-2">Connect</h3>
        <div class="py-0.5 mb-6 bg-c-main w-[30%]"></div>
        <ul class="space-y-3">
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Contact</a>
          </li>
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Privacy
              Policy</a></li>
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Terms
              of service</a></li>
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Sitemap</a>
          </li>
        </ul>
      </div>
      <!-- Get you free roadmap -->
      <div>
        <h3 class="font-poppins font-medium text-xl text-t-white leading-[100%] tracking-[0%] mb-2">Get you free roadmap
        </h3>
        <div class="py-0.5 mb-6 bg-c-main w-[70%]"></div>
        <ul class="space-y-3 mt-4">
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Blog</a>
          </li>
          <li><a href="#"
              class="text-t-white text-[18px] font-roboto font-normal hover:text-c-main pb-1 hover:border-b-2 hover:border-c-main">Meet
              Rohit Rajput</a></li>
        </ul>
      </div>
    </div>
    <!-- Footer Bottom -->
    <div
      class="border-t border-[#232323] mt-12 pt-8 flex flex-col md:flex-row items-center justify-between text-xs text-[#b0b0b0]">
      <span class="font-roboto font-light text-[14px] leading-[100%] tracking-[0.05em] mb-4 md:mb-0">
        © Career Into IT. All Rights Reserved.
      </span>
      <div class="flex justify-end items-center gap-4">
        <p class="font-roboto text-lg font-normal">Back to top</p>
        <div class="group">
          <a href="#"
            class="p-2 border-2 border-c-main rounded-lg transition-colors duration-200 group-hover:bg-c-main group-hover:text-white">
            <i class="fa-solid fa-arrow-up text-c-main group-hover:text-t-white"></i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- scripts -->
  <script src="{{ asset('vendor/bootstrap/alpine.min.js') }}"></script>

  <script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          sans: ['Poppins', 'sans-serif'], // Default font (font-sans)
          poppins: ['Poppins', 'sans-serif'], // font-poppins
          roboto: ['Roboto', 'sans-serif'], // font-roboto
        },
        colors: {
          'b-main': '#FAFAFA',
          'c-main': '#F76E40',
          't-first': '#00031F',
          't-second': '#33354C',
          't-white': '#ffffff',
        },
      },
    },
  }
  </script>

  <script src="{{ asset('vendor/main.js') }}"></script>

  @stack('scrlink')
  @stack('scripts')
</body>

</html>

@yield('models')