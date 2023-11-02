<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{config('apps.product.title')}}</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-lg-between">
        <h6 class="m-0 font-weight-bold text-primary">{{config('apps.product.tableHeading')}}</h6>
        <a href="{{route('products.add')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Thêm mới</a>
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
                    <th>Chi tiết sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody class="align-items-center">
                @if(isset($products) && is_object($products))
                    @foreach($products as $product)
                        <div class="d-flex justify-content-center">
                            <tr>
                                <td>
                                    <input type="checkbox" value="" id="checkAll" class="input-group-sm">
                                </td>
                                <td>
                                    <img style="width: 120px;" src="{{ asset('uploads/' . $product->image) }}" alt="Avatar">
                                </td>
                                <td>
                                    Tên: {{$product->name}}
                                    <br/>
                                    Danh mục:
                                        @foreach ($product->categories as $category)
                                            {{ $category->name }},
                                        @endforeach

                                    <br>
                                    Danh mục: {{$product->description}}
                                    <br>
                                    Đơn vị: {{$product->unit}}
                                    <br>
                                    Giá: {{$product->cost_price}}
                                    <br>
                                    Số lượng: {{$product->count}}
                                    <br>

                                </td>
                                <td>{{$product->status}}</td>

                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('edit',['id'=>$product->id])}}" class="btn btn-warning btn-circle mr-2">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                        <form method="POST" action="{{ route('products.delete', $product->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle mr-2"
                                                    onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{route('edit',['id'=>$product->id])}}" class="btn btn-warning btn-circle mr-2">
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

