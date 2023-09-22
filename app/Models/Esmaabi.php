<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esmaabi extends Model
{
    use HasFactory;
    protected $table = "esmaabi";
    protected $fillable = [
        'name',
        'description',
        'image',
        'visits',
    ];
}
