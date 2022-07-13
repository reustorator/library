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

    /**
     * Поиск по пользователям
     */
    public function materialsSearch(Request $request)
    {
        $value = $request->get('materialsSearch');
        $columns = [
            'name',
            'author',
            'type',
            'category',
            'description'
        ];
        $searchMaterials = DB::table('materials')
            ->whereFullText($columns, $value)
            ->get();
        return view('list-materials', ['materials' => $searchMaterials]);
    }

    public function createView(){
        return view('create-material');
    }
    /**
     * Добавление материала
     */
    public function insertMaterial(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
        if($request->author != null){
            $author = $request->author;
        }
        else {
            $author = '.';
        }
        Materials::create([
            'name' =>  $request->name,
            'author' => $author,
            'type' => $request->type,
            'category' => $request->category,
            'description' => $request->description,
            'created_at' => $request->created_at,
            'update_at' => $request->updated_at,
        ]);
        return redirect('list-materials')->with('status', 'Материал добавлен');
    }
    /**
     * Редактирование материала
     */
    public function showUpdate($id) {
        $materials = Materials::find($id);
        return view('update-material', ['materials' => $materials]);

    }

    public function update(Request $request,$id) {
        $materials = Materials::find($id);
        $materials->name = $request->name;
        $materials->author = $request->author;
        $materials->type = $request->type;
        $materials->category = $request->category;
        $materials->description = $request->description;
        $materials->update();
        return redirect('list-materials')->with('status','Material Updated Successfully');
    }
    public function destroy($id)
    {
        $material = Materials::find($id);
        $material->delete();
        return redirect('list-materials')->with('status','Student Deleted Successfully');
    }
    public function viewMaterial($id){
        $materials = Materials::find($id);
        return view('view-material', ['materials' => $materials]);
    }
}
