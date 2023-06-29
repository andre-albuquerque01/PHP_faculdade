<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Person;
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
        return view('dishdash.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'first_name' => ['required', 'string', 'max:255'],
                'last_name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'min:8'],
                'password-confirmation' => ['required', 'same:password'],
                'term' => 'required',
            ],
            [
                "first_name.required" => " * Campo obrigatório",
                "first_name.max" => "Nome muito grande",
                "last_name.max" => "Sobrenome muito grande",
                "last_name.required" => " * Campo obrigatório",
                "email.required" => " * Campo obrigatório",
                "email.email" => "E-mail inválido",
                "email.unique" => "Email já em uso",
                "password.required" => " * Campo obrigatório",
                "password.min" => "A senha deve ter no mínimo 8 caracteres",
                "password-confirmation.required" => " * Campo obrigatório",
                "password-confirmation.same" => "As senhas não são iguais",
                "term.required" => " * Campo obrigatório",

            ]
        );



        $user = User::create([
            'email' => $request->email,
            'status' => 1,
            'password' => Hash::make($request->password),
        ]);


        Person::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'id_user' => $user->id_user
        ]);


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
