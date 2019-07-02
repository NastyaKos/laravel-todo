<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    
    protected $fillable = [
        'name'
    ];

    public function project_list()
    {
        return $this->hasMany('App\ProjectList', 'project_id', 'id');
    }
}
