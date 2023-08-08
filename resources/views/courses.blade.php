@extends('master')
@section('title', 'KRN Informatix | Courses')

@section('content')
    <style>
        @media (min-width: 1024px) {
            .grid>* {
                opacity: 0;
                animation-delay: var(--animation-delay);
            }
        }
    </style>
    <div class="px-4 md:px-20 py-10">
        <h1 class="text-center font-bold">Our Courses</h1>
        <h2 class="text-center font-extrabold text-primary">Software Testing Courses</h2>
        <h3 class='text-center font-bold'>We Provide The Best Selenium Training Courses</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-y-10 lg:grid-cols-4 lg:gap-10">
            <div
                class="group hover:text-white hover:shadow-xl hover:border-white hover:scale-[1.05] hover:bg-primary transition-[color,background-color,border-color,transform] duration-500 ease-in-out rounded-2xl p-8 aspect-square space-y-4 border-black/50 border-2 opacity-0">
                <div class="flex flex-row items-center gap-x-6">
                    {{-- Replace this with Image --}}
                    <div
                        class="w-16 h-16 rounded-full bg-gray-900 group-hover:bg-white transition-colors duration-500 ease-in-out">
                    </div>
                    <h4 class="text-2xl font-semibold">Manual Testing</h4>
                </div>
                <p class="line-clamp-[9]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at mi
                    sit amet velit rhoncus
                    ultricies. Nulla facilisi. Integer feugiat nisl vel sapien ornare molestie. Praesent hendrerit odio
                    eget justo rutrum egestas. Fusce dui odio, scelerisque eu nisl vel, viverra ultrices risus. Etiam
                    vitae lacus eget dui mattis maximus. Curabitur rutrum non ex eget tincidunt. Donec varius ipsum sed
                    tempus tristique. Donec eu augue turpis. Morbi eu dapibus mauris. Nunc lacinia nisl ac mauris
                    lobortis, eget commodo metus pharetra. Donec porttitor nisl sed bibendum tristique. Quisque sed
                    libero ut magna mollis volutpat. Nam fringilla ante a nulla gravida, non accumsan nunc posuere. In
                    sagittis volutpat neque.
                </p>
                <a href='#'
                    class='text-primary font-bold group-hover:text-white duration-500 ease-in-out transition-colors'>Read
                    More</a>
            </div>
            <div
                class="group hover:text-white hover:shadow-xl hover:border-white hover:scale-[1.05] hover:bg-primary transition-[color,background-color,border-color,transform] duration-500 ease-in-out rounded-2xl p-8 aspect-square space-y-4 border-black/50 border-2 opacity-0 ">
                <div class="flex flex-row items-center gap-x-6">
                    {{-- Replace this with Image --}}
                    <div
                        class="w-16 h-16 rounded-full bg-gray-900 group-hover:bg-white transition-colors duration-500 ease-in-out">
                    </div>
                    <h4 class="text-2xl font-semibold">Manual Testing</h4>
                </div>
                <p class="line-clamp-[9]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at mi
                    sit amet velit rhoncus
                    ultricies. Nulla facilisi. Integer feugiat nisl vel sapien ornare molestie. Praesent hendrerit odio
                    eget justo rutrum egestas. Fusce dui odio, scelerisque eu nisl vel, viverra ultrices risus. Etiam
                    vitae lacus eget dui mattis maximus. Curabitur rutrum non ex eget tincidunt. Donec varius ipsum sed
                    tempus tristique. Donec eu augue turpis. Morbi eu dapibus mauris. Nunc lacinia nisl ac mauris
                    lobortis, eget commodo metus pharetra. Donec porttitor nisl sed bibendum tristique. Quisque sed
                    libero ut magna mollis volutpat. Nam fringilla ante a nulla gravida, non accumsan nunc posuere. In
                    sagittis volutpat neque.
                </p>
                <a href='#'
                    class='text-primary font-bold group-hover:text-white duration-500 ease-in-out transition-colors'>Read
                    More</a>
            </div>
            <div
                class="group hover:text-white ver:border-white hover:scale-[1.05] hover:bg-primary transition-[color,background-color,border-color,transform] duration-500 ease-in-out rounded-2xl p-8 aspect-square space-y-4 border-black/50 border-2 opacity-0 ">
                <div class="flex flex-row items-center gap-x-6">
                    {{-- Replace this with Image --}}
                    <div
                        class="w-16 h-16 rounded-full bg-gray-900 group-hover:bg-white transition-colors duration-500 ease-in-out">
                    </div>
                    <h4 class="text-2xl font-semibold">Manual Testing</h4>
                </div>
                <p class="line-clamp-[9]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at mi
                    sit amet velit rhoncus
                    ultricies. Nulla facilisi. Integer feugiat nisl vel sapien ornare molestie. Praesent hendrerit odio
                    eget justo rutrum egestas. Fusce dui odio, scelerisque eu nisl vel, viverra ultrices risus. Etiam
                    vitae lacus eget dui mattis maximus. Curabitur rutrum non ex eget tincidunt. Donec varius ipsum sed
                    tempus tristique. Donec eu augue turpis. Morbi eu dapibus mauris. Nunc lacinia nisl ac mauris
                    lobortis, eget commodo metus pharetra. Donec porttitor nisl sed bibendum tristique. Quisque sed
                    libero ut magna mollis volutpat. Nam fringilla ante a nulla gravida, non accumsan nunc posuere. In
                    sagittis volutpat neque.
                </p>
                <a href='#'
                    class='text-primary font-bold group-hover:text-white duration-500 ease-in-out transition-colors'>Read
                    More</a>
            </div>
            <div
                class="group hover:text-white  hover:shadow-xl hover:border-white hover:scale-[1.05] hover:bg-primary transition-[color,background-color,border-color,transform] duration-500 ease-in-out rounded-2xl p-8 aspect-square space-y-4 border-black/50 border-2 opacity-0 ">
                <div class="flex flex-row items-center gap-x-6">
                    {{-- Replace this with Image --}}
                    <div
                        class="w-16 h-16 rounded-full bg-gray-900 group-hover:bg-white transition-colors duration-500 ease-in-out">
                    </div>
                    <h4 class="text-2xl font-semibold">Manual Testing</h4>
                </div>
                <p class="line-clamp-[9]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at mi
                    sit amet velit rhoncus
                    ultricies. Nulla facilisi. Integer feugiat nisl vel sapien ornare molestie. Praesent hendrerit odio
                    eget justo rutrum egestas. Fusce dui odio, scelerisque eu nisl vel, viverra ultrices risus. Etiam
                    vitae lacus eget dui mattis maximus. Curabitur rutrum non ex eget tincidunt. Donec varius ipsum sed
                    tempus tristique. Donec eu augue turpis. Morbi eu dapibus mauris. Nunc lacinia nisl ac mauris
                    lobortis, eget commodo metus pharetra. Donec porttitor nisl sed bibendum tristique. Quisque sed
                    libero ut magna mollis volutpat. Nam fringilla ante a nulla gravida, non accumsan nunc posuere. In
                    sagittis volutpat neque.
                </p>
                <a href='#'
                    class='text-primary font-bold group-hover:text-white duration-500 ease-in-out transition-colors'>Read
                    More</a>
            </div>
            <div
                class="group hover:text-white  hover:shadow-xl hover:border-white hover:scale-[1.05] hover:bg-primary transition-[color,background-color,border-color,transform] duration-500 ease-in-out rounded-2xl p-8 aspect-square space-y-4 border-black/50 border-2 opacity-0 ">
                <div class="flex flex-row items-center gap-x-6">
                    {{-- Replace this with Image --}}
                    <div
                        class="w-16 h-16 rounded-full bg-gray-900 group-hover:bg-white transition-colors duration-500 ease-in-out">
                    </div>
                    <h4 class="text-2xl font-semibold">Manual Testing</h4>
                </div>
                <p class="line-clamp-[9]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at mi
                    sit amet velit rhoncus
                    ultricies. Nulla facilisi. Integer feugiat nisl vel sapien ornare molestie. Praesent hendrerit odio
                    eget justo rutrum egestas. Fusce dui odio, scelerisque eu nisl vel, viverra ultrices risus. Etiam
                    vitae lacus eget dui mattis maximus. Curabitur rutrum non ex eget tincidunt. Donec varius ipsum sed
                    tempus tristique. Donec eu augue turpis. Morbi eu dapibus mauris. Nunc lacinia nisl ac mauris
                    lobortis, eget commodo metus pharetra. Donec porttitor nisl sed bibendum tristique. Quisque sed
                    libero ut magna mollis volutpat. Nam fringilla ante a nulla gravida, non accumsan nunc posuere. In
                    sagittis volutpat neque.
                </p>
                <a href='#'
                    class='text-primary font-bold group-hover:text-white duration-500 ease-in-out transition-colors'>Read
                    More</a>
            </div>
            <div
                class="group hover:text-white hover:shadow-xl  hover:border-white hover:scale-[1.05] hover:bg-primary transition-[color,background-color,border-color,transform] duration-500 ease-in-out rounded-2xl p-8 aspect-square space-y-4 border-black/50 border-2 opacity-0 ">
                <div class="flex flex-row items-center gap-x-6">
                    {{-- Replace this with Image --}}
                    <div
                        class="w-16 h-16 rounded-full bg-gray-900 group-hover:bg-white transition-colors duration-500 ease-in-out">
                    </div>
                    <h4 class="text-2xl font-semibold">Manual Testing</h4>
                </div>
                <p class="line-clamp-[9]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at mi
                    sit amet velit rhoncus
                    ultricies. Nulla facilisi. Integer feugiat nisl vel sapien ornare molestie. Praesent hendrerit odio
                    eget justo rutrum egestas. Fusce dui odio, scelerisque eu nisl vel, viverra ultrices risus. Etiam
                    vitae lacus eget dui mattis maximus. Curabitur rutrum non ex eget tincidunt. Donec varius ipsum sed
                    tempus tristique. Donec eu augue turpis. Morbi eu dapibus mauris. Nunc lacinia nisl ac mauris
                    lobortis, eget commodo metus pharetra. Donec porttitor nisl sed bibendum tristique. Quisque sed
                    libero ut magna mollis volutpat. Nam fringilla ante a nulla gravida, non accumsan nunc posuere. In
                    sagittis volutpat neque.
                </p>
                <a href='#'
                    class='text-primary font-bold group-hover:text-white duration-500 ease-in-out transition-colors'>Read
                    More</a>
            </div>
            <div
                class="group hover:text-white  hover:shadow-xl hover:border-white hover:scale-[1.05] hover:bg-primary transition-[color,background-color,border-color,transform] duration-500 ease-in-out rounded-2xl p-8 aspect-square space-y-4 border-black/50 border-2 opacity-0 ">
                <div class="flex flex-row items-center gap-x-6">
                    {{-- Replace this with Image --}}
                    <div
                        class="w-16 h-16 rounded-full bg-gray-900 group-hover:bg-white transition-colors duration-500 ease-in-out">
                    </div>
                    <h4 class="text-2xl font-semibold">Manual Testing</h4>
                </div>
                <p class="line-clamp-[9]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at mi
                    sit amet velit rhoncus
                    ultricies. Nulla facilisi. Integer feugiat nisl vel sapien ornare molestie. Praesent hendrerit odio
                    eget justo rutrum egestas. Fusce dui odio, scelerisque eu nisl vel, viverra ultrices risus. Etiam
                    vitae lacus eget dui mattis maximus. Curabitur rutrum non ex eget tincidunt. Donec varius ipsum sed
                    tempus tristique. Donec eu augue turpis. Morbi eu dapibus mauris. Nunc lacinia nisl ac mauris
                    lobortis, eget commodo metus pharetra. Donec porttitor nisl sed bibendum tristique. Quisque sed
                    libero ut magna mollis volutpat. Nam fringilla ante a nulla gravida, non accumsan nunc posuere. In
                    sagittis volutpat neque.
                </p>
                <a href='#'
                    class='text-primary font-bold group-hover:text-white duration-500 ease-in-out transition-colors'>Read
                    More</a>
            </div>
            <div
                class="group hover:text-white  hover:shadow-xl hover:border-white hover:scale-[1.05] hover:bg-primary transition-[color,background-color,border-color,transform] duration-500 ease-in-out rounded-2xl p-8 aspect-square space-y-4 border-black/50 border-2 opacity-0 ">
                <div class="flex flex-row items-center gap-x-6">
                    {{-- Replace this with Image --}}
                    <div
                        class="w-16 h-16 rounded-full bg-gray-900 group-hover:bg-white transition-colors duration-500 ease-in-out">
                    </div>
                    <h4 class="text-2xl font-semibold">Manual Testing</h4>
                </div>
                <p class="line-clamp-[9]">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque at mi
                    sit amet velit rhoncus
                    ultricies. Nulla facilisi. Integer feugiat nisl vel sapien ornare molestie. Praesent hendrerit odio
                    eget justo rutrum egestas. Fusce dui odio, scelerisque eu nisl vel, viverra ultrices risus. Etiam
                    vitae lacus eget dui mattis maximus. Curabitur rutrum non ex eget tincidunt. Donec varius ipsum sed
                    tempus tristique. Donec eu augue turpis. Morbi eu dapibus mauris. Nunc lacinia nisl ac mauris
                    lobortis, eget commodo metus pharetra. Donec porttitor nisl sed bibendum tristique. Quisque sed
                    libero ut magna mollis volutpat. Nam fringilla ante a nulla gravida, non accumsan nunc posuere. In
                    sagittis volutpat neque.
                </p>
                <a href='#'
                    class='text-primary font-bold group-hover:text-white duration-500 ease-in-out transition-colors'>Read
                    More</a>
            </div>
        </div>
        <h4 class="font-medium text-center">Choose your courses</h4>
        <h3 class="text-primary font-bold text-center">Latest Featured Courses</h3>
        <div class="flex flex-col md:flex-row md:justify-between md:items-center justify-center">
            <div class="w-full md:w-1/3 hover:scale-[1.02] transition-[transform] duration-500 ease-in-out">
                <h3 class="text-primary font-bold text-center">For Experienced</h3>
                <div
                    class="border bg-gray-300 border-black/50 transition-[background-color,box-shadow] duration-500 ease-in-out group hover:bg-white hover:shadow-xl rounded-tr-xl inline-flex w-full items-center justify-between gap-x-4 rounded-bl-xl px-4 py-3">
                    <div class="inline-flex gap-x-4 items-center">
                        {{-- Replace this with Image --}}
                        <div class="w-10 h-10 rounded-full bg-white border border-black/50">
                        </div>
                        <h4 class="font-bold">Selenium</h4>
                    </div>
                    <a href='#' class='text-primary font-bold duration-500 ease-in-out transition-colors'>Read
                        More</a>
                </div>
            </div>
            <div class="w-full md:w-1/3">

                <h3 class="text-primary font-bold text-center">For Freshers</h3>
                <div class="border border-black/50 rounded-tr-xl rounded-bl-xl px-4 py-3">
                </div>
            </div>
        </div>
        <h3 class="text-primary font-bold text-center">Our Students Have Been Placed In</h3>
        <div class="flex whitespace-no-wrap overflow-x-hidden bg-gray-800 rounded-2xl">
            <div class="relative">
                <ul class="flex animate-marquee">
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                </ul>
                <ul class="flex absolute top-0 animate-marquee2">
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                    <li class="m-8">Logo Here</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('customscript')
    <script>
        // to all children of grid add intersection observer that adds the animate-fadeIn class when it is in view
        const gridChildren = document.querySelectorAll('.grid > *');
        console.log(gridChildren)
        const options = {
            root: null,
            threshold: 0,
            rootMargin: '0px 0px 0px 0px'
        }
        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                    entry.target.classList.remove('opacity-0');
                } else {
                    entry.target.classList.remove('animate-fadeIn');
                    entry.target.classList.add('opacity-0');
                }
            })
        }, options);
        gridChildren.forEach(child => {
            observer.observe(child);
        })
        for (let i = 0; i < gridChildren.length; i++) {
            gridChildren[i].style.setProperty('--animation-delay', `${i*100}ms`)
        }
    </script>
@endsection
