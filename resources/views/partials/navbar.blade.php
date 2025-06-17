{{-- filepath: d:\PersonalFolder\Freel\LIMSIANGHUAT\web_folder\resources\views\partials\navbar.blade.php --}}
<header x-data="{ open: false }">

    <div class="relative flex md:flex-row flex-col justify-center items-center mx-auto lg:py-4 min-h-[121px] container">
        <!-- Logo Section -->
        <div class="md:top-0 md:bottom-0 md:left-0 md:absolute flex justify-center items-center md:self-center md:place-items-center md:grid mb-0 lg:mb-4 h-full">
            <a href="#">
                <span><img src="{{ asset('img/logo.png') }}" alt="Logo" width="93" height="86"></span>
            </a>
        </div>

        <!-- Mobile Menu Button -->
        <button
            @click="open = !open"
            class="md:hidden top-[38px] right-4 absolute my-auto p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-500"
            aria-label="Toggle navigation"
        >
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Navigation Menu -->
        <nav :class="{ 'block': open, 'hidden': !open }" class="hidden md:block mt-4 lg:mt-0">
            <ul class="menu-list">
                <li class="{{ isActiveRoute('home') ? 'active' : '' }}"><a href="{{ route('home') }}">@lang('HOME')</a></li>
                <li class="{{ isActiveRoute('about') ? 'active' : '' }}"><a href="{{ route('about') }}">@lang('ABOUT US')</a></li>
                <li class="{{ isActiveRoute('brands') ? 'active' : '' }}"><a href="{{ route('brands') }}">@lang('BRANDS')</a></li>
                <li class="{{ isActiveRoute('distribution') ? 'active' : '' }}"><a href="{{ route('distribution') }}">@lang('DISTRIBUTION')</a></li>
                <li class="{{ isActiveRoute(['contact', 'career']) ? 'active' : '' }}"><a href="{{ route('contact') }}">@lang('CONTACT')</a></li>
            </ul>
        </nav>

        <!-- Language Switcher -->

        <div class="md:top-0 md:right-4 md:bottom-0 md:absolute flex justify-center items-center md:self-center md:place-items-center md:grid mb-0 lg:mb-4 h-full">
            <div class="flex items-center space-x-2">
                @php
                    $locale = app()->getLocale();
                @endphp
                <a href="{{ route('locale', 'en') }}" class="{{ isLocaleCurrent('en') ? 'text-red-500 cursor-default' : '' }}">EN</a>
                <span>|</span>
                <a href="{{ route('locale', 'zh_TW') }}" class="{{ isLocaleCurrent('zh_TW') ? 'text-red-500 cursor-default' : '' }}">中文</a>
            </div>
        </div>

    </div>

</header>
