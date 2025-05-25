<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Hanya field ini yang boleh di-mass-assign
    protected $fillable = ['name', 'description', 'price'];
}
