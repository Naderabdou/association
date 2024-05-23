<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class OurProgramRequest extends FormRequest
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
            'name_ar' => request()->method == 'POST' ? 'required|string|min:3|unique:our_programs,name_ar' : 'required|string|unique:our_programs,name_ar,' . $this->id,
            'name_en' => request()->method == 'POST' ? 'required|string|min:3|unique:our_programs,name_en' : 'required|string|unique:our_programs,name_en,' . $this->id,
            'desc_ar' => 'required|min:3|string',
            'desc_en' => 'required|min:3|string',
            'image' =>  request()->method == 'POST' ? 'required|image|mimes:jpeg,png,jpg,svg|max:2048' : 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
        ];
    }
}
