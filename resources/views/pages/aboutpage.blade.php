@extends('app')

@section('title')
About
@endsection

@section('content')

<section class="container mx-auto md:px-0">
  <div class="flex flex-col lg:flex-row w-full py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">
    <!-- Text Column -->
    <div class="w-full lg:w-2/3 p-4 sm:p-6 md:p-8 lg:p-0 flex flex-col justify-center mr-4">
      <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit mb-4">About
        us</span>
      <h1
        class="font-poppins font-medium text-4xl text-center leading-[50px] my-[14px] tracking-[-1.5%] md:text-[60px] md:text-left md:leading-[64px] md:tracking-[-0.015em] mb-3 sm:mb-4">
        No tech skills? <br>
        Start digital career right.
      </h1>
      <p
        class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] tracking-[2%] text-center md:text-left mb-6 sm:mb-8 text-t-second">
        CareerIntoIT is for anyone who feels stuck, curious, or overwhelmed — and just wants someone to guide them
        through the noise. Whether you're switching careers, starting over, or figuring things out one step at a time
        you belong here.
      </p>
    </div>

    <!-- Image Column -->
    <div class="w-full lg:w-1/2 px-2 pb-24 md:px-0 mt-6 sm:mt-8 lg:mt-0">

      <div class="w-full h-[530px] relative">
        <img src="{{ asset('assets/aboutimg1.jpg') }}" class="absolute top-0 left-0 w-[360px] h-[330px] rounded-lg"
          alt="" srcset="">

        <div class="absolute bottom-0 right-0 p-2.5 bg-white rounded-lg">
          <img src="{{ asset('assets/aboutimg2.jpg') }}" class="w-[360px] h-[300px] rounded-lg" alt="" srcset="">
        </div>

        <div
          class="absolute bottom-[-5px] px-[20px] py-[14px] right-0 bg-white shadow-xl rounded-lg rotate-[-5deg] w-[445px] h-[65px] flex justify-start items-center gap-4">
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


<section class="bg-white relative py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24">
  <div class="container mx-auto grid md:grid-cols-2 gap-12 relative">

    <!-- Left Content -->
    <div class="space-y-6">
      <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
        What Is CareerIntoIT?
      </h2>

      <img src="{{ asset('assets/aboutimg.png') }}" class="absolute bottom-0 left-0 w-[700px] h-[550px]" alt=""
        srcset="">

      <div class="absolute top-[215px] left-[300px] bg-c-main p-6 rounded-xl w-[200px] h-[115px]">
        <p class="font-roboto font-semibold text-xl leading-none tracking-normal text-center text-white">You’re not
          alone <br> & <br> Not too late.</p>
      </div>

      <div class="absolute z-10 bottom-0 left-0 w-[500px] h-[100px] bg-gradient-to-b from-transparent to-white"></div>

    </div>

    <!-- Right Form -->
    <div class="">
      <p
        class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] tracking-[2%] text-center md:text-left mb-6 sm:mb-8 text-t-second">
        We’re not just another blog or tutorial site. We’re your first step into digital and IT — made simple, honest,
        and human.
      </p>

      <div class="mt-16 flex flex-col gap-6">
        <div class="bg-[#F2F4F7] p-4 rounded-xl flex justify-start gap-6">
          <div class="pt-1.5">
            <span class="bg-c-main p-2 rounded-lg">
              <i class="fa-solid fa-rocket w-[19px] text-white h-[19px] mt-[5px]"></i>
            </span>
          </div>
          <p class="font-roboto font-normal text-[17px] leading-[26px] tracking-[2%]">
            Easy-to-follow guides on SEO, Google Ads, Digital Marketing, and Tech Careers
          </p>
        </div>

        <div class="bg-[#F2F4F7] p-4 rounded-xl flex justify-start gap-6">
          <div class="pt-1.5">
            <span class="bg-c-main p-2 rounded-lg">
              <i class="fa-solid fa-rocket w-[19px] text-white h-[19px] mt-[5px]"></i>
            </span>
          </div>
          <p class="font-roboto font-normal text-[17px] leading-[26px] tracking-[2%]">
            Beginner-friendly roadmaps that show you exactly what to learn and when
          </p>
        </div>

        <div class="bg-[#F2F4F7] p-4 rounded-xl flex justify-start gap-6">
          <div class="pt-1.5">
            <span class="bg-c-main p-2 rounded-lg">
              <i class="fa-solid fa-rocket w-[19px] text-white h-[19px] mt-[5px]"></i>
            </span>
          </div>
          <p class="font-roboto font-normal text-[17px] leading-[26px] tracking-[2%]">
            Real talk — no confusing jargon, no salesy promises, just straight-up help
          </p>
        </div>

        <div class="bg-[#F2F4F7] p-4 rounded-xl flex justify-start gap-6">
          <div class="pt-1.5">
            <span class="bg-c-main p-2 rounded-lg">
              <i class="fa-solid fa-rocket w-[19px] text-white h-[19px] mt-[5px]"></i>
            </span>
          </div>
          <p class="font-roboto font-normal text-[17px] leading-[26px] tracking-[2%]">
            Stories, lessons, and tools created by people who’ve actually worked in this space
          </p>
        </div>

        <div class="bg-[#F2F4F7] p-4 rounded-xl flex justify-start gap-6">
          <div class="pt-1.5">
            <span class="bg-c-main p-2 rounded-lg">
              <i class="fa-solid fa-rocket w-[19px] text-white h-[19px] mt-[5px]"></i>
            </span>
          </div>
          <p class="font-roboto font-normal text-[17px] leading-[26px] tracking-[2%]">
            A place where you can explore without feeling behind
          </p>
        </div>
      </div>

    </div>

  </div>
</section>


<section class="bg-white relative py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24">
  <div class="container mx-auto grid md:grid-cols-2 gap-12 relative">

    <!-- Left Content -->
    <div class="space-y-6">
      <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
        Who We Help?
      </h2>

    </div>

    <!-- Right Form -->
    <div class="">
      <p
        class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] tracking-[2%] text-center md:text-left mb-6 sm:mb-8 text-t-second">
        No matter your background or starting point, you can learn this. And we’ll walk with you while you do.
      </p>

    </div>

  </div>

  <!-- Cards Grid -->
  <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-4">

    <!-- Card 1 -->
    <div class="relative w-[392px] h-[250px] rounded overflow-hidden shadow-lg">
      <img src="{{ asset('assets/aboutimg3.jpg') }}" alt="Career changers" loading="lazy"
        class="w-full h-full object-cover">

      <div class="absolute top-4 left-1/2 transform -translate-x-1/2 w-[360px] h-[88px] flex items-end p-4">
        <!-- Background blur layer -->
        <div class="absolute inset-0 bg-white/80 backdrop-blur-sm rounded"></div>

        <!-- Foreground text (not blurred) -->
        <p class="relative font-roboto text-[18px] leading-[28px] z-10">
          <span class="font-bold text-c-main">Career changers thinking</span>
          How do I even get into digital marketing or tech?
        </p>
      </div>

    </div>

    <!-- Center card: spans 2 rows on large screens -->
    <div class="relative w-[392px] h-[520px] rounded overflow-hidden shadow-lg lg:row-span-2">
      <img src="{{ asset('assets/aboutimg5.jpg') }}" alt="Small business owners" loading="lazy"
        class="w-full h-full object-cover">

      <!-- Blurred background box with clear text, bottom center -->
      <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-[360px] h-[116px] flex items-end p-4">
        <!-- Background blur layer -->
        <div class="absolute inset-0 bg-white/80 backdrop-blur-sm rounded"></div>

        <!-- Foreground text (not blurred) -->
        <p class="relative font-roboto text-[18px] leading-[28px] z-10">
          <span class="font-bold text-c-main">Small business owners</span>
          trying to understand SEO, Ads, or how to actually get leads online
        </p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="relative w-[392px] h-[250px] rounded overflow-hidden shadow-lg">
      <img src="{{ asset('assets/aboutimg6.jpg') }}" alt="Parents" loading="lazy" class="w-full h-full object-cover">

      <div class="absolute top-4 left-1/2 transform -translate-x-1/2 w-[360px] h-[88px] flex items-end p-4">
        <!-- Background blur layer -->
        <div class="absolute inset-0 bg-white/80 backdrop-blur-sm rounded"></div>

        <!-- Foreground text (not blurred) -->
        <p class="relative font-roboto text-[18px] leading-[28px] z-10">
          <span class="font-bold text-c-main">Parents or return-to-work professionals</span>
          ready for something new
        </p>
      </div>

    </div>

    <!-- Card 4 -->
    <div class="relative w-[392px] h-[250px] rounded overflow-hidden shadow-lg">
      <img src="{{ asset('assets/aboutimg4.jpg') }}" alt="Students" loading="lazy" class="w-full h-full object-cover">

      <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-[360px] h-[88px] flex items-end p-4">
        <!-- Background blur layer -->
        <div class="absolute inset-0 bg-white/80 backdrop-blur-sm rounded"></div>

        <!-- Foreground text (not blurred) -->
        <p class="relative font-roboto text-[18px] leading-[28px] z-10">
          <span class="font-bold text-c-main">Students and recent grads</span>
          looking for practical, real-world skills
        </p>
      </div>

    </div>

    <!-- Card 5 -->
    <div class="relative w-[392px] h-[250px] rounded overflow-hidden shadow-lg">
      <img src="{{ asset('assets/aboutimg7.jpg') }}" alt="Freelancers" loading="lazy"
        class="w-full h-full object-cover">

      <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 w-[360px] h-[88px] flex items-end p-4">
        <!-- Background blur layer -->
        <div class="absolute inset-0 bg-white/80 backdrop-blur-sm rounded"></div>

        <!-- Foreground text (not blurred) -->
        <p class="relative font-roboto text-[18px] leading-[28px] z-10">
          <span class="font-bold text-c-main">Freelancers</span>
          trying to fill their calendar with better clients
        </p>
      </div>

    </div>

  </div>
</section>



<section class="py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24">
  <div class="container mx-auto grid md:grid-cols-2 gap-12 relative">

    <!-- Left Content -->
    <div class="space-y-6">
      <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
        What Makes Us Different?
      </h2>

    </div>

    <!-- Right Form -->
    <div class="">
      <p
        class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] tracking-[2%] text-center md:text-left mb-6 sm:mb-8 text-t-second">
        There’s already too much noise online. That’s why we’ve made CareerIntoIT clear, honest, and experience-driven.
      </p>

    </div>

  </div>


  <div class="container mx-auto mt-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Left Section: Image and Text -->
      <div
        class="relative bg-c-main rounded-lg overflow-hidden flex flex-col text-white w-full h-full md:w-[600px] md:h-[420px]">

        <div class="relative z-10 flex-grow px-12 py-8 flex flex-col justify-between">
          <p class="font-roboto font-normal text-[20px] leading-[28px] tracking-[0.02em]">
            Everything here is built on real projects, real clients, and real stories — not just SEO theory or textbook
            fluff. And when you're ready to go beyond learning — when you need actual support on your SEO, Ads, or
            business — we’ve got you covered there too.
          </p>
          <div class="flex items-center self-end mt-auto space-x-2">
            <span class="text-white font-medium">We promise</span>
          </div>
        </div>

        <img src="{{ asset('assets/aboutimg8.png') }}" alt="Freelancers" loading="lazy"
          class="absolute -bottom-8 w-[600px] h-[350px]">
      </div>

      <!-- Right Section: Grid of Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Card 1 -->
        <div
          class="bg-[#FFFFFF] p-6 md:p-8 rounded-lg hover:shadow-lg hover:border-[2px] hover:border-[#F76E40] text-center flex flex-col items-center justify-center">
          <div class="bg-orange-500 rounded-lg p-3 mb-4 inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M4 4v5h.582m15.418 10a2 2 0 01-1.414 0l-4.243-4.243m-1.414-1.414l-4.243-4.243m-1.414-1.414L3.414 9.414M10 4v5h.582m15.418 10a2 2 0 01-1.414 0l-4.243-4.243m-1.414-1.414l-4.243-4.243m-1.414-1.414L3.414 9.414" />
            </svg>
          </div>
          <h3 class="font-roboto font-medium text-[20px] leading-[100%] tracking-[0em] text-[#00031F]">
            No recycled advice
          </h3>
        </div>

        <!-- Card 2 -->
        <div
          class="bg-[#FFFFFF] p-6 md:p-8 rounded-lg hover:shadow-lg hover:border-[2px] hover:border-[#F76E40] text-center flex flex-col items-center justify-center">
          <div class="bg-orange-500 rounded-lg p-3 mb-4 inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
          <h3 class="font-roboto font-medium text-[20px] leading-[100%] tracking-[0em] text-[#00031F]">
            No fake promises
          </h3>
        </div>

        <!-- Card 3 -->
        <div
          class="bg-[#FFFFFF] p-6 md:p-8 rounded-lg hover:shadow-lg hover:border-[2px] hover:border-[#F76E40] text-center flex flex-col items-center justify-center">
          <div class="bg-orange-500 rounded-lg p-3 mb-4 inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M18.364 5.636A9 9 0 105.636 18.364M5.636 5.636L18.364 18.364" />
            </svg>
          </div>
          <h3 class="font-roboto font-medium text-[20px] leading-[100%] tracking-[0em] text-[#00031F]">
            No overwhelm
          </h3>
        </div>

        <!-- Card 4 -->
        <div
          class="bg-[#FFFFFF] p-6 md:p-8 rounded-lg hover:shadow-lg hover:border-[2px] hover:border-[#F76E40] text-center flex flex-col items-center justify-center">
          <div class="bg-orange-500 rounded-lg p-3 mb-4 inline-block">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 12h.01" />
            </svg>
          </div>
          <h3 class="font-roboto font-medium text-[20px] leading-[100%] tracking-[0em] text-[#00031F]">
            Just what works
          </h3>
        </div>
      </div>
    </div>
  </div>

</section>


<section class="relative bg-cover bg-center autoflow" style="background-image: url('{{ asset('assets/face.png') }}')">
  <!-- Background overlay with lower opacity and proper z-index -->
  <div class="absolute inset-0 z-0 bg-gray-100/10"></div>

  <div class="container mx-auto px-4 md:px-0 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24 z-10">

    <div class="mb-8 grid md:grid-cols-5 gap-8">

      <!-- Left Content -->
      <div class="md:col-span-2">
        <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
          Want Hands-On Help?
        </h2>

      </div>

      <!-- Right Form -->
      <div class="md:col-span-3">
        <p
          class="font-roboto font-light text-base md:text-xl loading-6 md:leading-[30px] ml-14 tracking-[2%] text-center md:text-left mb-6 sm:mb-8 text-t-second">
          Sometimes, the best thing you can do is ask someone else to take the lead. <br>
          When you’re ready for someone to handle your SEO, Google Ads, or website growth — we invite you to meet the
          person behind CareerIntoIT.
        </p>

      </div>

    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-4 items-center relative">
      <!-- Left Column -->

      <div class="bg-c-main h-[480px] w-[calc(100%-15px)] lg:col-span-1 overflow-hidden ">
        <div class="absolute left-[-55px] h-[540px] w-[560px] py-10">
          <img src="{{ asset('assets/rohit.png') }}" alt="Decorative element" class="h-full w-full object-contain" />
        </div>
      </div>


      <!-- Right Column -->
      <div class="lg:col-span-2 h-full">
        <div class="ml-32 flex flex-col h-full">
          <!-- Ensure this div takes full height -->
          <div class="flex flex-col justify-end h-full">
            <!-- Push content to the bottom -->
            <p class="font-roboto font-normal text-[20px] leading-[35px] tracking-[0.02em] text-t-first mb-6">
              Founder of CareerIntoIT. <br>
              SEO & Ads Strategist. <br>
              The guy actually doing the work behind the scenes.
            </p>

            <button
              class="bg-c-main hover:bg-[#f85a2a] text-white font-semibold w-full h-[56px] px-8 py-[14px] rounded-[16px] gap-2 relative z-20 transition-colors duration-300">
              Hire Rohit Rajput
            </button>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>


@include('includes.qa')

@include('includes.askquestion')

@endsection