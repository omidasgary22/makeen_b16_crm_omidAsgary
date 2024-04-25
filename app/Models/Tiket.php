<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Tiket extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $fillable = [
        'subject',
        'expires_at',
        'timestamps',
    ];
}
