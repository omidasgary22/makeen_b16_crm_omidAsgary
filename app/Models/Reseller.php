<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Reseller extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'records',
        'fields',
    ];
}
