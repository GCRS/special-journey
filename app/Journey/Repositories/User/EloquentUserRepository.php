<?php

namespace App\Journey\Repositories\User;

use App\Journey\Common\Repositories\EloquentRepository;
use App\Journey\Repositories\UserRepository;
use App\User;

class EloquentUserRepository extends EloquentRepository implements UserRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
