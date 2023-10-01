<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','logo','date'];


    // public function Categories(){
    //     return $this->belongsTo(Categories::class);
    //   }

    public function Event(): HasMany
    {
        return $this->hasMany(Event::class);
  
    }
    
}
