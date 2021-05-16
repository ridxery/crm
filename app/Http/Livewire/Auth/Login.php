<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email, $password, $loginError;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|string|min:8|max:64',
    ];

//    protected $validationAttributes = [
//        'email' => 'E-Mail',
//        'password' => 'Password'
//    ];

    public function login()
    {
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], true))
        {
            return redirect()->route('dashboard');
        } else {
            $this->loginError = 'Login failed! Please check your credentials and try again.';
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
