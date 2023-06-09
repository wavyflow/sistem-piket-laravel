<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'keterangan',
        'user_id',
        'schedule_id',
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function schedule() {
        return $this->belongsTo(Schedule::class);
    }
}
