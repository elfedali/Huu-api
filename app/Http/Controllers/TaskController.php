<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//  Task api
class TaskController extends Controller
{

    public function index()
    {
        $tasks = auth()->user()->tasks;
        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'description' => 'required|string',

        ]);

        $task = auth()->user()->tasks()->create([
            'title' => $request->title,
            'description' => $request->description,
        ]);


        return response()->json($task);
    }

    public function show($id)
    {
        $task = auth()->user()->tasks()->find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found!'], 404);
        }

        return response()->json($task);
    }

    public function update(Request $request, $id)
    {
        $task = auth()->user()->tasks()->find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found!'], 404);
        }

        $task->update($request->all());

        return response()->json($task);
    }

    public function destroy($id)
    {
        $task = auth()->user()->tasks()->find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found!'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted!']);
    }
}
