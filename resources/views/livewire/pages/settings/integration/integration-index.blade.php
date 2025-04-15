
<main class="px-2 space-y-4 overflow-x-hidden">
    <x-organisms.settings-nav></x-organisms.settings-nav>

    <div class="flex min-h-screen">
      <aside class="w-64 bg-gray-100 p-4 border-r">
        <nav>
            <div class="section-title text-lg">INTEGRATIONS
                <ul>
                    <li>
                        <x-atoms.forms.button 
                          variant="sec_nav"
                          href="{{ route('settings-integration.library') }}"
                          :active="$section === 'library'">
                          Library
                        </x-atoms.forms.button>
                    </li> 
                    <li>
                        <x-atoms.forms.button 
                          variant="sec_nav" 
                          href="{{ route('settings-integration.manage') }}"
                          :active="$section === 'manage'">
                          Manage
                        </x-atoms.forms.button>
                    </li>
                    <li>
                          <x-atoms.forms.button 
                          variant="sec_nav" 
                          href="{{ route('settings-integration.integration-filters') }}"
                          :active="$section === 'integration-filters'">
                          Integration filters
                          </x-atoms.forms.button>
                    </li>    
                </ul>
            </div>
            <div class="section-title text-lg">DATA ACCESS
                <ul>
                    <li>
                        <x-atoms.forms.button 
                        variant="sec_nav" 
                        href="{{ route('settings-integration.api-keys') }}"
                        :active="$section === 'api-keys'">
                        API Keys
                        </x-atoms.forms.button>
                  </li>
                </ul>
            </div>
            
        </nav>
      </aside>
      <div class="flex-1 p-6">
        @if ($section === 'library')
              @include('livewire.pages.settings.integration.library')
              @elseif ($section === 'manage')
              @include('livewire.pages.settings.integration.manage')
              @elseif ($section === 'integration-filters')
              @include('livewire.pages.settings.integration.integration-filters')
              @elseif ($section === 'api-keys')
              @include('livewire.pages.settings.integration.api-keys')
          @endif
      </div>
    </div>
</main>

