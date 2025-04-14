<div class="flex min-h-screen">
    <aside class="w-64 bg-gray-100 p-4 border-r">
        <nav>
            <div class="section-title text-lg">LEAD CAPTURE
                <ul>
                    <li><x-atoms.forms.button 
                        variant="sec_nav"
                        href="{{ route('phone-settings.numbers') }}"
                        :active="$section === 'numbers'">
                        Numbers
                    </x-atoms.forms.button>
                </li> 
                    <li><x-atoms.forms.button 
                        variant="sec_nav" 
                        href="{{ route('phone-settings.inbound-ports') }}"
                        :active="$section === 'inbound-ports'">
                        Porting in
                    </x-atoms.forms.button></li>
                    <li><x-atoms.forms.button 
                        variant="sec_nav" 
                        href="{{ route('phone-settings.click-to-contact') }}"
                        :active="$section === 'click-to-contact'">
                        Click to contact
                    </x-atoms.forms.button></li>                    
                </ul>
            </div>
            <div class="section-title text-lg">LEAD MANAGEMENT
                <ul>
                    <li>
                        <x-atoms.forms.button 
                        variant="sec_nav" 
                        href="{{ route('phone-settings.blocked-numbers') }}"
                        :active="$section === 'blocked-numbers'">
                        Blocked numbers
                    </x-atoms.forms.button>
                    </li>
                </ul>
            </div>
            
        </nav>
    </aside>
    <div class="flex-1 p-6">
        @if ($section === 'numbers')
            @include('livewire.pages.phone-trackings.lead-capture.number')
            @elseif ($section === 'inbound-ports')
            @include('livewire.pages.phone-trackings.lead-capture.porting-in')
            @elseif ($section === 'click-to-contact')
            @include('livewire.pages.phone-trackings.lead-capture.click-contact')
            @elseif ($section === 'blocked-numbers')
            @include('livewire.pages.phone-trackings.lead-management.blocked-numbers')
        @endif
    </div>
</div>
    

