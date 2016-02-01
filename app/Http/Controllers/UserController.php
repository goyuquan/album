<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\RoleUser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.users',['users' => $users]);
    }


    public function create()
    {
        return view('admin.users.create');
    }


    public function store(Request $request)
    {
        $messages = [
            'name.required' => '角色名称不能为空',
            'name.max' => '角色名称不能大于:max位',
            'name.min' => '角色名称不能小于:min位',
            'email.required' => 'email不能为空',
            'email.unique' => 'email不能重复',
            'email.email' => 'email格式不正确',
            'password.required' => 'password不能为空',
            'password.max' => 'password不能大于:max位',
            'password.min' => 'password不能小于:min位',
            'password_confirmation.confirmed' => '密码不一致'
        ];
        $this->validate($request, [
            'name' => 'required|min:1|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'confirmed|required|min:6|max:20'
        ],$messages);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        Session()->flash('user', 'user create was successful!');

        return redirect('/admin/users');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('/admin/users/edit',['user' => $user]);
    }


    public function update(Request $request, $id)
    {
        $messages = [
            'password.max' => '密码不能大于:max位',
            'password.min' => '密码不能小于:min位',
            'password.confirmed' => '密码不一致'
        ];
        $this->validate($request, [
            'password' => 'confirmed|min:6|max:20'
        ],$messages);

        $user = User::findOrFail($id);
        if ($request->password) {
            $user->password = $request->password;
        }

        $user->category1 = $request->category1? 1: 0;
        $user->category2 = $request->category2? 1: 0;
        $user->category3 = $request->category3? 1: 0;
        $user->category4 = $request->category4? 1: 0;
        $user->save();

        Session()->flash('status', 'User update was successful!');

        return redirect('/admin/users');
    }


    public function destroy($id)
    {
        //
    }

}
