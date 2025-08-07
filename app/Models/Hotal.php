<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotal extends Model
{
    use HasFactory;
    public function tour()
    {
        return $this->hasMany(Tour::class, 'hotals','id');
    }
    
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
    
    public function tours()
    {
        return $this->belongsToMany(Tour::class, 'hotal_tour', 'hotal_id', 'tour_id');
    }


}
