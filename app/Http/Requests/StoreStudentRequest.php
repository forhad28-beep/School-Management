<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'class_room_id' => 'required|exists:classes,id',

            'section_id' => 'required|exists:sections,id',

            'roll' => 'required',

            'name' => 'required|max:100',

            'phone' => 'required',

            'gender' => 'required',

            'father_name' => 'required',

            'mother_name' => 'required',

            'guardian_phone' => 'required',

            'admission_date' => 'required|date',

            'photo' => 'nullable|image|max:2048',

        ];
    }
}
