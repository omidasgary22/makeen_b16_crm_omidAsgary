<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'Country',
        'gender',
        'Address',
        'password',
        'image_user',
        'team_id',
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

   protected $appends =["full_name"];

    // public function orders()
    // {
    //     return $this->hasMany(order::class);
    // }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(note::class);
    }

    public function tikets(): HasOne
    {
        return $this->hasOne(tiket::class);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(team::class);
    }

    // public function labels(): BelongsToMany
    // {
    //     return $this->belongsToMany(label::class);
    // }

    public function task(): MorphMany
    {
        return $this->morphMany(Task::class, 'taskable');
    }

    public function labels(){
        return $this->morphToMany(Label::class,'labelabl');
    }



    // public function factors(): MorphMany
    // {
    //     return $this->morphMany(factor::class, 'factorable');
    // }


    public function getFullNameAttribute(){
        return $this->first_name . ' '. $this->last_name;
    }
}

