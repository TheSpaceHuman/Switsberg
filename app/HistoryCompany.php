<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class HistoryCompany extends Model
{
  use Resizable;
  protected $guarded = [];
}
