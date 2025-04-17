<div class="p-6 max-w-4xl mx-auto space-y-6">
    <h2 class="text-2xl font-semibold">My Information</h2>

    @if (session()->has('success'))
        <div class="p-4 text-green-700 bg-green-100 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    <div class="space-y-4 bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">First Name</label>
                <input type="text" wire:model="first_name" class="w-full border-gray-300 rounded-md shadow-sm" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Last Name</label>
                <input type="text" wire:model="last_name" class="w-full border-gray-300 rounded-md shadow-sm" />
            </div>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" wire:model="email" class="w-full border-gray-300 rounded-md shadow-sm" />
        </div>

        <div class="flex items-center gap-2">
            <span class="text-sm font-medium text-gray-700">Plain Text Emails</span>
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" wire:model="plain_text_email" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:bg-blue-600"></div>
            </label>
        </div>

        <div class="flex items-center gap-2">
            <span class="text-sm font-medium text-gray-700">Two-Factor Authentication is</span>
            <label class="inline-flex items-center cursor-pointer">
                <input type="checkbox" wire:model="two_factor" class="sr-only peer">
                <div class="w-11 h-6 bg-gray-200 peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:bg-blue-600 relative">
                    <span class="absolute left-1 top-1 bg-white w-4 h-4 rounded-full transition peer-checked:translate-x-5"></span>
                </div>
                <span class="ml-2 text-gray-700 text-sm">{{ $two_factor ? 'ON' : 'OFF' }}</span>
            </label>
        </div>

        <div class="text-sm text-gray-500 mt-1">
            With Two-Factor Authentication, you'll enter a code each time you log in on a new device or every thirty days...
        </div>

        <div class="pt-4">
            <button wire:click="save" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Save User</button>
        </div>
    </div>
</div>
