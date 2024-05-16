<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    /**
     * Display login page view
     */
    public function createLogin()
    {
        return view('auth.login');
    }

    /**
     * Display register page view
     */
    public function createRegister()
    {
        return view('auth.register');
    }

    /**
     * Authorize user in the system
     *
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        $type = $this->getType($validated['email']);

        if (Auth::attempt([$type => $validated['email'], 'password' => $validated['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('error', 'The provided credentials do not match our records');
    }

    /**
     * Get specific user by filtered input value
     *
     * @param $email
     * @return string
     */
    protected function getType($emailInput)
    {
        $type = filter_var($emailInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        // Check if user exists
        $user = User::where($type, $emailInput)->first();

        if (!$user) {
            return back()->with('error', 'Invalid password');
        }

        return $type;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register()
    {
        //
    }
}
