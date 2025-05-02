<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="mt-12 mb-20">

        <div class="career-filter-card">
            <div class="flex justify-between items-center">

                <div>
                    <div class="relative" x-on:click="openDept = !openDept" x-on:click.away="openDept = false"
                        x-on:keydown.escape.window="openDept = false" x-data="{ openDept: false }">
                        <div class="filter-wrapper" x-bind:class="{ 'text-red-500': openDept }">
                            <p class="text-red-500 text-2xl">Department</p>
                            <span>
                                <svg class="transition-transform duration-300 ease-in-out"
                                    x-bind:class="{ 'rotate-180': openDept }" width="31" height="31" viewBox="0 0 31 31"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.3078 19.1445L10.135 12.9371C9.70074 12.4161 10.0713 11.625 10.7495 11.625L20.2501 11.625C20.9284 11.625 21.2989 12.4161 20.8647 12.9371L15.6919 19.1445C15.5919 19.2645 15.4077 19.2645 15.3078 19.1445Z"
                                        fill="#222222" />
                                </svg>
                            </span>
                        </div>

                        {{-- checkbox list filter --}}
                        <div class="checkbox-area" x-show="openDept" x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 transform scale(95)"
                            x-transition:enter-end="opacity-100 transform scale(100)"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 transform scale(100)"
                            x-transition:leave-end="opacity-0 transform scale(95)">
                            <div class="checkbox-list-item">
                                @foreach ($departments as $department)
                                <div class="checkbox-item">
                                    <label for="department-{{ $department }}" class="text-lg">{{ $department }}</label>
                                    <input type="checkbox" id="department-{{ $department }}"
                                        wire:model.live="selectedDepartment" value="{{ $department }}" class="block w-4 h-4">
                                </div>

                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div>

                    <div class="flex items-center gap-x-6 cursor-pointer">
                        <div class="relative" x-on:click="openState = !openState" x-on:click.away="openState = false"
                            x-on:keydown.escape.window="openState = false" x-data="{ openState: false }">
                            <div class="filter-wrapper" x-bind:class="{ 'text-red-500': openState }">
                                <p class="text-red-500 text-2xl">State</p>
                                <span>
                                    <svg class="transition-transform duration-300 ease-in-out"
                                        x-bind:class="{ 'rotate-180': openState }" width="31" height="31" viewBox="0 0 31 31"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.3078 19.1445L10.135 12.9371C9.70074 12.4161 10.0713 11.625 10.7495 11.625L20.2501 11.625C20.9284 11.625 21.2989 12.4161 20.8647 12.9371L15.6919 19.1445C15.5919 19.2645 15.4077 19.2645 15.3078 19.1445Z"
                                            fill="#222222" />
                                    </svg>
                                </span>
                            </div>

                            {{-- checkbox list filter --}}
                            <div class="checkbox-area" x-show="openState" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale(95)"
                                x-transition:enter-end="opacity-100 transform scale(100)"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform scale(100)"
                                x-transition:leave-end="opacity-0 transform scale(95)">
                                <div class="checkbox-list-item">

                                    <div class="checkbox-item">
                                        <label for="state-all" class="text-lg">All Cities</label>

                                        <input type="checkbox" id="state-all" value="all" wire:model.live='allStateSelected'
                                            class="block w-4 h-4">
                                    </div>
                                    @foreach ($states as $state)
                                    <div class="checkbox-item">
                                        <label for="state-{{ $state }}" class="text-lg">{{ $state }}</label>
                                        <input type="checkbox" id="state-{{ $state }}" wire:model.live="stateSelected"
                                            value="{{ $state }}" class="block w-4 h-4">
                                    </div>

                                    @endforeach

                                </div>
                            </div>
                        </div>

                        <div class="relative" x-on:click="openLevel = !openLevel"
                            x-on:keydown.escape.window="openLevel = false" x-data="{ openLevel: false }">
                            <div class="filter-wrapper" x-bind:class="{ 'text-red-500': openLevel }">
                                <p class="text-red-500 text-2xl">Level</p>
                                <span>
                                    <svg class="transition-transform duration-300 ease-in-out"
                                        x-bind:class="{ 'rotate-180': openLevel }" width="31" height="31"
                                        viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.3078 19.1445L10.135 12.9371C9.70074 12.4161 10.0713 11.625 10.7495 11.625L20.2501 11.625C20.9284 11.625 21.2989 12.4161 20.8647 12.9371L15.6919 19.1445C15.5919 19.2645 15.4077 19.2645 15.3078 19.1445Z"
                                            fill="#222222" />
                                    </svg>
                                </span>
                            </div>

                            {{-- checkbox list filter --}}
                            <div class="checkbox-area" x-show="openLevel"
                                x-on:click.away="openLevel = false"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale(95)"
                                x-transition:enter-end="opacity-100 transform scale(100)"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 transform scale(100)"
                                x-transition:leave-end="opacity-0 transform scale(95)">
                                <div class="checkbox-list-item">

                                    @foreach ($levels as $level)
                                    <div class="checkbox-item">
                                        <label for="level-{{ $level }}" class="text-lg">{{ $level }}</label>
                                        <input type="checkbox" id="level-{{ $level }}" wire:model.live="levelSelected"
                                            value="{{ $level }}">
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

            <div class="flex justify-center items-center mt-20">
                <a href="#" class="text-center underline hover:no-underline"
                    x-on:click.prevent="confirm('Are you sure you want to remove all filters?') ? @this.removeFilters() : null"
                >
                    Remove Filters
                </a>
            </div>


        </div>

    </div>

    <div class="overflow-auto w-full px-4 lg:px-0 border-b">
        <ul class="flex gap-4 justify-around pb-8" x-data="{ department: @entangle('selectedDepartmentLabel') }">
            <li class="text-base whitespace-nowrap lg:text-2xl text-center rounded-3xl border px-4 lg:py-4 lg:px-10 py-2 transition-all duration-300 ease-in-out"
                x-on:click="department = null"
                x-bind:class="{ 'bg-black text-white': department === null }"
            ><span class="cursor-pointer">View All</span></li>
            @foreach ($departments as $department)
                <li class="text-base whitespace-nowrap lg:text-2xl text-center rounded-3xl border px-4 lg:py-4 lg:px-10 py-2 transition-all duration-300 ease-in-out"
                    x-on:click.prevent="department = '{{ $department }}'"
                    x-bind:class="{ 'bg-black text-white': department === '{{ $department }}' }"
                >
                    <a href="#">{{ $department }}</a>
                </li>
            @endforeach
        </ul>

    </div>

    <div class="pt-8">
        <div class="space-y-4">
            @foreach ($filteredListings as $listing)
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
