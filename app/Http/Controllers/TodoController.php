<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Todo;

class TodoController extends Controller
{
  public function index(){
    $todos = Todo::orderBy('completed')->get();
    return view('todo.index')->with(['todos'=>$todos]);
  }

  public function create(){
    return view('todo.create');
  }

  public function upload(Request $request){
     $request->validate([
       'title'=>'required|max:80'
     ]);
     $todo = $request->title;
     Todo::create(['title'=>$todo]);
     return redirect()->back()->with('success',"Todo created successfully");
  }

  public function edit($id){
    $todo = Todo::find($id);
    return view('todo.edit')->with(['id' => $id ,'todo' =>$todo]);
  }

  public function update(Request $request){
    $request->validate([
      'title'=>'required|max:80'
    ]);
    $updateTodo = Todo::find($request->id);
    $updateTodo->update(['title'=> $request->title]);
    return redirect('/index')->with('success',"Todo update successfully");
  }

  public function completed($id){
          $todo = Todo::find($id);
          if ($todo->completed){
              $todo->update(['completed' => false]);
              return redirect()->back()->with('success', "Todo marked as incomplete");
          }else {
              $todo->update(['completed' => true]);
              return redirect()->back()->with('success', "Todo marked as complete");
          }
      }

  public function delete($id){
    $todo = Todo::find($id);
    $todo->delete();
    return redirect()->back()->with('success', "Todo marked as deleted successfully");
  }

}
