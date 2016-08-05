<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
       $title='صفحه مدیریت';
        return view('admins.index',compact('title'));
    }

}
