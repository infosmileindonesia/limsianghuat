<div class="bg-black rounded-2xl p-14 shadow-lg">
    <form class="space-y-6" wire:submit='submit'>

        @if (session('contact_success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-full relative" role="alert">
                {{ session('contact_success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
            <!-- Left Column -->
            <div class="col-span-1 md:col-span-2">
            <input type="text" wire:model.blur='full_name' placeholder="Full Name" class="w-full text-xl bg-gray-50 rounded-full border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @error('full_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Right Column -->
            <div class="col-span-1 md:col-span-3">
            <input type="text" wire:model.blur='company' placeholder="Company / Organization" class="w-full text-xl bg-gray-50 rounded-full border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @error('company') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
            <!-- Left Column -->
            <div class="col-span-1 md:col-span-3">
            <input type="email" wire:model.blur='email' placeholder="Email" class="w-full text-xl bg-gray-50 rounded-full border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            <!-- Right Column -->
            <div class="col-span-1 md:col-span-2">
            <input type="tel" wire:model.blur='phone_number' placeholder="Phone Number" class="w-full text-xl bg-gray-50 rounded-full border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            @error('phone_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Message Field -->
        <div class="space-y-1">
            <textarea rows="4" wire:model.blur='message' class="w-full text-xl bg-gray-50 rounded-2xl border border-gray-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Message" wire:loading.attr="disabled" wire:loading.class="bg-gray-100"></textarea>
            @error('message') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="mx-auto w-full block max-w-min bg-red-500 hover:bg-red-600 text-white font-medium py-3 px-4 rounded-2xl text-2xl transition-colors shadow-sm" wire:loading.attr="disabled" wire:loading.class="bg-gray-100">
            Submit
        </button>
    </form>
</div>
