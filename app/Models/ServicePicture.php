<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePicture extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
