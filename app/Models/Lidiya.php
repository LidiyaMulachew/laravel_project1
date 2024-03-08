<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lidiya extends Model
{
    use HasFactory;

    protected $table= "lidiyas";

    protected $fillable = [
        "first_name",
        "last_name",
        "age",
    ];
}
