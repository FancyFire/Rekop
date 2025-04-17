<?php

namespace App\Livewire\Pages\Account;

use Livewire\Component;

class Notification extends Component
{
    public $summaries = [];
    public string $section = 'summary-emails';
    
    public function edit($index)
    {
        // TODO: redirect or open modal for editing
    }

    public function delete($index)
    {
        unset($this->summaries[$index]);
        $this->summaries = array_values($this->summaries);
    }
    
    public function mount() 
    {

        // if (request()->is('account/users')) {
        //     $this->section = 'all-users';
        // } elseif (request()->is('account/compliance-home')) {
        //     $this->section = 'compliance-home';
        // }

        $this->summaries = [
            [
                'company' => 'Daniels Law Firm, PLLC',
                'recipient' => 'Cassandra Daniels',
                'interaction' => 'Calls',
                'filters' => '—',
                'contents' => 'Summary Statistics, Top Sources, and Top Keywords',
                'frequency' => 'Weekly',
            ],
        ];
    }
    
    public function render()
    {
        return view('livewire.pages.notification.notification-index');
    }
}
