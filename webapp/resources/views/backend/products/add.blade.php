<!DOCTYPE html>
<html lang="en">

@include('backend.dashboard.component.head')
<body class="bg-gradient-primary">

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Thêm sản phẩm</h1>
                        </div>
                        <form method="POST" class="user" action="{{ route('products.post_add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                           name="name" placeholder="Name">
                                </div>
                                <div class="col-sm-6">
                                    <label>Mô tả</label>
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           name="description" placeholder="Full Name">
                                </div>

                                <div class="col-sm-12 mt-4">
                                    <label>Danh Mục</label>
                                    <br>
                                    @foreach($categories as $category)
                                        <label>
                                            <input style="margin-right: 3px;" type="checkbox" name="categories[]" value="{{ $category->id }}">
                                            <span style="margin-right: 10px;">{{ $category->name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Giá</label>
                                    <input type="number" class="form-control form-control-user"
                                           id="cost_price" name = "cost_price" placeholder="Phone">
                                </div>
                                <div class="col-sm-6">
                                    <label>Giá sale</label>
                                    <input type="number" class="form-control form-control-user"
                                           id="sale_price" name="sale_price" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <label>Đơn vị</label>
                                    <input type="text" class="form-control form-control-user"
                                           id="unit" name="unit" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <label>Số lượng</label>
                                    <input type="number" class="form-control form-control-user"
                                           id="count" name="count" placeholder="Password">
                                </div>
                                <div class="col-sm-12">
                                    <label>Đường dẫn</label>
                                    <input type="text" class="form-control form-control-user"
                                           id="slug" name="slug" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>

                            <div class="form-group">
                                <label>Ảnh sản phẩm</label>
                                <input type="file" class="form-control" id="list_images " name="list_image" accept="image/*" multiple>
                            </div>

                            <div class="form-group">
                                <label>Thông tin chi tiết </label>
                                <textarea  type="text" class="form-control ckeditor" id="exampleInputEmail"
                                           name="info" > </textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Thêm sản phẩm
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('backend.dashboard.component.script')

</body>

</html>
