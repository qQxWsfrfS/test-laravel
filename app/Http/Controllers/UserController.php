<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Scalar\String_;

class UserController extends Controller
{
    //user register

    public function register(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');
        $password = encrypt($request->input('password'));


        DB::insert('insert into users(email, password, name) values (?, ?, ?)', [$email, $password, $name]);
        //return redirect('/register/success', ['id'=>1]);
        return redirect()->route('success_register', ['id'=>1], 301);
        //return view('welcome');
    }



    public function success_register(int $id = null){
        $user = DB::table('users')->where('id', $id)->first();
        return view('success_register', ['user' => $user]);
}

}
