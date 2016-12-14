<?php

namespace App\Http\Controllers;


use App\News;
use App\Category;
use Illuminate\Http\Request;
use Validator,
    Redirect;

class newsController extends Controller {

    // list all category
    public function index() {
//        $data = News::all();
        $data = News::with('category')->get();
//        echo "<pre>";
//        print_r($data);
//        exit;
        return view('admin/news/index', array('data' => $data));
    }

    /* start add category function  */

    public function add() {
        $categories = Category::all();
        return view('admin/news/add' , array('categories'=>$categories));
    }

    public function postadd(Request $request) {
        $data = $request->all();
        $check = Validator::make($data, News::$rules);
        // if the validator fails, redirect back to the form
        if ($check->fails()) {
            return Redirect::back()
                            ->withErrors($check) // send back all errors to the login form
                            ->withInput();
        } else {
            $imageName = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload'), $imageName);
            $data = new News();
            $data->title = $request->input('title');
            $data->slug = $request->input('slug');
            $data->description = $request->input('description');
            $data->category_id = $request->input('category_id');
            $data->status = $request->input('status');
            $data->image = $imageName;
            $datasaved = $data->save();
            return redirect('admin/news');
        }
    }

    /* end add category function  */

    /* edit category function  */

    public function edit($id) {
        $category = Category::find($id);
        return view('admin/news/edit', array('category' => $category));
    }

    public function postedit(Request $request, $id) {
        $data = $request->all();
        $check = Validator::make($data, array(
                    'name' => 'required|max:255',
                    'slug' => 'required|unique:categories,slug,' . $id . '|max:255',
        ));
        // if the validator fails, redirect back to the form
        if ($check->fails()) {
            return Redirect::back()
                            ->withErrors($check) // send back all errors to the login form
                            ->withInput();
        } else {
            $category = Category::find($id);
            $category->name = $request->input('name');
            $category->slug = $request->input('slug');
            $category->status = $request->input('status');
            $categories = $category->save();
            return redirect('admin/news');
        }
    }

    /* end edit category function  */

    /* delete category function */

    public function delete($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/news');
    }

    /* end delete category function */
}
