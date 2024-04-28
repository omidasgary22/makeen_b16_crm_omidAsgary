<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Task extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'task_id',
        'team_id',
        'timestamps',
    ];


    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function team():BelongsTo
    {
        return $this->belongsTo(team::class);
    }

}
