<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title','author_id','resume','type_id',//champs modifiable
    ];
    public function author () {
    		return $this-> belongsTo('App\Model\Author');
    }
    public function type () {
    		return $this-> belongsTo('App\Model\Type');
    }
}
