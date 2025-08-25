@extends('layouts.app')

   @include('layouts.header')
   @section('content')

<body class="bg-black text-white overflow-x-hidden">

    <section class="relative h-screen flex flex-col items-center justify-center text-center text-white">
        <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
           <img  src="{{ asset('images/Hero.png') }}" >
        </div>

        <div class="video-content space-y-8 z-10 max-w-4xl mx-auto px-6 pt-10">

            <!-- Main Heading -->
            <div class="animate-fadeInUp delay-300">
                <h1 class="font-light text-5xl lg:text-7xl xl:text-8xl leading-none tracking-tight mb-6">
                    <span class="block font-black text-outline">RAW</span>
                    <span class="block">NEXT QUESTION</span>
                </h1>
            </div>

            <!-- Subheading -->
            <div class="animate-fadeInUp delay-600">
                <p class="text-lg lg:text-xl font-light max-w-2xl mx-auto leading-relaxed tracking-wide opacity-90">
                    Handcrafted raw jeans and premium tees for those who value
                    authenticity over trends. Pure. Uncompromising. Timeless.
                </p>
            </div>

            <!-- CTA Buttons -->
            <div class="animate-fadeInUp delay-900 flex flex-col sm:flex-row gap-6 justify-center items-center pt-8">
                <button class="px-8 py-4 bg-white text-black font-medium uppercase tracking-[0.2em] text-sm hover-lift transition-all duration-300 group">
                    <span class="group-hover:tracking-[0.3em] transition-all duration-300">Shop </span>
                </button>
                <button class="px-8 py-4 border border-white text-white font-light uppercase tracking-[0.2em] text-sm hover:bg-white hover:text-black transition-all duration-300 group">
                    <span class="group-hover:tracking-[0.3em] transition-all duration-300">View Collection</span>
                </button>
            </div>


        </div>
        <div class="fixed right-8 top-1/2 transform -translate-y-1/2 z-50 space-y-4 animate-fadeInUp delay-1200">
            <div class="w-2 h-2 bg-white rounded-full"></div>
            <div class="w-2 h-2 border border-white rounded-full opacity-50"></div>
            <div class="w-2 h-2 border border-white rounded-full opacity-30"></div>
        </div>
    </section>

    <!-- Products Section with Responsive Cards -->
    <section class="min-h-screen bg-white text-black py-20 px-4 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-on-scroll">
                <h2 class="text-4xl lg:text-6xl font-light mb-8 tracking-tight">
                    ESSENTIALS<span class="font-black"> COLLECTION</span>
                </h2>
                <p class="text-lg font-light leading-relaxed opacity-70 max-w-2xl mx-auto">
                    Discover our carefully curated selection of raw denim and premium basics.
                    Each piece crafted for the discerning individual.
                </p>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
                <!-- Raw Jeans Card -->
                <div class="group cursor-pointer animate-on-scroll">
                    <div class="aspect-[3/4] bg-gray-100 overflow-hidden relative mb-6">
                        <img
 src="{{ asset('images/depan.jpg') }}"                             alt="Raw Selvedge Jeans"
                            class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-4 left-4 bg-white text-black px-3 py-1 text-xs font-medium uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            Raw Denim
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-xl lg:text-2xl font-light uppercase tracking-[0.1em] group-hover:tracking-[0.2em] transition-all duration-300">
                            Selvedge Raw Jeans
                        </h3>
                        <p class="text-sm font-light opacity-60 leading-relaxed">
                            15oz Japanese selvedge denim. Unwashed, unsanforized.
                            Built to age beautifully with you.
                        </p>
                        <div class="flex items-center justify-between pt-2">
                            <span class="text-lg font-medium">$280</span>
                            <span class="text-xs uppercase tracking-wider opacity-50">3 Sizes Available</span>
                        </div>
                    </div>
                </div>

                <div class="group cursor-pointer animate-on-scroll">
                    <div class="aspect-[3/4] bg-gray-100 overflow-hidden relative mb-6">
                        <img
 src="{{ asset('images/Slub White.jpg') }}"                             alt="Premium Cotton Tee"
                            class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-700 group-hover:scale-105"
                        />
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-4 left-4 bg-white text-black px-3 py-1 text-xs font-medium uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-y-2 group-hover:translate-y-0">
                            Premium Basics
                        </div>
                    </div>
                    <div class="space-y-3">
                        <h3 class="text-xl lg:text-2xl font-light uppercase tracking-[0.1em] group-hover:tracking-[0.2em] transition-all duration-300">
                            Essential Tee
                        </h3>
                        <p class="text-sm font-light opacity-60 leading-relaxed">
                            100% organic cotton. Pre-shrunk and garment dyed.
                            The perfect foundation piece.
                        </p>
                        <div class="flex items-center justify-between pt-2">
                            <span class="text-lg font-medium">$65</span>
                            <span class="text-xs uppercase tracking-wider opacity-50">2 Colors Available</span>
                        </div>
                    </div>
                </div>

            </div>
    </section>
</div>
       <section class="h-screen bg-white text-black flex items-center justify-center">
        <div class="text-center max-w-6xl mx-auto px-6">
            <h2 class="text-4xl lg:text-6xl font-light mb-8 tracking-tight">
                OUR<span class="font-black">COLLECTION</span>
            </h2>
            <p class="text-lg font-light leading-relaxed opacity-70 max-w-2xl mx-auto mb-16">
                In a world of fast fashion, we create pieces that last.
                Every garment tells a story. Every wear adds character.
            </p>

            <!-- Cards Container -->
        <div class="cards-container">


 <div class="container product-2 relative">
        <img
            src="{{ asset('images/Slub White.jpg') }}"
            alt="Kurasu Collegiate T-shirt"
            class="w-full h-full object-cover"
        />
        <div class="product-badge">NEW</div>
        <div class="overlay">
            <div class="items"></div>
            <div class="items head">
                <p>Kurasu Collegiate</p>
                <hr>
            </div>
            <div class="items price">
                <p class="old">IDR 370,000</p>
                <p class="new">IDR 279,287</p>
            </div>
            <div class="items cart">
                <span>ADD TO CART</span>
            </div>
        </div>
    </div>
     <div class="container product-3 relative">
        <img
            src="{{ asset('images/Slub White.jpg') }}"
            alt="Kurasu Collegiate T-shirt"
            class="w-full h-full object-cover"
        />
        <div class="product-badge">NEW</div>
        <div class="overlay">
            <div class="items"></div>
            <div class="items head">
                <p>Kurasu Collegiate</p>
                <hr>
            </div>
            <div class="items price">
                <p class="old">IDR 370,000</p>
                <p class="new">IDR 279,287</p>
            </div>
            <div class="items cart">
                <span>ADD TO CART</span>
            </div>
        </div>
    </div>

    <!-- Product Card 2 - Light Theme -->
    <div class="container product-2 relative">
        <img
            src="{{ asset('images/Slub White.jpg') }}"
            alt="Minimalist Smart Watch"
            class="w-full h-full object-cover"
        />
        <div class="product-badge dark">SALE</div>
        <div class="overlay light">
            <div class="items"></div>
            <div class="items head">
                <p>Minimalist Smart Watch</p>
                <hr>
            </div>
            <div class="items price">
                <p class="old">$459</p>
                <p class="new">$329</p>
            </div>
            <div class="items cart">

                <span>ADD TO CART</span>
            </div>
        </div>
    </div>

    <!-- Product Card 3 - Dark Theme -->
    <div class="container product-3 relative">
        <img
            src="{{ asset('images/Slub White.jpg') }}"
            alt="Professional Camera Lens"
            class="w-full h-full object-cover"
        />
        <div class="product-badge">HOT</div>
        <div class="overlay">
            <div class="items"></div>
            <div class="items head">
                <p>Professional Camera Lens</p>
                <hr>
            </div>
            <div class="items price">
                <p class="old">$1299</p>
                <p class="new">$899</p>
            </div>
            <div class="items cart">

                <span>ADD TO CART</span>
            </div>
        </div>
    </div>
</div>
<div class="text-center mt-16">
    <a href="#" class="inline-block px-8 py-4 bg-black text-white font-light uppercase tracking-[0.2em] text-sm hover:bg-gray-900 transition-all duration-300 group">
        <span class="group-hover:tracking-[0.3em] transition-all duration-300">See All Collection</span>
    </a>
</div>
        </div>
    </section>

    <script>
        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('opacity-0');
                mobileMenu.classList.toggle('invisible');
            });

            // Close mobile menu when clicking outside
            mobileMenu.addEventListener('click', (e) => {
                if (e.target === mobileMenu) {
                    mobileMenu.classList.add('opacity-0');
                    mobileMenu.classList.add('invisible');
                }
            });
        }

       
    </script>
</body>
</html>

@endsection
