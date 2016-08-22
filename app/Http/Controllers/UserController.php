<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $title = "صفحه کاربری";
        $user = User::all();
        foreach($user as $row):
         $name=$row->name;
        endforeach;
        return view('users.index', compact('title', 'name'));
    }
    public function show()
    {
        $id=Auth::user()->id;
        $users=DB::table('users')->where(['id'=>$id])->get();
        $title="مشخصی کاربر";
        return view('users.showuser',compact('title','users'));
    }
    public function passwords()
    {

         $title="عوض کردن رمز ورود";
         return view('users.formpassword',compact('title'));
    }
    public function save(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'password'=>'required|min:6',
            'password_confirm' => 'required|same:password'
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $id = Auth::user()->id;
            $user=DB::table('users')->where('id', '=',$id)
                ->update([
                    'password' => bcrypt($request->input('password')),
                ]);
            if($user)
            {

                $request->session()->flash('save', 'اطلاعات شما با موفق ثبت شد');
                return  redirect()->back();
            }
            else{
                $request->session()->flash('save', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
                return  redirect()->back();
            }
        }
    }


}
