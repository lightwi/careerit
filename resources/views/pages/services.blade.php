@extends('app')

@section('title')
Services
@endsection


@push('styles')

<style>
.autoflow {
  animation: text-appear both;
  animation-timeline: view();
  animation-range: entry 10% cover 100vh;
}

@keyframes text-appear {
  from {
    opacity: 0;
    transform: translateY(100px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>

@endpush


@section('content')

<section class="container mx-auto py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24">

  <div class="flex flex-col gap-4 sm:gap-6 lg:flex-row lg:justify-between lg:items-center lg:gap-12">
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[48px] tracking-[-0.02em] lg:w-[40%]">
      How to Choose Your Career <br class="hidden xs:block" />
      Path: You're Not Alone
    </h2>
    <p class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-second max-w-prose lg:w-[40%]">
      Choosing a career can feel like standing at a crossroads with no signs.
    </p>
  </div>


  <p
    class="font-poppins font-light text-[22px] leading-none tracking-[0.02em] mt-6 sm:mt-8 md:mt-10 lg:mt-12 xl:mt-16 2xl:mt-20 mb-8 pb-[10px] border-b border-gray-400">
    <span class="bg-gradient-to-r from-black to-c-main bg-clip-text text-transparent">
      When I was trying to change careers
    </span>
  </p>


  <div class="w-[90%] mx-auto">
    <div class="grid grid-cols-3 gap-4">

      <div class="mt-8">
        <p class="font-roboto text-c-main font-medium text-[18px] leading-none tracking-[0.02em] mb-8">
          I kept asking myself
        </p>

        <div class="flex justify-start items-center gap-4">
          <div class="p-1 bg-c-main rounded-full">
          </div>
          <p class="font-roboto text-t-first font-light text-[16px] leading-none tracking-[0.02em]">
            What if I choose the wrong path?
          </p>
        </div>

        <div class="w-[2px] h-[28px] my-2 ml-[3px] bg-c-main"></div>

        <div class="flex justify-start items-center gap-4">
          <div class="p-1 bg-c-main rounded-full">
          </div>
          <p class="font-roboto text-t-first font-light text-[16px] leading-none tracking-[0.02em]">
            What if I’m not good enough?
          </p>
        </div>

        <div class="w-[2px] h-[28px] my-2 ml-[3px] bg-c-main"></div>

        <div class="flex justify-start items-center gap-4">
          <div class="p-1 bg-c-main rounded-full">
          </div>
          <p class="font-roboto text-t-first font-light text-[16px] leading-none tracking-[0.02em]">
            What if it’s too late for me?
          </p>
        </div>

      </div>

      <div class="relative">

        <div class="w-[1px] ml-28 h-[250px] bg-gradient-to-t from-c-main from-50% to-gray-600 to-50% rotate-[16deg]">
        </div>

        <p class="absolute top-4 left-12 font-poppins text-lg font-light">Myself</p>

        <div class="absolute top-20 left-20 left-0 w-[75px] h-[75px] rounded-full bg-white shadow-md">
          <p class="font-normal text-[32px] text-c-main text-center mt-[19px]">VS</p>
        </div>

        <p class="absolute bottom-4 left-28 font-poppins text-lg font-light">Someone</p>

      </div>

      <div class="mt-8">
        <p class="font-roboto text-c-main font-medium text-[18px] leading-none tracking-[0.02em] mb-8">
           what I wish someone told me
        </p>

        <div class="flex justify-start items-center gap-4">
          <div class="p-1 bg-c-main rounded-full">
          </div>
          <p class="font-roboto text-t-first font-light text-[16px] leading-none tracking-[0.02em]">
            It’s okay to not know right away.
          </p>
        </div>

        <div class="w-[2px] h-[28px] my-2 ml-[3px] bg-c-main"></div>

        <div class="flex justify-start items-center gap-4">
          <div class="p-1 bg-c-main rounded-full">
          </div>
          <p class="font-roboto text-t-first font-light text-[16px] leading-none tracking-[0.02em]">
            You can start small and build.
          </p>
        </div>

        <div class="w-[2px] h-[28px] my-2 ml-[3px] bg-c-main"></div>

        <div class="flex justify-start items-center gap-4">
          <div class="p-1 bg-c-main rounded-full">
          </div>
          <p class="font-roboto text-t-first font-light text-[16px] leading-none tracking-[0.02em]">
            Every step forward gives you clarity.
          </p>
        </div>

      </div>

    </div>
  </div>

</section>


<section class="bg-c-main autoflow">
  <div class="container mx-auto py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24">
    <div class="flex flex-col lg:w-[70%] items-center text-center gap-4 sm:gap-6 max-w-4xl mx-auto px-4 relative">
      <!-- Title -->
      <h2 class="font-poppins font-bold text-[48px] leading-[64px] tracking-[-0.02em] text-white text-center">
        <span>Not Sure Where to Start?</span> <br>
        <span class="text-black">Take The Free 2-Minute Career Quiz </span>
      </h2>

      <!-- Description -->
      <p
        class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] w-[70%] mx-auto text-white text-center max-w-prose">
        Learn Exactly what skills to build Understand job roles and industry demand Start with Zero experience
      </p>

      <!-- CTA Button -->
      <button
        class="bg-black hover:bg-gray-900 text-white rounded-[16px] px-4 py-[14px] mt-4 w-[240px] h-[56px] font-medium transition-colors duration-300">
        Get Roadmap
      </button>

      <img src="{{ asset('assets/graphics/arrow.png') }}" class="absolute -bottom-[90px] right-[20px]" alt="" srcset="">

    </div>
  </div>
</section>



<section class="container mx-auto py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24 autoflow">

  <div class="flex flex-col gap-4 sm:gap-6 lg:flex-row lg:justify-between lg:items-center lg:gap-12">
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[48px] tracking-[-0.02em] lg:w-[40%]">
      Explore the Career Paths <br class="hidden xs:block" />
      That Can Change Your Life
    </h2>
    <p class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-second max-w-prose lg:w-[40%]">
      Choosing a career can feel like standing at a crossroads with no signs.
    </p>
  </div>

  <div
    class="mt-6 sm:mt-8 md:mt-10 lg:mt-12 xl:mt-16 2xl:mt-20 mb-8 pb-[10px] border-b border-gray-400 flex justify-between items-center">

    <p class="font-poppins font-regular text-[20px] leading-none tracking-[0.02em]">
      Digital Marketing
    </p>

    <a href="" class="font-roboto font-medium text-lg text-c-main">View All <i class="fa-solid fa-arrow-right"></i></a>

  </div>


  <div class="grid grid-cols-3 gap-4">

    <div class="border border-gray-300 rounded-lg hover:shadow-lg hover:shadow-c-main/40 hover:bg-white p-8">
      <p class="font-roboto font-medium text-sm text-c-main">Digital Marketing</p>

      <h4 class="font-poppins font-semibold text-2xl my-4">The creative Communicator's Path</h4>

      <p class="font-roboto text-[15px] mb-4 font-light">
        Do you enjoy social media, storytelling, and seeing businesses grow? When I switched careers, this is where I
        started—no coding, no degree, just curiosity. <br><br>
        In Digital Marketing, you can build skills quickly and start freelance work or entry-level jobs within months.
      </p>


      <div x-data="{ openAccordion: 1 }" class="text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 font-light">
        <!-- Accordion Item 1 (will be open by default) -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 1 ? openAccordion = null : openAccordion = 1"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 1}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              You'll Learn
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 1}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 1" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 2 ? openAccordion = null : openAccordion = 2"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 2}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              Great for
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 2}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 2" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>
      </div>

      <a href="#"
        class="block px-4 py-3.5 w-full rounded-2xl bg-black hover:bg-gray-900 text-white text-center mt-4 font-roboto font-normal text-lg">
        <i class="fa-solid fa-download mr-2"></i> Free Download
      </a>

    </div>

    <div class="border border-gray-300 rounded-lg hover:shadow-lg hover:shadow-c-main/40 hover:bg-white p-8">
      <p class="font-roboto font-medium text-sm text-c-main">Digital Marketing</p>

      <h4 class="font-poppins font-semibold text-2xl my-4">The creative Communicator's Path</h4>

      <p class="font-roboto text-[15px] mb-4 font-light">
        Do you enjoy social media, storytelling, and seeing businesses grow? When I switched careers, this is where I
        started—no coding, no degree, just curiosity. <br><br>
        In Digital Marketing, you can build skills quickly and start freelance work or entry-level jobs within months.
      </p>


      <div x-data="{ openAccordion: 1 }" class="text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 font-light">
        <!-- Accordion Item 1 (will be open by default) -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 1 ? openAccordion = null : openAccordion = 1"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 1}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              You'll Learn
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 1}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 1" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 2 ? openAccordion = null : openAccordion = 2"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 2}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              Great for
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 2}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 2" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>
      </div>

      <a href="#"
        class="block px-4 py-3.5 w-full rounded-2xl bg-black hover:bg-gray-900 text-white text-center mt-4 font-roboto font-normal text-lg">
        <i class="fa-solid fa-download mr-2"></i> Free Download
      </a>

    </div>

    <div class="border border-gray-300 rounded-lg hover:shadow-lg hover:shadow-c-main/40 hover:bg-white p-8">
      <p class="font-roboto font-medium text-sm text-c-main">Digital Marketing</p>

      <h4 class="font-poppins font-semibold text-2xl my-4">The creative Communicator's Path</h4>

      <p class="font-roboto text-[15px] mb-4 font-light">
        Do you enjoy social media, storytelling, and seeing businesses grow? When I switched careers, this is where I
        started—no coding, no degree, just curiosity. <br><br>
        In Digital Marketing, you can build skills quickly and start freelance work or entry-level jobs within months.
      </p>


      <div x-data="{ openAccordion: 1 }" class="text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 font-light">
        <!-- Accordion Item 1 (will be open by default) -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 1 ? openAccordion = null : openAccordion = 1"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 1}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              You'll Learn
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 1}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 1" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 2 ? openAccordion = null : openAccordion = 2"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 2}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              Great for
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 2}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 2" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>
      </div>

      <a href="#"
        class="block px-4 py-3.5 w-full rounded-2xl bg-black hover:bg-gray-900 text-white text-center mt-4 font-roboto font-normal text-lg">
        <i class="fa-solid fa-download mr-2"></i> Free Download
      </a>

    </div>

  </div>



  <div
    class="mt-6 sm:mt-8 md:mt-10 lg:mt-12 xl:mt-16 2xl:mt-20 mb-8 pb-[10px] border-b border-gray-400 flex justify-between items-center">

    <p class="font-poppins font-regular text-[20px] leading-none tracking-[0.02em]">
      It (Information Technology)
    </p>

    <a href="" class="font-roboto font-medium text-lg text-c-main">View All <i class="fa-solid fa-arrow-right"></i></a>

  </div>


  <div class="grid grid-cols-3 gap-4">

    <div class="border border-gray-300 rounded-lg hover:shadow-lg hover:shadow-c-main/40 hover:bg-white p-8">
      <p class="font-roboto font-medium text-sm text-c-main">Digital Marketing</p>

      <h4 class="font-poppins font-semibold text-2xl my-4">The creative Communicator's Path</h4>

      <p class="font-roboto text-[15px] mb-4 font-light">
        Do you enjoy social media, storytelling, and seeing businesses grow? When I switched careers, this is where I
        started—no coding, no degree, just curiosity. <br><br>
        In Digital Marketing, you can build skills quickly and start freelance work or entry-level jobs within months.
      </p>


      <div x-data="{ openAccordion: 1 }" class="text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 font-light">
        <!-- Accordion Item 1 (will be open by default) -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 1 ? openAccordion = null : openAccordion = 1"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 1}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              You'll Learn
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 1}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 1" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 2 ? openAccordion = null : openAccordion = 2"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 2}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              Great for
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 2}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 2" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>
      </div>

      <a href="#"
        class="block px-4 py-3.5 w-full rounded-2xl bg-black hover:bg-gray-900 text-white text-center mt-4 font-roboto font-normal text-lg">
        <i class="fa-solid fa-download mr-2"></i> Free Download
      </a>

    </div>

    <div class="border border-gray-300 rounded-lg hover:shadow-lg hover:shadow-c-main/40 hover:bg-white p-8">
      <p class="font-roboto font-medium text-sm text-c-main">Digital Marketing</p>

      <h4 class="font-poppins font-semibold text-2xl my-4">The creative Communicator's Path</h4>

      <p class="font-roboto text-[15px] mb-4 font-light">
        Do you enjoy social media, storytelling, and seeing businesses grow? When I switched careers, this is where I
        started—no coding, no degree, just curiosity. <br><br>
        In Digital Marketing, you can build skills quickly and start freelance work or entry-level jobs within months.
      </p>


      <div x-data="{ openAccordion: 1 }" class="text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 font-light">
        <!-- Accordion Item 1 (will be open by default) -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 1 ? openAccordion = null : openAccordion = 1"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 1}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              You'll Learn
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 1}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 1" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 2 ? openAccordion = null : openAccordion = 2"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 2}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              Great for
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 2}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 2" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>
      </div>

      <a href="#"
        class="block px-4 py-3.5 w-full rounded-2xl bg-black hover:bg-gray-900 text-white text-center mt-4 font-roboto font-normal text-lg">
        <i class="fa-solid fa-download mr-2"></i> Free Download
      </a>

    </div>

    <div class="border border-gray-300 rounded-lg hover:shadow-lg hover:shadow-c-main/40 hover:bg-white p-8">
      <p class="font-roboto font-medium text-sm text-c-main">Digital Marketing</p>

      <h4 class="font-poppins font-semibold text-2xl my-4">The creative Communicator's Path</h4>

      <p class="font-roboto text-[15px] mb-4 font-light">
        Do you enjoy social media, storytelling, and seeing businesses grow? When I switched careers, this is where I
        started—no coding, no degree, just curiosity. <br><br>
        In Digital Marketing, you can build skills quickly and start freelance work or entry-level jobs within months.
      </p>


      <div x-data="{ openAccordion: 1 }" class="text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 font-light">
        <!-- Accordion Item 1 (will be open by default) -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 1 ? openAccordion = null : openAccordion = 1"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 1}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              You'll Learn
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 1}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 1" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>

        <!-- Accordion Item 2 -->
        <div class="overflow-hidden transition-all duration-300 mb-1 rounded-lg">
          <button @click="openAccordion === 2 ? openAccordion = null : openAccordion = 2"
            class="flex justify-between items-center w-full p-5 cursor-pointer bg-gray-50 hover:bg-white transition-all duration-200"
            :class="{'bg-white text-c-main': openAccordion === 2}">
            <h2 class="font-roboto font-medium text-[16px] text-left leading-[28px] tracking-[0]">
              Great for
            </h2>
            <svg class="w-6 h-6 text-gray-600 transition-all duration-300"
              :class="{'transform rotate-180 text-c-main': openAccordion === 2}" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div x-show="openAccordion === 2" x-collapse class="overflow-hidden transition-all duration-300 bg-white">
            <div class="p-5 pt-0 text-gray-600">
              <p class="font-roboto font-medium text-[14px] leading-[26px] tracking-[0.02em]">
                Troubleshooting, basic networking, system support
              </p>
            </div>
          </div>
        </div>
      </div>

      <a href="#"
        class="block px-4 py-3.5 w-full rounded-2xl bg-black hover:bg-gray-900 text-white text-center mt-4 font-roboto font-normal text-lg">
        <i class="fa-solid fa-download mr-2"></i> Free Download
      </a>

    </div>

  </div>

</section>




<section class="bg-white">

  <!-- Wrapper -->
  <div class="container mx-auto py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24 autoflow">
    <div class="bg-white w-full rounded-md flex gap-12">
      <!-- LEFT SIDE: Text and List -->
      <div class="flex-1 mt-6">
        <h1 class="font-poppins text-[38px] font-medium text-t-first mb-3">
          The Job Market is Looking for <br /> People Like You
        </h1>
        <p class="font-roboto font-normal text-xl text-t-second mb-3">
          The demand for digital and IT careers is growing—fast
        </p>
        <hr class="mb-4 border-gray-200" />
        <!-- Checklist -->
        <ul class="space-y-2 mb-4">
          <li class="flex justify-start items-center gap-2">
            <span class="text-c-main mt-1 mr-2"><i class="fa-solid fa-check"></i></span>
            <span class="font-roboto font-light text-base tracking-[4%] leading-[100%] text-t-first">
              Digital Marketing roles are growing 21% per year
            </span>
          </li>
          <li class="flex justify-start items-center gap-2">
            <span class="text-c-main mt-1 mr-2"><i class="fa-solid fa-check"></i></span>
            <span class="font-roboto font-light text-base tracking-[4%] leading-[100%] text-t-first">
              Cloud Computing jobs are booming globally
            </span>
          </li>
          <li class="flex justify-start items-center gap-2">
            <span class="text-c-main mt-1 mr-2"><i class="fa-solid fa-check"></i></span>
            <span class="font-roboto font-light text-base tracking-[4%] leading-[100%] text-t-first">
              Cybersecurity demand has doubled since 2023
            </span>
          </li>
        </ul>
        <p class="text-c-main font-poppins font-normal text-lg mb-4">
          You don't need a degree. You don't need experience.<br />
          You just need to start.
        </p>
        <!-- Subscribe Button -->
        <a href="#"
          class="block mb-3 px-4 w-[220px] py-3.5 rounded-2xl bg-black hover:bg-gray-900 text-white text-center mt-4 font-roboto font-regular text-lg">
          Subscribe
        </a>
        <p class="font-roboto font-light text-sm text-t-second mt-2">
          For Free Weekly Career Tips, Beginner Courses & Job Updates
        </p>
      </div>
      <!-- RIGHT SIDE: Image Collage -->
      <div class="flex-1 flex flex-col justify-center items-center">
        <!-- Top row: Tall images -->
        <div class="flex gap-4 mb-4">
          <img
            src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=facearea&w=300&h=400&q=80"
            alt="Demo" class="w-40 h-40 mt-20 object-cover rounded" />
          <img
            src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=facearea&w=300&h=400&q=80"
            alt="Demo" class="w-40 h-60 object-cover rounded" />
        </div>
        <!-- Bottom row: Three smaller images -->
        <div class="flex gap-4">
          <img
            src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=facearea&w=180&h=120&q=80"
            alt="Demo" class="w-48 h-32 object-cover rounded" />
          <img
            src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=facearea&w=180&h=120&q=80"
            alt="Demo" class="w-40 h-60 object-cover rounded" />
          <img
            src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=facearea&w=180&h=120&q=80"
            alt="Demo" class="w-48 h-32 object-cover rounded" />
        </div>
      </div>
    </div>
  </div>

</section>




<section class="bg-black py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24 autoflow">

  <div class="container w-full mx-auto">
    <!-- Header row -->
    <div class="flex items-center justify-between mb-8">
      <h2 class="font-poppins text-white font-semibold text-[38px]">Your next step starts</h2>
      <button
        class="border border-c-main rounded-md w-[220px] px-4 py-2 text-c-main text-base font-medium font-roboto flex justify-center items-center gap-2 hover:bg-c-main hover:text-white group transition">
        Select All
        <svg class="w-3 h-3 ml-1 text-c-main group-hover:text-white" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path d="M19 9l-7 7-7-7" />
        </svg>
      </button>
    </div>
    <!-- List of Cards -->
    <div class="space-y-4">
      <!-- Card 1 -->
      <div
        class="bg-black border border-gray-800 rounded-md px-8 py-6 flex items-center justify-between hover:bg-[#0C111D] hover:border-t-main transition">
        <div>
          <div class="text-sm text-c-main font-roboto font-medium tracking-wide mb-1">Digital Marketing</div>
          <div class="text-white text-xl font-poppins font-regular">Start Learning Digital Marketing</div>
        </div>
        <a href="#"
          class="flex justify-center items-center gap-2 bg-c-main w-[177px] rounded-2xl px-4 py-3.5 hover:bg-[#E1663C] font-roboto font-regular text-base transition">
          <i class="fa-solid fa-download mr-2"></i> <span>Free Download</span>
        </a>
      </div>
      <!-- Card 2 -->
      <div
        class="bg-black border border-gray-800 rounded-md px-8 py-6 flex items-center justify-between hover:bg-[#0C111D] hover:border-t-main transition">
        <div>
          <div class="text-sm text-c-main font-roboto font-medium tracking-wide mb-1">IT</div>
          <div class="text-white text-xl font-poppins font-regular">Find IT Support Entry Programs</div>
        </div>
        <a href="#"
          class="flex justify-center items-center gap-2 bg-c-main w-[177px] rounded-2xl px-4 py-3.5 hover:bg-[#E1663C] font-roboto font-regular text-base transition">
          <i class="fa-solid fa-download mr-2"></i> <span>Free Download</span>
        </a>
      </div>
      <!-- Card 3 -->
      <div
        class="bg-black border border-gray-800 rounded-md px-8 py-6 flex items-center justify-between hover:bg-[#0C111D] hover:border-t-main transition">
        <div>
          <div class="text-sm text-c-main font-roboto font-medium tracking-wide mb-1">Digital Marketing</div>
          <div class="text-white text-xl font-poppins font-regular">Explore SEO Careers</div>
        </div>
        <a href="#"
          class="flex justify-center items-center gap-2 bg-c-main w-[177px] rounded-2xl px-4 py-3.5 hover:bg-[#E1663C] font-roboto font-regular text-base transition">
          <i class="fa-solid fa-download mr-2"></i> <span>Free Download</span>
        </a>
      </div>
      <!-- Card 4 (active) -->
      <div
        class="bg-black border border-gray-800 rounded-md px-8 py-6 flex items-center justify-between hover:bg-[#0C111D] hover:border-t-main transition">
        <div>
          <div class="text-sm text-c-main font-roboto font-medium tracking-wide mb-1">IT</div>
          <div class="text-white text-xl font-poppins font-regular">Discover Cloud Training</div>
        </div>
        <a href="#"
          class="flex justify-center items-center gap-2 bg-c-main w-[177px] rounded-2xl px-4 py-3.5 hover:bg-[#E1663C] font-roboto font-regular text-base transition">
          <i class="fa-solid fa-download mr-2"></i> <span>Free Download</span>
        </a>
      </div>
      <!-- Card 5 -->
      <div
        class="bg-black border border-gray-800 rounded-md px-8 py-6 flex items-center justify-between hover:bg-[#0C111D] hover:border-t-main transition">
        <div>
          <div class="text-sm text-c-main font-roboto font-medium tracking-wide mb-1">IT</div>
          <div class="text-white text-xl font-poppins font-regular">Step into Cybersecurity</div>
        </div>
        <a href="#"
          class="flex justify-center items-center gap-2 bg-c-main w-[177px] rounded-2xl px-4 py-3.5 hover:bg-[#E1663C] font-roboto font-regular text-base transition">
          <i class="fa-solid fa-download mr-2"></i> <span>Free Download</span>
        </a>
      </div>
    </div>

    <!-- Pagination Controls -->
    <div class="flex items-center justify-center gap-6 mt-10">
      <button class="bg-white text-black rounded-full w-8 h-8 flex items-center justify-center mr-2">
        <svg class="w-4 h-4" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24">
          <path d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <span class="text-xs text-gray-300">Page 1 of 10</span>
      <button class="bg-white text-black rounded-full w-8 h-8 flex items-center justify-center ml-2">
        <svg class="w-4 h-4" stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24">
          <path d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>

</section>

<!-- q&a section -->
@include('includes.qa')

<!-- timeline section -->
@include('includes.timeline')

@endsection