<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show Admin Login  Form
     */

    public function showAdminLoginForm()
    {
       return view('admin.login');
    }

    /**
     * Show Admin Register Form
     */

     public function showAdminRegisterForm()
     {
         return view('admin.register');
     }

     //Show adminpanel

     public function adminpanel()
     {
         return view('admin.homepage');
     }



}
