<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'comment'];
}
// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class OtherReview extends Model
// {
//     protected $fillable = ['name', 'email', 'comment'];

// }


