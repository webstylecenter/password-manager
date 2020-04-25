<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\Interfaces\RepositoryInterface;

/**
 * Class CustomerRepository
 * @package App\Repositories
 */
class CustomerRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var Customer $model
     */
    protected $model;

    /**
     * CustomerRepository constructor.
     * @param Customer $model
     */
    public function __construct(Customer $model)
    {
        parent::__construct($model);

        $this->model = $model;
    }
}
