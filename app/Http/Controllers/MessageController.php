<?php

namespace App\Http\Controllers;

use App\Catproduct;
use App\Commits;
use App\Commodity;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function insert(Requests\MessageRequest $request)
    {
         $m=DB::table('masejs')->insert([
          'username'=>$request->input('username'),
          'tell'=>$request->input('tell'),
          'email'=>$request->input('email'),
          'text'=>$request->input('text'),
          'user_id'=>Auth::user()->id,
          'commoditie_id'=>$request->input('catid')

        ]);
         if($m){
             $request->session()->flash('mass', 'اطلاعات شما با موفق ثبت شد');
            

        }else{

            $request->session()->flash('mass', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }
    }
    public function index($id)
    {
        // commoditie_id
         $title='نظرات کاربران';
         $users = DB::table('masejs')->where('commoditie_id', '=', $id)->get();

         return view('admins.product.mass',compact('id','title','users'));
    }
    public function delete(Request $r ,$id)
    {
        $bear=Commits::find($id);

        $bear->delete();

        if($bear)
        {

            $r->session()->flash('del', 'پیام شما با موفق حذف شد');
            return  redirect('porductshow');
        }
        else{
            $r->session()->flash('del', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect('porductshow');
        }
        return $id;
    }
    public function update(Request $request)
    {
        $m= DB::table('masejs')->where('id',$request->input('id'))->update(['flag'=>$request->input('flag')]);

        if(count($m)>0){
            $request->session()->flash('mass', 'اطلاعات شما با موفق ثبت شد');
            return  redirect()->back();

        }else{

            $request->session()->flash('mass', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }
    }
}
