<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    use HasFactory;
    protected $table = 'expert_weights';
    protected $primaryKey = 'expert_id';
    protected $fillable = ['weight'];
}
