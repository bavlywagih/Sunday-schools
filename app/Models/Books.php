<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Books extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'url'];

    public function sorting()
    {
        return $this->hasMany(sorting::class, 'book_id', 'id');
    }

}
