<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProcedureGroup extends Model
{
    protected $fillable = ['name'];

    public function procedures()
    {
        return $this->belongsToMany(Procedure::class, 'group_procedure', 'group_id',
            'procedure_id')
//            ->withPivot('price')
            ->withTimestamps();
    }
}


