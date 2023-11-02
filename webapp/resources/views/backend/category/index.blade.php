<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{config('apps.category.title')}}</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-lg-between">
        <h6 class="m-0 font-weight-bold text-primary">{{config('apps.category.tableHeading')}}</h6>
        <a href="{{route('category.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Thêm mới</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered mx-auto" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>
                        <input type="checkbox" value="" id="checkAll" class="input-group-sm">
                    </th>
                    <th>Ảnh</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Đường dẫn</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody class="align-items-center">
                @if(isset($categories) && is_object($categories))
                    @foreach($categories as $category)
                        <div class="d-flex justify-content-center">
                            <tr>
                                <td>
                                    <input type="checkbox" value="" id="checkAll" class="input-group-sm">
                                </td>
                                <td>
                                    <img style="width: 120px;" src="{{ asset('uploads/' . $category->image) }}" alt="Avatar">
                                </td>
                                <td>
                                    Tên: {{$category->name}}

                                </td>
                                <td>{{$category->description}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->status}}</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('edit',['id'=>$category->id])}}" class="btn btn-warning btn-circle mr-2">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                        <form method="POST" action="{{ route('products.delete', $category->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle mr-2"
                                                    onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{route('edit',['id'=>$category->id])}}" class="btn btn-warning btn-circle mr-2">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                    </div>

                                </td>

                            </tr>
                        </div>
                    @endforeach
                @endif
                </tbody>
            </table>


        </div>
    </div>
</div>

