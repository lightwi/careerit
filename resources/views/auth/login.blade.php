@extends('auth')

@section('title')
login
@endsection

@section('content')


<section class="bg-b-main font-roboto min-h-screen flex items-center justify-center">

<div class="w-full max-w-md p-8 bg-white rounded-xl shadow-md">
      <!-- Logo & Title -->
      <div class="flex flex-col items-center mb-8">
        <img src="{{ asset('assets/graphics/Logomark.png') }}" alt="CareerIt Logo" class="w-16 h-16 mb-2" />
        <h1 class="text-2xl font-bold text-t-first">CareerIt</h1>
      </div>

      <!-- Login Form -->
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

        <div>
          <label for="password" class="block text-sm font-medium text-t-second">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            required
            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
            placeholder="••••••••"
          />
        </div>

        <div class="flex items-center justify-between">
          <label class="flex items-center">
            <input type="checkbox" class="form-checkbox text-c-main" />
            <span class="ml-2 text-sm text-t-second">Remember me</span>
          </label>
          <a href="#" class="text-sm text-c-main hover:underline">Forgot password?</a>
        </div>

        <button
          type="submit"
          class="w-full py-2 px-4 bg-c-main text-white font-semibold rounded-md hover:bg-opacity-90 transition"
        >
          Sign In
        </button>
      </form>

      <!-- Sign Up Link -->
      <p class="mt-6 text-center text-sm text-t-second">
        Don’t have an account?
        <a href="{{ route('signup') }}" class="text-c-main font-medium hover:underline">Sign up</a>
      </p>
    </div>

</section>

@endsection