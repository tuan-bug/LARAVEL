<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        $title = "Danh sách danh mục";
        $template = "backend.category.index";

        return view('backend.dashboard.layout', compact('categories', 'title', 'template'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm danh mục";
        return view('backend.category.add', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function post_add(Request $request)
    {
        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $category = new Categories();
        $category->name = $request->input('name');
        $category->name_en = $request->input('name');
        $category->description = $request->input('description');
        $category->slug = $request->input('slug');
        $category->image = $fileName;
        $category->save();
        return redirect()->route('categories.index')->with('success','Thêm danh mục thành công');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Categories::find($id);
//        $product->images()->delete();

        if($category){
            $category->delete();
            return redirect('admin/products')->with('success', "Xóa danh mục thành công");
        }
        else
            return redirect('admin/products')->with('error', "Không tìm thấy danh mục trên");
    }
}
