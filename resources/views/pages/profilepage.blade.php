@extends('app')

@section('title')
Meet Rohit
@endsection

@section('content')

<section class="container mx-auto md:px-0">
  <div class="flex flex-col lg:flex-row w-full py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">
    <!-- Text Column -->
    <div class="w-full lg:w-1/2 p-4 sm:p-6 md:p-8 lg:p-0 flex flex-col justify-center mr-4">
      <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit mb-4">Your SEO
        Partner That Delivers</span>
      <h1 class="font-poppins font-medium text-4xl text-center leading-[50px] my-[14px] tracking-[-1.5%] md:text-[60px] md:text-left md:leading-[64px] md:tracking-[-0.015em] mb-3 sm:mb-4">
        SEO That's Real, <br>
        Results That Last
      </h1>
      <p class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] tracking-[2%] text-center md:text-left mb-6 sm:mb-8 text-t-second">
        Trusted by real businesses. Driven by results. <br> Built on care.
      </p>
      <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4">
        <button class="font-roboto bg-black text-base hover:bg-gray-900 text-white rounded-[16px] w-full md:w-[318px] h-[56px] px-[16px] py-[14px] flex items-center justify-center gap-2">
          Book Free SEO Strategy Call <i class="fa-solid fa-calendar-days"></i>
        </button>
        <button class="font-roboto bg-c-main text-base hover:bg-[#E1663C] text-white rounded-[16px] w-full md:w-[210px] h-[56px] px-[16px] py-[14px] gap-2 flex items-center justify-center">
          See More Work <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>
      <p class="font-roboto font-light text-t-second text-[14px] text-center md:text-left leading-[100%] tracking-[0.06em] mt-4 sm:mt-8 mb-3 sm:mb-4">
        Rated <span class="font-bold">4.9</span> stars from 100+ reviews 🎉
      </p>
      <!-- Avatar and Rating Section -->
      <div class="mx-auto md:mx-0 flex items-center gap-3 sm:gap-4">

        <!-- Rating -->
        <div class="flex items-center">
          <div class="flex">
            <!-- Full stars -->
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
              </path>
            </svg>
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
              </path>
            </svg>
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
              </path>
            </svg>
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
              </path>
            </svg>
            <!-- Half star -->
            <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
              </path>
            </svg>
          </div>
        </div>
      </div>
    </div>

    <!-- Image Column -->
    <div class="w-full lg:w-1/2 px-2 md:px-0 mt-6 sm:mt-8 lg:mt-0">
      <img src="{{ asset('assets/graphics/hero.png') }}" alt="Description" class="w-full h-auto object-cover" style="min-height: 250px" loading="lazy" />

    </div>
  </div>
</section>



<section class="md:px-0 bg-white">
  <div class="container mx-auto py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">

    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Why work with me</span>

    <div class="grid grid-cols-2 gap-4">
      <div>
        <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[120%] tracking-[-0.04em] mt-4 mb-12">
          Not Just SEO Services. <br> A Trusted Partnership
        </h2>

      </div>

      <div>
        <div class="flex items-center gap-3 my-6">

          <span class="w-3 h-3 rounded-full bg-c-main"></span>
          <span class="font-roboto font-medium text-[18px] leading-none tracking-normal">
            You’re not just looking for more traffic — you want real growth.
          </span>

        </div>

        <div class="flex items-center gap-3">

          <span class="w-3 h-3 rounded-full bg-c-main"></span>
          <span class="font-roboto font-medium text-[18px] leading-none tracking-normal">
            You want calls, conversions, leads — not vanity metrics.
          </span>

        </div>
      </div>
    </div>

    <p class="font-roboto font-light text-[20px] leading-[34px] tracking-[0.04em] text-[#33354C]">
      I’m Rohit Rajput, the strategist behind CareerIntoIT. I help businesses like yours rank higher, show up better, and win trust through tailored SEO campaigns that are honest, effective, and built to last.
    </p>

    <div x-data="{ active: 1 }" class="grid grid-cols-2 gap-8 mt-6">
      <!-- LEFT SIDE: Buttons -->
      <div>
        <h4 class="font-roboto text-c-main font-light text-[24px] leading-[30px] tracking-[0.04em]">
          I bring strategy, clarity, and results.
        </h4>

        <div class="mt-6 space-y-6">
          <!-- Button 1 -->
          <button type="button" @click="active = 1" :class="active === 1 
          ? 'bg-c-main text-white' 
          : 'bg-[#F2F4F7] text-black'" class="w-[80%] px-6 py-4 rounded-full flex items-center gap-6 text-left transition">
            <div class="w-[66px] h-[66px] rounded-full shadow-xl bg-white flex items-center justify-center">
              <i class="fas fa-arrow-trend-up text-[32px]" :class="active === 1 ? 'text-c-main' : 'text-gray-500'"></i>
            </div>
            <span class="font-roboto font-medium text-[24px] leading-none tracking-normal">
              Services Provider
            </span>
          </button>

          <!-- Button 2 -->
          <button type="button" @click="active = 2" :class="active === 2 
          ? 'bg-c-main text-white' 
          : 'bg-[#F2F4F7] text-black'" class="w-[80%] px-6 py-4 rounded-full flex items-center gap-6 text-left transition">
            <div class="w-[66px] h-[66px] rounded-full shadow-xl bg-white flex items-center justify-center">
              <i class="fas fa-chart-line text-[32px]" :class="active === 2 ? 'text-c-main' : 'text-gray-500'"></i>
            </div>
            <span class="font-roboto font-medium text-[24px] leading-none tracking-normal">
              Digital Marketing
            </span>
          </button>

          <!-- Button 3 -->
          <button type="button" @click="active = 3" :class="active === 3 
          ? 'bg-c-main text-white' 
          : 'bg-[#F2F4F7] text-black'" class="w-[80%] px-6 py-4 rounded-full flex items-center gap-6 text-left transition">
            <div class="w-[66px] h-[66px] rounded-full shadow-xl bg-white flex items-center justify-center">
              <i class="fas fa-bullhorn text-[32px]" :class="active === 3 ? 'text-c-main' : 'text-gray-500'"></i>
            </div>
            <span class="font-roboto font-medium text-[24px] leading-none tracking-normal">
              SEO Campaigns
            </span>
          </button>
        </div>
      </div>

      <!-- RIGHT SIDE: Images -->
      <div class="flex justify-center items-center">
        <template x-if="active === 1">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLNi2rVEgv0z3CRJ0Gb-hd6X5WefBtlSSWZg&s" class="rounded-xl shadow-lg w-[500px] h-[350px]" alt="Services Image">
        </template>
        <template x-if="active === 2">
          <img src="https://www.atlanticcouncil.org/wp-content/uploads/2025/03/2024-01-08T000000Z_1522653967_MT1NURPHO000GOY6RP_RTRMADP_3_DEFENSE-DEMOCRACY-DEMONSTRATION-500x350.jpg" class="rounded-xl shadow-lg w-[500px] h-[350px]" alt="Marketing Image">
        </template>
        <template x-if="active === 3">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-k87LIXpxt0lRrphKnCv4EL11d8XYqf0OLQ&s" class="rounded-xl shadow-lg w-[500px] h-[350px]" alt="SEO Image">
        </template>
      </div>
    </div>


  </div>
</section>



<section class="container mx-auto md:px-0">
  <div class="py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">

    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">What I Actually
      Do</span>
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
      SEO That Connects Strategy, Search & Sales
    </h2>

    <div class="grid grid-cols-3 gap-6 mb-4">

      <div class="rounded-lg shadow-md px-8 py-12 bg-white">
        <div class="w-12 h-12 rounded-full bg-c-main flex justify-center items-center">
          <i class="fa-solid fa-arrow-trend-up text-white fa-lg"></i>
        </div>
        <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-12">
          On-Page-SEO
        </h5>
        <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
          Optimised titles, structure, and content.
        </p>
      </div>

      <div class="rounded-lg shadow-md px-8 py-12 bg-white">
        <div class="w-12 h-12 rounded-full bg-c-main flex justify-center items-center">
          <i class="fa-solid fa-arrow-trend-up text-white fa-lg"></i>
        </div>
        <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-12">
          SEO Content
        </h5>
        <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
          Built for users, loved by Google
        </p>
      </div>

      <div class="rounded-lg shadow-md px-8 py-12 bg-white">
        <div class="w-12 h-12 rounded-full bg-c-main flex justify-center items-center">
          <i class="fa-solid fa-arrow-trend-up text-white fa-lg"></i>
        </div>
        <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-12">
          BackLink Building
        </h5>
        <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
          Ethical links from trusted sources
        </p>
      </div>

      <div class="rounded-lg shadow-md px-8 py-12 bg-white">
        <div class="w-12 h-12 rounded-full bg-c-main flex justify-center items-center">
          <i class="fa-solid fa-arrow-trend-up text-white fa-lg"></i>
        </div>
        <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-12">
          Meta Ads & Google Ads
        </h5>
        <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
          Conversion-focused paid traffic
        </p>
      </div>

      <div class="rounded-lg shadow-md px-8 py-12 bg-white">
        <div class="w-12 h-12 rounded-full bg-c-main flex justify-center items-center">
          <i class="fa-solid fa-arrow-trend-up text-white fa-lg"></i>
        </div>
        <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-12">
          Competior Gap Analyst
        </h5>
        <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
          Discover where thry're winning
        </p>
      </div>

      <div class="rounded-lg shadow-md px-8 py-12 bg-white">
        <div class="w-12 h-12 rounded-full bg-c-main flex justify-center items-center">
          <i class="fa-solid fa-arrow-trend-up text-white fa-lg"></i>
        </div>
        <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-12">
          Technical SEO
        </h5>
        <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
          Fixes that improve crawlability & Performance
        </p>
      </div>

    </div>

  </div>
</section>


<section class="relative bg-c-main">

  <img class="absolute left-0" src="{{ asset('assets/graphics/halfcircle.png') }}" width="150px" height="185px" alt="" srcset="">
  <img class="absolute bottom-0" src="{{ asset('assets/graphics/ecliples.png') }}" alt="" width="475px" height="275px" srcset="">

  <!-- Flex container -->
  <div class="flex flex-col md:flex-row w-full">
    <!-- Left side - Text content (50%) -->
    <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
      <div class="ml-20">
        <p class="font-roboto font-normal text-[16px] leading-[100%] tracking-[0.08em] text-t-main">
          How I work
        </p>
        <h2 class="font-poppins font-medium text-[36px] leading-[100%] tracking-[-0.04em] text-white mt-4">
          Simple. Ethical. Data-Driven.
        </h2>
      </div>
    </div>

    <!-- Right side - Image (50%) -->
    <div class="w-full md:w-1/2 bg-gray-200 flex items-center justify-center">
      <!-- Demo image placeholder - replace with your actual image -->
      <img src="{{ asset('assets/working.jpg') }}" class="w-full h-full object-cover" width="700" height="400" loading="lazy">
    </div>
  </div>

</section>


<section class="mx-auto md:px-0">
  <div class="py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24 relative">

    <div class="flex justify-center items-center gap-28 mt-10">

      <div class="text-center">
        <div class="w-[86px] h-[86px] rounded-full shadow-xl bg-[#FEF1EC] flex justify-center items-center mx-auto">
          <i class="fas fa-arrow-trend-up" style="font-size: 38px;"></i>
        </div>
        <h5 class="font-poppins font-medium text-[18px] tracking-[-0.02em] leading-[100%] text-center text-[#00031F] mt-12">
          Discovery Call
        </h5>
        <p class="font-roboto font-light text-[16px] tracking-[0.04em] leading-[25px] text-center text-[#33354C] mt-2">
          We explore your goals, <br> budget, and audience
        </p>
      </div>

      <div class="text-center">
        <div class="w-[86px] h-[86px] rounded-full shadow-xl bg-[#FEF1EC] flex justify-center items-center mx-auto">
          <i class="fas fa-arrow-trend-up" style="font-size: 38px;"></i>
        </div>
        <h5 class="font-poppins font-medium text-[18px] tracking-[-0.02em] leading-[100%] text-center text-[#00031F] mt-12">
          Audit & Strategy
        </h5>
        <p class="font-roboto font-light text-[16px] tracking-[0.04em] leading-[25px] text-center text-[#33354C] mt-2">
          A clear roadmap, no jargon, <br> no fluff
        </p>
      </div>

      <div class="text-center">
        <div class="w-[86px] h-[86px] rounded-full shadow-xl bg-[#FEF1EC] flex justify-center items-center mx-auto">
          <i class="fas fa-arrow-trend-up" style="font-size: 38px;"></i>
        </div>
        <h5 class="font-poppins font-medium text-[18px] tracking-[-0.02em] leading-[100%] text-center text-[#00031F] mt-12">
          Execution & Tracking
        </h5>
        <p class="font-roboto font-light text-[16px] tracking-[0.04em] leading-[25px] text-center text-[#33354C] mt-2">
          I implement. You watch <br> real results.
        </p>
      </div>

      <div class="text-center">
        <div class="w-[86px] h-[86px] rounded-full shadow-xl bg-[#FEF1EC] flex justify-center items-center mx-auto">
          <i class="fas fa-arrow-trend-up" style="font-size: 38px;"></i>
        </div>
        <h5 class="font-poppins font-medium text-[18px] tracking-[-0.02em] leading-[100%] text-center text-[#00031F] mt-12">
          Refinement & Scale
        </h5>
        <p class="font-roboto font-light text-[16px] tracking-[0.04em] leading-[25px] text-center text-[#33354C] mt-2">
          We tweak, build, and grow <br> as the data tells us.
        </p>
      </div>

    </div>

  </div>
</section>


<section class="bg-white">

  <div class="container mx-auto py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24">
    <div class="flex flex-col lg:flex-row w-full">

      <div class="w-full lg:w-1/2">
        <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit mb-4">My Tract
          Record</span>
        <h2 class="font-poppins font-medium text-[36px] leading-[44px] tracking-[-0.04em] align-middle my-4">
          I've Earned my Stripes by <br> Doing the real work
        </h2>
        <p class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] tracking-[2%] text-center lg:w-[75%] md:text-left mb-6 sm:mb-8 text-t-second">
          Started in education and training, now the go-to SEO guy for real Australian businesses. I’ve helped clients
          go from invisible to seen — from “page 5” to leads every week.
        </p>
        <button class="font-roboto bg-c-main text-base hover:bg-[#E1663C] text-white rounded-[16px] w-full md:w-[210px] h-[56px] px-[16px] py-[14px] gap-2 flex items-center justify-center">
          View My Work <i class="fa-solid fa-arrow-right"></i>
        </button>
      </div>

      <div class="w-full lg:w-1/2">

        <div class="grid grid-cols-2 gap-4">

          <div class="h-[219px] bg-[#025F68] rounded-md relative">

            <img src="{{ asset('assets/boximage2.png') }}" class="absolute right-[-15px] bottom-0" width="180px" height="145px" alt="McQuel Healthcare products">

            <p class="font-poppins font-medium text-[16px] leading-[27px] tracking-[0.02em] text-white ml-[23px] mt-[33px]">
              McQuel Healthcare <br> (medical products)
            </p>
          </div>

          <div class="h-[219px] bg-[#FDD2C4] rounded-md relative">
            <p class="font-poppins font-medium text-[16px] leading-[27px] tracking-[0.02em] text-t-main absolute left-[23px] bottom-[33px]">
              Achievers College (RTO)
            </p>
          </div>

          <div class="h-[219px] bg-[#FDD2C4] rounded-md relative">
            <p class="font-poppins font-medium text-[16px] leading-[27px] tracking-[0.02em] text-t-main ml-[23px] mt-[33px]">
              SD Photography <br> (local services)
            </p>
          </div>

          <div class="h-[219px] bg-[#A98E5F] rounded-md relative">
            <img src="{{ asset('assets/boximage3.png') }}" class="absolute right-0 bottom-0" width="150px" height="115px" alt="McQuel Healthcare products">
            <p class="font-poppins font-medium text-[16px] leading-[27px] tracking-[0.02em] text-white absolute left-[23px] bottom-[33px]">
              Boujee Home Loans <br> (finance)
            </p>
          </div>

        </div>

      </div>

    </div>
  </div>

</section>


<section>

  <div class="container text-center mx-auto py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24">
    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Software</span>
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
      Tools I work with
    </h2>

    <div class="flex justify-center items-center gap-10">

      <div class="py-[24px] px-[30px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/meta.png') }}" alt="" class="w-[93px] h-[18.885px] opacity-100">
      </div>

      <div class="py-[24px] px-[30px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/surfer.png') }}" alt="" class="w-[109px] h-[20.08px] opacity-100">
      </div>

      <div class="py-[24px] px-[30px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/wix.png') }}" alt="" class="w-[60px] h-[17px] opacity-100">
      </div>

    </div>

    <div class="flex justify-center items-center gap-10 mt-8">

      <div class="py-[24px] px-[30px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/google_search.png') }}" alt="" class="w-[323px] h-[34.61.885px] opacity-100">
      </div>

      <div class="py-[24px] px-[30px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/semrus.png') }}" alt="" class="w-[195px] h-[28.94px] opacity-100">
      </div>

      <div class="py-[20px] px-[30px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/wordpress.png') }}" alt="" class="w-[187px] h-[51.52px] opacity-100">
      </div>

</section>


<!-- Main Container -->
<section class="bg-white relative py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24">
  <div class="container mx-auto grid md:grid-cols-2 gap-12">

    <!-- Left Content -->
    <div class="space-y-6">
      <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Apply to Work
        With Me</span>
      <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
        Let’s See If We’re the Right Fit
      </h2>

    </div>

    <!-- Right Form -->
    <div class="">
      <p class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] tracking-[2%] text-center lg:w-[85%] md:text-left mb-6 sm:mb-8 text-t-second">
        I only take on a small number of clients at a time so I can focus deeply on what matters: getting you results.
        If you’re serious about improving your visibility and building long-term SEO success, let’s talk.
      </p>
    </div>

    <div class="absolute bg-orange-500 text-white p-8 rounded-2xl shadow-lg max-w-md mx-auto z-10 right-[250px] top-[250px]">
      <h3 class="font-poppins font-medium text-[18px] leading-[100%] tracking-[0%] mb-6">
        Apply to Work With Rohit, It only takes 60 seconds
      </h3>

      <form class="space-y-4">
        <input type="text" placeholder="Enter your name" class="w-full px-4 py-3 rounded-md text-gray-800 focus:outline-none" />
        <input type="email" placeholder="Enter your email" class="w-full px-4 py-3 rounded-md text-gray-800 focus:outline-none" />
        <input type="url" placeholder="https://   Enter your business domain" class="w-full px-4 py-3 rounded-md text-gray-800 focus:outline-none" />

        <select class="w-full px-4 py-3 rounded-md text-gray-800 focus:outline-none">
          <option>Monthly budget for SEO/Ads</option>
          <option>$500 - $1000</option>
          <option>$1000 - $5000</option>
          <option>$5000+</option>
        </select>

        <textarea placeholder="Your businesses & goals" rows="3" class="w-full px-4 py-3 rounded-md text-gray-800 focus:outline-none"></textarea>

        <select class="w-full px-4 py-3 rounded-md text-gray-800 focus:outline-none">
          <option>How soon are you looking to start?</option>
          <option>Immediately</option>
          <option>1-3 months</option>
          <option>3+ months</option>
        </select>

        <button type="submit" class="w-full bg-black text-white py-3 rounded-md font-medium hover:bg-gray-900 transition">
          Let’s Talk Strategy
        </button>
      </form>

      <p class="text-sm text-center mt-4 text-white opacity-80">
        No spam. No pressure. Just real insights.
      </p>
    </div>

  </div>

  <!-- Map Section -->
  <div class="relative container mx-auto my-10">
    <img src="{{ asset('assets/graphics/map.png') }}" alt="map" class="w-[1252.72px] h-[597px] opacity-80">
    <!-- Location Marker -->
    <div class="absolute top-1/2 left-1/3 transform -translate-x-1/2 -translate-y-1/2">
      <div class="bg-white shadow-lg rounded-lg p-4 text-sm">
        <div class="flex items-center space-x-2">
          <img src="https://upload.wikimedia.org/wikipedia/commons/b/b9/Flag_of_Australia.svg" alt="aus" class="w-5 h-3 rounded-sm">
          <span class="font-semibold">Melbourne, AUS</span>
        </div>
        <p class="text-gray-600 mt-1">100 Smith Street<br>Collingwood VIC 3066 AU</p>
      </div>
    </div>
  </div>

</section>

<!-- question section -->
@include('includes.qa')

@endsection