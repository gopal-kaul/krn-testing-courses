@extends('master')
@section('title', 'KRN Informatix | Home')

@section('content')
    <div class="flex flex-col-reverse md:flex-row-reverse px-4 py-4 md:px-20 gap-y-5">
        <img src="{{ asset('assets/main.svg') }}" alt="hero"
            class="w-full md:w-1/2 opacity-0 animate-fadeIn animation-delay-2000">
        <div class="gap-y-7 md:gap-x-5 md:w-1/2 justify-center flex flex-col">
            <h1 class="font-bold animate-fadeIn text-center">We offer the best Selenium Training Solutions</h1>
            <h2 class="text-center opacity-0 animation-delay-1000 text-primary font-extrabold animate-fadeIn">
                We Deliver Software Testing Courses
            </h2>
            <div class="grid place-items-center">
                <button
                    class="bg-primary opacity-0 animate-fadeIn animation-delay-2000 text-white w-fit px-5 py-3 rounded-lg font-bold">Enroll
                    Now</button>
            </div>
        </div>
    </div>
    <div id="countersSection"
        class="bg-gray-800 py-4 md:py-8 grid grid-cols-2 md:grid-cols-4 gap-y-6 md:gap-x-4 place-items-center text-center">
        <h4 class="text-white font-bold leading-tight"><span data-count="2250">0</span>+<br />Workshops</h4>
        <h4 class="text-white font-bold leading-tight"><span data-count="5000">0</span>+<br />Workshops</h4>
        <h4 class="text-white font-bold leading-tight"><span data-count="400">0</span>+<br />Clients</h4>
        <h4 class="text-white font-bold leading-tight"><span data-count="412">0</span><br />Testimonials</h4>
    </div>
@endsection

@section('customscript')
    <script>
        const counters = document.querySelectorAll('.grid h4 span');
        console.log(counters)
        const speed = 300;
        const countersSection = document.querySelector('#countersSection');
        const options = {
            root: null,
            threshold: 0,
            rootMargin: '0px 0px -50px 0px'
        }
        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    counters.forEach(counter => {
                        const animate = () => {
                            const value = +counter.getAttribute('data-count');
                            const data = +counter.innerText;

                            const time = value / speed;

                            if (data < value) {
                                counter.innerText = Math.ceil(data + time);
                                setTimeout(animate, 1);
                            } else {
                                counter.innerText = value;
                            }
                        }
                        animate();
                    })
                } else {
                    counters.forEach(counter => {
                        counter.innerText = 0;
                    })
                }
            })
        }, options);
        observer.observe(countersSection);
    </script>

@endsection
