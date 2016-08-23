<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class AdminuserController extends Controller
{
    public function __construct()
    {
        //
    }
    public function  index()
    {
        $user=User::paginate(8);
        $title="مدیریت کاربران";
        return view('admins.users.adminuser',compact('title','user'));
    }
    public function delete(Request $request,$id)
    {
        $bear=User::find($id);

        $bear->delete();

        if($bear)
        {

            $request->session()->flash('deletes', 'کاربرمورد نظر شما با موفق حذف شد');
            return  redirect()->back();
        }
        else{
            $request->session()->flash('deletes', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }

    }
    public function saves(Request $request)
    {
        $bear=DB::table('users')->where('id',$request->input('id'))->update(['level'=>$request->input('level')]);

        if($bear)
        {

            $request->session()->flash('deletes', 'اطلاعات شما با موفق ثبت شد');
            return  redirect()->back();
        }
        else{
            $request->session()->flash('deletes', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }
    }
    public function password($id)
    {
        $title="عوض کردن پسورد";
        $user=User::find($id);
        return view('admins.users.password',compact('title','user'));
    }

    public function chanepassword(Requests\UserReques $reques)
    {
        $user=DB::table('users')->where('id', '=',$reques->input('id'))
            ->update([
              'email' =>$reques->input('email'),
              'password' => bcrypt($reques->input('password')),
        ]);
        if($user)
        {

            $reques->session()->flash('save', 'اطلاعات شما با موفق ثبت شد');
            return  redirect()->back();
        }
        else{
            $reques->session()->flash('save', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }

    }
}
