<?php

namespace App\Http\Controllers;
use App\Models\Task;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    function add_task(){
        return view('add_task');
    }

    function store_task(Request $request)
    {

        $task = Task::create($request->all());
        return redirect()->route('dashboard');
    }

    function show(){
        $tasks = Task::all();
        $data = compact('tasks');
        return view('dashboard')->with($data);
    }


    function delete(Request $request, $id)
    {

        $task = Task::find($id);
        if (!is_null($task)) {
            $task->delete();

        }
        return redirect()->route('dashboard');
    }


}
