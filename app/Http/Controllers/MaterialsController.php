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
            'category'];
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
            'category' => 'required'
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
            'created_at' => $request->created_at,
            'update_at' => $request->updated_at,
        ]);
        return redirect('list-materials')->with('status', 'Материал добавлен');
    }
    /**
     * Редактирование материала
     */
    public function showUpdate($id) {
        $materials = DB::table('materials where id = ?',[$id])->get();
        return view('update-material', ['materials' => $materials]);
    }
    public function edit(Request $request,$id) {
        $name = $request->name;
        $author = $request->author;
        $type = $request->type;
        $category = $request->category;

        DB::update('update student set name = ?, author = ?, type = ?, category = ?, where id = ?',[$name,$author,$type,$category,$id]);
        return redirect('list-materials')->with('status', 'Материал обновлен');
    }
}
