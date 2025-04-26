<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="overflow-auto w-full px-4 lg:px-0 border-b">
        <ul class="flex gap-4 justify-around pb-8" x-data="{ department: null }">
            <li class="text-base whitespace-nowrap lg:text-2xl text-center rounded-3xl border px-4 lg:py-4 lg:px-10 py-2 transition-all duration-300 ease-in-out"
                x-on:click="department = null"
                x-bind:class="{ 'bg-black text-white': department === null }"
            ><span>View All</span></li>
            @foreach ($departments as $department)
                <li class="text-base whitespace-nowrap lg:text-2xl text-center rounded-3xl border px-4 lg:py-4 lg:px-10 py-2 transition-all duration-300 ease-in-out"
                    x-on:click="department = '{{ $department }}'"
                    x-bind:class="{ 'bg-black text-white': department === '{{ $department }}' }"
                >
                    <a href="#">{{ $department }}</a>
                </li>
            @endforeach
        </ul>

    </div>

    <div class="pt-8">
        <div class="space-y-4">
            @foreach ($listings as $listing)
                <div class="flex items-start justify-between">
                    <div>
                        <h2 class="text-xl lg:text-3xl font-bold text-black">{{ $listing->title }}</h2>
                        <p class="text-base lg:text-lg text-gray-500">{{ $listing->description }}</p>


                        <ul class="flex flex-row gap-4 mt-4">

                            <li class="text-base lg:text-xl text-center rounded-3xl border border-gray-600 px-4 py-1.5 lg:px-8 lg:py-3 transition-all duration-300 ease-in-out text-gray-600">
                                <span>Full Time</span>
                            </li>
                            <li class="text-base lg:text-xl text-center rounded-3xl border border-gray-600 px-4 py-1.5 lg:px-8 lg:py-3 transition-all duration-300 ease-in-out text-gray-600">
                                <span>{{ $listing->level }}</span>
                            </li>

                        </ul>

                    </div>
                    <div>
                        <a href="#" class="text-lg lg:text-2xl font-bold flex space-x-0.5"><span>Apply</span> <span class="inline max-w-2.5 lg:max-w-none"><svg class="w-full lg:w-auto" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.7614 13.6551L27.6185 11.6602L29.6134 11.5173L29.7563 13.5122L27.7614 13.6551ZM16.9957 29.1361C16.2725 29.971 15.0094 30.0614 14.1745 29.3382C13.3397 28.6149 13.2492 27.3518 13.9725 26.517L16.9957 29.1361ZM17.039 12.4178L27.6185 11.6602L27.9042 15.6499L17.3247 16.4076L17.039 12.4178ZM29.7563 13.5122L30.5139 24.0917L26.5242 24.3774L25.7665 13.7979L29.7563 13.5122ZM29.273 14.9646L16.9957 29.1361L13.9725 26.517L26.2497 12.3455L29.273 14.9646Z" fill="#33363F"/>
                            </svg>
                            </span></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
