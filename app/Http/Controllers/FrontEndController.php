<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FrontEndController extends Controller
{
    function showHome(Request $request)
    {
        return view('index');
    }

    function registerUser(Request $request)
    {
        // $request->validate(([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'password' => 'required|min:5|max:12'
        // ]));
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // $res = $user->save();
        // if ($res) {
        //     return redirect('login')->with('success', 'Register Successfully');
        // } else {
        //     echo 'Lỗi';
        // }
        $user = User::where('email', $request['email'])->first();

        if ($user) {
            return response()->json(['exists' => 'Email already exists']);
        } else {
            $user = new User;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);
        }
        $user->save();
        return response()->json(['success' => 'User Registered Successfully']);
    }
}
