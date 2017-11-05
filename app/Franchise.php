<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    protected $table = 'franchises';

    protected $fillable = ['name', 'foundation', 'creator', 'description'];
}