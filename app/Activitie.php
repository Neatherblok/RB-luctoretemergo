<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    protected $fillable = [
        'title', 'location', 'description', 'date', 'start_time', 'end_time'
    ];

    public function scopeActive($query)
    {
        return $query->where('date', '>=', date('Y-m-d'));
    }
}
