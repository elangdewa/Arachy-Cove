<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<nav class="fixed top-0 left-0 right-0 z-50 p-6 lg:p-8">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <!-- Logo -->
            <div class="animate-slideInLeft">

              <a href="/" class="text-2xl lg:text-3xl font-light tracking-[0.3em] uppercase">
    ARACHY<span class="font-black">COVE</span>
</a>
            </div>

            <div class="hidden md:flex items-center space-x-12 animate-fadeInDown delay-300">

        <a href="{{ route('collections') }}"
   class="text-sm font-light uppercase tracking-[0.2em] hover:text-gray-300 transition-colors duration-300 relative group">
  Collections
  <span class="absolute bottom-0 left-0 w-0 h-px bg-white transition-all duration-300 group-hover:w-full"></span>
</a>

                <!-- Auth Links -->
                <div class="flex items-center space-x-6 ml-8 pl-8 border-l border-white/20">
                    <a href="/login" class="text-sm font-light uppercase tracking-[0.2em] hover:text-gray-300 transition-colors duration-300 relative group">
                        Log in
                        <span class="absolute bottom-0 left-0 w-0 h-px bg-white transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="/register" class="px-6 py-2 border border-white text-sm font-light uppercase tracking-[0.2em] hover:bg-white hover:text-black transition-all duration-300 hover-lift">
                        Register
                    </a>
                </div>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="md:hidden animate-fadeInDown delay-300">
                <button id="mobile-menu-toggle" class="w-8 h-8 flex flex-col justify-center space-y-1.5 group">
                    <span class="w-full h-px bg-white transition-all duration-300 group-hover:rotate-45 group-hover:translate-y-2"></span>
                    <span class="w-full h-px bg-white transition-all duration-300 group-hover:opacity-0"></span>
                    <span class="w-full h-px bg-white transition-all duration-300 group-hover:-rotate-45 group-hover:-translate-y-2"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden fixed inset-0 bg-black/95 backdrop-blur-lg z-40 opacity-0 invisible transition-all duration-300">
            <div class="flex flex-col items-center justify-center h-full space-y-8">

           <a href="{{ route('collections') }}"
   class="text-2xl font-light uppercase tracking-[0.3em] hover:text-gray-300 transition-colors duration-300">
  Collections
</a>

                <!-- Mobile Auth Links -->
                <div class="flex flex-col items-center space-y-6 pt-8 border-t border-white/20">
                    <a href="/login" class="text-xl font-light uppercase tracking-[0.3em] hover:text-gray-300 transition-colors duration-300">
                        Log in
                    </a>
                    <a href="/register" class="px-8 py-3 border border-white text-lg font-light uppercase tracking-[0.2em] hover:bg-white hover:text-black transition-all duration-300">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </nav>
