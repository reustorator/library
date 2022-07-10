<?php

namespace App\Http\Controllers;

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

    public function postSearch(Request $request)
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
    /*public function search()
    {
        $request->ajax();
        $output = "";
        $materials = DB::table('materials')->where('name', 'author', 'type', 'category', 'LIKE', '%' . $request->search . "%")->get();

        return view('list-materials', ['materials' => $materials]);
    }*/
}
