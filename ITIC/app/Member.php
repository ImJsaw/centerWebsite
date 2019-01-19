<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = [
        'id',
        'name_en',
        'name_ch',
        'position_id',
        'photo',
        'info',
        'website',
        'tel',
        'email',
        'identity'
    ];
}
