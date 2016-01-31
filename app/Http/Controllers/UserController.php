<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Jobs\Me\Organization\GetOrganization;

class UserController extends Controller
{
    public function getMyOrganization()
    {
        $response = $this->dispatch(new GetOrganization());
    }
}
