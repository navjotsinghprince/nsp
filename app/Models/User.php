<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'nickname',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }

    public function Service()
    {
        return $this->hasMany(Service::class, 'user_id', 'id');
    }

    public function Skills()
    {
        return $this->hasMany(Skills::class, 'user_id', 'id');
    }

    public function Education()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function Project()
    {
        return $this->hasMany(Project::class, 'user_id', 'id');
    }
}
