<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testy extends Model
{
    use HasFactory;
     protected $table= 'testies';
    protected $fillable = [
        'name',
        'email',
        'test',
    ];

   
  
}
