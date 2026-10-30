<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['pt', 'en', 'es', 'leader_title', 'order', 'status'];

    public function teamMembers()
    {
        return $this->hasMany(TeamMember::class)
                    ->where('status', 'AT')
                    ->orderBy('order');
    }
}
