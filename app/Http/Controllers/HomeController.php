<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tasklist;
use Illuminate\Support\Facades\Auth;
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
        $data = DB::table('tasklists')
        ->where('user_id', '=', Auth::id())
        ->get();
        return view('home',['tasklists' => $data]);

    }
}
