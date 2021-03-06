<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetencySearcherSkill extends Model
{
    protected $table = 'competency_searcher_skills';

    protected $guarded = ['id'];

    public function calendar()
    {
        return $this->belongsTo('App\Models\Calendar');
    }
}
