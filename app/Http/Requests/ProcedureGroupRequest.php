<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcedureGroupRequest extends FormRequest
{
    public function authorize()
    {
        return auth("admin")->check();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
        ];
    }
}

