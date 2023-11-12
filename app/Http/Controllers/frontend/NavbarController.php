<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    //

    public function HomeMain(){
        return view('frontend_layout.index');
    }// end method


    public function HomeAbout(){

        // $aboutpage = About::find(1);
        return view('frontend.about');

     }// End Method 

     
    public function HomeContact(){

        return view('frontend.contact');

     }// End Method 


     public function HomePhoto(){

        return view('frontend.photo');

     }// End Method


     public function HomeProject(){

        return view('frontend.project');

     }// End Method




}
