<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class sortings extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function librarys()
    {
        return $this->hasMany(Librarys::class, 'sorting_id', 'id');
    }
}
