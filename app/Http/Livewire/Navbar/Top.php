<?php

namespace App\Http\Livewire\Navbar;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Top extends Component
{
    public $darkMode;

    public function mount()
    {
        $this->darkMode = Auth::user()->dark_mode ?? true;
    }

    public function render()
    {
        return view('livewire.navbar.top');
    }

    public function changeMode()
    {
        if ($this->darkMode)
        {
            $this->darkMode = false;
        } else {
            $this->darkMode = true;
        }
        $user = Auth::user();
        $user->dark_mode = $this->darkMode;
        $user->save();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
