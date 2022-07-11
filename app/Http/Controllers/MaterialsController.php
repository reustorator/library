<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MaterialsController extends Controller
{

    /**
     * Показать список всех пользователей приложения.
     */
    public function index()
    {
        $materials = DB::table('materials')->get();

        return view('list-materials', ['materials' => $materials]);
    }

    public function materialsSearch(Request $request)
    {
        $value = $request->get('postSearch');
        $columns = [
            'name',
            'author',
            'type',
            'category'];
        $searchMaterials = DB::table('materials')
            ->whereFullText($columns, $value)
            ->get();
        return view('list-materials', ['materials' => $searchMaterials]);
    }

    public function createView(){
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
