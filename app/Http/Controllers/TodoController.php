<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $todos = Todo::all();
        return view('index', ['todos' => $todos]);
    }

    public function create(Request $request)
    {
        Todo::create([
            'todos' => $request,
        ]);
        return redirect('index');
    }

    public function update(Request $request)
    {
        Todo::where('update', $request->update)->update($todos);
        return redirect('index');
    }
    public function delete(Request $request)
    {
        Todo::where('update', $request->delete)->delete($todos);
        return redirect('index');
    }
}
