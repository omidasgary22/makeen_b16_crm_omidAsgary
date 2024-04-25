<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Warrenty extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'title',
        'expiration',
        'description',
    ];
}
