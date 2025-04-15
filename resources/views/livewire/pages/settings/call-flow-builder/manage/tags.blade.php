<div class="p-6 text-2xl font-bold sm:flex">
    Tags
</div>

<div class="bg-white border border-gray-200 p-6 rounded-lg shadow-sm flex flex-col md:flex-row gap-6">
    <div class="flex-1 p-10">
        <div class="flex justify-between items-center mb-6">
            <p class="mb-6 text-gray-700 max-w-xl">
                Tags help you organize and label your customer interactions. You can create, edit, and color-code your tags for better data management.
            </p>
            <div>
                <input type="text" placeholder="Search..." class="border px-3 py-2 rounded mr-2">
                <button class="border px-4 py-2 rounded bg-gray-100">Actions</button>
            </div>
        </div>
        
        <div class="bg-white border rounded-lg overflow-hidden">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-100 text-left">
                    <tr>
                        <th class="p-3"><input type="checkbox"></th>
                        <th class="p-3 font-medium">Tag Name</th>
                        <th class="p-3 font-medium">Color</th>
                        <th class="p-3 font-medium">Status</th>
                        <th class="p-3 font-medium">Last Used</th>
                        <th class="p-3"></th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach(['Retained DLF', 'Opportunity', 'Other', 'Conversion', 'Existing Customer'] as $index => $tag)
                    <tr>
                        <td class="p-3"><input type="checkbox"></td>
                        <td class="p-3">{{ $tag }}</td>
                        <td class="p-3">
                            <div class="w-5 h-5 rounded bg-gray-200"></div>
                        </td>
                        <td class="p-3 text-green-600 font-semibold flex items-center gap-1">
                            <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                            Enabled
                        </td>
                        <td class="p-3 text-gray-500">
                            @if($index < 2)
                                Mar 8, 2022
                            @else
                                Apr 14, 2024
                            @endif
                        </td>
                        <td class="p-3 text-right">
                            <button class="text-blue-600 hover:text-blue-800 mr-2">
                                <x-atoms.icons.icon-pen />
                            </button>
                            <button class="text-blue-600 hover:text-blue-800">
                                <x-atoms.icons.trash-bin />
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="p-4 border-t">
                <a href="#" class="text-blue-600 hover:underline text-sm">+ Add Tag</a>
            </div>
        </div>
    </div>
</div>