<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['type_member_id','name','amount_book_rent','amount_date_rent',];
}
