<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
        ]);

        // Create a new booking record
        Appointment::create([
            'appointment_date' => $request->input('appointment_date'),
            'appointment_time' => $request->input('appointment_time'),
        ]);

        // Redirect or return a response
        return view('submit-booking', [
            'date' => $request->input('appointment_date'),
            'time' => $request->input('appointment_time'),
        ]);
    }

    public function show()
    {
        $appointments = Appointment::all();
        return view('appointments.index', compact('appointments'));
    }

}
