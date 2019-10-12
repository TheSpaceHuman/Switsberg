<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Comment extends Model
{
    use Resizable;

    protected $guarded = [];

    public function post()
    {
      return $this->belongsTo(Post::class);
    }

}
