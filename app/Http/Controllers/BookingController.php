<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class BookingController extends Controller
{
    public function submitBooking(Request $request)
    {
        $customerName = "Customer"; // Replace with actual customer name
        $appointmentDate = $request->input('appointment_date');
        $appointmentTime = $request->input('appointment_time');

        return view('submit-booking', compact('customerName', 'appointmentDate', 'appointmentTime'));

        // Save the appointment to the database
        Appointment::create($validated);

        return redirect()->back()->with('success', 'Appointment booked successfully!');
    }
}
