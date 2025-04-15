<?php

namespace App\Livewire\Pages\Settings\CallFlowBuilder;

use Livewire\Component;

use Livewire\Attributes\Title;

#[Title('Call Flow Builder')]
class CallFlowIndex extends Component
{
    public $label;
    public string $section = 'call-flows';
    public function mount()
    {
        $this->label = "Greeting > Menu > Dial";

        //display sections for lead-capture in phone-settings page
        if (request()->is('settings/workflow/message-flows')) {
            $this->section = 'message-flows';
        } elseif (request()->is('settings/workflow/keypad-scoring')) {
            $this->section = 'keypad-scoring';
        } elseif (request()->is('settings/workflow/tags/company')) {
            $this->section = 'tags';
        }
    }
    public function render()
    {
        return view('livewire.pages.settings.call-flow-builder.call-flow-index');
    }
}
