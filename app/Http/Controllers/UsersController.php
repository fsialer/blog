<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\User;

use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index(){
    	$users=User::orderBy('id','ASC')->paginate(4);
    	return view('admin.users.index')->with('users',$users);
    }

    public function create(){
    	return view('admin.users.create');
    }

    public function store(UserRequest $request){
    	
    	$user=new User($request->all());
    	$user->password=bcrypt($request->password);
    	$user->save();
    	Flash::success("Se ha registrado ".$user->name."de forma exitosa.");
    	return redirect()->route('admin.users.index');
    }

    public function show($id){
    }

    public function edit($id){
       $user= User::find($id);
       return view('admin.users.edit')->with('user',$user);

    }

    public function update(Request $request,$id){
        $user=User::find($id);
        $user->fill($request->all());           
        $user->save();
        Flash::warning("Se ha editado ".$user->name."de forma exitosa.");
        return redirect()->route('admin.users.index');
    }

    public function destroy($id){
    	$user=User::find($id);
    	$user->delete();
    	Flash::error("El usuario ".$user->name." ha sido borrado de forma exitosa.");
    	return redirect()->route("admin.users.index");
    }
}
