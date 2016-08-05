<?php

namespace App\Http\Controllers;
use App\About;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function __construct()
    {
       //
    }

    public function index()
    {
       $title="صفحه اصلی ";
        return view('home',compact('title'));
    }
    public function about()
    {
        $title="درباره ما";
       // $about=About::all()->orderBy('id', 'desc')->take(1)-->get();
        $about= DB::table('abouts')->where(['catpost'=>'درباره ما'])->get();
        return view('about',compact('title','about'));
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



