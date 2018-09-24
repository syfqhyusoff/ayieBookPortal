<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // table name
    protected $table = 'book_items';
    // primary key
    public $primaryKey = 'book_id';
    //not incremented
    public $incrementing = false;
    //timestamps
    public $timestamps = false;


    public function publisher()
    {
        return $this->hasOne('App\Publisher');
    }
    
}

