<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;

class CreateMaterialController extends Controller
{
    public function index(){
        return view('create-material');
    }

    public function insertMaterial(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'category' => 'required'
        ]);

        Materials::create([
            'name' =>  $request->name,
            'author' => $request->author || '',
            'type' => $request->type,
            'category' => $request->category,
            'created_at' => $request->created_at,
            'update_at' => $request->updated_at,
        ]);

        return redirect('list-materials')->with('status', 'Материал добавлен');
    }
}
