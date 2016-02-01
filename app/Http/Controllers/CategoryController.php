<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function __construct()
    {

    }


    public function index()
    {
        $categorys = $categoryss = Category::all();
        return view('admin.categorys.index', ["categorys" => $categorys,"categoryss" => $categoryss]);
    }


    public function store(Request $request)
    {
        $request->parent_id = empty($request->parent_id)?1:$request->parent_id;

        $messages = [
            'name.required' => '分类名不能为空',
            'alias.required' => '别名不能为空',
        ];
        $this->validate($request, [
            'name' => 'required',
            'alias' => 'required',
        ],$messages);

        Category::create([
            'name' => $request->name,
            'alias' => $request->alias,
            'parent_id' => $request->parent_id,
        ]);

        Session()->flash('status', 'category create was successful!');

        return redirect('/admin/categorys/');
    }


    public function edit($id)
    {
        $current = category::find($id);
        $categorys = $categoryss = Category::all();
        return view('admin.categorys.edit', [
            "current" => $current,
            "categorys" => $categorys,
            "categoryss" => $categoryss
        ]);
    }


    public function update(Request $request,$id)
    {
        $request->parent_id = empty($request->parent_id)?1:$request->parent_id;

        $messages = [
            'name.required' => '分类名不能为空',
            'alias.required' => '别名不能为空',
        ];
        $this->validate($request, [
            'name' => 'required',
            'alias' => 'required',
        ],$messages);

        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->alias = $request->alias;
        $category->save();


        Session()->flash('status', 'category update was successful!');

        return redirect('/admin/categorys/');
    }


    public function destroy($id)
    {

        Category::destroy($id);

        return redirect('/admin/categorys/');
    }

}
