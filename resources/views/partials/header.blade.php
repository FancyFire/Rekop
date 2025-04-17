<div class="flex items-center justify-between px-6 py-4 bg-gray-50 border-b">
    {{-- Left: Logo & Title --}}
    <div class="flex items-center gap-4">
        {{-- Brand Name --}}
        <div class="w-16"></div>
        <h1 class="text-xl font-semibold text-gray-800">
            <a href="/dashboard">
                <span class="font-bold">EZ</span><span class="font-normal">SEO</span>
            </a>
            
        </h1>
    </div>

    {{-- Center: Navigation Tabs --}}
    <div class="flex space-x-8">
        <x-atoms.forms.button variant="top_nav" href="/dashboard" :active="request()->is('dashboard')">
            Home
        </x-atoms.forms.button>
        <x-atoms.forms.button variant="top_nav" href="#">
            Activity
        </x-atoms.forms.button>
        <x-atoms.forms.button variant="top_nav" href="#">
            Reports
        </x-atoms.forms.button>
    </div>

    {{-- Right: Notification + Help Icon --}}
    <div class="relative flex items-center space-x-4">
        <div class="relative">
            <button class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white">
                ?
            </button>
            <span class="absolute -top-1 -right-1 w-5 h-5 bg-pink-500 text-xs text-white rounded-full flex items-center justify-center">2</span>
        </div>
    </div>
</div>
