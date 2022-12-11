<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Overtimes extends Model
{
    use HasFactory;
    protected $table = 'overtimes';
    protected $guarded = ['id'];

    public function getTglOvertimeAttribute($name){
        return date('d-m-Y', strtotime($name));
    }

    public function staff()
    {
        return $this->belongsTo(Staffs::class);
    }
}
