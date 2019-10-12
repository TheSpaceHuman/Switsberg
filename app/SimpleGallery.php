<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class SimpleGallery extends Model
{
  use Resizable;
  protected $guarded = [];


}
