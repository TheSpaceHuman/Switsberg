<?php

namespace App;

//use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;

class Post extends Model
{
//  use Searchable;
  use Resizable;

  protected $guarded = [];
  protected $table = 'posts';

  public function comments()
  {
    return $this->hasMany(Comment::class);
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }

  public function scopeSearch($query, $s)
  {
    return $query->where('title', 'like', '%'. $s . '%')
        ->orWhere('excerpt', 'like', '%'. $s . '%')
        ->orWhere('body', 'like', '%'. $s . '%');
  }
}
