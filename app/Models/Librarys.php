<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Librarys extends Model
{
    use HasFactory;
    protected $fillable = ['book_id', 'sorting_id'];

    public function book()
    {
        return $this->belongsTo(Books::class, 'book_id', 'id', 'librarys');
    }

    public function sorting()
    {
        return $this->belongsTo(sorting::class, 'sorting_id', 'id', 'librarys');
    }
}
