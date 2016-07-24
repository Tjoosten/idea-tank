<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class AccountController
 * @package App\Http\Controllers
 */
class AccountController extends Controller
{
    /**
     * AccountController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Update your user account
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function changeView()
    {
        $userId = auth()->user()->id;

        $data['user'] = User::find($userId);
        return view('auth.profile', $data);
    }

    /**
     * Change the user account in the database.
     *
     * @param  Requests\userValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeMethod(Requests\userValidator $input)
    {
        $userId = auth()->user()->id;

        User::find($userId)->update($input->except('_token'));
        session()->flash('message', 'Account has been updated');
        return redirect()->back();
    }
}
