<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'type', 'campagne', 'activity', 'segment', 'shift', 'start', 'end','created_by' ];
}
