<div class="p-6 text-2xl font-bold sm:flex">
    Call flows
</div>

<div class="p-4  block sm:flex items-center justify-between rounded-lg lg:mt-1.5 mx-4">
    
    <div class="w-full mb-1 bg-white p-4">
        <div class="mb-4 w-3/4 text-justify">
            Call flows determine where callers are routed when they call your tracking numbers. Add steps like greetings, menus, and voicemail. Forward calls to a specific phone number, or send them to individual agents or teams. You can build a call flow from scratch or use the templates below as a starting point.
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

    <!-- Card Component -->
    <a href="/settings/call-flow-builder/new" data-tooltip-target="tooltip-blank" class="relative flex flex-col items-center justify-center border border-gray-200 rounded-lg p-8 bg-white hover:shadow-md transition">
      <div class="text-blue-500 text-3xl mb-2"><x-atoms.icons.rounded-circle-plus /></div>
      <span class="text-gray-700 font-medium">Blank</span>
      <div class="absolute bottom-2 right-2 text-gray-400 text-xl">→</div>
    </a>
    <div id="tooltip-blank" role="tooltip" class="tooltip absolute z-10 invisible inline-block w-64 px-3 py-2 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        Build your own call and route callers according to your business needs.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <!-- Direct to Voicemail -->
    <a href="#" data-tooltip-target="tooltip-voicemail" class="relative flex flex-col items-center justify-center border border-gray-200 rounded-lg p-8 bg-white hover:shadow-md transition">
      <div class="text-blue-500 text-3xl mb-2"><x-atoms.icons.direct-voicemail /></div>
      <span class="text-gray-700 font-medium">Direct to Voicemail</span>
      <div class="absolute bottom-2 right-2 text-gray-400 text-xl">→</div>
    </a>
    <div id="tooltip-voicemail" role="tooltip" class="tooltip absolute z-10 invisible inline-block w-64 px-3 py-2 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        Route callers directly to your call flow's
        voicemail without ringing your phone.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <!-- Greeting → Dial → Voicemail -->
    <a href="#" data-tooltip-target="tooltip-gdv" class="relative flex flex-col items-center justify-center border border-gray-200 rounded-lg p-8 bg-white hover:shadow-md transition">
      <div class="flex space-x-2 text-blue-500 text-2xl mb-2">
        <span><x-atoms.icons.message /></span><span><x-atoms.icons.circle-phone /></span><span><x-atoms.icons.direct-voicemail /></span>
      </div>
      <span class="text-gray-700 font-medium">Greeting → Dial → Voicemail</span>
      <div class="absolute bottom-2 right-2 text-gray-400 text-xl">→</div>
    </a>
    <div id="tooltip-gdv" role="tooltip" class="tooltip absolute z-10 invisible inline-block w-64 px-3 py-2 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        Play a message to callers before routing 
        them to your phone. They'll reach your
        call flow's voicemail if there's no
        answer.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <!-- Greeting → Menu → Dial -->
    <a href="#" data-tooltip-target="tooltip-gmd" class="relative flex flex-col items-center justify-center border border-gray-200 rounded-lg p-8 bg-white hover:shadow-md transition">
      <div class="flex space-x-2 text-blue-500 text-2xl mb-2">
        <span><x-atoms.icons.message /></span><span><x-atoms.icons.keypad /></span><span><x-atoms.icons.circle-phone /></span>
      </div>
      <span class="text-gray-700 font-medium">Greeting → Menu → Dial</span>
      <div class="absolute bottom-2 right-2 text-gray-400 text-xl">→</div>
    </a>
    <div id="tooltip-gmd" role="tooltip" class="tooltip absolute z-10 invisible inline-block w-64 px-3 py-2 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        Play a message to callers, then ask them
        to press a number on their keypad to
        route to a specific person, department
        or team.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <!-- Greeting → Simulcall → Voicemail -->
    <a href="#" data-tooltip-target="tooltip-gsv" class="relative flex flex-col items-center justify-center border border-gray-200 rounded-lg p-8 bg-white hover:shadow-md transition">
      <div class="flex space-x-2 text-blue-500 text-2xl mb-2">
        <span><x-atoms.icons.message /></span><span><x-atoms.icons.circle-phone /></span><span><x-atoms.icons.direct-voicemail /></span>
      </div>
      <span class="text-gray-700 font-medium">Greeting → Simulcall → Voicemail</span>
      <div class="absolute bottom-2 right-2 text-gray-400 text-xl">→</div>
    </a>
    <div id="tooltip-gsv" role="tooltip" class="tooltip absolute z-10 invisible inline-block w-64 px-3 py-2 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        Play a message to callers, then ring
        multiple numbers at the same time. If
        no one answers, the caller reaches your call flow's voicemail.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

    <!-- Schedule → Dial → Voicemail -->
    <a href="#" data-tooltip-target="tooltip-sdv" class="relative flex flex-col items-center justify-center border border-gray-200 rounded-lg p-8 bg-white hover:shadow-md transition">
      <div class="flex space-x-2 text-blue-500 text-2xl mb-2">
        <span><x-atoms.icons.schedule /></span><span><x-atoms.icons.circle-phone /></span><span><x-atoms.icons.direct-voicemail /></span>
      </div>
      <span class="text-gray-700 font-medium">Schedule → Dial → Voicemail</span>
      <div class="absolute bottom-2 right-2 text-gray-400 text-xl">→</div>
    </a>
    <div id="tooltip-sdv" role="tooltip" class="tooltip absolute z-10 invisible inline-block w-64 px-3 py-2 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-xs opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
        Direct callers to a number based on
        your business hours. If they call outside
        of those hours, they'll reach your call flow's voicemail.
      <div class="tooltip-arrow" data-popper-arrow></div>
    </div>

  </div>