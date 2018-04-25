<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstname','lastname',//champs modifiable
    ];
}
