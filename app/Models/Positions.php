<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    use HasFactory;
    protected $table = 'positions';
    protected $guarded = ['id'];

    public function getNameAttribute($name)
    {
        return strtoupper($name);
    }

    public function staff()
    {
        return $this->hasMany(Staffs::class);
    }
}
