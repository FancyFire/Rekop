<main class="px-2 space-y-4">
    <div class="flex min-h-screen">
        <aside class="w-64 bg-gray-100 p-4 border-r">
            <nav>
                <div class="section-title text-lg">MANAGE
                    <ul>
                        <li><x-atoms.forms.button 
                            variant="sec_nav"
                            href="{{ route('companies.all-users') }}"
                            :active="$section === 'all-users'">
                            All users
                        </x-atoms.forms.button>
                    </li> 
                        <li><x-atoms.forms.button 
                            variant="sec_nav" 
                            href="{{ route('companies.compliance-home') }}"
                            :active="$section === 'compliance-home'">
                            Compliance home
                        </x-atoms.forms.button></li>                  
                    </ul>
                </div>
                <div class="section-title text-lg">COMPANIES
                    <ul>
                        <li>
                            <x-atoms.forms.button 
                            variant="sec_nav" 
                            href="{{ route('companies.all-company') }}"
                            :active="$section === 'all-company'">
                            All Companies
                        </x-atoms.forms.button>
                        </li>
                    </ul>
                </div>
                
            </nav>
        </aside>
        <div class="flex-1 p-6">
            @if ($section === 'all-company')
                @include('livewire.pages.companies.all-companies')
                @elseif ($section === 'all-users')
                @include('livewire.pages.companies.all-users')
                @elseif ($section === 'compliance-home')
                @include('livewire.pages.companies.compliance-home')
            @endif
        </div>
    </div>
        
    
    
</main>
