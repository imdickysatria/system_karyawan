<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    use HasFactory;

    public $ket_schedule = [
        'Morning(05:00-14:00)',
        'Afternoon(13:00-22:00)',
        'Middle Morning(10:00-19:00)',
        'Middle Afternoon(12:00-21:00)',
        'Evening (19:00-04:00)',
        'Mignight (22:00-07:00)'
    ];

    public $status = [
        'Tetap',
        'Kontrak',
        'Freelance',
        'Intership',
    ];

    public $attendance = [
        'Hadir','Permision','Sick','Alpha'
    ];
}
