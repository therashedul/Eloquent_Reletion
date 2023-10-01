<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Machine;

class Car extends Model
{
    use HasFactory;
    public function machine(){
        return $this->belongsTo( Machine::class);
    }
}
