@extends('app')

@section('title')
About
@endsection

@section('content')

<section class="container mx-auto md:px-0">
  <div class="flex flex-col lg:flex-row w-full py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">
    <!-- Text Column -->
    <div class="w-full lg:w-2/3 p-4 sm:p-6 md:p-8 lg:p-0 flex flex-col justify-center mr-4">
      <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit mb-4">About us</span>
      <h1 class="font-poppins font-medium text-4xl text-center leading-[50px] my-[14px] tracking-[-1.5%] md:text-[60px] md:text-left md:leading-[64px] md:tracking-[-0.015em] mb-3 sm:mb-4">
        No tech skills? <br>
        Start digital career right.
      </h1>
      <p class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] tracking-[2%] text-center md:text-left mb-6 sm:mb-8 text-t-second">
        CareerIntoIT is for anyone who feels stuck, curious, or overwhelmed — and just wants someone to guide them through the noise. Whether you're switching careers, starting over, or figuring things out one step at a time you belong here.
      </p>
    </div>

    <!-- Image Column -->
    <div class="w-full lg:w-1/2 px-2 pb-24 md:px-0 mt-6 sm:mt-8 lg:mt-0">

      <div class="w-full h-[530px] relative">
        <img src="{{ asset('assets/aboutimg1.jpg') }}" class="absolute top-0 left-0 w-[360px] h-[330px] rounded-lg" alt="" srcset="">

        <div class="absolute bottom-0 right-0 p-2.5 bg-white rounded-lg">
          <img src="{{ asset('assets/aboutimg2.jpg') }}" class="w-[360px] h-[300px] rounded-lg" alt="" srcset="">
        </div>

        <div class="absolute bottom-[-5px] px-[20px] py-[14px] right-0 bg-white shadow-xl rounded-lg rotate-[-5deg] w-[445px] h-[65px] flex justify-start items-center gap-4">
          <span class="bg-c-main p-2 rounded-lg">
            <i class="fa-solid fa-rocket w-[19px] text-white h-[19px] mt-[5px]"></i>
          </span>
          <p class="font-roboto font-normal text-[22px] leading-[30px] tracking-[0.02em] text-[#00031F]">
            Launch Your Tech Journey with us
          </p>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection