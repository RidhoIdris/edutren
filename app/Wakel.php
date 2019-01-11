<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wakel extends Model
{
   protected $casts = ['id' => 'string' ];
   protected $guarded = [];

   public function guru()
   {
   	return $this->belongsTo(Guru::class);
   }

   public function kelas()
   {
   	return $this->belongsTo(Kelas::class);
   }
}
