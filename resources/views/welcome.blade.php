<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArachyCove - Minimalist Hero</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body class="bg-black text-white overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 p-6 lg:p-8">
        <div class="flex justify-between items-center max-w-7xl mx-auto">
            <!-- Logo -->
            <div class="animate-slideInLeft">
                <h1 class="text-2xl lg:text-3xl font-light tracking-[0.3em] uppercase">
                    ARACHY<span class="font-black">COVE</span>
                </h1>

            </div>

            <div class="hidden md:flex items-center space-x-12 animate-fadeInDown delay-300">

                <a href="#" class="text-sm font-light uppercase tracking-[0.2em] hover:text-gray-300 transition-colors duration-300 relative group">
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

                <a href="#" class="text-2xl font-light uppercase tracking-[0.3em] hover:text-gray-300 transition-colors duration-300">
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

    <!-- Hero Section -->
    <section class="relative h-screen flex flex-col items-center justify-center text-center text-white">
        <!-- Video Background -->
        <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden">
            <video class="min-w-full min-h-full absolute object-cover filter grayscale"
                src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4"
                type="video/mp4" autoplay muted loop></video>
        </div>

        <!-- Content -->
        <div class="video-content space-y-8 z-10 max-w-4xl mx-auto px-6 pt-10">
            <!-- Brand Badge -->


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
                    <span class="group-hover:tracking-[0.3em] transition-all duration-300">Shop Denim</span>
                </button>
                <button class="px-8 py-4 border border-white text-white font-light uppercase tracking-[0.2em] text-sm hover:bg-white hover:text-black transition-all duration-300 group">
                    <span class="group-hover:tracking-[0.3em] transition-all duration-300">View Collection</span>
                </button>
            </div>

            <!-- Stats -->

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

        // Parallax effect for video
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const video = document.querySelector('video');
            if (video) {
                video.style.transform = `translate(-50%, -50%) scale(${1 + scrolled * 0.0002})`;
            }
        });

        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, observerOptions);

        // Observe elements for scroll animations
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.animate-on-scroll');
            elements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
 <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .video-docker video {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .video-docker::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.7);
            z-index: 1;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse-subtle {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.02);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s ease-out;
        }

        .animate-fadeInDown {
            animation: fadeInDown 1s ease-out;
        }

        .animate-slideInLeft {
            animation: slideInLeft 1s ease-out;
        }

        .animate-pulse-subtle {
            animation: pulse-subtle 3s ease-in-out infinite;
        }

        .animate-float {
            animation: float 4s ease-in-out infinite;
        }

        .delay-300 { animation-delay: 0.3s; animation-fill-mode: both; }
        .delay-600 { animation-delay: 0.6s; animation-fill-mode: both; }
        .delay-900 { animation-delay: 0.9s; animation-fill-mode: both; }
        .delay-1200 { animation-delay: 1.2s; animation-fill-mode: both; }

        .text-outline {
            text-shadow: 2px 2px 0px rgba(0,0,0,0.8);
        }

        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #000;
        }

        ::-webkit-scrollbar-thumb {
            background: #fff;
            border-radius: 0;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #ccc;
        }

         .cards-container {
            display: grid;
          grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            max-width: 1400px;
            width: 100%;
            margin-top: 40px auto;
             padding: 0 20px;

        }

        .container {
            width: 220px;
            height: 320px;
            position: relative;
            margin: 0 auto;
            background-color: #000;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
            overflow: hidden;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        /* Product 1 - Modern Headphones */
        .product-1 {
            background: linear-gradient(135deg, #2c2c2c 0%, #1a1a1a 100%);
            position: relative;
        }

        .product-1::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150px;
            height: 150px;
            background-size: contain;
            opacity: 0.3;
        }

        /* Product 2 - Minimalist Watch */
        .product-2 {
            background: linear-gradient(135deg, #f5f5f5 0%, #e0e0e0 100%);
            position: relative;
        }

        .product-2::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 120px;
            height: 120px;
            background-size: contain;
            opacity: 0.4;
        }

        /* Product 3 - Camera Lens */
        .product-3 {
            background: linear-gradient(135deg, #1a1a1a 0%, #000000 100%);
            position: relative;
        }

        .product-3::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 140px;
            height: 140px;
            background-size: contain;
            opacity: 0.3;
        }

        .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 2fr 2fr 1fr;
            background: rgba(0, 0, 0, 0.95);
            color: #ffffff;
            opacity: 0;
            transition: all 0.5s ease;
            font-family: "Playfair Display", serif;
        }

        .overlay.light {
            background: rgba(255, 255, 255, 0.95);
            color: #000000;
        }

        .items {
            padding-left: 25px;
            padding-right: 25px;
            letter-spacing: 2px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .head {
            font-size: 28px;
            line-height: 36px;
            font-weight: 700;
            transform: translateY(40px);
            transition: all 0.7s ease;
            position: relative;
        }

        .head p {
            margin-bottom: 10px;
        }

        .head hr {
            display: block;
            width: 0;
            border: none;
            border-bottom: solid 3px #ffffff;
            position: absolute;
            bottom: -10px;
            left: 0;
            transition: all 0.5s ease;
        }

        .overlay.light .head hr {
            border-bottom-color: #000000;
        }

        .price {
            font-size: 24px;
            line-height: 20px;
            font-weight: 600;
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.7s ease;
            font-family: 'Inter', sans-serif;
        }

        .price .old {
            text-decoration: line-through;
            color: #888888;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .price .new {
            color: #ffffff;
            font-size: 28px;
            font-weight: 700;
        }

        .overlay.light .price .new {
            color: #000000;
        }

        .cart {
            font-size: 14px;
            opacity: 0;
            letter-spacing: 1.5px;
            font-family: "Inter", sans-serif;
            font-weight: 600;
            transform: translateY(40px);
            transition: all 0.7s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .cart:hover {
            transform: translateX(5px);
            transition: transform 0.3s ease;
        }

        .cart i {
            font-size: 18px;
            margin-right: 12px;
        }

        .container:hover .overlay {
            opacity: 1;
        }

        .container:hover .overlay .head {
            transform: translateY(0px);
        }

        .container:hover .overlay .head hr {
            width: 60px;
            transition-delay: 0.4s;
        }

        .container:hover .overlay .price {
            transform: translateY(0px);
            transition-delay: 0.3s;
            opacity: 1;
        }

        .container:hover .overlay .cart {
            transform: translateY(0px);
            transition-delay: 0.6s;
            opacity: 1;
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ffffff;
            color: #000000;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 2;
        }

        .product-badge.dark {
            background: #000000;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .cards-container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .container {
                width: 280px;
                height: 380px;
            }

            .head {
                font-size: 24px;
                line-height: 32px;
            }

            .price {
                font-size: 20px;
            }

            .price .new {
                font-size: 24px;
            }
        }
    </style>
