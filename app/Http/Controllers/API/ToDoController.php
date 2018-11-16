<?php

namespace App\Http\Controllers\API;

use App\TodoList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToDoController extends Controller
{

    // return all to do text in database
    public function index()
    {
        $todos = TodoList::all();

        return response()->json(['todos' => $todos]);
    }



    //store to do text in database
    public function store(Request $request)
    {
        $todo = new TodoList();
        $todo->_id = $request->id;
        $todo->text = $request->text;
        $todo->save();

        return response()->json(['message' => 'saved successfully']);
    }

    public function destroy(Request $request)
    {
        TodoList::find($request->id)->delete();

        return response()->json(['message' => 'deleted successfully']);
    }



}
