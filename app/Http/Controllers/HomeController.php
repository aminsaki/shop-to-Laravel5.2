<?php

namespace App\Http\Controllers;
use App\About;
use App\Catproduct;
use App\Commodity;
use App\Product;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Parsidev\Jalali\jDate;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends Controller
{

    public function __construct()
    {
             //      Join('','commodities.catprodcts','=','catproducts.cat_id')
    }
    public function index()
    {
        $catp=DB::table('catproducts')->get();
        $cat1=DB::table('catproducts')->where(['nuberid'=>'1'])->get();
        foreach ($cat1 as $row1): $title1=$row1->title;  endforeach;
        $cat2=DB::table('catproducts')->where(['nuberid'=>'2'])->get();
        foreach ($cat2 as $row2): $title2=$row2->title; endforeach;
        $cat3=DB::table('catproducts')->where(['nuberid'=>'3'])->get();
        foreach ($cat3 as $row3): $title3=$row3->title;  endforeach;
        $cat4=DB::table('catproducts')->where(['nuberid'=>'4'])->get();
        foreach ($cat4 as $row4): $title4=$row4->title;  endforeach;
        $cat5=DB::table('catproducts')->where(['nuberid'=>'5'])->get();
        foreach ($cat5 as $row5): $title5=$row5->title;  endforeach;
        $cat6=DB::table('catproducts')->where(['nuberid'=>'6'])->get();
        foreach ($cat6 as $row6): $title6=$row6->title; endforeach;

        ///commoditieswhere('name', 'LIKE', '%'.$name.'%')
        $product1=DB::table('commodities')->where('catprodcts','like','%'.$title1.'%')->get();
        $product2=DB::table('commodities')->where('catprodcts','like','%'.$title2.'%')->get();
        $product3=DB::table('commodities')->where('catprodcts','like','%'.$title3.'%')->get();
        $product4=DB::table('commodities')->where('catprodcts','like','%'.$title4.'%')->get();
        $product5=DB::table('commodities')->where('catprodcts','like','%'.$title5.'%')->get();
        $product6=DB::table('commodities')->where('catprodcts','like','%'.$title6.'%')->get();

       $upload=Uploads::all();
        return view('home',
        compact('catp','title','upload','title1','title2','title3','title4','title5','title6','product1','product2','product3','product4','product5','product6'));
    }
    public function about()
    {
        $title="درباره ما";
        $catp=DB::table('catproducts')->get();
        $upload=Uploads::all();
        $about= DB::table('abouts')->where(['catpost'=>'درباره ما'])->get();
        return view('about',compact('title','about','upload','catp'));
    }
    public function learn()
    {
        $upload=Uploads::all();
        $catp=DB::table('catproducts')->get();
        $title="pedچطور کار می کند ";
        $learn= DB::table('abouts')->where(['catpost'=>'درباره pedoff'])->get();
        return view('learn',compact('title','learn','upload','catp'));
    }
    public function faq()
    {
        $title="pedچطور کار می کند ";
        $catp=DB::table('catproducts')->get();
        $upload=Uploads::all();
        $faq= DB::table('abouts')->where(['catpost'=>'سوالات متداول'])->get();
        return view('faq',compact('title','faq','upload','catp'));
    }
    public function onlinepayment()
    {
        $title="راهنمایی خرید اینترنت ";
        $catp=DB::table('catproducts')->get();
        $upload=Uploads::all();
        $oline= DB::table('abouts')->where(['catpost'=>'راهنمایی خرید از وب سایت'])->get();
        return view('online-payment',compact('title','oline','upload','catp'));
    }
    public function insertcontent(Request  $request)
    {


        $quey= DB::table('contacts')->insert([
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'tell'=>$request->input('tell'),
            'title'=>$request->input('title'),
            'commit'=>$request->input('commit'),
            'data'=>jDate::forge('last sunday')->format('Y/m/d'),
        ]);
        if(count($quey)>0)
        {
            return "پیام شما باموفقیت ارسال شده در اول فرصت به ان پاسخ داده میشود";
        }
        else{
            return "پیام شما به دلیل مشکلاتی ارسال نشد لطفا چند ساعت دیگر امحتان کنید";
        }
    }
    public function readmore($id)
    {

        $title="ادامه مطلب";
        $catp=DB::table('catproducts')->get();
        $product=DB::table('commodities')->where('id',$id)->get();
        foreach($product as $row):$titles= $row->titles; $productid=$row->id; $user_id=$row->user_id; $cat=$row->catprodcts; endforeach;

        $u=DB::table('users')->where('id',$user_id)->get();
        foreach($u as $reault):
           $user= $reault->name;
        endforeach;

        $coomit=DB::table('masejs')->where(['commoditie_id'=>$id,'flag'=>'1'])->get();
       return view('readmore',compact('titles','title','namepage','product','productid','catproducts','coomit','user','catp'));
    }

    public function serach(Request $request)
    {
         $catprodcts=$request->input('catprodcts');
         $state=$request->input('state');
         $city=$request->input('city');
         if(!empty($catprodcts) && empty($state) && empty($city)):
            $productcat1=DB::table('commodities')->where('catprodcts','like','%'.$catprodcts.'%')->get();
         endif;
        if(empty($catprodcts) && !empty($city) && !empty($state)):
            $productcat1=DB::table('commodities')->where('city','like','%'.$city.'%')->where('state','like','%'.$state.'%')
            ->get();
        endif;
        if(!empty($city) && !empty($state) && !empty($catprodcts)):
             $productcat1=DB::table('commodities')
                 ->where('city','like','%'.$city.'%')
                 ->where('state','like','%'.$state.'%')
                 ->orwhere('catprodcts','like','%'.$catprodcts.'%')
            ->get();
          endif;
       $upload=Uploads::all();
       $catp=DB::table('catproducts')->get();
       $title='صفحه جستجوی ';
       return view('serachpage',compact('title','upload','catp','productcat1','catprodcts','city','state'));
    }
}



