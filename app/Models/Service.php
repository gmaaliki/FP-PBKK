<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'basic_plan_title',
        'basic_plan_price',
        'basic_plan_description',
        'basic_plan_days',
        'standard_plan_title',
        'standard_plan_price',
        'standard_plan_description',
        'standard_plan_days',
        'premium_plan_title',
        'premium_plan_price',
        'premium_plan_description',
        'premium_plan_days',
        'image',
        'category_id',
        'subcategory_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function subcategory() {
        return $this->belongsTo(Subcategory::class);
    }

    public function servicereport() {
        return $this->hasMany(ServiceReport::class);
    }

    public function transaction() {
        return $this->belongsToMany(User::class, 'transactions', 'service_id', 'user_id')->withPivot('quantity', 'status');
    }

    public function wishlist() {
        return $this->belongsToMany(User::class, 'wishlists', 'service_id', 'user_id');
    }
}
