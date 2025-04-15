<div class="p-6 w-full text-2xl font-bold sm:p-6">
    API V3 KEYS
</div>

<div class="bg-white block sm:flex border-b border-gray-200 p-4">
    <div class="grid grid-cols-2 gap-2">
    
        <div class="mb-6">
            <p class="text-gray-600 dark:text-gray-400 mb-4">
                Integrate directly with your custom software using our API V3. With this
                version, you can programmatically access and modify interaction data
                within each of your accounts. Get started today by creating your first API
                key.
            </p>
            <div class="flex inline-flex items-center space-x-4">
                <button wire:click="createApiKey" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Create API V3 Key
                </button>
                <a href="#" class="text-blue-500 hover:underline">
                    Read API Docs
                </a>
            </div>
        </div>
    
        @if ($showNewApiKey)
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">API Key Created!</strong>
                <span class="block sm:inline">{{ $newApiKey }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <x-atoms.icons.cancel/>
                </span>
            </div>
        @endif
        <div class="hidden md:flex">
            <img src="{{ asset('img/integration/api-graphic.webp') }}" alt="api graphic" class="w-auto h-auto rounded-md shadow">
        </div>
    </div>
</div>