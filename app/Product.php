<?php

namespace App;

//use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{
//  use Searchable;
  use Resizable;
  protected $guarded = [];


  public function categories()
  {
    return $this->belongsToMany('App\ProductCategory', 'product_product_category', 'product_category_id', 'product_id');
  }

  public function scopeSearch($query, $s)
  {
    return $query->where('title', 'like', '%'. $s . '%')
        ->orWhere('description', 'like', '%'. $s . '%');
  }

}
