<?php

namespace App\Services;

use App\Repositories\ServerRepository;

/**
 * Class DomainService
 * @package App\Services
 */
class ServerService extends AbstractService
{
    /**
     * DomainService constructor.
     * @param ServerRepository $serverRepository
     */
    public function __construct(ServerRepository $serverRepository)
    {
        parent::__construct($serverRepository);
    }
}
