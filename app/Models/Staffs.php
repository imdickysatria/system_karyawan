<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    use HasFactory;
    protected $table = 'staffs';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function getNameAttribute($name)
    {
        return strtoupper($name);
    }

    public function getAddresAttribute($name)
    {
        return ucfirst($name);
    }

    public function position()
    {
        return $this->belongsTo(Positions::class);
    }

    public function users() {
        return $this->belongsTo(Users::class);
    }

    public function schedules() {
        return $this->hasMany(Schedules::class);
    }

    public function salary() {
        return $this->hasMany(Salarys::class);
    }
}
