<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'phone' => 'max:191',
          'email' => 'email|max:191|nullable',
          'address' => 'max:191',
          'lat' =>'numeric',
          'lon' =>'numeric',
          'facebook' => 'url|nullable',
          'twitter' => 'url|nullable',
          'googleplus' => 'url|nullable',
          'linkedin' => 'url|nullable',
        ];
    }
}
