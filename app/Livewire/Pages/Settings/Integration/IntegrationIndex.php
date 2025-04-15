<?php

namespace App\Livewire\Pages\Settings\Integration;

use Livewire\Component;


class IntegrationIndex extends Component
{
    public $newApiKey;
    public $showNewApiKey = false;
    public string $section = 'library';
    public $filters = [];
    public $newFilter = [
        'integration' => '',
        'number' => '',
        'call_type' => '',
        'min_duration' => '',
        'tag' => '',
        'qualified' => '',
    ];

    public function mount()
    {
        // Initialize with some example filters (replace with your actual data retrieval)
        $this->filters = [
            [
                'integration' => 'Google My Business',
                'number' => '123-456-7890',
                'call_type' => 'Inbound',
                'min_duration' => '60',
                'tag' => 'Lead',
                'qualified' => 'Yes',
            ],
            [
                'integration' => 'Facebook Ads',
                'number' => '987-654-3210',
                'call_type' => 'Outbound',
                'min_duration' => '30',
                'tag' => 'Support',
                'qualified' => 'No',
            ],
        ];

        //display sections for integration in phone-settings page
        if (request()->is('settings/integrations')) {
            $this->section = 'manage';
        } elseif (request()->is('settings/integration-filters')) {
            $this->section = 'integration-filters';
        } elseif (request()->is('settings/api-keys')) {
            $this->section = 'api-keys';
        }
    }

    public function addFilter()
    {
        $this->filters[] = $this->newFilter;
        $this->resetNewFilter();
    }

    public function removeFilter($index)
    {
        unset($this->filters[$index]);
        $this->filters = array_values($this->filters); // Re-index the array
    }

    public function resetNewFilter()
    {
        $this->newFilter = [
            'integration' => '',
            'number' => '',
            'call_type' => '',
            'min_duration' => '',
            'tag' => '',
            'qualified' => '',
        ];
    }

    public function saveFilters()
    {
        // In a real application, you would save $this->filters to your database
        dd($this->filters); // For demonstration purposes
    }

    public function createApiKey()
    {
        // In a real application, you would generate a unique API key here
        $this->newApiKey = 'YOUR_NEW_API_KEY_' . str()->random(20);
        $this->showNewApiKey = true;
    }
    
    public function render()
    {
        return view('livewire.pages.settings.integration.integration-index');
    }
}
