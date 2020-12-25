<?php

namespace App\Http\Requests\FrontEnd\Mmcompany;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'email' =>'required', 'password'=>'required' ,'address'=>'required','face'=>'required' , 'google'=>'required' ,
            'twitter'=>'required' , 'insta'=>'required' , 'phone'=>'required', 'code' =>'required|integer',
            'imageFile' => 'required|image',

        ];
    }
}
