<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.app');
    }
    public function register()
    {
        return view('category.register');
    }
    public function doregister(Request $request)
    {
        $request->validate([
            'name'=>'required',
        ]);
        Category::create([
            'name'=>$request->name,
        ]);
        return redirect()->route('category.register')->with('success',"Registered Successfully");
    }
}
