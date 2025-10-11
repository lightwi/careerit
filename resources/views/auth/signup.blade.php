@extends('auth')

@section('title')
Signup
@endsection

@section('content')


<section class="bg-b-main font-roboto min-h-screen flex items-center justify-center">

<div class="w-full max-w-md p-8 bg-white rounded-xl shadow-md">
      <!-- Logo & Title -->
      <div class="flex flex-col items-center mb-8">
        <img src="{{ asset('assets/graphics/Logomark.png') }}" alt="CareerIt Logo" class="w-16 h-16 mb-2" />
        <h1 class="text-2xl font-bold text-t-first">Create an Account</h1>
      </div>

      <!-- Sign Up Form -->
      <form action="#" method="POST" class="space-y-6">
        <div>
          <label for="name" class="block text-sm font-medium text-t-second">Full Name</label>
          <input
            type="text"
            id="name"
            name="name"
            required
            placeholder="John Doe"
            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
          />
        </div>

        <div>
          <label for="email" class="block text-sm font-medium text-t-second">Email address</label>
          <input
            type="email"
            id="email"
            name="email"
            required
            placeholder="you@example.com"
            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
          />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-t-second">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            required
            placeholder="Create a password"
            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
          />
        </div>

        <div>
          <label for="confirm-password" class="block text-sm font-medium text-t-second">Confirm Password</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            required
            placeholder="Repeat your password"
            class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
          />
        </div>

        <button
          type="submit"
          class="w-full py-2 px-4 bg-c-main text-white font-semibold rounded-md hover:bg-opacity-90 transition"
        >
          Create Account
        </button>
      </form>

      <!-- Sign In Link -->
      <p class="mt-6 text-center text-sm text-t-second">
        Already have an account?
        <a href="{{ route('login') }}" class="text-c-main font-medium hover:underline">Sign in</a>
      </p>
    </div>

</section>

@endsection