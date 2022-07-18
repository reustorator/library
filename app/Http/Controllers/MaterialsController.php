<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MaterialsController extends Controller
{
    public $columnsMaterials = [
        'name',
        'author',
        'type',
        'category',
        'description'
    ];
    /**
     * Показать список всех пользователей приложения.
     * Поиск по пользователям
     *
     */
    public function index(Request $request)
    {
        $value = $request->get('materialsSearch');
        $value = '%' . $value . '%';
        if($value != null){
            $searchMaterials = DB::table('materials')
                ->where('name','like',"{$value}")
                ->orWhere('author','like',"{$value}")
                ->orWhere('type','like',"{$value}")
                ->orWhere('category','like',"{$value}")
                ->orWhere('description','like',"{$value}")
                ->orderBy('name')
                ->get();
        }
        else{
            $searchMaterials = DB::table('materials')->get();
        }
        $value = $request->get('materialsSearch');
        return view('list-materials', ['materials' => $searchMaterials],['value' => $value]);
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
        if ($materials === null) {
            throw new NotFoundHttpException("Материал не найден");
        }
        return view('update-material', ['materials' => $materials]);

    }

    public function update(Request $request,$id) {
        $materials = Materials::find($id);
        if ($materials === null) {
            throw new NotFoundHttpException("Материал не найден");
        }
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
        $materials = Materials::find($id);
        if ($materials === null) {
            throw new NotFoundHttpException("Материал не найден");
        }
        $materials->delete();
        return redirect('list-materials')->with('status','Student Deleted Successfully');
    }
    public function viewMaterial($id){
        $materials = Materials::find($id);
        if ($materials === null) {
            throw new NotFoundHttpException("Материал не найден");
        }
        return view('view-material', ['materials' => $materials]);
    }
}
