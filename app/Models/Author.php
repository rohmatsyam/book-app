<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];
    public function book()
    {
        // (Model relasi, id, fk local)
        // preload
        return $this->hasMany(Book::class);
    }
}
