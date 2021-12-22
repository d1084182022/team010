<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;
    protected $fillable=[
        'bid',
        'name',
        'year',
        'CC',
        'eid',
        'horsepower',
        'torque',
        'tank_capacity',
        'sitting_height',
        'price'
    ];

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand','bid','id');
    }
    public function enginetype()
    {
        return $this->belongsTo('App\Models\EngineType','eid','id');
    }
    public function scopeSenior($query)
    {
        $query->where('price', '>', 80)
            ->orderBy('price');
    }

}
