<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::paginate(10);
        return view('tasks.index', compact('tasks'));
    }
    public function create(){
        return view('tasks.create');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'due_date' => 'required|date',
        ]);
    
        Task::create($validatedData);
    
        return redirect()->route('tasks.index')->with('success', 'Task created successfully!');
    
        // $request->validate([
        //     'title' => 'required|string|max:100',
        //     'description' => 'nullable|string',
        //     'status' => 'required|boolean',
        //     'due_date' => 'required|date',
        // ]);
        // Task::create($request->all());
        // return redirect()->route('tasks.index');
    }
    public function edit(Task $task){
        return view('tasks.edit', compact('task'));
    }
    public function update(Request $request, Task $task){
        $validatedData =$request->validate([
            'title' => 'required|string|max:100',
            'description' => 'nullable|string',
            'status' => 'required|boolean',
            'due_date' => 'required|date',
        ]);
        $task->update($validatedData);
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }
    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
