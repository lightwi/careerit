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



<!-- q&a section -->
@include('includes.fastbox')


<!-- q&a section -->
@include('includes.qa')

<!-- timeline section -->
@include('includes.timeline')

@endsection