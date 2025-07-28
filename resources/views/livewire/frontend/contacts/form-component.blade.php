<div class="bg-black shadow-lg px-3 lg:px-14 py-10 lg:py-14 rounded-2xl">
    <form class="space-y-6" wire:submit='submit'>

        @if (session('contact_success'))
            <div class="relative bg-green-100 px-4 py-3 border border-green-400 rounded-full text-green-700" role="alert">
                {{ session('contact_success') }}
            </div>
        @endif

        <div class="gap-6 grid grid-cols-1 md:grid-cols-5">
            <!-- Left Column -->
            <div class="col-span-1 md:col-span-2">
            <input type="text" wire:model.blur='full_name' placeholder="@lang('Full Name')" class="bg-gray-50 px-4 py-3 border border-gray-300 focus:border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 w-full text-xl" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @error('full_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Right Column -->
            <div class="col-span-1 md:col-span-3">
            <input type="text" wire:model.blur='company' placeholder="@lang('Company / Organization')" class="bg-gray-50 px-4 py-3 border border-gray-300 focus:border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 w-full text-xl" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @error('company') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="gap-6 grid grid-cols-1 md:grid-cols-5">
            <!-- Left Column -->
            <div class="col-span-1 md:col-span-3">
            <input type="email" wire:model.blur='email' placeholder="@lang('Email')" class="bg-gray-50 px-4 py-3 border border-gray-300 focus:border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 w-full text-xl" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Right Column -->
            <div class="col-span-1 md:col-span-2">
            <input type="tel" wire:model.blur='phone_number' placeholder="@lang('Phone Number')" class="bg-gray-50 px-4 py-3 border border-gray-300 focus:border-transparent rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 w-full text-xl" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @error('phone_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Message Field -->
        <div class="space-y-1">
            <textarea rows="4" wire:model.blur='message' class="bg-gray-50 px-4 py-3 border border-gray-300 focus:border-transparent rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500 w-full text-xl" placeholder="@lang('Message')" wire:loading.attr="disabled" wire:loading.class="bg-gray-100"></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="block bg-red-500 hover:bg-red-600 shadow-sm mx-auto px-4 py-3 rounded-2xl w-full max-w-[200px] font-medium text-white text-2xl transition-colors cursor-pointer" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @lang('Submit')
        </button>
    </form>
</div>
