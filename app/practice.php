<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class practice extends Model
{
     // Specify which attributes can be mass-assigned
     protected $fillable = ['name', 'age', 'address'];

     // Specify which attributes cannot be mass-assigned
     protected $guarded = ['id'];

};
