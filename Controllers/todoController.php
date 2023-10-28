<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todoController extends Controller
{
 public function store(Request $request){

$request->validate([
'name'=>'required|max:255|string',
'mobile'=>'required|max:11',
'email'=>'required|email',
'password'=>'required|max:8',
'due_date'=>'required|date',
'message'=>'required|string|max:300'

],
[
    'name.required'=>' name is required',
    'name.max'=>' maximum 255 character',
    'mobile.required'=>' mobile is required',
    'mobile.max'=>'must be 11 character',
    'email.required'=>' email is required',
    'password.required'=>' password is required',
    'password.max'=>'password must be 8 character',

    'due_date.required'=>' due_date is required',
    'message.required'=>'message is required',
    'message.max'=>'maximum 300 character'
]
);

$todo = new Todo();
$todo->name = $request->name;
$todo->mobile = $request->mobile;
$todo->email = $request->email;
$todo->password = $request->password;
$todo->message = $request->message;
$todo->due_date = $request->due_date;
$todo->save();
return back();
 }
 public function getAllTodo(){
    return view('todo.all');
 }
}

