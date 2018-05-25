<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $primarykey = 'user_id';
    public $timestamps = false;
    protected $fillable = ['user_id', 'role_id'];

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }
}
