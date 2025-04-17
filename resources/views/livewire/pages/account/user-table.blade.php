<div class="flex-1 p-6">
    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 mb-4">
        <p class="font-bold">Info</p>
        <p>Managers can no longer create, edit, or disable other users.</p>
    </div>

    <h2 class="text-2xl font-bold mb-4">Users</h2>

    <div class="flex justify-end items-center mb-4">
        <div>
            <button class="font-semibold text-blue-600">All Users ({{ count($users) }})</button>
            <button class="ml-4 text-gray-500">Pending Users (0)</button>
            <input type="text" placeholder="Search..." class="border border-gray-300 rounded w-64">
        </div>
        
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full text-sm text-left text-gray-700 bg-white shadow rounded">
            <thead class="bg-gray-100 text-xs font-semibold text-gray-600 uppercase">
                <tr>
                    <th class="px-4 py-3">User</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">User Type</th>
                    <th class="px-4 py-3">Last Active</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">{{ $user['name'] }}</td>
                        <td class="px-4 py-3">{{ $user['email'] }}</td>
                        <td class="px-4 py-3">{{ $user['type'] }}</td>
                        <td class="px-4 py-3">{{ $user['active'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>