<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Requested extends Model
{
    public $timestamps = false;

    protected $table = 'requests';

    use HasFactory;
}
