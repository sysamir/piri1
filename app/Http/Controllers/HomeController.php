<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Sciences;
use App\Group;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function ajaxGroup($id)
    {
      $qrup = Group::with('fenleri')->findOrFail($id);
      // dd($fenn);
      return Response::json($qrup->fenleri);
    }

    public function ajaxScience($id)
    {
      $fenn = Sciences::with('movzusu')->findOrFail($id);
      
      return Response::json($fenn->movzusu);
    }
}
