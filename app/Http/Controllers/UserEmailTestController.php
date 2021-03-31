<?php

namespace App\Http\Controllers;

use App\Mail\UserEmailTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserEmailTestController extends Controller
{
    //

    public function index()
    {

        $emaildata = [

            'name'      => 'Shohanur Reza',
            'cell'      => '01714461547',
            'email'     => 'shuvo@gmail.com',
            'text'      => 'I am learling larave',

        ];

        Mail::to('cushytools20@gmail.com')->send(new UserEmailTest($emaildata));


    }




}
