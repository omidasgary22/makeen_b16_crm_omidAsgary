<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Product extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'model',
        'ram',
        'graphics',
        'memory',
        'price',
        'description',
        'image',
        //'image_path',

    ];

    public function orders()
    {

        return $this->belongsToMany(Order::class);
    }

    public function warrenties(): BelongsToMany
    {
        return $this->belongsToMany(Warrenty::class);
    }
    public function labels(){
        return $this->morphToMany(Label::class,'labelabl');
    }
}
