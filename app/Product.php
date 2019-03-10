<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name', 'slug', 'description', 'featured', 'category_id', 'price'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
