    
<!-- resources/views/components/navbar.blade.php -->    
<!-- Navbar -->
<header class="fixed bg-[#F4F7FB] w-full border-b-[5px] border-[#263A54] z-50 top-0 left-0">
    <div class=" mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-2 ml-9">
            <img src="/images/dr.png" alt="Digistar Logo" class="w-10 h-auto">
            <span class="text-sm font-semibold text-[#263A54]"></span>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-8 text-[#263A54] font-semibold">
            <a href="#" class="hover:text-blue-700">Home</a>
            <a href="#" class="hover:text-blue-700">Service</a>
            <a href="#" class="hover:text-blue-700">About</a>
            <a href="#" class="hover:text-blue-700">Contact</a>
        </nav>

        <!-- Register Button -->
        <div class="hidden md:block">
            <a href="#" class="bg-[#2E507B] text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-[#1e3d63]">
                Register
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-[#263A54] focus:outline-none">
                <!-- Hamburger icon -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-6 pb-4">
        <nav class="flex flex-col space-y-2 text-[#263A54] font-semibold">
            <a href="#" class="hover:text-blue-700">Home</a>
            <a href="#" class="hover:text-blue-700">Service</a>
            <a href="#" class="hover:text-blue-700">About</a>
            <a href="#" class="hover:text-blue-700">Contact</a>
            <a href="#" class="bg-[#2E507B] text-white px-4 py-2 rounded-full text-sm text-center hover:bg-[#1e3d63]">
                Register
            </a>
        </nav>
    </div>
</header>