<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class TeamWorkRequest extends FormRequest
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
        switch (request()->method()) {
            case 'POST':

                return [
                    'image'    => 'required|image',
                    'name'  => 'required|min:3|string',
                    'role'  => 'required|min:3|string',
                ];
                break;

            case 'PUT':


                return [
                    'image'    => 'nullable|image',
                    'name'  => 'required|min:3|string',
                    'role'  => 'required|min:3|string',
                ];
                break;
        }
    }

    public function messages()
    {
        return [
            'image.image' => transWord('يجب ان يكون الصوره من نوع صوره'),

        ];
    }
}
