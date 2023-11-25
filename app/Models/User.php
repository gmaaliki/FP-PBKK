<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'description',
        'occupation',
        'user_privilege',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function usernotification()
    {
        return $this->hasMany(UserNotification::class);
    }

    public function userreview()
    {
        return $this->hasMany(UserReview::class);
    }

    public function userlanguage()
    {
        return $this->hasMany(UserLanguage::class);
    }

    public function userskill()
    {
        return $this->hasMany(UserSkill::class);
    }

    public function usereducation()
    {
        return $this->hasMany(UserEducation::class);
    }

    public function usercertification()
    {
        return $this->hasMany(UserCertification::class);
    }

    public function user() {
        return $this->hasMany(Service::class);
    }

    public function transaction() {
        return $this->belongsToMany(Service::class, 'transactions', 'user_id', 'service_id')->withPivot('quantity', 'status');
    }

    public function wishlist() {
        return $this->belongsToMany(Service::class, 'wishlists', 'user_id', 'service_id');
    }
}
