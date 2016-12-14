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
        $data = News::with('category')->get();
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
            $datapost = new News();
            $datapost->title = $request->input('title');
            $datapost->slug = $request->input('slug');
            $datapost->description = $request->input('description');
            $datapost->category_id = $request->input('category_id');
            $datapost->status = $request->input('status');
            $datapost->image = $imageName;
            $datasaved = $datapost->save();
            return redirect('admin/news');
        }
    }

    /* end add category function  */

    /* edit category function  */

    public function edit($id) {
        $category = Category::all();
        $data = News::with('category')->find($id);
        return view('admin/news/edit', array('categories' => $category , 'data'=>$data));
    }

    public function postedit(Request $request, $id) {
        $data = $request->all();
        $check = Validator::make($data, array(
                    'title' => 'required|max:255',
                    'slug' => 'required|unique:news,slug,' . $id . '|max:255',
                    'description' => 'required',
                    'category_id' => 'required',
//                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));
        // if the validator fails, redirect back to the form
        if ($check->fails()) {
            return Redirect::back()
                            ->withErrors($check) // send back all errors to the login form
                            ->withInput();
        } else {
            $datapost = News::find($id);
            $imageName = $datapost->image;
            if($request->file('image')){
                $imageName = time().'.'.$request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload'), $imageName);
            }
            
            $datapost->title = $request->input('title');
            $datapost->slug = $request->input('slug');
            $datapost->description = $request->input('description');
            $datapost->category_id = $request->input('category_id');
            $datapost->status = $request->input('status');
            $datapost->featured = $request->input('featured');
            $datapost->image = $imageName;
            $datasaved = $datapost->save();
            return redirect('admin/news');
        }
    }

    /* end edit category function  */

    /* delete category function */

    public function delete($id) {
        $data = News::find($id);
        $data->delete();
        return redirect('admin/news');
    }

    /* end delete category function */
    
    /* delete category function */

    public function featured() {
        $data = News::with('category')->where('featured' , 1)->get();
        return view('admin/news/featured' , array('data'=>$data));
    }

    /* end delete category function */
}
