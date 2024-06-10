<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Factor extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles;
    protected $fillable = [
        'Product_Code',
        'Description_of_goods',
        'Amount',
<<<<<<< HEAD
        'order_id',
=======
>>>>>>> 8a75532e2b5e4731f0f64291fbcca5caa6c95c25
        'factorable_type',
        'factorable_id',

    ];

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
