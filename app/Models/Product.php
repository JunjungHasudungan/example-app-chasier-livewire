<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    // protected $fillable = [
    //     'id', 'name', 'price', 'amount', 'category', 'description'
    // ];

    public $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
