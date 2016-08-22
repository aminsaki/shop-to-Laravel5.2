<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Sendmass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class ContactController extends Controller
{
    public function __construct()
    {
        //
    }
    public function  index()
    {
     $contacts=DB::table('contacts')->paginate(8);
      //$flag=$contacts->flag;
      $title='پیام ها کاربران';
      return view('admins.contact.contact',compact('title','contacts','flag'));
    }
    public function show(Request $request, $id)
    {
         $title="نمایش پیام کاربران";
         $cid=Contact::find($id);
        DB::table('contacts')
            ->where('id',$id)
            ->update(['flag' => 1]);
        $read = DB::table('sendmass')->where('uid', '=',$id)->get();

        return view('admins.contact.showcommit',compact('cid','title','read'));
    }
    public function delete(Request $request,$id)
    {
        $bear=Contact::find($id);
        $bear->delete();
        if($bear)
        {
            $request->session()->flash('abodydel', 'پیام شما با موفق حذف شد');
            return  redirect('/contact');
        }
        else{
            $request->session()->flash('abodydel', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect('/contact');
        }
  
    }
    public function sendemail(Requests\SendmassRequest $request)
    {
       $userid=Auth::user()->id;
       $sql= DB::table('sendmass')->insert([
            'user_id'=>$userid,
             'uid'=>$request->input('uid'),
            'commit'=>$request->input('commit'),
            'date'=>date('h/d/m'),
        ]);
        if($sql){
            $request->session()->flash('status', 'اطلاعات شما با موفق ارسال شد');
            return  redirect()->back();
        }else{
            $request->session()->flash('status', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }
    }

}





















