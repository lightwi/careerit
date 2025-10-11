@extends('app')

@section('title')
Contact
@endsection

@section('content')

<!-- hero section -->
<section class="relative md:min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('assets/contacthero.jpg') }}');">
  <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/78 to-black/10"></div>

  <div class="relative z-10 container mx-auto h-full py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mt-8 sm:mt-12 lg:mt-16">
      <p class="text-c-main font-normal text-sm sm:text-base leading-none tracking-[1.28px] mb-2 sm:mb-4 font-roboto">
        Contact Us
      </p>

      <h1 class="font-medium text-3xl sm:text-4xl md:text-5xl lg:text-[60px] text-white leading-tight sm:leading-[1.2] lg:leading-[70px] tracking-[-0.5px] lg:tracking-[-0.9px] mb-4 font-poppins">
        Work With Rohit Rajput<br>
        <span class="text-c-main">SEO & Local SEO</span> Expert<br> in Adelaide
      </h1>

      <p class="font-light text-base sm:text-lg lg:text-[20px] leading-relaxed sm:leading-[1.5] lg:leading-[30px] tracking-[0.2px] lg:tracking-[0.4px] font-roboto text-white mb-6 sm:mb-8">
        No fake promises. No scattergun services. I only do SEO. If you're ready to get more calls, rank higher on Google, and grow with confidence — let's talk.
      </p>
      
      <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
        <a href="#"
            class="font-roboto bg-c-main text-sm sm:text-base hover:bg-[#E1663C] text-white rounded-2xl w-full sm:w-auto md:w-[210px] h-12 sm:h-14 px-4 py-3 gap-2 flex items-center justify-center transition-colors duration-300">
            Start Quiz
        </a>

        <a href="#" class="font-roboto bg-white text-sm sm:text-base hover:bg-gray-200 text-black rounded-2xl w-full sm:w-auto md:w-[226px] h-12 sm:h-14 px-4 py-3 flex items-center justify-center gap-2 transition-colors duration-300">
          Contact me
          <i class="fa-solid fa-phone-volume"></i>
        </a>
      </div>
    </div>
  </div>
</section>


<section class="px-4 md:px-0 bg-gradient-to-br from-[#FFCF71]/10 to-[#2376DD]/10 autoflow">

  <div class="container text-center mx-auto py-6 sm:py-10 lg:py-16 xl:py-20 2xl:py-24">
    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Showcase of My Work</span>
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
      Trusted by local businesses in Adelaide
    </h2>

    <div class="flex flex-col md:flex-row justify-center items-center gap-10">

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

<!-- company section -->
<section class="bg-white px-4 md:px-0 autoflow">
  <div class="container mx-auto py-4 sm:py-6 lg:py-8 xl:py-16 2xl:py-20">

    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Case Study</span>
    <h2 class="font-poppins font-medium text-t-first text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-12">
      Mini case-study highlights
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-4">

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
  <div class="container mx-auto flex flex-col px-4">
    <!-- Header -->
    <span class="font-roboto font-normal text-sm leading-5 tracking-wide text-c-main w-full md:w-fit">Testimonials</span>
    <h2 class="font-poppins font-medium text-t-first text-[28px] md:text-[36px] leading-[100%] tracking-[-4%] mt-4 mb-8">
      What my client say
    </h2>

    <!-- Testimonial Section -->
    <div class="flex flex-col lg:flex-row w-full p-4 gap-6 rounded-lg">
      <!-- Left Main Testimonial -->
      <div id="main" class="flex flex-col sm:flex-row items-center sm:items-center gap-4 w-full lg:w-[70%] transition-all duration-700">
        <!-- Logo -->
        <div class="w-32 h-32 sm:w-44 sm:h-44 p-1 bg-white rounded-lg overflow-hidden flex items-center justify-center shadow-lg">
          <img
            id="main-img"
            src="https://via.placeholder.com/150x80"
            alt="Logo"
            class="h-full w-full object-contain"
          />
        </div>
        <!-- Text -->
        <div class="text-center md:text-left">
          <p id="main-text" class="text-gray-700 font-medium text-base md:text-lg"></p>
          <span id="main-name" class="block text-gray-500 italic text-sm mt-3"></span>
        </div>
      </div>

      <!-- Right Side Queue -->
      <div class="flex justify-center lg:justify-start w-full lg:w-auto">
        <div id="queue" class="flex flex-wrap gap-4 items-center justify-center min-h-[200px]"></div>
      </div>
    </div>

    <!-- Controls -->
    <div class="flex w-full justify-center lg:justify-end pt-6">
      <div class="flex gap-3">
        <button onclick="prevTestimonial()" class="border border-orange-300 rounded-full p-2 flex items-center hover:bg-orange-100 transition"><span>&#8592;</span></button>
        <button onclick="nextTestimonial()" class="border border-orange-300 rounded-full p-2 flex items-center hover:bg-orange-100 transition"><span>&#8594;</span></button>
      </div>
    </div>
  </div>
</section>




<!-- meet section section -->
<section class="relative bg-cover bg-center autoflow" style="background-image: url('{{ asset('assets/face.png') }}')">
  <!-- Background overlay -->
  <div class="absolute inset-0 z-0 bg-gray-100/10"></div>

  <div class="container mx-auto px-4 py-12 sm:py-16 md:py-20 lg:py-24 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">
      
      <!-- Left Column: Image Block -->
      <div class="relative bg-c-main h-[400px] sm:h-[500px] md:h-[550px] w-full lg:w-auto">
        <div class="absolute left-1/2 -translate-x-1/2 lg:left-[10px] lg:translate-x-0 h-full w-[90%] sm:w-[500px] md:w-[450px] py-10">
          <img src="{{ asset('assets/rohit.png') }}" alt="Decorative element" class="h-full w-full object-contain" />
        </div>
      </div>

      <!-- Right Column: Text Content -->
      <div class="lg:col-span-2">
        <div class="mt-6 lg:mt-0 lg:ml-16">
          <h2 class="font-poppins font-medium text-2xl sm:text-3xl md:text-[36px] leading-snug tracking-tight text-t-first mb-4">
            What My Clients Say
          </h2>
          <p class="font-roboto font-light text-base sm:text-lg md:text-[20px] leading-relaxed text-t-first mb-6">
            I'm 
            <span class="font-normal text-c-main">Rohit Rajput</span>, founder of CareerIntoIT. I don’t run ads, I don’t do websites, and I don’t try to be everything. I focus on one thing — SEO. From Local SEO (Google Business Profile) to full website optimisation, I’ve helped businesses across Adelaide rank higher, get more calls, and grow sustainably. <br><br>
            If you’re looking for shortcuts, I’m not your guy. If you want long-term SEO growth that actually works, you’re in the right place.
          </p>
          <button class="bg-c-main hover:bg-[#f85a2a] text-white font-semibold w-full sm:w-auto px-8 py-3 rounded-xl transition-colors duration-300">
            Meet Rohit Rajput <i class="fa-solid fa-arrow-right ml-2"></i>
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