<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
            'permissions',
            'role_name',
            'organization_id'
    ];
}
