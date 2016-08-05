<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public  function __construct()
    {
      
    }
    
    
    public function index()
    {
        session(['name'=>'value']);
        
        return view('users.index');
    }
    
    
    
}
