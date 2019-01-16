<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScoreModel extends Model
{
    protected $table = 'score';
    protected $fillable = [
        'upload',
        'judge',
        'score'
    ];
}
