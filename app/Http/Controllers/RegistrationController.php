<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create', ['categories' => Category::all(),]);
    }

    public function store() {
        $this->validate(request(), [
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'image' => 'required'
        ]);

        $user = User::create(\request(['name', 'lastname', 'email', 'password', 'image']));

        auth()->login($user);

        return redirect()->to('/');

    }
}
