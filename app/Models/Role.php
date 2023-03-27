<?php

namespace App\Models;

use Laratrust\Models\LaratrustRole;

class Role extends LaratrustRole
{
    public $guarded = [];


    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsToMany(User::class);
    }
}
