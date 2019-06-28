<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['ISBN','title','type_book_id','author_id','publisher_id','amount_total','amount_out','amount_remain'];
}
