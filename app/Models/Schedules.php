<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $table = 'schedules';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function staff()
    {
        return $this->belongsTo(Staffs::class);
    }

    public function absensi()
    {
        return $this->hasMany(Absensis::class);
    }
}
