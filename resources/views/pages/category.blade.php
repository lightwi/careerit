@extends('app')

@section('title')
Category
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

<section class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12 autoflow">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold">Marketing</h2>
      <p class="text-sm">Posts (125)</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    @for ($i = 1; $i <= 20; $i++)
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

    @endfor

    </div>
  </section>

</section>



@endsection