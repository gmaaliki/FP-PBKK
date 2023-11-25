<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_type',
        'description',
    ];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}