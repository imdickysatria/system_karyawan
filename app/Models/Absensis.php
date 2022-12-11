<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensis extends Model
{
    use HasFactory;
    protected $table = 'absenses';
    protected $guarded = ['id'];

    public function attendaces()
    {
        return $this->belongsTo(Attendances::class);
    }

    public function salary()
    {
        return $this->belongsTo(Salarys::class);
    }
}
