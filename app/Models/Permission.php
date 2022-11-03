<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    // protected $table = 'promissions';
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
