<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CatproductController extends Controller
{
    public function index()
    {
        $title='دسته ها محصولا';
        $cat=DB::table('catproducts')->get();
        return view('admins.product.catproduct',compact('cat','title'));
        //return "ok";

    }
    public function save(Requests\CatproductRequest $request)
    {
        $c = rand('10', '20');
        $b = rand('100', '1000') . $c;
        $sql = DB::table('catproducts')->insert([
            'title' => $request->input('title'),
            'cat_id' => $b,]);
        if (count($sql)>0){

              $request->session()->flash('save', "پیام شما با موفق حذف شد");
            return redirect()->back();
        } else {
           $request->session()->flash('save','اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
          return redirect()->back();
        }
    }
    public function delete(Request $r, $id)
    {
          $n=1;
          $bear=DB::table('catproducts')->where([ ['id',$id],['nuberid',0] ])->delete();
       if($bear)
        {
            $r->session()->flash('abodydel', 'پیام شما با موفق حذف شد');
            return  redirect()->back();
        }
        else
        {
            $r->session()->flash('abodydel', 'شما حق حذف این دسته را ندارید');
            return  redirect()->back();
        }
    }
    public function edit(Request $request)
    {
        $id=$request->input(['id']);
        $bear=DB::table("catproducts")->where(['id'=>$id])->update(['nuberid'=>$request->input('nuberid')]);
        if($bear)
        {
            $request->session()->flash('abodydel', 'پیام شما با موفق ثبت شد');
            return  redirect()->back();
        }
        else
        {
            $request->session()->flash('abodydel', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }
    }
}
