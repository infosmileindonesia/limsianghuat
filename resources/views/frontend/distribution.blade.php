{{-- filepath: resources/views/frontend/distribution.blade.php --}}
@extends('layouts.app')

@section('title', 'Distribution')

@section('content')

<section>

    <x-frontend.hero.minimal
        :image="asset('img/placeholder/distribution.png')"
        :title="'Distribution'"
    />

    <div class="container mx-auto py-10">
        <p class="text-center mt-4">Our company have been continuosly develop and expand into different cities in
            Indonesia to create wider connection with restaurants, hotels, supermarkets, bars,
            night clubs and individual consumers. </p>

            <div class="relative" id="map-parent">
                <img src="{{ asset('img/placeholder/maps.png') }}" class="w-full h-auto" alt="">

                <div class="absolute inset-0">
                    <div id="tooltip" role="tooltip">I'm a tooltip</div>
                    <svg class="w-full h-full" width="1112" height="410" viewBox="0 0 1112 410" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="pointer-distrib-1">
                            <g id="Area-1"
                                class="cursor-pointer"
                                data-pointer="batam"
                                >
                                <path id="Vector" d="M228.5 90.5C235.104 90.5 240.458 96.3763 240.458 103.625C240.458 113.374 231.062 119.099 228.928 120.273C228.656 120.423 228.344 120.423 228.072 120.273C225.938 119.099 216.542 113.374 216.542 103.625C216.542 96.3763 221.896 90.5 228.5 90.5ZM228.5 98C225.67 98 223.375 100.518 223.375 103.625C223.375 106.732 225.67 109.25 228.5 109.25C231.33 109.25 233.625 106.732 233.625 103.625C233.625 100.518 231.33 98 228.5 98Z" fill="#E31D1C"/>
                                <path id="Vector_2" d="M228.5 111C223.806 111 220 107.194 220 102.5C220 97.8056 223.806 94 228.5 94C233.194 94 237 97.8056 237 102.5C237 107.194 233.194 111 228.5 111Z" fill="white"/>
                                <path id="Vector_3" d="M229.94 104.58H227.03L226.53 106H225.34L227.83 99.04H229.15L231.64 106H230.44L229.94 104.58ZM229.62 103.65L228.49 100.42L227.35 103.65H229.62Z" fill="black"/>
                            </g>
                            <g id="Area-2"
                                class="cursor-pointer"
                                data-pointer="jakarta"
                                >
                                <path id="Vector_4" d="M281.958 264C288.562 264 293.916 269.876 293.916 277.125C293.916 286.874 284.52 292.599 282.386 293.773C282.114 293.923 281.802 293.923 281.53 293.773C279.396 292.599 270 286.874 270 277.125C270 269.876 275.354 264 281.958 264ZM281.958 271.5C279.128 271.5 276.833 274.018 276.833 277.125C276.833 280.232 279.128 282.75 281.958 282.75C284.788 282.75 287.083 280.232 287.083 277.125C287.083 274.018 284.788 271.5 281.958 271.5Z" fill="#E31D1C"/>
                                <path id="Vector_5" d="M281.958 284.5C277.264 284.5 273.458 280.694 273.458 276C273.458 271.306 277.264 267.5 281.958 267.5C286.652 267.5 290.458 271.306 290.458 276C290.458 280.694 286.652 284.5 281.958 284.5Z" fill="white"/>
                                <path id="Vector_6" d="M282.928 275.93C283.301 275.997 283.618 276.193 283.878 276.52C284.138 276.847 284.268 277.217 284.268 277.63C284.268 277.983 284.175 278.303 283.988 278.59C283.808 278.87 283.545 279.093 283.198 279.26C282.851 279.42 282.448 279.5 281.988 279.5H279.208V272.55H281.858C282.331 272.55 282.738 272.63 283.078 272.79C283.418 272.95 283.675 273.167 283.848 273.44C284.021 273.707 284.108 274.007 284.108 274.34C284.108 274.74 284.001 275.073 283.788 275.34C283.575 275.607 283.288 275.803 282.928 275.93ZM280.348 275.47H281.758C282.131 275.47 282.421 275.387 282.628 275.22C282.841 275.047 282.948 274.8 282.948 274.48C282.948 274.167 282.841 273.923 282.628 273.75C282.421 273.57 282.131 273.48 281.758 273.48H280.348V275.47ZM281.888 278.57C282.275 278.57 282.578 278.477 282.798 278.29C283.018 278.103 283.128 277.843 283.128 277.51C283.128 277.17 283.011 276.9 282.778 276.7C282.545 276.5 282.235 276.4 281.848 276.4H280.348V278.57H281.888Z" fill="black"/>
                            </g>
                            <g id="Area-3"
                                class="cursor-pointer"
                                data-pointer="surabaya"
                                >
                                <path id="Vector_7" d="M413.958 287C420.562 287 425.916 292.876 425.916 300.125C425.916 309.874 416.52 315.599 414.386 316.773C414.114 316.923 413.802 316.923 413.53 316.773C411.396 315.599 402 309.874 402 300.125C402 292.876 407.354 287 413.958 287ZM413.958 294.5C411.128 294.5 408.833 297.018 408.833 300.125C408.833 303.232 411.128 305.75 413.958 305.75C416.788 305.75 419.083 303.232 419.083 300.125C419.083 297.018 416.788 294.5 413.958 294.5Z" fill="#E31D1C"/>
                                <path id="Vector_8" d="M413.958 307.5C409.264 307.5 405.458 303.694 405.458 299C405.458 294.306 409.264 290.5 413.958 290.5C418.652 290.5 422.458 294.306 422.458 299C422.458 303.694 418.652 307.5 413.958 307.5Z" fill="white"/>
                                <path id="Vector_9" d="M410.828 299.01C410.828 298.33 410.985 297.72 411.298 297.18C411.618 296.64 412.048 296.22 412.588 295.92C413.135 295.613 413.731 295.46 414.378 295.46C415.118 295.46 415.775 295.643 416.348 296.01C416.928 296.37 417.348 296.883 417.608 297.55H416.238C416.058 297.183 415.808 296.91 415.488 296.73C415.168 296.55 414.798 296.46 414.378 296.46C413.918 296.46 413.508 296.563 413.148 296.77C412.788 296.977 412.505 297.273 412.298 297.66C412.098 298.047 411.998 298.497 411.998 299.01C411.998 299.523 412.098 299.973 412.298 300.36C412.505 300.747 412.788 301.047 413.148 301.26C413.508 301.467 413.918 301.57 414.378 301.57C414.798 301.57 415.168 301.48 415.488 301.3C415.808 301.12 416.058 300.847 416.238 300.48H417.608C417.348 301.147 416.928 301.66 416.348 302.02C415.775 302.38 415.118 302.56 414.378 302.56C413.725 302.56 413.128 302.41 412.588 302.11C412.048 301.803 411.618 301.38 411.298 300.84C410.985 300.3 410.828 299.69 410.828 299.01Z" fill="black"/>
                            </g>
                            <g id="Area-4"
                                class="cursor-pointer"
                                data-pointer="bali"
                                >
                                <path id="Vector_10" d="M487.958 317C494.562 317 499.916 322.876 499.916 330.125C499.916 339.874 490.52 345.599 488.386 346.773C488.114 346.923 487.802 346.923 487.53 346.773C485.396 345.599 476 339.874 476 330.125C476 322.876 481.354 317 487.958 317ZM487.958 324.5C485.128 324.5 482.833 327.018 482.833 330.125C482.833 333.232 485.128 335.75 487.958 335.75C490.788 335.75 493.083 333.232 493.083 330.125C493.083 327.018 490.788 324.5 487.958 324.5Z" fill="#E31D1C"/>
                                <path id="Vector_11" d="M487.958 337.5C483.264 337.5 479.458 333.694 479.458 329C479.458 324.306 483.264 320.5 487.958 320.5C492.652 320.5 496.458 324.306 496.458 329C496.458 333.694 492.652 337.5 487.958 337.5Z" fill="white"/>
                                <path id="Vector_12" d="M487.478 325.55C488.218 325.55 488.865 325.693 489.418 325.98C489.978 326.26 490.408 326.667 490.708 327.2C491.015 327.727 491.168 328.343 491.168 329.05C491.168 329.757 491.015 330.37 490.708 330.89C490.408 331.41 489.978 331.81 489.418 332.09C488.865 332.363 488.218 332.5 487.478 332.5H485.208V325.55H487.478ZM487.478 331.57C488.291 331.57 488.915 331.35 489.348 330.91C489.781 330.47 489.998 329.85 489.998 329.05C489.998 328.243 489.781 327.613 489.348 327.16C488.915 326.707 488.291 326.48 487.478 326.48H486.348V331.57H487.478Z" fill="black"/>
                            </g>
                        </g>
                    </svg>
                </div>

            </div>
    </div>

    <div class="container mx-auto py-10">
        <h2 class="section-title-secondary-2 text-center mt-10">Unlocking Opportunities,
            Expanding Your Reach.</h2>

        <div class="accordions"
            x-data="{accordionActive: 0}"
            @click.away="accordionActive = 0"
            >

            <div class="accordion-item bg-zinc-100"
                :class="{ 'accordion-active' : accordionActive === 1}">
                <div class="accordion-header group" @click="accordionActive = accordionActive === 1 ? 0 : 1">
                    <h3 class="accordion-title group-hover:underline">Hotel Restaurant Cafe</h3>
                    <div class="accordion-subtitle group-hover:underline">
                        Connecting you with restaurants, hotels, and cafés for maximum exposure.
                    </div>
                </div>
                <div
                    x-transition
                    x-show="accordionActive === 1" class="accordion-content">
                    <div
                        data-perfect-scrollbar
                        data-wheel-speed="1"
                        data-suppress-scroll-x="true"
                        data-min-scrollbar-length="20"
                        data-max-scrollbar-length="100"
                        class="accordion-content-outter">
                        <div class="accordion-content-inner">

                            <div class="products-list">

                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item bg-stone-200"
                :class="{ 'accordion-active' : accordionActive === 2}">
                <div class="accordion-header group" @click="accordionActive = accordionActive === 2 ? 0 : 2">
                    <h3 class="accordion-title group-hover:underline">General Trade</h3>
                    <div class="accordion-subtitle group-hover:underline">
                        Connecting you with retailers and businesses that expand your reach.
                    </div>
                </div>
                <div
                    x-transition
                    x-show="accordionActive === 2" class="accordion-content">
                    <div
                        data-perfect-scrollbar
                        data-wheel-speed="1"
                        data-suppress-scroll-x="true"
                        data-min-scrollbar-length="20"
                        data-max-scrollbar-length="100"
                        class="accordion-content-outter">
                        <div class="accordion-content-inner">

                            <div class="products-list">

                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-item bg-neutral-300"
                :class="{ 'accordion-active' : accordionActive === 3}">
                <div class="accordion-header group" @click="accordionActive = accordionActive === 3 ? 0 : 3">
                    <h3 class="accordion-title group-hover:underline">Modern Trade</h3>
                    <div class="accordion-subtitle group-hover:underline">
                        Connecting you with leading retailers and distribution channels.
                    </div>
                </div>
                <div
                    x-transition
                    x-show="accordionActive === 3" class="accordion-content">
                    <div
                        data-perfect-scrollbar
                        data-wheel-speed="1"
                        data-suppress-scroll-x="true"
                        data-min-scrollbar-length="20"
                        data-max-scrollbar-length="100"
                        class="accordion-content-outter">
                        <div class="accordion-content-inner">

                            <div class="products-list">

                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>
                                <div class="aspect-square rounded-full bg-gray-500"></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
</section>

@endsection

@push('plugins-scripts')

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const data = [
                {
                    id: 'batam',
                    name: 'Batam',
                    email: 'sm.batam@lsh.co.id',
                    phone: '021-12345678',
                },
                {
                    id: 'jakarta',
                    name: 'Jakarta',
                    email: 'sm.jkt@lsh.co.id',
                    phone: '021-12345678',
                },
                {
                    id: 'surabaya',
                    name: 'Surabaya',
                    email: 'sm.sub@lsh.co.id',
                    phone: '021-12345678',
                },
                {
                    id: 'bali',
                    name: 'Bali',
                    email: 'sm.bali@lsh.co.id',
                    phone: '021-12345678',
                },
            ],

            pointer = document.querySelectorAll('[data-pointer]'),
            parent = document.getElementById('map-parent'),
            tooltip = document.getElementById('tooltip');

            pointer.forEach(function (el) {
                el.addEventListener('mouseenter', function () {
                    const id = el.getAttribute('data-pointer');
                    const item = data.find(item => item.id === id);

                    tooltip.innerHTML = `
                        <div class="tooltip-header">
                            <h3>${item.name}</h3>
                        </div>
                        <div class="tooltip-body">
                            <p><span><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.0063598 4.7913C1.98876e-10 5.23895 0 5.73315 0 6.28027V9.96502C0 12.7934 0 14.2077 0.87868 15.0863C1.75736 15.965 3.17157 15.965 6 15.965H14C16.8284 15.965 18.2426 15.965 19.1213 15.0863C20 14.2077 20 12.7935 20 9.96502V6.28027C20 5.73315 20 5.23895 19.9936 4.7913L10.9774 9.84191C10.3702 10.1821 9.6298 10.1821 9.02257 9.84191L0.0063598 4.7913ZM0.16361 2.65473C0.27479 2.67316 0.384724 2.71084 0.488716 2.76909L10 8.09702L19.5113 2.76909C19.6153 2.71084 19.7252 2.67316 19.8364 2.65473C19.7135 2.01135 19.4982 1.53588 19.1213 1.15895C18.2426 0.280273 16.8284 0.280273 14 0.280273H6C3.17157 0.280273 1.75736 0.280273 0.87868 1.15895C0.501753 1.53588 0.286516 2.01135 0.16361 2.65473Z"
                                            fill="black" />
                                    </svg>
                                </span> <a href="mailto:${item.email}">${item.email}</a></p>
                            <p><span><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.67962 2.10985L4.08237 0.707107C4.47289 0.316582 5.10606 0.316582 5.49658 0.707106L8.71395 3.92447C9.10447 4.315 9.10447 4.94816 8.71395 5.33869L6.52687 7.52576C6.1808 7.87183 6.095 8.40053 6.31388 8.83829C7.57918 11.3689 9.63112 13.4208 12.1617 14.6861C12.5995 14.905 13.1282 14.8192 13.4742 14.4731L15.6613 12.2861C16.0518 11.8955 16.685 11.8955 17.0755 12.2861L20.2929 15.5034C20.6834 15.8939 20.6834 16.5271 20.2929 16.9176L18.8902 18.3204C16.7788 20.4317 13.4362 20.6693 11.0475 18.8777L8.57594 17.0241C6.83241 15.7164 5.28359 14.1676 3.97594 12.4241L2.12226 9.95249C0.330722 7.56377 0.568273 4.2212 2.67962 2.10985Z"
                                            fill="black" />
                                    </svg>
                                </span><a href="tel:${item.phone}">${item.phone}</a></p>
                        </div>
                    `;
                    tooltip.classList.add('tooltip-active');

                    const rect = el.getBoundingClientRect();
                    const parentRect = parent.getBoundingClientRect();

                    // get the position of the element
                    const x = rect.left - parentRect.left + (rect.width / 2) - (tooltip.offsetWidth / 2);
                    const y = rect.top - parentRect.top - tooltip.offsetHeight - 10;

                    tooltip.style.left = `${x}px`;
                    tooltip.style.top = `${y}px`;

                });
            });

            parent.addEventListener('mouseleave', function () {
                tooltip.classList.remove('tooltip-active');
            });

        })

    </script>

@endpush
