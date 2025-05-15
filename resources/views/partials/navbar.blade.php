{{-- filepath: d:\PersonalFolder\Freel\LIMSIANGHUAT\web_folder\resources\views\partials\navbar.blade.php --}}
<header x-data="{ open: false }">

    <div class="container relative items-center min-h-[121px] mx-auto lg:py-4 flex flex-col md:flex-row justify-center">
        <!-- Logo Section -->
        <div class="flex justify-center items-center h-full mb-0 lg:mb-4 md:absolute md:top-0 md:left-0 md:bottom-0 md:self-center md:grid md:place-items-center">
            <a href="#">
                <span><img src="{{ asset('img/logo.png') }}" alt="Logo" width="93" height="86"></span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button
            @click="open = !open"
            class="absolute top-[38px] right-4 my-auto md:hidden p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
            aria-label="Toggle navigation"
        >
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Navigation Menu -->
        <nav :class="{ 'block': open, 'hidden': !open }" class="hidden md:block mt-4 lg:mt-0">
            <ul class="menu-list">
                <li class="{{ isActiveRoute('home') ? 'active' : '' }}"><a href="{{ route('home') }}">HOME</a></li>
                <li class="{{ isActiveRoute('about') ? 'active' : '' }}"><a href="{{ route('about') }}">ABOUT US</a></li>
                <li class="{{ isActiveRoute('brands') ? 'active' : '' }}"><a href="{{ route('brands') }}">BRANDS</a></li>
                <li class="{{ isActiveRoute('distribution') ? 'active' : '' }}"><a href="{{ route('distribution') }}">DISTRIBUTION</a></li>
                <li class="{{ isActiveRoute(['contact', 'career']) ? 'active' : '' }}"><a href="{{ route('contact') }}">CONTACT</a></li>
            </ul>
        </nav>
    </div>

</header>
