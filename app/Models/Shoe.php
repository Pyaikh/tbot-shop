<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;

    protected $fillable = ['brand_id', 'name', 'description', 'image', 'price'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'furniture_size');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_furniture');
    }
} 