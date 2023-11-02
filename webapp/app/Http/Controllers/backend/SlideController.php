<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Product;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slides = Slide::all();
        $title = "Danh sách slide";
        $template = 'backend.slide.index';
        return view('backend.dashboard.layout', compact('template', 'title', 'slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm slide";
        $categories = Categories::all();
        return view('backend.slide.add', compact('title', 'categories'));
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

        $slide = new Slide();
        $slide->title = $request->input('title');
        $slide->sub_title = $request->input('sub_title');
        $slide->link = $request->input('link');
        $slide->image = $fileName;
        $slide->category_id = $request->input('category');

        $slide->save();

        return redirect()->route('slides.index')->with('success', "Thêm Slide thành công");
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
    public function destroy(string $id)
    {
        //
    }
}
