<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSkill extends Model
{
    use HasFactory;

    protected $table = 'user_skill';

    protected $fillable = [
        'skill',
        'experience_level',
    ];
}
