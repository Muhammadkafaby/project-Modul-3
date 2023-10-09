<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request): RedirectResponse
    {
        
        $request->validate([
            'username' => ['required', 'string', 'max:100'],
            'fullName' => ['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:1000'],
            'birthDate' => ['required', 'date'],
            'phoneNumber' => ['required', 'string', 'max:20'],
            'Agama' => ['required', 'string', 'max:20'],
            'jenisKelamin' => ['required', 'integer', 'max:4'],
            //Muhammad Kafaby_6706220149_4604
        ]);
        // 

        $user = User::create([
            'username' => $request->username,
            'fullName' => $request->fullName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'birthDate' => $request->birthDate,
            'phoneNumber' => $request->phoneNumber,
            'Agama' => $request->Agama,
            'jenisKelamin' => $request->jenisKelamin,

        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
