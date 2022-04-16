<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    public $timestamps = false;
    use HasFactory;
    public function company (){
        return $this->belongsTo(User::class);
    }
}
