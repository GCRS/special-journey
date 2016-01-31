<?php

namespace App\Jobs\Me\Organization;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;

use App\Journey\Repositories\UserRepository;

class GetOrganization extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(UserRepository $repository)
    {
        $user = $repository->find(app('user')->id, 'organization');
        return $user;
    }
}
