<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function username() {
        return 'email_address';
    }
    public function login(Request $request) {
        // $validations = $request->validate([
        //     $this->username() => 'required|email',
        //     'password' => 'required|min:6',
        // ]);

        // $user = User::where('email_address', $request->email_address)
        //                 ->where('password', sha1($request->password))
        //                 ->whereIn('role', '!=',  'NA')
        //                 ->first();

        //                 return response()
        //                 ->json([
        //                     'message' => 'Hi '.$user->name.', welcome to home' 
        //                 ]);
        // if(!Auth::attempt($request->only('email_address', 'password')) ) {
        //     return response()
        //         ->json(['message' => 'Invalid Credentials'], 401);
        // }

        $user = User::where('email_address', $request['email_address'])
                        ->where('password', sha1($request['password']))
                        ->whereNotIn('role',['NA'])
                        ->firstOrFail();

        return response()
                        ->json([
                            'message' => 'Hi '.$user->name.', welcome to home' 
                        ]);
    }
}
