<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcedureRequest extends FormRequest
{
    public function authorize()
    {
        return auth("admin")->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'nullable|numeric|min:0',
//            'group_id' => 'required|string',
        ];
    }
}
