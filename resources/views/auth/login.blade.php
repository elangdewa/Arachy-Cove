@extends('layouts.app')
   @include( 'layouts.header')
   @section('content')

<body class="bg-black text-white overflow-x-hidden">
    <div class="flex h-screen">
        <!-- Left Side - Hero/Branding -->
        <div class="flex-1 relative overflow-hidden">
            <!-- Background Image -->
            <div class="absolute inset-0">
                <img src="{{ asset('images/Hero.png') }}" class="w-full h-full object-cover filter brightness-75" alt="Background">
            </div>

            <!-- Content Overlay -->
        </div>

        <!-- Right Side - Login Form -->
        <div class="flex-1 bg-white flex items-center justify-center p-16">
            <div class="w-full max-w-md animate-fadeInUp">
                <p class="text-gray-600 font-light mb-8">Enter your details to continue</p>

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200"
                            required
                            autofocus
                        />
                    </div>

                    <!-- Password Input -->
                    <div class="space-y-2">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200"
                            required
                        />
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input type="checkbox" name="remember" class="w-4 h-4 text-black rounded border-gray-300 focus:ring-black">
                            <span class="ml-2 text-sm text-gray-600">Remember me</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-black transition-colors">
                            Forgot password?
                        </a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded-xl font-light uppercase tracking-[0.2em] hover:bg-gray-900 transition-all duration-300 group">
                        <span class="group-hover:tracking-[0.3em] transition-all duration-300">Sign In</span>
                    </button>
                </form>

             


                <!-- Sign Up Link -->
                <p class="mt-8 text-center text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="text-black hover:underline font-medium">
                        Sign up now
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>
@endsection
