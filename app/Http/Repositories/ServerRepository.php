<?php

namespace App\Repositories;

use App\Models\Server;
use App\Repositories\Interfaces\RepositoryInterface;

/**
 * Class ServerRepository
 * @package App\Repositories
 */
class ServerRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * @var Domain $model
     */
    protected $model;

    /**
     * ServerRepository constructor.
     * @param Server $model
     */
    public function __construct(Server $model)
    {
        parent::__construct($model);

        $this->model = $model;
    }
}
