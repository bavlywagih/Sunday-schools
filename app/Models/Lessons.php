<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Lessons extends Model
{
    use HasFactory;

    protected $fillable = ['body', 'title' , 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}