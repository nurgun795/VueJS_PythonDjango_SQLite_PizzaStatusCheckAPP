<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pizza extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'toppings' => 'array',
    ];

    protected $appends = [
        'chef',
    ];

    protected $hidden = [
        'user',
    ];
    
   

    public function user(): BelongsTo

    {
        return $this->belongsTo(User::class);
    }

    public function getChefAttribute(): string

    {
        return $this->user->name;
    }
}
