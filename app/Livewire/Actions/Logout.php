<?php

namespace App\Livewire\Actions;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Logout class
 *
 * This class handles the logout action for the application.
 *
 * @package App\Livewire\Actions
 */
class Logout
{
    /**
     * Log the current user out of the application.
     *
     * @return RedirectResponse
     */
    public function __invoke(): RedirectResponse
    {
        Auth::guard('web')->logout();

        Session::invalidate();
        Session::regenerateToken();

        return redirect('/');
    }
}
