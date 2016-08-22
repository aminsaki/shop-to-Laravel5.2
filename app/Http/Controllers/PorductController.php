<?php

namespace App\Http\Controllers;
use App\Catproduct;
use App\Commits;
use App\Commodity;
use App\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Http\Requests;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
use Parsidev\Jalali\jDate;

class PorductController extends Controller
{
    public function index()
    {
        $title = "ارسال محصولا";
        $cat=Catproduct::all();
        return view('admins.product.sendtext', compact('title','cat'));
    }

    public function insert(ProductRequest $request)
    {
        $day = Carbon::now()->day;
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $folder = "imgprouct/Docs/$year/$month/$day";
        $input = $request->all();

        $file1 = $request->file('img');
        if ($file1 != null) {
            $image1 = $file1->getClientOriginalName();
            $path1 = $folder . '/' . $image1;

            if (file_exists($folder) == false) {
                $fs = new Filesystem;
                $fs->makeDirectory($folder, 0755, true);
            }
            Image::make($file1)->save($path1);
            //$input['img'] = $path1;
        }
        $productss=DB::table('commodities')->insert(
            [
            'user_id' => Auth::user()->id,'img' =>$path1,
            'titles'=>$request->input('title'),
            'originalprice'=>$request->input('originalprice'),
            'discountprice'=>$request->input('discountprice'),
            'pricesbefore'=>$request->input('pricesbefore'),
            'address'=>$request->input('address'),'property'=>$request->input('property'),
            'commit'=>$request->input('commit'),'tell'=>$request->input('tell'),
            'data'=>jDate::forge('last sunday')->format('Y/m/d'),
            'catprodcts'=>$request->input('catprodcts'),
             'state'=>$request->input('state'),
             'city'=>$request->input('city')
        ]);
        if ($productss)
        {
           $request->session()->flash('save', 'اطلاعات شما با موفق ثبت شد');
           return redirect()->back();
        }
        else {
            $request->session()->flash('save', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return redirect() - back();
        }

    }
    public function show()
    {
        $title='نمایش اطلاعات ثبت شد';
        $product=Commodity::all();
        return view ('admins.product.showprodcut',compact('title','product'));
    }
    public function delete(Request $request,$id)
    {
        $bear=commodities::find($id);
        $bear->delete();
        if($bear)
        {
            $request->session()->flash('del', 'پیام شما با موفق حذف شد');
            return  redirect()->back();
        }
        else{
            $request->session()->flash('del', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return  redirect()->back();
        }

    }
    public function showporduct($id)
    {

        $title="صفحه ویرایش";
        $product= commodities::find($id);
        return view('admins.product.editprodcut',compact('title','product'));
    }
    public function edit(Request $request )
    {
        $productss=DB::table('commodities')->where('id',$request->id)->update(
            [
                'title'=>$request->input('title'),
                'originalprice'=>$request->input('originalprice'),
                'discountprice'=>$request->input('discountprice'),
                'pricesbefore'=>$request->input('pricesbefore'),
                'address'=>$request->input('address'),'property'=>$request->input('property'),
                'commit'=>$request->input('commit'),'tell'=>$request->input('tell'),
                'data'=>jDate::forge('last sunday')->format('Y/m/d'), 'catproducts'=>$request->input('catproducts')
            ]);
        if ($productss)
        {
            $request->session()->flash('edit', 'اطلاعات شما با موفق ثبت شد');
            return redirect()->back();
        }
        else {
            $request->session()->flash('edit', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return redirect() - back();
        }
    }
    public function content(Request $request)
    {
        $i= rand('1','1000');
        $quey=DB::table('masejs')->insert([
         'username'=> Auth::user()->name,
         'email'=>Auth::user()->email,
         'text'=>$request->input('text'),
         'user_id'=>Auth::user()->id,
         'tell'=>'0912',
         'commoditie_id'=>$request->input('commoditie_id').$i,
         'flag'=>1, ]);
        if($quey)
        {
            return "پیام شما باموفقیت ارسال شده ";
        }
        else{
            return "پیام شما به دلیل مشکلاتی ارسال نشد لطفا چند ساعت دیگر امحتان کنید";
        }
    }
 }
