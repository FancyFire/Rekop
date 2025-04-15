    <div class="mt-4 flex justify-center items-center ">


        <x-atoms.forms.button variant="top_nav" href="{{ route('phone-settings.numbers') }}" :active="request()->is('phone-settings/routing/call-and-text/numbers/active')">
            Tracking
        </x-atoms.forms.button>
        <x-atoms.forms.button variant="top_nav" href="{{ route('call-flow-builder.call-flows') }}"  :active="request()->is('settings/workflow/call-flows')">
            Workflow
        </x-atoms.forms.button>
        <x-atoms.forms.button variant="top_nav" href="{{ route('settings-integration.library')}}" :active="request()->is('settings/integration/library')">
            Integrations
        </x-atoms.forms.button>

    </div>
