<div class="p-6 w-full text-2xl font-bold sm:p-6">
    Blocked Numbers
</div>

  <!-- Blocked Numbers Table -->
  <div class="grid md:grid-cols-3 gap-6">
    <div class="overflow-x-auto mb-6 col-span-2">
        <div class="bg-white border rounded-lg p-4 mb-6">
            <label for="phone-number" class="block font-medium text-gray-700 mb-2">Block a Phone Number</label>
            <div class="flex space-x-2">
              <input id="phone-number" type="text" placeholder="404-555-1234" class="border border-gray-300 rounded px-3 py-2 w-full">
              <button class="bg-gray-700 text-white px-4 py-2 rounded">Block</button>
            </div>
          </div>
        <table class="min-w-full bg-white border rounded">
          <thead class="bg-gray-100 text-gray-700">
            <tr>
              <th class="text-left px-4 py-2 border-b">Number</th>
              <th class="text-left px-4 py-2 border-b">Blocked Since</th>
              <th class="text-left px-4 py-2 border-b">Calls Blocked</th>
              <th class="text-left px-4 py-2 border-b">Most Recent</th>
              <th class="text-left px-4 py-2 border-b">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="5" class="text-center text-gray-500 py-4">No blocked numbers yet.</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="bg-white p-4 border rounded text-sm text-gray-700 space-y-4 mb-6">
        <h2 class="font-semibold text-base">Block Phone Numbers</h2>
        <p>Blocked calls and text messages will not appear on your reports. You can choose to block a call in two ways:</p>
        <ul class="list-disc p-4">
            <li class="mb-2"><p><strong>Challenge:</strong> Prompt the caller to press 1 to complete the call, which helps confirm that the caller is a person, not a robodialer.</p></li>
            <li><p><strong>Reject:</strong> Block the call completely, regardless of whether the caller is a person or a robodialer.</p></li>
        </ul>
        <p>You may enter an area code (e.g. 770), an area code and exchange (e.g. 770-901) or a full 10 digit phone number.</p>
      </div>
  </div>
  

  <!-- Filter Callers by Category -->
  <div class="grid md:grid-cols-2 gap-6">
    <!-- Left Side (Radio Groups) -->
    <div class="bg-white p-4 border rounded space-y-4">
        <div class="text-xl border-b border-gray-200">Filter Callers by Category</div>
      @php
        $categories = [
          'Calls to Inactive Numbers', 'Robocallers & Telemarketers', 'Non-Local Callers',
          'US Area Codes', 'Canadian Area Codes', 'Toll Free Callers',
          'Anonymous Callers', 'Non-Standard Callers', 'All Callers'
        ];
      @endphp
      @foreach ($categories as $category)
        <div>
          <label class="block font-medium text-gray-700 mb-1">{{ $category }}</label>
          <div class="flex items-center space-x-4">
            <label class="flex items-center">
              <input type="radio" name="{{ Str::slug($category, '_') }}" class="text-blue-600" checked>
              <span class="ml-2">Allow</span>
            </label>
            <label class="flex items-center">
              <input type="radio" name="{{ Str::slug($category, '_') }}" class="text-blue-600">
              <span class="ml-2">Challenge</span>
            </label>
            <label class="flex items-center">
              <input type="radio" name="{{ Str::slug($category, '_') }}" class="text-blue-600">
              <span class="ml-2">Block</span>
            </label>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Right Side (Info Text) -->
    <div class="bg-white p-4 border rounded text-sm text-gray-700 space-y-4">
      <h2 class="font-semibold text-base">Filter Callers by Category</h2>
      <p><strong>Challenging</strong> a call plays a message to the caller asking them to press 1 before the call is connected.</p>
      <p><strong>Calls to Inactive Numbers</strong>: Calls to a visitor tracking number that isn't currently assigned to a website visitor.</p>
      <p><strong>Robocallers & Telemarketers</strong>: Calls from a phone number which is suspected to be spam.</p>
      <p><strong>Non-Local Callers</strong>: Calls from a phone number which is outside the local calling area of the tracking number they dialed.</p>
      <p><strong>US Area Codes</strong>: Calls from a number with a US area code.</p>
      <p><strong>Canadian Area Codes</strong>: Calls from a number with a Canadian area code.</p>
      <p><strong>Toll Free Callers</strong>: Calls from a toll-free number.</p>
      <p><strong>Anonymous Callers</strong>: Calls that do not provide valid caller ID information.</p>
      <p><strong>Non-Standard Callers</strong>: Calls that don't provide a standard 10-digit phone number (e.g., Skype or international numbers).</p>
      <p><strong>All Callers</strong>: Calls from any phone number. (Selecting Challenge will override filters for other categories.)</p>
    </div>
  </div>
</main>
</div>

