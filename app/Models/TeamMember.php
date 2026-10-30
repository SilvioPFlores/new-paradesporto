<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $fillable = ['pronoun_id', 'role_id', 'name', 'order', 'status'];

    public function pronoun()
    {
        return $this->belongsTo(Pronoun::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
