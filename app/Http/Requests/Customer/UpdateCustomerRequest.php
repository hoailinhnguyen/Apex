<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
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
            'full_name'=> 'sometimes',
            'phone'=> 'sometimes',
            'address'=> 'sometimes',
            'city_id'=> 'sometimes',
            'district_id'=> 'sometimes',
            'card_full_name'=> 'sometimes',
            'card_number'=> 'sometimes',
            'card_expiration_date'=> 'sometimes',
            'card_cif'=> 'sometimes',
            'card_limit'=> 'sometimes',
            'account_number'=> 'sometimes',
            'card_phone'=> 'sometimes',
            'statement_date'=> 'sometimes',
            'option_date'=> 'sometimes',
            'card_type'=> 'sometimes',
            'description'=> 'sometimes',
        ];
    }
}
