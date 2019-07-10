<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Products extends Model
{
    //
    protected $fillable = ['description', 'price', 'amount','id'];
}
