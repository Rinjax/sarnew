<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $hidden = ['pivot',];
    public $timestamps = false;
    
    protected $casts = [
        'role' => 'string',
    ];
    
    protected $fillable = ['role'];
    
    
    public function users(){
        //returns all users assigned to a peticular role
        return $this->belongsToMany('App\Models\Member','MemberRole')->orderBy('name');
    }
        
}
