<?php

namespace App\Http\Controllers\Reklam;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reklam;
use App\Http\Requests\ReklamRequest;

class ReklamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Reklam::all();
        return view('admin.pages.reklam.index',compact('data'));
    }

    public function changeStatus(Request $request)
    {
       $update = Reklam::find($request->id);
       $update->status = $request->status;
       $update->save();
       return response()->json(['message' => "Reklam Status Information Updated" , "status" => "Success"]);
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
    public function store(ReklamRequest $request)
    {
        $status = "Passive";
        if(isset($request->status)){
            $status = "Active";
        }
            Reklam::create([
            "reklam_type_name" => $request->reklam_type_name,
            "reklam_type_info" => $request->reklam_type_info,
            "status" => $status,
        ]);

        alert()->success('Success','Added Reklam Type Information')->showConfirmButton('Okey', '#3085d6')->persistent(true,true);
        return redirect()->route("adminreklam_type.index");
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
        $data = Reklam::find($id);
        return view('admin.pages.reklam.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Reklam::find($id)->update([
            "reklam_type_name" => $request->dergi_name,
            "reklam_type_info" => $request->dergi_info,
        ]);
        alert()->success('Success','Updated Reklam Information')->showConfirmButton('Okey', '#3085d6')->persistent(true,true);
        return redirect()->route("adminreklam_type.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Reklam::find($id)->delete();
      return response()->json(['message' => "Reklam Information Deleted" , "status" => "Success"]);
    }
}
