<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeBook extends Model
{
    protected $fillable = ['name'];

    public function book()
    {
    	return $this->hasMany(Book::class);
    }
}
