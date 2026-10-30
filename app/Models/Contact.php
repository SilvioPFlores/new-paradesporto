<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'is_pcd', 
        'disability_id', 'accessibility_support', 'subject', 'message'
    ];

    public function disability()
    {
        return $this->belongsTo(Disability::class);
    }
}
