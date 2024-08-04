<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use SoftDeletes;
    use HasFactory;
    public function region()
    {
        return $this->hasOne(Region::class, 'id','region_id');
    }
    public function daychart()
    {
        return $this->hasMany(Daychart::class, 'tour_id','id');
    }
}
