<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('index');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function profile(){
        //return view('admin.index');
        if(Auth::user()->cargo->name == "root"){
            return view('profile.root_view');
        }else if(Auth::user()->cargo->name == "admin"){
            return view('profile.admin_view');
        }else if(Auth::user()->cargo->name == "client"){
            return view('profile.client_view');
        }else if(Auth::user()->cargo->name == "user"){
            return view('profile.user_view');
        }
        //    $units = Unit::where('usuario','=',Auth::user()->id)->get();
        //    return view('dashboard',compact('units'));
        //}
    }
}
