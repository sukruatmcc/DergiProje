<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dergi;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $data = Dergi::all();
        return view("admin.pages.dergi.index",compact('data'));//dergi all
    }
}
