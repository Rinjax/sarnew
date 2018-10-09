<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompetencyThrowLine extends Model
{
    protected $table = 'competency_throw_lines';

    protected $guarded = ['id'];

    public function calendar()
    {
        return $this->belongsTo('App\Models\Calendar');
    }
}
