<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DmgTypes extends Model
{
    use HasFactory;
    protected $table = 'dmg_types';
    protected $primaryKey = 'damage_id';
    protected $fillable = ['damage_code','damage_types', 'definition', 'solutions', 'image'];

    public function knowledgeBases()
    {

        return $this->hasMany(KnowledgeBase::class, 'damage_code', 'damage_code');
    }

}
