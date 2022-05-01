<?php

namespace App\Transformers;

use App\Models\User;
use Flugg\Responder\Transformers\Transformer;

class UserTransformer extends Transformer
{
    /**
     * List of available relations.
     *
     * @var string[]
     */
    protected $relations = [];

    /**
     * List of autoloaded default relations.
     *
     * @var array
     */
    protected $load = [];

    /**
     * Transform the model.
     *
     * @param
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'page_id' => $user->page_id,
            'page_name' => $user->page_name,
            'messenger_id' => $user->messenger_id,
            'fb_full_name' => $user->fb_full_name,
            'user_name' => $user->user_name,
            'user_full_name' => $user->user_full_name,
            'group' => $user->group,
            'pos_group' => $user->pos_group,
            'permission' => $user->permission,
            'user_phone' => $user->user_phone,
            'province_id' => $user->province_id,
            'user_location_province' => $user->user_location_province,
            'district_id' => $user->district_id,
            'user_location_district' => $user->user_location_district,
            'address' => $user->address,
            'bank_id' => $user->bank_id,
            'user_bank_name1' => $user->user_bank_name1,
            'user_bank_account_number1' => $user->user_bank_account_number1,
            'bank_id2' => $user->bank_id2,
            'user_bank_name2' => $user->user_bank_name2,
            'user_bank_account_number2' => $user->user_bank_account_number2,
            'telegram_user_name' => $user->telegram_user_name,
            'telegram_user_id' => $user->telegram_user_id,
            'telegram_chat_id' => $user->telegram_chat_id,
            'change_pwd_1st_login' => $user->change_pwd_1st_login,
            'Verify' => $user->Verify,
        ];
    }
}
