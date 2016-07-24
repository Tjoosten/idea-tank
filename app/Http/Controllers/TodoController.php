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
     * Get all the items.
     *
     * @url    GET: {domain}/todo
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['todos'] = Todo::paginate(15);
        return view('todo.index', $data);
    }

    /**
     * Update the item in the database.
     *
     * @param  Requests\TodoValidator $input
     * @param  int $id The item id in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Requests\TodoValidator $input, $id)
    {
        Todo::find($id)->update($input->except('_token'));
        session()->flash('message', 'Todo item has been updated');
        return redirect()->back();
    }

    /**
     * Destroy some item in the database.
     *
     * @url    GET: {domain}/todo/destroy/{id}
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
