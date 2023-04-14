<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dergi;
use App\Models\Sayfa;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        $data = Dergi::with('sayfaDergi')->get();
        return $data;
        return view("admin.pages.dergi.index",compact('data'));//dergi all
    }
}
