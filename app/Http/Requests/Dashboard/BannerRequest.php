<?php

namespace App\Http\Requests\Dashboard;

use App\Rules\ImageValidation;
use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
        $method = $this->method();

        return [
            'name_ar'    => 'required|string|min:4|max:255',
            'name_en'    => 'required|string|min:4|max:255',
            'desc_ar'    => $this->position === 'solutions' ? 'required|string|min:4' : 'nullable',
            'desc_en'    => $this->position === 'solutions' ? 'required|string|min:4' : 'nullable',
            'position'   => 'required|in:solutions,supply',
            'sector_id'  => $this->position === 'solutions' ? 'required|exists:sectors,id' : 'nullable',
            'product_id' => $this->position === 'supply' ? 'required|exists:products,id' : 'nullable',
            'image'      => $method === 'PATCH' ? ['nullable', new ImageValidation] : ['required', new ImageValidation],
        ];
    }
}
