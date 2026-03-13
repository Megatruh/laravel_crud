<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory, HasUlids;
    
    protected $keyType = 'String';
    public $incrementing = false;
    
    protected $fillable = ['species','variety', 'origin', 'roasted_level', 'process', 'stok'];
}
