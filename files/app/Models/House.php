<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'houses';
    protected $guarded = false;
    public $timestamps = false;
}
