<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetencyAnnualAssessment extends Model
{
    protected $table = 'competency_annual_assessments';
    
    protected $guarded = ['id'];

    public function calendar()
    {
        return $this->belongsTo('App\Models\Calendar');
    }
    
}
