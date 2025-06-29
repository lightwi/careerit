@extends('app')


@section('styles')

<style>
      /* Main slider container */
      .slider-outer {
        width: 800px;
        overflow: hidden;
        position: relative;
        height: 200px;
      }
      
      /* Inner sliding track */
      .slider-inner {
        display: flex;
        flex-direction: row;
        position: absolute;
        left: 0; 
        top: 0;
        width: 2400px; /* 3 slides */
        transition: transform 0.8s cubic-bezier(0.22, 1, 0.36, 1);
        will-change: transform;
        height: 100%;
      }
      
      /* Individual slide card */
      .slide-card {
        width: 800px;
        flex-shrink: 0;
        height: 200px;
        display: flex;
        align-items: center;
        background: white;
        border-radius: 0.75rem;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        padding: 1.5rem;
        margin-right: 2rem;
        transition: all 0.8s cubic-bezier(0.22, 1, 0.36, 1);
      }
      
      /* Next slides preview */
      .next-slide {
        transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);
      }
      
      /* Animation classes */
      .fade-out {
        opacity: 0;
        transform: translateY(10px);
      }
      .fade-in {
        opacity: 0.7;
        transform: translateY(0);
      }
    </style>

@endsection

@section('content')

<section class="container mx-auto px-4 md:px-0">
    <div
        class="flex flex-col lg:flex-row w-full py-8 sm:py-10 lg:py-16 xl:py-24 2xl:py-28"
    >
        <!-- Text Column -->
        <div
            class="w-full lg:w-1/2 p-4 sm:p-6 md:p-8 lg:p-0 flex flex-col justify-center mr-4"
        >
            <span
                class="px-2 py-1 bg-white border-2 border-gray-300 rounded-lg font-roboto font-normal text-sm leading-5 tracking-wide text-center text-c-main w-fit mb-4 sm:mb-6"
                ># Roadmap to Digital Success</span
            >
            <h1
                class="font-poppins font-medium text-[60px] leading-[64px] tracking-[-0.015em] mb-3 sm:mb-4"
            >
                Your Road Map to Digital
                <span
                    class="font-poppins font-medium text-[60px] leading-[64px] tracking-[-0.015em] text-c-main"
                    >Success</span
                >
            </h1>
            <p
                class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] mb-6 sm:mb-8 text-t-second"
            >
                Explore proven career paths, learn from real-world SEO case
                studies, and browse expert blogs everything you need to grow in
                digital and IT, all in one place. ...
            </p>
            <div
                class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-4"
            >
                <button
                    class="font-roboto bg-c-main hover:bg-[#E1663C] text-white rounded-[16px] w-[210px] h-[56px] px-[16px] py-[14px] gap-2 flex items-center justify-center"
                >
                    Start Exploring Careers
                </button>
                <button
                    class="font-roboto bg-black hover:bg-gray-900 text-white rounded-[16px] w-[226px] h-[56px] px-[16px] py-[14px] flex items-center justify-center gap-2"
                >
                    Start Exploring Careers
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
            <p
                class="font-roboto font-light text-t-second text-[14px] leading-[100%] tracking-[0.06em] mt-3 sm:mt-4 mb-3 sm:mb-4"
            >
                No Signup Needed. Start exploring right away.
            </p>
            <!-- Avatar and Rating Section -->
            <div class="flex items-center gap-3 sm:gap-4">
                <!-- Avatar Stack -->
                <!-- Avatar Stack -->
                <div class="flex -space-x-2">
                    <img
                        src="https://randomuser.me/api/portraits/women/44.jpg"
                        alt="User"
                        class="w-8 h-8 sm:w-10 sm:h-10 rounded-full border-2 border-white object-cover"
                    />
                    <img
                        src="https://randomuser.me/api/portraits/men/32.jpg"
                        alt="User"
                        class="w-8 h-8 sm:w-10 sm:h-10 rounded-full border-2 border-white object-cover"
                    />
                    <img
                        src="https://randomuser.me/api/portraits/women/68.jpg"
                        alt="User"
                        class="w-8 h-8 sm:w-10 sm:h-10 rounded-full border-2 border-white object-cover"
                    />
                    <div
                        class="w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-gray-600 border-2 border-white flex justify-center items-center"
                    >
                        <span class="text-white text-xs sm:text-sm">+5k</span>
                    </div>
                </div>

                <!-- Rating -->
                <div class="flex items-center">
                    <span
                        class="m-1 sm:m-2 text-gray-700 font-medium text-sm sm:text-base"
                        >4.9</span
                    >
                    <div class="flex">
                        <!-- Full stars -->
                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            ></path>
                        </svg>
                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            ></path>
                        </svg>
                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            ></path>
                        </svg>
                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            ></path>
                        </svg>
                        <!-- Half star -->
                        <svg
                            class="w-4 h-4 sm:w-5 sm:h-5 text-yellow-400"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            ></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image Column -->
        <div class="w-full lg:w-1/2 mt-6 sm:mt-8 lg:mt-0">
            <img
                src="{{ asset('assets/hero.png') }}"
                alt="Description"
                class="w-full h-auto object-cover"
                style="min-height: 300px"
            />
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="container mx-auto px-4 md:px-0">
        <div
            class="flex flex-col gap-4 sm:gap-6 lg:flex-row lg:justify-between lg:items-center lg:gap-12 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24"
        >
            <h2
                class="font-poppins font-medium text-t-first text-[36px] leading-[48px] tracking-[-0.02em] lg:w-[40%]"
            >
                What you'll find inside <br class="hidden xs:block" />
                careerintoIt
            </h2>
            <p
                class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-second max-w-prose lg:w-[40%]"
            >
                Learn. Explore. Take action — whether you're just starting or
                scaling your digital career.
            </p>
        </div>

        <div
            class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 pb-8 sm:pb-10 md:pb-12 lg:pb-16 xl:pb-20 2xl:pb-24"
        >
            <!-- Service 1 -->
            <div
                class="bg-c-main rounded-lg overflow-hidden border border-gray-300 flex flex-col"
            >
                <div class="p-6 text-white flex-grow">
                    <div
                        class="w-14 h-14 bg-white text-c-main rounded-full flex items-center justify-center mb-8"
                    >
                        <i class="fa-solid fa-bullhorn text-2xl"></i>
                    </div>
                    <h3
                        class="font-poppins font-medium text-[20px] leading-none tracking-normal text-secondary mb-32"
                    >
                        Web Development
                    </h3>
                    <p
                        class="font-roboto font-light text-base leading-6 tracking-wide text-white mb-6"
                    >
                        Step-by-step guides for Digital Marketing and IT careers
                        understand the roles, required skills, and how to break
                        in, even with no experience.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a
                        href="#"
                        class="text-white hover:underline inline-flex items-center gap-2"
                    >
                        Explore Path <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 2 -->
            <div
                class="bg-white hover:bg-c-main group rounded-lg overflow-hidden border border-gray-300 transition-colors duration-300 flex flex-col"
            >
                <div class="p-6 flex-grow">
                    <div
                        class="w-14 h-14 bg-c-main group-hover:bg-white group-hover:text-c-main text-white rounded-full flex items-center justify-center mb-8 transition-colors duration-300"
                    >
                        <i class="fa-solid fa-chart-line text-2xl"></i>
                    </div>
                    <h3
                        class="font-poppins font-medium text-[20px] text-t-first group-hover:text-white leading-none tracking-normal text-secondary mb-32"
                    >
                        Real SEO Case Studies
                    </h3>
                    <p
                        class="font-roboto font-light text-base text-t-second group-hover:text-white leading-6 tracking-wide mb-6"
                    >
                        Learn SEO through real business examples how strategies
                        are built, executed, and improved to drive traffic and
                        revenue.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a
                        href="#"
                        class="group-hover:text-white text-gray-600 hover:underline inline-flex items-center gap-2 transition-colors duration-300"
                    >
                        Read More <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 3 -->
            <div
                class="bg-white hover:bg-c-main group rounded-lg overflow-hidden border border-gray-300 transition-colors duration-300 flex flex-col"
            >
                <div class="p-6 flex-grow">
                    <div
                        class="w-14 h-14 bg-c-main group-hover:bg-white group-hover:text-c-main text-white rounded-full flex items-center justify-center mb-8 transition-colors duration-300"
                    >
                        <i class="fa-solid fa-users text-2xl"></i>
                    </div>
                    <h3
                        class="font-poppins font-medium text-[20px] group-hover:text-white text-t-first leading-none tracking-normal text-secondary mb-32"
                    >
                        Expert Top Stories
                    </h3>
                    <p
                        class="font-roboto font-light text-t-second text-base group-hover:text-white leading-6 tracking-wide mb-6"
                    >
                        Get actionable tips, industry insights, and
                        beginner-friendly advice to stay ahead in your digital
                        journey.
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a
                        href="#"
                        class="group-hover:text-white text-gray-600 hover:underline inline-flex items-center gap-2 transition-colors duration-300"
                    >
                        Explore Stories <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <!-- Service 4 -->
            <div
                class="group bg-white rounded-lg overflow-hidden border border-gray-300 transition-all duration-300 relative h-full flex flex-col"
            >
                <!-- Default Content -->
                <div
                    class="p-6 relative z-10 flex-grow group-hover:opacity-0 transition-opacity duration-300"
                >
                    <div
                        class="w-14 h-14 bg-c-main text-white rounded-full flex items-center justify-center mb-8"
                    >
                        <i class="fa-solid fa-phone-volume text-2xl"></i>
                    </div>
                    <h3
                        class="font-poppins font-medium text-[20px] group-hover:text-white text-t-first leading-none tracking-normal text-secondary mb-32"
                    >
                        Meet Rohit Rajput
                    </h3>
                    <p
                        class="font-roboto font-light text-base text-tsecond group-hover:text-white leading-6 tracking-wide mb-6"
                    >
                        Learn from someone who’s been there, discover Rohit's
                        journey, insights, and mentorship across digital
                        marketing and SEO.
                    </p>
                </div>
                <div
                    class="p-6 pt-0 relative z-10 group-hover:opacity-0 transition-opacity duration-300"
                >
                    <a
                        href="#"
                        class="text-gray-600 hover:underline inline-flex items-center gap-2"
                    >
                        Meet Rohit <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

                <!-- Hover Overlay -->
                <div
                    class="absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col"
                >
                    <div class="flex-grow relative overflow-hidden">
                        <img
                            src="{{ asset('assets/meetRohit.png') }}"
                            alt="Rohit Rajput"
                            class="w-full h-full object-cover object-center"
                        />
                        <div class="absolute inset-0 bg-c-main/50"></div>
                    </div>
                    <div class="absolute bottom-6 left-6 right-6 z-10">
                        <button
                            class="w-full bg-black hover:bg-gray-900 hover:text-white text-white px-6 py-3 rounded-lg font-medium transition-colors duration-300"
                        >
                            Schedule a Call
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    class="container mx-auto py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24"
>
    <div
        class="flex flex-col gap-4 sm:gap-6 lg:flex-row lg:justify-between lg:items-center lg:gap-12"
    >
        <h2
            class="font-poppins font-medium text-[36px] text-t-first leading-[48px] tracking-[-0.02em] lg:w-[40%]"
        >
            Why Digital & IT Careers Are <br class="hidden xs:block" />
            the Smartest Bet in 2025
        </h2>
        <p
            class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-second max-w-prose lg:w-[40%]"
        >
            The world is moving online, and skilled digital professionals are in
            demand. Here's why it's the best time to start your journey.
        </p>
    </div>

    <div class="bg-white border border-gray-300 p-8 mt-12 rounded-lg">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-4"
        >
            <div class="p-8">
                <div class="flex items-center gap-2 text-c-main">
                    <i class="fa-solid fa-circle fa-xs"></i>
                    <p
                        class="font-inter font-medium text-[16px] leading-[24px] tracking-[0.06em]"
                    >
                        Digital Marketing
                    </p>
                </div>

                <div class="my-8">
                    <h4
                        class="font-poppins font-normal text-t-first text-[24px] leading-[100%] tracking-[-0.01em]"
                    >
                        A $598 Billion Industry on the Rise
                    </h4>
                    <p
                        class="font-roboto font-light text-t-second text-[18px] leading-[28px] tracking-[0.02em] my-2"
                    >
                        The global digital marketing industry was valued at
                        approximately $598.58 billion in 2024 and is projected
                        to grow at a CAGR of 9.20%, aiming to hit $1.44 trillion
                        by 2034.
                    </p>
                </div>

                <a href="" class="text-blue-600"
                    >Read more <i class="fa-solid fa-arrow-right"></i
                ></a>
            </div>

            <div class="p-4">
                <table class="min-w-full border border-gray-200 table-fixed">
                    <thead class="bg-gray-50">
                        <tr>
                            <th
                                class="w-1/3 px-8 py-4 text-left text-lg font-medium text-gray-700 border-b"
                            >
                                Career
                            </th>
                            <th
                                class="w-1/3 px-8 py-4 text-left text-lg font-medium text-gray-700 border-b"
                            >
                                Salary Range
                            </th>
                            <th
                                class="w-1/3 px-8 py-4 text-left text-lg font-medium text-gray-700 border-b"
                            >
                                Scope
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td
                                class="w-1/3 px-6 py-4 text-sm text-gray-700 border-b"
                            >
                                SEO Specialist
                            </td>
                            <td
                                class="w-1/3 px-6 py-4 text-sm text-gray-700 border-b"
                            >
                                $60,000 - $80,000
                            </td>
                            <td
                                class="w-1/3 px-6 py-4 text-sm text-gray-700 border-b"
                            >
                                Job offering Globally Over 150,000
                            </td>
                        </tr>
                        <tr>
                            <td
                                class="w-1/3 px-4 py-2 text-sm text-gray-700 border-b"
                            >
                                Raid ads Manage
                            </td>
                            <td
                                class="w-1/3 px-4 py-2 text-sm text-gray-700 border-b"
                            >
                                $60,000 - $127,000
                            </td>
                            <td
                                class="w-1/3 px-4 py-2 text-sm text-gray-700 border-b"
                            >
                                Job offering Globally Over 36,000 per year
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1/3 px-4 py-2 text-sm text-gray-700">
                                Content Marketer
                            </td>
                            <td class="w-1/3 px-4 py-2 text-sm text-gray-700">
                                $77,858 - $111,891
                            </td>
                            <td class="w-1/3 px-4 py-2 text-sm text-gray-700">
                                Job offering Over 17000+ alone in USA
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div
            class="flex items-center justify-start flex-wrap gap-16 p-6 my-8 bg-b-main rounded-lg"
        >
            <!-- Each company item -->
            <div class="flex flex-col items-center">
                <span class="text-2xl font-bold text-gray-500 mb-1"
                    >Top Companies</span
                >
            </div>

            <div class="h-[60px] bg-gray-300">.</div>

            <div class="flex items-center gap-4">
                <i class="fa-brands fa-facebook text-blue-500 fa-lg"></i>
                <strong class="font-medium">Facebook</strong>
            </div>

            <div class="flex items-center gap-4">
                <i class="fa-brands fa-google text-fuchsia-500 fa-lg"></i>
                <strong class="font-medium">Google</strong>
            </div>

            <div class="flex items-center gap-4">
                <i class="fa-brands fa-instagram text-red-500 fa-lg"></i>
                <strong class="font-medium">Instagran</strong>
            </div>

            <div class="flex items-center gap-4">
                <i class="fa-brands fa-microsoft text-blue-500 fa-lg"></i>
                <strong class="font-medium">Microsift</strong>
            </div>

            <div class="flex items-center gap-4">
                <i class="fa-brands fa-google-play text-green-500 fa-lg"></i>
                <strong class="font-medium">Pay Store</strong>
            </div>
        </div>
    </div>
</section>

<section class="bg-c-main">
    <div
        class="container mx-auto py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24"
    >
        <div
            class="flex flex-col lg:w-[60%] items-center text-center gap-4 sm:gap-6 max-w-4xl mx-auto px-4"
        >
            <!-- Title -->
            <h2
                class="font-poppins font-bold text-[48px] leading-[100%] tracking-[-0.02em] text-white text-center"
            >
                Get Your Free Roadmap
            </h2>

            <!-- Description -->
            <p
                class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-white text-center max-w-prose"
            >
                Learn Exactly what skills to build Understand job roles and
                industry demand Start with Zero experience
            </p>

            <!-- Input Fields Row -->
            <div class="flex flex-col sm:flex-row gap-4 w-full max-w-lg mt-6">
                <!-- Email with icon -->
                <div class="flex-1 relative">
                    <div
                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"
                    >
                        <i class="fas fa-envelope text-gray-400"></i>
                    </div>
                    <input
                        type="email"
                        placeholder="Enter your email"
                        class="w-full pl-10 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-c-main"
                    />
                </div>

                <!-- Category dropdown -->
                <select
                    class="flex-1 px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-c-main bg-white"
                >
                    <option disabled selected>Select category</option>
                    <option>Digital Marketing</option>
                    <option>SEO</option>
                    <option>Content Writing</option>
                    <option>Web Development</option>
                </select>
            </div>

            <!-- Checkbox Section -->
            <div class="flex gap-4 mt-4 w-full sm:w-[80%]">
                <input
                    type="checkbox"
                    id="consent"
                    class="flex-shrink-0 w-5 h-5 mt-1 sm:mt-0 bg-none rounded focus:ring-c-main border-gray-300"
                />
                <label
                    for="consent"
                    class="text-sm text-white font-light text-left"
                >
                    By submitting, you agree to receive occasional career tips
                    and roadmap updates from CareerIntoIT. You can unsubscribe
                    anytime. Your information is safe and will never be shared.
                </label>
            </div>

            <!-- CTA Button -->
            <button
                class="bg-black hover:bg-gray-900 text-white rounded-[16px] px-4 py-[14px] mt-10 w-[240px] h-[56px] font-medium transition-colors duration-300"
            >
                Get Roadmap
            </button>
        </div>
    </div>
</section>

<section class="bg-b-main">
    <div
        class="container mx-auto px-4 md:px-0 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24"
    >
        <div
            class="flex flex-col gap-4 sm:gap-6 lg:flex-row lg:justify-between lg:gap-12 pb-8 md:pb-10 lg:pb-16 xl:pb-20 2xl:pb-24"
        >
            <h2
                class="font-poppins font-medium text-[36px] text-t-first leading-[48px] tracking-[-0.02em] lg:w-[40%]"
            >
                Build on Real Experience, Backed by Industry Insight
            </h2>
            <p
                class="font-roboto font-light text-t-second text-[20px] leading-[30px] tracking-[0.02em] text-gray-600 max-w-prose lg:w-[50%]"
            >
                You're not just reading another blog — you're stepping into a
                platform built by someone who's walked the same path.
                <br /><br />
                Whether it's SEO, digital marketing, or starting a tech career,
                our content is built on real projects, tested strategies, and
                what hiring managers are looking for in today's job market.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 p-4 md:p-0">
            <!-- Left Column (smaller) -->
            <div
                class="bg-[#a6aef2] rounded-xl overflow-hidden flex flex-col relative"
            >
                <!-- Image container with optimized height -->
                <div
                    class="w-full pt-8 pb-0 h-[280px] sm:h-[350px] lg:h-[400px] xl:h-[480px] overflow-hidden relative"
                >
                    <img
                        src="{{ asset('assets/graphics/one.png') }}"
                        alt="Case study illustration"
                        class="w-full h-full object-cover"
                        width="488"
                        height="500"
                        loading="lazy"
                        decoding="async"
                    />
                </div>

                <!-- Text content -->
                <div class="p-4 md:p-6 lg:px-8 lg:pb-8 flex flex-col">
                    <h3 class="text-lg text-t-first md:text-xl font-bold mb-2 md:mb-3">
                        We Share Real Case Studies, Not Just Theories
                    </h3>
                    <p class="text-sm text-t-first md:text-base font-light">
                        See how digital strategies are applied in real business
                        settings from growing website traffic to converting
                        leads into paying customers.
                    </p>
                </div>
            </div>

            <!-- Right Column (larger - takes 2/3 space) -->
            <div class="lg:col-span-2 space-y-4 md:space-y-6">
                <!-- First Section - Full width text -->
                <div
                    class="bg-[#fdd8ce] rounded-xl overflow-hidden flex flex-col md:flex-row"
                >
                    <!-- Text content (left side) -->
                    <div
                        class="w-full md:w-1/2 p-4 md:p-6 lg:p-8 flex flex-col justify-center"
                    >
                        <h3
                            class="text-xl md:text-2xl font-bold text-t-first mb-2 md:mb-4"
                        >
                            Career Guidance That Starts Where You Are
                        </h3>
                        <p
                            class="text-sm md:text-base text-t-first font-light"
                        >
                            Each roadmap is created using up-to-date job data,
                            salary trends, and hiring patterns from global
                            companies, so you know exactly what skills matter.
                        </p>
                    </div>

                    <!-- Image container (right side) -->
                    <div class="w-full md:w-1/2 h-[180px] md:h-auto">
                        <img
                            src="{{ asset('assets/graphics/three.png') }}"
                            alt="E-commerce growth chart"
                            class="w-full h-full object-cover"
                            width="406"
                            height="247"
                            loading="lazy"
                            decoding="async"
                        />
                    </div>
                </div>

                <!-- Second Section - 2-column grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <!-- Left Column - Text top, image bottom -->
                    <div
                        class="bg-[#d0edfb] rounded-xl overflow-hidden flex flex-col"
                    >
                        <div
                            class="px-4 pt-4 md:px-6 md:pt-6 lg:px-8 lg:pt-8 flex-1"
                        >
                            <h4
                                class="text-lg md:text-xl font-bold text-t-first mb-2"
                            >
                                No Sales Tricks or Hidden Funnels
                            </h4>
                            <p
                                class="text-sm md:text-base text-t-first font-light"
                            >
                                There's nothing to buy. No surprise paywalls.
                                Just honest, practical content designed to help
                                you grow your career.
                            </p>
                        </div>
                        <div class="w-full h-[150px] md:h-[180px] lg:h-[220px]">
                            <img
                                src="{{ asset('assets/graphics/four.png') }}"
                                alt="Content strategy results"
                                class="w-full h-full object-cover object-top"
                                width="500"
                                height="300"
                                loading="lazy"
                                decoding="async"
                            />
                        </div>
                    </div>

                    <!-- Right Column - Image top, text bottom -->
                    <div
                        class="bg-[#d1fae5] rounded-xl overflow-hidden flex flex-col"
                    >
                        <div class="w-full h-[150px] md:h-[180px] lg:h-[220px]">
                            <img
                                src="{{ asset('assets/graphics/two.png') }}"
                                alt="SEO optimization"
                                class="w-full h-full object-cover"
                                width="347"
                                height="317"
                                loading="lazy"
                                decoding="async"
                            />
                        </div>
                        <div
                            class="px-4 pb-4 pt-4 md:px-6 md:pb-6 md:pt-4 lg:px-8 lg:pt-6 lg:pb-8 flex-1"
                        >
                            <h4
                                class="text-lg md:text-xl font-bold text-t-first mb-2 md:mb-3"
                            >
                                Human Insight + Smart Tools
                            </h4>
                            <p
                                class="text-sm md:text-base text-t-first font-light"
                            >
                                We combine hands-on professional experience with
                                modern tools, including AI-driven skill analysis
                                and career mapping — so you're always learning
                                what's relevant.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="relative bg-cover bg-center" style="background-image: url('{{ asset('assets/face.png') }}')">
    <!-- Background overlay with lower opacity and proper z-index -->
    <div class="absolute inset-0 z-0 bg-gray-100/10"></div>

    <div class="container mx-auto px-4 md:px-0 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24 z-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center relative">
            <!-- Left Column -->
            <!-- <div class="rounded-xl h-[490px] w-full lg:col-span-1 overflow-visible">
                <div class="h-full w-full bg-c-main relative">
                    <img
                        src="{{ asset('assets/rohit.png') }}"
                        alt="Decorative element"
                        class="absolute top-0 w-[400px] h-[500px] object-contain"
                    />
                </div>
            </div> -->

            <div class="bg-c-main ml-8 h-[550px] w-[calc(100%-15px)] lg:col-span-1 overflow-hidden">
                <div class="absolute left-[-20px] h-[550px] w-[560px] py-10">
                    <img src="{{ asset('assets/rohit.png') }}" alt="Decorative element" class="h-full w-full object-contain">
                </div>
            </div>

            <!-- Right Column -->
            <div class="lg:col-span-2">
                <div class="ml-32">
                    <h2 class="font-poppins font-medium text-[36px] leading-[48px] tracking-[-0.02em] text-t-first mb-4">
                        Created by Someone Who's Been in Your Shoes
                    </h2>
                    <p class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-first mb-6">
                        CareerIntoIT is <span class="font-normal bg-[#e1c6bd]">founded by Rohit Rajput</span>, a digital marketing strategist with real-world experience in SEO, content, and growth campaigns. 
                        <br /><br />
                        Having worked with businesses across industries and mentored newcomers into tech, Rohit built this platform to make your career journey easier, clearer, and more focused — no matter where you're starting.
                    </p>
                    <button class="bg-c-main hover:bg-[#f85a2a] text-white font-semibold w-[233px] h-[56px] px-8 py-[14px] rounded-[16px] gap-2 relative z-20 transition-colors duration-300">
                        Meet Rohit Rajput
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div
        class="container mx-auto px-4 md:px-0 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24"
    >
        <div
            class="flex flex-col gap-4 sm:gap-6 lg:flex-row lg:justify-between lg:gap-12 pb-8 md:pb-10 lg:pb-16 xl:pb-20 2xl:pb-24"
        >
            <div class="lg:w-[40%]">
                <h2 class="font-poppins font-medium text-[36px] leading-[48px] tracking-[-0.02em] text-t-first">
                    Got any question
                </h2>
                <p class="font-roboto font-light text-[20px] leading-[27px] tracking-[0.02em] text-t-second mt-4">
                    We've helped hundreds of people who felt the same way. So before you decide, here are the answers to the most common questions — answered with honesty, not hype.
                </p>
            </div>


            <div class="text-sm md:text-base lg:text-lg xl:text-xl text-gray-600 font-light max-w-prose lg:w-[50%]">
                <!-- Accordion Item 1 -->
                <div class="overflow-hidden transition-all duration-300">
                    <input
                        type="checkbox"
                        id="accordion-1"
                        class="hidden peer"
                        checked
                    />
                    <label
                        for="accordion-1"
                        class="flex justify-between items-center p-5 cursor-pointer bg-gray-50 hover:bg-white transition-colors duration-200 peer-checked:bg-white peer-checked:text-c-main"
                    >
                    <h2 class="font-poppins font-medium text-[18px] leading-[28px] tracking-[0]">
                        Do I need experience or a tech background to start?
                    </h2>
                        <svg
                            class="w-6 h-6 text-gray-600 transition-all duration-300 transform peer-checked:rotate-180 peer-checked:text-c-main"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </label>
                    <div
                        class="overflow-hidden transition-all duration-300 max-h-0 peer-checked:max-h-96 peer-checked:bg-white"
                    >
                        <div class="p-5 pt-0 text-gray-600">
                            <p class="font-poppins font-light text-[16px] leading-[26px] tracking-[0.02em]">
                                Not at all. In fact, CareerIntoIT was built for people with no prior experience. Whether you're in retail, hospitality, or just out of uni, we'll help you understand exactly where to begin and what skills matter most.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="overflow-hidden transition-all duration-300">
                    <input
                        type="checkbox"
                        id="accordion-2"
                        class="hidden peer"
                    />
                    <label
                        for="accordion-2"
                        class="flex justify-between items-center p-5 cursor-pointer bg-gray-50 hover:bg-white transition-colors duration-200 peer-checked:bg-white peer-checked:text-c-main"
                    >
                        <h2 class="text-lg font-semibold text-gray-800">
                            How is this roadmap different from other free guides?
                        </h2>
                        <svg
                            class="w-6 h-6 text-gray-600 transition-all duration-300 transform peer-checked:rotate-180 peer-checked:text-c-main"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </label>
                    <div
                        class="overflow-hidden transition-all duration-300 max-h-0 peer-checked:max-h-96 peer-checked:bg-white"
                    >
                        <div class="p-5 pt-0 text-gray-600">
                            <p>
                                Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex
                                ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="overflow-hidden transition-all duration-300">
                    <input
                        type="checkbox"
                        id="accordion-3"
                        class="hidden peer"
                    />
                    <label
                        for="accordion-3"
                        class="flex justify-between items-center p-5 cursor-pointer bg-gray-50 hover:bg-white transition-colors duration-200 peer-checked:bg-white peer-checked:text-c-main"
                    >
                        <h2 class="text-lg font-semibold text-gray-800">
                            What if I'm already working or studying full-time?
                        </h2>
                        <svg
                            class="w-6 h-6 text-gray-600 transition-all duration-300 transform peer-checked:rotate-180 peer-checked:text-c-main"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </label>
                    <div
                        class="overflow-hidden transition-all duration-300 max-h-0 peer-checked:max-h-96 peer-checked:bg-white"
                    >
                        <div class="p-5 pt-0 text-gray-600">
                            <p>
                                Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 4 -->
                <div class="overflow-hidden transition-all duration-300">
                    <input
                        type="checkbox"
                        id="accordion-4"
                        class="hidden peer"
                    />
                    <label
                        for="accordion-4"
                        class="flex justify-between items-center p-5 cursor-pointer bg-gray-50 hover:bg-white transition-colors duration-200 peer-checked:bg-white peer-checked:text-c-main"
                    >
                        <h2 class="text-lg font-semibold text-gray-800">
                            I'm not sure which digital career is right for me. Can you help?
                        </h2>
                        <svg
                            class="w-6 h-6 text-gray-600 transition-all duration-300 transform peer-checked:rotate-180 peer-checked:text-c-main"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </label>
                    <div
                        class="overflow-hidden transition-all duration-300 max-h-0 peer-checked:max-h-96 peer-checked:bg-white"
                    >
                        <div class="p-5 pt-0 text-gray-600">
                            <p>
                                Duis aute irure dolor in reprehenderit in
                                voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="flex flex-col items-center justify-center min-h-screen">
    <div class="container mx-auto flex flex-row items-center gap-8 overflow-hidden relative"
        style="max-width: 1200px;" id="testimonial-slider">
    
    <!-- Main Slider -->
    <div class="slider-outer" id="slider-outer"
            onmouseenter="pauseAuto()" onmouseleave="resumeAuto()">
        <div class="slider-inner" id="slider-inner"></div>
    </div>
    
    <!-- Next Slides Preview -->
    <div class="flex flex-col items-center">
        <div class="flex gap-4" id="next-cards"></div>
    </div>
    </div>
    
    <!-- Navigation Arrows -->
    <div class="container mx-auto flex gap-4 mt-6 justify-end w-full" style="max-width:1200px;">
    <button onclick="prevSlide()"
            class="px-4 py-2 rounded-full border border-orange-400 text-orange-400 hover:bg-orange-50 transition-all duration-300">
        &larr;
    </button>
    <button onclick="nextSlide()"
            class="px-4 py-2 rounded-full border border-orange-400 text-orange-400 hover:bg-orange-50 transition-all duration-300">
        &rarr;
    </button>
    </div>
</section>

@endsection @section('scripts')

<script>
    document
        .querySelectorAll('.accordion input[type="checkbox"]')
        .forEach((checkbox) => {
            checkbox.addEventListener("change", function () {
                if (this.checked) {
                    // Uncheck all other accordions
                    document
                        .querySelectorAll('.accordion input[type="checkbox"]')
                        .forEach((otherCheckbox) => {
                            if (otherCheckbox !== this) {
                                otherCheckbox.checked = false;
                            }
                        });
                }
            });
        });
</script>

<script>
      // Testimonial data
      const testimonials = [
        {
          img: "{{ asset('assets/run.jpeg') }}",
          text: "“I used to think SEO was just about keywords — now I've helped my cousin's business rank on Google. This roadmap made it click for me.”",
          author: "Nishant, First-Year Uni Student"
        },
        {
          img: "{{ asset('assets/run.jpeg') }}",
          text: "“Slider testimonial 2 here. Add more user quotes as you like.”",
          author: "Other Student"
        },
        {
          img: "{{ asset('assets/run.jpeg') }}",
          text: "“Slider testimonial 3 here. More content as needed.”",
          author: "Another User"
        }
      ];

      // Slider state
      let current = 0;
      let sliding = false;
      let auto = null;
      let autoOn = true;

      // Helper function to get circular index
      function getIdx(idx) {
        return (idx + testimonials.length) % testimonials.length;
      }

      // Render slides with smooth transitions
      function renderSlides(immediate = false) {
        const prev = getIdx(current - 1);
        const curr = current;
        const next = getIdx(current + 1);

        const sliderInner = document.getElementById('slider-inner');
        
        // Create slides with different states
        sliderInner.innerHTML = `
          ${[prev, curr, next].map((i, idx) => `
            <div class="slide-card">
              <img src="${testimonials[i].img}" alt="User ${idx+1}"
                   class="w-32 h-32 rounded-lg object-cover mr-6 transition-all duration-500 ${
                     idx === 1 ? 'grayscale-0 scale-105 ring-4 ring-purple-200' : 'grayscale scale-95 ring-0'
                   }" />
              <div>
                <p class="font-semibold mb-2 transition-all duration-500 ${
                  idx === 1 ? 'text-gray-800' : 'text-gray-500'
                }">${testimonials[i].text}</p>
                <span class="italic text-sm transition-all duration-500 ${
                  idx === 1 ? 'text-gray-600' : 'text-gray-400'
                }">${testimonials[i].author}</span>
              </div>
            </div>
          `).join('')}
        `;
        
        // Immediate positioning (no animation)
        if (immediate) {
          sliderInner.style.transition = 'none';
          sliderInner.style.transform = 'translateX(-830px)';
          setTimeout(() => {
            sliderInner.style.transition = 'transform 0.8s cubic-bezier(0.22, 1, 0.36, 1)';
          }, 10);
        } else {
          sliderInner.style.transform = 'translateX(-800px)';
        }

        // Update next cards with smooth transition
        updateNextCards();
      }

      // Animate next cards with fade effect
      function updateNextCards() {
        const nextCards = document.getElementById('next-cards');
        const next1 = getIdx(current + 1);
        const next2 = getIdx(current + 2);
        
        // Fade out existing cards
        if (nextCards.children.length > 0) {
          Array.from(nextCards.children).forEach(child => {
            child.classList.add('fade-out');
          });
          
          // Wait for fade out before updating content
          setTimeout(() => {
            nextCards.innerHTML = `
              <div class="bg-white rounded-xl w-[175px] h-[175px] flex items-center justify-center shadow-md grayscale next-slide fade-out">
                <img src="${testimonials[next1].img}" alt="Next 1" class="w-full h-full object-cover rounded-lg" />
              </div>
              <div class="bg-white rounded-xl w-[175px] h-[175px] flex items-center justify-center shadow-md grayscale next-slide fade-out">
                <img src="${testimonials[next2].img}" alt="Next 2" class="w-full h-full object-cover rounded-lg" />
              </div>
            `;
            
            // Fade in new cards
            setTimeout(() => {
              Array.from(nextCards.children).forEach(child => {
                child.classList.remove('fade-out');
                child.classList.add('fade-in');
              });
            }, 20);
          }, 300);
        } else {
          // Initial load
          nextCards.innerHTML = `
            <div class="bg-white rounded-xl w-[175px] h-[175px] flex items-center justify-center shadow-md grayscale next-slide fade-in">
              <img src="${testimonials[next1].img}" alt="Next 1" class="w-full h-full object-cover rounded-lg" />
            </div>
            <div class="bg-white rounded-xl w-[175px] h-[175px] flex items-center justify-center shadow-md grayscale next-slide fade-in">
              <img src="${testimonials[next2].img}" alt="Next 2" class="w-full h-full object-cover rounded-lg" />
            </div>
          `;
        }
      }

      // Animate slider movement
      function animate(dir) {
        if (sliding) return;
        sliding = true;
        
        const sliderInner = document.getElementById('slider-inner');
        sliderInner.style.transform = `translateX(${dir === 1 ? -1600 : 0}px)`;
        
        setTimeout(() => {
          current = getIdx(current + dir);
          renderSlides(true);
          sliding = false;
        }, 800);
      }

      // Navigation functions
      function nextSlide() { animate(1); }
      function prevSlide() { animate(-1); }

      // Auto-play controls
      function startAuto() {
        stopAuto();
        auto = setInterval(() => {
          if (document.hasFocus() && autoOn) nextSlide();
        }, 4000);
      }
      function stopAuto() { clearInterval(auto); }
      function pauseAuto() { autoOn = false; stopAuto(); }
      function resumeAuto() { autoOn = true; startAuto(); }

      // Initialize slider
      document.addEventListener('DOMContentLoaded', () => {
        renderSlides(true);
        startAuto();
      });
    </script>

@endsection
