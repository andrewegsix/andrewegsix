<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('index', [
            'todos' => $todos
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(TodoRequest $request)
    {
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => 0,
            'is_completed' => 0
        ]);

        $request->session()->flash('alert-success', 'Задача успешно создана');

        return redirect()->route('index');
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        if (!$todo) {
            request()->session()->flash('error', 'Не удается найти задачу');
            return redirect()->route('index')->withErrors([
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
            return redirect()->route('index')->withErrors([
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

    public function about()
    {
        return view('about');
    }

    public function main()
    {
        return view('main');
    }


}

