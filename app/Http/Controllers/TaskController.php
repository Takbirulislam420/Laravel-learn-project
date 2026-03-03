<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = DB::table('tasks')->paginate(3);
        return view('pages.task', compact('tasks'));
    }

    public function create()
    {
        return view('pages.create_task');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('tasks', 'public');
        }

        DB::table('tasks')->insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('task.index')->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return view('pages.edit_task', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $task = DB::table('tasks')->where('id', $id)->first();

        $imagePath = $task->image;
        if ($request->hasFile('image')) {
            if ($task->image && Storage::disk('public')->exists($task->image)) {
                Storage::disk('public')->delete($task->image);
            }
            $imagePath = $request->file('image')->store('tasks', 'public');
        }

        DB::table('tasks')->where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'image' => $imagePath,
            'updated_at' => now(),
        ]);

        return redirect()->route('task.index')->with('success', 'Task updated successfully.');
    }

    public function destroy($id)
    {   $taskImage= DB::table('tasks')->where('id',$id)->first();
        if($taskImage->image != null && Storage::disk('public')->exists($taskImage->image)){
            Storage::disk('public')->delete($taskImage->image);
        }
        DB::table('tasks')->where('id', $id)->delete();
        return redirect()->route('task.index')->with('success', 'Task deleted successfully.');
    }
}
