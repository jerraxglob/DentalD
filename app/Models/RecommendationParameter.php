<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendationParameter extends Model
{
    use HasFactory;
    protected $table = 'recommendation_parameters';
    protected $fillable = ['factor_name', 'weight'];
}
