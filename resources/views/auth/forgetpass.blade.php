@extends('auth')

@section('title')
forget password
@endsection

@section('content')


<section class="bg-b-main font-roboto min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md p-8 bg-white rounded-xl shadow-md">
    <!-- Logo & Title -->
    <div class="flex flex-col items-center mb-8">
      <img src="{{ asset('assets/graphics/Logomark.png') }}" alt="CareerIt Logo" class="w-16 h-16 mb-2" />
      <h1 class="text-2xl font-bold text-t-first">Forgot Password</h1>
      <p class="text-sm text-t-second mt-2 text-center">Enter your email and we’ll send you a password reset link.</p>
    </div>

    <!-- Forgot Password Form -->
    <form action="#" method="POST" class="space-y-6">
      <div>
        <label for="email" class="block text-sm font-medium text-t-second">Email address</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
          placeholder="you@example.com"
        />
      </div>

      <button
        type="submit"
        class="w-full py-2 px-4 bg-c-main text-white font-semibold rounded-md hover:bg-opacity-90 transition"
      >
        Send Reset Link
      </button>
    </form>

    <p class="mt-6 text-center text-sm text-t-second">
      Remember your password?
      <a href="{{ route('login') }}" class="text-c-main font-medium hover:underline">Sign in</a>
    </p>
  </div>
</section>


@endsection