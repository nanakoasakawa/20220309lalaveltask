<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        return view('/');
    }
    public function create(Request $request)
    {
        return view('/todo/create');
    }
    public function update(Request $request)
    {
        $this->validate($request, Author::$rules);
        $form = $request->all();
        unset($form['_token']);
        Author::where('update', $request->update)->update($form);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        return view('/todo/delete');
    }
}
