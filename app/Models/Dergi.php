<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Dergi extends Model
{
    use HasFactory;
    protected $table = "dergi";
    protected $primaryKey = 'id';
    protected $guarded = [];
}
