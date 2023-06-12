<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

//        echo $todos->start_date->diffForHumans();
//        echo Carbon::now()->toFormattedDateString();
        return view('index', [
            'todos' => $todos
        ]);

    }

    public function create()
    {
        return view('create');
    }

//
    public function store(TodoRequest $request)
    {
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => 0,
            'is_completed' => 0,
            'start_date' => $request->start_date,
        ]);

        $request->session()->flash('alert-success', 'Задача успешно создана');

        return redirect()->route('index');
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            request()->session()->flash('error', 'Не удается найти задачу');
            return redirect()->route('todos.index')->withErrors([
                'error' => 'Не удается найти задачу'
            ]);
        }
        return view('show', ['todo' => $todo]);
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            request()->session()->flash('error', 'Не удается найти задачу');
            return redirect()->route('todos.index')->withErrors([
                'error' => 'Не удается найти задачу'
            ]);
        }
        return view('edit', ['todo' => $todo]);
    }

    public function update(TodoRequest $request)
    {
        $todo = Todo::find($request->todo_id);
        if (!$todo) {
            request()->session()->flash('error', 'Не удается найти задачу');
            return redirect()->route('index')->withErrors([
                'error' => 'Не удается найти задачу'
            ]);
        }

        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'is_completed' => $request->is_completed
        ]);

        $request->session()->flash('alert-info', 'Задача успешно обновлена');
        return redirect()->route('index');
    }

    public function destroy(Request $request)
    {
        $todo = Todo::find($request->todo_id);
        if (!$todo) {
            request()->session()->flash('error', 'Не удается найти задачу');
            return redirect()->route('index')->withErrors([
                'error' => 'Не удается найти задачу'
            ]);
        }

        $todo->delete();
        $request->session()->flash('alert-success', 'Задача успешно удалена');
        return redirect()->route('index');

    }

//    public function startdate()
//    {
//        echo Carbon::now()->toFormattedDateString();
//        return redirect()->route('index');
//    }

}
