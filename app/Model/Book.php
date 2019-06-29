<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['ISBN','title','type_book_id','author_id','publisher_id','amount_total','amount_out','amount_remain'];

    public function type_book()
    {
    	return $this->belongsTo(TypeBook::class, 'type_book_id');
    }

    public function author()
    {
    	return $this->belongsTo(Author::class, 'author_id');
    }

    public function publisher()
    {
    	return $this->belongsTo(Publisher::class, 'publisher_id');
    }
}
