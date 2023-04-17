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

    public function file_log(){
        $mode = "a+";
        $text = "\n".date("Y-m-d H:i:s")." ".$text;
        $file_name = $name.".txt";
        $file = fopen(__DIR__ ."/logs/$file_name", $mode);
        fwrite($file, $text);
        fclose($file);
    }

}
