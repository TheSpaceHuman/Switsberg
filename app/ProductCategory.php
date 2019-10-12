<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;


class ProductCategory extends Model
{
  use Resizable;
  protected $guarded = [];

  public function products()
  {
    return $this->belongsToMany('App\Product', 'product_product_category', 'product_category_id', 'product_id');
  }
}
