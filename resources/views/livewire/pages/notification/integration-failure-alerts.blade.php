<div class="p-6 max-w-7xl mx-auto space-y-6">
    <h2 class="text-2xl font-semibold text-gray-800">Integration alerts</h2>

    <div class="bg-white border-2 border-gray-200 block p-6">
        <p class="text-normal mb-4">
            Create alerts below to email users if any integration in the chosen company either fails or is in a pending state for over 24 hours.</br>
            These are in addition to alerts automatically sent to the last user that edited an integration.
        </p>
    
        <x-atoms.forms.button href="#" variant="primary">
            Create alert
        </x-atoms.forms.button>
    
        <div class="overflow-x-auto mt-6 bg-white shadow-md rounded-lg">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="text-xs uppercase bg-gray-100 text-gray-600">
                    <tr>
                        <th class="px-6 py-4">Recipient</th>
                        <th class="px-6 py-4">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($integrationAlerts as $index => $integration)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $integration['recipient'] }}</td>
                            <td class="px-6 py-4">{{ $integration['email'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-indigo-600 hover:underline">
                                <a href="#">Add an alert to receive notice of an integration failure.</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
