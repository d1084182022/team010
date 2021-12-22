<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngineType extends Model
{
    use HasFactory;
    protected $fillable=[
        'engine_type'
    ];
    public function motorcycle()
    {
        return $this->hasMany('App\Models\Motorcycle','eid');
    }

}
