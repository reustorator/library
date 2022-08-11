<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Materials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryController extends Controller
{


    public function index(Request $request)
    {
        $category = DB::table('category')->get();
        return view('list-category', ['category' => $category]);
    }

    public function createView(){
        return view('create-category');
    }

    /**
     * Редактирование категории
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showUpdate($id) {
        $categories = Category::find($id);
        if ($categories === null) {
            throw new NotFoundHttpException("Категория не найдена");
        }
        return view('update-category', ['categories' => $categories])->with('status','Категория успешно обновлена');;
    }
    /**
     * Удаление категории
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        if ($categories === null) {
            throw new NotFoundHttpException("Категория не найдена");
        }
        $categories->delete();
        return redirect('list-category')->with('status','Категория успешно удалена');
    }
    /**
     * Добавление категории
     */
    public function insertCategory(Request $request)
    {
        Category::create([
            'category' =>  $request->category,
            'created_at' => $request->created_at,
            'update_at' => $request->updated_at,
        ]);
        return redirect('list-category')->with('status', 'Категория добавлена');
    }
}
