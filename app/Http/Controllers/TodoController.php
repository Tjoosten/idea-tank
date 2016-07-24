<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class TodoController
 * @package App\Http\Controllers
 */
class TodoController extends Controller
{
    /**
     * TodoController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Destroy some item in the database.
     *
     * @param  int $id The item id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Todo::destroy($id);
        session()->flash('message', 'The todo item has been deleted');
        return redirect()->back();
    }

}
