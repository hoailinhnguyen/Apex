<?php

namespace App\Transformers\Users;

use League\Fractal\TransformerAbstract;
use App\Entities\Users\User;

/**
 * Class UserTransformer.
 *
 * @package namespace App\Transformers\Users;
 */
class UserTransformer extends TransformerAbstract
{
    /**
     * Transform the User entity.
     *
     * @param  User  $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id'         =>$model->id,
            'page_id' => $model->page_id,
            'page_name' => $model->page_name,
            'messenger_id' => $model->messenger_id,
            'fb_full_name' => $model->fb_full_name,
            'user_name' => $model->user_name,
            'user_full_name' => $model->user_full_name,
            'group' => $model->group,
            'pos_group' => $model->pos_group,
            'permission' => $model->permission,
            'user_phone' => $model->user_phone,
            'province_id' => $model->province_id,
            'user_location_province' => $model->user_location_province,
            'district_id' => $model->district_id,
            'user_location_district' => $model->user_location_district,
            'address' => $model->address,
            'bank_id' => $model->bank_id,
            'user_bank_name1' => $model->user_bank_name1,
            'user_bank_account_number1' => $model->user_bank_account_number1,
            'bank_id2' => $model->bank_id2,
            'user_bank_name2' => $model->user_bank_name2,
            'user_bank_account_number2' => $model->user_bank_account_number2,
            'telegram_user_name' => $model->telegram_user_name,
            'telegram_user_id' => $model->telegram_user_id,
            'telegram_chat_id' => $model->telegram_chat_id,
            'change_pwd_1st_login' => $model->change_pwd_1st_login,
            'Verify' => $model->Verify,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
