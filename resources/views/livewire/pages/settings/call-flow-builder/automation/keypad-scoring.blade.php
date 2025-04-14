<div class="p-6 text-2xl font-bold sm:flex">
    Keypad scoring
</div>

<div class="bg-white border border-gray-200 p-6 rounded-lg shadow-sm flex flex-col md:flex-row gap-6">
    <!-- Left Section -->
    <div class="flex-1 space-y-6">
        <p class="text-gray-700">
            Keypad Scoring allows you to enter valuable information about a call after it ends. You can classify
            callers as qualified leads, apply a call tag, and add a value to a call. You'll input this information
            as soon as the call ends by pressing the * key, or by allowing the customer to end the call first.
        </p>

        <div>
            <h2 class="font-semibold text-gray-800 mb-2">Configure</h2>
            <p class="text-gray-600 mb-4">Select the features to be included in the survey.</p>

            <div class="space-y-4">
                <div class="flex items-center">
                    <input id="qualified" type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="qualified" class="ml-2 text-gray-700">Mark as a qualified lead</label>
                </div>
                <div class="flex items-center">
                    <input id="tag" type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="tag" class="ml-2 text-gray-700">Add a tag</label>
                </div>
                <div class="flex items-center">
                    <input id="value" type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                    <label for="value" class="ml-2 text-gray-700">Record a value</label>
                </div>
            </div>

            <button class="mt-6 bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-5 rounded">
                Save
            </button>
        </div>
    </div>

    <!-- Right Section -->
    <div class="bg-gray-50 border border-gray-200 p-4 rounded-lg w-full md:w-1/3">
        <h3 class="text-lg font-medium mb-2 text-gray-800">About Keypad Scoring</h3>
        <p class="text-gray-600 mb-2">
            For more information on Keypad Scoring, see our support article.
        </p>
        <a href="#" class="text-blue-600 hover:underline">Keypad Scoring Support Article</a>
    </div>
</div>