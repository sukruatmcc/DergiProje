<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayfa extends Model
{
    use HasFactory;
    protected $table = "reklam_type";
    protected $primaryKey = 'id';
    protected $guarded = [];
}
