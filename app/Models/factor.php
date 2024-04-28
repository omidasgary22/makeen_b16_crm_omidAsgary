<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class factor extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles;
    protected $fillable = [
        'Product_Code',
        'Description_of_goods',
        'Amount',
        'user_id',
        'order_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function order():BelongsTo
    {
        return $this->belongsTo(order::class);
    }
}
