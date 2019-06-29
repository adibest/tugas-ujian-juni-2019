<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['name'];

    public function book()
    {
    	return $this->hasMany(Book::class);
    }
}
