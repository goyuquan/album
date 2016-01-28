<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
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
        //
    }


    public function roles()
    {
        $roles = Role::all();
        return view('admin.users.roles',['roles' => $roles]);
    }


    public function store(Request $request)
    {
        //
    }

    public function role_store(Request $request)
    {
        $messages = [
            'name.required' => '角色名称不能为空',
            'name.max' => '角色名称不能大于:max位',
            'name.min' => '角色名称不能小于:min位'
        ];
        $this->validate($request, [
            'name' => 'required|min:1|max:20'
        ],$messages);

        $role = new Role;
        $role->name = $request->name;
        $role->save();

        Session()->flash('status', 'Role create was successful!');

        return redirect('/admin/user/roles');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function role_edit($id)
    {
        $roles = Role::all();
        $role = Role::find($id);

        return view('admin.users.role_edit',['roles' => $roles,'role'=>$role]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function role_update(Request $request, $id)
    {
        $messages = [
            'name.required' => '角色名称不能为空',
            'name.max' => '角色名称不能小于:max位',
            'name.min' => '角色名称不能小于:min位',
        ];
        $this->validate($request, [
            'name' => 'required|min:1|max:50',
        ],$messages);

        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();

        Session()->flash('status', 'Role update was successful!');

        return redirect('/admin/user/roles');
    }


    public function destroy($id)
    {
        //
    }


    public function role_destroy($id)
    {

        Role::destroy($id);

        return redirect('/admin/user/roles');
    }
}
