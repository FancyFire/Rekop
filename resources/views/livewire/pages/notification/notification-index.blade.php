<main class="px-2 space-y-4">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-100 p-4">
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
                            href="{{ route('notification.calls-text') }}"
                            :active="$section === 'calls-text'">
                            Calls & texts
                        </x-atoms.forms.button></li>                  
                    </ul>
                </div>
                <div class="section-title text-lg">ACCOUNT ALERTS
                    <ul>
                        <li>
                            <x-atoms.forms.button 
                            variant="sec_nav" 
                            href="{{ route('notification.integration-failure-alerts') }}"
                            :active="$section === 'integration-failure-alerts'">
                            Integration alerts
                            </x-atoms.forms.button>
                        </li>
                        <li>
                            <x-atoms.forms.button 
                            variant="sec_nav" 
                            href="{{ route('notification.dni-email-alerts') }}"
                            :active="$section === 'dni-email-alerts'">
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
                            href="{{ route('notification.scheduled-reports') }}"
                            :active="$section === 'scheduled-reports'">
                            Scheduled Reports
                        </x-atoms.forms.button>
                        </li>
                    </ul>
                </div>
                
            </nav>
        </aside>
        <div class="flex-1 p-6 bg-gray-100">
            @if ($section === 'summary-emails')
                @include('livewire.pages.notification.summary-emails')
                @elseif ($section === 'calls-text')
                @include('livewire.pages.notification.calls-text')
                @elseif ($section === 'integration-failure-alerts')
                @include('livewire.pages.notification.integration-failure-alerts')
                @elseif ($section === 'dni-email-alerts')
                @include('livewire.pages.notification.dni-email-alerts')
                @elseif ($section === 'scheduled-reports')
                @include('livewire.pages.notification.scheduled-reports')
            @endif
        </div>
    </div>
        
    
    
</main>
