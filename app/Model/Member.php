<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['type_member_id','name','address','phone',];

    public function type_member()
    {
    	return $this->belongsTo(TypeMember::class, 'type_member_id');
    }

    public function rent()
    {
    	return $this->hasMany(Rent::class);
    }
}
