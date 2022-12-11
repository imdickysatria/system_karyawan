<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cutis extends Model
{
    use HasFactory;
    protected $table = 'cutis';
    protected $guarded = ['id'];
}
