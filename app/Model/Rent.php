<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = ['date','member_id','book_id','set_return','return_date'];
}
