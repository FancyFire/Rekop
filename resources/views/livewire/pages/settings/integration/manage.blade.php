<div class="p-6 w-full text-2xl font-bold sm:p-6">
    Manage Integrations
</div>

<div class="p-6">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Manage integrations</h2>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Add integrations
        </button>
    </div>

    <div class="flex items-center space-x-4 mb-4">
        <div class="relative">
            <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                <option>All integrations</option>
                <option>...</option>
            </select>
        </div>

        <div class="relative">
            <select class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 pr-8 rounded leading-tight focus:outline-none focus:shadow-outline">
                <option>All</option>
                <option>Failed</option>
                <option>Pending</option>
                <option>...</option>
            </select>
        </div>

        <div class="relative w-64">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search integrations and states...">
        </div>
    </div>

    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Integration
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Status
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200">
                @php
                    $integrations = [
                        [
                            'name' => 'Google My Business',
                            'status' => 'Failed',
                        ],
                        [
                            'name' => 'Google Ads',
                            'status' => 'Pending',
                        ],
                        // Add more integrations here
                    ];
                @endphp

                @foreach ($integrations as $integration)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div>
                                    @if ($integration['name'] === 'Google My Business')
                                        <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="currentColor"><path d="M20.94 11.3c-.46-2.1-1.97-3.7-4.04-4.1-.76-.1-1.47-.2-2.14-.3-.67-.1-1.3-.2-1.9-.3-.59-.1-1.15-.1-1.67-.1-1.08 0-2.04.2-2.87.5-.83.3-1.5.7-2.02 1.2-.51.5-.9 1.1-1.15 1.8-.25.7-.37 1.4-.37 2.1 0 .7.12 1.4.37 2.1.25.7.64 1.3 1.15 1.8.52.5 1.19.9 2.02 1.2.83.3 1.79.5 2.87.5.52 0 1.08-.1 1.67-.1.59 0 1.15-.1 1.9-.3.67-.1 1.38-.2 2.14-.3 2.07-.4 3.58-2 4.04-4.1.18-.8.28-1.6.28-2.4 0-.8-.1-1.6-.28-2.4zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm0-6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                    @elseif ($integration['name'] === 'Google Ads')
                                        <svg class="h-5 w-5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 4.248c-3.148 0-5.708 2.56-5.708 5.708 0 3.148 2.56 5.708 5.708 5.708 3.148 0 5.708-2.56 5.708-5.708 0-3.148-2.56-5.708-5.708-5.708zm0 8.208c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/><path d="M19.708 12c0 1.38-1.12 2.5-2.5 2.5v4.708h-4.708c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5h4.708v-4.708c0-1.38 1.12-2.5 2.5-2.5s2.5 1.12 2.5 2.5h-4.708v4.708h4.708z"/></svg>
                                    @else
                                        <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                    @endif
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-300">
                                        {{ $integration['name'] }}
                                    </div>
                                    {{-- You might have more details here --}}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full @if ($integration['status'] === 'Failed') bg-red-100 text-red-800 @elseif ($integration['status'] === 'Pending') bg-yellow-100 text-yellow-800 @else bg-green-100 text-green-800 @endif">
                                {{ $integration['status'] }}
                            </span>
                        </td>
                        <td class="px-6 inline-flex py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" data-tooltip-target="tooltip-support" class="text-indigo-600 hover:text-indigo-900">
                                <x-atoms.icons.support-icon/>
                            </a>
                            <div id="tooltip-support" role="tooltip" class="tooltip absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm text-white transition-opacity duration-300 bg-indigo-600 border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                Support Article
                              <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                            <a href="#" data-tooltip-target="tooltip-gear" class="text-blue-600 hover:text-blue-900 ml-2">
                                <x-atoms.icons.gear-icon/>
                            </a>
                            <div id="tooltip-gear" role="tooltip" class="tooltip absolute z-10 invisible inline-block w-auto px-3 py-2 text-sm text-white transition-opacity duration-300 bg-indigo-600 border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                                Edit Integration
                              <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                {{-- More rows will go here --}}
            </tbody>
        </table>
    </div>
</div>