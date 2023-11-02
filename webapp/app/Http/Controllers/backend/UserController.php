<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function __construct()
    {
    }
    public function index(){
        $users = User::paginate(10); // 10 là số người dùng hiển thị trên mỗi trang
        $title = "Thành Viên";
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact('template', 'users', 'title' ));
    }

    public function create_user(){
        $title = "Thêm Thành Viên";
        return view('backend.user.addUser', compact('title'));
    }

    public function post_add(Request $request){
        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $existingUser = User::where('email', $request->input('email'))->first();
        if ($existingUser) {
            // Email đã tồn tại, hiển thị thông báo lỗi
            return redirect()->back()->with('error', 'Email đã tồn tại trong hệ thống.');
        } else {
            $user = new User();
            $user->name = $request->input('name');
            $user->fullname = $request->input('fullname');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');
            $user->password = $request->input('password');
            $user->image = $fileName;
            $user->save();
            return redirect()->route('users.index')->with('success', 'Người dùng đã được thêm thành công!');
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        $title = "Sửa Thành Viên";
        return view('backend.user.edit', compact('user', 'title'));
    }

    public function update(Request $request, $id)
    {
//        dd($request->all());
        $storagePath = public_path('uploads');
        echo $storagePath;
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $fileName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $fileName);
        } else {
            $fileName = null; // Đảm bảo biến $fileName được định nghĩa dù có tải lên tệp ảnh hay không
        }

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->fullname = $request->input('fullname');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        if ($request->filled('password')) {
            // Nếu có mật khẩu mới được cung cấp, thì cập nhật
            $user->password = bcrypt($request->input('password'));
        }
        $user->image = $fileName;
        $user->save();
        return redirect('/user')->with('success', 'Thông tin thành viên đã được cập nhật.');

    }

    public function delete($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect('/user')->with('success', 'Thông tin thành viên đã được xóa.');
        } else {
            // Người dùng không tồn tại, xử lý lỗi hoặc thông báo
        }
    }



}
