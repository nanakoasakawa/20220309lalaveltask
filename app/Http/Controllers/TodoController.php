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
        return view('/todo/update');
    }
    public function delete(Request $request)
    {
        return view('/todo/delete');
    }
}
