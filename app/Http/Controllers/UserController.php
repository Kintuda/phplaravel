<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();
        return view('main', [
            'title' => 'Main Page',
            'users' => $users
            ]);
    }

    public function savePage(){
        return view('create', ['title' => 'All User']);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:80',
            'email' => 'required|email',
            'birthday' => 'required|date',
            'phone' => 'required',
            'cpfcnpj' => 'required|min:10'
            ]);
            
        DB::table('users')->insert([
            'name' => $request['name'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'phone' => $request['phone'],
            'cpfcnpj' => $request['cpfcnpj'],
        ]);

        return redirect('/');
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:80',
            'email' => 'required|email',
            'birthday' => 'required|date',
            'phone' => 'required',
            'cpfcnpj' => 'required|min:10'
            ]);
            
        DB::table('users')->where('id', $request['id'])->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'phone' => $request['phone'],
            'cpfcnpj' => $request['cpfcnpj'],
        ]);

        return redirect('/');
    }

    public function editPage($id){
        $user = DB::table('users')->where('id', $id)->get();
        return view('update', [
            'title' => 'Editar user',
            'id' => $user[0]->id,
            'name' => $user[0]->name,
            'email' => $user[0]->email,
            'cpfcnpj' => $user[0]->cpfcnpj,
            'birthday' => $user[0]->birthday,
            'phone' => $user[0]->phone
        ]);
    }

    public function delete($id){
        DB::table('users')->delete($id);
        return redirect('/');
    }
}
