<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = ['name','phone','email','number_ticket','event_id','approve'];

  public function Evant(){
        return $this->belongsTo(Evant::class);
      }
    
}
