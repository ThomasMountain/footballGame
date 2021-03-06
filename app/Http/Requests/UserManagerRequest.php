<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserManagerRequest extends Request
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
            'first_name' => 'required',
            'surname' => 'required',
            'email' => ['required', 'email'],
            'start_date' => ['required', 'date'],
            'region' => 'required',
            'active_flag' => 'required',
            'admin_flag' => 'required',
        ];
    }
}
