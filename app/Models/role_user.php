<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    use HasFactory;
    protected $table = 'role_user';
    protected $fillable = ['role_id', 'user_id', 'user_type'];

    public function getDefaults()
    {
        return [
            'user_type' => 'default_value'
        ];
    }
}
