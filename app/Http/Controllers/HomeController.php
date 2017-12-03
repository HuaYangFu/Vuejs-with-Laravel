<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller{
    
    public function index(){
        $Users = DB::table('users')->paginate(5);
        return view('welcome',compact('Users'));
    }
    
    public function delete($id){
        User::find($id)->delete();
        return redirect("/");
    }
    
    public function createView(){
        return view('User/create');
    }
    
    public function create(Request $request){
        $user = new User;
        $user->name = $request -> name;
        $user->save();
        return redirect("/");
    }
   
    public function editView($id){
        $User = User::find($id);
        return view('User/edit',compact('User'));
    }
    
    public function edit(Request $request){
        $id = $request->id;
        User::find($id)->update($request->all());
        return redirect("/");
    }
    
}
