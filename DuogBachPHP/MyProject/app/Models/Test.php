<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    // protected $table = "new_tests";
    // protected $primaryKey ="new_id";
    // protected $timestamps =false;

    protected $fillable = [
        "id",
        "name",
    ];

    protected $hidden = [
        "id",
    ];
}
