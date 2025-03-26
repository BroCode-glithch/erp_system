<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Container\Attributes\Auth;

class SettingsController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('admin')) {
            return redirect()->route('settings.admin');
        } elseif ($user->hasRole('program-manager')) {
            return redirect()->route('settings.manager');
        } elseif ($user->hasRole('care-support')) {
            return redirect()->route('settings.support');
        }

        abort(403, 'Unauthorized action.');
    }

    public function adminSettings()
    {
        return view('settings.admin');
    }

    public function managerSettings()
    {
        return view('settings.manager');
    }

    public function supportSettings()
    {
        return view('settings.support');
    }
}
