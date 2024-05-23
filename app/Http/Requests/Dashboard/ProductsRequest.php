<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
        // dd($this->all());

        return [
            'name_en'             => 'required',
            'name_ar'             => 'required',
            'desc_en'             => 'required',
            'desc_ar'             => 'required',
            'colors'              => 'required|array',
            'label_color'         => 'required',
            'has_discount'        => 'required|in:0,1',
            'label_en'            => 'sometimes',
            'label_ar'            => 'sometimes',
            'brand_id'            => 'required',
            'product_category_id' => 'required'
        ];
    }
}
