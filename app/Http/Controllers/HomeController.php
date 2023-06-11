<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function main()
    {
        return view('main');
    }

    public function getDate(Request $request)
    {
        $posts = DB::table('todos')
            ->whereBetween('created_at', [$request->fdate, $request->sdate])
            ->get();

        return view('index', ['todos => $todo']);
    }

}
