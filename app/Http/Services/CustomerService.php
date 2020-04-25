<?php

namespace App\Services;

use App\Repositories\CustomerRepository;

/**
 * Class DomainService
 * @package App\Services
 */
class CustomerService extends AbstractService
{
    /**
     * DomainService constructor.
     * @param CustomerRepository $customerRepository
     */
    public function __construct(CustomerRepository $customerRepository)
    {
        parent::__construct($customerRepository);
    }
}
