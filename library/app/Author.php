<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name'];
    
    /**
     * Relationships between Author and Book
     * @return Books
     */
    public function books() {
        return $this->hasMany(Book::class);
    }
}
