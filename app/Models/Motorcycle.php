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


}
