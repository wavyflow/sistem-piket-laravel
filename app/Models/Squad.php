<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;

    function schedules() {
        return $this->hasMany(Schedule::class);
    }

    function members() {
        return $this->hasMany(User::class);
    }
}
