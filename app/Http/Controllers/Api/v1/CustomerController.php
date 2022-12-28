<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Exception;

class CustomerController extends Controller
{

    public function __construct()
    {
        logger()->info("Dilanka>>>>>>>>>>>>>>>>>>>>>>.");
    }

    public function list()
    {
        $customers = Customer::get();
        return CustomerResource::collection($customers);
    }

}
