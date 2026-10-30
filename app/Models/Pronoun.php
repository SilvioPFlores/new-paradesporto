<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pronoun extends Model
{
    protected $fillable = ['pt', 'en', 'es', 'status'];
}
