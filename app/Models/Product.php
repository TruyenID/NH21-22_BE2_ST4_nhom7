<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function manufactures()
    {
        return $this->belongsToMany(Manufactures::class);
    }
}
