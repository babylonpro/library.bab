<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'isbn', 'is_giveout', 'author_id'];
    
    /**
     * Custom Like method
     * @param Model $query
     * @param string $field
     * @param string $value
     * @return type
     */
    public  function scopeLike($query, $field, $value){
        return $query->where($field, 'LIKE', "$value%");
    }
}
