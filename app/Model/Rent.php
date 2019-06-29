<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = ['date','member_id','book_id','set_return','return_date'];

    public function member()
    {
    	return $this->belongsTo(Member::class, 'member_id');
    }

    public function book()
    {
    	return $this->belongsTo(Book::class, 'book_id');
    }
}
