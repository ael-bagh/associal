<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pictures extends Model
{
    use HasFactory;
    public function activities()
    {
        return $this->belongsTo(activities::class);
    }
}
