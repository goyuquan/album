<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function homepage()
    {
        return view('welcome');
    }

    public function pay()
    {
        return view('pay');
    }

    public function price()
    {
        return view('price');
    }

}
