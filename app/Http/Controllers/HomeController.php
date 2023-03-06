<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Userss;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    public function login(){
        return view('/login');
    }

    public function loginUser(Request $request)
    {

        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:12'
        ]);

        $admin = Admin::where('email','=',$request->email)->first();
        if($admin){
            if(Hash::check($request->password,$admin->password))
            {
                //select * from User
                $user = User::paginate();

                $request->session()->put('loginId', $admin->id);
                $admins = Admin::all();
//                return view('dashboard.alluser', [
//                    'user' => $user
//                ] );
                return view('dashboard.alluser', compact( 'user', 'admins')
                 );
            }else{
                return back()->with('fail', 'password mismatch');
            }
        }else{
            return back()->with('fail', 'This email is not registered');
        }
    }

    public function loginusers(){
        return view('dashboard/adduser');
    }
    public function addadmins(){
        return view('dashboard/addadmin');
    }

    public function adduser(){
        return view('dashboard/adduser');
    }


}
