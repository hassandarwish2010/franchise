<?php

namespace App\Http\Requests\Web\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class ApplyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2|max:191',
            'email' => 'required|email|min:2|max:191',
            'details' => 'required|min:2',
            'cv' => 'required|mimes:doc,pdf,docx',
        ];
    }
}
