<?php

namespace App\Livewire\Pages\Account;

use Livewire\Component;
use App\Livewire\Traits\WithForm;
use App\Livewire\Traits\WithToast;
use App\Models\Company;
use App\Models\User;
use Livewire\WithPagination;
use Livewire\Attributes\Title;

class UserAccount extends Component
{
    use WithPagination;
    use WithToast, WithForm;

    public $search;
    protected $listeners = [
        'companyIndexRefresh' => '$refresh',
    ];

    public string $section = 'all-company';
    public $users = [
        ['name' => 'Cassandra Daniels', 'email' => 'cd@thedanielslawfirm.com', 'type' => 'Administrator', 'active' => '23 days ago'],
        ['name' => 'Covert Marketing', 'email' => 'hello@covertmktg.com', 'type' => 'Administrator', 'active' => '3 years ago'],
        ['name' => 'Saadia Mirza', 'email' => 'saadia@qubdevelopment.com', 'type' => 'Administrator', 'active' => 'a year ago'],
        ['name' => 'Riz Qub', 'email' => 'riz@qubdevelopment.com', 'type' => 'Manager', 'active' => '9 minutes ago'],
    ];

    public function create()
    {
        $this->openForm('forms.companies.company-form');
    }

    public function update(Company $company)
    {
        $this->openForm('forms.companies.company-form', 'update', $company->toArray());
    }

    public function destroy(Company $company)
    {
        $this->openForm('forms.companies.company-form', 'destroy', $company->toArray());
    }
    
    public function mount() 
    {
        if (request()->is('account/users')) {
            $this->section = 'all-user';
        } elseif (request()->is('account/compliance-home')) {
            $this->section = 'compliance-home';
        }
    }

    public function render()
    {
        $user_company = User::latest()->where('id', auth()->user()->id)->paginate(30);

        // return view('livewire.pages.companies.company-index', ['companies' => Company::latest()->where('name', 'like', "%{$this->search}%")->paginate(30)]);
        return view('livewire.pages.account.account-index', ['user_company' => $user_company]);
    }
}
