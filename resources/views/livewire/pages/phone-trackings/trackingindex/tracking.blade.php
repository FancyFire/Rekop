<div class="float-left mx-2.5 w-auto py-8 pr-2 sm:w-auto">
    <nav>
        <div class="section-title text-lg">LEAD CAPTURE
            <ul>
                <li><x-atoms.forms.button 
                    variant="sec_nav" 
                    href="#" 
                    tab="numbers"
                    wire:click.prevent="setTab('numbers')">
                    Numbers
                </x-atoms.forms.button>
            </li> 
                <li><x-atoms.forms.button 
                    variant="sec_nav" 
                    href="#" 
                    tab="porting-in"
                    wire:click.prevent="setTab('porting-in')">
                    Porting in
                </x-atoms.forms.button></li>
                <li><x-atoms.forms.button 
                    variant="sec_nav" 
                    href="#" 
                    tab="click-contact"
                    wire:click.prevent="setTab('click-contact')">
                    Click to contact
                </x-atoms.forms.button></li>                    
            </ul>
        </div>
        <div class="section-title text-lg">LEAD MANAGEMENT
            <ul>
                <li><a href="#" class="inline-flex items-center p-2 text-sm font-medium text-center text-blue-400 hover:bg-blue-800 sm:w-auto rounded-sm">Blocked numbers</a></li>
            </ul>
        </div>
        
    </nav>
</div>
    @if ($activeTab === 'numbers')
    @include('livewire.pages.phone-trackings.lead-capture.number')
    @elseif ($activeTab === 'porting-in')
    @include('livewire.pages.phone-trackings.lead-capture.porting-in')
    @elseif ($activeTab === 'contact')
    @include('livewire.pages.phone-trackings.lead-capture.contact')
    @endif
</div>
