@extends('auth')

@section('title')
Verification
@endsection

@section('content')


<section class="bg-b-main font-roboto min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md p-8 bg-white rounded-xl shadow-md">
    <!-- Logo & Title -->
    <div class="flex flex-col items-center mb-8">
      <img src="{{ asset('assets/graphics/Logomark.png') }}" alt="CareerIt Logo" class="w-16 h-16 mb-2" />
      <h1 class="text-2xl font-bold text-t-first">Verify OTP</h1>
      <p class="text-sm text-t-second mt-2 text-center">
        Enter the 6-digit code we sent to your email.
      </p>
    </div>

    <!-- OTP Form -->
    <form action="#" method="POST" class="space-y-6">
      <div class="flex justify-between space-x-2">
        <input type="text" maxlength="1" class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-c-main focus:outline-none" />
        <input type="text" maxlength="1" class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-c-main focus:outline-none" />
        <input type="text" maxlength="1" class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-c-main focus:outline-none" />
        <input type="text" maxlength="1" class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-c-main focus:outline-none" />
        <input type="text" maxlength="1" class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-c-main focus:outline-none" />
        <input type="text" maxlength="1" class="w-12 h-12 text-center border border-gray-300 rounded-md focus:ring-2 focus:ring-c-main focus:outline-none" />
      </div>

      <button
        type="submit"
        class="w-full py-2 px-4 bg-c-main text-white font-semibold rounded-md hover:bg-opacity-90 transition"
      >
        Verify OTP
      </button>
    </form>

    <p class="mt-6 text-center text-sm text-t-second">
      Didn’t receive the code?
      <a href="#" class="text-c-main font-medium hover:underline">Resend</a>
    </p>
  </div>
</section>


@endsection