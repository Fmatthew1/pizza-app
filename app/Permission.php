<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Permission extends Model
{

    protected $fillable = [
        'name',
        'description',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    public function hasPermission($permission)
    {
        return $this->role->permissions()->where('name', $permission)->exists();
    }


}

