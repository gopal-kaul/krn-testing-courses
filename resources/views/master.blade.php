<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('assets/logo.png') }}" type="image/png" sizes="16x16">
    {{-- Navbar style --}}
    <style>
        #hamburger span {
            display: block;
            position: absolute;
            height: 3px;
            width: 100%;
            background: rgb(239 68 68);
            border-radius: 9px;
            opacity: 1;
            left: 0;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -o-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: .25s ease-in-out;
            -moz-transition: .25s ease-in-out;
            -o-transition: .25s ease-in-out;
            transition: .25s ease-in-out;
        }

        #hamburger span:nth-child(1) {
            top: 0px;
        }

        #hamburger span:nth-child(2) {
            top: 10px;
        }

        #hamburger span:nth-child(3) {
            top: 20px;
        }

        #hamburger.open span:nth-child(1) {
            top: 10px;
            -webkit-transform: rotate(135deg);
            -moz-transform: rotate(135deg);
            -o-transform: rotate(135deg);
            transform: rotate(135deg);
        }

        #hamburger.open span:nth-child(2) {
            opacity: 0;
            left: -60px;
        }

        #hamburger.open span:nth-child(3) {
            top: 10px;
            -webkit-transform: rotate(-135deg);
            -moz-transform: rotate(-135deg);
            -o-transform: rotate(-135deg);
            transform: rotate(-135deg);
        }
    </style>
</head>

<body>
    <nav class="bg-gray-800 sticky top-0 z-50 py-4">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-32">

                <!-- Mobile Menu (Hamburger) -->
                <div class="md:hidden h-full">
                    <button type="button"
                        class="hamburger-btn text-white hover:text-gray-300 focus:outline-none relative w-10 h-[30px]">
                        <div id="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                </div>

                <!-- Desktop Menu (Hidden on mobile) -->
                <div class="hidden md:flex space-x-4">
                    <a href="/"
                        class="{{ request()->is('/') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Home</a>
                    <a href="/about"
                        class="{{ request()->is('about') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">About</a>
                    <a href="/courses"
                        class="{{ request()->is('courses') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Courses</a>
                    <a href="/upcoming-batches"
                        class="{{ request()->is('upcoming-batches') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Upcoming
                        Batches</a>
                    <a href="/blog"
                        class="{{ request()->is('blog') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Blog</a>
                    <a href="/career"
                        class="{{ request()->is('career') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Career</a>
                    <a href="/contact"
                        class="{{ request()->is('contact') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Contact</a>
                </div>
            </div>

            <!-- Mobile Menu (Hidden by default) -->
            <div class="max-h-0 overflow-hidden md:hidden mt-2 space-y-2 transition-all duration-500 ease-in-out flex items-end flex-col"
                id="mobileMenu">
                <a href="/" class="{{ request()->is('/') ? 'block text-red-500' : 'block text-white' }}">Home</a>
                <a href="/about"
                    class="{{ request()->is('about') ? 'block text-red-500' : 'block text-white' }}">About</a>
                <a href="/courses"
                    class="{{ request()->is('courses') ? 'block text-red-500' : 'block text-white' }}">Courses</a>
                <a href="/upcoming-batches"
                    class="{{ request()->is('upcoming-batches') ? 'block text-red-500' : 'block text-white' }}">Upcoming
                    Batches</a>
                <a href="/blog"
                    class="{{ request()->is('blog') ? 'block text-red-500' : 'block text-white' }}">Blog</a>
                <a href="/career"
                    class="{{ request()->is('career') ? 'block text-red-500' : 'block text-white' }}">Career</a>
                <a href="/contact"
                    class="{{ request()->is('contact') ? 'block text-red-500' : 'block text-white' }}">Contact</a>
            </div>
        </div>
    </nav>

    @yield('content')
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto px-4 md:px-20">
            <div class="flex flex-col md:flex-row justify-evenly">
                <div class="flex flex-col space-y-2 lg:w-1/3">
                    <img src="{{ asset('assets/logo.png') }}" alt="logo" class="w-40">
                    <p class="text-sm md:text-base lg:text-lg">
                        KRN Informatix offers software testing and training services in one place. This institute gives
                        young people who want to get jobs the right place to start if they want to build a rewarding
                        career in the growing IT sector.
                    </p>
                </div>

                <div class="flex flex-col lg:items-center w-full lg:w-1/3">
                    <div class="gap-y-2 flex flex-col">
                        <h3 class="font-bold text-lg">Quick Links</h3>
                        <a href="/"
                            class="{{ request()->is('/') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Home</a>
                        <a href="/about"
                            class="{{ request()->is('about') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">About</a>
                        <a href="/courses"
                            class="{{ request()->is('courses') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Courses</a>
                        <a href="/upcoming-batches"
                            class="{{ request()->is('upcoming-batches') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Upcoming
                            Batches</a>
                        <a href="/blog"
                            class="{{ request()->is('blog') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Blog</a>
                        <a href="/career"
                            class="{{ request()->is('career') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Career</a>
                        <a href="/contact"
                            class="{{ request()->is('contact') ? 'text-red-500 opacity-100' : 'text-white opacity-70' }} hover:text-red-500 hover:opacity-100 transition-[color,opacity] duration-500 ease-in-out">Contact</a>
                    </div>
                </div>

                <div class="flex flex-col items-center lg:w-1/3">
                    <div class="space-y-2 flex flex-col">
                        <h3 class="font-bold text-lg">Contact Us</h3>
                        <p>Address: # 5/2, 3rd Floor, Varthur Road, Kundalahalli Gate, Opposite to SKR Convention Hall,
                            Next to AXIS Bank, Bangalore-560066</p>
                        <p>Phone: +91-9700779923</p>
                        <p>Email:
                            <a href="mailto:" class="hover:text-red-500">
                                temp
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="module" src="resources/js/app.js"></script>
    <script>
        // Get the hamburger button and the mobile menu element
        const hamburgerBtn = document.querySelector('.hamburger-btn');
        const mobileMenu = document.querySelector('#mobileMenu');

        // Function to toggle the mobile menu
        function toggleMenu() {
            mobileMenu.classList.toggle('max-h-0');
            mobileMenu.classList.toggle('max-h-96');
            mobileMenu.classList.toggle('overflow-hidden');
            document.getElementById("hamburger").classList.toggle('open');
        }

        // Event listener for the hamburger button
        hamburgerBtn.addEventListener('click', toggleMenu);

        // Close the mobile menu when clicking outside it
        document.addEventListener('click', function(event) {
            const isClickInsideMobileMenu = mobileMenu.contains(event.target);
            const isClickInsideBtn = hamburgerBtn.contains(event.target);

            if (!isClickInsideMobileMenu && !isClickInsideBtn) {
                mobileMenu.classList.remove('mobile-menu-open');
            }
        });
    </script>
    @yield('customscript')
</body>

</html>
