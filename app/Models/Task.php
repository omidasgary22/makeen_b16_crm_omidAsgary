<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Task extends Model
{
    use HasFactory, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'title',
        'description',
        'timestamps',
        'taskable_id',
        'taskable_type'
    ];


    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function team():BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    // public function taskable(): MorphTo
    // {
    //     return $this->morphTo();
    // }

}
