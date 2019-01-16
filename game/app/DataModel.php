<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $fillable = [
        'school',
        'username',
        'youtube',
        'file'
    ];
}
