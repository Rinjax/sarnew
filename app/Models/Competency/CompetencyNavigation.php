<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetencyNavigation extends Model
{
    protected $table = 'competency_navigation';

    protected $guarded = ['id'];

    public function calendar()
    {
        return $this->belongsTo('App\Models\Calendar');
    }
}
