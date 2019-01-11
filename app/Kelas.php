<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
   protected $casts = ['id' => 'string' ];
   protected $guarded = [];

   public function wakel()
   {
   	return $this->hasMany(Wakel::class);
   }
}
