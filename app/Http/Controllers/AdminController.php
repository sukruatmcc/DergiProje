<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dergi;

class AdminController extends Controller
{
    public function index()
    {
        $data = Dergi::all();
        return view("admin.layout.dergi.index",compact('data'));//dergi all
    }
}
