<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    /**
     * roles that belong to session.
     */

    public function roles()
    {
       return $this->belongsToMany(Role::class);
    }
}

