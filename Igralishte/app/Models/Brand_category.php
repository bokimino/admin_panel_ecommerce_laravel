<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand_category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
}
