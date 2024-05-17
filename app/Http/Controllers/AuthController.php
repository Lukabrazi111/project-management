<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
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
     */
    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        $type = $this->getType($validated['email']);
        $user = $this->getUserByEmailInput($type, $request->post('email'));

        // Check if user exists and verified
        if ($error = $this->getUserError($user)) {
            return back()->with('error', __($error));
        }

        if (Auth::attempt([$type => $validated['email'], 'password' => $validated['password']])) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->with('error', __('auth.failed'));
    }

    /**
     * Get specific type from input value
     *
     * @param $emailInput
     * @return string
     */
    protected function getType($emailInput)
    {
        return filter_var($emailInput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    /**
     * Get user by email input form
     *
     * @param $type
     * @param $emailInput
     * @return User
     */
    protected function getUserByEmailInput($type, $emailInput)
    {
        return User::where($type, $emailInput)->first();
    }

    /**
     * Get user errors
     *
     * @param $user
     */
    protected function getUserError($user)
    {
        if (!$user) {
            return __('auth.not_found');
        }

        if (!$user->hasVerifiedEmail()) {
            return __('auth.not_verified');
        }

        return null;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(RegisterRequest $request)
    {
        $hasFile = $request->hasFile('image');

        if ($hasFile) {
            $imagePath = $request->file('image')->store('images');
        }

        $user = User::create([
            'username' => $request->post('username'),
            'email' => $request->post('email'),
            'password' => $request->post('password'),
            'image_path' => $imagePath ?? null,
        ]);

        // TODO: Send email to user

        return redirect()->route('login')
            ->with('success', __('auth.register_email_sent', ['email' => $user->email]));
    }
}
