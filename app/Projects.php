<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    
    protected $fillable = [
        'name'
    ];

    public function projectList()
    {
        return $this->hasMany('App\ProjectList', 'project_id', 'id');
    }
}
