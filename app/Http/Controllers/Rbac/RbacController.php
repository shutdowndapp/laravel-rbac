<?php

namespace App\Http\Controllers\Rbac;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;
use App\User;

class RbacController extends Controller
{
    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|unique:users|required',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route('user.list');
    }

    public function postLogin()
    {
        
    }

    public function userList()
    {
        $users = User::all();
        return view('rbac.user',['users' => $users]);
    }

    public function userDelete($user_id)
    {
        User::find($user_id)->delete();
        return redirect()->route('user.list')->with(['success' => 'Success Deleted']);
    }

    public function userEdit($user_id)
    {
        $user = User::find($user_id);
        return view('rbac.edit',['user' => $user]);
    }

    public function postEdit(Request $request)
    {
        User::where('id',$request->id)->update([
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('user.list')->with([
            'success' => 'update success'
        ]);
    }
}
