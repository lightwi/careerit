@extends('app')

@section('title')
Single Post
@endsection

@section('content')

<section class="">


  <!-- Main content -->
  <main class="container mx-auto px-4 md:px-0 py-4 sm:py-4 lg:py-6 xl:py-8 2xl:py-12">

    <a href="#" class="text-[16px] font-roboto font-medium">&larr; Back to all posts</a> <br>

    <!-- Metadata -->
    <div class="inline-block bg-white rounded-lg border border-gray-200 my-5">
      <div class="flex justify-start items-center gap-4 px-4 py-0.5">
        <span class="text-c-main font-roboto font-medium text-[12px]">Marketing</span>
        <span>&bull;</span>
        <span class="font-roboto font-medium text-[12px]">7 Min Read</span>
        <span>&bull;</span>
        <span class="font-roboto font-medium text-[12px]">March 12, 2025</span>
      </div>
    </div>


    <div class="max-w-5xl">
    <!-- Title -->
      <h1 class="text-5xl font-poppins font-semibold mb-4 leading-tight tracking-tight">
        Should I use email marketing for my small business?
      </h1>

      <!-- Subtitle -->
      <p class="text-lg font-roboto font-normal tracking-wide mb-6">
        Discover the benefits of email marketing for small businesses. Learn how it can boost customer engagement, drive sales, and grow your brand effectively.
      </p>
    </div>

    <!-- Image -->
    <div class="mb-8">
      <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" alt="Gmail marketing image" class="w-full rounded-lg w-full h-[500px] shadow object-cover" />
    </div>

    <!-- Content Grid -->
    <div class="grid md:grid-cols-4 gap-10">
      
      <!-- Jump To Section (Sidebar) -->
      <aside class="md:col-span-1 hidden md:block">
        <h2 class="text-c-main font-roboto font-semibold mb-4 text-[18px]">Jump to section</h2>
        <ul class="space-y-2 text-sm text-blue-600">
          <li class="p-2 hover:bg-gray-300 text-black rounded-md font-roboto text-[16px]"><a href="#" class="">What is email marketing?</a></li>
          <li class="p-2 hover:bg-gray-300 text-black rounded-md font-roboto text-[16px]"><a href="#" class="">Why is email marketing important for small businesses?</a></li>
          <li class="p-2 hover:bg-gray-300 text-black rounded-md font-roboto text-[16px]"><a href="#" class="">Benefits of email marketing campaigns</a></li>
          <li class="p-2 hover:bg-gray-300 text-black rounded-md font-roboto text-[16px]"><a href="#" class="">Step-by-step guide</a></li>
          <li class="p-2 hover:bg-gray-300 text-black rounded-md font-roboto text-[16px]"><a href="#" class="">Wrapping up</a></li>
        </ul>
      </aside>

      <!-- Main Article -->
      <article class="md:col-span-2 space-y-6">
        <div>
          <h3 class="font-semibold text-lg mb-2">Small businesses are constantly seeking...</h3>
          <p class="text-gray-700">
            Small businesses are constantly seeking cost-effective ways to connect with their audience and drive growth. One often overlooked yet highly effective strategy is email marketing. It has a proven ability to generate a high return on investment, offering small businesses a direct, personalized way to engage customers, build loyalty, and boost sales.
          </p>
        </div>

        <div>
          <p class="text-gray-700">
            In this blog post, we’ll explore the ins and outs of email marketing, its benefits, and how you can implement a successful strategy to help your business grow.
          </p>
        </div>
      </article>

      <!-- Author Card -->
      <aside class="md:col-span-1 mt-10 md:mt-0 space-y-4">
        <div class="border border-gray-200 rounded-lg p-4 shadow-sm">
          <div class="flex items-center space-x-4">
            <img src="{{ asset('assets/run2.jpeg') }}" alt="Author avatar" class="w-12 h-12 rounded-full" />
            <div>
              <p class="text-sm font-semibold">Ella Hodkiewicz</p>
              <p class="text-xs text-gray-500">Sr. Content Engineer</p>
            </div>
          </div>
          <div class="mt-4">
            <label class="text-sm font-medium text-gray-700 block mb-2">Subscribe to our newsletter</label>
            <input type="email" placeholder="Enter your email" class="w-full px-3 py-2 border rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-orange-500" />
            <button class="w-full mt-2 bg-orange-500 text-white text-sm py-2 rounded hover:bg-orange-600">Subscribe</button>
          </div>
        </div>

        <div class="text-sm text-gray-500">
          <p>Share this post</p>
          <div class="flex space-x-4 mt-2">
            <a href="#" class="hover:text-blue-600">🔗</a>
            <a href="#" class="hover:text-blue-600">🐦</a>
            <a href="#" class="hover:text-blue-600">📘</a>
          </div>
        </div>
      </aside>

    </div>
  </main>

  <footer class="text-center text-xs text-gray-400 py-10">
    &copy; 2025 Your Company Name. All rights reserved.
  </footer>

</section>

@endsection