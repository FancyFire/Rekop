<main class="px-2 space-y-4">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-100 p-4 border-r">
            <nav>
                <div class="section-title text-lg">NOTIFICATIONS
                    <ul>
                        <li><x-atoms.forms.button 
                            variant="sec_nav"
                            href="{{ route('notification.summary-emails') }}"
                            :active="$section === 'summary-emails'">
                            Summary emails
                        </x-atoms.forms.button>
                    </li> 
                        <li><x-atoms.forms.button 
                            variant="sec_nav" 
                            href="#"
                            :active="$section === 'compliance-home'">
                            Calls & texts
                        </x-atoms.forms.button></li>                  
                    </ul>
                </div>
                <div class="section-title text-lg">ACCOUNT ALERTS
                    <ul>
                        <li>
                            <x-atoms.forms.button 
                            variant="sec_nav" 
                            href="#"
                            :active="$section === 'all-company'">
                            Integration alerts
                            </x-atoms.forms.button>
                        </li>
                        <li>
                            <x-atoms.forms.button 
                            variant="sec_nav" 
                            href="#"
                            :active="$section === 'all-company'">
                            Dynamic number insertion
                        </x-atoms.forms.button>
                        </li>
                    </ul>
                </div>
                <div class="section-title text-lg">REPORTS
                    <ul>
                        <li>
                            <x-atoms.forms.button 
                            variant="sec_nav" 
                            href="#"
                            :active="$section === 'all-company'">
                            Scheduled Reports
                        </x-atoms.forms.button>
                        </li>
                    </ul>
                </div>
                
            </nav>
        </aside>
        <div class="flex-1 p-6">
            @if ($section === 'summary-emails')
                @include('livewire.pages.notification.summary-emails')
                @elseif ($section === 'all-user')
                @include('livewire.pages.account.user-table')
                @elseif ($section === 'compliance-home')
                @include('livewire.pages.companies.compliance-home')
            @endif
        </div>
    </div>
        
    
    
</main>
