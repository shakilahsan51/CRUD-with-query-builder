<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users=DB::table('users')
        // ->get();
        // ->simplePaginate(5);
        ->paginate(5);
        return view('allusers',['data'=>$users]);
    }


    public function singleUser(string $id){
        $users=DB::table('users')->where('id',$id)->get();
        return view('user', ['data'=>$users]);
    }


    public function deleteUser(string $id){
        $users=DB::table('users')->where('id',$id)->delete();

        if($users){
            return redirect()->route('home');
        }
            
    }


    public function addUser(Request $req){
        $users= DB::table('users')
            ->insert([
                'name'=> $req->username,
                'email'=> $req->useremail,
                'age'=> $req->userage,
                'city'=> $req->usercity,
        ]);

        
        if($users){
            return redirect()->route('home');
        }
    }



    public function updatePage(string $id){
        // $users=DB::table('users')->where('id',$id)->get();
        $users=DB::table('users')->find($id);
        return view('updateuser', ['data'=>$users]);
    }



    public function updateUser(Request $req, $id){
        $users=DB::table('users')
            ->where('id',$id)
            ->update([
                'name'=>$req->username,
                'email'=>$req->useremail,
                'age'=>$req->userage,
                'city'=>$req->usercity,
            ]);

            if($users){
                return redirect()->route('home');
            }
    }
    
}
