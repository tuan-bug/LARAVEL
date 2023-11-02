<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{config('apps.user.title')}}</h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-lg-between">
        <h6 class="m-0 font-weight-bold text-primary">{{config('apps.user.tableHeading')}}</h6>
        <a href="{{route('create_user')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Thêm mới</a>
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
                    <th>Tên đăng nhập</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Thao tác</th>

                </tr>
                </thead>
                <tbody class="align-items-center">
                @if(isset($users) && is_object($users))
                    @foreach($users as $user)
                        <div class="d-flex justify-content-center">
                            <tr>
                                <td>
                                    <input type="checkbox" value="" id="checkAll" class="input-group-sm">
                                </td>
                                <td>
                                    @if (Str::startsWith($user->image, 'images/'))
                                        <img style="width: 120px;" src="{{$user->image}}" alt="Avatar">
                                    @else
                                        <img style="width: 120px;" src="{{ asset('uploads/' . $user->image) }}" alt="Avatar">
                                    @endif
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->fullname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="{{route('edit',['id'=>$user->id])}}" class="btn btn-warning btn-circle mr-2">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </a>
                                        <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-circle mr-2"
                                                    onclick="return confirm('Bạn có chắc muốn xóa người dùng này?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                        <a href="{{route('edit',['id'=>$user->id])}}" class="btn btn-warning btn-circle mr-2">
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

            {{ $users->links('pagination::simple-bootstrap-4') }}

        </div>
    </div>
</div>

