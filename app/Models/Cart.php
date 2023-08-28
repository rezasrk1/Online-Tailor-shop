<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id']; // Fillable fields for mass assignment

    public function user()
    {
        return $this->belongsTo(User::class); // Define the "Cart belongs to User" relationship
    }

    public function product()
    {
        return $this->belongsTo(Product::class); // Assuming you have a Product model, define the "Cart belongs to Product" relationship
    }
}
