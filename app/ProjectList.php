<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectList extends Model
{
    protected $table = 'project_lists';

    protected $fillable = [
        'name', 'done', 'project_id'
    ];
}
