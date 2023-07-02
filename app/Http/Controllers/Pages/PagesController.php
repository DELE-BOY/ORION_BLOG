<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
      return view('pages.index');
     }

     public function login(){
       return view('pages.login');
     }
     public function register(){
       return view('pages.register');
     }
     public function about(){
       return view('pages.about');
     }
     public function contact(){
       return view('pages.contact');
     }
     public function frontend(){
       return view('pages.frontend');
     }
     public function backend(){
       return view('pages.backend');
     }
     public function devops(){
       return view('pages.devops');
     }
     public function excos(){
       return view('pages.excos');
     }
     public function blog(){
       return view('pages.blog');
     }
     public function careers(){
       return view('pages.careers');
     }
    
}
