<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
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
            'page_id' => 'nullable',
            'page_name' => 'nullable',
            'messenger_id' => 'nullable',
            'fb_full_name' => 'nullable',
            'user_name' => 'nullable',
            'password' => 'nullable',
            'user_full_name' => 'nullable',
            'group' => 'nullable',
            'pos_group' => 'nullable',
            'permission' => 'nullable',
            'user_phone' => 'nullable',
            'province_id' => 'nullable',
            'user_location_province' => 'nullable',
            'district_id' => 'nullable',
            'user_location_district' => 'nullable',
            'address' => 'nullable',
            'bank_id' => 'nullable',
            'user_bank_name1' => 'nullable',
            'user_bank_account_number1' => 'nullable',
            'bank_id2' => 'nullable',
            'user_bank_name2' => 'nullable',
            'user_bank_account_number2' => 'nullable',
            'telegram_user_name' => 'nullable',
            'telegram_user_id' => 'nullable',
            'telegram_chat_id' => 'nullable',
            'change_pwd_1st_login' => 'nullable',
            'Verify' => 'nullable',
        ];
    }

}
