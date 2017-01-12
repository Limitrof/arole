<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function language($lang)
    {
        //$changeLocale = new ChangeLocale($request->input('lang'));
       /*
        $changeLocale = new ChangeLocale($lang);
        $this->dispatch($changeLocale);
        */
        session()->put('locale',$lang);
        app()->setLocale($lang);
        app()->setLocale('zzz');
        return redirect()->back();
        //return view('home');
    }

    public function index()
    {
        return view('home');
    }
}
