{{-- <footer class="bg-[#F4F7FB] text-center">
    <!-- Logo -->
    <div class="flex justify-center">
        <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="h-16">
    </div>

    <!-- Deskripsi -->
    <p class="text-gray-700 mb-6 max-w-xl mx-auto">
        High level experience in web design and development knowledge, producing quality work.
    </p>

    <!-- Tombol -->
    <div class="mb-6">
        <a href="#contact" class="bg-[#192638] hover:bg-[#25D366] text-white px-6 py-3 rounded-full transition-colors duration-300">
            Contact Us
        </a>            
    </div>

    <!-- Ikon Sosial -->    
    <div class="flex justify-center space-x-4 text-[#192638] text-2xl mb-10">
        <a href="mailto:example@mail.com" class="hover:text-blue-500 transition"><i class="fas fa-envelope"></i></a>
        <a href="https://yourwebsite.com" class="hover:text-blue-500 transition"><i class="fas fa-globe"></i></a>
        <a href="https://instagram.com/yourprofile" class="hover:text-blue-500 transition"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/628123456789" class="hover:text-green-500 transition"><i class="fab fa-whatsapp"></i></a>
        <a href="https://maps.google.com/?q=Your+Location" class="hover:text-red-500 transition"><i class="fas fa-map-marker-alt"></i></a>
    </div>

    <!-- Copyright -->
    <div class="bg-[#192638] text-white py-3 text-sm">
        &copy; {{ date('Y') }} Your Company Name. All rights reserved.
    </div>
</footer>   --}}
<footer class="bg-[#192638] text-white px-6 pt-12 pb-4">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-10">
        
        <!-- Kiri: Logo & Deskripsi -->
        <div class="flex flex-col space-y-4">
            <img src="{{ asset('images/logo3.png') }}" alt="Logo" class="w-28">
            <p class="text-sm text-gray-300">
                We bridge academic research with societal needs through impactful research collaboration and downstream innovation.
            </p>
            <a href="#contact" class="inline-block bg-white text-[#192638] hover:bg-[#25D366] hover:text-white px-6 py-2 rounded-full font-semibold transition duration-300">
                Contact Us
            </a>
        </div>

        <!-- Tengah: Link Navigasi -->
        <div class="flex flex-col space-y-3 mx-auto">
            <a href="#home" class="hover:underline">Home</a>
            <a href="#about" class="hover:underline">About Company</a>
            <a href="#visi" class="hover:underline">Goals Company</a>
            <a href="#partner" class="hover:underline">Partnership Company</a>
        </div>

        <!-- Kanan: Kontak -->
        <div class="flex flex-col space-y-4 pl-40">
            <div class="flex items-center space-x-3">
                <i class="fas fa-envelope text-white text-lg"></i>
                <span class="text-sm font-semibold">digistarri@gmail.com</span>
            </div>
            <div class="flex items-center space-x-3">
                <i class="fab fa-instagram text-white text-lg"></i>
                <span class="text-sm font-semibold">@driofficial.real</span>
            </div>
            <div class="flex items-center space-x-3">
                <i class="fas fa-globe text-white text-lg"></i>
                <span class="text-sm font-semibold">digistarri.com</span>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="border-t border-gray-600 mt-10 pt-4 text-center text-sm text-white">
        &copy; {{ date('Y') }} DIGISTAR. All rights reserved.
    </div>
</footer>

