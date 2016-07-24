<?php

namespace App\Http\Controllers;

use App\Idea;
use App\IdeaCategory;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class IdeaController
 * @package App\Http\Controllers
 */
class IdeaController extends Controller
{
    /**
     * IdeaController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ideas'] = Idea::paginate(15);
        return view('idea.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = IdeaCategory::all(['id', 'name']);
        return view('idea.insert', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Requests\IdeaValidator $input
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\IdeaValidator $input)
    {
        Idea::create($input->except(['_token']));
        session()->flash('message', 'Idea has been saved');
        return redirect()->back(302);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id the idea id in the database.
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['idea'] = Idea::with('category')->find($id);
        return view('idea.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id the id from the idea in the database.
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['idea'] = Idea::find($id);
        return view('idea.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Requests\IdeaValidator $input
     * @param  int $id the idea id in the database.
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\IdeaValidator $input, $id)
    {
        Idea::find($id)->update($input->except('_token'));
        session()->flash('message', 'Idea has been updated');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id the idea id in the database.
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Idea::destroy($id);
        session()->flash('message', 'Idea deleted');
        return redirect()->back();
    }
}
