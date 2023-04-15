<?php

namespace App\Http\Controllers\Dergi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dergi;
use App\Http\Requests\DergiRequest;
use Illuminate\Support\Facades\DB;

class DergiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function changeStatus(Request $request)
    {
       $update = Dergi::find($request->id);
       $update->status = $request->status;
       $update->save();
       return response()->json(['message' => "Dergi Status Information Updated" , "status" => "Success"]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(DergiRequest $request)
    {
        $status = "Passive";
        if(isset($request->status)){
            $status = "Active";
        }
            Dergi::create([
            "dergi_name" => $request->dergi_name,
            "dergi_info" => $request->dergi_info,
            "dergi_number"=> $request->dergi_number,
            "status" => $status,
        ]);

        alert()->success('Success','Added Dergi Information')->showConfirmButton('Okey', '#3085d6')->persistent(true,true);
        return redirect()->route("admin.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('dergi')
        ->join('sayfa','dergi.id' , '=' , 'sayfa.dergi_id')
        ->select('dergi.dergi_name','sayfa.sayfa_name','sayfa.sayfa_order','sayfa.status','dergi.id','sayfa.id')
        ->where('dergi.id',$id)
        ->get();

        $data_category = DB::table('categories')
        ->join('sayfa','categories.id' , '=' , 'sayfa.categories_id')
        ->select('categories.categeri_name','sayfa.sayfa_order','sayfa.status','categories.id','sayfa.id')
        ->where('categories.id',$id)
        ->get();
       //return $data_categoory;
        //return $data;
       return view('admin.pages.dergi.sayfa.show',compact('data','data_category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Dergi::find($id);
        return view("admin.pages.dergi.edit",compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Dergi::find($id)->update([
            "dergi_name" => $request->dergi_name,
            "dergi_info" => $request->dergi_info,
            "dergi_number"=> $request->dergi_number,
        ]);
        alert()->success('Success','Updated Dergi Information')->showConfirmButton('Okey', '#3085d6')->persistent(true,true);
        return redirect()->route("admin.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      Dergi::find($id)->delete();
      return response()->json(['message' => "Dergi Information Deleted" , "status" => "Success"]);
    }
}
