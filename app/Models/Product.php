<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUID;

class Product extends Model
{
    use HasFactory, UUID;
    public $incrementing = false;
    protected $keyType = 'string';
}
