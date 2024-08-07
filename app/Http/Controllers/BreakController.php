<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BreakLog;

class BreakController extends Controller
{
    public function store(Request $request)
    {
        // Validate and save the break log
        $request->validate([
            'break_time' => 'required|date_format:H:i',
        ]);

        BreakLog::create([
            'break_time' => $request->break_time,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back();
    }
}

