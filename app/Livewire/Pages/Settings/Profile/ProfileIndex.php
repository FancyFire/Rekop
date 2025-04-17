<?php

namespace App\Livewire\Pages\Settings\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProfileIndex extends Component
{
    public $first_name, $last_name, $email, $plain_text_email = false, $two_factor = false;

    public function mount()
    {
        $user = Auth::user();
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
    }

    public function save()
    {
        $user = Auth::user();
        $user->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Profile updated.');
    }
    
    public function render()
    {
        return view('livewire.pages.settings.profile.profile-index');
    }
}
