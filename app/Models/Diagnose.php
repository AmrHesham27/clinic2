<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
    use HasFactory;
    protected $table = 'diagnoses';
    protected $fillable = [
        'visit_id',
        'diagnosis'
    ];
}
