<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function show($name,$comment){
        $user = DB::table('users')->where('name',$name)->first();
        if(!$user){
            abort(404);
        }
//        echo $comment;
//        $user_with_password_only = DB::table('users')->where('name',$name)->value('password');
        dd($user);

    }

    public function show_table(){
        $users = DB::table('users')->get();
        return view('get_result', ['users' => $users]);
    }

    public function show_user(){
        return view('user',[
            'user' => User::where('name','业成')->firstOrFail()
        ]);
    }

    public function show_all_users(){
        $users = User::all();
        return view('all_user',['users' => $users]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(){
//        dump(\request()->all());
        \request()->validate([
            'name' => ['required'],
            'password' => ['required']
        ]);
        $user = new User();
        $user->name = \request('name');
        $user->password = \request('password');

        $user->save();

        return redirect('/users');
    }

    public function index(){
        die(__METHOD__);
    }

    public function edit(User $user){
        return view('users.edit',compact('user'));
    }

    public function update(User $user){

        $user->name = \request('name');
        $user->password = \request('password');
        $user->save();

        return redirect('/users/' . $user->id);
    }

    public function display(User $user){

        return view('users.display',compact('user'));
    }

    public function test_request(Request $request){
        $request->validate();
        $request->session()->flash('t','test');
    }
}
