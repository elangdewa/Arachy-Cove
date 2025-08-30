@extends('layouts.app')
@include('layouts.header')
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
            <div class="relative z-10 h-full flex flex-col justify-center items-center p-16 text-white">
                <div class="text-center max-w-xl animate-fadeInUp">
                    <h1 class="text-5xl lg:text-7xl font-light mb-8 tracking-tight">
                        <span class="block font-black">Join Us</span>
                        <span class="block">Today</span>
                    </h1>
                    <p class="text-lg font-light leading-relaxed opacity-90 mb-12">
                        Create your account and start your journey with us.
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side - Register Form -->
       <div class="flex-1 bg-white flex items-center justify-center p-8 lg:p-16">
    <div class="w-full max-w-4xl animate-fadeInUp">
        <h2 class="text-4xl font-light text-black mb-2">Create Account</h2>
        <p class="text-gray-600 font-light mb-8">Fill in your details to register</p>

        <form method="POST" action="{{ route('register') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left Column -->
                <div class="space-y-6">
                    <!-- Name Input -->
                    <div class="space-y-2">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            :value="old('name')"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200"
                            required
                            autofocus
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Input -->
                    <div class="space-y-2">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            :value="old('email')"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200"
                            required
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Phone Input -->
                    <div class="space-y-2">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input
                            type="tel"
                            name="phone"
                            id="phone"
                            :value="old('phone')"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200"
                        />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-6">
                    <!-- Address Input -->
                    <div class="space-y-2">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <input
                            name="address"
                            id="address"
                            rows="3"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200"
                        >{{ old('address') }}</input>
                        <x-input-error :messages="$errors->get('address')" class="mt-2" />
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
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="space-y-2">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-black focus:border-transparent transition-all duration-200"
                            required
                        />
                    </div>
                </div>
            </div>

            <!-- Register Button - Full Width -->
            <div class="mt-8">
                <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded-xl font-light uppercase tracking-[0.2em] hover:bg-gray-900 transition-all duration-300 group">
                    <span class="group-hover:tracking-[0.3em] transition-all duration-300">Register</span>
                </button>
            </div>
        </form>

        <!-- Sign In Link -->
        <p class="mt-8 text-center text-sm text-gray-600">
            Already have an account?
            <a href="{{ route('login') }}" class="text-black hover:underline font-medium">
                Sign in here
            </a>
        </p>
    </div>
</div>
    </div>
</body>
@endsection
