<?php

namespace App\Repositories;

use App\Models\Domain;
use App\Repositories\Interfaces\RepositoryInterface;

/**
 * Class DomainRepository
 * @package App\Repositories
 */
class DomainRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var Domain $model
     */
    protected $model;

    /**
     * DomainRepository constructor.
     * @param Domain $model
     */
    public function __construct(Domain $model)
    {
        parent::__construct($model);

        $this->model = $model;
    }
}
