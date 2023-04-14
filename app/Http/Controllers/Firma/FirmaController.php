<?php

namespace App\Http\Controllers\Firma;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Firma;
use App\Http\Requests\FirmaRequest;
use Carbon\Carbon;

class FirmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Firma::all();
        return view('admin.pages.firma.index',compact('data'));
    }

    public function changeStatus(Request $request)
    {
       $update = Firma::find($request->id);
       $update->status = $request->status;
       $update->save();
       return response()->json(['message' => "Firma Status Information Updated" , "status" => "Success"]);
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
        if($request->hasFile('firma_logo')){
            $filename=$request->firma_logo->getClientOriginalName();//dosyas adı tanımlama//name tanımla!
            $fileNameWithUpload='admin/uploads/'.$filename;//dosya yükleme
            $request->firma_logo->move(public_path('admin/uploads'),$filename);
            $request->merge([
              'firma_logo'=>$fileNameWithUpload,
            ]);
            Firma::create([
            "firma_logo" => $filename,
            "firma_unvan" => $request->firma_unvan,
            "firma_name" => $request->firma_name,
            "firma_gsm"=> $request->firma_gsm,
            "firma_mail" => $request->firma_mail,
            "status" => $status,
        ]);
        alert()->success('Success','Added Firma Information')->showConfirmButton('Okey', '#3085d6')->persistent(true,true);
        return redirect()->route("AdminFirma.index");
        }
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
        $data = Firma::find($id);
        return view('admin.layout.firma.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->hasFile('firma_logo')){
            $filename=$request->firma_logo->getClientOriginalName();//dosyas adı tanımlama//name tanımla!
            $fileNameWithUpload='admin/uploads/'.$filename;//dosya yükleme
            $request->firma_logo->move(public_path('admin/uploads'),$filename);
            $request->merge([
              'firma_logo'=>$fileNameWithUpload,
            ]);
        Firma::find($id)->update([
            "firma_logo" => $filename,
            "firma_name" => $request->firma_name,
            "firma_unvan" => $request->firma_unvan,
            "firma_mail"=> $request->firma_mail,
            "firma_gsm"=>$request->firma_gsm
        ]);
        alert()->success('Success','Updated Firma Information')->showConfirmButton('Okey', '#3085d6')->persistent(true,true);
        return redirect()->route("AdminFirma.index");
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Firma::find($id)->delete();
        return response()->json(['message' => "Firma Information Deleted" , "status" => "Success"]);
    }
}
