<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['name','ticket','description','price','date'];


    // public function Evant(){
    //     return $this->belongsTo(Evant::class);
    //   }



      
      public function Categories(): HasMany
      {
          return $this->hasMany(Categories::class);
    
      }
}
