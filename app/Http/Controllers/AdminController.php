<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dergi;
use App\Models\Sayfa;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
       // return view('admin.layout.master');
        $data = Dergi::all();
        return view("admin.pages.dergi.index",compact('data'));//dergi all
    }


}
