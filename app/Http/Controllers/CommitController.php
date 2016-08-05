<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommitController extends Controller
{
    public function __construct()
    {
        ///
    }
    public function index()
    {
        $title='ارسال مطالب';
        return view('admins.commit',compact('title'));
    }
    public function insert(AboutRequest $request)
    {
        $real= DB::table('abouts')->insert([
          'title' =>$request->input('title'),
         'commit' =>$request->input('commit'),
         'catpost'=>$request->input('catpost'),
         'user_id'=>Auth::id(),
          'data'=>date('H'),
         ]);
        if($real){
            $request->session()->flash('status', 'اطلاعات شما با موفق ثبت شد');
            return  redirect()->back();
        }else{
            $request->session()->flash('status', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }


    }
}















