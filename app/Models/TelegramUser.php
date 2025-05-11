<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelegramUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'username',
        'first_name',
        'last_name',
        'current_state',
        'temp_data',
        'is_admin'
    ];

    protected $casts = [
        'temp_data' => 'array',
        'is_admin' => 'boolean',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'chat_id', 'chat_id');
    }
} 