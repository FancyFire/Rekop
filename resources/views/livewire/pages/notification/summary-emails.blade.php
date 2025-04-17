<div class="p-6 max-w-7xl mx-auto space-y-6">
    <h2 class="text-2xl font-semibold text-gray-800">Summary emails</h2>

    <p class="text-normal max-w-xl">
        Schedule a summary of your recent account activity to be emailed to the recipient of your choice.
        This summary is customizable by which data it will contain and how frequently it will be sent.
    </p>

    <x-atoms.forms.button href="#" variant="primary">
        Create summary
    </x-atoms.forms.button>

    <div class="overflow-x-auto mt-6 bg-white shadow-md rounded-lg">
        <table class="min-w-full text-sm text-left text-gray-700">
            <thead class="text-xs uppercase bg-gray-100 text-gray-600">
                <tr>
                    <th class="px-6 py-4">Company</th>
                    <th class="px-6 py-4">Recipient</th>
                    <th class="px-6 py-4">Interaction Type</th>
                    <th class="px-6 py-4">Filters</th>
                    <th class="px-6 py-4">Email Contents</th>
                    <th class="px-6 py-4">Frequency</th>
                    <th class="px-6 py-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($summaries as $index => $summary)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-6 py-4">{{ $summary['company'] }}</td>
                        <td class="px-6 py-4">{{ $summary['recipient'] }}</td>
                        <td class="px-6 py-4">{{ $summary['interaction'] }}</td>
                        <td class="px-6 py-4">{{ $summary['filters'] }}</td>
                        <td class="px-6 py-4 truncate max-w-xs">{{ $summary['contents'] }}</td>
                        <td class="px-6 py-4">{{ $summary['frequency'] }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <button wire:click="edit({{ $index }})" class="text-blue-600 hover:text-blue-800">
                                <x-atoms.icons.icon-pen />
                            </button>
                            <button wire:click="delete({{ $index }})" class="text-red-600 hover:text-red-800">
                                <x-atoms.icons.trash-bin />
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">No summaries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
