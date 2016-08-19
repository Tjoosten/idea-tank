<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Idea;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ideas'] = Idea::paginate(15);
        return view('welcome', $data);
    }
}
