<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetencySearchTechnician extends Model
{
    protected $table = 'competency_search_technician';

    protected $guarded = ['id'];

    public function calendar()
    {
        return $this->belongsTo('App\Models\Calendar');
    }
}
