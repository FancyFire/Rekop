<div class="p-6 max-w-7xl mx-auto space-y-6">
    <h2 class="text-2xl font-semibold text-gray-800">Calls & Text Notification</h2>

    <div class="bg-white border-2 border-gray-200 block p-6">
        <p class="text-normal max-w-3xl mb-4">
            Set up notifications for calls and text messages to be sent to an account user via email or desktop alert. 
        </br>These can be customized by setting the type of calls received and which number received them.</br> 
            Notifications can also be sent to a Slack channel through <span class="text-indigo-600 hover:underline"><a href="#">our Slack integration</a></span>.
        </p>
    
        <x-atoms.forms.button href="#" variant="primary">
            Create notification
        </x-atoms.forms.button>
    
        <div class="overflow-x-auto mt-6 bg-white shadow-md rounded-lg">
            <table class="min-w-full text-sm text-left text-gray-700">
                <thead class="text-xs uppercase bg-gray-100 text-gray-600">
                    <tr>
                        <th class="px-6 py-4">Company</th>
                        <th class="px-6 py-4">Recipient</th>
                        <th class="px-6 py-4">Number</th>
                        <th class="px-6 py-4">Interaction Type</th>
                        <th class="px-6 py-4 text-center">Notification Type</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($notificationCalls as $index => $notification)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $notification['company'] }}</td>
                            <td class="px-6 py-4">{{ $notification['recipient'] }}</td>
                            <td class="px-6 py-4">{{ $notification['number'] }}</td>
                            <td class="px-6 py-4">{{ $notification['interaction'] }}</td>
                            <td class="px-6 py-4 max-w-xs">{{ $notification['notification'] }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-6 py-4 text-center text-indigo-600 hover:underline">
                                <a href="#">Add notifications to receive alerts for calls and texts to your tracking numbers.</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
