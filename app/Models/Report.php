<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public $timestamps = false;
    public function agreed (){
        return $this->belongsTo(Agreed::class);
    }
    use HasFactory;
}
