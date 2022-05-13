<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    protected $table = "users";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'surname',
        'email',
        'active'
    ];
    public $timestamps = false;


    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'id_user','id');
    }

}