<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "birth",
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
