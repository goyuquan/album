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

        if ($request->category1) {
            switch ($request->category1)
                {
                    case 30: $category1 = date('y-m-d h:i:s',time() + 30*86400); break;
                    case 90: $category1 = date('y-m-d h:i:s',time() + 90*86400); break;
                    case 180: $category1 = date('y-m-d h:i:s',time() + 180*86400); break;
                    case 360: $category1 = date('y-m-d h:i:s',time() + 360*86400); break;
                    default: $category1 = null;
                }
            $user->category1 = $category1;
        }

        if ($request->category2) {
            switch ($request->category2)
                {
                    case 30: $category2 = date('y-m-d h:i:s',time() + 30*86400); break;
                    case 90: $category2 = date('y-m-d h:i:s',time() + 90*86400); break;
                    case 180: $category2 = date('y-m-d h:i:s',time() + 180*86400); break;
                    case 360: $category2 = date('y-m-d h:i:s',time() + 360*86400); break;
                    default: $category2 = null;
                }
            $user->category2 = $category2;
        }

        if ($request->category3) {
            switch ($request->category3)
                {
                    case 30: $category3 = date('y-m-d h:i:s',time() + 30*86400); break;
                    case 90: $category3 = date('y-m-d h:i:s',time() + 90*86400); break;
                    case 180: $category3 = date('y-m-d h:i:s',time() + 180*86400); break;
                    case 360: $category3 = date('y-m-d h:i:s',time() + 360*86400); break;
                    default: $category3 = null;
                }
            $user->category3 = $category1;
        }

        if ($request->category4) {
            switch ($request->category4)
                {
                    case 30: $category4 = date('y-m-d h:i:s',time() + 30*86400); break;
                    case 90: $category4 = date('y-m-d h:i:s',time() + 90*86400); break;
                    case 180: $category4 = date('y-m-d h:i:s',time() + 180*86400); break;
                    case 360: $category4 = date('y-m-d h:i:s',time() + 360*86400); break;
                    default: $category4 = null;
                }
            $user->category4 = $category1;
        }

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


        if ($request->category1) {
            $later_time = $user->category1 ? strtotime($user->category1) : strtotime(date('y-m-d h:i:s',time()));
            switch ($request->category1)
                {
                    case 30: $category1 = date('y-m-d h:i:s',$later_time + 30*86400); break;
                    case 90: $category1 = date('y-m-d h:i:s',$later_time + 90*86400); break;
                    case 180: $category1 = date('y-m-d h:i:s',$later_time + 180*86400); break;
                    case 360: $category1 = date('y-m-d h:i:s',$later_time + 360*86400); break;
                    default: $category1 = null;
                }
            $user->category1 = $category1;
        }


        if ($request->category2) {
            $later_time = $user->category2 ? strtotime($user->category2) : strtotime(date('y-m-d h:i:s',time()));
            switch ($request->category2)
                {
                    case 30: $category2 = date('y-m-d h:i:s',$later_time + 30*86400); break;
                    case 90: $category2 = date('y-m-d h:i:s',$later_time + 90*86400); break;
                    case 180: $category2 = date('y-m-d h:i:s',$later_time + 180*86400); break;
                    case 360: $category2 = date('y-m-d h:i:s',$later_time + 360*86400); break;
                    default: $category2 = null;
                }
            $user->category2 = $category2;
        }

        if ($request->category3) {
            $later_time = $user->category3 ? strtotime($user->category3) : strtotime(date('y-m-d h:i:s',time()));
            switch ($request->category3)
                {
                    case 30: $category3 = date('y-m-d h:i:s',$later_time + 30*86400); break;
                    case 90: $category3 = date('y-m-d h:i:s',$later_time + 90*86400); break;
                    case 180: $category3 = date('y-m-d h:i:s',$later_time + 180*86400); break;
                    case 360: $category3 = date('y-m-d h:i:s',$later_time + 360*86400); break;
                    default: $category3 = null;
                }
            $user->category3 = $category3;
        }

        if ($request->category4) {
            $later_time = $user->category4 ? strtotime($user->category4) : strtotime(date('y-m-d h:i:s',time()));
            switch ($request->category4)
                {
                    case 30: $category4 = date('y-m-d h:i:s',$later_time + 30*86400); break;
                    case 90: $category4 = date('y-m-d h:i:s',$later_time + 90*86400); break;
                    case 180: $category4 = date('y-m-d h:i:s',$later_time + 180*86400); break;
                    case 360: $category4 = date('y-m-d h:i:s',$later_time + 360*86400); break;
                    default: $category4 = null;
                }
            $user->category4 = $category4;
        }

        $user->save();

        Session()->flash('status', 'User update was successful!');

        return redirect('/admin/users');
    }


    public function destroy($id)
    {
        user::destroy($id);

        return redirect('/admin/users');
    }

}
