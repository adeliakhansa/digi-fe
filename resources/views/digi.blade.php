{{-- resources/views/landing.blade.php --}}
@extends('layouts.app')
@section('title', 'Landing Page') 
@section('content')


<!-- Section Profil -->
<section id="home" class="w-full min-h-screen bg-no-repeat bg-center bg-cover px-6 py-10 md:px-12 md:py-16 flex flex-col-reverse md:flex-row items-center justify-between gap-10 pt-20" style="background-image: url('/images/bg1.png');">
    
    <div class="w-full md:max-w-lg space-y-6 text-center md:text-left mt-20">
        <h1 class="text-3xl md:text-5xl font-light text-black leading-tight">
            Simplifying <span class="font-bold text-[#263A54]">Innovation</span><br>
            for a <span class="font-bold text-[#263A54]">Better</span> Society.
        </h1>
        <p class="text-sm md:text-base text-black">
            At Digistar Research & Innovation, we connect academic research with real-world needs through collaboration and practical innovation. <br>
            By simplifying the process of transforming ideas into action, we empower communities, researchers, and institutions to create meaningful change across Indonesia.
        </p>
        <div class="flex flex-col sm:flex-row sm:justify-center md:justify-start gap-4">
            <button class="bg-[#263A54] text-white px-6 py-2 rounded-md font-semibold">Get Started</button>
            <button class="border border-[#263A54] text-[#263A54] px-6 py-2 rounded-md font-semibold">Service</button>
        </div>

        <div class="relative mt-10">
            <h2 class="text-[#FBBF24] font-semibold text-sm mb-4 text-center md:text-left">Our Partners</h2>
            <div class="flex flex-wrap justify-center md:justify-start gap-6">
                <img src="/images/gitp.png" alt="GITP Logo" class="w-16">
                <img src="/images/hi.png" alt="HiCool Logo" class="w-16">
            </div>
        </div>   
    </div>

    <div class="flex items-center justify-center">
        <div class="w-[240px] h-[240px] md:w-[360px] md:h-[360px] rounded-full bg-[#2E507B] flex items-center justify-center">
            <div class="w-[200px] h-[200px] md:w-[320px] md:h-[320px] rounded-full bg-white flex items-center justify-center">
                <img src="/images/logo.png" alt="Digistar Logo" class="w-[160px] h-[160px] md:w-[280px] md:h-[280px] object-contain rounded-full" />
            </div>
        </div>
    </div>

</section>


<!-- Section About -->
<section  id="about" class="relative bg-[#F4F7FB] bg-no-repeat bg-cover bg-center px-6 md:px-20 py-20 mt-10" style="background-image: url('/images/bg2.png'); min-height: 600px;">
    <div class="max-w-7xl mx-auto relative h-full">

    <div class="text-left md:absolute md:top-[-10rem] md:right-20 md:text-right mb-6 md:mb-0">
        <h2 class="text-4xl md:text-7xl font-bold text-black leading-tight">
            About the<br>Company
        </h2>
    </div>

    <div class=" w-full md:w-1/2 mt-40 md:mt-30 bg-gradient-to-br from-[#284364] via-[#2E507B] to-[#487AAF] rounded-[25px] p-6 md:p-10 pb-16 text-white shadow-lg relative z-10">
        <p class="text-base md:text-lg leading-relaxed">
            Digistar Research & Innovation is a foundation established in 2020 in Malang City. With a bold vision: 
            <span class="italic">"To Make Indonesia a Better Place."</span>
        </p>
        <p class="mt-4 text-sm md:text-base leading-relaxed">
            We bridge academic research with societal needs through impactful research collaboration and downstream innovation.
        </p>
        <button class="mt-6 px-4 py-2 bg-white text-black text-sm rounded shadow hover:bg-gray-100 transition">Learn More</button>
    </div>     
    </div>
</section>


{{-- section 3 --}}

<section  id="visi" class="relative bg-no-repeat bg-cover bg-center px-6 md:px-20 py-20 mt-10" style="background-image: url('/images/bg3.png'); min-height: 500px;">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 text-black items-start">
        <div>
            <h2 class="text-3xl md:text-4xl font-semibold leading-tight">
                Driven by <span class="text-[#F9A60E] font-bold">Vision</span>,<br>
                Grounded in <span class="text-[#F9A60E] font-bold">Mission</span>
            </h2>
            <p class="text-gray-400 mt-4 text-sm md:text-base max-w-sm">
                We believe innovation should be accessible, impactful, and rooted in real-world needs.
            </p>
        </div>

        <div class="space-y-6">
            <p>Transforming research into impactful innovations for society through collaboration and commercialization.</p>

            <div>
                <p class="font-bold">Mission</p>
                <p>To make Indonesia a better place through impactful research and innovation.</p>
            </div>

            <div>
                <p class="font-bold">Vision</p>
                <ol class="list-decimal list-inside space-y-1">
                    <li>Transform academic research into socially impactful industries.</li>
                    <li>Serve as a collaborative hub for researchers.</li>
                    <li>Accelerate research commercialization and societal relevance.</li>
                </ol>
            </div>
        </div>
    </div>
        <!-- Judul -->
    <div class="mt-40 flex justify-center">
        <div class="text-center">
            <h3 class="text-6xl font-semibold text-black">
                Our <span class="text-[#F9A60E]">Goals!</span>
            </h3>
        </div>
    </div>

    <div class="w-64 md:w-[60rem] mx-auto mt-2 border-b-[5px] border-gray-300"></div> 
    <div class="mt-10 max-w-screen-lg mx-auto flex flex-col md:flex-row justify-between items-center md:items-start text-center md:text-left">
    
    <!-- Kartu 1 -->
    <div class="group flex-1 px-6 py-6 flex items-center gap-4 transition-transform duration-300 hover:scale-105 hover:shadow-md">
    <div class="bg-white rounded-full flex items-center justify-center">
        <img src="/images/goals1.png" alt="Goal 1" class="w-18 h-18">
    </div>
    <p class="text-sm md:text-base font-semibold text-black leading-snug">
        Policy Research<br>& Consultation
    </p>
    </div>
    
    <!-- Kartu 2 -->
    <div class="group flex-1 px-6 py-6 flex items-center gap-4 transition-transform duration-300 hover:scale-105 hover:shadow-md border-t md:border-t-0 md:border-l md:border-r border-gray-300">
    <div class="bg-white rounded-full flex items-center justify-center">
        <img src="/images/goals2.png" alt="Goal 1" class="w-18 h-18">
        </div>
    <p class="text-sm md:text-base font-semibold text-black leading-snug">
        Training &<br>Capacity Building
    </p>
    </div>

    <!-- Kartu 3 -->
    <div class="group flex-1 px-6 py-6 flex items-center gap-4 transition-transform duration-300 hover:scale-105 hover:shadow-md">
    <div class="bg-white rounded-full flex items-center justify-center">
        <img src="/images/goals3.png" alt="Goal 1" class="w-18 h-18">
        </div>
    <p class="text-sm md:text-base font-semibold text-black leading-snug">
        Research Event<br>Organizer
    </p>
    </div>
</div>
</section>


<section  id="partner" class="bg-[#F4F7FB] py-16">
    <div class="bg-[#263A54] px-6 py-10">
        <h2 class="text-3xl md:text-4xl font-semibold text-white leading-snug pl-16">
        Strategic <span class="font-bold text-[#F9A60E]">Partners</span><br>
        for <span class="font-bold text-[#F9A60E]">Innovation</span>
        </h2>
    </div>
    <div class="mt-10 max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 px-6">
    
    <!-- Card 1 -->
    <div class="bg-[#E9ECEF] rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 flex flex-col items-center text-[#00171F] min-h-[340px]">
        <img src="/images/dummy1.png" alt="Lecture" class="rounded-md mb-4 w-full h-44 object-cover">
        <p class="font-semibold text-center mt-9">Lecture & Education Institute</p>
    </div>

    <!-- Card 2 -->
    <div class="bg-[#E9ECEF] rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 flex flex-col items-center text-[#00171F] min-h-[340px]">
    <img src="/images/dummy2.png" alt="Researcher" class="rounded-md mb-4 w-full h-44 object-cover">
    <p class="font-semibold text-center mt-9">Researcher & Academition</p>
    </div>

    <!-- Card 3 -->
    <div class="bg-[#E9ECEF] rounded-xl shadow-md hover:shadow-xl transition duration-300 p-6 flex flex-col items-center text-[#00171F] min-h-[340px]">
    <img src="/images/dummy3.png" alt="Startup" class="rounded-md mb-4 w-full h-44 object-cover">
    <p class="font-semibold text-center mt-9">Research based start-up</p>
    </div>

    </div>

    <div class="mt-10 text-center">
    <button class="px-6 py-2 border border-[#00171F] text-[#00171F] rounded-md hover:bg-[#00171F] hover:text-white transition duration-300">
    Learn More
    </button>
    </div>
</section>  

