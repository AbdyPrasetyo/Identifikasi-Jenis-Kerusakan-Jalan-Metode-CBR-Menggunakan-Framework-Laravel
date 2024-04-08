<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'historys';
    protected $primaryKey = 'historys_id';
    protected $fillable = ['users_id', 'characteristics', 'damage'];


    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
