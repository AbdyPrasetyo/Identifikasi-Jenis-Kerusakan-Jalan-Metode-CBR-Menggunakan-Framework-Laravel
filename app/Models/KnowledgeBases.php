<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KnowledgeBases extends Model
{
    use HasFactory;
    protected $table = 'knowledge_bases';
    protected $primaryKey = 'knowledge_id';
    protected $fillable = ['characteristic_code', 'damage_code','weight'];

    public function dmgCharacteristic()
    {
        return $this->belongsTo(DmgCharacteristic::class, 'characteristic_code', 'characteristic_code');
    }

    public function dmgType()
    {
        return $this->belongsTo(DmgType::class, 'damage_code', 'damage_code');
    }

}
