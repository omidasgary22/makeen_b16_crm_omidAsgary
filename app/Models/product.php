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
<<<<<<< HEAD
        //'image',
        //'image_path',
=======
        'image_path',
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25

    ];

    public function orders()
    {

        return $this->belongsToMany(Order::class);
    }

    public function warrenties(): BelongsToMany
    {
        return $this->belongsToMany(warrenty::class);
    }
    public function labels(){
        return $this->morphToMany(label::class,'labelabl');
    }
}
