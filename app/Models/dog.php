<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = 'dogs';
    
    protected $dates = ['DoB', 'started'];

    protected $fillable = ['member_id', 'name', 'breed', 'started', 'level'];
    
    public function assessments(){
        //returns all assessments for a dog
        return $this->hasMany('\App\Models\DogAssessments');
    }
    
}
