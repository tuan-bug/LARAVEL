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
                            <h1 class="h4 text-gray-900 mb-4">Thêm danh mục</h1>
                        </div>
                        <form method="POST" class="user" action="{{ route('category.post_add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label>Tên danh mục</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                           name="name" placeholder="Tên danh mục">
                                </div>
                                <div class="col-sm-6">
                                    <label>Mô tả</label>
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           name="description" placeholder="Mô tả">
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label>Đường dẫn</label>
                                    <input type="text" class="form-control form-control-user"
                                           id="cost_price" name ="slug" placeholder=" Đường dẫn">
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Ảnh đại diện</label>
                                <input type="file" class="form-control s" id="image" name="image" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Thêm danh mục
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
