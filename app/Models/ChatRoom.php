<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ChatRoom extends Model
{
    protected $fillable = ['name'];

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
