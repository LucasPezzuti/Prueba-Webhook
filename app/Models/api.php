<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class api extends Model
{
    protected $table = 'api';
    use HasFactory;
    public $timestamps=false;
    
}