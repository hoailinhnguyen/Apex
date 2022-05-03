<?php

namespace App\Http\Requests\Users;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'page_id' => 'sometimes',
            'page_name' => 'sometimes',
            'messenger_id' => 'sometimes',
            'fb_full_name' => 'sometimes',
            'user_name' => 'sometimes',
            'password' => 'sometimes',
            'user_full_name' => 'sometimes',
            'group' => 'sometimes',
            'pos_group' => 'sometimes',
            'permission' => 'sometimes',
            'user_phone' => 'sometimes',
            'province_id' => 'sometimes',
            'user_location_province' => 'sometimes',
            'district_id' => 'sometimes',
            'user_location_district' => 'sometimes',
            'address' => 'sometimes',
            'bank_id' => 'sometimes',
            'user_bank_name1' => 'sometimes',
            'user_bank_account_number1' => 'sometimes',
            'bank_id2' => 'sometimes',
            'user_bank_name2' => 'sometimes',
            'user_bank_account_number2' => 'sometimes',
            'telegram_user_name' => 'sometimes',
            'telegram_user_id' => 'sometimes',
            'telegram_chat_id' => 'sometimes',
            'change_pwd_1st_login' => 'sometimes',
            'Verify' => 'sometimes',
        ];
    }
}
