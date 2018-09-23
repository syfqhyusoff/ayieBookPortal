<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // table name
    protected $table = 'book_author';
    // primary key
    public $primaryKey = 'author_id';
}
