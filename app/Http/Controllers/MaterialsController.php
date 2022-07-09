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
}
