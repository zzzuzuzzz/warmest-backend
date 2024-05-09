<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    protected $table = 'administrations';
    protected $guarded = false;
    public $timestamps = false;
}
