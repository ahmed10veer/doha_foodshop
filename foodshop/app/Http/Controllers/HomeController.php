<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homepage;
use App\Dishes;
use App\Orders;


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
        $alldishes = Orders::all();
        return view('home', compact('alldishes', $alldishes));
        //return view('home');
    }
    
    
    
    public function homepageconfig(){
        
        return $this->index();
    }
    
    
    
    public function cuisine_edit(){
        return $this->index();
    }
    
    
    
    
    public function article_edit(){
        return 'asdasdad';
    }
    
    
    
    
    public function adminorders(){
        return 'asdasdad';
    }
    
    
    
    
    
}
