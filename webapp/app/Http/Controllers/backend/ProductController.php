<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Image;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('categories')->get();
        $title = "Danh sách sản phẩm";
        $template = 'backend.products.index';
        return view('backend.dashboard.layout', compact('template', 'title', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Thêm sản phẩm";
        $categories = Categories::all();
        return view('backend.products.add', compact('title', 'categories'));
    }

    public function post_add(Request $request){
        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('image')) {
            $avatar = $request->file('image');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }


        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->info = $request->input('info');
        $product->cost_price = $request->input('cost_price');
        $product->sale_price = $request->input('sale_price');
        $product->unit = $request->input('unit');
        $product->count = $request->input('count');
        $product->slug = $request->input('slug');
        $product->image = $fileName;
        $product->save();

        $selectedCategories = $request->input('categories', []);
        var_dump($selectedCategories);
        // Thêm sản phẩm vào các danh mục đã chọn
        if (!empty($selectedCategories)) {
            $product->categories()->sync($selectedCategories);
        }

        // Xử lý ảnh sản phẩm
        if ($request->hasFile('list_image')) {
            $imagePaths = [];
            foreach ($request->file('list_image') as $image) {
                $imagePath = $image->store('images', 'public');
                $imagePaths[] = $imagePath;

                // Tạo bản ghi hình ảnh liên kết với sản phẩm
                $imageModel = new Image;
                $imageModel->product_id = $product->id;
                $imageModel->filename = $image->getClientOriginalName();
                $imageModel->filepath = $imagePath;
                $imageModel->save();
            }
        }

        return redirect()->route('products.index')->with('success', 'Thêm thành công!');

    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function destroy(Request $request, int $id)
    {

        $product = Product::find($id);
        $product->images()->delete();

        if($product){
            $product->delete();
            return redirect('admin/products')->with('success', "Xóa sản phẩm thành công");
        }
        else
            return redirect('admin/products')->with('error', "Không tìm thấy sản phẩm");
    }
}
