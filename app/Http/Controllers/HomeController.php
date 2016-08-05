<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function __construct()
    {
       
    }

    public function index()
    {
       $title="صفحه اصلی ";
        return view('home',compact('title'));
    }
    public function about()
    {
       $title="درباره ما";
        return view('about',compact('title'));
    }
    public function learn()
    {
        return view('learn');
    }
    public function faq()
    {
        return view('faq');
    }
    public function onlinepayment()
    {
        return view('onlinepayment');
    }
}



