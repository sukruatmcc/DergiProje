<?php

namespace App\Http\Controllers\Dergi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sayfa;

class SayfaController extends Controller
{
    public function changeStatus(Request $request)
    {
        $update = Sayfa::find($request->id);
        $update->status = $request->status;
        $update->save();
        return response()->json(['message' => "Sayfa Status Information Updated" , "status" => "Success"]);
    }
}
