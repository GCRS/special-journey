<?php

namespace App\Journey\Repositories\User;

use App\Journey\Common\Repositories\Eloquent\EloquentRepository;
use App\Journey\Repositories\UserRepository;
use App\User;

class EloquentUserRepository extends UserRepository implements UserRepository
{
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}
