<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Label extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function team(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    public function labels()
    {
        return $this->morphedByMany('App\label', 'labelabl');
    }
    public function user(){
        return $this->morphedByMany(User::class,"labelabl");
    }
    public function teams(){
        return $this->morphedByMany(User::class,"labelabl");
    }
    public function product(){
        return $this->morphedByMany(User::class,"labelabl");
    }
}
