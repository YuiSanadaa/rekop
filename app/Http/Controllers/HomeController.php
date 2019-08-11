<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quotes;
use App\Artikel;
use App\Menu;
use App\Pesan;
use App\User;

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

    public function admin(){
        $data['pendingquotes'] = Quotes::where('approve', 1);
        $data['allquotes'] = Quotes::All();
        $data['rejectedquotes'] = Quotes::where('approve', 3);
        $data['acceptedquotes'] = Quotes::where('approve', 2);
        $data['allmenu'] = Menu::All();
        $data['allpesan'] = Pesan::All();
        $data['allartikel'] = Artikel::All();
        $data['alluser'] = User::All();
        return view('admin.dashboard')->with($data);
    }

    public function dashboard(){
        return view('dashboard');
    }
}
