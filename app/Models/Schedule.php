<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'squad_id',
        'period_id',
        'is_accepted',
        'week',
        'day',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'is_accepted' => 'boolean',
    ];

    function period() {
        return $this->belongsTo(Period::class);
    }

    function squad() {
        return $this->belongsTo(Squad::class);
    }
}
