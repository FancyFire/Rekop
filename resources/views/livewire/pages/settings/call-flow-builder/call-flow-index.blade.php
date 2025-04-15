<main class="px-2 space-y-4 overflow-x-hidden">
    <x-organisms.settings-nav></x-organisms.settings-nav>

    <div class="flex min-h-screen">
      <aside class="w-64 bg-gray-100 p-4 border-r">
        <nav>
          <div class="section-title text-lg">AUTOMATION
              <ul>
                <li>
                    <x-atoms.forms.button 
                      variant="sec_nav"
                      href="{{ route('call-flow-builder.call-flows') }}"
                      :active="$section === 'call-flows'">
                      Call flows
                    </x-atoms.forms.button>
                </li> 
                <li>
                    <x-atoms.forms.button 
                      variant="sec_nav" 
                      href="{{ route('call-flow-builder.message-flows') }}"
                      :active="$section === 'message-flows'">
                      Message flows
                    </x-atoms.forms.button>
                </li>
                <li>
                      <x-atoms.forms.button 
                      variant="sec_nav" 
                      href="{{ route('call-flow-builder.keypad-scoring') }}"
                      :active="$section === 'keypad-scoring'">
                      Keypad scoring
                      </x-atoms.forms.button>
                </li>                    
              </ul>
          </div>
          <div class="section-title text-lg">MANAGE
              <ul>
                  <li>
                      <x-atoms.forms.button 
                        variant="sec_nav" 
                        href="{{ route('call-flow-builder.tags') }}"
                        :active="$section === 'tags'">
                        Tags
                      </x-atoms.forms.button>
                  </li>
                  <li><a href="#" class="inline-flex items-center p-2 text-sm font-medium text-center text-blue-400 hover:bg-blue-800 sm:w-auto rounded-sm">Teams</a></li>                   
              </ul>
          </div>
          
      </nav>
      </aside>
      <div class="flex-1 p-6">
        @if ($section === 'call-flows')
              @include('livewire.pages.settings.call-flow-builder.automation.call-flows')
              @elseif ($section === 'message-flows')
              @include('livewire.pages.settings.call-flow-builder.automation.message-flows')
              @elseif ($section === 'keypad-scoring')
              @include('livewire.pages.settings.call-flow-builder.automation.keypad-scoring')
              @elseif ($section === 'tags')
              @include('livewire.pages.settings.call-flow-builder.manage.tags')
          @endif
      </div>
    </div>
</main>
