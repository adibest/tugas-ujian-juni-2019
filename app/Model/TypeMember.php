<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeMember extends Model
{
    protected $fillable = ['name'];

    public function member()
    {
    	return $this->hasMany(Member::class);
    }
}
