<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListProducts extends Model
{
    use HasFactory;

    protected $connection = 'oracle';
    protected $table = 'CONSINCO.MAP_PRODUTO';
}
