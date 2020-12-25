<?php

namespace App\Http\Requests\FrontEnd\Mission;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'name'=>'required',
             'email' =>'required',
            'phone' =>'required|digits:12',
            'message'=>'required',

        ];
    }
}
