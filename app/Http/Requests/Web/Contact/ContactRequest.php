<?php

namespace App\Http\Requests\Web\Contact;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'details' => 'required',
        ];
    }

    /**
     * Ecpercts json
     *
     * @return true
     */
    public function expectsJson() {
      return true;
    }
}
