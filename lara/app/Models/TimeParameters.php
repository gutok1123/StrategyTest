<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeParameters extends Model
{
    use HasFactory;

    protected $connection = 'pgsql';

    protected $table = 'time_parameters';

    protected $fillable = ['time_search'];
}
