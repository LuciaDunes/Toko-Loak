<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

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
        return view('home.landingPage');
    }
     
    public function single($data){
        $datas = Item::find($data);
        $no = 1;
       
        return view('home.single-catalog', compact('datas'));
    }
}
