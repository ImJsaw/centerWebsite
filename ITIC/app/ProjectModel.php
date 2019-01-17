<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model{
    protected $table = 'project';
    protected $fillable = [
        'name',
        'start_year',
        'end_year',
        'leader_id',
        'mom_project_id',
        'intro'
    ];

    public function meta(){
        return $this->hasMany(projectMeta::class,'project_id');
    }

    public function project(){
        return $this->belongsTo(project::class,'id','mom_project_id');
    }

    /*
    public function leader(){
        return $this->belongsTo(member::class,'id','leader_id');
    }

    public function profession(){
        return $this->belongsToMany(profession::class);
    }

    public function members(){
        return $this->belongsToMany(member::class);
    }
    */

}
