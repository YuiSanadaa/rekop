<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['quotes'] = Quotes::All();
        return view('home')->with($data);
    }

    public function admin(){
        return view('admin.dashboard');
    }
}
