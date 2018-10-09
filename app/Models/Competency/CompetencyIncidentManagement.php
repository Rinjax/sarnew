<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetencyIncidentManagement extends Model
{
    protected $table = 'competency_incident_management';

    protected $guarded = ['id'];

    public function calendar()
    {
        return $this->belongsTo('App\Models\Calendar');
    }
}
