<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'Quantity',
        'Status',
    ];

    function user () {
        return $this->belongsTo(User::class);
    }

    function service () {
        return $this->belongsTo(Service::class);
    }
}
