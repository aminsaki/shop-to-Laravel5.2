<?php

namespace App\Http\Controllers;
use App\About;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Uploads;
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
         $upload=Uploads::all();
        return view('home',compact('title','upload'));
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
        $title="pedچطور کار می کند ";
        $learn= DB::table('abouts')->where(['catpost'=>'درباره pedoff'])->get();
        return view('learn',compact('title','learn'));
    }
    public function faq()
    {
        $title="pedچطور کار می کند ";
        $faq= DB::table('abouts')->where(['catpost'=>'سوالات متداول'])->get();
        return view('faq',compact('title','faq'));
    }
    public function onlinepayment()
    {
        $title="راهنمایی خرید اینترنت ";
        $oline= DB::table('abouts')->where(['catpost'=>'راهنمایی خرید از وب سایت'])->get();
        return view('online-payment',compact('title','oline'));
    }
    public function insertcontent(Request  $request)
    {

        $quey= DB::table('contacts')->insert([
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'tell'=>$request->input('tell'),
            'title'=>$request->input('title'),
            'commit'=>$request->input('commit'),
             'data'=>date('H/j/d'),
        ]);
        if($quey)
        {
            return view('home');
        }
        else{
            return view('home');
        }
    }
}



