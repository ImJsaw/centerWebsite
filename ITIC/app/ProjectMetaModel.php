<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMetaModel extends Model{
    protected $table = 'projectMediaMeta';
    protected $fillable = [
        'project_id',
        'type',
        'value',
    ];

    public function project(){
        return $this->belongsTo(project::class,'project_id');
    }
}
