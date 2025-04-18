<?php

namespace App\Livewire\Pages\Account;

use Livewire\Component;

class Notification extends Component
{
    public $summaries = [];
    public $notificationCalls = [];
    public $integrationAlerts = [];
    public $dynamicNumberAlert = [];
    public $scheduledReport = [];
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

        if (request()->is('notification-center/call-text-notifications')) {
            $this->section = 'calls-text';
        } elseif (request()->is('notification-center/integration-failure-alerts')) {
            $this->section = 'integration-failure-alerts';
        } elseif (request()->is('notification-center/dni-email-alerts')) {
            $this->section = 'dni-email-alerts';
        } elseif (request()->is('notification-center/scheduled-reports')) {
            $this->section = 'scheduled-reports';
        }

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
