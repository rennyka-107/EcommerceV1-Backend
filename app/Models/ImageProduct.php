<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    use HasFactory;
    protected $table  = "img_products";

    public function product()
    {
        return $this->belongsTo(Product::class, 'id');
    }
}
