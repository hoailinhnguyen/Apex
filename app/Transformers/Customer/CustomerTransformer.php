<?php

namespace App\Transformers\Customer;

use League\Fractal\TransformerAbstract;
use App\Entities\Customer\Customer;

/**
 * Class CustomerTransformer.
 *
 * @package namespace App\Transformers\Customer;
 */
class CustomerTransformer extends TransformerAbstract
{
    /**
     * Transform the Customer entity.
     *
     * @param  Customer  $model
     *
     * @return array
     */
    public function transform(Customer $model)
    {
        return [
            'id'         => (int) $model->id,
            'full_name' =>$model->full_name,
            'phone' =>$model->phone,
            'address' =>$model->address,
            'city_id' =>$model->city_id,
            'district_id' =>$model->district_id,
            'card_full_name' =>$model->card_full_name,
            'card_number' =>$model->card_number,
            'card_expiration_date' =>$model->card_expiration_date,
            'card_cif' =>$model->card_cif,
            'card_limit' =>$model->card_limit,
            'account_number' =>$model->account_number,
            'card_phone' =>$model->card_phone,
            'statement_date' =>$model->statement_date,
            'option_date' =>$model->option_date,
            'card_type' =>$model->card_type,
            'description' =>$model->description,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
