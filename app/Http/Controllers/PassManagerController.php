<?php

namespace App\Http\Controllers;

use App\Services\CustomerService;
use App\Services\DomainService;
use App\Services\ServerService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

/**
 * @Controller(prefix="/")
 */
class PassManagerController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected DomainService $domainService;
    protected ServerService $serverService;
    protected CustomerService $customerService;

    public function __construct(
        DomainService $domainService,
        ServerService $serverService,
        CustomerService $customerService
    )
    {
        $this->domainService = $domainService;
        $this->serverService = $serverService;
        $this->customerService = $customerService;
    }

    /**
     * @Get("/", as="homepage")
     * @return View
     */
    public function index(): View
    {
        $domains = $this->domainService->all();

        return view(
            'home',
            [
                'domains' => $domains
            ]
        );
    }

    /**
     * @Get("customers", as="customer.list")
     * @return View
     */
    public function customers(): View
    {
        $customers = $this->customerService->all();
        return view(
            'customer/list',
            [
                'customers' => $customers
            ]
        );
    }

    /**
     * @Get("servers", as="server.list")
     * @return View
     */
    public function servers(): View
    {
        $servers = $this->serverService->all();
        return view(
            'server/list',
            [
                'servers' => $servers
            ]
        );
    }

    /**
     * @Get("/server/{server}/{id}", as="server.view")
     * @return View
     */
    public function serverView(string $serverIp, int $serverId): View
    {
        $server = $this->serverService->getWith($serverId);
        return view(
            'server/view',
            [
                'server' => $server
            ]
        );
    }

    /**
     * @Get("/customer/{id}", as="customer.view")
     * @return View
     */
    public function customerView(int $customerId): View
    {
        $customer = $this->customerService->getWith($customerId);
        return view(
            'customer/view',
            [
                'customer' => $customer
            ]
        );
    }
}
