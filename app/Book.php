<?php

namespace tours;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'tourtype', 'tourdate', 'phone', 'email'];
}
