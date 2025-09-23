@extends('app')

@section('title')
Contact
@endsection

@section('content')

<section class="relative min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('assets/contacthero.jpg') }}');">

<div class="absolute inset-0 [background-image:linear-gradient(79.78deg,rgba(0,0,0,0.8)_41.09%,rgba(0,0,0,0.781648)_43.19%,rgba(0,0,0,0.1)_98.85%)]"></div>

  <div class="relative z-10 container mx-auto h-full py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">
    <div class="max-w-2xl mt-16">
    <p class="text-c-main font-normal text-base leading-none tracking-[1.28px] mb-2 font-roboto mb-4">
        Contact Us
    </p>

    <h1 class="font-medium text-[60px] text-white leading-[70px] tracking-[-0.9px] mb-4 font-poppins">
        Work With Rohit Rajput<br>
        <span class="text-c-main">SEO & Local SEO</span> Expert<br> in Adelaide
    </h1>

      <p class="font-light text-[20px] leading-[30px] tracking-[0.4px] font-roboto text-white mb-8">
        No fake promises. No scattergun services. I only do SEO. If you’re ready to get more calls, rank higher on Google, and grow with confidence — let’s talk.
      </p>
      <div class="flex flex-col sm:flex-row gap-4">
        <a href="#"
            class="font-roboto bg-c-main text-base hover:bg-[#E1663C] text-white rounded-[16px] w-full md:w-[210px] h-[56px] px-[16px] py-[14px] gap-2 flex items-center justify-center">
            Start Quiz
        </a>

        <a href="#" class="font-roboto bg-white text-base hover:bg-gray-200 text-black rounded-[16px] w-full md:w-[226px] h-[56px] px-[16px] py-[14px] flex items-center justify-center gap-2">
          Contact me
          <i class="fa-solid fa-phone-volume"></i>
        </a>
      </div>
    </div>
  </div>
</section>


<section>

  <div class="container text-center mx-auto py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24">
    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Showcase of My Work</span>
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
      Trusted by local businesses in Adelaide
    </h2>

    <div class="flex justify-center items-center gap-10">

      <div class="py-[20px] px-[28px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/mcquei.png') }}" alt="" class="w-[130px] h-[50px] opacity-100">
      </div>

      <div class="py-[20px] px-[28px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/achievers.png') }}" alt="" class="w-[130px] h-[50px] opacity-100">
      </div>

      <div class="py-[20px] px-[28px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/bouree.png') }}" alt="" class="w-[130px] h-[50px] opacity-100">
      </div>

      <div class="py-[20px] px-[28px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/bouree.png') }}" alt="" class="w-[130px] h-[50px] opacity-100">
      </div>

      <div class="py-[20px] px-[28px] rounded-lg bg-white shadow-lg">
        <img src="{{ asset('assets/brands/bouree.png') }}" alt="" class="w-[130px] h-[50px] opacity-100">
      </div>

    </div>

</section>

<section class="bg-white">
  <div class="container mx-auto py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">

    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Case Study</span>
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
      Mini case-study highlights
    </h2>

    <div class="grid grid-cols-3 gap-6 mb-4">

      <div class="group rounded-lg border border-gray-200 px-8 py-8 bg-white hover:bg-c-main hover:shadow-lg transition-colors duration-300">
        <img src="{{ asset('assets/brands/achievers.png') }}" alt="" class="w-[130px] h-[50px] opacity-100">

        <h5 class="font-poppins font-medium text-[24px] text-t-first tracking-[-0.02em] leading-[100%] mt-16 group-hover:text-white transition-colors duration-300">
          Achievers College
        </h5>

        <p class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-first mt-2 group-hover:text-white transition-colors duration-300">
          <span class="font-bold text-[14px]">Ranked #1 </span> <br>
          For “First Aid Course Adelaide” within months
        </p>
      </div>

      <div class="group rounded-lg border border-gray-200 px-8 py-8 bg-white hover:bg-c-main hover:shadow-lg transition-colors duration-300">
        <img src="{{ asset('assets/brands/mcquei.png') }}" alt="" class="w-[130px] h-[50px] opacity-100">
        <h5 class="font-poppins font-medium text-[24px] text-t-first tracking-[-0.02em] leading-[100%] mt-16 group-hover:text-white transition-colors duration-300">
          India Junction
        </h5>
        <p class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-first mt-2 group-hover:text-white transition-colors duration-300">
          <span class="font-bold text-[14px]">Ranked #2 </span> <br>
          2x increase in Google Maps visibility in 60 days
        </p>
      </div>

      <div class="group rounded-lg border border-gray-200 px-8 py-8 bg-white hover:bg-c-main hover:shadow-lg transition-colors duration-300">
        <img src="{{ asset('assets/brands/bouree.png') }}" alt="" class="w-[130px] h-[50px] opacity-100">
        <h5 class="font-poppins font-medium text-[24px] text-t-first tracking-[-0.02em] leading-[100%] mt-16 group-hover:text-white transition-colors duration-300">
          McQuel Healthcare
        </h5>
        <p class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-first mt-2 group-hover:text-white transition-colors duration-300">
          <span class="font-bold text-[14px]">Ranked #3 </span> <br>
          65% increase in calls from Local SEO.
        </p>
      </div>

    </div>

  </div>
</section>


<!-- testimonials section -->
<section class="py-24 autoflow">
  <div class="container mx-auto flex flex-col">
    <!-- Header -->
    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Testimonials</span>
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-8">
      What my client say
    </h2>

    <!-- Testimonial Section -->
    <div class="flex w-full p-4 gap-6 rounded-lg">
      <!-- Left Main Testimonial -->
      <div id="main" class="flex items-center gap-4 w-[70%] transition-all duration-700">
        <!-- Fixed-size logo box without padding -->
        <div class="max-w-44 min-h-44 p-1 bg-white rounded-lg overflow-hidden flex items-center justify-center shadow-lg">
          <img
            id="main-img"
            src="https://via.placeholder.com/150x80"
            alt="Logo"
            class="h-full w-full object-contain"
          />
        </div>
        <div>
          <p id="main-text" class="text-gray-700 font-medium text-lg"></p>
          <span id="main-name" class="block text-gray-500 italic text-sm mt-3"></span>
        </div>
      </div>

      <!-- Right Side Queue -->
      <div class="flex items-center ml-16">
        <div id="queue" class="flex gap-4 justify-between items-center min-h-[200px]"></div>
      </div>
    </div>

    <!-- Controls -->
    <div class="flex w-full justify-end pt-3">
      <div class="flex gap-3">
        <button onclick="prevTestimonial()" class="border border-orange-300 rounded-full p-2 flex items-center hover:bg-orange-100 transition"><span>&#8592;</span></button>
        <button onclick="nextTestimonial()" class="border border-orange-300 rounded-full p-2 flex items-center hover:bg-orange-100 transition"><span>&#8594;</span></button>
      </div>
    </div>
  </div>
</section>



<!-- meet section section -->
<section class="relative bg-cover bg-center autoflow" style="background-image: url('{{ asset('assets/face.png') }}')">
  <!-- Background overlay with lower opacity and proper z-index -->
  <div class="absolute inset-0 z-0 bg-gray-100/10"></div>

  <div class="container mx-auto px-4 md:px-0 py-8 sm:py-10 md:py-12 lg:py-16 xl:py-20 2xl:py-24 z-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center relative">
      <!-- Left Column -->

      <div class="bg-c-main ml-8 h-[550px] w-[calc(100%-15px)] lg:col-span-1 overflow-hidden">
        <div class="absolute left-[-20px] h-[550px] w-[560px] py-10">
          <img src="{{ asset('assets/rohit.png') }}" alt="Decorative element" class="h-full w-full object-contain" />
        </div>
      </div>

      <!-- Right Column -->
      <div class="lg:col-span-2">
        <div class="ml-32">
          <h2 class="font-poppins font-medium text-[36px] leading-[48px] tracking-[-0.02em] text-t-first mb-4">
            What My Clients Say
          </h2>
          <p class="font-roboto font-light text-[20px] leading-[30px] tracking-[0.02em] text-t-first mb-6">
            I'm 
            <span class="font-normal text-c-main">Rohit Rajput</span>, founder of CareerIntoIT. I don’t run ads, I don’t do websites, and I don’t try to be everything. I focus on one thing — SEO. From Local SEO (Google Business Profile) to full website optimisation, I’ve helped businesses across Adelaide rank higher, get more calls, and grow sustainably. <br> <br>
            If you’re looking for shortcuts, I’m not your guy. If you want long-term SEO growth that actually works, you’re in the right place.
          </p>
          <button
            class="bg-c-main hover:bg-[#f85a2a] text-white font-semibold w-[233px] h-[56px] px-8 py-[14px] rounded-[16px] gap-2 relative z-20 transition-colors duration-300">
            Meet Rohit Rajput <i class="fa-solid fa-arrow-right"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>


@include('includes.qa')

@include('includes.askquestion')


@endsection



@push('scripts')

<script>
const testimonials = [
  {
    img: "{{ asset('assets/brands/achievers.png') }}",
    text: `“CareerIntoIT helped us appear on Google Maps and boosted our calls. Rohit’s approach is practical and transparent."`,
    name: "Nishant, First-Year Uni Student",
  },
  {
    img: "{{ asset('assets/brands/mcquei.png') }}",
    text: `"CareerIntoIT helped us appear on Google Maps and boosted our calls. Rohit’s approach is practical and transparent."`,
    name: "Rohan, Business Student",
  },
  {
    img: "{{ asset('assets/brands/bouree.png') }}",
    text: `"CareerIntoIT helped us appear on Google Maps and boosted our calls. Rohit’s approach is practical and transparent."`,
    name: "Priya, Marketing Intern",
  }
];

let current = 0;

function animateTestimonial(next) {
  document.getElementById('main-img').src = testimonials[next].img;
  document.getElementById('main-text').innerText = testimonials[next].text;
  document.getElementById('main-name').innerText = testimonials[next].name;
}

function updateQueue(next) {
  let q1 = (next + 1) % testimonials.length;
  let q2 = (next + 2) % testimonials.length;
  const queueDiv = document.getElementById('queue');
  queueDiv.innerHTML = `
    <div class="max-w-32 min-h-32 bg-gray-200 flex justify-center items-center p-1 rounded-lg">
    <img src="${testimonials[q1].img}" class="h-full w-full object-contain rounded-md grayscale bg-gray-200" /></div>
    <div class="max-w-32 min-h-32 bg-gray-200 flex justify-center items-center p-1 rounded-lg">
    <img src="${testimonials[q2].img}" class="h-full w-full object-contain rounded-md grayscale bg-gray-200" /></div>
  `;
}

function nextTestimonial() {
  let next = (current + 1) % testimonials.length;
  animateTestimonial(next);
  updateQueue(next);
  current = next;
}

function prevTestimonial() {
  let next = (current - 1 + testimonials.length) % testimonials.length;
  animateTestimonial(next);
  updateQueue(next);
  current = next;
}

// Initial setup
function setInitial() {
  animateTestimonial(current);
  updateQueue(current);
}

setInitial();
setInterval(nextTestimonial, 4000);
</script>

@endpush