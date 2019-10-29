<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        try{

            return view('welcome');

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }

    public function about(){
        try{

            return view('about');

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }

    public function contact(){
        try{

            return view('contact');

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e);
        }
    }
}
