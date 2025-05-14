<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <div class="mt-12 mb-24 lg:mb-52">

        <div class="career-filter-card">
            <div class="grid grid-cols-3 items-center gap-y-4 lg:gap-y-0 divide-x divide-gray-300">
                <div class="relative w-full" x-on:click="openDept = !openDept" x-on:click.away="openDept = false"
                    x-on:keydown.escape.window="openDept = false" x-data="{ openDept: false }">
                    <div class="filter-wrapper" x-bind:class="{ 'text-red-500': openDept }">
                        <span>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13.5" cy="9" r="3.5" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                                <path d="M17.0682 8.9375C17.3831 8.392 17.9019 7.99395 18.5103 7.83093C19.1187 7.6679 19.767 7.75325 20.3125 8.06819C20.858 8.38313 21.256 8.90188 21.4191 9.5103C21.5821 10.1187 21.4968 10.767 21.1818 11.3125C20.8669 11.858 20.3481 12.256 19.7397 12.4191C19.1313 12.5821 18.483 12.4968 17.9375 12.1818C17.392 11.8669 16.994 11.3481 16.8309 10.7397C16.6679 10.1313 16.7532 9.483 17.0682 8.9375L17.0682 8.9375Z" stroke="#33363F" stroke-width="2"/>
                                <path d="M5.81819 8.9375C6.13313 8.392 6.65188 7.99395 7.2603 7.83093C7.86873 7.6679 8.517 7.75325 9.0625 8.06819C9.608 8.38313 10.006 8.90188 10.1691 9.5103C10.3321 10.1187 10.2468 10.767 9.93181 11.3125C9.61687 11.858 9.09812 12.256 8.4897 12.4191C7.88127 12.5821 7.233 12.4968 6.6875 12.1818C6.142 11.8669 5.74395 11.3481 5.58093 10.7397C5.4179 10.1313 5.50325 9.483 5.81819 8.9375L5.81819 8.9375Z" stroke="#33363F" stroke-width="2"/>
                                <path d="M19.1245 15.75V14.75H19.1244L19.1245 15.75ZM23.3569 19.1523L24.306 18.8371L24.3058 18.8368L23.3569 19.1523ZM18.9897 20.25L18.0094 20.4475L18.1711 21.25H18.9897V20.25ZM16.6274 16.5508L16.0223 15.7547L14.8666 16.6333L16.0993 17.3999L16.6274 16.5508ZM19.1245 15.75V16.75C21.117 16.75 22.0017 18.2461 22.408 19.4679L23.3569 19.1523L24.3058 18.8368C23.8262 17.3944 22.4732 14.75 19.1245 14.75V15.75ZM23.3569 19.1523L22.4079 19.4676C22.4019 19.4495 22.3966 19.4151 22.4047 19.3735C22.4124 19.334 22.4289 19.3042 22.4445 19.285C22.4743 19.2482 22.4988 19.25 22.4917 19.25V20.25V21.25C23.6433 21.25 24.7504 20.1752 24.306 18.8371L23.3569 19.1523ZM22.4917 20.25V19.25H18.9897V20.25V21.25H22.4917V20.25ZM18.9897 20.25L19.9701 20.0525C19.7276 18.8488 19.0569 16.8841 17.1556 15.7016L16.6274 16.5508L16.0993 17.3999C17.3112 18.1536 17.8106 19.4605 18.0094 20.4475L18.9897 20.25ZM16.6274 16.5508L17.2326 17.3469C17.687 17.0015 18.2892 16.7501 19.1246 16.75L19.1245 15.75L19.1244 14.75C17.8439 14.7501 16.8182 15.1496 16.0223 15.7547L16.6274 16.5508Z" fill="#33363F"/>
                                <path d="M7.87572 15.75L7.87581 14.75H7.87572V15.75ZM10.3718 16.5508L10.9001 17.3999L12.1327 16.6329L10.9768 15.7546L10.3718 16.5508ZM8.01048 20.25V21.25H8.82911L8.99079 20.4475L8.01048 20.25ZM4.50755 20.25L4.50709 21.25H4.50755V20.25ZM3.64329 19.1523L2.69439 18.8368L2.69428 18.8371L3.64329 19.1523ZM7.87572 15.75L7.87563 16.75C8.71036 16.7501 9.31214 17.0015 9.76678 17.347L10.3718 16.5508L10.9768 15.7546C10.1813 15.1501 9.1563 14.7501 7.87581 14.75L7.87572 15.75ZM10.3718 16.5508L9.84355 15.7017C7.94265 16.8844 7.27259 18.8492 7.03018 20.0525L8.01048 20.25L8.99079 20.4475C9.18964 19.4604 9.68874 18.1535 10.9001 17.3999L10.3718 16.5508ZM8.01048 20.25V19.25H4.50755V20.25V21.25H8.01048V20.25ZM4.50755 20.25L4.50801 19.25C4.50099 19.25 4.52573 19.2483 4.55576 19.2853C4.57138 19.3046 4.58786 19.3345 4.59551 19.3738C4.60359 19.4154 4.59824 19.4497 4.59231 19.4676L3.64329 19.1523L2.69428 18.8371C2.25018 20.1741 3.35494 21.2495 4.50709 21.25L4.50755 20.25ZM3.64329 19.1523L4.5922 19.4679C4.99853 18.2461 5.88325 16.75 7.87572 16.75V15.75V14.75C4.52705 14.75 3.17407 17.3944 2.69439 18.8368L3.64329 19.1523Z" fill="#33363F"/>
                                <path d="M13.5 15.75C17.6212 15.75 18.723 18.7694 19.0175 20.3839C19.1166 20.9272 18.6773 21.375 18.125 21.375H8.875C8.32272 21.375 7.88335 20.9272 7.98248 20.3839C8.27702 18.7694 9.37879 15.75 13.5 15.75Z" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
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
                                <label for="department-{{ $department }}" class="text-lg">{{ $department }} (<span class="w-2">{{ $availableDepartments[$department] }}</span>)</label>
                                <input type="checkbox" id="department-{{ $department }}"
                                    wire:model.live="selectedDepartment" value="{{ $department }}" class="block w-4 h-4">
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="relative w-full" x-on:click="openState = !openState" x-on:click.away="openState = false"
                    x-on:keydown.escape.window="openState = false" x-data="{ openState: false }">
                    <div class="filter-wrapper" x-bind:class="{ 'text-red-500': openState }">
                         <span>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13.5" cy="9" r="3.5" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                                <path d="M17.0682 8.9375C17.3831 8.392 17.9019 7.99395 18.5103 7.83093C19.1187 7.6679 19.767 7.75325 20.3125 8.06819C20.858 8.38313 21.256 8.90188 21.4191 9.5103C21.5821 10.1187 21.4968 10.767 21.1818 11.3125C20.8669 11.858 20.3481 12.256 19.7397 12.4191C19.1313 12.5821 18.483 12.4968 17.9375 12.1818C17.392 11.8669 16.994 11.3481 16.8309 10.7397C16.6679 10.1313 16.7532 9.483 17.0682 8.9375L17.0682 8.9375Z" stroke="#33363F" stroke-width="2"/>
                                <path d="M5.81819 8.9375C6.13313 8.392 6.65188 7.99395 7.2603 7.83093C7.86873 7.6679 8.517 7.75325 9.0625 8.06819C9.608 8.38313 10.006 8.90188 10.1691 9.5103C10.3321 10.1187 10.2468 10.767 9.93181 11.3125C9.61687 11.858 9.09812 12.256 8.4897 12.4191C7.88127 12.5821 7.233 12.4968 6.6875 12.1818C6.142 11.8669 5.74395 11.3481 5.58093 10.7397C5.4179 10.1313 5.50325 9.483 5.81819 8.9375L5.81819 8.9375Z" stroke="#33363F" stroke-width="2"/>
                                <path d="M19.1245 15.75V14.75H19.1244L19.1245 15.75ZM23.3569 19.1523L24.306 18.8371L24.3058 18.8368L23.3569 19.1523ZM18.9897 20.25L18.0094 20.4475L18.1711 21.25H18.9897V20.25ZM16.6274 16.5508L16.0223 15.7547L14.8666 16.6333L16.0993 17.3999L16.6274 16.5508ZM19.1245 15.75V16.75C21.117 16.75 22.0017 18.2461 22.408 19.4679L23.3569 19.1523L24.3058 18.8368C23.8262 17.3944 22.4732 14.75 19.1245 14.75V15.75ZM23.3569 19.1523L22.4079 19.4676C22.4019 19.4495 22.3966 19.4151 22.4047 19.3735C22.4124 19.334 22.4289 19.3042 22.4445 19.285C22.4743 19.2482 22.4988 19.25 22.4917 19.25V20.25V21.25C23.6433 21.25 24.7504 20.1752 24.306 18.8371L23.3569 19.1523ZM22.4917 20.25V19.25H18.9897V20.25V21.25H22.4917V20.25ZM18.9897 20.25L19.9701 20.0525C19.7276 18.8488 19.0569 16.8841 17.1556 15.7016L16.6274 16.5508L16.0993 17.3999C17.3112 18.1536 17.8106 19.4605 18.0094 20.4475L18.9897 20.25ZM16.6274 16.5508L17.2326 17.3469C17.687 17.0015 18.2892 16.7501 19.1246 16.75L19.1245 15.75L19.1244 14.75C17.8439 14.7501 16.8182 15.1496 16.0223 15.7547L16.6274 16.5508Z" fill="#33363F"/>
                                <path d="M7.87572 15.75L7.87581 14.75H7.87572V15.75ZM10.3718 16.5508L10.9001 17.3999L12.1327 16.6329L10.9768 15.7546L10.3718 16.5508ZM8.01048 20.25V21.25H8.82911L8.99079 20.4475L8.01048 20.25ZM4.50755 20.25L4.50709 21.25H4.50755V20.25ZM3.64329 19.1523L2.69439 18.8368L2.69428 18.8371L3.64329 19.1523ZM7.87572 15.75L7.87563 16.75C8.71036 16.7501 9.31214 17.0015 9.76678 17.347L10.3718 16.5508L10.9768 15.7546C10.1813 15.1501 9.1563 14.7501 7.87581 14.75L7.87572 15.75ZM10.3718 16.5508L9.84355 15.7017C7.94265 16.8844 7.27259 18.8492 7.03018 20.0525L8.01048 20.25L8.99079 20.4475C9.18964 19.4604 9.68874 18.1535 10.9001 17.3999L10.3718 16.5508ZM8.01048 20.25V19.25H4.50755V20.25V21.25H8.01048V20.25ZM4.50755 20.25L4.50801 19.25C4.50099 19.25 4.52573 19.2483 4.55576 19.2853C4.57138 19.3046 4.58786 19.3345 4.59551 19.3738C4.60359 19.4154 4.59824 19.4497 4.59231 19.4676L3.64329 19.1523L2.69428 18.8371C2.25018 20.1741 3.35494 21.2495 4.50709 21.25L4.50755 20.25ZM3.64329 19.1523L4.5922 19.4679C4.99853 18.2461 5.88325 16.75 7.87572 16.75V15.75V14.75C4.52705 14.75 3.17407 17.3944 2.69439 18.8368L3.64329 19.1523Z" fill="#33363F"/>
                                <path d="M13.5 15.75C17.6212 15.75 18.723 18.7694 19.0175 20.3839C19.1166 20.9272 18.6773 21.375 18.125 21.375H8.875C8.32272 21.375 7.88335 20.9272 7.98248 20.3839C8.27702 18.7694 9.37879 15.75 13.5 15.75Z" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
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
                <div class="relative w-full" x-on:click="openLevel = !openLevel"
                    x-on:keydown.escape.window="openLevel = false" x-data="{ openLevel: false }">
                    <div class="filter-wrapper" x-bind:class="{ 'text-red-500': openLevel }">
                        <span>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="13.5" cy="9" r="3.5" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                                <path d="M17.0682 8.9375C17.3831 8.392 17.9019 7.99395 18.5103 7.83093C19.1187 7.6679 19.767 7.75325 20.3125 8.06819C20.858 8.38313 21.256 8.90188 21.4191 9.5103C21.5821 10.1187 21.4968 10.767 21.1818 11.3125C20.8669 11.858 20.3481 12.256 19.7397 12.4191C19.1313 12.5821 18.483 12.4968 17.9375 12.1818C17.392 11.8669 16.994 11.3481 16.8309 10.7397C16.6679 10.1313 16.7532 9.483 17.0682 8.9375L17.0682 8.9375Z" stroke="#33363F" stroke-width="2"/>
                                <path d="M5.81819 8.9375C6.13313 8.392 6.65188 7.99395 7.2603 7.83093C7.86873 7.6679 8.517 7.75325 9.0625 8.06819C9.608 8.38313 10.006 8.90188 10.1691 9.5103C10.3321 10.1187 10.2468 10.767 9.93181 11.3125C9.61687 11.858 9.09812 12.256 8.4897 12.4191C7.88127 12.5821 7.233 12.4968 6.6875 12.1818C6.142 11.8669 5.74395 11.3481 5.58093 10.7397C5.4179 10.1313 5.50325 9.483 5.81819 8.9375L5.81819 8.9375Z" stroke="#33363F" stroke-width="2"/>
                                <path d="M19.1245 15.75V14.75H19.1244L19.1245 15.75ZM23.3569 19.1523L24.306 18.8371L24.3058 18.8368L23.3569 19.1523ZM18.9897 20.25L18.0094 20.4475L18.1711 21.25H18.9897V20.25ZM16.6274 16.5508L16.0223 15.7547L14.8666 16.6333L16.0993 17.3999L16.6274 16.5508ZM19.1245 15.75V16.75C21.117 16.75 22.0017 18.2461 22.408 19.4679L23.3569 19.1523L24.3058 18.8368C23.8262 17.3944 22.4732 14.75 19.1245 14.75V15.75ZM23.3569 19.1523L22.4079 19.4676C22.4019 19.4495 22.3966 19.4151 22.4047 19.3735C22.4124 19.334 22.4289 19.3042 22.4445 19.285C22.4743 19.2482 22.4988 19.25 22.4917 19.25V20.25V21.25C23.6433 21.25 24.7504 20.1752 24.306 18.8371L23.3569 19.1523ZM22.4917 20.25V19.25H18.9897V20.25V21.25H22.4917V20.25ZM18.9897 20.25L19.9701 20.0525C19.7276 18.8488 19.0569 16.8841 17.1556 15.7016L16.6274 16.5508L16.0993 17.3999C17.3112 18.1536 17.8106 19.4605 18.0094 20.4475L18.9897 20.25ZM16.6274 16.5508L17.2326 17.3469C17.687 17.0015 18.2892 16.7501 19.1246 16.75L19.1245 15.75L19.1244 14.75C17.8439 14.7501 16.8182 15.1496 16.0223 15.7547L16.6274 16.5508Z" fill="#33363F"/>
                                <path d="M7.87572 15.75L7.87581 14.75H7.87572V15.75ZM10.3718 16.5508L10.9001 17.3999L12.1327 16.6329L10.9768 15.7546L10.3718 16.5508ZM8.01048 20.25V21.25H8.82911L8.99079 20.4475L8.01048 20.25ZM4.50755 20.25L4.50709 21.25H4.50755V20.25ZM3.64329 19.1523L2.69439 18.8368L2.69428 18.8371L3.64329 19.1523ZM7.87572 15.75L7.87563 16.75C8.71036 16.7501 9.31214 17.0015 9.76678 17.347L10.3718 16.5508L10.9768 15.7546C10.1813 15.1501 9.1563 14.7501 7.87581 14.75L7.87572 15.75ZM10.3718 16.5508L9.84355 15.7017C7.94265 16.8844 7.27259 18.8492 7.03018 20.0525L8.01048 20.25L8.99079 20.4475C9.18964 19.4604 9.68874 18.1535 10.9001 17.3999L10.3718 16.5508ZM8.01048 20.25V19.25H4.50755V20.25V21.25H8.01048V20.25ZM4.50755 20.25L4.50801 19.25C4.50099 19.25 4.52573 19.2483 4.55576 19.2853C4.57138 19.3046 4.58786 19.3345 4.59551 19.3738C4.60359 19.4154 4.59824 19.4497 4.59231 19.4676L3.64329 19.1523L2.69428 18.8371C2.25018 20.1741 3.35494 21.2495 4.50709 21.25L4.50755 20.25ZM3.64329 19.1523L4.5922 19.4679C4.99853 18.2461 5.88325 16.75 7.87572 16.75V15.75V14.75C4.52705 14.75 3.17407 17.3944 2.69439 18.8368L3.64329 19.1523Z" fill="#33363F"/>
                                <path d="M13.5 15.75C17.6212 15.75 18.723 18.7694 19.0175 20.3839C19.1166 20.9272 18.6773 21.375 18.125 21.375H8.875C8.32272 21.375 7.88335 20.9272 7.98248 20.3839C8.27702 18.7694 9.37879 15.75 13.5 15.75Z" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
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

        <div class="flex justify-center items-center mt-10 lg:mt-20">
            <a href="#" class="text-center underline hover:no-underline"
                x-on:click.prevent="confirm('Are you sure you want to remove all filters?') ? @this.removeFilters() : null"
                x-show="$wire.selectedDepartment.length > 0 || $wire.stateSelected.length > 0 || $wire.levelSelected.length > 0"
            >
                Remove Filters
            </a>
        </div>
    </div>

    <div class="overflow-auto w-full px-4 lg:px-0 border-b">
        <ul class="flex gap-4 justify-around pb-8" x-data="{ department: @entangle('selectedDepartmentLabel') }">
            <li class="text-base whitespace-nowrap lg:text-2xl text-center rounded-3xl border px-4 lg:py-4 lg:px-10 py-2 transition-all duration-300 ease-in-out"
                wire:click="setDepartment('all')"
                x-bind:class="{ 'bg-black text-white': department === null }"
            ><span class="cursor-pointer">View All</span></li>
            @foreach ($departments as $department)
                <li class="text-base whitespace-nowrap lg:text-2xl text-center rounded-3xl border px-4 lg:py-4 lg:px-10 py-2 transition-all duration-300 ease-in-out"
                    {{-- x-on:click.prevent="department = '{{ $department }}'" --}}
                    x-bind:class="{ 'bg-black text-white': department === '{{ $department }}' }"
                    wire:click="setDepartment('{{ $department }}')"
                >
                    <span href="#">{{ $department }}</span>
                </li>
            @endforeach
        </ul>

    </div>

    <div class="pt-8">
        <div class="space-y-4">
            @foreach ($filteredListings as $listing)
                <div class="flex items-start justify-between">
                    <div>
                        <h2 class="text-xl lg:text-2xl font-bold text-black underline mb-2">{{ $listing->title }}</h2>
                        <p class="text-base lg:text-lg text-gray-500">{{ $listing->description }}</p>


                        <ul class="flex flex-row gap-4 mt-4">

                            <li class="text-base flex items-center space-x-4 lg:text-lgl text-center rounded-3xl border border-gray-600 px-3 py-px lg:px-6 lg:py-1 transition-all duration-300 ease-in-out text-gray-600">
                                <span>
                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="15.4998" cy="15.4998" r="10.8333" stroke="#222222"/>
                                    <path d="M21.3125 15.4998H15.75C15.6119 15.4998 15.5 15.3879 15.5 15.2498V10.979" stroke="#222222" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <span class="hover:underline underline-offset-1">Full Time</span>
                            </li>
                            <li class="text-base flex items-center space-x-4 lg:text-lgl text-center rounded-3xl border border-gray-600 px-3 py-px lg:px-6 lg:py-1 transition-all duration-300 ease-in-out text-gray-600">
                                <span>
                                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="15.4998" cy="15.4998" r="10.8333" stroke="#222222"/>
                                    <path d="M21.3125 15.4998H15.75C15.6119 15.4998 15.5 15.3879 15.5 15.2498V10.979" stroke="#222222" stroke-linecap="round"/>
                                    </svg>
                                </span>
                                <span class="hover:underline underline-offset-1">{{ $listing->level }}</span>
                            </li>

                        </ul>

                    </div>
                    <div>
                        <a href="#" class="text-lg lg:text-2xl font-bold flex space-x-0.5"><span>Apply</span> <span class="inline max-w-2.5 lg:max-w-none"><svg class="w-full lg:w-auto" width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.7614 13.6551L27.6185 11.6602L29.6134 11.5173L29.7563 13.5122L27.7614 13.6551ZM16.9957 29.1361C16.2725 29.971 15.0094 30.0614 14.1745 29.3382C13.3397 28.6149 13.2492 27.3518 13.9725 26.517L16.9957 29.1361ZM17.039 12.4178L27.6185 11.6602L27.9042 15.6499L17.3247 16.4076L17.039 12.4178ZM29.7563 13.5122L30.5139 24.0917L26.5242 24.3774L25.7665 13.7979L29.7563 13.5122ZM29.273 14.9646L16.9957 29.1361L13.9725 26.517L26.2497 12.3455L29.273 14.9646Z" fill="#33363F"/>
                            </svg>
                            </span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
