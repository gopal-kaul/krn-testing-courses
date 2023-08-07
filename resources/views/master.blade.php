<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
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
