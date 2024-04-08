<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmpcha extends Model
{
    use HasFactory;
    protected $table = 'tmp_characteristics';
    protected $primaryKey = 'tempcha_id';
    protected $fillable = ['characteristic_code','weight'];

    public function knowledgeBases()
{
    return $this->hasMany(KnowledgeBase::class, 'characteristic_code', 'characteristic_code');
}
}
