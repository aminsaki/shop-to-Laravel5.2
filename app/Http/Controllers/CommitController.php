<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\Http\Requests;


class CommitController extends Controller
{
    public function __construct()
    {
        ///
    }
    public function index()
    {
        $title='ارسال مطالب';
        return view('admins.commit',compact('title'));
    }
    public function insert(AboutRequest $r)
    {
     return dd($r->request);

    }
}