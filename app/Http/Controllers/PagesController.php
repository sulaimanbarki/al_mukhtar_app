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
}
