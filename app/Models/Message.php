<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Message extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles;
    protected $fillable = [
        'description',
        'message_id',
        'tiket_id',
    ];

    public function tiket():BelongsTo
    {
        return $this->BelongsTo(tiket::class);
    }

}



