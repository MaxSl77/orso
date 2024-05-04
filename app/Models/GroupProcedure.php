<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupProcedure extends Model
{
    protected $table = 'group_procedure';

    protected $fillable = ['group_id', 'procedure_id'];

    public function procedure()
    {
        return $this->belongsTo(Procedure::class);
    }

    public function group()
    {
        return $this->belongsTo(ProcedureGroup::class);
    }
}

