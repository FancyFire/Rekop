<div class="p-6 max-w-7xl mx-auto space-y-6">
    <h2 class="text-2xl font-semibold text-gray-800">Dynamic number insertion</h2>

    <div class="bg-white border-2 border-gray-200 block p-6">
        <p class="text-normal mb-4">
            Set up alerts to receive emails when dynamic number insertion is not working properly, 
            specifically when </br>your pool size is swapping too quickly.
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
                        <th class="px-6 py-4">Alerts</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dynamicNumberAlert as $index => $alert)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $alert['recipient'] }}</td>
                            <td class="px-6 py-4">{{ $alert['email'] }}</td>
                            <td class="px-6 py-4">{{ $alert['alert'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-indigo-600 hover:underline">
                                <a href="#">Add an alert to receive email notification.</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
