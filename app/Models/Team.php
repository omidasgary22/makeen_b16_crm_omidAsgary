<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class team extends Model
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles;

    protected $fillable = [
        'Team_name',
        'discription',
    ];

    public function user():HasMany
    {
        return $this->hasMany(user::class);
    }

    public function task():HasMany
    {
        return $this->hasMany(task::class);
    }
}
