<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function store(Request $request)
    {
        // Validate and save the todo item
        $request->validate([
            'task' => 'required|string|max:255',
            'timeframe' => 'required|string'
        ]);

        Todo::create([
            'task' => $request->task,
            'timeframe' => $request->timeframe,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back();
    }
}

