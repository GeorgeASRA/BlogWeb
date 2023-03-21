<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'Article';
    use HasFactory;

    //Pour enlever la column extra que Laravel met
    public $timestamps = false;
}
