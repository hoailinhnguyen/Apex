<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CreateCustomerRequest extends FormRequest
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
            'full_name'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'city_id'=> 'required',
            'district_id'=> 'required',
            'card_full_name'=> 'required',
            'card_number'=> 'required',
            'card_expiration_date'=> 'required',
            'card_cif'=> 'required',
            'card_limit'=> 'required',
            'account_number'=> 'required',
            'card_phone'=> 'required',
            'statement_date'=> 'required',
            'option_date'=> 'required',
            'card_type'=> 'required',
            'description'=> 'required',
        ];
    }
}
