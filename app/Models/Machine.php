<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
use App\Models\Car;

class Machine extends Model
{
    use HasFactory;
    public function carOwer(){
        return $this->hasOneThrough(Owner::class, Car::class);
    }
    public function carModel(){
        return $this->hasOne( Car::class);
    }
}
