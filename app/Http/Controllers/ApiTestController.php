<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\HttpException;

class ApiTestController extends Controller{
    
    public function index(){
        $Users = DB::table('users')->paginate(5);
        return $Users;
    }
    
    public function delete($id){
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }
        $User = User::find($id);
        $User->delete();
        return response()->json([
            'message' => 'user deleted',
        ], 200);
    }
    
    public function create(Request $request){
        $user = new User;
        $user->name = $request->input('name');
        if ($user->save()) {
            return $user;
        }
        throw new HttpException(400, "Invalid data");
    }
    
    public function update(Request $request){
        $id = $request->id;
        if (!$id) {
            throw new HttpException(400, "Invalid id");
        }
        $User = User::find($id);
        $User->name = $request->input('name');
        if ($User->save()) {
            return $User;
        }
        throw new HttpException(400, "Invalid data");
    }
    
}
