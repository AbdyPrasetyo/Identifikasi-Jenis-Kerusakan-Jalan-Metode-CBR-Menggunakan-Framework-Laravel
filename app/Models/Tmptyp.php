<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tmptyp extends Model
{
    use HasFactory;
    protected $table = 'tmp_types';
    protected $primaryKey = 'types_id';
    protected $fillable = ['damage_code','value'];

    public function knowledgeBases()
    {
        return $this->hasMany(KnowledgeBase::class, 'damage_code', 'damage_code');
    }
}
