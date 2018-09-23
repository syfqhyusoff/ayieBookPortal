<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    //table name
    protected $table = 'book_review';
    
    //primary key
    protected $primaryKey ='review_id';

}
