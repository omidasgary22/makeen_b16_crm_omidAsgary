<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class team extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'Team_name',
        'discription',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function label(): BelongsToMany
    {
        return $this->belongsToMany(label::class);
    }

    public function tasks(): MorphMany
    {
        return $this->morphMany(task::class, 'taskable');
    }
    public function labels(){
        return $this->morphToMany(label::class,'labelabl');
    }
}
