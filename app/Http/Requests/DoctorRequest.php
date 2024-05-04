<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth("admin")->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'profession' => 'required|max:255',
            'category' => 'required|max:255',
            'inst' => 'required|max:255',
            "thumbnail" => 'image',
            'educations' => 'required|array',
//            'courses' => 'required|array',
        ];
    }
}
