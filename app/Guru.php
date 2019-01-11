<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
   protected $casts = ['id' => 'string' ];
   protected $guarded = [];

   public function wakel()
   {
   	return $this->hasMany(Wakel::class);
   }
} 
