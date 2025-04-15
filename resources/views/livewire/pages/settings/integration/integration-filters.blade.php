<div class="p-6 w-full text-2xl font-bold sm:p-6">
    Integration filters
</div>

<div class="bg-white border border-gray-200 p-6 rounded-lg shadow-sm flex flex-col md:flex-row gap-6">
    <!-- Left Section -->
    <div class="flex-1 space-y-6">
        <p class="text-gray-600 dark:text-gray-400 mb-4">
            Integration filters act as a filter for the type of calls sent to your third-party tools. Select the integration
            you'd like to configure a custom filter for in the table below. You can choose from any integration that's
            currently active or in a pending state.
        </p>
    
        <p class="text-gray-600 dark:text-gray-400 mb-4">
            CallScore and call tag filters only send if the call is scored or tagged before the call ends. Use the Call Flow
            Builder, Keyword Scoring, Call Score, and Keyword Spotting to ensure your data is sent properly for those
            filters. Integrations without filters receive all calls.
        </p>
    </div>

    <!-- Right Section -->
    <div class="bg-gray-50 border border-gray-200 p-4 rounded-lg w-full md:w-1/3">
        <div>
            <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">About Integration Filters</h3>
            <p class="text-gray-600 dark:text-gray-400 mt-2">
                For more information on integration filters, see our support article.
            </p>
            <a href="#" class="text-blue-500 hover:underline">Integration Filters Support Article</a>
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="py-3 px-6">Integration</th>
                    <th class="py-3 px-6">Number</th>
                    <th class="py-3 px-6">Call Type</th>
                    <th class="py-3 px-6">Minimum Duration</th>
                    <th class="py-3 px-6">Tag</th>
                    <th class="py-3 px-6">Qualified</th>
                    <th class="py-3 px-6"></th> {{-- For Remove button --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($filters as $index => $filter)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="py-4 px-6">{{ $filter['integration'] }}</td>
                        <td class="py-4 px-6">{{ $filter['number'] }}</td>
                        <td class="py-4 px-6">{{ $filter['call_type'] }}</td>
                        <td class="py-4 px-6">{{ $filter['min_duration'] }}</td>
                        <td class="py-4 px-6">{{ $filter['tag'] }}</td>
                        <td class="py-4 px-6">{{ $filter['qualified'] }}</td>
                        <td class="py-4 px-6 text-right">
                            <button wire:click="removeFilter({{ $index }})" class="text-red-500 hover:text-red-700">
                                <x-atoms.icons.trash-bin/>
                            </button>
                        </td>
                    </tr>
                @endforeach
                <tr class="bg-white">
                    <td class="py-4 px-6">
                        <button wire:click="addFilter" class="inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white text-sm font-medium rounded-md focus:outline-none focus:shadow-outline">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                            Add Filter
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <button wire:click="saveFilters" class="inline-flex items-center px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white text-sm font-medium rounded-md focus:outline-none focus:shadow-outline">
            Save
        </button>
    </div>
</div>