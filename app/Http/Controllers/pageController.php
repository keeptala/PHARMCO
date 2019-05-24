<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','about','services']]);
    }

    public function index(){
        $title='Pharmco';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);

    }
    public function about(){
        
        $title="About Us";

        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data=array(
            'title'=>"Services",
            'services'=>['Web Design','programming','SEO']
        );
        return view('pages.services')->with($data);
    }
}
