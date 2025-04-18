<div class="p-6 max-w-7xl mx-auto space-y-6">
    <h2 class="text-2xl font-semibold text-gray-800">Scheduled Reports</h2>

    <div class="bg-white border-2 border-gray-200 block p-6">
        <p class="text-normal mb-4">
            Schedule a report to be emailed at regular intervals as a downloadable Excel (.xls) file. All columns in the 
            </br> report will be present. Custom reports can only be sent to your email address.
        </p>
    
        <x-atoms.forms.button href="#" variant="primary">
            Schedule a Report
        </x-atoms.forms.button>
    
        <div class="overflow-x-auto mt-6 bg-white shadow-md rounded-lg">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="text-xs uppercase bg-gray-100 text-gray-600">
                    <tr>
                        <th class="px-6 py-4">Company</th>
                        <th class="px-6 py-4">Recipient</th>
                        <th class="px-6 py-4">Report</th>
                        <th class="px-6 py-4">Frequency</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($scheduledReport as $index => $report)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $report['company'] }}</td>
                            <td class="px-6 py-4">{{ $report['recipient'] }}</td>
                            <td class="px-6 py-4">{{ $report['report'] }}</td>
                            <td class="px-6 py-4">{{ $report['frequency'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-black">
                                <a href="#">There are no reports scheduled to be emailed.</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
