@extends('app')

@section('title')
About
@endsection

@section('content')


<section class="bg-gray-100 px-4 md:px-0">
<!-- Navbar -->
<nav class="container font-roboto text-[14px] font-normal mx-auto flex items-center justify-between py-2 sm:py-4 md:py-6 lg:py-6 xl:py-8 2xl:py-10">
    <div class="flex space-x-4 overflow-auto">
      <a class="px-4 py-2 hover:bg-c-main hover:text-white hover:rounded-md">All Blogs</a>
      <a class="px-4 py-2 hover:bg-c-main hover:text-white hover:rounded-md">Product</a>
      <a class="px-4 py-2 hover:bg-c-main hover:text-white hover:rounded-md">Sales</a>
      <a class="px-4 py-2 hover:bg-c-main hover:text-white hover:rounded-md">Business</a>
      <a class="px-4 py-2 hover:bg-c-main hover:text-white hover:rounded-md">CRM</a>
      <a class="px-4 py-2 hover:bg-c-main hover:text-white hover:rounded-md">Marketing</a>
      <a class="px-4 py-2 hover:bg-c-main hover:text-white hover:rounded-md">Culture</a>
      <a class="px-4 py-2 hover:bg-c-main hover:text-white hover:rounded-md">Webinars</a>
    </div>
    <div>
    <input
        type="text"
        placeholder="Search blog post"
        class="w-[350px] border px-4 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
        />
    </div>
  </nav>
</section>


<section class="text-gray-800 font-sans">

  <!-- Latest Blogs Section -->
  <section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
    <h2 class="font-poppins font-semibold text-[24px] leading-[32px] tracking-normal">Latest blogs</h2>
      <a href="#" class="text-orange-500">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Featured Blog -->
      <div class="md:col-span-2 bg-white">
        <img src="https://plus.unsplash.com/premium_photo-1757351762793-5cf21dd27f60?q=80&w=895&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Featured Blog" class="rounded w-full h-[350px] object-cover" />
        <div class="p-4">
            <div class="flex justify-between items-center">
                <p class="font-roboto font-normal text-[14px] text-c-main tracking-wider mt-4">Product</p>
                <p class="text-sm text-gray-600 mt-1 tracking-wider">7 Mins Read</p>
            </div>
            <h3 class="font-poppins font-medium text-t-main text-[20px] leading-[28px] tracking-wider mt-2">
                How collaboration makes us better designers?
            </h3>
            
            <p class="mt-2 font-roboto font-normal text-[14px] text-[#545669] tracking-wider text-gray-700">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
            <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <!-- Side Blogs -->
      <div class="flex flex-col space-y-4">
        <!-- Blog Card -->
        <div class="flex gap-4 p-2.5 bg-white">
          <img src="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?auto=format&fit=crop&w=300&q=80" alt="" class="w-24 h-24 rounded object-cover" />
          <div>
            <p class="text-sm text-c-main tracking-wide">Marketing • 7 Mins Read</p>
            <h4 class="font-medium tracking-wide">How collaboration makes us better designers ?</h4>
            <a href="#" class="text-t-first text-sm">Read More →</a>
          </div>
        </div>

        <div class="flex gap-4 p-2.5 bg-white">
          <img src="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?auto=format&fit=crop&w=300&q=80" alt="" class="w-24 h-24 rounded object-cover" />
          <div>
            <p class="text-sm text-c-main tracking-wide">Marketing • 7 Mins Read</p>
            <h4 class="font-medium tracking-wide">How collaboration makes us better designers ?</h4>
            <a href="#" class="text-t-first text-sm">Read More →</a>
          </div>
        </div>

        <div class="flex gap-4 p-2.5 bg-white">
          <img src="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?auto=format&fit=crop&w=300&q=80" alt="" class="w-24 h-24 rounded object-cover" />
          <div>
            <p class="text-sm text-c-main tracking-wide">Marketing • 7 Mins Read</p>
            <h4 class="font-medium tracking-wide">How collaboration makes us better designers ?</h4>
            <a href="#" class="text-t-first text-sm">Read More →</a>
          </div>
        </div>

        <div class="flex gap-4 p-2.5 bg-white">
          <img src="https://images.unsplash.com/photo-1537498425277-c283d32ef9db?auto=format&fit=crop&w=300&q=80" alt="" class="w-24 h-24 rounded object-cover" />
          <div>
            <p class="text-sm text-c-main tracking-wide">Marketing • 7 Mins Read</p>
            <h4 class="font-medium tracking-wide">How collaboration makes us better designers ?</h4>
            <a href="#" class="text-t-first text-sm">Read More →</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Marketing Section -->
  <section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold">Marketing</h2>
      <a href="#" class="text-orange-500">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Blog Card -->
      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Marketing</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Marketing</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Marketing</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>


    </div>
  </section>


  <!-- CRM Section -->
  <section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold">CRM</h2>
      <a href="#" class="text-orange-500">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Blog Card -->
      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">CRM</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">CRM</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">CRM</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>


    </div>
  </section>


  <!-- Product Section -->
  <section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold">Product</h2>
      <a href="#" class="text-orange-500">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Blog Card -->
      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Product</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Product</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Product</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>


    </div>
  </section>


  <!-- Sales Section -->
  <section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold">Sales</h2>
      <a href="#" class="text-orange-500">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Blog Card -->
      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Sales</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Sales</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Sales</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>


    </div>
  </section>

  <!-- Business Section -->
  <section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold">Business</h2>
      <a href="#" class="text-orange-500">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Blog Card -->
      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Business</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Business</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Business</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>


    </div>
  </section>

  <!-- Culture Section -->
  <section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold">Culture</h2>
      <a href="#" class="text-orange-500">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Blog Card -->
      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Culture</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Culture</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Culture</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>


    </div>
  </section>


  <!-- Webinar Section -->
  <section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold">Webinar</h2>
      <a href="#" class="text-orange-500">View all →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Blog Card -->
      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Webinar</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Webinar</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>

      <div class="hover:shadow-lg">
        <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="" class="rounded w-full h-[215px] object-cover" />
        <div class="p-4 bg-white">
          <div class="flex justify-between items-center">
              <p class="font-roboto font-normal text-[14px] text-c-main tracking-wide mt-4">Webinar</p>
              <p class="text-sm text-gray-600 tracking-wide mt-1">7 Mins Read</p>
          </div>
          <h3 class="font-poppins text-[20px] font-semibold mt-2 tracking-wide">How collaboration makes us better designers ?</h3>
          <p class="mt-2 font-roboto text-[14px] text-gray-700 tracking-wide">How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          <a href="#" class="text-t-first text-sm mt-2 inline-block">Read More →</a>
        </div>
      </div>


    </div>
  </section>

</section>



@endsection