<?php

namespace App\Http\Controllers;

use App\About;
use App\User;
use Illuminate\Http\Requestr;
use App\Http\Requests\AboutRequest;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request as  Req;
class CommitController extends Controller
{
    public function __construct()
    {
        ///
    }
    public function index()
    {
        $title='ارسال مطالب';
        $read=About::all();
        return view('admins.mass.commit',compact('title','read'));

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
    public function delete(Req  $r, $id)
    {

        $bear=About::find($id);

        $bear->delete();

        if($bear)
        {

            $r->session()->flash('abodydel', 'پیام شما با موفق حذف شد');
            return  redirect()->back();
        }
        else{
            $r->session()->flash('abodydel', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }

    }
}















