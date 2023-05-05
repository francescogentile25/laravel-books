<?php

namespace App\Models;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'title',
        'copy_number',
        'genre_id'
    ];
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function getRelatedBook()
    {
        return $this->type->books()->where('id', '!=', $this->id)->get();
    }

    public function getAuthorIds()
    {
        return $this->technologieauthors->pluck('id')->all();
    }
}
