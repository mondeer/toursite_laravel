<?php

namespace tours;

use Illuminate\Database\Eloquent\Model;

class Deferals extends Model
{
    protected $fillable = ['name', 'tourtype', 'tourdate', 'phone', 'email'];
}
