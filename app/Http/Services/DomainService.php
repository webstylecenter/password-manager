<?php

namespace App\Services;

use App\Repositories\DomainRepository;

/**
 * Class DomainService
 * @package App\Services
 */
class DomainService extends AbstractService
{
    /**
     * DomainService constructor.
     * @param DomainRepository $domainRepository
     */
    public function __construct(DomainRepository $domainRepository)
    {
        parent::__construct($domainRepository);
    }
}
