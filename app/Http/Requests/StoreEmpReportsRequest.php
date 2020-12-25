<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpReportsRequest extends FormRequest
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
            'emp_id' => 'required',
            'emo_id' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'payment' => 'required',
            'hour' => 'required',
            'hour_plus' => 'required',

           'imageFile' => 'required|image',
           'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
           'notes' => 'required',
        ];
    }
}
