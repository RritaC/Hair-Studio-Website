<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientLog;

class ClientController extends Controller
{
    public function update(Request $request)
    {
        // Validate and update the client count
        $request->validate([
            'clients_today' => 'required|integer|min:0',
        ]);

        $clientLog = ClientLog::firstOrCreate([
            'date' => now()->toDateString(),
            'user_id' => auth()->id(),
        ]);

        $clientLog->update([
            'clients_served' => $request->clients_today,
        ]);

        return redirect()->back();
    }
}
