<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MaterialsResource;
use App\Http\Resources\PostResource;
use App\Models\Materials;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MaterialApiController extends Controller
{
    public function index()
    {
        $materials = Materials::all();
        return MaterialsResource::collection($materials);
    }

    public function show($id)
    {
        return Materials::find($id);
    }

    public function create(Request $request)
    {
        $materials = Materials::create($request->all());

        return response()->json($materials, 201);
    }

    public function update(Request $request, Materials $materials)
    {
        $materials->update($request->all());

        return response()->json($materials, 200);
    }

    public function delete(Materials $materials)
    {
        $materials->delete();

        return response()->json(null, 204);
    }
}
