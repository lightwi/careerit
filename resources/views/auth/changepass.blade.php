@extends('auth')

@section('title')
change password
@endsection

@section('content')


<section class="bg-b-main font-roboto min-h-screen flex items-center justify-center">
  <div class="w-full max-w-md p-8 bg-white rounded-xl shadow-md">
    <!-- Logo & Title -->
    <div class="flex flex-col items-center mb-8">
      <img src="{{ asset('assets/graphics/Logomark.png') }}" alt="CareerIt Logo" class="w-16 h-16 mb-2" />
      <h1 class="text-2xl font-bold text-t-first">Reset Password</h1>
      <p class="text-sm text-t-second mt-2 text-center">Create a new password for your account.</p>
    </div>

    <!-- Change Password Form -->
    <form action="#" method="POST" class="space-y-6">
      <div>
        <label for="new-password" class="block text-sm font-medium text-t-second">New Password</label>
        <input
          type="password"
          id="new-password"
          name="new_password"
          required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
          placeholder="••••••••"
        />
      </div>

      <div>
        <label for="confirm-password" class="block text-sm font-medium text-t-second">Confirm Password</label>
        <input
          type="password"
          id="confirm-password"
          name="confirm_password"
          required
          class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-c-main"
          placeholder="••••••••"
        />
      </div>

      <button
        type="submit"
        class="w-full py-2 px-4 bg-c-main text-white font-semibold rounded-md hover:bg-opacity-90 transition"
      >
        Change Password
      </button>
    </form>

    <p class="mt-6 text-center text-sm text-t-second">
      Already changed it?
      <a href="{{ route('login') }}" class="text-c-main font-medium hover:underline">Sign in</a>
    </p>
  </div>
</section>


@endsection