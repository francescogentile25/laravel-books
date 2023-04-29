<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'title',
        'copy_number'
    ];
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
