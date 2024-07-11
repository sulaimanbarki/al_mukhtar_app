<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Record;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {

        return view('admin.index');
    }

    public function home()
    {
        // return view('front.home');
        return view('front.books');
    }

    public function books()
    {
        return view('front.books');
    }
}
