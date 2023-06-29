<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Gender;
use App\Models\Person;
use App\Models\PhoneNumber;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {

        $person = Person::with('user')
            ->where('id_user', '=', $request->user()->id_user)
            ->first();
        $genres = Gender::all();

        return view('dishdash.profile.edit', [
            'person' => $person,
            'genres' => $genres,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {


        User::findOrFail($request->user()->id_user)->update($request->all());

        Person::findOrFail($request->user()->id_user)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'cpf' => $request->cpf,
            'gender' => $request->gender,
            'phone' => $request->phone

        ]);

        return Redirect::route('profile.edit')->with('success', 'Dados atualizados com sucesso');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {

    //     dd($request);
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }