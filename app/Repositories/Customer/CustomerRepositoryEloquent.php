<?php

namespace App\Repositories\Customer;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Customer\CustomerRepository;
use App\Entities\Customer\Customer;
use App\Validators\Customer\CustomerValidator;

/**
 * Class CustomerRepositoryEloquent.
 *
 * @package namespace App\Repositories\Customer;
 */
class CustomerRepositoryEloquent extends BaseRepository implements CustomerRepository
{

    protected $fieldSearchable = [
    ];
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Customer::class;
    }



    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
