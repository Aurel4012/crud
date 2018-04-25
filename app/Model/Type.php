<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',//champs modifiable
    ];
}
