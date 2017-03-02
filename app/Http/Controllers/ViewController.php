<?php

namespace App\Http\Controllers;

use App\Http\Model\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    //index
    public function index()
    {
        /*$pdo=DB::connection()->getPdo();
        dd($pdo);*/
        //echo 1111;
//        $user = User::where('id',3)->get();
//        dd($user);
        $user = User::find(4);
        $user->pname='testlaoshi';
        $user->update();
        dd($user);
        //$users = DB::table('tb_zq58')->where('id',3)->get();
        //dd($users);
        //$name = "afei阿飞";
        //$age = 25;
        //return view('my_view')->with('name',$name)->with('age',$age);
        //return view('my_view', compact('name', 'age'));
    }
}
