<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class RegulationRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name_en' => 'required|string|min:3|max:255',
            'name_ar' => 'required|string|min:3|max:255',
            'category_id' => 'required|exists:regulation_categories,id',
            'pdf' => request()->method() === 'POST' ? 'required|mimes:pdf' : 'nullable|mimes:pdf',
        ];
    }
}
