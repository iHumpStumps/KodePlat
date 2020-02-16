<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'information' => 'required|string',
            'metal' => 'required|string|nullable',
            'buyer' => 'required|string',
            'address' => 'required|string',
            'year' => 'required|digits:4|integer|min:1901|max:2155',
            'filename' => 'required',
        ];
    }
}
