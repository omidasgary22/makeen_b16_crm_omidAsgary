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
        'order_id',
        'factorable_type',
        'factorable_id',

    ];

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
