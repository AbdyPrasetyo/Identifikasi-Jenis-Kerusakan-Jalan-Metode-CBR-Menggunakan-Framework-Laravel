<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmgCharacteristics extends Model
{
    use HasFactory;
    protected $table = 'dmg_characteristics';
    protected $primaryKey = 'characteristic_id';
    protected $fillable = ['characteristic_code','damage_characteristic'];



    public function knowledgeBases()
    {
        return $this->hasMany(KnowledgeBase::class, 'characteristic_code', 'characteristic_code');
    }

}

