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
                            <h1 class="h4 text-gray-900 mb-4">Thêm slide</h1>
                        </div>
                        <form method="POST" class="user" action="{{ route('slide.post_add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label>Tiêu đề</label>
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                           name="title" placeholder="Tiêu đề">
                                </div>
                                <div class="col-sm-12">
                                    <label>Phụ đề</label>
                                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                                           name="sub_title" placeholder="Phụ đề">
                                </div>

                                <div class="col-sm-12 mt-4">
                                    <label>Thuộc Danh Mục</label>
                                    <br>
                                    @foreach($categories as $category)
                                        <label>
                                            <input style="margin-right: 3px;" type="radio" name="category" value="{{ $category->id }}">
                                            <span style="margin-right: 10px;">{{ $category->name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label>Link</label>
                                    <input type="number" class="form-control form-control-user"
                                           id="cost_price" name = "link" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ảnh slide</label>
                                <input type="file" class="form-control s" id="image" name="image" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Thêm Slide
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
