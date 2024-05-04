<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $fillable = ['name', 'price', 'group_id'];

    public function groups()
    {
        return $this->belongsToMany(ProcedureGroup::class, 'group_procedure', 'procedure_id',
            'group_id')
//            ->withPivot('price')
            ->withTimestamps();
    }
}
