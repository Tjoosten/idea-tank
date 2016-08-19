<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class SettingsController
 * @package App\Http\Controllers
 */
class SettingsController extends Controller
{
    /**
     * SettingsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get the update view for the backup settings.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function backupSettingsView()
    {
        return view('', $data);
    }

    /**
     * Store the new information about the backup settings.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function backupSettingsMethod()
    {
        return redirect()->back(302);
    }

    /**
     * Application settings view.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function appSettingsView()
    {
        return view('', $data);
    }

    /**
     * Update the application settings.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function appSettingsMethod()
    {
        return redirect()->back(302);
    }
}
