<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupProcedureRequest extends FormRequest
{
    public function authorize()
    {
        return auth("admin")->check();
    }

    public function rules()
    {
        return [
            'group_id' => 'required|exists:procedure_groups,id',
            'procedure_id' => 'required|exists:procedures,id',
            'price' => 'required|numeric|min:0',
        ];
    }
}

