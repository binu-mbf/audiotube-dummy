<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view ('admin.admin_login');
    }


    public function view(){                                                                                     
        return view('admin.admin_template');
    }


}
