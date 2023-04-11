<?php

namespace App\Http\Controllers\Dergi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DergiController extends Controller
{
    public function index()
    {
        return view('admin.layout.dergi.index');
    }
}
