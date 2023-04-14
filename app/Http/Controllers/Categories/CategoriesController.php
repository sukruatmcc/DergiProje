<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Categories::all();
        return view('admin.pages.categories.index',compact('data'));
    }

     public function changeStatus(Request $request)
     {
        $update = Categories::find($request->id);
        $update->status =  $request->status;
        $update->save();
        return response()->json(['message' => "Category Status Information Updated" , "status" => "Success"]);
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = "Passive";
        if(isset($request->status)){
            $status = "Active";
        }
            Categories::create([
            "categeri_name" => $request->categeri_name,
            "categeri_color" => $request->categeri_color,
            "status" => $status,
        ]);

        alert()->success('Success','Added Category Information')->showConfirmButton('Okey', '#3085d6')->persistent(true,true);
        return redirect()->route("AdminCategories.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Categories::find($id);
        return view('admin.pages.categories.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Categories::find($id)->update([
            "categeri_name" => $request->categeri_name,
            "categeri_color" => $request->categeri_color,
        ]);
        alert()->success('Success','Updated Categories Information')->showConfirmButton('Okey', '#3085d6')->persistent(true,true);
        return redirect()->route("AdminCategories.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Categories::find($id)->delete();
        return response()->json(['message' => "Firma Information Deleted" , "status" => "Success"]);
    }
}
