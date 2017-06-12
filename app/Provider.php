<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['company_id', 'nit', 'name', 'address'];
}
