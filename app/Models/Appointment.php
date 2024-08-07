<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    // Define the table name if it doesn't follow Laravel's naming convention
    protected $table = 'appointments';

    // Specify the attributes that are mass assignable
    protected $fillable = ['appointment_date', 'appointment_time'];
}
