<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    protected string $redirectTo = '/home';

    /**
     * Display the registration form.
     *
     * @return View
     */
    public function showRegistrationForm(): View
    {
        return view('templates/auth/register');
    }


    /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return Application|\Illuminate\Foundation\Application|Redirector|RedirectResponse
     */
    public function create(Request $request)
    {
        // Validate the registration form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create the new user in the database
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Log in the user
        auth()->login($user);

        // Redirect to a page after successful registration (e.g., home page)
        return redirect('/home');
    }
}
