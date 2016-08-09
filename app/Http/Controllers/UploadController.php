<?php

namespace App\Http\Controllers;

use App\Uploads;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
   public function __construct()
   {
       ///
   }
    public function index()
    {
        $title='صفحه اپلود برای اسلارید';

        return view('admins.upload.upload',compact('title'));
    }
    public function insert(Requests\UploadRequest $request)
    {
        $day = Carbon::now()->day;
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $folder = "uploads/Docs/$year/$month/$day";
        $input = $request->all();

        $file1 = $request->file('img');
        if ($file1 != null) {
            $image1 = $file1->getClientOriginalName();
            $path1 = $folder . '/' . $image1;

            if (file_exists($folder) == false) {
                $fs = new Filesystem();
                $fs->makeDirectory($folder, 0755, true);
            }
            Image::make($file1)->save($path1);
            //$input['img'] = $path1;
        }


        //row3
        $day = Carbon::now()->day;
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $folder = "uploads/Docs/$year/$month/$day";
        $input = $request->all();

        $file3 = $request->file('imgt');
        if ($file3!= null) {
            $image1 = $file3->getClientOriginalName();
            $path3= $folder . '/' . $image1;

            if (file_exists($folder) == false) {
                $fs = new Filesystem();
                $fs->makeDirectory($folder, 0755, true);
            }
            Image::make($file3)->save($path3);
            //$input['img'] = $path1;
        }
        //row2
        $day = Carbon::now()->day;
        $year = Carbon::now()->year;
        $month = Carbon::now()->month;
        $folder = "uploads/Docs/$year/$month/$day";
        $input = $request->all();

        $file2 = $request->file('imgo');
        if ($file2 != null) {
            $image1 = $file2->getClientOriginalName();
            $path2= $folder . '/' . $image1;

            if (file_exists($folder) == false) {
                $fs = new Filesystem();
                $fs->makeDirectory($folder, 0755, true);
            }
            Image::make($file2)->save($path2);
            //$input['img'] = $path1;
        }
        $upload = DB::table('uploads')->insert([
            'img' => $path1,
            'imgo' => $path2,
            'imgt' => $path3,
            'user_id' => Auth::user()->id,
            'date' => date("m.d.y"),
        ]);

        if ($upload) {
            $request->session()->flash('flags', 'اطلاعات شما با موفق ثبت شد');
            return redirect()->back();
        } else {
            $request->session()->flash('flags', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
            return redirect() - back();
        }

    }

    public function delete(Request $request,$id)
    {
        $bare=Uploads::find($id);
        $bare->delete();

        if($bare)
        {
          $request->session()->flash('del', 'اطلاعات شما با موفق حذف شد');
            return redirect()->back();
        }
        else {
        $request->session()->flash('del', 'اطلاعات شما ثبت نشده است لطفا بامدیریت تماس بگیرد');
        return redirect() - back();
    }

    }
    public function showimg()
    {
        $row=Uploads::all();
        return view('admins.upload.shows',compact('row'));
    }

}
