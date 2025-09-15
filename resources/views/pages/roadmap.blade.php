@extends('app')

@section('title')
Roadmap
@endsection

@section('content')

<section
  class="relative py-32 bg-[linear-gradient(232.53deg,rgba(255,207,113,0.12)_32.71%,rgba(35,118,221,0.036)_72.81%)]">
  <div class="flex justify-center items-center gap-6">
    <hr class="border-2 w-[38px] border-c-main">
    <p class="font-roboto font-normal text-base tracking-[8%] leading-[100%] text-c-main">Your SEO Partner That Delivers
    </p>
    <hr class="border-2 w-[38px] border-c-main">
  </div>

  <h1 class="font-poppins font-medium text-[60px] leading-[64px] tracking-[-1.5%] text-center my-8">
    SEO That's Real, Results That Last
  </h1>

  <h4 class="font-roboto font-light text-xl leading-[30px] tracking-[0.02em] text-center">
    Trusted by real businesses. Driven by results. Built on care.
  </h4>

  <div class="flex flex-col sm:flex-row sm:justify-center sm:items-center gap-3 sm:gap-4 my-6">
    <button
      class="font-roboto bg-c-main text-base hover:bg-[#E1663C] text-white rounded-[16px] w-full md:w-[210px] h-[56px] px-[16px] py-[14px] gap-2 flex items-center justify-center">
      See My Work
      <i class="fa-solid fa-arrow-right"></i>
    </button>
    <button
      class="font-roboto bg-black text-base hover:bg-gray-900 text-white rounded-[16px] w-full md:w-[226px] h-[56px] px-[16px] py-[14px] flex items-center justify-center gap-2">
      Book a Free Call
      <i class="fa-solid fa-phone-volume"></i>
    </button>
  </div>

  <img src="{{ asset('assets/graphics/circle.png') }}" alt="" class="absolute top-[140px] left-[230px]" srcset="">

  <img src="{{ asset('assets/graphics/secondavatar.png') }}" alt="" class="absolute top-[250px] right-[260px]"
    width="95px" srcset="">
  <img src="{{ asset('assets/graphics/uparrow.png') }}" alt="" class="absolute top-[330px] right-[260px]" width="50px"
    srcset="">
  <p
    class="absolute right-[200px] top-[400px] rotate-[-10deg] font-roboto font-normal text-c-main text-base leading-none tracking-[0.04em]">
    #Rohit Rajput
  </p>

  <img src="{{ asset('assets/graphics/firstavatar.png') }}" alt="" class="absolute top-[350px] left-[200px]"
    width="200px" srcset="">

  <p class="font-roboto font-light text-base text-[#33354C] leading-[30px] tracking-[0.06em] text-center">
    Rated <span class="font-bold">4.9</span> stars from 100+ reviews 🎉
  </p>

  <div class="flex justify-center items-center">
    <!-- Full stars -->
    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
      <path
        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
      </path>
    </svg>
    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
      <path
        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
      </path>
    </svg>
    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
      <path
        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
      </path>
    </svg>
    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
      <path
        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
      </path>
    </svg>
    <!-- Half star -->
    <svg class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
      <path
        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
      </path>
    </svg>
  </div>

</section>



<section class="bg-white">
  <div class="container mx-auto px-4 md:px-0">

    <div class="w-full py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">

      <div class="flex justify-center items-center gap-6">
        <hr class="border-2 w-[38px] border-c-main">
        <p class="font-roboto font-normal text-base tracking-[8%] leading-[100%] text-c-main">Why work with me
        </p>
        <hr class="border-2 w-[38px] border-c-main">
      </div>

      <h2 class="font-poppins font-medium text-[36px] leading-[100%] tracking-[-0.02em] text-center text-[#00031F] mt-8 mb-16">
        Not Just SEO Services. A Trusted Partnership.
      </h2>


      <div class="grid grid-cols-2 gap-6">
        <div class="flex flex-col gap-8 my-auto">
          <p class="font-roboto font-normal text-[18px] text-t-second leading-none tracking-[0.04em]">
            <i class="fa-solid fa-arrow-trend-up mr-2 text-c-main"></i>
            You’re not just looking for more traffic — you want real growth.
          </p>

          <p class="font-roboto font-normal text-[18px] text-t-second leading-none tracking-[0.04em]">
            <i class="fa-solid fa-phone-volume mr-2 text-c-main"></i>
            You want calls, conversions, leads — not vanity metrics.
          </p>

          <p class="font-roboto font-light text-[18px] leading-[30px] tracking-[0.04em]">
            I'm Rohit Rajput, the strategist behind CareerIntoIT. I help businesses like yours rank higher, show up better, and win trust through tailored SEO campaigns that are honest, effective, and built to last.
          </p>
        </div>

        <div class="flex justify-end">
          <img 
            src="{{ asset('assets/graphics/sideimg.png') }}" 
            class="w-[450px] h-[400px]"
            loading="lazy" 
            alt="Side image"
          >
        </div>
      </div>

    </div>

  </div>
</section>


<section>
  <div class="container mx-auto px-4 md:px-0 py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">

      <div class="flex justify-center items-center gap-6">
        <hr class="border-2 w-[38px] border-c-main">
        <p class="font-roboto font-normal text-base tracking-[8%] leading-[100%] text-c-main">What I Actually Do
        </p>
        <hr class="border-2 w-[38px] border-c-main">
      </div>

      <h2 class="font-poppins font-medium text-[36px] leading-[100%] tracking-[-0.02em] text-center text-[#00031F] mt-8 mb-16">
        SEO That Connects Strategy, Search & Sales 
      </h2>

      <div class="grid grid-cols-3 gap-4 mb-6">
        <div>
          <div class="border border-gray-300 rounded-lg px-8 py-12 bg-white">
            <div class="w-10 h-10 rounded-full bg-[#FEF8F5] flex justify-center items-center">
              <i class="fa-solid fa-arrow-trend-up text-c-main fa-lg"></i>
            </div>
            <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-8">
              Technical SEO
            </h5>
            <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
              Optimised titles, structure, and content.
            </p>
          </div>

          <div class="border border-gray-300 mt-6 rounded-lg px-8 py-12 bg-white">
            <div class="w-10 h-10 rounded-full bg-[#FEF8F5] flex justify-center items-center">
              <i class="fa-solid fa-arrow-trend-up text-c-main fa-lg"></i>
            </div>
            <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-8">
              Meta Ads & Google Ads
            </h5>
            <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
              Built for users, loved by Google
            </p>
          </div>

          <div class="border border-gray-300 mt-6 rounded-lg px-8 py-12 bg-white">
            <div class="w-10 h-10 rounded-full bg-[#FEF8F5] flex justify-center items-center">
              <i class="fa-solid fa-arrow-trend-up text-c-main fa-lg"></i>
            </div>
            <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-8">
              Backlink Building
            </h5>
            <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
              Ethical links from trusted sources
            </p>
          </div>
        </div>

        <div class="relative border border-gray-300 bg-gradient-to-b from-[#FFFCF8] from-[-24.14%] to-[#FAFAFA] to-[106.34%] rounded-lg">
          <div class="px-8 pt-8 flex justify-center">
            <img src="{{ asset('assets/graphics/Logomark.png') }}" width="32px" height="32px" alt="logo">
          </div>
          <div class="px-8 mt-6">
            <p class="font-poppins font-light text-[16px] leading-[26px] tracking-[0.04em] text-center">Explore the Career Paths That Can Change Your Life</p>
            <img class="w-full h-full mt-6" src="{{ asset('assets/graphics/phone.png') }}" alt="" srcset="">
          </div>

          <div class="absolute w-full h-[129px] left-0 right-0 bottom-0 opacity-100 rounded-bl-[16px] rounded-br-[16px] bg-gradient-to-b from-[rgba(255,255,255,0.07)] from-[4.01%] to-[rgba(255,255,255,0.94)] to-[100%]">
          <!-- Your content here -->
          </div>
        </div>

        <div>
          <div class="border border-gray-300 rounded-lg px-8 py-12 bg-white">
            <div class="w-10 h-10 rounded-full bg-[#FEF8F5] flex justify-center items-center">
              <i class="fa-solid fa-arrow-trend-up text-c-main fa-lg"></i>
            </div>
            <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-8">
              On-Page SEO
            </h5>
            <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
              Optimised titles, structure, and content.
            </p>
          </div>

          <div class="border border-gray-300 mt-6 rounded-lg px-8 py-12 bg-white">
            <div class="w-10 h-10 rounded-full bg-[#FEF8F5] flex justify-center items-center">
              <i class="fa-solid fa-arrow-trend-up text-c-main fa-lg"></i>
            </div>
            <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-8">
              SEO Content
            </h5>
            <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
              Built for users, loved by Google
            </p>
          </div>

          <div class="border border-gray-300 mt-6 rounded-lg px-8 py-12 bg-white">
            <div class="w-10 h-10 rounded-full bg-[#FEF8F5] flex justify-center items-center">
              <i class="fa-solid fa-arrow-trend-up text-c-main fa-lg"></i>
            </div>
            <h5 class="font-poppins font-semibold text-[18px] tracking-[-0.02em] leading-[100%] mt-8">
              Backlink Building
            </h5>
            <p class="font-roboto font-light text-base tracking-[0.04em] leading-[25px] mt-2">
              Ethical links from trusted sources
            </p>
          </div>
        </div>
      </div>

  </div>
</section>



<section class="bg-white">
  <div class="container mx-auto px-4 md:px-0 py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">

    <div class="flex justify-center items-center gap-6">
        <hr class="border-2 w-[38px] border-c-main">
        <p class="font-roboto font-normal text-base tracking-[8%] leading-[100%] text-c-main">My Track Record
        </p>
        <hr class="border-2 w-[38px] border-c-main">
    </div>

    <h2 class="font-poppins font-medium text-[36px] leading-[100%] tracking-[-0.02em] text-center text-[#00031F] mt-8 mb-4">
      I’ve Earned My Stripes by Doing the Real Work 
    </h2>
    <div class="flex justify-center">
      <p class="font-roboto md:w-[75%] font-light text-lg leading-[30px] tracking-[4%] text-center">
        Started in education and training, now the go-to SEO guy for real Australian businesses. I've helped clients go from invisible to seen — from "page 5" to leads every week.
      </p>
    </div>

    

  </div>
</section>

@endsection