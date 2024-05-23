<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class RegulationCategoryRequest extends FormRequest
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
            'name_en' => request()->method === 'POST' ? 'required|string|max:255|unique:regulation_categories,name_en' : 'required|string|max:255|unique:regulation_categories,name_en,' . $this->id,
            'name_ar' => request()->method === 'POST' ? 'required|string|max:255|unique:regulation_categories,name_ar' : 'required|string|max:255|unique:regulation_categories,name_ar,' . $this->id,
        ];
    }
}
